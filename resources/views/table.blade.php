{{--@extends('platform::dashboard')--}}
{{--@section('table')--}}
{{--@section('content')--}}
{{--@parent--}}
{{--    @parent--}}
<div  class="w-fill">
     <x-table-component table="TestTable"></x-table-component>
 </div>

@stack('table')
