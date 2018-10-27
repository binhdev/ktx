<?php

namespace App\Repositories;

use App\Models\BaoHong;
use App\Http\Resources\BaoHongResource;

class BaoHongRepository {

    public function collection(){
      return BaoHongResource::collection(BaoHong::orderBy('created_at', 'desc')->paginate(25));
    }
    /**
     * Show a BaoHong member
     * @param int $id
     * @return void
     */
    public function show($id){
      return new BaoHongResource(BaoHong::findOrFail($id));
    }

    /**
     * Store BaoHong from $request
     * @param Request $request
     * @return void
     */
    public function store($request){
      return new BaoHongResource(BaoHong::create($request->all()));
    }

    /**
     * Description
     * @param type $request
     * @param type $id
     * @return type
     */
    public function update($request, $id){
        $BaoHong = BaoHong::findOrFail($id);
        $BaoHong->update($request->only(['tai_san_id', 'mo_ta', 'nguoi_bao_id', 'ngay_bao', 'ngay_xu_ly', 'nguoi_xu_ly', 'tinh_trang']));
        return new BaoHongResource($BaoHong);
    }
    /**
     * Description
     * @param type $id
     * @return type
     */
    public function destroy($id){
        $BaoHong = BaoHong::findOrFail($id);
        $BaoHong->delete();
        return response()->json([
          'meesage' => 'Delete #' . $id . ' successful!'
        ], 200);
    }
}
