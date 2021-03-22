@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('service.update',['service' => $service->id]) }}" method="post">
        @method('PATCH')
    @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">titre</label>
            <input value="{{$service->titre}}" name="titre" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">content</label>
            <textarea name="content" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">{{$service->content}}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">icon</label>
            <select class="form-control" name="icon" id="">
                    <option value="fa-code">code</option>       
                    <option value="fa-camera-retro">camera</option>       
                    <option value="fa-wordpress">wordpress</option>       
                    <option value="fa-bar-chart">seo</option>       
                    <option value="fa-ticket">ticket</option>             
            </select>
        </div>
        <br><br><br>
        <div>
            <input type="submit" class="btn btn-primary mt-5" value="appliquez la modification">
        </div>
    </form>
    <br>
    <form action="{{route('service.destroy',['service' => $service->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger mt-5" value="supprimer le service">
    </form>
</div>
@endsection