<!-- resources/views/guestbooks/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Guestbook Entry</h1>

    <form action="{{ route('guestbooks.update', $guestbook->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $guestbook->name }}" required>

        <label for="message">Message:</label>
        <textarea name="message" required>{{ $guestbook->message }}</textarea>

        <button type="submit">Update</button>
    </form>
@endsection
