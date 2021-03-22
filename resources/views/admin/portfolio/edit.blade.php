@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('portfolio.update',['portfolio' => $portfolio->id]) }}" method="post" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">categorie</label>
            <select class="form-control" name="categorie" id="">
                    <option value="development">Development</option>    
                    <option value="design">Design</option>    
                    <option value="photo">Photoshop</option>    
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">titre</label>
            <input value="{{$portfolio->titre}}" name="titre" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">description</label>
            <input value="{{$portfolio->description}}" name="description" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
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
            <img src="{{asset('storage').'/'.$portfolio->image}}" width="300px" alt="">
        </div>
        <br><br><br>
        <div>
            <input type="submit" class="btn btn-primary mt-5" value="appliquez la modification">
        </div>
    </form>
    <br>
    <form action="{{route('portfolio.destroy',['portfolio' => $portfolio->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger mt-5" value="supprimer le portfolio">
    </form>
</div>
@endsection