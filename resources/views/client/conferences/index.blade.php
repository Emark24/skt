<?php

@extends('layouts.app')

@section('content')
    <h1>Conferences</h1>
    <ul>
        @foreach($conferences as $conference)
            <li>
                {{ $conference['title'] }} - {{ $conference['date'] }}
                <a href="{{ route('client.conference.show', ['id' => $loop->index + 1]) }}">View</a>
            </li>
        @endforeach
    </ul>
@endsection
