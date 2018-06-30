@extends('layouts.app')

@section('content')
<div class="container">
    <div>
         @foreach($figuritas as $figurita)
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="img/jugadores/{{$figurita->imagen}}.png"  alt="..." height="200" width="150">
                  Tienes {{$figurita->cantidad}} figuritas
                </div>
              </div>
            </div>
         @endforeach
    </div>
</div>
@endsection