<?php

namespace App\Repositories;

use Auth;
use App\Models\User;
// use App\Scopes\StatusScope;

class UserRepository
{
    use BaseRepository;

    /**
     * User Model
     *
     * @var User
     */
    protected $model;

    /**
     * Constructor
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * Get the list of all the user without myself.
     *
     * @return mixed
     */
    public function getList()
    {
        return $this->model
            ->orderBy('id', 'desc')
            ->get();
    }

    /**
     * Get the user by email.
     *
     * @param  string $email
     * @return mixed
     */
    public function getByEmail($email)
    {
        return $this->model
                    ->where('email', $email)
                    ->first();
    }

    /**
     * Get number of the records
     *
     * @param  Request $request
     * @param  int $number
     * @param  string $sort
     * @param  string $sortColumn
     * @return Paginate
     */
    public function pageWithRequest($request, $number = 10, $sort = 'desc', $sortColumn = 'created_at')
    {
        $keyword = $request->get('keyword');

        return $this->when($keyword, function ($query) use ($keyword) {
                        $query->where('name', 'like', "%{$keyword}%")
                              ->orWhere('surname', 'like', "%{$keyword}%")
                              ->orWhere('email', 'like', "%{$keyword}%");
                    })
                    ->orderBy($sortColumn, $sort)
                    ->paginate($number);
    }

    /**
     * Get number of the records
     *
     * @param  int $number
     * @param  string $sort
     * @param  string $sortColumn
     * @return Paginate
     */
    public function page($number = 10, $sort = 'desc', $sortColumn = 'created_at')
    {
        return $this->model->orderBy($sortColumn, $sort)->paginate($number);
    }

    /**
     * Get the user record.
     *
     * @param  int $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Update the user.
     *
     * @param  int $id
     * @param  array $input
     * @return boolean
     */
    public function update($id, $input)
    {
        $this->model = $this->model->findOrFail($id);

        return $this->save($this->model, $input);
    }

    /**
     * Change the user password.
     *
     * @param  App\User $user
     * @param  string $password
     * @return boolean
     */
    public function changePassword($user, $password)
    {
        return $user->update(['password' => bcrypt($password)]);
    }

    /**
     * Delete the draft article.
     *
     * @param int $id
     * @return boolean
     */
    public function destroy($id)
    {
        return $this->getById($id)->delete();
    }
}
