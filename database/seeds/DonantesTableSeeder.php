<?php

use App\Donante;
use App\Tiposangre;
use App\Departamento;
use App\Provincia;
use App\Distrito;
    use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DonantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Donante::truncate();
        Departamento::truncate();
        Provincia::truncate();
        TipoSangre::truncate();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="A+";
        $tipoSangre->save();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="A-";
        $tipoSangre->save();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="B+";
        $tipoSangre->save();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="B-";
        $tipoSangre->save();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="AB+";
        $tipoSangre->save();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="AB-";
        $tipoSangre->save();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="O+";
        $tipoSangre->save();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="O-";
        $tipoSangre->save();
        //Departamento
        $departamento = new Departamento;
        $departamento->nombre = "Piura";
        $departamento->save();
        //Provincia
        $provincia = new Provincia;
        $provincia->nombre = "Piura";
        $provincia->departamento_id = "1";
        $provincia->save();

        $provincia = new Provincia;
        $provincia->nombre = "Sullana";
        $provincia->departamento_id = "1";
        $provincia->save();

        $provincia = new Provincia;
        $provincia->nombre = "Talara";
        $provincia->departamento_id = "1";
        $provincia->save();
        //Distrito
        $distrito = new Distrito;
        $distrito->nombre = "Piura";
        $distrito->provincia_id = "1";
        $distrito->save();

        $distrito = new Distrito;
        $distrito->nombre = "Castilla";
        $distrito->provincia_id = "1";
        $distrito->save();
        //Donante
        $donante = new Donante;
        $donante->nombre = "Primer Nombre Donante";
        $donante->apellido = "Primer Apellido Donante";
        $donante->correo = "primer@donante.com";
        $donante->dni = "primerdni";
        $donante->celular = "primercel";
        $donante->fechaNacimiento = Carbon::now()->subYears(20);
        $donante->genero = "1";
        $donante->tipoSangre_id = "2";
        $donante->foto="donante1.jpg";
        $donante->fechaUltimaDonacion=Carbon::now()->subMonths(5);
        $donante->fechaProximaDonacion=Carbon::now()->subMonths(1);
        $donante->sms="1";
        $donante->distrito_id="1";
        $donante->save();

        $donante = new Donante;
        $donante->nombre = "Segundo Nombre Donante";
        $donante->apellido = "Segundo Apellido Donante";
        $donante->correo = "segundo@donante.com";
        $donante->dni = "segundodni";
        $donante->celular = "segundocel";
        $donante->fechaNacimiento = Carbon::now()->subYears(19);
        $donante->genero = "0";
        $donante->tipoSangre_id = "1";
        $donante->foto="donante2.jpg";
        $donante->fechaUltimaDonacion=Carbon::now()->subMonths(5);
        $donante->fechaProximaDonacion=Carbon::now()->subMonths(1);
        $donante->sms="1";
        $donante->distrito_id="2";
        $donante->save();
    }
}
