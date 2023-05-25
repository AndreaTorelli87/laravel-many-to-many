@extends('layouts.app')
@section("page-title", "Dashboard")

@section('content')
<div class="card">
    <div class="card-header">User Dashboard</div>

    <div class="card-body text-center display-4 fw-bold">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        Benvenuto {{ Auth::user()->name }}!
    </div>
</div>
@endsection
