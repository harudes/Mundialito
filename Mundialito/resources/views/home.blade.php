@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in, {{$nickname}}!
                </div>
            </div>
            <div>
                <a href="{{route('myfigurines')}}" class="btn btn-outline mw-md rounded btn-primary">Mis figuritas</a>
            </div>
            <div>
                <a href="{{route('myalbum',['page' => 1])}}" class="btn btn-outline mw-md rounded btn-primary">Álbum</a>
            </div>            
        </div>
    </div>
</div>
@endsection
