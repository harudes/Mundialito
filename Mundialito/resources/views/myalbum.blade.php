@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h3>{{$pais}}</h3>
         @foreach($figuritas as $figurita)
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="../img/jugadores/{{$figurita->imagen}}.png"  alt="..." height="200" width="150">
                </div>
              </div>
            </div>
         @endforeach
         @for($i=1;$i< 33;$i++)
            <a href="{{route('myalbum',['page' => $i])}}" class="btn btn-outline mw-md rounded btn-primary" style="background: url('../img/Banderas/Bandera{{$i}}.png') ; background-size: 38px; width: 40px; height: 40px" ></a>
         @endfor
    </div>
</div>
@endsection