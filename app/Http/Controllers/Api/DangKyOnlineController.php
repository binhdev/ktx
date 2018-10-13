<?php

namespace App\Http\Controllers\Api;


use App\Models\DangKyOnline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\DangKyOnlineRepository;
use App\Http\Requests\Api\DangKyOnlineStoreRequest;
use App\Http\Requests\Api\DangKyOnlineUpdateRequest;

class DangKyOnlineController extends Controller
{
    /**
     * Object Repository instance
     * @var $repository
     */
    protected $repository;

    public function __construct(DangKyOnlineRepository $repository)
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

    public function store(DangKyOnlineStoreRequest $request)
    {
        $request->validated();
        return $this->repository->store($request);
    }

    public function update(DangKyOnlineUpdateRequest $request, $id)
    {
        $request->validated();
        return $this->repository->update($request, $id);
    }

    public function destroy($id)
    {
        $this->repository->destroy($id);
    }

}
