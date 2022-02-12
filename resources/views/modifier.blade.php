@extends('main')

@section('title', 'Mofidier un utilisateur')

@section('contenu')

<p>
    Entrez les modifications
</p>

<div class="conteneur">

<form method="post" action="{{route('modif', ['id'=>$user->id]) }}">

    <label for="nom"> Entrez un nom :</label>
    <input type="text" name="nom" />
    <br>

    <label for="prenom">Entrez un prenom :</label>
    <input type="text" name="prenom"/>
    <br>
    
    <label for="age">Entrez un age :</label>
    <input type="text" name="age" />
    <br>

</div>
    <button>envoyer</button>
    @csrf
</form>

@endsection