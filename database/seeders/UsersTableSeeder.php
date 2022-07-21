<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Aspect;
use App\Models\UserAspect;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        echo "-------------------\n";
        echo "Begin - UsersTableSeeder\n";

        $aspects = Aspect::all();

        echo "Prepare to insert 1000 000 users.\n";
        for ($i = 0; $i < 100000; $i++) {
            $users = User::factory(10)->create();
            $userCount = ($i + 1) * 10;
            echo "Already created $userCount users.\n";

            $userAspects = [];

            $users->each(function ($user) use ($aspects, &$userAspects) {
                $aspects->each(function ($aspect) use (&$userAspects, $user) {
                    $userAspects[] = [
                        'user_id' => $user->id,
                        'aspect_id' => $aspect->id,
                    ];
                });
            });

            $now = Carbon::now();
            $data = [];
            foreach ($userAspects as $userAspect) {
                $data[] = array_merge($userAspect, [
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }

            UserAspect::insert($data);

            $userAspectsCount = ($i + 1) * 1000;

            echo "Already created $userAspectsCount user aspects.\n";

            // cleanup
            unset($users);
            unset($userAspects);
            unset($data);
        }

        echo "Created 1000, 000 user aspects in total.\n";

        echo "End - UsersTableSeeder\n";
        echo "-------------------\n";
    }
}
