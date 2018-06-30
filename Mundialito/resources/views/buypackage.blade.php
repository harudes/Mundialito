@extends('layouts.app')

@section('content')
<div class="container">
    <div>
         @foreach($paquetes as $paquete)
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="../img/paquetes/{{$paquete->imagen}}.png"  alt="..." height="300" width="270">
                  <div class="caption">
                    <h3>{{$paquete->nombre}}</h3>
                    <h3>Precio:{{$paquete->precio}}</h3>
                    <a href="{{route('buypackage',['rarity' => $paquete->id]) }}" class="btn btn-outline mw-md rounded btn-primary">Comprar</a>
                  </div>
                </div>
              </div>
            </div>
         @endforeach
    </div>
</div>
@endsection