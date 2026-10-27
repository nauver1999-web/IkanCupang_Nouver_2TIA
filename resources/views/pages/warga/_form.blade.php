<x-form-field name="nama" label="Nama lengkap" :value="$item?->nama" />
<x-form-field name="nik" label="NIK (16 digit)" :value="$item?->nik" />
<x-form-field name="alamat" label="Alamat" :value="$item?->alamat" type="textarea" />
<x-form-field name="status" label="Status" :value="$item?->status" type="select" :options="['aktif','pindah','meninggal']" />
