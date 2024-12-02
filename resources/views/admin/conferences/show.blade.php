@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ __('User Details') }}</h1>
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text">
                <strong>{{ __('Email') }}:</strong> {{ $user->email }}<br>
                <strong>{{ __('Role') }}:</strong> {{ $user->role }}<br>
                <strong>{{ __('Created At') }}:</strong> {{ $user->created_at->format('Y-m-d H:i') }}<br>
            </p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">{{ __('Edit User') }}</a>
        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('{{ __('Are you sure you want to delete this user?') }}')">
                {{ __('Delete User') }}
            </button>
        </form>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">{{ __('Back to Users') }}</a>
    </div>
</div>
@endsection
