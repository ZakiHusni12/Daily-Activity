@extends('layout.app')
@section('content')
    
    @include('components.navbar')
    <div class="flex min-h-screen">
        <div class="w-2/12">
        @include('components.sidebar')
        </div>
        <div class="w-10/12">

        </div>
    </div> 
@endsection