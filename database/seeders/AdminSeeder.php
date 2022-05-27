<?php

namespace Database\Seeders;

use App\Models\Filiere;
use App\Models\Module;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       User::create([
           'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'Admin',
           ]);

        User::create([
            'name' => 'Amechnoue',
            'email' => 'kamechnoue@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'Teacher',
        ]);

        User::create([
            'name' => 'Maouen',
            'email' => 'Maouen@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'Teacher',
        ]);

        User::create([
            'name' => 'amami',
            'email' => 'amamiyassir@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'Student',
        ]);
        User::create([
            'name' => 'atyq',
            'email' => 'amineatyq@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'Student',
        ]);
        User::create([
            'name' => 'abassi',
            'email' => 'abassiyasser@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'Student',
        ]);
        User::create([
            'name' => 'belkentaoui',
            'email' => 'belkentaouiomar@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'Student',
        ]);
        User::create([
            'name' => 'amaati',
            'email' => 'amaatizakaria@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'Student',
        ]);
        User::create([
            'name' => 'mesaouiri',
            'email' => 'mesaouiribilal@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'Student',
        ]);
        User::create([
            'name' => 'khabar',
            'email' => 'khabarachraf@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'Student',
        ]);

        Filiere::create([
            'designation' => 'GINF01',
        ]);
        Filiere::create([
            'designation' => 'GSTR01',
        ]);
        Module::create([
            'designation' => 'PHP',
            'filiere_id' => 1,
        ]);
        Module::create([
            'designation' => 'GraphTheory',
            'filiere_id' => 2,
        ]);

        Teacher::create([
            'firstName' => 'Khalid',
            'lastName' => 'Amechnou',
            'module_id' => 1,
            'user_id' => 2,
        ]);
        Teacher::create([
            'firstName' => 'nsit',
            'lastName' => 'Maouen',
            'module_id' => 2,
            'user_id' => 3,
        ]);
        Student::create([
            'firstName' => 'yassir',
            'lastName' => 'amami',
            'code_ap' => 19000,
            'admissionNumber' => '000000',
            'filiere_id' => 1,
            'user_id' => 4,
        ]);
        Student::create([
            'firstName' => 'amine',
            'lastName' => 'atyq',
            'code_ap' => 19001,
            'admissionNumber' => '000001',
            'filiere_id' => 1,
            'user_id' => 5,
        ]);
        Student::create([
            'firstName' => 'yasser',
            'lastName' => 'abassi',
            'code_ap' => 19002,
            'admissionNumber' => '000002',
            'filiere_id' => 1,
            'user_id' => 6,
        ]);
        Student::create([
            'firstName' => 'omar',
            'lastName' => 'belkentaoui',
            'code_ap' => 19003,
            'admissionNumber' => '000003',
            'filiere_id' => 1,
            'user_id' => 7,
        ]);
        Student::create([
            'firstName' => 'zakaria',
            'lastName' => 'amaati',
            'code_ap' => 19005,
            'admissionNumber' => '000004',
            'filiere_id' => 1,
            'user_id' => 8,
        ]);

        Student::create([
            'firstName' => 'bilal',
            'lastName' => 'msaouiri',
            'code_ap' => 19005,
            'admissionNumber' => '000005',
            'filiere_id' => 1,
            'user_id' => 9,
        ]);
        Student::create([
            'firstName' => 'achraf',
            'lastName' => 'khabar',
            'code_ap' => 19006,
            'admissionNumber' => '000006',
            'filiere_id' => 1,
            'user_id' => 10,
        ]);

    }


}
