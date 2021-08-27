@extends('template.template')

@section('content')

    <div class="container">

        <form action="/crud/updateauteur/{{$auteur->id}}" method="post">
        @csrf
        @method("PUT")

            <label class="mt-2 mb-2" for="">Nom auteur :</label>
            <input type="text" name="name" id="" value="{{$auteur->name}}">
                <br>
            <label class="mt-2 mb-2" for="">texte :</label>
            <input type="text" name="description" id="" value="{{$auteur->texte}}">
                <br>
            <label class="mt-2 mb-2" for="">note :</label>
            <input type="text" name="description" id="" value="{{$auteur->note}}">
                <br>
            <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection