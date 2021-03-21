@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('couverture.update',['couverture' => $couverture->id]) }}" method="post" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Animation</label>
            <select class="form-control" name="animation" id="">
                    <option value="slide-one">slide-one</option>    
                    <option value="slide-two">slide-two</option>    
                    <option value="slide-three">slide-three</option>    
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">petit titre</label>
            <input value="{{$couverture->petit_titre}}" name="petit_titre" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">gros titre</label>
            <input value="{{$couverture->gros_titre}}" name="gros_titre" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">redirection boutton</label>
            <select class="form-control" name="url_boutton" id="">
                    <option value="{{route('contact')}}">contact</option>       
                    <option value="{{route('blog')}}">blog</option>       
                    <option value="{{route('service')}}">service</option>       
                    <option value="{{route('portfolio')}}">portfolio</option>       
                    <option value="{{route('competence')}}">competence</option>       
                    <option value="{{route('about')}}">about</option>       
            </select>
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
            <input type="submit" class="btn btn-primary mt-5" value="appliquez la modification">
        </div>
    </form>
    <br>
    <form action="{{route('couverture.destroy',['couverture' => $couverture->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger mt-5" value="supprimer l'experience">
    </form>
</div>
@endsection





