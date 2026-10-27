<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends CrudController
{
    protected string $model = User::class;
    protected string $view = 'user';
    protected string $route = 'user';
    protected string $title = 'User';
    protected string $icon = 'fa-user-gear';

    protected function rules(?string $id = null): array
    {
        return [
            'name'     => 'required|string|max:100',
            'email'    => 'required|email|unique:users,email,' . $id,
            'password' => ($id ? 'nullable' : 'required') . '|string|min:6',
        ];
    }

    protected function transform(array $data, $item = null): array
    {
        if (empty($data['password'])) {
            unset($data['password']);   // saat edit, kosong = tidak diubah
        } else {
            $data['password'] = Hash::make($data['password']);
        }
        return $data;
    }
}
