<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($guide_id,$place)
    {

//dd($guide_id);
//dd($place);
// Place::where('id', $place_id)->with(['guide' => function ($query) use($request) {
//            $query->with('language')->whereHas('language', function (Builder $query) use ($request){
//                $query->where('language_id','=',$request['language_id']);
//
//$booking = Reservation::with('guide')->where('id',$guide_id);
//return $comment;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($guide_id,$from,$to)
    {
//        dd($from);
$id=Auth::id();
        Reservation::create (
            [
                'from'=>$from,
                'to'=>$to,
                 'guides_id' =>$guide_id,
                'user_id'=>$id
            ]
        );
        return redirect("/profile");
    }


    public function profile()
    {
//        dd("profile");
        $id=Auth::id();
//         $info= Reservation::where('user_id', $id)->with(['guide' => function ($query) use($place_id) {
//            $query->with('place')->whereHas('place', function (Builder $query) use ($place_id){
//                $query->where('place_id','=',$place_id);
//            });
//        }])->get();

          $info= Reservation::where('user_id', $id)->with(['guide' => function ($query) {
            $query->with('place');}])->get();

//dd($info);
  return view('user.index',compact('info'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public  function guidetime($id)
  {


    $info= Reservation::where('guides_id', $id)->with('user')->get();
//    dd($info);
    return view('guide.show',compact('info'));

    }
}
