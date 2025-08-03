<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FAQ;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'How do I schedule an appointment?',
                'answer' => 'You can schedule an appointment by calling us at (555) 123-4567, using our online booking system, or by filling out the contact form above. We typically respond within 24 hours.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'Do you accept insurance?',
                'answer' => 'Yes, we accept most major insurance plans. Please contact our office to verify your specific insurance coverage before your appointment.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'What should I bring to my first appointment?',
                'answer' => 'Please bring your ID, insurance card, list of current medications, and any relevant medical records. New patients should arrive 15 minutes early to complete paperwork.',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Do you offer telehealth appointments?',
                'answer' => 'Yes, we offer telehealth appointments for many types of visits. Please call us to determine if your appointment type is suitable for telehealth.',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'What are your office hours?',
                'answer' => 'Our office hours are Monday-Friday 8:00 AM - 6:00 PM, Saturday 9:00 AM - 2:00 PM, and we are closed on Sundays and holidays.',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'question' => 'How do I request a prescription refill?',
                'answer' => 'You can request prescription refills by calling our office, using our patient portal, or by having your pharmacy send us a refill request. Please allow 24-48 hours for processing.',
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            FAQ::create($faq);
        }
    }
}
