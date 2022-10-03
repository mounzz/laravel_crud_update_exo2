@extends('layout.index')

@section('content')



<form action="/membresEdit/{{$id_show->id}}/update" method="POST">
    @csrf
    @method('PUT')
<input type="text" name="nom" value={{$id_show->nom}}>
<select name="genre" value={{$id_show->genre}}>
<option value="">--Please pick your gender--</option>
<option value="Homme">Homme</option>
<option value="Femme">Femme</option>
</select>
<input type="text" name="age" value={{$id_show->age}}>
<button type="submit">éditer</button>
</form>
@endsection
