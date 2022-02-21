<?php

namespace Database\Seeders;

use App\Models\CommentModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        CommentModel::factory()->count(10)->create();

    }
}
