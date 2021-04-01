<?php

namespace Database\Factories;

use App\Models\company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'name' => $this->faker->company,
            'email' => $this->faker->unique()->safeEmail,
			'telephone1'=>$this->faker->phoneNumber,
			'telephone2'=>$this->faker->phoneNumber,
			'mobile'=>$this->faker->phoneNumber,
			'Address'=>$this->faker->address,
			'description'=>$this->faker->text,
			'services'=>$this->faker->text,
			'percentage_D'=>rand(0,10),
			'percentage_C'=>rand(0,10),



        ];
    }
}
