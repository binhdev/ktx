<?php

namespace App\Repositories;

use App\Models\TaiSan;
use App\Http\Resources\TaiSanResource;

class TaiSanRepository {

    public function collection(){
      return TaiSanResource::collection(TaiSan::orderBy('created_at', 'desc')->paginate(25));
    }
    /**
     * Show a TaiSan member
     * @param int $id
     * @return void
     */
    public function show($id){
      return new TaiSanResource(TaiSan::findOrFail($id));
    }

    /**
     * Store TaiSan from $request
     * @param Request $request
     * @return void
     */
    public function store($request){
      return new TaiSanResource(TaiSan::create($request->all()));
    }

    /**
     * Description
     * @param type $request
     * @param type $id
     * @return type
     */
    public function update($request, $id){
        $TaiSan = TaiSan::findOrFail($id);
        $TaiSan->update($request->only(['ten_tai_san', 'don_vi_tinh', 'so_luong', 'tinh_trang', 'phong_id']));
        return new TaiSanResource($TaiSan);
    }
    /**
     * Description
     * @param type $id
     * @return type
     */
    public function destroy($id){
        $TaiSan = TaiSan::findOrFail($id);
        $TaiSan->delete();
        return response()->json([
          'meesage' => 'Delete #' . $id . ' successful!'
        ], 200);
    }
}
