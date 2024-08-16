@props([
'icon' => 'mdi-database-check',
'hr' => false,
'text' => 'Nav link'
])

<li class="has-sub">
      <a class="sidenav-item-link" href="javascript:void(0)">
            <i class="mdi {{ $icon }}"></i>
            <span class="nav-text" title="{{ ucwords($text) }}">{{ ucwords($text) }}</span> <b class="caret"></b>
      </a>
      <div class="collapse">
            <ul class="sub-menu" id="{{ $text }}" data-parent="#sidebar-menu">
                  {{ $slot }}
            </ul>
      </div>
      @if ($hr)
      <hr>
      @endif
</li>