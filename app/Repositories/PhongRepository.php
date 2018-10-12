<?php

namespace App\Repositories;

use App\Models\Phong;
use App\Http\Resources\PhongResource;

class PhongRepository {

    public function collection(){
      return PhongResource::collection(Phong::orderBy('created_at', 'desc')->paginate(25));
    }
    /**
     * Show a user member
     * @param int $id
     * @return void
     */
    public function show($id){
      return new PhongResource(Phong::findOrFail($id));
    }

    /**
     * Store user from $request
     * @param Request $request
     * @return void
     */
    public function store($request){
      return new PhongResource(Phong::create($request->all()));
    }

    /**
     * Description
     * @param type $request
     * @param type $id
     * @return type
     */
    public function update($request, $id){
        $phong = Phong::findOrFail($id);
        $phong->update($request->only(['ten_phong']));
        return new PhongResource($phong);
    }

    /**
     * Description
     * @param type $id
     * @return type
     */
    public function destroy($id){
        $phong = Phong::findOrFail($id);
        $phong->delete();
        return response()->json([
          'meesage' => 'Delete #' . $id . ' successful!'
        ], 200);
    }
}
