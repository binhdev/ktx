<?php

namespace App\Http\Controllers\Api;


use App\Models\TheLoaiTin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TheLoaiTinRepository;
use App\Http\Requests\Api\TheLoaiTinStoreRequest;
use App\Http\Requests\Api\TheLoaiTinUpdateRequest;

class TheLoaiTinController extends Controller
{
    /**
     * Object Repository instance
     * @var $repository
     */
    protected $repository;

    public function __construct(TheLoaiTinRepository $repository)
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

    public function store(TheLoaiTinStoreRequest $request)
    {
        $request->validated();
        return $this->repository->store($request);
    }

    public function update(TheLoaiTinUpdateRequest $request, $id)
    {
        $request->validated();
        return $this->repository->update($request, $id);
    }

    public function destroy($id)
    {
        $this->repository->destroy($id);
    }

}
