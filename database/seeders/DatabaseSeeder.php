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
            'email_verified_at' => null,
            'password' => bcrypt('fnajmullah@gmail.com'),
            'role_id' => '1',
            'gender' => 'male',
            'address' => 'Zeytinburnu',
            'phone_number' => '05551526799',
            'department' => '',
            'image' => '1656219356.jpg',
            'education' => '',
            'description' => '',
            'remember_token' => ''
        ]);
        User::create([
            'name' => 'Azizullah Nazari',
            'email' => 'doctor@doctor.com',
            'email_verified_at' => null,
            'password' => bcrypt('doctor@doctor.com'),
            'role_id' => '2',
            'gender' => 'male',
            'address' => 'Zeytinburnu',
            'phone_number' => '05551526700',
            'department' => 'Family Medicine ',
            'image' => '1655126663.png',
            'education' => '',
            'description' => '',
            'remember_token' => ''
        ]);
        
        
        User::create([
            'name' => 'Prof. Ayşe Dilek DOĞU',
            'email' => 'addogu@iuc.edu.tr',
            'email_verified_at' => null,
            'password' => bcrypt('addogu@iuc.edu.tr'),
            'role_id' => '2',
            'gender' => 'female',
            'address' => 'İ.Ü.C. ORMAN FAKÜLTESİ ORMAN ENDÜSTRİ MÜH.BÖL., 34473 BAHÇEKÖY-SARIYER/ISTANBUL',
            'phone_number' => '+902123382400',
            'department' => 'Faculty Of Forest',
            'image' => 'aysedilekdogu.jpg',
            'education' => 'Doctorate',
            'description' => 'Istanbul University, Institute Of Graduate Studies In Sciences, Orman Endüstri Mühendisliği Anabilim Dalı / Orman Biyolojisi Ve Odun Koruma Teknolojisi Programı, Turkey',
            'remember_token' => ''
        ]);






        User::create([
            'name' => 'Prof. MATEM TUNÇDEMİR',
            'email' => 'tmatem@iuc.edu.tr',
            'email_verified_at' => null,
            'password' => bcrypt('tmatem@iuc.edu.tr'),
            'role_id' => '2',
            'gender' => 'male',
            'address' => 'İstanbul Üniversitesi-Cerrahpaşa, Cerrahpaşa Tıp Fakültesi Temel Tıp Bilimleri Bölüm Başkanlığı Kat:2 Fatih-İSTANBUL',
            'phone_number' => '+902124143000',
            'department' => 'Cerrahpasa Faculty Of Medicine',
            'image' => 'matem.jpg',
            'education' => 'Doctorate',
            'description' => 'Istanbul University, Cerrahpaşa Tıp Fakültesi, Tıbbi Biyoloji, Turkey',
            'remember_token' => ''
        ]);

User::create([
            'name' => 'Prof. Özlem SAÇAN',
            'email' => 'osacan@iuc.edu.tr',
            'email_verified_at' => null,
            'password' => bcrypt('osacan@iuc.edu.tr'),
            'role_id' => '2',
            'gender' => 'female',
            'address' => 'Fatih',
            'phone_number' => '+90 212 473 7180',
            'department' => 'Department Of Biochemistry',
            'image' => 'ozlem.jpg',
            'education' => 'Doctorate',
            'description' => 'Istanbul University, Fen Bilimleri, Kimya/Biyokimya, Turkey',
            'remember_token' => ''
        ]);

        User::create([
            'name' => 'Lect. CEREN ÇAĞLAR',
            'email' => 'ceren.caglar@iuc.edu.tr',
            'email_verified_at' => null,
            'password' => bcrypt('ceren.caglar@iuc.edu.tr'),
            'role_id' => '2',
            'gender' => 'female',
            'address' => 'Zeytinburnu',
            'phone_number' => '+90 212 473 7180',
            'department' => 'Department Of Computer Technologies,',
            'image' => 'ceren.jpg',
            'education' => 'Postgraduate',
            'description' => 'Istanbul University, Institute Of Graduate Studies In Sciences, Informatics Department, Turkey',
            'remember_token' => ''
        ]);

        User::create([
            'name' => 'Asst. Prof. FATMA DİĞDEM TUNCER',
            'email' => 'fdigdemt@iuc.edu.tr',
            'email_verified_at' => null,
            'password' => bcrypt('fdigdemt@iuc.edu.tr'),
            'role_id' => '2',
            'gender' => 'female',
            'address' => 'Irmak Binasi',
            'phone_number' => '+90 212 338 2400',
            'department' => 'Department Of Forest Biology And Wood Protection Technology',
            'image' => 'fatma.jpg',
            'education' => 'Doctorate',
            'description' => 'İstanbul University-Cerrahpaşa, Institute Of Graduate Education, Department Of Forest Industry Engineering, Turkey',
            'remember_token' => ''
        ]);

        User::create([
            'name' => 'Res. Asst. Mustafa Fatih ERGİN',
            'email' => 'mfergin@iuc.edu.tr',
            'email_verified_at' => null,
            'password' => bcrypt('mfergin@iuc.edu.tr'),
            'role_id' => '2',
            'gender' => 'male',
            'address' => 'Avcilar',
            'phone_number' => '+90 212 473 7070',
            'department' => 'Department Of Process And Reactor Design',
            'image' => 'fatih.jpg',
            'education' => 'Post Doctorate',
            'description' => 'İstanbul Üniversitesi, Mühendislik Fakültesi, Kimya Mühendisliği, Proses ve Reaktör Tasarımı ABD, Avcılar/İstanbul',
            'remember_token' => ''
        ]);

        User::create([
            'name' => 'Res. Asst. CENK DAĞLIOĞLU',
            'email' => 'cenk.daglioglu@iuc.edu.tr',
            'email_verified_at' => null,
            'password' => bcrypt('cenk.daglioglu@iuc.edu.tr'),
            'role_id' => '2',
            'gender' => 'male',
            'address' => 'Avcilar',
            'phone_number' => '+90 212 473 7070',
            'department' => 'Department Of Medical Biochemistry',
            'image' => 'genel.png',
            'education' => 'Graduate',
            'description' => 'Avcılar/İstanbul',
            'remember_token' => ''
        ]);


        User::create([
            'name' => 'Faruk Kurys',
            'email' => 'patient@patient.com',
            'email_verified_at' => null,
            'password' => bcrypt('patient@patient.com'),
            'role_id' => '3',
            'gender' => 'male',
            'address' => 'Zeytinburnu',
            'phone_number' => '05551526709',
            'department' => '',
            'image' => '1655126471.png',
            'education' => '',
            'description' => '',
            'remember_token' => ''
        ]);
        Appointment::create(['user_id'=>'2','date'=> Carbon::now()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'2','date'=> Carbon::tomorrow()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'3','date'=> Carbon::now()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'3','date'=> Carbon::tomorrow()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'4','date'=> Carbon::now()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'4','date'=> Carbon::tomorrow()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'5','date'=> Carbon::now()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'5','date'=> Carbon::tomorrow()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'6','date'=> Carbon::now()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'6','date'=> Carbon::tomorrow()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'7','date'=> Carbon::now()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'7','date'=> Carbon::tomorrow()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'8','date'=> Carbon::now()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'8','date'=> Carbon::tomorrow()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'9','date'=> Carbon::now()->format('Y-m-d')]);
        Appointment::create(['user_id'=>'9','date'=> Carbon::tomorrow()->format('Y-m-d')]);

        Booking::create(['user_id'=>'10','doctor_id'=>'2','date'=>Carbon::today()->format('Y-m-d'),'time'=>'6am','status'=>'0']);
        Booking::create(['user_id'=>'10','doctor_id'=>'4','date'=>Carbon::tomorrow()->format('Y-m-d'),'time'=>'6am','status'=>'0']);

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
