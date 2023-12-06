<!-- resources/views/guestbooks/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Guestbook Entry</h1>

    <p><strong>Name:</strong> {{ $guestbook->name }}</p>
    <p><strong>Message:</strong> {{ $guestbook->message }}</p>

    <a href="{{ route('guestbooks.index') }}">Back to Guestbook Entries</a>
@endsection
