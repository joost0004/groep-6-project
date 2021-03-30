<?php

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'voorletters' => $this->faker->word(),
            'voornaam' => $this->faker->firstName(),
            'geslacht' => $this->faker->title(),
            'adres' => $this->faker->city(),
            'postcode' => $this->faker->postcode(),
            'gemeente' => $this->faker->state(),
            'regio' => $this->faker->country(),
            'verwijzer' => $this->faker->name(),
            'volwassen' => true
        ];
    }
}
