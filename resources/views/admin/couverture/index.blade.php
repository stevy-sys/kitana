@extends('layouts.app')

@section('content')
<div class="container">
    <button class="btn btn-success"><a href="{{ route('couverture.create') }}">Creer une couverture</a></button>
    <br><br>
    <table class="table text-center">
        <thead class="">
            <tr>
                <td>id</td>
                <td>petit_titre</td>
                <td>gros_titre</td>
                <td>image</td>
                <td>url_boutton</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($couvertures as $couverture)
                <tr>
                    <th class="pt-5" scope="row">{{$couverture->id}}</th>
                    <td class="pt-5">{{$couverture->petit_titre}}</td>
                    <td class="pt-5">{{$couverture->gros_titre}}</td>
                    <td> <img height="200vh" width="500px" src="{{ asset('storage').'/'.$couverture->image }}" alt="" set=""> </td>
                    <td class="pt-5" >{{$couverture->url_boutton}}</td>
                    <td class="pt-5">
                        <button class="btn btn-success"><a href="{{ route('couverture.show',['couverture' => $couverture->id]) }}">modifier</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
