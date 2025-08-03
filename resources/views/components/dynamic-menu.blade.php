@if($menu && $menu->menuItems->count() > 0)
    <ul class="menu-items">
        @foreach($menu->menuItems as $item)
            <li class="menu-item {{ $item->children && $item->children->count() > 0 ? 'has-children' : '' }}">
                <a href="{{ $item->url }}" 
                   class="menu-link {{ request()->url() === $item->url ? 'active' : '' }}"
                   @if($item->open_in_new_tab) target="_blank" rel="noopener noreferrer" @endif>
                    <span>{{ $item->title }}</span>
                </a>
                
                @if($item->children && $item->children->count() > 0)
                    <ul class="submenu">
                        @foreach($item->children as $child)
                            <li class="submenu-item">
                                <a href="{{ $child->url }}" 
                                   class="submenu-link {{ request()->url() === $child->url ? 'active' : '' }}"
                                   @if($child->open_in_new_tab) target="_blank" rel="noopener noreferrer" @endif>
                                    <span>{{ $child->title }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
@endif 