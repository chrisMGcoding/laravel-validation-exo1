@extends('template.template')

@section('content')
    <div class="container">

        <h3>L'Auteur :</h3>

        <p>ID : {{($auteur->id)}}</p>
        <p>Nom de l'Auteur : {{($auteur->name)}}</p>
        <p>Texte de l'Auteur : {{($auteur->texte)}}</p>
        <p>Note de l'Auteur : {{($auteur->note)}}</p>

    </div>
@endsection