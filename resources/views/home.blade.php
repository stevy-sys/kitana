@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="row">
                    <div class="col-lg-3 p-5 text-center">
                        <div class="card">
                            <div class="card-header">
                                COUVERTURE
                            </div>
                            <div class="card-body">
                                 afficher ajouter modifier ou supprimer le photo de couverture
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('couverture.index') }}" class="btn btn-primary">afficher</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-3">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
