<?php

use Illuminate\Database\Seeder;

class Activity_GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity_group')->insert(
           [
              'name' => 'ENSINO'  
           ]            
        );
        
        DB::table('activity_group')->insert(
           [
              'name' => 'PESQUISA'  
           ]            
        );
        
        DB::table('activity_group')->insert(
           [
              'name' => 'EXTENSÃO'  
           ]            
        );
        
        DB::table('activity_group')->insert(
           [
              'name' => 'REPRESENTAÇÃO'  
           ]            
        );
    }
}
