<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aspect;

class AspectsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        echo "-------------------\n";
        echo "Begin - AspectsTableSeeder\n";

        Aspect::factory(1000)->create();

        echo "-------------------\n";
        echo "Created 1000 aspects in total.\n";

        echo "End - AspectsTableSeeder\n";
        echo "-------------------\n";
    }
}
