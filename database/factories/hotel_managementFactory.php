<?php

namespace Database\Factories;

use App\Models\hotel_management;
use Illuminate\Database\Eloquent\Factories\Factory;

class hotel_managementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = hotel_management::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hotel_name' => $this->faker->word,
        'address' => $this->faker->word,
        'date_time_of_checkin' => $this->faker->date('Y-m-d H:i:s'),
        'date_time_of_checkout' => $this->faker->date('Y-m-d H:i:s'),
        'room_price' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
