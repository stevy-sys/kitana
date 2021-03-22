@extends('layouts.app')

@section('content')
<div class="container">
    <button class="btn btn-success"><a href="{{ route('portfolio.create') }}">Creer une portfolio</a></button>
    <br><br>
    <table class="table text-center">
        <thead class="">
            <tr>
                <td>id</td>
                <td>titre</td>
                <td>description</td>
                <td>categorie</td>
                <td>image</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($portfolios as $portfolio)
                <tr>
                    <th class="pt-5" scope="row">{{$portfolio->id}}</th>
                    <td class="pt-5">{{$portfolio->titre}}</td>
                    <td class="pt-5">{{$portfolio->description}}</td>
                    <td class="pt-5">{{$portfolio->categorie}}</td>
                    <td class="pt-5"> <img src="{{asset('storage').'/'.$portfolio->image}}" alt="" width="300px" ></td>
                    <td class="pt-5">
                        <button class="btn btn-success"><a href="{{ route('portfolio.edit',['portfolio' => $portfolio->id]) }}">modifier</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
