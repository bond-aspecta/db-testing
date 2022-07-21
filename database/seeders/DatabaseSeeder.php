<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ini_set('memory_limit', '2048M');
        DB::disableQueryLog();

        $this->call([
            AspectsTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
