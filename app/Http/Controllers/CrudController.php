<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Controller dasar CRUD. Controller turunan cukup mengisi
 * $model, $view, $route, $title, $icon dan rules().
 */
abstract class CrudController extends Controller
{
    protected string $model;
    protected string $view;   // nama folder di resources/views/pages
    protected string $route;  // prefix nama route
    protected string $title;
    protected string $icon;
    protected array $with = [];   // relasi yang di-eager load

    abstract protected function rules(?string $id = null): array;

    /** Data tambahan untuk view (mis. daftar pilihan relasi). */
    protected function extra(): array
    {
        return [];
    }

    /** Hook untuk mengubah data sebelum disimpan (mis. hash password). */
    protected function transform(array $data, $item = null): array
    {
        return $data;
    }

    private function shared(array $extra = []): array
    {
        return array_merge(['route' => $this->route, 'title' => $this->title, 'icon' => $this->icon], $this->extra(), $extra);
    }

    public function index()
    {
        $items = ($this->model)::with($this->with)->latest()->paginate(10);
        return view("pages.{$this->view}.index", $this->shared(compact('items')));
    }

    public function create()
    {
        return view("pages.{$this->view}.create", $this->shared());
    }

    public function store(Request $request)
    {
        $data = $this->transform($request->validate($this->rules()));
        ($this->model)::create($data);
        return redirect()->route("{$this->route}.index")->with('success', "{$this->title} berhasil ditambahkan.");
    }

    public function show(string $id)
    {
        $item = ($this->model)::with($this->with)->findOrFail($id);
        return view("pages.{$this->view}.show", $this->shared(compact('item')));
    }

    public function edit(string $id)
    {
        $item = ($this->model)::with($this->with)->findOrFail($id);
        return view("pages.{$this->view}.edit", $this->shared(compact('item')));
    }

    public function update(Request $request, string $id)
    {
        $item = ($this->model)::with($this->with)->findOrFail($id);
        $item->update($this->transform($request->validate($this->rules($id)), $item));
        return redirect()->route("{$this->route}.index")->with('success', "{$this->title} berhasil diperbarui.");
    }

    public function destroy(string $id)
    {
        ($this->model)::with($this->with)->findOrFail($id)->delete();
        return redirect()->route("{$this->route}.index")->with('success', "{$this->title} berhasil dihapus.");
    }
}
