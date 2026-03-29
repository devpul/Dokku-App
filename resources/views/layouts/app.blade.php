@extends('layouts.base')

@section('main')
   @extends('components.flash-messages')
    <div class="min-h-screen grid lg:grid-cols-[250px_1fr] md:grid-cols-[30%_1fr] md:bg-white bg-[#f6f6ff]">
        {{-- LEFT --}}
        @include('components.sidebar')
        @yield('content')
    </div>
@endsection
