<?php

namespace Database\Factories;

use App\Models\Quarter;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientViewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quarter_id' => Quarter::inRandomOrder()->first()->id,
            'user_id'=> User::all()->random()->id,
            'clientView' =>$this->faker->paragraph(5)
        ];
    }
}
