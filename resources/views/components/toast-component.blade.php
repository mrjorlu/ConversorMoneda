@props(['errors'])

@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="absolute bottom-0 right-0">
    <div class="max-w-xs bg-white border rounded-md shadow-lg dark:bg-red-800 dark:border-red-700" role="alert">
      <div class="p-2 sm:p-4">
        <h3 class="text-xs text-red-800 font-semibold sm:text-base dark:text-white">
          {{ $error }}
        </h3>
      </div>
    </div>
</div>
@endforeach
@endif
