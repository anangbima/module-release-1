<?php

namespace Modules\ModuleRelease1\Repositories\Interfaces;

interface ApiClientRepositoryInterface
{
    public function all();
    public function find(string $id);
    public function create(array $data);
    public function delete(string $id);
    public function findByApiKey(string $apiKey);
    public function update($id, array $data);
}