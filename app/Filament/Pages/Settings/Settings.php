<?php

namespace App\Filament\Pages\Settings;

use Closure;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\FileUpload;
use Outerweb\FilamentSettings\Filament\Pages\Settings as BaseSettings;

class Settings extends BaseSettings
{
    public function schema(): array|Closure
    {
        return [
            Tabs::make('Settings')
                ->schema([
                    Tabs\Tab::make('General')
                        ->schema([
                            Section::make('Site Information')
                                ->schema([
                                    FileUpload::make('site.logo')
                                        ->label('Site Logo')
                                        ->image()
                                        ->imageEditor()
                                        ->imageCropAspectRatio('3:1')
                                        ->directory('site-logos')
                                        ->visibility('public')
                                        ->maxSize(2048) // 2MB
                                        ->helperText('Upload your site logo (recommended: 300x100px or similar ratio). Maximum file size: 2MB.')
                                        ->columnSpanFull(),
                                    TextInput::make('site.name')
                                        ->label('Site Name')
                                        ->required(),
                                    TextInput::make('site.tagline')
                                        ->label('Site Tagline')
                                        ->required(),
                                    Textarea::make('site.description')
                                        ->label('Site Description')
                                        ->rows(3)
                                        ->required(),
                                ]),
                            Section::make('Hero Section')
                                ->schema([
                                    TextInput::make('hero.title')
                                        ->label('Hero Title')
                                        ->required(),
                                    Textarea::make('hero.subtitle')
                                        ->label('Hero Subtitle')
                                        ->rows(3)
                                        ->required(),
                                    FileUpload::make('hero.image')
                                        ->label('Hero Image')
                                        ->image()
                                        ->imageEditor()
                                        ->imageCropAspectRatio('16:9')
                                        ->directory('hero-images')
                                        ->visibility('public')
                                        ->maxSize(5120) // 5MB
                                        ->helperText('Upload a high-quality image (recommended: 1920x1080 or larger). Maximum file size: 5MB.')
                                        ->required(),
                                ]),
                        ]),
                    
                    Tabs\Tab::make('Contact Information')
                        ->schema([
                            Section::make('Address')
                                ->schema([
                                    Grid::make(2)
                                        ->schema([
                                            TextInput::make('contact.address.street')
                                                ->label('Street Address')
                                                ->required(),
                                            TextInput::make('contact.address.city')
                                                ->label('City')
                                                ->required(),
                                        ]),
                                    Grid::make(3)
                                        ->schema([
                                            TextInput::make('contact.address.state')
                                                ->label('State')
                                                ->required(),
                                            TextInput::make('contact.address.zip')
                                                ->label('ZIP Code')
                                                ->required(),
                                            TextInput::make('contact.address.country')
                                                ->label('Country')
                                                ->required(),
                                        ]),
                                ]),
                            
                            Section::make('Phone Numbers')
                                ->schema([
                                    Grid::make(3)
                                        ->schema([
                                            TextInput::make('contact.phone.main')
                                                ->label('Main Office')
                                                ->required(),
                                            TextInput::make('contact.phone.emergency')
                                                ->label('Emergency')
                                                ->required(),
                                            TextInput::make('contact.phone.fax')
                                                ->label('Fax'),
                                        ]),
                                ]),
                            
                            Section::make('Email Addresses')
                                ->schema([
                                    Grid::make(3)
                                        ->schema([
                                            TextInput::make('contact.email.general')
                                                ->label('General Email')
                                                ->email()
                                                ->required(),
                                            TextInput::make('contact.email.appointments')
                                                ->label('Appointments Email')
                                                ->email()
                                                ->required(),
                                            TextInput::make('contact.email.billing')
                                                ->label('Billing Email')
                                                ->email()
                                                ->required(),
                                        ]),
                                    Grid::make(1)
                                        ->schema([
                                            TextInput::make('contact.email.admin')
                                                ->label('Admin Email (for contact form notifications)')
                                                ->email()
                                                ->required()
                                                ->helperText('This email will receive notifications when someone submits the contact form.'),
                                        ]),
                                ]),
                        ]),
                    
                    Tabs\Tab::make('Office Hours')
                        ->schema([
                            Section::make('Business Hours')
                                ->schema([
                                    Grid::make(2)
                                        ->schema([
                                            TextInput::make('contact.hours.monday_friday')
                                                ->label('Monday - Friday')
                                                ->required(),
                                            TextInput::make('contact.hours.saturday')
                                                ->label('Saturday')
                                                ->required(),
                                        ]),
                                    Grid::make(2)
                                        ->schema([
                                            TextInput::make('contact.hours.sunday')
                                                ->label('Sunday')
                                                ->required(),
                                            TextInput::make('contact.hours.holidays')
                                                ->label('Holidays')
                                                ->required(),
                                        ]),
                                ]),
                        ]),
                    
                    Tabs\Tab::make('Location')
                        ->schema([
                            Section::make('Location Details')
                                ->schema([
                                    TextInput::make('contact.location.parking')
                                        ->label('Parking Information')
                                        ->required(),
                                    TextInput::make('contact.location.accessibility')
                                        ->label('Accessibility Information')
                                        ->required(),
                                    TextInput::make('contact.location.public_transit')
                                        ->label('Public Transit Information')
                                        ->required(),
                                    TextInput::make('contact.location.map_embed')
                                        ->label('Google Maps Embed URL')
                                        ->url()
                                        ->required(),
                                ]),
                        ]),
                    
                    Tabs\Tab::make('About')
                        ->schema([
                            Section::make('About Information')
                                ->schema([
                                    Textarea::make('about.mission')
                                        ->label('Mission Statement')
                                        ->rows(4)
                                        ->required(),
                                    Textarea::make('about.vision')
                                        ->label('Vision Statement')
                                        ->rows(4)
                                        ->required(),
                                ]),
                        ]),
                    
                    // FAQ tab removed - FAQs are now managed through separate FAQ resource
                    
                                         Tabs\Tab::make('Emergency')
                         ->schema([
                             Section::make('Emergency Information')
                                 ->schema([
                                     TextInput::make('emergency.title')
                                         ->label('Emergency Title')
                                         ->required(),
                                     Textarea::make('emergency.description')
                                         ->label('Emergency Description')
                                         ->rows(3)
                                         ->required(),
                                     Textarea::make('emergency.note')
                                         ->label('Emergency Note')
                                         ->rows(2)
                                         ->required(),
                                 ]),
                         ]),
                     
                     Tabs\Tab::make('Content')
                         ->schema([
                             Section::make('COVID-19 Information')
                                 ->schema([
                                     Grid::make(2)
                                         ->schema([
                                             TextInput::make('covid.guidelines.title')
                                                 ->label('Guidelines Title')
                                                 ->required(),
                                             TextInput::make('covid.vaccine.title')
                                                 ->label('Vaccine Title')
                                                 ->required(),
                                         ]),
                                     Grid::make(2)
                                         ->schema([
                                             Textarea::make('covid.guidelines.description')
                                                 ->label('Guidelines Description')
                                                 ->rows(3)
                                                 ->required(),
                                             Textarea::make('covid.vaccine.description')
                                                 ->label('Vaccine Description')
                                                 ->rows(3)
                                                 ->required(),
                                         ]),
                                 ]),
                             
                             Section::make('About Section')
                                 ->schema([
                                     TextInput::make('about.section.title')
                                         ->label('About Section Title')
                                         ->required(),
                                     Textarea::make('about.section.description')
                                         ->label('About Section Description')
                                         ->rows(3)
                                         ->required(),
                                 ]),
                             
                             Section::make('About Features')
                                 ->schema([
                                     Grid::make(3)
                                         ->schema([
                                             TextInput::make('about.features.comprehensive.title')
                                                 ->label('Comprehensive Care Title')
                                                 ->required(),
                                             TextInput::make('about.features.patient_centered.title')
                                                 ->label('Patient-Centered Title')
                                                 ->required(),
                                             TextInput::make('about.features.convenient.title')
                                                 ->label('Convenient Access Title')
                                                 ->required(),
                                         ]),
                                     Grid::make(3)
                                         ->schema([
                                             Textarea::make('about.features.comprehensive.description')
                                                 ->label('Comprehensive Care Description')
                                                 ->rows(2)
                                                 ->required(),
                                             Textarea::make('about.features.patient_centered.description')
                                                 ->label('Patient-Centered Description')
                                                 ->rows(2)
                                                 ->required(),
                                             Textarea::make('about.features.convenient.description')
                                                 ->label('Convenient Access Description')
                                                 ->rows(2)
                                                 ->required(),
                                         ]),
                                 ]),
                             
                             Section::make('Services Section')
                                 ->schema([
                                     TextInput::make('services.section.title')
                                         ->label('Services Section Title')
                                         ->required(),
                                     Textarea::make('services.section.description')
                                         ->label('Services Section Description')
                                         ->rows(3)
                                         ->required(),
                                 ]),
                             
                             Section::make('Team Section')
                                 ->schema([
                                     TextInput::make('team.section.title')
                                         ->label('Team Section Title')
                                         ->required(),
                                     Textarea::make('team.section.description')
                                         ->label('Team Section Description')
                                         ->rows(3)
                                         ->required(),
                                 ]),
                             
                             Section::make('Contact Section')
                                 ->schema([
                                     TextInput::make('contact.section.title')
                                         ->label('Contact Section Title')
                                         ->required(),
                                     Textarea::make('contact.section.description')
                                         ->label('Contact Section Description')
                                         ->rows(3)
                                         ->required(),
                                     TextInput::make('contact.form.title')
                                         ->label('Contact Form Title')
                                         ->required(),
                                 ]),
                             
                             Section::make('History/Timeline')
                                 ->schema([
                                     TextInput::make('history.section.title')
                                         ->label('History Section Title')
                                         ->required(),
                                     Textarea::make('history.section.description')
                                         ->label('History Section Description')
                                         ->rows(3)
                                         ->required(),
                                 ]),
                             
                             Section::make('Timeline Events')
                                 ->schema([
                                     Grid::make(3)
                                         ->schema([
                                             TextInput::make('history.timeline.2018.title')
                                                 ->label('2018 Title')
                                                 ->required(),
                                             TextInput::make('history.timeline.2020.title')
                                                 ->label('2020 Title')
                                                 ->required(),
                                             TextInput::make('history.timeline.2024.title')
                                                 ->label('2024 Title')
                                                 ->required(),
                                         ]),
                                     Grid::make(3)
                                         ->schema([
                                             Textarea::make('history.timeline.2018.description')
                                                 ->label('2018 Description')
                                                 ->rows(2)
                                                 ->required(),
                                             Textarea::make('history.timeline.2020.description')
                                                 ->label('2020 Description')
                                                 ->rows(2)
                                                 ->required(),
                                             Textarea::make('history.timeline.2024.description')
                                                 ->label('2024 Description')
                                                 ->rows(2)
                                                 ->required(),
                                         ]),
                                 ]),
                             
                             Section::make('About Page')
                                 ->schema([
                                     TextInput::make('about.page.title')
                                         ->label('About Page Title')
                                         ->required(),
                                     Textarea::make('about.page.description')
                                         ->label('About Page Description')
                                         ->rows(3)
                                         ->required(),
                                     TextInput::make('about.team.image.title')
                                         ->label('Team Image Title')
                                         ->required(),
                                     Textarea::make('about.team.image.description')
                                         ->label('Team Image Description')
                                         ->rows(2)
                                         ->required(),
                                 ]),
                         ]),
                ]),
        ];
    }
} 