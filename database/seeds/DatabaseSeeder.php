<?php

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
        $this->call(CategorySeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(TransfersSeeder::class);
        $this->call(adminSeeder::class);
            $this->call(dogmanagersSeeder::class);
            $this->call(orderSeeder::class);
            $this->call(sliderSeeder::class);
            $this->call(timelineSeeder::class);
    }
}
