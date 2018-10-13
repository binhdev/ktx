<?php

namespace App\Http\Controllers\Api;


use App\Models\LoaiKhach;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\LoaiKhachRepository;
use App\Http\Requests\Api\LoaiKhachStoreRequest;
use App\Http\Requests\Api\LoaiKhachUpdateRequest;

class LoaiKhachController extends Controller
{
    /**
     * Object Repository instance
     * @var $repository
     */
    protected $repository;

    public function __construct(LoaiKhachRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Description
     * @return type
     */
    public function index()
    {
        return $this->repository->collection();
    }

    /**
     * Description
     * @param type $id
     * @return type
     */
    public function show($id)
    {
      return $this->repository->show($id);
    }

    public function store(LoaiKhachStoreRequest $request)
    {
        $request->validated();
        return $this->repository->store($request);
    }

    public function update(LoaiKhachUpdateRequest $request, $id)
    {
        $request->validated();
        return $this->repository->update($request, $id);
    }

    public function destroy($id)
    {
        $this->repository->destroy($id);
    }

}
