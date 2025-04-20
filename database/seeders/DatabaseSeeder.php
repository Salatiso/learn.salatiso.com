**1.  DatabaseSeeder.php**

This is the main seeder class that Laravel provides. You can use it to control the order in which other seeders are run.

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Run other seeders here
         $this->call([
             UsersTableSeeder::class,
             SubjectsTableSeeder::class,
             CurriculaTableSeeder::class,
             LessonsTableSeeder::class,
             AssessmentsTableSeeder::class,
             LearnersTableSeeder::class
         ]);
    }
}
```

**2.  Example Seeder: UsersTableSeeder.php**

You would create a seeder class like this to populate your `users` table.

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert a default user
        DB::table('users')->insert([
            'name' => 'System Administrator',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Use Laravel's Hash::make()
            'user_type' => 'parent',
            'location' => 'South Africa',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // You can add more users here, or use a factory
    }
}
```
