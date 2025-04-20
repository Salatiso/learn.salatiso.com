**LearnerFactory.php**

```php
<?php

namespace Database\Factories;

use App\Models\Learner;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LearnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Learner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(), //  Creates a User and gets its ID
            'grade_level' => $this->faker->randomElement(['R', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]),
            'date_of_birth' => $this->faker->date(),
        ];
    }
}
```
