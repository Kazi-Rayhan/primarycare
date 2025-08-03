<?php

namespace Database\Seeders;

use App\Models\PatientResource;
use Illuminate\Database\Seeder;

class PatientResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $resources = [
            [
                'title' => 'Patient Forms',
                'content' => '<h2>New Patient Forms</h2><p>Please complete these forms before your first visit to help us provide you with the best care possible. This helps us understand your medical history and current health status.</p><h3>Required Forms</h3><ul><li><strong>Patient Registration Form</strong> - Basic contact and demographic information</li><li><strong>Medical History Form</strong> - Complete medical history and current medications</li><li><strong>Insurance Information Form</strong> - Insurance details and policy information</li><li><strong>HIPAA Consent Form</strong> - Privacy and information sharing preferences</li></ul><blockquote><p><em>Note: Please bring a photo ID and your insurance card to your first appointment. If you have any questions about these forms, please call our office.</em></p></blockquote>',
                'resource_type' => 'page',
                'slug' => 'patient-forms',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Insurance & Fees',
                'content' => '<h2>Insurance Information</h2><p>We accept most major insurance plans. Please contact our office to verify your coverage before your appointment. Understanding your insurance benefits helps avoid unexpected costs.</p><h3>Accepted Insurance Plans</h3><ul><li><strong>Blue Cross Blue Shield</strong> - All major BCBS plans</li><li><strong>Aetna</strong> - Commercial and Medicare Advantage plans</li><li><strong>Cigna</strong> - Individual and group plans</li><li><strong>UnitedHealthcare</strong> - Commercial and Medicare plans</li><li><strong>Medicare</strong> - Original Medicare and Medicare Advantage</li><li><strong>Medicaid</strong> - State Medicaid programs</li></ul><h3>Self-Pay Options</h3><p>We offer competitive self-pay rates for patients without insurance. Our transparent pricing ensures you know the cost upfront.</p><blockquote><p><em>Important: Insurance coverage can change throughout the year. We recommend verifying your benefits before each visit, especially if you\'ve recently changed plans or employers.</em></p></blockquote><h4>Payment Options</h4><ul><li>Cash, check, or credit card</li><li>Payment plans available for larger balances</li><li>Online payment portal coming soon</li></ul>',
                'resource_type' => 'page',
                'slug' => 'insurance-fees',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Become a Patient',
                'content' => '<h2>How to Become a Patient</h2><p>We welcome new patients! Here\'s how to get started:</p><ol><li>Call our office to schedule your first appointment</li><li>Complete the new patient forms (available online or in our office)</li><li>Bring your insurance card and photo ID to your first visit</li><li>Arrive 15 minutes early to complete any remaining paperwork</li></ol><p>We look forward to being your healthcare partner!</p>',
                'resource_type' => 'page',
                'slug' => 'become-a-patient',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'HIPAA Privacy',
                'content' => '<h2>HIPAA Privacy Notice</h2><p>Your privacy is important to us. This notice describes how medical information about you may be used and disclosed and how you can get access to this information.</p><h3>Your Rights</h3><ul><li>Right to inspect and copy your medical records</li><li>Right to request amendments to your medical records</li><li>Right to receive an accounting of disclosures</li><li>Right to request restrictions on certain uses and disclosures</li><li>Right to request confidential communications</li></ul><p>For more information about our privacy practices, please contact our office.</p>',
                'resource_type' => 'page',
                'slug' => 'hipaa-privacy',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'COVID-19 Information',
                'content' => '<h2>COVID-19 Updates</h2><p>We are committed to providing safe care during the COVID-19 pandemic.</p><h3>Safety Measures</h3><ul><li>Enhanced cleaning protocols</li><li>Mask requirements for all patients and staff</li><li>Social distancing in waiting areas</li><li>Telehealth appointments available</li></ul><h3>Vaccination</h3><p>We offer COVID-19 vaccinations for eligible patients. Please call our office to schedule your vaccination appointment.</p>',
                'resource_type' => 'page',
                'slug' => 'covid-19-info',
                'sort_order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($resources as $resource) {
            PatientResource::create($resource);
        }
    }
}
