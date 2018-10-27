<?php

namespace App\Repositories;

use App\Models\TheLoaiTin;
use App\Http\Resources\TheLoaiTinResource;

class TheLoaiTinRepository {

    public function collection(){
      return TheLoaiTinResource::collection(TheLoaiTin::orderBy('created_at', 'desc')->paginate(25));
    }
    /**
     * Show a user member
     * @param int $id
     * @return void
     */
    public function show($id){
      return new TheLoaiTinResource(TheLoaiTin::findOrFail($id));
    }

    /**
     * Store user from $request
     * @param Request $request
     * @return void
     */
    public function store($request){
      return new TheLoaiTinResource(TheLoaiTin::create($request->all()));
    }

    /**
     * Description
     * @param type $request
     * @param type $id
     * @return type
     */
    public function update($request, $id){
        $phong = TheLoaiTin::findOrFail($id);
        $phong->update($request->only(['ten_the_loai', 'ghi_chu']));
        return new TheLoaiTinResource($phong);
    }

    /**
     * Description
     * @param type $id
     * @return type
     */
    public function destroy($id){
        $phong = TheLoaiTin::findOrFail($id);
        $phong->delete();
        return response()->json([
          'meesage' => 'Delete #' . $id . ' successful!'
        ], 200);
    }
}
