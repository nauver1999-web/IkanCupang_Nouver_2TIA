<x-form-field name="biodata_id" label="Biodata" :value="$item?->biodata_id" type="relation" :options="$biodatas" />
<x-form-field name="nama_keahlian" label="Nama keahlian" :value="$item?->nama_keahlian" />
<x-form-field name="level" label="Level" :value="$item?->level" type="select" :options="['pemula','menengah','mahir']" />
