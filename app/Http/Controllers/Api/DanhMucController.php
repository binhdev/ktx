<?php

namespace App\Http\Controllers\Api;


use App\Models\DanhMuc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\DanhMucRepository;
use App\Http\Requests\Api\DanhMucStoreRequest;
use App\Http\Requests\Api\DanhMucUpdateRequest;

class DanhMucController extends Controller
{
    /**
     * Object Repository instance
     * @var $repository
     */
    protected $repository;

    public function __construct(DanhMucRepository $repository)
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

    public function store(DanhMucStoreRequest $request)
    {
        $request->validated();
        return $this->repository->store($request);
    }

    public function update(DanhMucUpdateRequest $request, $id)
    {
        $request->validated();
        return $this->repository->update($request, $id);
    }

    public function destroy($id)
    {
        $this->repository->destroy($id);
    }

}
