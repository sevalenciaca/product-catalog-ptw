@props(['color'=>'green'])
<div class="py-2 px-3 rounded shadow mb-5 bg-{{ $color }}-200 text-{{ $color }}-700 w-1/2 mx-auto">{{ $slot }}</div>