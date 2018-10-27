<?php

namespace App\Http\Controllers\Api;


use App\Models\TinTuc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TinTucRepository;
use App\Http\Requests\Api\TinTucStoreRequest;
use App\Http\Requests\Api\TinTucUpdateRequest;

class TinTucController extends Controller
{
    /**
     * Object Repository instance
     * @var $repository
     */
    protected $repository;

    public function __construct(TinTucRepository $repository)
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

    public function store(TinTucStoreRequest $request)
    {
        $request->validated();
        return $this->repository->store($request);
    }

    public function update(TinTucUpdateRequest $request, $id)
    {
        $request->validated();
        return $this->repository->update($request, $id);
    }

    public function destroy($id)
    {
        $this->repository->destroy($id);
    }

}
