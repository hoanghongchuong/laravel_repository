<?php


namespace App\Repositories;


interface RepositoryInterface
{
    public function find($id);

    public function findOrFail($id);

    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function updateOrCreate(array $attributes, array $values);

    public function delete($id);

    public function show($id);
}
