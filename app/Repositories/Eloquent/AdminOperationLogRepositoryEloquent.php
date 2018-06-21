<?php

namespace Yeelight\Repositories\Eloquent;

use Yeelight\Models\AdminOperationLog;
use Yeelight\Presenters\AdminOperationLogPresenter;
use Yeelight\Repositories\Criteria\RequestCriteria;
use Yeelight\Repositories\Interfaces\AdminOperationLogRepository;
use Yeelight\Validators\AdminOperationLogValidator;

/**
 * Class AdminOperationLogRepositoryEloquent.
 */
class AdminOperationLogRepositoryEloquent extends BaseRepository implements AdminOperationLogRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'user_id',
        'method',
        'path'  => 'like',
        'ip'    => 'like',
        'input' => 'like',
    ];

    /**
     * @var bool
     */
    protected $isSearchableForceAndWhere = true;

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return AdminOperationLog::class;
    }

    /**
     * Specify Validator class name.
     *
     * @return mixed
     */
    public function validator()
    {
        return AdminOperationLogValidator::class;
    }

    /**
     * Specify Presenter class name.
     *
     * @return mixed
     */
    public function presenter()
    {
        return AdminOperationLogPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria.
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
