@props(['route'])
<div class="d-flex gap-2">
    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk me-1"></i>Simpan</button>
    <a href="{{ route($route . '.index') }}" class="btn btn-secondary"><i class="fa-solid fa-arrow-left me-1"></i>Kembali</a>
</div>
