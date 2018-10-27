<?php

namespace App\Http\Controllers\Api;


use App\Models\TaiSan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaiSanRepository;
use App\Http\Requests\Api\TaiSanStoreRequest;
use App\Http\Requests\Api\TaiSanUpdateRequest;

class TaiSanController extends Controller
{
    /**
     * Object Repository instance
     * @var $repository
     */
    protected $repository;

    public function __construct(TaiSanRepository $repository)
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

    public function store(TaiSanStoreRequest $request)
    {
        $request->validated();
        return $this->repository->store($request);
    }

    public function update(TaiSanUpdateRequest $request, $id)
    {
        $request->validated();
        return $this->repository->update($request, $id);
    }

    public function destroy($id)
    {
        $this->repository->destroy($id);
    }

}
