@extends('layouts.app')

@section('navbar', 'Transactions')

@php
    $title = 'transação';
    $columns = ['ID', 'Conta', 'Valor', 'Tipo', 'Data', 'Ação'];
@endphp

@section('content')
    @include('components.card', compact('title', 'columns'))
@endsection

@section('scripts')
    <script src="{{ asset('js/datatableTransactionsSelf.js') }}"></script>
@endsection
