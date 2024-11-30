@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ __('messages.admin_dashboard') }}</h1>
        <nav>
            <ul>
                <li><a href="{{ route('admin.conferences.index') }}">{{ __('messages.manage_conferences') }}</a></li>
                <li><a href="{{ route('admin.users.index') }}">{{ __('messages.manage_users') }}</a></li>
            </ul>
        </nav>
    </div>
@endsection