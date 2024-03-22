<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::create(2024, 3, 22);
        $numRows = 50;
        for ($i = 0; $i < $numRows; $i++) {
            DB::table('todos')->insert([
                'title' => Str::random(10),
                'description' => Str::random(10),
                'completed' => false,
            ]);
        }

    }
}
