<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use HasFactory;

class EmployeeFactory extends Factory
{

    protected $model = Employee::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'username' => $this->faker->username(),
            'date_of_birth' => "1995-08-24",
            'hiring_date' => now(),
            'status' => $this->faker->randomElement([0,1]),
            'country' => $this->faker->randomElement(['Colombia', 'México', 'Argentina', 'Perú', 'Bolivia', 'Uruguay', 'Brasil', 'Paraguay']),
            'area' => $this->faker->randomElement(['Tecnología','Administrativa']),
            'current_position' => $this->faker->randomElement(['Programador','Fundador y CEO','Recursos humanos']),
            'commission' => $this->faker->randomElement([20,10]),
        ];
    }
}