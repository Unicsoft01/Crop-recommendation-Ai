@props([
'type' => 'button',
'hasRoute' => true,
'routeName' => 'dashboard',
'size' => 'block'
])
<a {{ $attributes->merge(['type' => $type, 'class' => "btn btn-success btn-$size mb-4 py-3 px-4"]) }} href="{{ $hasRoute ? route($routeName) : $routeName }}">
      {{ $slot }}
</a>