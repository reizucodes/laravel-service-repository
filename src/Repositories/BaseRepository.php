<?php

namespace BlaiseBueno\LaravelServiceRepository\Repositories;

use BlaiseBueno\LaravelServiceRepository\Repositories\Interfaces\EloquentInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function find(int $id): ?Model
    {
        return $this->model->find($id);
    }

    public function update(array $attributes, $id)
    {
        $model = $this->model->find($id);

        $model->update($attributes);

        return $model;
    }

    public function destroy(int $id)
    {
        return $this->model->find($id)->delete();
    }
}
