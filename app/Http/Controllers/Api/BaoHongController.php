<?php

namespace App\Http\Controllers\Api;


use App\Models\BaoHong;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\BaoHongRepository;
use App\Http\Requests\Api\BaoHongStoreRequest;
use App\Http\Requests\Api\BaoHongUpdateRequest;

class BaoHongController extends Controller
{
    /**
     * Object Repository instance
     * @var $repository
     */
    protected $repository;

    public function __construct(BaoHongRepository $repository)
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

    public function store(BaoHongStoreRequest $request)
    {
        $request->validated();
        return $this->repository->store($request);
    }

    public function update(BaoHongUpdateRequest $request, $id)
    {
        $request->validated();
        return $this->repository->update($request, $id);
    }

    public function destroy($id)
    {
        $this->repository->destroy($id);
    }

}
