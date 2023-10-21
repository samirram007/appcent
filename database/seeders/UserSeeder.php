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
        'name' => '1K',
        'amount' => 1000,
        'description' => '  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo excepturi hic '
       ]);
       Package::create([
        'name' => '3K',
        'amount' => 3000,
        'description' => '  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo excepturi hic '
       ]);
       Package::create([
        'name' => '5K',
        'amount' => 5000,
        'description' => '  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo excepturi hic '
       ]);
    }
}
