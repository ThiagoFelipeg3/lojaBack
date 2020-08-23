<?php

namespace Loja\Repository;

abstract class BaseRepository
{
    /**
    * Model class for repo.
    *
    * @var object
    */
    protected $model;

    /**
     * @return EloquentQueryBuilder|QueryBuilder
     */
    protected function newQuery()
    {
        return $this->model->newQuery();
    }

    /**
     * @param EloquentQueryBuilder|QueryBuilder $query
     * @param int                               $per_page
     * @param bool                              $paginate
     *
     * @return EloquentCollection|Paginator
     */
    protected function doQuery(
        $query = null,
        int $per_page = 15,
        bool $paginate = true,
        bool $relationships = false
    ) {
        $nameModel = get_class($this->model);
        if (is_null($query)) $query = $this->newQuery();

        if ($relationships) $query->with($nameModel::$_with);

        if ($paginate){
            return $query->paginate($per_page);
        }

        return $query->get();
    }

    /**
     * Returns all records.
     * If $take is false then brings all records
     * If $paginate is true returns Paginator instance.
     *
     * @param int  $take
     * @param bool $paginate
     *
     * @return EloquentCollection|Paginator
     */
    public function getAll($per_page = 15, $paginate = true)
    {
        return $this->doQuery(null, $per_page, $paginate);
    }

    /**
     * Retrieves a record by his id
     * If fail is true $ fires ModelNotFoundException.
     *
     * @param int  $id
     * @param bool $fail
     *
     * @return Model
     */
    public function findByID($id, $fail = true)
    {
        if ($fail) {
            return $this->newQuery()->findOrFail($id);
        }

        return $this->newQuery()->find($id);
    }

    public function getAllAndYourRelationships($per_page = 15, $paginate = true)
    {
       return $this->doQuery(null, $per_page, $paginate, true);
    }
}