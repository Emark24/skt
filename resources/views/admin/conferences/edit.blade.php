@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('messages.edit_conference') }}: {{ $conference->title }}</h1>

    <form action="{{ route('admin.conferences.update', $conference->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">{{ __('messages.title') }}</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $conference->title) }}" required>
        </div>

        <div class="form-group">
            <label for="date">{{ __('messages.date') }}</label>
            <input type="date" id="date" name="date" class="form-control" value="{{ old('date', $conference->date) }}" required>
        </div>

        <div class="form-group">
            <label for="description">{{ __('messages.description') }}</label>
            <textarea id="description" name="description" class="form-control" rows="5" required>{{ old('description', $conference->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('messages.update') }}</button>
        <a href="{{ route('admin.conferences.index') }}" class="btn btn-secondary">{{ __('messages.cancel') }}</a>
    </form>
</div>
@endsection
