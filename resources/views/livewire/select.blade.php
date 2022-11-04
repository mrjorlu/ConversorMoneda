<div class="grid grid-cols-2">
    <x-toast-component class="mb-4" :errors="$errors" />
    <div class="grid grid-cols-3">
        <div class="mr-1">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="Cantidad">{{ __('Amount') }}</label>
            <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="number" wire:model="amount">
        </div>
        <div class="mr-1 col-span-1">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="from">{{ __('From') }}</label>
            <select wire:model='from' class="w-full h-10 rounded">
                <option value="">{{ __('Select a option')}}</option>
                @foreach ($divisas as $key=>$symbol)
                    <option value="{{$key}}"> {{ $key }} - {{ $symbol }}</option>
                @endforeach
            </select>
        </div>
        <div class="mr-1">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="to">{{ __('To') }}</label>
            <select wire:model="to" class="w-full h-10 rounded">
                <option value="">{{ __('Select a option')}}</option>
                @foreach ($divisas as $key=>$symbol)
                    <option value="{{$key}}"> {{ $key }} - {{ $symbol }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="grid grid-cols-3">
        <div class="mt-6 col-span-1">
            <button wire:click="enviar" class="w-full rounded-full bg-blue-600 p-2 hover:bg-blue-800 text-white">{{ __('Convert') }}</button>
        </div>
        @isset($result)
        <div class="col-span-2 ml-4">
            <label for="text" class="w-full flex">{{ $amount }} {{ $from }} =</label>
            <p class="text-[40px] lg:text-[45px] xl:text-[55px] font-bold leading-tight "> {{ $result }} {{ $to }} </p>
        </div>
        @endisset
    </div>
</div>