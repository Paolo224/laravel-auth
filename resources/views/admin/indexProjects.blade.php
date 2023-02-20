@extends('layouts.app')

@section('content')
<div class="container">
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
                    <a href="http://" class="btn btn-sm btn-light">
                        Nuovo progetto +
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td class="text-center">
                    <a href="http://" class="btn bg-dark text-light btn-sm btn-light">
                        S
                    </a>
                    <a href="http://" class="btn bg-dark text-light btn-sm btn-light">
                        E
                    </a>
                    <a href="http://" class="btn bg-dark text-light btn-sm btn-light">
                        D
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection