@props([
'type' => 'submit',
'size' => 'block'
])
<button {{ $attributes->merge(['type' => $type, 'class' => "btn btn-success btn-$size mb-4 py-3 px-4"]) }}>
      {{ $slot }}
</button>