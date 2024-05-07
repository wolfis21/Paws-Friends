<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $permissions= DB::table('permissions')->insertGetId([
            'name' => 'vetsadmin',
            'created_at' => now(), 
            'updated_at' => now(), 
        ]);

        $rols= DB::table('rols')->insertGetId([
            'name' => 'admin',
            'created_at' => now(), 
            'updated_at' => now(), 
        ]);
        
        DB::table('rols')->insertGetId([ //por defect customer creado 
            'name' => 'customer',
            'created_at' => now(), 
            'updated_at' => now(), 
        ]);

        DB::table('permissions_rols')->insert([
                'permission_id' => $permissions,
                'rol_id' => $rols,
                'created_at' => now(), 
                'updated_at' => now(), 
            ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'last_name' => 'global',
            'dni' => '12345',
            'phone' => '12345',
            'address' => 'Sin direccion',
            'photo_user' => 'null',
            'email'=> 'admin@admin.com',
            'last_name' => 'amin',
            'dni' => 'amin',
            'phone' => 'amin',
            'address' => 'amin',
            'photo_user' => 'amin',
            'email'=> 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin12345'), // Cifrado la contraseña usando Bcrypt
            'rols_id' => $rols,
            'remember_token' => Str::random(10),
            'created_at' => now(), 
            'updated_at' => now(), 
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'last_name' => 'global',
            'dni' => 'global',
            'phone' => 'global',
            'address' => 'global',
            'photo_user' => 'global',
            'email'=> 'user@user.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'), // Cifrado la contraseña usando Bcrypt
            'rols_id' => '2',
            'remember_token' => Str::random(10),
            'created_at' => now(), 
            'updated_at' => now(), 
        ]);

       /*  $this->call(RolsSeeder::class); */
    }
}
