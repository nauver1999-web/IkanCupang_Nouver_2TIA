@extends('layouts.admin.app')
@section('title', 'Tambah ' . $title)
@section('content')
<x-page-header :title="'Tambah ' . $title" icon="fa-plus" />
<div class="card shadow-sm border-0"><div class="card-body">
    <form method="POST" action="{{ route($route . '.store') }}">
        @csrf
        @include('pages.modul-a._form', ['item' => null])
        <x-form-actions :route="$route" />
    </form>
</div></div>
@endsection
