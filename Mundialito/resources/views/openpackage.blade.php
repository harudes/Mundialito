@extends('layouts.app')

@section('content')
<div class="container">
    <div>
         @foreach($paquetes as $paquete)
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="img/{{$paquete->imagen}}.png"  alt="..." height="300" width="270">
                  <div class="caption">
                    <h3>{{$paquete->nombre}}</h3>
                    <h3>En posesión:{{$paquete->cantidad}}</h3>
                    <p>...</p>
                    <p>
                    </p>
                  </div>
                </div>
              </div>
            </div>
         @endforeach
    </div>
</div>
@endsection