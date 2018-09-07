<?php

namespace App\Repositories;

use App\Models\User;
use App\Http\Resources\UserResource;

class UserRepository {

    public function colleciton(){
      return UserResource::collection(User::orderBy('created_at', 'desc')->paginate(25));
    }
    /**
     * Show a user member
     * @param int $id
     * @return void
     */
    public function show($id){
      return new UserResource(User::findOrFail($id));
    }

    /**
     * Store user from $request
     * @param Request $request
     * @return void
     */
    public function store($request){
      return new UserResource(User::create($request->all()));
    }

    /**
     * Description
     * @param type $request
     * @param type $id
     * @return type
     */
    public function update($request, $id){
        $user = User::findOrFail($id);
        $user->update($request->only(['username']));
        return new UserResource($user);
    }

    /**
     * Description
     * @param type $id
     * @return type
     */
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json([
          'meesage' => 'Delete #' . $id . ' successful!'
        ], 200);
    }
}
