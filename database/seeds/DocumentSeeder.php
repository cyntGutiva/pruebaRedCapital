<?php

use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('America/Santiago');
        DB::table('documents')->insert([
        	'ndocument'		=>	'88978561',
        	'archive'		=>	'public/3MZzL3A9aZvgUfEra8HJ7dRVyqjWczXO9CosgLwd.pdf',
        	'description'	=>	'documento de prueba',
        	'created_at'	=>	date('Y-m-d G:i:s'),
            'updated_at'    =>  date('Y-m-d G:i:s'),
        ]);
    }
}
