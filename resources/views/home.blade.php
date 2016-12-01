@extends('layouts.app')

@section('title')
    {{ config('app.name', 'Laravel') }}
@endsection

@section('content')
@include('_map')
@endsection
