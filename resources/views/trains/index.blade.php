@extends('layouts.app')

@section('page-title', "Trains")

@section("main-content")
<main>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Compagnia</th>
                <th scope="col">Stazione di Partenza</th>
                <th scope="col">Stazione di Arrivo</th>
                <th scope="col">Data di Partenza</th>
                <th scope="col">Ora di Partenza</th>
                <th scope="col">Data di Arrvivo</th>
                <th scope="col">Ora di Arrivo</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Vagoni</th>
                <th scope="col">Ritardo</th>
                <th scope="col">Sospeso</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($trains as $train)
            <tr>
                <th scope="row">{{$train["id"]}}</th>
                <td>{{$train["company"]}}</td>
                <td>{{$train["departure_station"]}}</td>
                <td>{{$train["arrival_station"]}}</td>
                <td>{{$train["departure_date"]}}</td>
                <td>{{$train["departure_time"]}}</td>
                <td>{{$train["arrival_date"]}}</td>
                <td>{{$train["arrival_time"]}}</td>
                <td>{{$train["train_code"]}}</td>
                <td>{{$train["wagons_no"]}}</td>
                <td>{{$train["on_time"]}}</td>
                <td>{{$train["suspended"]}}</td>
            </tr>
            @empty

            @endforelse
            </tbody>
          </table>
    </div>
</main>
@endsection
