<?php


namespace Modules\Auth\Repositories;


use App\Repositories\Repository;
use Illuminate\Support\Facades\Hash;
use Modules\Auth\Entities\User;

class UserRepository extends Repository
{

    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }


    public function create(array $attributes)
    {
        $attributes['password'] = $this->encryptPassword($attributes['password_generated']);
        return $this->model->create($attributes);
    }

    public function encryptPassword($password_generated)
    {
        return Hash::make($password_generated);
    }
}
