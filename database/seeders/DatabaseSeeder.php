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

        \App\Models\Coches::create(['id'=>1, 'marca'=>'Volkswagen', 'modelo'=>'Golf', 'version'=>'GTI', 'combustible'=>'gasolina', 'potencia'=>'250CV', 'precio'=>'20000€','año'=>'2018','kilometros'=>'53600km','correo'=>'correoejemplo1@gmail.com','telefono'=>'123456789','imagen'=>'https://fotos.perfil.com/2020/05/13/asi-es-el-volkswagen-golf-gti-de-octava-generacion-955561.jpg']);
        \App\Models\Coches::create(['id'=>2, 'marca'=>'Renault', 'modelo'=>'Megane', 'version'=>'RS', 'combustible'=>'gasolina', 'potencia'=>'220CV', 'precio'=>'7000€','año'=>'2021','kilometros'=>'15000km','correo'=>'correoejemplo2@gmail.com','telefono'=>'123456789','imagen'=>'https://www.autonocion.com/wp-content/uploads/2018/02/renault_megane_r_s__65.jpg']);
        \App\Models\Coches::create(['id'=>3, 'marca'=>'Peugeot', 'modelo'=>'207', 'version'=>'GTI', 'combustible'=>'gasolina', 'potencia'=>'280CV', 'precio'=>'10500€','año'=>'2007','kilometros'=>'102536km','correo'=>'correoejemplo3@gmail.com','telefono'=>'123456789','imagen'=>'https://www.coches.com/fotos_historicas/peugeot/207-GTI-2007/peugeot_207-gti_r4.jpg']);
        \App\Models\Coches::create(['id'=>4, 'marca'=>'Mercedes', 'modelo'=>'220E', 'version'=>'V6', 'combustible'=>'gasolina', 'potencia'=>'253CV', 'precio'=>'8000€','año'=>'1990','kilometros'=>'105000km','correo'=>'correoejemplo4@gmail.com','telefono'=>'123456789','imagen'=>'https://www.autobild.es/sites/autobild.es/public/styles/main_element/public/dc/fotos/Mercedes-E-Class_2014_01.jpg?itok=vTSeABpF']);
        \App\Models\Coches::create(['id'=>5, 'marca'=>'BMW', 'modelo'=>'318', 'version'=>'Gran Turismo', 'combustible'=>'diésel', 'potencia'=>'150CV', 'precio'=>'14000€','año'=>'2020','kilometros'=>'44000km','correo'=>'correoejemplo5@gmail.com','telefono'=>'123456789','imagen'=>'https://a.ccdn.es/cnet/contents/media/bmw/serie_3/1031261.jpg//937x624cut/']);
        \App\Models\Coches::create(['id'=>6, 'marca'=>'Opel', 'modelo'=>'Corsa', 'version'=>'-', 'combustible'=>'diésel', 'potencia'=>'90CV', 'precio'=>'3000€','año'=>'2006','kilometros'=>'220000km','correo'=>'correoejemplo6@gmail.com','telefono'=>'123456789','imagen'=>'https://www.autonocion.com/wp-content/uploads/2019/11/opel_corsa_gs_line_14_00df01d014de0f66.jpg']);
        \App\Models\Coches::create(['id'=>7, 'marca'=>'Honda', 'modelo'=>'Civic', 'version'=>'Type R', 'combustible'=>'gasolina', 'potencia'=>'300CV', 'precio'=>'19000€','año'=>'2020','kilometros'=>'30400km','correo'=>'correoejemplo7@gmail.com','telefono'=>'123456789','imagen'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/2018_Honda_Civic_GT_Type_R_VTEC_2.0_Front.jpg/1200px-2018_Honda_Civic_GT_Type_R_VTEC_2.0_Front.jpg']);
        \App\Models\Coches::create(['id'=>8, 'marca'=>'Alfa Romeo', 'modelo'=>'Giulia', 'version'=>'-', 'combustible'=>'gasolina', 'potencia'=>'200CV', 'precio'=>'10000€','año'=>'2019','kilometros'=>'22000km','correo'=>'correoejemplo8@gmail.com','telefono'=>'123456789','imagen'=>'https://cloudfront-us-east-1.images.arcpublishing.com/infobae/DJUGZCI2XREVLDHXCCSWTP7SAE.jpg']);
        \App\Models\Coches::create(['id'=>9, 'marca'=>'Seat', 'modelo'=>'Ibiza', 'version'=>'-', 'combustible'=>'diésel', 'potencia'=>'100CV', 'precio'=>'2000€','año'=>'2017','kilometros'=>'0km','correo'=>'correoejemplo9@gmail.com','telefono'=>'123456789','imagen'=>'https://cdn.autobild.es/sites/navi.axelspringer.es/public/media/image/2017/02/609571-virtudes-seat-ibiza-2017-imagen.jpg']);
        \App\Models\Coches::create(['id'=>10,'marca'=>'Renault', 'modelo'=>'Clio', 'version'=>'-', 'combustible'=>'diésel', 'potencia'=>'90CV', 'precio'=>'1000€', 'año'=>'2004','kilometros'=>'53600km','correo'=>'correoejemplo10@gmail.com','telefono'=>'123456789','imagen'=>'https://live.staticflickr.com/5532/10093341944_284a6dc3e3_b.jpg']);
        
    }
}
