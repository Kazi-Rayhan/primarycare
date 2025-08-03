<?php

namespace App\Helpers;

use Datlechin\FilamentMenuBuilder\Models\Menu;

class MenuHelper
{
    public static function renderMenu(string $location): ?string
    {
        $menu = Menu::location($location);
        
        if (!$menu) {
            return null;
        }

        return view('components.dynamic-menu', compact('menu'))->render();
    }

    public static function getMenu(string $location): ?Menu
    {
        return Menu::location($location);
    }
} 