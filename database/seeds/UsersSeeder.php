<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('America/Santiago');
        DB::table('users')->insert([
        	'username'		=>	'cynt.gutierrez',
        	'name'			=>	'Cynthia',
        	'lastname'		=>	'Gutierrez',
        	'email'			=>	'cynthiagutierrezvargas@gmail.com',
        	'phone'			=>	'944855210',
        	'password'		=>	bcrypt('asd123'),
        	'created_at'	=>	date('Y-m-d G:i:s'),
            'updated_at'    =>  date('Y-m-d G:i:s'),
        ]);

        DB::table('users')->insert([
        	'username'		=>	'jav.ramirez',
        	'name'			=>	'Javier',
        	'lastname'		=>	'Ramirez',
        	'email'			=>	'jramirez@gmail.com',
        	'phone'			=>	'944867952',
        	'password'		=>	bcrypt('asd123'),
        	'created_at'	=>	date('Y-m-d G:i:s'),
            'updated_at'    =>  date('Y-m-d G:i:s'),
        ]);

        DB::table('users')->insert([
        	'username'		=>	'admin',
        	'name'			=>	'Administrador',
        	'lastname'		=>	'',
        	'email'			=>	'adminLaravel@gmail.com',
        	'phone'			=>	'000000000',
        	'password'		=>	bcrypt('admin'),
        	'created_at'	=>	date('Y-m-d G:i:s'),
            'updated_at'    =>  date('Y-m-d G:i:s'),
        ]);
    }
}
