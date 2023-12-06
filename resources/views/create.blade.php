<!-- resources/views/guestbooks/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create New Guestbook Entry</h1>

    <form action="{{ route('guestbooks.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="message">Message:</label>
        <textarea name="message" required></textarea>

        <button type="submit">Submit</button>
    </form>
@endsection
