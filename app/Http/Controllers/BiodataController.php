<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class BiodataController extends CrudController
{
    protected string $model = Biodata::class;
    protected string $view = 'biodata';
    protected string $route = 'biodata';
    protected string $title = 'Biodata';
    protected string $icon = 'fa-id-card';

    protected function rules(?string $id = null): array
    {
        return [
            'nama_lengkap' => 'required|string|max:100',
            'foto'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'posisi'       => 'required|string|max:100',
            'email'        => 'required|email',
            'telepon'      => 'required|string|max:20',
            'alamat'       => 'required|string',
            'tentang'      => 'required|string',
        ];
    }

    /** Simpan foto baru (hapus yang lama). Jika tidak ada file baru, foto lama dipertahankan. */
    protected function transform(array $data, $item = null): array
    {
        if (isset($data['foto']) && $data['foto'] instanceof UploadedFile) {
            if ($item?->foto) {
                Storage::disk('public')->delete($item->foto);
            }
            $data['foto'] = $data['foto']->store('foto', 'public');
        } else {
            unset($data['foto']);
        }
        return $data;
    }

    public function destroy(string $id)
    {
        $item = Biodata::findOrFail($id);
        if ($item->foto) {
            Storage::disk('public')->delete($item->foto);
        }
        return parent::destroy($id);
    }
}
