@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('team.store') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nom</label>
            <input name="nom" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">role</label>
            <input name="role" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">facebook</label>
            <input name="facebook" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">twitter</label>
            <input name="twitter" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">instagramme</label>
            <input name="instagrame" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-file">
            <input @error('image') is-invalid @enderror  type="file" name="image" class="form-file-input" id="customFile">
            @error('image')
                <div class="invalid-feedback">
                    {{ $errors->first("image") }}
                </div>
            @enderror
        </div>
        <br><br><br>
        <div>
            <input type="submit" class="btn btn-primary mt-5" value="ajouter le team">
        </div>
    </form>
    <br>
</div>
@endsection