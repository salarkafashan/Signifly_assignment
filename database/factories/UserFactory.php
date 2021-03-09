<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'role_id' => Role::all('id')->random(),
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'education' => $this->faker->randomElement(['Bachelor of Software Engineering', 'Bachelor of Art', 'Master of Science', 'Master of Graphic']),
            'skills' => $this->faker->randomElement(['Laravel','vue.js','html5','css3','react.js','photoshop','vector design']),
            'description' =>$this->faker->realText(100),
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'work_experience' => $this->faker->numberBetween(1, 10),
            'profile_photo_path' => $this->faker->randomElement(['/User_image/1.jpg','/User_image/2.jpg','/User_image/3.jpg','/User_image/4.jpg','/User_image/5.jpg','/User_image/6.jpg']),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
