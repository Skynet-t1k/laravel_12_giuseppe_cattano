<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tags = [
            ['name' => 'News'],
            ['name' => 'Technology'],
            ['name' => 'Science'],
            ['name' => 'Fashion'],
            ['name' => 'Health'],
            ['name' => 'Travel'],
            ['name' => 'Food'],
            ['name' => 'Lifestyle'],
            ['name' => 'Education'],
            ['name' => 'Entertainment'],
            ['name' => 'Sports'],
            ['name' => 'Business'],
            ['name' => 'Finance'],
            ['name' => 'Environment'],
            ['name' => 'Politics'],
            ['name' => 'Culture'],
            ['name' => 'Art'],
            ['name' => 'Music'],
            ['name' => 'Movies'],
            ['name' => 'Photography'],
        ];

        DB::table('tags')->insert($tags);
    }
}
