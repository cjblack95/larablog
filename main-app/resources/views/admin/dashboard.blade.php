@extends('layouts.admin', ['title' => 'Dashboard'])
@section('title', 'Dashboard')
@section('content')

    <div class="dashboard-content px-3">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        You are logged in as {{ Auth::guard('admin')->user()->first_name }}!
    </div>

@endsection
