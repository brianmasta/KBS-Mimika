<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Keluarga>
 */
class KeluargaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'id' => $faker->uuid(),
            'name' => $faker->name(),
            'alamat' => $faker->address(),
            'asal_jemaat' => $faker->company(),
            'rayon_id' => Arr::random(['1','2','3','4','5']),
            'provinsi' => $faker->city(),
            'kabupaten' => $faker->state(),
            'distrik' => $faker->citySuffix(),
            'kelurahan' => $faker->streetName(),
            'rt' => Arr::random(['1','2','3','4','5']),
            'pos' => $faker->postcode(),
            'hp' => $faker->phoneNumber(),
        ];
    }
}
