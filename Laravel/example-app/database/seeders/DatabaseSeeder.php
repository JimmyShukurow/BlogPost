<?php

namespace Database\Seeders;

use App\Models\CommentModel;
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
        CommentModel::factory()->count(10)->create();

    }
}
