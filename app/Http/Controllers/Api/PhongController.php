<?php

namespace App\Http\Controllers\Api;


use App\Models\Phong;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\PhongRepository;
use App\Http\Requests\Api\PhongStoreRequest;
use App\Http\Requests\Api\PhongUpdateRequest;

class PhongController extends Controller
{
    /**
     * Object Repository instance
     * @var $repository
     */
    protected $repository;

    public function __construct(PhongRepository $repository)
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

    public function store(PhongStoreRequest $request)
    {
        $request->validated();
        return $this->repository->store($request);
    }

    public function update(PhongUpdateRequest $request, $id)
    {
        $request->validated();
        return $this->repository->update($request, $id);
    }

    public function destroy($id)
    {
        $this->repository->destroy($id);
    }

}
