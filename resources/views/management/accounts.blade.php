@extends('layouts.app')

@section('navbar', 'Accounts')

@php
    $title = 'conta';
    $columns = ['ID', 'Usuário', 'Tipo', 'Valor', 'Ação'];
@endphp

@section('content')
    @include('components.card', compact('title', 'columns'))
@endsection

@section('scripts')
    <script src="{{ asset('js/datatableAccounts.js') }}"></script>
@endsection
