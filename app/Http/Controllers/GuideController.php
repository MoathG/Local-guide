<?php

namespace App\Http\Controllers;

use App\Guide;
use App\Language;

use App\Reservation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Place;


class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $place_id)
    {


        $place = Place::where('id', $place_id)->get();
        $guides = Place::where('id', $place_id)->with(['guide' => function ($query) use ($request) {
            $query->with('language')->whereHas('language', function (Builder $query) use ($request) {
                $query->where('language_id', '=', $request['language_id']);
            });
        }])->get();


        $availble = [];

        foreach ($guides as $guide) {
            $reservations = Reservation::where('guides_id', $guide->id)->where(['to' => $request['to'], 'from' => $request['from']])->get();

            if (count($reservations) !== 0) {

            } else
                $availble[] = $guide;
        }

        return view('place.index', compact('availble', 'place', 'request'));
//         return $availble;
        //return  redirect()->route('main',$place_id)->with('test',$availble);return redirect()->back()->with('availble',$availble);
    }

//dd($available);
//dd($comment);
//dd($hala);
//$comment = Guide::with('language')->get();
//$hala=Reservation::with('guide')->where('to','1999-10-19 00:00:00')->get();

//dd($hala);
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function conformation($guide_id, $place_id, $from, $to)
    {


        $too = \Carbon\Carbon::createFromFormat('Y-m-d', $to);
        $fromm = \Carbon\Carbon::createFromFormat('Y-m-d', $from);

        $days = $too->diffInDays($fromm);

//         dd($days);
        $guides = Guide::with('place')->where('id', $guide_id)->get();
//        dd($guides);
        return view('reservation.index', compact('guides', 'from', 'to', 'days'));
//         $guides = Place::where('id', $place_id)->with('guide')->whereHas('id', function (Builder $query)use($guide_id) {
//                $query->where('id','=',$guide_id);})->get();

    }

    public function login()
    {
        $guide = Guide::all();
        return view('guide.index', compact('guide'));
    }


}

