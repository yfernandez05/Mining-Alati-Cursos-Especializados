@php
    $submenuLabel = $submenuLabel ?? 'Nombre submenu';
    $submenuUrl = $submenuUrl ?? '#';
@endphp
<li><a class="dropdown-item" href="{{ asset($submenuUrl) }}">{{ $submenuLabel }}</a></li>