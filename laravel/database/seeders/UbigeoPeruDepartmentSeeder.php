<?php

namespace Database\Seeders;

use App\Models\UbigeoPeruDepartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UbigeoPeruDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ubigeo_peru_departments = array(
            array('id' => '01', 'name' => 'Amazonas'),
            array('id' => '02', 'name' => 'Áncash'),
            array('id' => '03', 'name' => 'Apurímac'),
            array('id' => '04', 'name' => 'Arequipa'),
            array('id' => '05', 'name' => 'Ayacucho'),
            array('id' => '06', 'name' => 'Cajamarca'),
            array('id' => '07', 'name' => 'Callao'),
            array('id' => '08', 'name' => 'Cusco'),
            array('id' => '09', 'name' => 'Huancavelica'),
            array('id' => '10', 'name' => 'Huánuco'),
            array('id' => '11', 'name' => 'Ica'),
            array('id' => '12', 'name' => 'Junín'),
            array('id' => '13', 'name' => 'La Libertad'),
            array('id' => '14', 'name' => 'Lambayeque'),
            array('id' => '15', 'name' => 'Lima'),
            array('id' => '16', 'name' => 'Loreto'),
            array('id' => '17', 'name' => 'Madre de Dios'),
            array('id' => '18', 'name' => 'Moquegua'),
            array('id' => '19', 'name' => 'Pasco'),
            array('id' => '20', 'name' => 'Piura'),
            array('id' => '21', 'name' => 'Puno'),
            array('id' => '22', 'name' => 'San Martín'),
            array('id' => '23', 'name' => 'Tacna'),
            array('id' => '24', 'name' => 'Tumbes'),
            array('id' => '25', 'name' => 'Ucayali')
        );

        UbigeoPeruDepartment::insert($ubigeo_peru_departments);
    }
}
