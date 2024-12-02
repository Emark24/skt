@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $conference['title'] }}</h1>
    <p>{{ __('Date') }}: {{ $conference['date'] }}</p>
    <p>{{ __('Description') }}: {{ $conference['description'] }}</p>

    <h3>{{ __('Attendees') }}</h3>
    <ul>
        @foreach ($conference['attendees'] as $attendee)
            <li>{{ $attendee }}</li>
        @endforeach
    </ul>
</div>
@endsection
