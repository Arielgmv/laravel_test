<?php

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <=25 ; $i++) {
            DB::table('productos')->insert(array(
                'nombre' => 'laptop'.$i,
                'descripcion' => 'Descripcion de la laptop'.$i,
                'precio' => $i,
                'fecha' => date('Y-m-d')
            ));
        }
    }
}
