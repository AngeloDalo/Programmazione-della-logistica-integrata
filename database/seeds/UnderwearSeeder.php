<?php

use Illuminate\Database\Seeder;
use App\Underwear;
use Illuminate\Support\Str;

class UnderwearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $underwears =
        [
            [
                'name' => 'mutanda1',
                'price' => 20,
                'quantity' => 2,
                'size' => 4,
                'image' => 'uploads/mutanda1.jpg',
                'visible' => 1,
            ],
            [
                'name' => 'mutanda2',
                'price' => 30,
                'quantity' => 2,
                'size' => 4,
                'image' => 'uploads/mutanda2.jpg',
                'visible' => 1,
            ],
        ];
        foreach ($underwears as $underwear)
        {
            $newUnderwear = new Underwear();
            $newUnderwear->fill($underwear);
            $newUnderwear->slug =  Str::slug($newUnderwear->name . '-');
            $newUnderwear->save();
        }
    }
}
