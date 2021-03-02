<?php

namespace Database\Seeders;

use App\Models\Log;
use Illuminate\Database\Seeder;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Log::create([
            'log' => 'De wilg staat er goed bij! Af en toe treurig, maar vooral blij als zij een knot in heeft.',
            'tree_id' => 1,
            'type' => 'ziek'
        ]);
    }
}
