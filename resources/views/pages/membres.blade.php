@extends('layout.index')

@section('content')

<div style="display:grid; grid-template-columns: repeat(5 1fr);gap: 1rem;">
@foreach ($membres as $membre)

<div>
    {{$membre->nom}}
    {{$membre->age}}
    {{$membre->genre}}
    <a href="/membresEdit/{{$membre->id}}">
        <button type="submit">show</button>
    </a>
    <form style="display: inline;margin: 0px .5rem;" action="/{{$membre->id}}/delete" method="POST">
        @csrf
        @method('DELETE')
        <button>delete</button>
    </form>
</div>
@endforeach
<form action="/NewMembre" method="POST">
        @csrf
        <button type="submit">Supprimer</button>
</form>
</div>


@endsection
