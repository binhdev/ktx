<?php

namespace App\Http\Controllers\Api;


use App\Models\LienHe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\LienHeRepository;
use App\Http\Requests\Api\LienHeStoreRequest;
use App\Http\Requests\Api\LienHeUpdateRequest;

class LienHeController extends Controller
{
    /**
     * Object Repository instance
     * @var $repository
     */
    protected $repository;

    public function __construct(LienHeRepository $repository)
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

    public function store(LienHeStoreRequest $request)
    {
        $request->validated();
        return $this->repository->store($request);
    }

    public function update(LienHeUpdateRequest $request, $id)
    {
        $request->validated();
        return $this->repository->update($request, $id);
    }

    public function destroy($id)
    {
        $this->repository->destroy($id);
    }

}
