<x-form-field name="nama_pelapor" label="Nama pelapor" :value="$item?->nama_pelapor" />
<x-form-field name="judul" label="Judul pengaduan" :value="$item?->judul" />
<x-form-field name="isi" label="Isi pengaduan" :value="$item?->isi" type="textarea" />
<x-form-field name="status" label="Status" :value="$item?->status" type="select" :options="['baru','diproses','selesai']" />
