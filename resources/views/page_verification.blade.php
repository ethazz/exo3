@extends('main')

@section('title', 'Page de verification')

@section('contenu')

<form action="{{route('supprimer', ['id'=>$user->id])}}" method="post">
    <label for="verification">Ếtes vous sur de vouloir supprimer l'utilisateur {{$user->prenom}} ?</label>
    <br>
    <button value="oui" name="submitButton" >Oui</button>
    <button value="non" name="submitButton">Non</button>
    @csrf
</form>

@endsection