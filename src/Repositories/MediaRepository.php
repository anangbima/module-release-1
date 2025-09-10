<?php

namespace Modules\ModuleRelease1\Repositories;

use Modules\ModuleRelease1\Models\Media;
use Modules\ModuleRelease1\Repositories\Interfaces\MediaRepositoryInterface;

class MediaRepository implements MediaRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = new Media();
    }

    /**
     * Create a new media record.
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }
}