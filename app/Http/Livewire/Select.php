<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Select extends Component
{
    public $amount;
    public $from;
    public $to;
    public $result;

    protected $rules = [
        'amount' =>'required',
        'from'  => 'required',
        'to'    => 'required'
    ];
    public function render()
    {
        $divisas = Http::get('https://api.apilayer.com/exchangerates_data/symbols?apikey=YONX2CWZzKuusFJ0OR773GZHIHT3AJ9r');
        $divisas->json();
        return view('livewire.select',['divisas'=>$divisas['symbols']]);
    }
    public function enviar(){
        $this->validate();
        $result = Http::get('https://api.apilayer.com/exchangerates_data/convert?to='.$this->to.'&from='.$this->from.'&amount='.$this->amount.'&apikey=YONX2CWZzKuusFJ0OR773GZHIHT3AJ9r');
        $result->json();
        $this->result = $result['result'];
    }
}
