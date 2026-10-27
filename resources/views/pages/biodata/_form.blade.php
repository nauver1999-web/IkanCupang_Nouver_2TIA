<x-form-field name="nama_lengkap" label="Nama lengkap" :value="$item?->nama_lengkap" />
<x-form-field name="foto" label="Foto profil" :value="$item?->foto" type="file" :required="false" />
<x-form-field name="posisi" label="Posisi / headline" :value="$item?->posisi" />
<x-form-field name="email" label="Email" :value="$item?->email" type="email" />
<x-form-field name="telepon" label="Telepon" :value="$item?->telepon" />
<x-form-field name="alamat" label="Alamat" :value="$item?->alamat" type="textarea" />
<x-form-field name="tentang" label="Tentang saya" :value="$item?->tentang" type="textarea" />
