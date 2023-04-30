@extends('layouts.app')

@section('navbar', 'Account Types')

@php
    $title = 'tipo de conta';
    $columns = ['ID', 'Tipo', 'Ação'];
@endphp

@section('content')
    @include('components.card', compact('title', 'columns'))
@endsection

@section('scripts')
    <script src="{{ asset('js/datatableAccountTypes.js') }}"></script>
@endsection
