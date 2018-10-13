<?php

namespace App\Http\Controllers\Api;


use App\Models\KhachLuuTru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\KhachLuuTruRepository;
use App\Http\Requests\Api\KhachLuuTruStoreRequest;
use App\Http\Requests\Api\KhachLuuTruUpdateRequest;

class KhachLuuTruController extends Controller
{
    /**
     * Object Repository instance
     * @var $repository
     */
    protected $repository;

    public function __construct(KhachLuuTruRepository $repository)
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

    public function store(KhachLuuTruStoreRequest $request)
    {
        $request->validated();
        return $this->repository->store($request);
    }

    public function update(KhachLuuTruUpdateRequest $request, $id)
    {
        $request->validated();
        return $this->repository->update($request, $id);
    }

    public function destroy($id)
    {
        $this->repository->destroy($id);
    }

}
