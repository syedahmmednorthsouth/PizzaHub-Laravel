<?php

namespace Database\Seeders;

use App\Models\Pizza;
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
        // \App\Models\User::factory(10)->create();
        Pizza::create([
            'name' => 'plain cheese',
            'description' => 'Tomato base, mozzarella and oreganoTomato base, mozzarella and oregano',
            'small_pizza_price'=> 10,
            'medium_pizza_price'=> 11,
            'large_pizza_price'=> 12,
            'category' => 'Non vegetaraian',
            'image' => 'public/pizza/gCkP7K9ZpeflRlvPIEXIy6uZbI3yMBum1FYnYRtv.jpg',
        ]);
        Pizza::create([
            'name' => 'plain cheese12',
            'description' => 'Tomato base, mozzarella and oreganoTomato base, mozzarella and oregano',
            'small_pizza_price'=> 11,
            'medium_pizza_price'=> 12,
            'large_pizza_price'=> 14,
            'category' => 'Non vegetaraian',
            'image' => 'public/pizza/9OVu8mYfQJt4zuxSvsK0Kpqcc5de8KieUyLbHCA0.jpg',
        ]);
    }
}
