@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="min-h-screen">
        <h1>DASHBOARD</h1>
        <p>Selamat Datang {{ Auth()->user()->username }}</p>
    </div>
@endsection
