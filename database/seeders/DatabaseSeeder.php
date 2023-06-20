<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
        Including dummy data for Models -> User
        cmd - php artisan make:seeder UserTableSeeder
        migration - table complition for users
        use models>User in UserTableSeeder
        database seeder calling the UserTableSeeder
        cmd - php artisan db:seed
        cmd - php artisan migrate:fresh --seed
        user factory for changes in db table 
        */
        
        $this->call([UserTableSeeder::class]);
        
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
