@extends('platform::dashboard')

@section('title','title')
@section('description', 'description')

@section('navbar')
    <div class="text-center">
        Navbar
        <button>sdad</button>
    </div>
@stop

@section('content')
    <div class="text-center mt-5 mb-5">
        <h1>Content</h1>
        <div data-controller="" >
            <x-table-component table="TestTable"></x-table-component>

        </div>

        @stack('table')
    </div>
@stop