@extends('template.template')

@section('content')
<div class="container">


    <table class="table">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">text</th>
                <th scope="col">note</th>
                <th scope="col">Action</th>
                <th scope="col">Show</th>
                <th scope="col">Update</th>
            </tr>
        </thead>

        <tbody>

            @foreach($auteur as $item)

            <tr>
                <th scope="row">{{($item->id)}}</th>
                <td>{{($item->name)}}</td>
                <td>{{($item->texte)}}</td>
                <td>{{($item->note)}}</td>
                <td>
                    <form action="/{{$item->id}}" method="post">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <button><a href="/crud/showauteur/{{$item->id}}">Show</a></button>
                </td>
                <td>
                    <button><a href="/crud/editauteur/{{$item->id}}">Update</a></button>
                </td>
            </tr>

            @endforeach

        </tbody>

    </table>



    <h3 class="mt-2 mb-2">Ajout d'un nouvel auteur :</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/" method="post">
    @csrf

        <label class="mt-2 mb-2" for="">Nom auteur :</label>
        <input type="text" name="name" id="" value="{{old('name')}}">
                <br>
        <label class="mt-2 mb-2" for="">Texte :</label>
        <input type="text" name="texte" id="" value="{{old('texte')}}">
                <br>
        <label class="mt-2 mb-2" for="">Note :</label>
        <input type="text" name="note" id="" value="{{old('note')}}">
                <br>
        <button class="mt-2 mb-2" type="submit">Ajouter</button>

    </form>

</div>
@endsection