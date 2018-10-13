<?php

namespace App\Repositories;

use App\Models\DangKyOnline;
use App\Http\Resources\DangKyOnlineResource;

class DangKyOnlineRepository {

    public function collection(){
      return DangKyOnlineResource::collection(DangKyOnline::orderBy('created_at', 'desc')->paginate(25));
    }
    /**
     * Show a user member
     * @param int $id
     * @return void
     */
    public function show($id){
      return new DangKyOnlineResource(DangKyOnline::findOrFail($id));
    }

    /**
     * Store user from $request
     * @param Request $request
     * @return void
     */
    public function store($request){
      return new DangKyOnlineResource(DangKyOnline::create($request->all()));
    }

    /**
     * Description
     * @param type $request
     * @param type $id
     * @return type
     */
    public function update($request, $id){
        $DangKyOnline = DangKyOnline::findOrFail($id);
        $DangKyOnline->update($request->only(['ten_DangKyOnline']));
        return new DangKyOnlineResource($DangKyOnline);
    }

    /**
     * Description
     * @param type $id
     * @return type
     */
    public function destroy($id){
        $DangKyOnline = DangKyOnline::findOrFail($id);
        $DangKyOnline->delete();
        return response()->json([
          'meesage' => 'Delete #' . $id . ' successful!'
        ], 200);
    }
}
