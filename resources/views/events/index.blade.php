@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Weekly Event Calendar</h1>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('events.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Event Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="start_time">Start Time:</label>
                    <input type="datetime-local" class="form-control" id="start_time" name="start_time" required>
                </div>
                <div class="form-group">
                    <label for="end_time">End Time:</label>
                    <input type="datetime-local" class="form-control" id="end_time" name="end_time" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Event</button>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->name }}</td>
                            <td>{{ $event->start_time }}</td>
                            <td>{{ $event->end_time }}</td>
                            <td>
                                <form method="POST" action="{{ route('events.destroy', $event) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
