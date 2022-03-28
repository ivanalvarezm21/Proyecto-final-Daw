<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $admin = \App\Models\User::create([
            'id' => 1,
            'name'  =>  'admin',
            'email' => 'admin@admin.com',
            'password'  => bcrypt('admin'),
        ]);
        $admin->assignRole('admin');
        \App\Models\User::factory(9)->create();
    
        $users = \App\Models\User::all();

        foreach($users as $user){
            $user->assignRole('guest');
        }

        \App\Models\Coches::create(['id'=>1, 'marca'=>'Volkswagen', 'modelo'=>'Golf', 'version'=>'GTI', 'combustible'=>'gasolina', 'potencia'=>'250CV', 'precio'=>'20000€']);
        \App\Models\Coches::create(['id'=>2, 'marca'=>'Renault', 'modelo'=>'Megane', 'version'=>'RS', 'combustible'=>'gasolina', 'potencia'=>'220CV', 'precio'=>'7000€']);
        \App\Models\Coches::create(['id'=>3, 'marca'=>'Peugeot', 'modelo'=>'207', 'version'=>'GTI', 'combustible'=>'gasolina', 'potencia'=>'280CV', 'precio'=>'10500€']);
        \App\Models\Coches::create(['id'=>4, 'marca'=>'Mercedes', 'modelo'=>'220E', 'version'=>'V6', 'combustible'=>'gasolina', 'potencia'=>'253CV', 'precio'=>'8000€']);
        \App\Models\Coches::create(['id'=>5, 'marca'=>'BMW', 'modelo'=>'318', 'version'=>'Gran Turismo', 'combustible'=>'diésel', 'potencia'=>'150CV', 'precio'=>'14000€']);
        \App\Models\Coches::create(['id'=>6, 'marca'=>'Opel', 'modelo'=>'Corsa', 'version'=>'-', 'combustible'=>'diésel', 'potencia'=>'90CV', 'precio'=>'3000€']);
        \App\Models\Coches::create(['id'=>7, 'marca'=>'Honda', 'modelo'=>'Civic', 'version'=>'Type R', 'combustible'=>'gasolina', 'potencia'=>'300CV', 'precio'=>'19000€']);
        \App\Models\Coches::create(['id'=>8, 'marca'=>'Alfa Romeo', 'modelo'=>'Giulia', 'version'=>'-', 'combustible'=>'gasolina', 'potencia'=>'200CV', 'precio'=>'10000€']);
        \App\Models\Coches::create(['id'=>9, 'marca'=>'Seat', 'modelo'=>'Ibiza', 'version'=>'-', 'combustible'=>'diésel', 'potencia'=>'100CV', 'precio'=>'2000€']);
        \App\Models\Coches::create(['id'=>10,'marca'=>'Renault', 'modelo'=>'Clio', 'version'=>'-', 'combustible'=>'diésel', 'potencia'=>'90CV', 'precio'=>'1000€']);
        
    }
}
