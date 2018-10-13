<?php

namespace App\Repositories;

use App\Models\KhachLuuTru;
use App\Http\Resources\KhachLuuTruResource;

class KhachLuuTruRepository {

    public function collection(){
      return PhongResource::collection(KhachLuuTru::orderBy('created_at', 'desc')->paginate(25));
    }
    /**
     * Show a user member
     * @param int $id
     * @return void
     */
    public function show($id){
      return new PhongResource(KhachLuuTru::findOrFail($id));
    }

    /**
     * Store user from $request
     * @param Request $request
     * @return void
     */
    public function store($request){
      return new KhachLuuTruResource(KhachLuuTru::create($request->all()));
    }

    /**
     * Description
     * @param type $request
     * @param type $id
     * @return type
     */
    public function update($request, $id){
        $phong = KhachLuuTru::findOrFail($id);
        $phong->update($request->only(['ho_ten']));
        return new KhachLuuTruResource($phong);
    }

    /**
     * Description
     * @param type $id
     * @return type
     */
    public function destroy($id){
        $phong = KhachLuuTru::findOrFail($id);
        $phong->delete();
        return response()->json([
          'meesage' => 'Delete #' . $id . ' successful!'
        ], 200);
    }
}
