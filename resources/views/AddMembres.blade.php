@extends('layout.index')

@section('content')
<form action="create" method="POST">
    @csrf
    <input type="text" name="nom" placeholder="nom">
    <select name="genre" >
        <option value="">--Please pick your gender--</option>
        <option value="Homme">homme</option>
        <option value="Femme">femme</option>
    </select>
    <input type="number" name="age" placeholder="age">
    <input type="submit" value="envoyer">
</form>
@endsection
