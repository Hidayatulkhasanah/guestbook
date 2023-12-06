<!-- resources/views/guestbooks/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Guestbook Entries</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($guestbooks as $guestbook)
                <tr>
                    <td>{{ $guestbook->name }}</td>
                    <td>{{ $guestbook->message }}</td>
                    <td>
                        <a href="{{ route('guestbooks.show', $guestbook->id) }}">View</a>
                        <a href="{{ route('guestbooks.edit', $guestbook->id) }}">Edit</a>
                        <form action="{{ route('guestbooks.destroy', $guestbook->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('guestbooks.create') }}">Add New Entry</a>
@endsection
