<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Package::create([
        'name' => 'Yearly',
        'amount' => 2000,
        'description' => '  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo excepturi hic '
       ]);
    }
}
