<?php

namespace Database\Seeders;

use App\Models\Baju;
use App\Models\ModelBaju;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sweater = ModelBaju::create(array(
            'model'=> 'sweater'
        ));
        $oblong = ModelBaju::create(array(
            'model'=> 'sweater'
        ));

        $zara = Baju::create(array(
            'nama' => 'zara',
            'jumlah' => 5,
            'ukuran' => 5,
            'model_id' => $sweater->id,
            'user_id' => 1,
        ));
    }
}
