@props([
'icon' => 'mdi-database-check',
'noChild' => true,
'hr' => false,
'hasRoute' => true,
'routeName' => 'dashboard',
'text' => 'Nav link'
])
<li class="{{ route($routeName)==url()->current() ? 'active' : '' }}">
      <a class="sidenav-item-link" href="{{ $hasRoute ? route($routeName) : $routeName }}">
            @if ($noChild)
            <i class="mdi {{ $icon }}"></i>
            @endif
            <span class="nav-text" title="{{ ucwords($text) }}">{{ ucwords($text) }}</span>
      </a>
      @if ($hr)
      <hr>
      @endif
</li>