<?php

namespace App\Repositories;

use App\Models\TinTuc;
use App\Http\Resources\TinTucResource;

class TinTucRepository {

    public function collection(){
      return TinTucResource::collection(TinTuc::orderBy('created_at', 'desc')->paginate(25));
    }
    /**
     * Show a TinTuc member
     * @param int $id
     * @return void
     */
    public function show($id){
      return new TinTucResource(TinTuc::findOrFail($id));
    }

    /**
     * Store TinTuc from $request
     * @param Request $request
     * @return void
     */
    public function store($request){
      return new TinTucResource(TinTuc::create($request->all()));
    }

    /**
     * Description
     * @param type $request
     * @param type $id
     * @return type
     */
    public function update($request, $id){
        $TinTuc = TinTuc::findOrFail($id);
        $TinTuc->update($request->only(['tieu_de', 'tom_tat', 'noi_dung', 'anh_minh_hoa', 'file_dinh_kem', 'ngay_dang_tin', 'the_loai_tin_id']));
        return new TinTucResource($TinTuc);
    }
    /**
     * Description
     * @param type $id
     * @return type
     */
    public function destroy($id){
        $TinTuc = TinTuc::findOrFail($id);
        $TinTuc->delete();
        return response()->json([
          'meesage' => 'Delete #' . $id . ' successful!'
        ], 200);
    }
}
