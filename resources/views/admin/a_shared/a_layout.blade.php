@extends('admin.a_master')
@section('section')
	<div class="main-panel">
		@include('admin.a_shared.a_navbar')
		@yield('content')

		@include('admin.a_shared.a_footer')
    </div>
@endsection
