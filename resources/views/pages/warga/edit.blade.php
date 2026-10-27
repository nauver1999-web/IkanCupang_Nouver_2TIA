@extends('layouts.admin.app')
@section('title', 'Edit ' . $title)
@section('content')
<x-page-header :title="'Edit ' . $title" icon="fa-pen-to-square" />
<div class="card shadow-sm border-0"><div class="card-body">
    <form method="POST" action="{{ route($route . '.update', $item->id) }}">
        @csrf @method('PUT')
        @include('pages.warga._form', ['item' => $item])
        <x-form-actions :route="$route" />
    </form>
</div></div>
@endsection
