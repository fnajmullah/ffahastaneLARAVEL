<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Department;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Booking;
use App\Models\Feedback;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fridoon Admin',
            'email' => 'fnajmullah@gmail.com',
            'email_verfied_at' => '',
            'password' => 'fnajmullah@gmail.com',
            'role_id' => '1',
            'gender' => 'male',
            'address' => 'Zeytinburnu',
            'phone_number' => '05551526799',
            'department' => '',
            'image' => '1656219356.jpg',
            'education' => '',
            'descrition' => '',
            'remember_token' => ''
        ]);
        User::create([
            'name' => 'Azizullah Nazari',
            'email' => 'doctor@doctor.com',
            'email_verfied_at' => '',
            'password' => 'doctor@doctor.com',
            'role_id' => '2',
            'gender' => 'male',
            'address' => 'Zeytinburnu',
            'phone_number' => '05551526700',
            'department' => '',
            'image' => '1655126663.png',
            'education' => '',
            'descrition' => '',
            'remember_token' => ''
        ]);
        User::create([
            'name' => 'Faruk Kurys',
            'email' => 'patient@patient.com',
            'email_verfied_at' => '',
            'password' => 'patient@patient.com',
            'role_id' => '3',
            'gender' => 'male',
            'address' => 'Zeytinburnu',
            'phone_number' => '05551526709',
            'department' => '',
            'image' => '1655126471.png',
            'education' => '',
            'descrition' => '',
            'remember_token' => ''
        ]);

        Appointment::create(['user_id'=>'2',
        'date'=> Carbon::now()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'2',
        'date'=> Carbon::tomorrow()->format('Y-m-d')]);

        Booking::create(['user_id'=>'3','doctor_id'=>'2',
        'date'=>Carbon::today()->format('Y-m-d'),
        'time'=>'6am',
        'status'=>'0']);
        Booking::create(['user_id'=>'3','doctor_id'=>'2',
        'date'=>Carbon::tomorrow()->format('Y-m-d'),
        'time'=>'6am',
        'status'=>'0']);

        // \App\Models\User::factory(10)->create();
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'doctor']);
        Role::create(['name' => 'patient']);

        Department::create(['name' => 'Family Medicine']);
        Department::create(['name' => 'Algology']);
        Department::create(['name' => 'Alcohol and Drug Addiction']);
        Department::create(['name' => 'Anesthesiology and Reanimation']);
        Department::create(['name' => 'Brain and Nerve Surgery']);
        Department::create(['name' => 'Surgical Oncology']);
        Department::create(['name' => 'Pediatric Surgery']);
        Department::create(['name' => 'Pediatric Dentistry']);
        Department::create(['name' => 'Pediatric Endocrinology']);
        Department::create(['name' => 'Pediatric Infectious Diseases']);
        Department::create(['name' => 'Pediatric Gastroenterology']);
        Department::create(['name' => 'Pediatric Genetic Diseases']);
        Department::create(['name' => 'Pediatric Chest Diseases']);
        Department::create(['name' => 'Pediatric Hematology and Oncology']);
        Department::create(['name' => 'Pediatric Immunology and Allergy Diseases']);
        Department::create(['name' => 'Pediatric Cardiovascular Surgery']);
        Department::create(['name' => 'Pediatric Cardiology']);
        Department::create(['name' => 'Pediatric Metabolic Diseases']);
        Department::create(['name' => 'Pediatric Nephrology']);
        Department::create(['name' => 'Pediatric Neurology']);
        Department::create(['name' => 'Pediatric Rheumatology']);
        Department::create(['name' => 'Child Health and Diseases']);
        Department::create(['name' => 'Pediatric Urology']);
        Department::create(['name' => 'Child and Adolescent Substance and Alcohol Dependence']);
        Department::create(['name' => 'Child and Adolescent Mental Health and Diseases']);
        Department::create(['name' => 'Skin and Venereal Diseases (Dermatology)']);
        Department::create(['name' => 'Dentistry (General Dentistry)']);
        Department::create(['name' => 'Hand Surgery']);
        Department::create(['name' => 'Endodontics']);
        Department::create(['name' => 'Endocrinology and Metabolic Diseases']);
        Department::create(['name' => 'Infectious Diseases and Clinical Microbiology']);
        Department::create(['name' => 'Physical Medicine and Rehabilitation']);
        Department::create(['name' => 'Gastroenterology']);
        Department::create(['name' => 'Gastroenterology Surgery']);
        Department::create(['name' => 'Traditional Complementary Medicine Unit']);
        Department::create(['name' => 'Developmental Pediatrics']);
        Department::create(['name' => 'General Surgery']);
        Department::create(['name' => 'Geriatrics']);
        Department::create(['name' => 'Thoracic Surgery']);
        Department::create(['name' => 'Chest Diseases']);
        Department::create(['name' => 'Eye Diseases']);
        Department::create(['name' => 'Hematology']);
        Department::create(['name' => 'Internal Diseases (Internal Medicine)']);
        Department::create(['name' => 'Immunology and Allergy Diseases']);
        Department::create(['name' => 'Work and Occupational Diseases']);
        Department::create(['name' => 'Gynecologic Oncology Surgery']);
        Department::create(['name' => 'Gynecology and Obstetrics']);
        Department::create(['name' => 'Cardiac Surgery']);
        Department::create(['name' => 'Cardiology']);
        Department::create(['name' => 'Ear Nose Throat Disorders']);
        Department::create(['name' => 'Nephrology']);
        Department::create(['name' => 'Neonatology']);
        Department::create(['name' => 'Neurology']);
        Department::create(['name' => 'Nuclear medicine']);
        Department::create(['name' => 'Orthodontics']);
        Department::create(['name' => 'Orthopedics and Traumatology']);
        Department::create(['name' => 'Perinatology']);
        Department::create(['name' => 'Periodontology']);
        Department::create(['name' => 'Plastic, Reconstructive and Aesthetic Surgery']);
        Department::create(['name' => 'Prosthetic Dentistry']);
        Department::create(['name' => 'Radiation Oncology']);
        Department::create(['name' => 'Restorative Dentistry']);
        Department::create(['name' => 'Rheumatology']);
        Department::create(['name' => 'Mental Health and Diseases (Psychiatry)']);
        Department::create(['name' => 'Health Committee']);
        Department::create(['name' => 'Sağlık Kurulu ÇÖZGER (Çocuk Özel Gereksinim Raporu)']);
        Department::create(['name' => 'Smoking Cessation Clinic']);
        Department::create(['name' => 'Sports Medicine']);
        Department::create(['name' => 'Underwater Medicine and Hyperbaric Medicine']);
        Department::create(['name' => 'Medical Ecology and Hydroclimatology']);
        Department::create(['name' => 'Medical Genetics']);
        Department::create(['name' => 'Medical Oncology']);
        Department::create(['name' => 'Urology']);
        Department::create(['name' => 'Oral and Maxillofacial Surgery']);
        Department::create(['name' => 'Oral and Maxillofacial Radiology']);
    }
}
