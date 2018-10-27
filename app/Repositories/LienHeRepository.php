<?php

namespace App\Repositories;

use App\Models\LienHe;
use App\Http\Resources\LienHeResource;

class LienHeRepository {

    public function collection(){
      return LienHeResource::collection(LienHe::orderBy('created_at', 'desc')->paginate(25));
    }
    /**
     * Show a LienHe member
     * @param int $id
     * @return void
     */
    public function show($id){
      return new LienHeResource(LienHe::findOrFail($id));
    }

    /**
     * Store LienHe from $request
     * @param Request $request
     * @return void
     */
    public function store($request){
      return new LienHeResource(LienHe::create($request->all()));
    }

    /**
     * Description
     * @param type $request
     * @param type $id
     * @return type
     */
    public function update($request, $id){
        $LienHe = LienHe::findOrFail($id);
        $LienHe->update($request->only(['noi_dung_tra_loi', 'nguoi_dung_id', 'tinh_trang']));
        return new LienHeResource($LienHe);
    }
    /**
     * Description
     * @param type $id
     * @return type
     */
    public function destroy($id){
        $LienHe = LienHe::findOrFail($id);
        $LienHe->delete();
        return response()->json([
          'meesage' => 'Delete #' . $id . ' successful!'
        ], 200);
    }
}
