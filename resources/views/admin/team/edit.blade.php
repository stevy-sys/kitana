@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('team.update',['team' => $team->id]) }}" method="post" enctype="multipart/form-data">
        @method('PATCH')
    @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nom</label>
            <input value="{{$team->nom}}" name="nom" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">role</label>
            <input value="{{$team->role}}" name="role" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">facebook</label>
            <input value="{{$team->facebook}}" name="facebook" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">twitter</label>
            <input value="{{$team->twitter}}" name="twitter" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">instagramme</label>
            <input value="{{$team->instagrame}}" name="instagrame" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-file">
            <input @error('image') is-invalid @enderror  type="file" name="image" class="form-file-input" id="customFile">
            @error('image')
                <div class="invalid-feedback">
                    {{ $errors->first("image") }}
                </div>
            @enderror
        </div>
        <div class="mb-3 mt-5">
            <img src="{{asset('storage').'/'.$team->image}}" width="300px" alt="">
        </div>
        <br><br><br>
        <div>
            <input type="submit" class="btn btn-primary mt-5" value="appliquez la modification">
        </div>
    </form>
    <br>
    <form action="{{route('team.destroy',['team' => $team->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger mt-5" value="supprimer le team">
    </form>
</div>
@endsection