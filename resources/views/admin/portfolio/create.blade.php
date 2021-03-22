@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('portfolio.store') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">categoire</label>
            <select class="form-control" name="categorie" id="">
                    <option value="development">Development</option>    
                    <option value="design">Design</option>    
                    <option value="photo">Photoshop</option>    
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">titre</label>
            <input name="titre" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">description</label>
            <input name="description" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
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
            <input type="submit" class="btn btn-primary mt-5" value="ajouter le portfolio">
        </div>
    </form>
    <br>
</div>
@endsection