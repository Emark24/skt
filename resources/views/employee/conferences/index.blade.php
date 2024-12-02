@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('messages.upcoming_conferences') }}</h1>
    <ul class="list-group">
        @foreach ($conferences as $conference)
            <li class="list-group-item">
                <h5>{{ $conference['title'] }}</h5>
                <p>{{ __('messages.date') }}: {{ $conference['date'] }}</p>
                <a href="{{ route('employee.conferences.show', $conference['id']) }}" class="btn btn-primary">{{ __('messages.view_details') }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
