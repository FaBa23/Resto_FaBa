@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Welcome, Admin. Manage menus and view site stats here.</p>
    <a href="{{ route('menus.index') }}" class="btn btn-primary">Manage Menus</a>
</div>
@endsection