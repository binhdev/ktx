<?php

namespace App\Repositories;

use App\Models\DanhMuc;
use App\Http\Resources\DanhMucResource;

class DanhMucRepository {

    public function collection(){
      return DanhMucResource::collection(DanhMuc::orderBy('created_at', 'desc')->paginate(25));
    }
    /**
     * Show a user member
     * @param int $id
     * @return void
     */
    public function show($id){
      return new DanhMucResource(DanhMuc::findOrFail($id));
    }

    /**
     * Store user from $request
     * @param Request $request
     * @return void
     */
    public function store($request){
      return new DanhMucResource(DanhMuc::create($request->all()));
    }

    /**
     * Description
     * @param type $request
     * @param type $id
     * @return type
     */
    public function update($request, $id){
        $phong = DanhMuc::findOrFail($id);
        $phong->update($request->only(['ten_phong']));
        return new DanhMucResource($phong);
    }

    /**
     * Description
     * @param type $id
     * @return type
     */
    public function destroy($id){
        $phong = DanhMuc::findOrFail($id);
        $phong->delete();
        return response()->json([
          'meesage' => 'Delete #' . $id . ' successful!'
        ], 200);
    }
}
