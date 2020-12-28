@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Hobby Details</div>
                <div class="card-body">
                    <p><strong>{{ $hobby->name }}</strong></p>
                    <p>{{ $hobby->beschreibung }}</p>
                    <a class="btn btn-secondary btn-sm mt-3" href="/hobby">
                        Go Back
                    </a>
                    <a class="btn btn-success btn-sm mt-3" href="/hobby/create">
                        New Hobby
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
