<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Channel;
use App\Gst;

class channelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $channel= Channel::where('channel_status', 1)->get();
          return view('admin.channel.index')->with('channel',$channel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $gst = Gst::where('gst_status',1)->first();
         return view('admin.channel.create')->with('gst',$gst);
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
        //dd($request->all());

       
       $total_tax =$request->tax5 + $request->tax6 + $request->tax7;
      // dd($total_tax);

      // dd($request->channel_price + $total_tax);



        $channel =new Channel();
        $channel->channel_name = $request->channel_name;

        $channel->channel_type = $request->channel_type;
        $channel->channel_duration = $request->channel_duration;
        $channel->channel_price = $request->channel_price;
        $channel->cgst = $request->tax5;
        $channel->sgst = $request->tax6;
        $channel->cess = $request->tax7;
        $channel->total_tax = $total_tax;

        $channel->gst = $request->tax;
        $channel->channel_amount = $request->channel_amount;
        $channel->total_amount = $request->channel_price + $total_tax;

        $channel->save();

        //return "hiii";
         return redirect()->route('channel.index')->with('message','succesfully created your field');



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
    public function edit(Channel $channel)
    {
        //

        $page_data['channel'] = $channel;
      

        return view('admin.channel.edit', compact('page_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Channel $channel)
    {
        //


             $channel_update = $channel->update($request->toArray());
        if ( $channel_update) {

            if (isset($request->channel_status) and $request->channel_status == '0') {
                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Deleted');
                Session::flash('toastcontent', 'channel  Details Deleted  Successfully');
            } else {

                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Success');
                Session::flash('toastcontent', 'channel  Details updated Successfully');
            }
        } else {
            Session::flash('toasttype', 'error');
            Session::flash('toasttitle', 'Error');
            Session::flash('toastcontent', 'channel  Details Not Updated');
        }

       
        
       
        return redirect()->route('channel.index');

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
}
