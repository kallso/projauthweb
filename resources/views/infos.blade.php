@extends('layouts.template')

@section('contenu')
<form method="POST" action="{{ url('profil') }}" accept-charset="UTF-8">
    @csrf
    <label for="nom">Entrez votre nom : </label>
    <input name="nom" type="text" id="nom">
    <input type="submit" value="Soumettre">
</form>
@endsection