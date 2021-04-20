<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->text(maxNbChars: 60),
            'valor' => $this->faker->randomFloat(14.4),
            'código'=> $this->faker->text(maxNbChars:15),
            'imagem' => $this->faker->text(maxNbChars:255),
            'estoque' => $this->faker->randomNumber(),
            'marca_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
