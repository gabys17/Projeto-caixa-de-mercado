<?php

namespace Database\Seeders;

use App\Models\Caixa;
use Illuminate\Database\Seeder;

class CaixaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caixa::factory()->times(10)->create();
    }
}
