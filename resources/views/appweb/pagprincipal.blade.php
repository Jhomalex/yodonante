@extends('appweb.menuAppweb')
@section('pagprincipal')
<div class="slider">
      <ul class="slides">
          <li>
              <img class="imgEncabezado" src="img/fondo1.jpg">
              <div class="caption left-align row">
                  <div class="col s7">
                      <h2>Únete y salva vidas.</h2>
                      <h5 class="light grey-text text-lighten-3">Únete a la comunidad de donantes voluntarios de sangre y salva vidas junto a nosotros.</h5>
                  </div>
                  <div class="col s5">
                      <img src="img/globulos.png">
                  </div>
              </div>
          </li>
      </ul>
  </div>
  @foreach($posts as $post)
  <div class="container">
      <div class="card-panel row white  valign-wrapper">
          <div class="col s12 m3">
              <img src="img/casos/{{ $post->foto }}" class="responsive-img">
          </div>
          <div class="col s12 m6">
              <p class="flow-text  grey-text text-darken-3"><b>{{ $post->apellido }}, {{ $post->nombre }}</b></p>
              <span class="grey-text text-darken-3">{{ $post->descripcion }}</span>
              <div class="card-panel row coloryodonante">
                  <div class="col s6 offset-s3 m3">
                      <img src="img/yodonante_logo_2.png" class="circle responsive-img">
                  </div>
                  <div class="col s12 m9 white-text">
                      <p><b> Tipo de sangre: {{ $post->tiposangre->nombre }}</b></p>
                      <p><b>Pueden donar: </b>
                          @foreach($post->tiposangre->compatibilidad as $compatible)
                          <b>{{ $compatible->nombre }}</b>
                          @endforeach
                      </p>
                  </div>
              </div>
          </div>
          <div class="col s12 m3 center grey-text text-darken-3">
              <a href="" class="waves-effect waves-light btn coloryodonante">Donar</a>
              <h6><b>{{ $post->centroMedico }}</b></h6>
              <h6>5 unidades para donar</h6>
              <p class="grey-text text-darken-1 thin">{{ $post->unidadesDonadas }} unidades recolectadas de {{ $post->unidadesTotales }}</p>
              <div class="progress">
                  <div class="determinate coloryodonante" style="width: {{ 100*$post->unidadesDonadas/$post->unidadesTotales }}%"></div>
              </div>
          </div>
      </div>
  </div>
  @endforeach
@stop