@props(['route', 'id'])
<div class="d-inline-flex gap-1">
    <a href="{{ route($route . '.show', $id) }}" class="btn btn-sm btn-info text-white" title="Lihat detail"><i class="fa-solid fa-eye"></i></a>
    <a href="{{ route($route . '.edit', $id) }}" class="btn btn-sm btn-warning" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
    <form action="{{ route($route . '.destroy', $id) }}" method="POST" class="m-0" onsubmit="return confirm('Hapus data ini?')">
        @csrf @method('DELETE')
        <button class="btn btn-sm btn-danger" title="Hapus"><i class="fa-solid fa-trash"></i></button>
    </form>
</div>
