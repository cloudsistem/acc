<?php

use Illuminate\Database\Seeder;

class ScoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('score')->insert(
           [
              'name' => 'PARTICIPAÇÃO'  
           ]            
        );
        
        DB::table('score')->insert(
           [
              'name' => 'SEMESTRE'  
           ]            
        );
        
        DB::table('score')->insert(
           [
              'name' => 'ATIVIDADE'  
           ]            
        );
        
        DB::table('score')->insert(
           [
              'name' => 'PUBLICAÇÃO'  
           ]            
        );
        
        DB::table('score')->insert(
           [
              'name' => 'CURSO'  
           ]            
        );
        
        DB::table('score')->insert(
           [
              'name' => 'GESTÃO'  
           ]            
        );
        
    }
}
