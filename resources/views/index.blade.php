@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    <h2>Add New Hobby</h2>
                </div>
                <a class="btn btn-success btn-sm mt-3" href="/hobby/create">
                    <i class="fas fa-plus-circle"></i>
                        New Hobby
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
