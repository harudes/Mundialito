@extends('layouts.app')

@section('content')
<div class="container">
    <div>
         @foreach($figuritas as $figurita)
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="img/{{$figurita->imagen}}.png"  alt="..." height="300" width="270">
                  <div class="caption">
                    <h3>{{$figurita->nombre}}</h3>
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