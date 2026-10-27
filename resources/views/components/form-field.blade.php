@props(['name', 'label', 'type' => 'text', 'options' => [], 'value' => null, 'required' => true])
<div class="mb-3">
    <label for="{{ $name }}" class="form-label fw-semibold">{{ $label }}</label>
    @if ($type === 'textarea')
        <textarea id="{{ $name }}" name="{{ $name }}" rows="4" class="form-control @error($name) is-invalid @enderror" @required($required)>{{ old($name, $value) }}</textarea>
    @elseif ($type === 'file')
        <div class="d-flex align-items-center gap-3 mb-2">
            <img id="preview-{{ $name }}" src="{{ $value ? asset('storage/' . $value) : asset('img/avatar.svg') }}" alt="Pratinjau {{ $label }}" class="rounded-circle border" width="96" height="96" style="object-fit:cover">
            <div class="small text-muted">JPG, PNG, atau WEBP. Maksimal 2 MB.<br>Kosongkan jika tidak ingin mengganti foto.</div>
        </div>
        <input type="file" id="{{ $name }}" name="{{ $name }}" accept="image/png,image/jpeg,image/webp" class="form-control @error($name) is-invalid @enderror"
               onchange="if (this.files[0]) document.getElementById('preview-{{ $name }}').src = URL.createObjectURL(this.files[0])">
    @elseif ($type === 'relation')
        <select id="{{ $name }}" name="{{ $name }}" class="form-select @error($name) is-invalid @enderror" @required($required)>
            <option value="">-- pilih --</option>
            @foreach ($options as $id => $label)
                <option value="{{ $id }}" @selected((string) old($name, $value) === (string) $id)>{{ $label }}</option>
            @endforeach
        </select>
    @elseif ($type === 'select')
        <select id="{{ $name }}" name="{{ $name }}" class="form-select @error($name) is-invalid @enderror" @required($required)>
            @foreach ($options as $opt)
                <option value="{{ $opt }}" @selected(old($name, $value) === $opt)>{{ ucfirst($opt) }}</option>
            @endforeach
        </select>
    @else
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ $type === 'password' ? '' : old($name, $value) }}" class="form-control @error($name) is-invalid @enderror" @required($required)>
    @endif
    @error($name)<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
