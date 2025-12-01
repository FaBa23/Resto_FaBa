@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Messages</h1>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="receiver_id" class="form-label">Send To (User ID)</label>
            <input type="number" class="form-control" id="receiver_id" name="receiver_id" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>

    <hr>

    <h2>Your Messages</h2>
    <ul class="list-group">
        @foreach ($messages as $msg)
        <li class="list-group-item">
            <strong>From: {{ $msg->sender->name }} (ID: {{ $msg->sender_id }})</strong><br>
            <strong>To: {{ $msg->receiver->name }} (ID: {{ $msg->receiver_id }})</strong><br>
            <p>{{ $msg->message }}</p>
            <small>{{ $msg->created_at->format('Y-m-d H:i') }}</small>
        </li>
        @endforeach
    </ul>
</div>
@endsection