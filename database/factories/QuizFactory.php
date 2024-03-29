<?php

namespace Database\Factories;
use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuizFactory extends Factory
{  
         
    protected $model = Quiz::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(rand(3,7)),
            'description'=>$this->faker->text(100)
        ];
    }
}
