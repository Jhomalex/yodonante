<?php

use App\Caso;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CasosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caso::truncate();

        $caso=new Caso;

        $caso->nombre="Primero Nombre Caso";
        $caso->apellido="Primero Apellido Caso";
        $caso->dni="primerodni";
        $caso->tipoSangre_id="3";
        $caso->fechaNacimiento=Carbon::now()->subYears(25);
        $caso->centroMedico="Primero Centro Médico";
        $caso->codigoReferencia="Primero Código";
        $caso->fichaDerivacion="fichaderivacion1.jpg";
        $caso->historia= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, nisi, veritatis placeat, qui quae inventore iure quo nemo tempora provident sequi. Nisi optio eligendi natus! Inventore omnis maiores suscipit sint.";
        $caso->descripcion="Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos delectus mollitia, ipsum ratione nobis labore cupiditate facilis et temporibus animi cumque corrupti molestias enim qui magnam vero unde minima atque.";
        $caso->foto="caso1.jpg";
        $caso->sms="1";
        $caso->unidadesTotales="5";
        $caso->unidadesDonadas="2";
        $caso->distrito_id="1";
        $caso->save();

        $caso=new Caso;
        $caso->nombre="Segundo Nombre Caso";
        $caso->apellido="Segundo Apellido Caso";
        $caso->dni="segundodni";
        $caso->tipoSangre_id="1";
        $caso->fechaNacimiento=Carbon::now()->subYears(25);
        $caso->centroMedico="Segundo Centro Médico";
        $caso->codigoReferencia="Segundo Código";
        $caso->fichaDerivacion="fichaderivacion1.jpg";
        $caso->historia= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, nisi, veritatis placeat, qui quae inventore iure quo nemo tempora provident sequi. Nisi optio eligendi natus! Inventore omnis maiores suscipit sint.";
        $caso->descripcion="Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos delectus mollitia, ipsum ratione nobis labore cupiditate facilis et temporibus animi cumque corrupti molestias enim qui magnam vero unde minima atque.";
        $caso->foto="caso2.jpg";
        $caso->sms="1";
        $caso->unidadesTotales="3";
        $caso->unidadesDonadas="3";
        $caso->distrito_id="1";
        $caso->save();

        $caso=new Caso;
        $caso->nombre="Tercero Nombre Caso";
        $caso->apellido="Tercero Apellido Caso";
        $caso->dni="tercerodni";
        $caso->tipoSangre_id="2";
        $caso->fechaNacimiento=Carbon::now()->subYears(25);
        $caso->centroMedico="Tercero Centro Médico";
        $caso->codigoReferencia="Tercero Código";
        $caso->fichaDerivacion="fichaderivacion1.jpg";
        $caso->historia= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, nisi, veritatis placeat, qui quae inventore iure quo nemo tempora provident sequi. Nisi optio eligendi natus! Inventore omnis maiores suscipit sint.";
        $caso->descripcion="Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos delectus mollitia, ipsum ratione nobis labore cupiditate facilis et temporibus animi cumque corrupti molestias enim qui magnam vero unde minima atque.";
        $caso->foto="caso3.jpg";
        $caso->sms="1";
        $caso->unidadesTotales="1";
        $caso->unidadesDonadas="1";
        $caso->distrito_id="2";
        $caso->save();


    }
}
