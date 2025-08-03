<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $providers = [
            [
                'name' => 'Dr. Jane Smith, MD',
                'title' => 'Board-certified Family Physician',
                'specialty' => 'Family Medicine',
                'bio' => 'Dr. Jane Smith is a board-certified family physician with over 15 years of experience in primary care. She specializes in preventive medicine, chronic disease management, and women\'s health. Dr. Smith is committed to providing compassionate, patient-centered care to individuals and families of all ages.',
     
                'email' => 'dr.smith@primarycareclinic.com',
                'phone' => '(555) 123-4567',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'John Doe, PA-C',
                'title' => 'Physician Assistant, Women\'s Health',
                'specialty' => 'Women\'s Health',
                'bio' => 'John Doe is a certified physician assistant specializing in women\'s health and primary care. With extensive experience in gynecological care, family planning, and preventive health services, John provides comprehensive care for women of all ages in a comfortable and supportive environment.',
   
                'email' => 'john.doe@primarycareclinic.com',
                'phone' => '(555) 123-4568',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Mary Lee, NP',
                'title' => 'Nurse Practitioner, Pediatrics',
                'specialty' => 'Pediatrics',
                'bio' => 'Mary Lee is a board-certified nurse practitioner with specialized training in pediatric care. She has over 10 years of experience working with children and adolescents, providing well-child visits, immunizations, sick visits, and developmental screenings. Mary is passionate about helping families navigate their children\'s health journey.',
                 'email' => 'mary.lee@primarycareclinic.com',
                'phone' => '(555) 123-4569',
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($providers as $provider) {
            Provider::create($provider);
        }
    }
}
