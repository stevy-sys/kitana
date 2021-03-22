@extends('layouts.app')

@section('content')
<div class="container">
    <button class="btn btn-success"><a href="{{ route('team.create') }}">Creer une team</a></button>
    <br><br>
    <table class="table text-center">
        <thead class="">
            <tr>
                <td>id</td>
                <td>nom</td>
                <td>role</td>
                <td>facebook</td>
                <td>instagramme</td>
                <td>twitter</td>
                <td>image</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
                <tr>
                    <th class="pt-5" scope="row">{{$team->id}}</th>
                    <td class="pt-5">{{$team->nom}}</td>
                    <td class="pt-5">{{$team->role}}</td>
                    <td class="pt-5">{{$team->facebook}}</td>
                    <td class="pt-5">{{$team->instagrame}}</td>
                    <td class="pt-5">{{$team->twitter}}</td>
                    <td class="pt-5"> <img src="{{asset('storage').'/'.$team->image}}" alt="" width="300px" ></td>
                    <td class="pt-5">
                        <button class="btn btn-success"><a href="{{ route('team.edit',['team' => $team->id]) }}">modifier</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
