@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    All Hobbies
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($hobbies as $hobby)
                        <li class="list-group-item">
                            {{ $hobby->name }}
                            <a class="ml-2" href="/hobby/{{ $hobby->id }}">
                                See More
                            </a>
                            <a class="ml-2 btn btn-sm btn-outline-primary" href="/hobby/{{ $hobby->id }}/edit">
                                Edit
                            </a>
                            <form action="/hobby/{{ $hobby->id }}"
                                  method="POST"
                            >
                            @csrf
                            @method('DELETE')
                                <input class="btn btn-outline-danger btn-sm" type="submit" value="Delete">
                            </form>
                        </li>
                        @endforeach
                    </ul>
                    <a class="btn btn-success btn-sm mt-3" href="/hobby/create">
                        <i class="fas fa-plus-circle"></i>
                            New Hobby
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
