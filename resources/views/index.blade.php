@extends('User.layout.masterLayout')

@section('title', 'Welcome Home Page')


         
	
@if(!empty(auth()->user()) && auth()->user()->role=='Teacher')
	@section('Content')
		@include('User.welcome')
	@endsection
@elseif(!empty(auth()->user()) && auth()->user()->role=='User')
	@section('Content')
		@include('User.welcome')
	@endsection
@else 
	@section('Content')
		@include('home')
	@endsection
@endif

	
	