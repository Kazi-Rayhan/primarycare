<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// No facade needed, using helper function

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contact Information
        setting(['contact.address.street' => '123 Main Street']);
        setting(['contact.address.city' => 'City']);
        setting(['contact.address.state' => 'State']);
        setting(['contact.address.zip' => '12345']);
        setting(['contact.address.country' => 'United States']);
        
        setting(['contact.phone.main' => '(555) 123-4567']);
        setting(['contact.phone.emergency' => '(555) 911-0000']);
        setting(['contact.phone.fax' => '(555) 123-4568']);
        
        setting(['contact.email.general' => 'info@primarycareclinic.com']);
        setting(['contact.email.appointments' => 'appointments@primarycareclinic.com']);
        setting(['contact.email.billing' => 'billing@primarycareclinic.com']);
        setting(['contact.email.admin' => 'admin@primarycareclinic.com']);
        
        // Office Hours
        setting(['contact.hours.monday_friday' => '8:00 AM - 6:00 PM']);
        setting(['contact.hours.saturday' => '9:00 AM - 2:00 PM']);
        setting(['contact.hours.sunday' => 'Closed']);
        setting(['contact.hours.holidays' => 'Closed (call for emergency)']);
        
        // Location Information
        setting(['contact.location.parking' => 'Free parking available in front of the building']);
        setting(['contact.location.accessibility' => 'Wheelchair accessible entrance and facilities']);
        setting(['contact.location.public_transit' => 'Bus routes 15, 23, and 45 stop nearby']);
        setting(['contact.location.map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.4685894148215!2d90.34812327408235!3d22.710818227892624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37553535680490d1%3A0x72ca830e6c94a34b!2sSohojware!5e0!3m2!1sen!2sbd!4v1754223193244!5m2!1sen!2sbd']);
        
        // Site Information
        setting(['site.name' => 'Primary Care Clinic']);
        setting(['site.tagline' => 'Local Doctors Who Care']);
        setting(['site.description' => 'Comprehensive primary care services for you and your family. We\'re here to keep you healthy and provide the care you deserve.']);
        
        // Hero Section
        setting(['hero.title' => 'Local Doctors Who Care']);
        setting(['hero.subtitle' => 'Comprehensive primary care services for you and your family. We\'re here to keep you healthy and provide the care you deserve.']);
        setting(['hero.image' => 'hero-images/default-hero.jpg']);
        
        // About Section
        setting(['about.mission' => 'At Primary Care Clinic, we believe that everyone deserves access to high-quality, personalized healthcare. Our mission is to provide comprehensive primary care services that promote health, prevent illness, and support our community\'s well-being.']);
        setting(['about.vision' => 'We are committed to building lasting relationships with our patients, understanding their unique health needs, and working together to achieve optimal health outcomes.']);
        
                        // FAQ Section - Now managed through separate FAQ table
        
        // Emergency Information
        setting(['emergency.title' => 'Emergency Care']);
        setting(['emergency.description' => 'For medical emergencies, please call 911 or go to the nearest emergency room immediately.']);
        setting(['emergency.note' => 'Our clinic is not equipped for emergency care outside of regular business hours.']);
        
        // COVID-19 Information
        setting(['covid.guidelines.title' => 'COVID-19 Guidelines']);
        setting(['covid.guidelines.description' => 'Stay informed about our latest COVID-19 protocols and safety measures to keep our patients and staff safe.']);
        setting(['covid.vaccine.title' => 'COVID-19 Vaccine Information']);
        setting(['covid.vaccine.description' => 'Learn about vaccine availability, scheduling, and important information for our patients.']);
        
        // About Section Content
        setting(['about.section.title' => 'About Primary Care Clinic']);
        setting(['about.section.description' => 'We are a team of dedicated healthcare professionals committed to providing personalized, compassionate care to our community.']);
        setting(['about.features.comprehensive.title' => 'Comprehensive Care']);
        setting(['about.features.comprehensive.description' => 'From routine checkups to chronic disease management, we provide complete primary care services.']);
        setting(['about.features.patient_centered.title' => 'Patient-Centered']);
        setting(['about.features.patient_centered.description' => 'We listen to your concerns and work with you to develop personalized treatment plans.']);
        setting(['about.features.convenient.title' => 'Convenient Access']);
        setting(['about.features.convenient.description' => 'Easy scheduling, telehealth options, and extended hours to fit your busy lifestyle.']);
        
        // Services Section Content
        setting(['services.section.title' => 'Our Services']);
        setting(['services.section.description' => 'We offer a comprehensive range of primary care services to meet your health needs.']);
        
        // Team Section Content
        setting(['team.section.title' => 'Meet Our Team']);
        setting(['team.section.description' => 'Our experienced healthcare professionals are dedicated to providing you with the best possible care.']);
        
        // Contact Section Content
        setting(['contact.section.title' => 'Contact Us']);
        setting(['contact.section.description' => 'Ready to schedule an appointment? Get in touch with us today.']);
        setting(['contact.form.title' => 'Send Us a Message']);
        
        // History/Timeline Content
        setting(['history.section.title' => 'Our Story']);
        setting(['history.section.description' => 'Founded with a vision to provide accessible, high-quality healthcare to our community.']);
        setting(['history.timeline.2018.title' => '2018']);
        setting(['history.timeline.2018.description' => 'Founded with a small team of dedicated healthcare professionals']);
        setting(['history.timeline.2020.title' => '2020']);
        setting(['history.timeline.2020.description' => 'Expanded services and added telehealth capabilities']);
        setting(['history.timeline.2024.title' => '2024']);
        setting(['history.timeline.2024.description' => 'Leading primary care provider serving thousands of patients']);
        
        // About Page Content
        setting(['about.page.title' => 'About Our Clinic']);
        setting(['about.page.description' => 'Dedicated to providing exceptional primary care services with compassion, expertise, and a commitment to your health and well-being.']);
        setting(['about.team.image.title' => 'Our Team']);
        setting(['about.team.image.description' => 'Dedicated healthcare professionals committed to your health']);
    }
}
