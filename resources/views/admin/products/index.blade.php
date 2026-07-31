{{-- <<<<<<< HEAD
======= --}}
@extends('layouts.admin.app')

@section('title', 'Product Dashboard')

@section('content')

    @include('admin.products.countproduct')

    @include('admin.products.listproduct')
@endsection
{{-- >>>>>>> db1d91a1397eec7caff68face08ed7ca2b189e4b --}}
