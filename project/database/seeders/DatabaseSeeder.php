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

        DB::table('permissions_rols')->insert([
                'permission_id' => $permissions,
                'rol_id' => $rols,
                'created_at' => now(), 
                'updated_at' => now(), 
            ]);

        $data = DB::table('datas_users')->insertGetId([
            'name' => 'admin',
            'last_name' => 'global',
            'dni' => '12345',
            'phone' => '12345',
            'address' => 'Sin direccion',
            'photo_user' => 'null',
            'created_at' => now(), 
            'updated_at' => now(), 
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email'=> 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin12345'), // Cifrado la contraseña usando Bcrypt
            'rols_id' => $rols,
            'datas_users_id' => $data,
            'remember_token' => Str::random(10),
            'created_at' => now(), 
            'updated_at' => now(), 
        ]);

        $this->call(RolsSeeder::class);
    }
}
