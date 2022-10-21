<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
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
        \App\Models\User::factory(10)->create();
        
        \App\Models\User::find(1)->update([
            'status' => 'admin',
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $cities = [ 
            'Almaty', 
            'Astana', 
            'Semey', 
            'Kokshetau', 
            'Aktobe', 
            'Oskemen', 
            'Taraz', 
            'Taldykorgan', 
            'Karaganda', 
            'Kostanay',
        ];

        City::factory(count($cities))->create();

        $id = 0;
        foreach ($cities as $city) {

            $id++;

            $item = City::where('id', $id)->update([
                'city' => $city,
            ]);
        }
    }
}
