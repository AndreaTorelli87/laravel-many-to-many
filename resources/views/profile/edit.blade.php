@extends('layouts.app')
@section('content')
@section("page-title", "Profilo")

<div class="container">
    <h2 class="fs-1 text-center text-danger my-4">Profilo</h2>
    <div class="row col-6 flex-nowrap mb-2">
        <div class="card p-4 m-2 bg-white shadow rounded-lg">
            @include('profile.partials.update-profile-information-form')
        </div>
        <div class="card p-4 m-2 bg-white shadow rounded-lg">
            @include('profile.partials.update-password-form')
        </div>
    </div>
    
</div>
<div class="card p-4 ms-2 bg-white shadow rounded-lg">
        @include('profile.partials.delete-user-form')
    </div>
@endsection
