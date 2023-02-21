@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="col-12 d-flex justify-content-end">
        <a class="btn btn-primary btn-sm" href="{{route('projects.index')}}">Torna alla lista</a>
    </div>
    <form action="{{route('projects.update', $project->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">
                Nome progetto
            </label>
            <input type="text" class="form-control" name="Nome_progetto" value="{{$project->Nome_progetto}}">
        </div>
        <div class="mb-3">
            <label class="form-label">
                Descrizione
            </label>
            <textarea class="form-control" name="Descrizione_progetto" cols="30" rows="10">{{$project->Descrizione_progetto}}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">
                Data di inizio
            </label>
            <input type="date" class="form-control" name="Data_inizio_progetto" value="{{$project->Data_inizio_progetto}}">
        </div>
        <div class="mb-3">
            <label class="form-label">
                Data di fine
            </label>
            <input type="date" class="form-control" name="Data_fine_progetto" value="{{$project->Data_fine_progetto}}">
        </div>
        <div class="mb-3">
            <label class="form-label">
                URL immagine
            </label>
            <input type="text" class="form-control" name="Immagine" value="{{$project->Immagine}}">
        </div>
        <div class="mb-3">
            <label class="form-label">
                Nome sviluppatore
            </label>
            <input type="text" class="form-control" name="Nome_sviluppatore" value="{{$project->Nome_sviluppatore}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection