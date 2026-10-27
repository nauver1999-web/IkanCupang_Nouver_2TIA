@extends('layouts.admin.app')
@section('title', $title)
@section('content')
<x-page-header :title="'Data ' . $title" :icon="$icon" :route="$route" />

<div class="card shadow-sm border-0">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr><th>#</th><th>Nama</th><th>Email</th><th class="text-end">Aksi</th></tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td>{{ $items->firstItem() + $loop->index }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item->name, 50) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item->email, 50) }}</td>
                        <td class="text-end"><x-aksi-crud :route="$route" :id="$item->id" /></td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="text-center text-muted py-4"><i class="fa-regular fa-folder-open me-1"></i>Belum ada data.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<div class="mt-3">{{ $items->links() }}</div>
@endsection
