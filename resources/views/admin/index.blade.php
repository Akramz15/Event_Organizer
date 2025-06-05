@extends('layouts.app')

@section('content')
<div class="container" style="padding: 3rem 0; text-align:center;">
    <h1>Welcome, Admin!</h1>
    <p>This is the admin dashboard. Use the menu to manage Guest Stars.</p>
    <a href="{{ route('gueststar.index') }}" class="btn btn-primary">Manage Guest Stars</a>
    <form method="POST" action="{{ route('admin.logout') }}" style="margin-top:2rem;">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
@endsection
