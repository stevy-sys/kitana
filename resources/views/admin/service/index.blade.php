@extends('layouts.app')

@section('content')
<div class="container">
    <button class="btn btn-success"><a href="{{ route('service.create') }}">Creer une service</a></button>
    <br><br>
    <table class="table text-center">
        <thead class="">
            <tr>
                <td>id</td>
                <td>titre</td>
                <td>content</td>
                <td>icon</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <th class="pt-5" scope="row">{{$service->id}}</th>
                    <td class="pt-5">{{$service->titre}}</td>
                    <td class="pt-5">{{$service->content}}</td>
                    <td class="pt-5"><i class="fa {{$service->icon}} "></i>  {{$service->icon}}</td>
                    <td class="pt-5">
                        <button class="btn btn-success"><a href="{{ route('service.edit',['service' => $service->id]) }}">modifier</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
