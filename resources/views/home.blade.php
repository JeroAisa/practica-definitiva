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
                    {{--<form method="POST" action="{{route('my-books')}}">
                        @csrf
                        <button type="submit">Mis Libros</button>
                    </form>
                    <br>
                    <form method="POST" action="{{route('add-book')}}">
                        @csrf
                       <button type="submit">Crear libro</button>
                    </form>--}}  
                    <a href="{{route('add-book')}}"> Crear Libros</a>    
                    <br>
                    <a href="{{route('my-books')}}"> Mis Libros</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
