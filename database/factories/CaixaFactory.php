<?php

namespace Database\Factories;

use App\Models\Caixa;
use Illuminate\Database\Eloquent\Factories\Factory;

class CaixaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Caixa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CPF_na_nota' => $this->faker->text(maxNbChars: 11),
            'desconto' => $this->faker->randomFloat(24.4),
            'valor_total'=> $this->faker->randomFloat(24.4),
            'valor_total_desconto' => $this->faker->randomFloat(24.4),
            'dt_inicio' => $this->faker->dateTime(),
            'dt_fim' => $this->faker->dateTime(),
        ];
    }
}
