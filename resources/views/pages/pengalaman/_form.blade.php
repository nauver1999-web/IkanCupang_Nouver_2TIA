<x-form-field name="biodata_id" label="Biodata" :value="$item?->biodata_id" type="relation" :options="$biodatas" />
<x-form-field name="perusahaan" label="Perusahaan / organisasi" :value="$item?->perusahaan" />
<x-form-field name="posisi" label="Posisi" :value="$item?->posisi" />
<x-form-field name="tipe" label="Tipe" :value="$item?->tipe" type="select" :options="['kerja','magang','organisasi']" />
<x-form-field name="tahun_mulai" label="Tahun mulai" :value="$item?->tahun_mulai" type="number" />
<x-form-field name="tahun_selesai" label="Tahun selesai (kosongkan jika masih berjalan)" :value="$item?->tahun_selesai" type="number" :required="false" />
<x-form-field name="deskripsi" label="Deskripsi" :value="$item?->deskripsi" type="textarea" />
