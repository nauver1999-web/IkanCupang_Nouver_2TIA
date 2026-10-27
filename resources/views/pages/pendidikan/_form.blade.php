<x-form-field name="biodata_id" label="Biodata" :value="$item?->biodata_id" type="relation" :options="$biodatas" />
<x-form-field name="institusi" label="Institusi" :value="$item?->institusi" />
<x-form-field name="jenjang" label="Jenjang" :value="$item?->jenjang" type="select" :options="['SMA','D3','S1','S2']" />
<x-form-field name="jurusan" label="Jurusan" :value="$item?->jurusan" />
<x-form-field name="tahun_mulai" label="Tahun mulai" :value="$item?->tahun_mulai" type="number" />
<x-form-field name="tahun_selesai" label="Tahun selesai (kosongkan jika masih berjalan)" :value="$item?->tahun_selesai" type="number" :required="false" />
