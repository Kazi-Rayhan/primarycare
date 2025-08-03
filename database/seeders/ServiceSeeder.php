<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Primary Care',
                'description' => 'Comprehensive primary care services for individuals and families of all ages. We provide routine checkups, preventive care, and ongoing health management to keep you and your family healthy.',
                'icon' => 'heroicon-o-heart',
                'slug' => 'primary-care',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Wellness Checkups',
                'description' => 'Annual physical exams and wellness screenings to monitor your health and catch potential issues early. Our comprehensive checkups include vital signs, lab work, and health assessments.',
                'icon' => 'heroicon-o-clipboard-document-check',
                'slug' => 'wellness-checkups',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Chronic Disease Management',
                'description' => 'Ongoing care and monitoring for chronic conditions such as diabetes, hypertension, asthma, and heart disease. We work with you to develop personalized treatment plans.',
                'icon' => 'heroicon-o-chart-bar',
                'slug' => 'chronic-disease-management',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Vaccinations',
                'description' => 'Comprehensive vaccination services for children and adults, including flu shots, COVID-19 vaccines, and routine immunizations. We follow CDC guidelines for all vaccinations.',
                'icon' => 'heroicon-o-shield-check',
                'slug' => 'vaccinations',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Telehealth',
                'description' => 'Virtual consultations for non-emergency care, follow-up appointments, and medication management. Our secure telehealth platform allows you to receive care from the comfort of your home.',
                'icon' => 'heroicon-o-video-camera',
                'slug' => 'telehealth',
                'sort_order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
