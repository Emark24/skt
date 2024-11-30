@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('messages.create_conference') }}</h1>
    <form action="{{ route('admin.conferences.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">{{ __('messages.title') }}</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">{{ __('messages.description') }}</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="date">{{ __('messages.date') }}</label>
            <input type="date" id="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="location">{{ __('messages.location') }}</label>
            <input type="text" id="location" name="location" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
    </form>
</div>
@endsection
