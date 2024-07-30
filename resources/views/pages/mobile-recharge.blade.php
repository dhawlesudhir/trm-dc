@extends('layouts.app')
@section('titile','Mobile Recharge')

@section('content')
 <h2>Mobile recharge screen</h2>
@endsection

@push('scripts')
<script src="{{Vite::asset('vendors/choices/choices.min.js')}}"></script>
<script src="{{Vite::asset('vendors/echarts/echarts.min.js')}}"></script>
<script src="{{Vite::asset('vendors/dhtmlx-gantt/dhtmlxgantt.js')}}"></script>
<script src="{{Vite::asset('vendors/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{Vite::asset('resources/assets/js/phoenix.js')}}"></script>
@endpush
