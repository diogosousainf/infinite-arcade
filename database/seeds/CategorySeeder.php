<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('categories')->insert([
            'name' => 'Action',
            'description' => 'Games that emphasize physical challenges, including hand–eye coordination and reaction-time.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Adventure',
            'description' => 'Games that emphasize puzzle solving, item collecting, and story.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Role-Playing',
            'description' => 'Games that emphasize character development and story.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Simulation',
            'description' => 'Games that emphasize realism and management.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Strategy',
            'description' => 'Games that emphasize planning and decision-making.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
