@extends('main')

@section('title', 'Page principial')

@section('contenu')

<p>Vous êtes sur la page principale</p>

@if ($message = Session::get('succés'))
<div class="alert alert-success alert-block">
        <strong class="strong1">{{ $message }}</strong>
</div>

@elseif ($message = Session::get("echec"))
<div class = "alert-succes alert-block">
    <strong> {{$message}} </strong>
</div>

@elseif($message = Session::get('succes'))
<div class="alert alert-success alert-block">
        <strong class="strong2">{{ $message }}</strong>
</div>

@elseif($message = Session::get(""))
<div class="alert alert-success alert-block">
        <strong class="strong2">{{ $message }}</strong>
</div>

@endif

<br>

<table>
    @foreach($variable1 as $user)
        <tr>
            <td class="pad">
                {{$user->id}}
            </td>
            <td>
                {{$user->nom}}
            </td>
            <td>
                {{$user->prenom}}
            </td>
            <td class="pad">
                {{$user->age}}
            </td>
            <td>
                <form action="{{route('verification', ['id'=>$user->id])}}" method="get"> 
                <button class="supp"><i class="fa fa-trash"></i></button>
                @csrf
                </form>
            </td>
            
            <td>
                <form action="{{route('affichage_modif', ['id'=>$user->id])}}" method="get">
                <button class="edit"> <i class="fa fa-edit"></i> </button>
                @csrf
                </form>
            </td>
        </tr>
    @endforeach
</table>

<br>
<br>

<strong>Ajouter un utilisateur</strong>
<br><br>

<div class="conteneur">


<form action="{{route('ajouter')}}" method="POST" >
<label for="nom">Entrez un nom : </label>
<input type="text" name="nom">


<br>

<label for="prenom">Entrez un prenom:</label>
<input type="text" name="prenom">


<br>

<label for="age" >Entrez un age : </label>
<input type="text" name="age">

<br>

</div>
<br>
<input type="submit">
@csrf
</form>


@endsection