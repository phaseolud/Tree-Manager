<?php

namespace Database\Seeders;

use App\Models\Tree;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Database\Seeder;

class TreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tree::create([
            'name' => 'Wilg',
            'name_latin' => 'Salix Alba',
            'rootstock' => 'Berk',
            'planting_date' => Carbon::create('2020', '01', '01'),
            'origin_from' => 'de bomenkweker',
            'bloom_start_week' => 10,
            'bloom_end_week' => 11,
            'harvest_start_week' => 15,
            'harvest_end_week' => 20,
        ]);
    }
}
