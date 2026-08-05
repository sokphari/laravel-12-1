
@extends('layouts.admin.app')

@section('title', 'Product Dashboard')
@section('page-heading','Product')

@section('content')
    @include('admin.products.countproduct')
    @include('admin.products.listproduct')
@endsection

