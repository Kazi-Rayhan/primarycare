<?php

namespace Database\Seeders;

use Datlechin\FilamentMenuBuilder\Models\Menu;
use Datlechin\FilamentMenuBuilder\Models\MenuLocation;
use Datlechin\FilamentMenuBuilder\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Header Menu
        $headerMenu = Menu::create([
            'name' => 'Header Navigation',
            'is_visible' => true,
        ]);

        // Assign header menu to header location
        MenuLocation::create([
            'menu_id' => $headerMenu->id,
            'location' => 'header',
        ]);

        // Create header menu items
        $headerItems = [
            [
                'title' => 'Home',
                'url' => route('home'),
                'order' => 1,
            ],
            [
                'title' => 'About Us',
                'url' => route('about'),
                'order' => 2,
            ],
            [
                'title' => 'Services',
                'url' => '#services',
                'order' => 3,
            ],
            [
                'title' => 'Patient Resources',
                'url' => '#resources',
                'order' => 4,
            ],
            [
                'title' => 'Contact',
                'url' => route('contact'),
                'order' => 5,
            ],
        ];

        foreach ($headerItems as $item) {
            MenuItem::create([
                'menu_id' => $headerMenu->id,
                'title' => $item['title'],
                'url' => $item['url'],
                'order' => $item['order'],
            ]);
        }

        // Create Mobile Menu
        $mobileMenu = Menu::create([
            'name' => 'Mobile Navigation',
            'is_visible' => true,
        ]);

        // Assign mobile menu to mobile location
        MenuLocation::create([
            'menu_id' => $mobileMenu->id,
            'location' => 'mobile',
        ]);

        // Create mobile menu items (same as header for now)
        foreach ($headerItems as $item) {
            MenuItem::create([
                'menu_id' => $mobileMenu->id,
                'title' => $item['title'],
                'url' => $item['url'],
                'order' => $item['order'],
            ]);
        }

        // Create Footer Menu
        $footerMenu = Menu::create([
            'name' => 'Footer Navigation',
            'is_visible' => true,
        ]);

        // Assign footer menu to footer location
        MenuLocation::create([
            'menu_id' => $footerMenu->id,
            'location' => 'footer',
        ]);

        // Create footer menu items
        $footerItems = [
            [
                'title' => 'Services',
                'url' => '#services',
                'order' => 1,
            ],
            [
                'title' => 'Our Team',
                'url' => '#team',
                'order' => 2,
            ],
            [
                'title' => 'Patient Resources',
                'url' => '#resources',
                'order' => 3,
            ],
            [
                'title' => 'Contact',
                'url' => '#contact',
                'order' => 4,
            ],
        ];

        foreach ($footerItems as $item) {
            MenuItem::create([
                'menu_id' => $footerMenu->id,
                'title' => $item['title'],
                'url' => $item['url'],
                'order' => $item['order'],
            ]);
        }
    }
}
