@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 p-2 d-flex justify-content-end">
            <a href="{{route('projects.create')}}" class="btn btn-sm bg-primary text-light">
                Nuovo progetto +
            </a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr class="bg-dark text-light">
                <th>ID</th>
                <th>Nome del progetto</th>
                <th>Descrizione</th>
                <th>Data di inizio</th>
                <th>Data di fine</th>
                <th>URL dell'immagine</th>
                <th>Nome dello sviluppatore</th>
                <th>
                    
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project) 
            <tr>
                <th>{{$project->id}}</th>
                <td>{{$project->Nome_progetto}}</td>
                <td>{{$project->Descrizione_progetto}}</td>
                <td>{{$project->Data_inizio_progetto}}</td>
                <td>{{$project->Data_fine_progetto}}</td>
                <td>{{$project->Immagine}}</td>
                <td>{{$project->Nome_sviluppatore}}</td>
                <td class="text-center">
                    <a href={{route('projects.show', $project->id)}} class="btn bg-dark text-light btn-sm btn-light">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a href="{{route('projects.edit', $project->id)}}" class="btn bg-dark text-light btn-sm btn-light">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <form action="{{route('projects.destroy', $project->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection