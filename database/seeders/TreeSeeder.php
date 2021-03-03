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
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fringilla quis ante in auctor. Praesent porta, risus at mollis fringilla, lectus nunc tempus massa, nec porttitor augue eros non eros. In suscipit massa at ultricies venenatis. Aenean nec suscipit risus. Donec sed tempus leo. Maecenas convallis enim eget ultrices interdum. Nulla euismod lacus justo, a egestas orci luctus efficitur. Pellentesque ac nisi tempor, sodales nunc rutrum, lacinia magna. Ut eget placerat velit. Proin imperdiet leo risus, at aliquam nisl tincidunt in. Nullam et laoreet nisi.'
        ]);
    }
}
