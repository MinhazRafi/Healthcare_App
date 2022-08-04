<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::factory()->create([
            'admin_name' => 'Riad',
            'admin_email' => 'riadkowser@gmail.com',
            'admin_password' => md5('987655'),
            'admin_phone' => '01555555599',
        ]);
        
    }
}
