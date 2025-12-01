@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Dashboard</h1>
    <p>Welcome, User. Browse and place orders.</p>
    <a href="{{ route('orders.index') }}" class="btn btn-primary">View Your Orders</a>
</div>
@endsection