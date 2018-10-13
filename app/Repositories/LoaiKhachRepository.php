<?php

namespace App\Repositories;

use App\Models\LoaiKhach;
use App\Http\Resources\LoaiKhachResource;

class LoaiKhachRepository {

    public function collection(){
      return PhongResource::collection(LoaiKhach::orderBy('created_at', 'desc')->paginate(25));
    }
    /**
     * Show a user member
     * @param int $id
     * @return void
     */
    public function show($id){
      return new PhongResource(LoaiKhach::findOrFail($id));
    }

    /**
     * Store user from $request
     * @param Request $request
     * @return void
     */
    public function store($request){
      return new LoaiKhachResource(LoaiKhach::create($request->all()));
    }

    /**
     * Description
     * @param type $request
     * @param type $id
     * @return type
     */
    public function update($request, $id){
        $phong = LoaiKhach::findOrFail($id);
        $phong->update($request->only(['loai_khach', 'ghi_chu']));
        return new LoaiKhachResource($phong);
    }

    /**
     * Description
     * @param type $id
     * @return type
     */
    public function destroy($id){
        $phong = LoaiKhach::findOrFail($id);
        $phong->delete();
        return response()->json([
          'meesage' => 'Delete #' . $id . ' successful!'
        ], 200);
    }
}
