<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        // $this->middleware('auth');
        
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $items = Item::all();
        return view('items.item_index', compact('items'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function add()
    {
        $items = Item::where('childable', '=', 1)->get();
        return view('items.item_add')->with('items', $items);
        
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
    	$data['childable'] = empty($data['childable']) ? 0 : 1;
        //Debug
        // dd($data);
        Item::create([
        	'name' => $data['name'],
        	'parent_id' => $data['parent_id'],
        	'parent_name' => $data['parent_name'],
        	'location_id' => $data['location_id'],
        	'location_name' => $data['location_name'],
        	// TODO: debug this value
        	// 'childable' => 1
        	// 'childable' => $data['childable']
    	]);
    	return redirect()->route('items.add');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
        //
        
        
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        
        //
        
        
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        
        //
        
        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        
        //
        
        
    }
}
