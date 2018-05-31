<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
      return \App\Log::all();
    }

    public function show($id) {
      // return \App\Profile::with(['house', 'badges'])->where('id', $id)->get();
    }

    public function update(Request $request, $id) {

      // if (! $request->has(['log', 'giver_id'])) {
      //   return response('Bad request', 400);
      // }

      // $profile = \App\Profile::firstOrCreate([
      //   'studentnr' => $id
      // ]);

      // if (empty( $profile->house_id ) ) {
      //   $profile->house_id = \App\House::sortHouse();
      // }

      // if ($request->has('points')) {
      //   $profile->points += $request->input('points');
      //   \App\Log::create([
      //     'user_id'   => $id,
      //     'body'      => $request->input('log'),
      //     'giver_id'  => $request->input('giver_id')
      //   ]);
      // }

      // $profile->save();
    }

}
