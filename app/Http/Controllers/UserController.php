<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    /**
     * Object Repository instance
     * @var $repository
     */
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Description
     * @return type
     */
    public function index()
    {
        $data = $this->repository->collection();
        return view('admin.users.index', array('data' => $data));
    }

    public function create(){
        return view('admin.users.new');
    }

    public function store(UserStoreRequest $request)
    {
        $request->validated();
        return $this->repository->store($request);
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $request->validated();
        return $this->repository->update($request, $id);
    }

    public function destroy($id)
    {
        $this->repository->destroy($id);
    }

}
