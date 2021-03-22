@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('service.store') }}" method="post">
    @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">titre</label>
            <input name="titre" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">content</label>
            <textarea name="content" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">icon</label>
            <select class="form-control" name="icon" id="">
                    <option value="code">code</option>       
                    <option value="camera-retro">camera</option>       
                    <option value="wordpress">wordpress</option>       
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
</div>
@endsection