@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('Manage Conferences') }}</h1>
    <a href="{{ route('admin.conferences.create') }}" class="btn btn-primary">{{ __('Create New Conference') }}</a>
    <ul class="list-group mt-3">
        @foreach ($conferences as $conference)
            <li class="list-group-item">
                <h5>{{ $conference->title }}</h5>
                <p>{{ __('Date') }}: {{ $conference->date }}</p>
                <a href="{{ route('admin.conferences.edit', $conference->id) }}" class="btn btn-warning">{{ __('Edit') }}</a>
                <form action="{{ route('admin.conferences.destroy', $conference->id) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
