<x-form-field name="nama" label="Nama layanan" :value="$item?->nama" />
<x-form-field name="kategori" label="Kategori" :value="$item?->kategori" type="select" :options="['administrasi','kesehatan','sosial']" />
<x-form-field name="deskripsi" label="Deskripsi" :value="$item?->deskripsi" type="textarea" />
<x-form-field name="status" label="Status" :value="$item?->status" type="select" :options="['aktif','nonaktif']" />
