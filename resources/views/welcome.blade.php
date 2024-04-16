@extends('layout')
@section('title')
@section('content')
    welcom {{Auth()->user()->name}};
@endsection
