<?php

use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //MONITORING
        DB::table('tm_module')->insert([
            'name' => 'Dashboard',
            'description' => 'Module',
            'icon' => 'fa fa-dashboard',
            'order' => '1'
        ]);

        DB::table('tm_module')->insert([
            'name' => 'Administrator',
            'description' => 'Module',
            'icon' => 'fa fa-users',
            'order' => '2'
        ]);

        DB::table('tm_module')->insert([
            'name' => 'Master Data',
            'description' => 'Module',
            'icon' => 'fa fa-tasks',
            'order' => '3'
        ]);
    }
}
