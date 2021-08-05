Perfil del usuario 
<br>
<br>
Autor: {{ Auth::user()->name }}

Libros: <br><br>

@foreach ($books as $book)
    {{$book->title}}<br>
@endforeach


<br>
<br>

<a href="{{route('home')}}">Regresar al menú</a>