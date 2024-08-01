@extends('layouts.app')


@section('content')
 <h2>Body</h2>
@endsection

@push('scripts')
<script src="{{Vite::asset('vendors/choices/choices.min.js')}}"></script>
<script src="{{Vite::asset('vendors/echarts/echarts.min.js')}}"></script>
<script src="{{Vite::asset('vendors/dhtmlx-gantt/dhtmlxgantt.js')}}"></script>
<script src="{{Vite::asset('vendors/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{Vite::asset('resources/assets/js/phoenix.js')}}"></script>
<script src="{{Vite::asset('resources/js/main/main.js')}}"></script>
@endpush
