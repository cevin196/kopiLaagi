<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Menu::class;
    public function definition()
    {
        $jenis = array(
            'Minuman',
            'Makanan',
            'Makanan Penutup',
            'Kopi'
        );
        $key = array_rand($jenis);


        return [
            'nama' => $this->faker->word(),
            'deskripsi' => $this->faker->text($maxNbChars = 100),
            'harga' => $this->faker->numberBetween($min = 15000, $max = 100000),
            'jenis' => $jenis[$key],
            'gambar' => $this->faker->text($maxNbChars = 200)
        ];
    }
}