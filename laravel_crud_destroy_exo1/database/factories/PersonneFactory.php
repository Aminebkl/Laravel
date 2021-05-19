<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Personne;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personne::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->lastName(),
            "prenom" => $this->faker->firstName(),
            "dateDeNaissance" => $this->faker->date("Y-m-d", "now"),
            "genre" => $this->faker->title(),
        ];
    }
}
