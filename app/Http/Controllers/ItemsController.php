<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
// use Illuminate\Http\Request;
use App\Http\Requests\ItemFormRequest;

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
        $items = ['0' => null] + Item::where('childable', '=', 1)->lists('name', 'id');
        return view('items.item_add')->with('items', $items);
        
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ItemFormRequest $request)
    {
        $data = $request->input();
    	$data['childable'] = empty($data['childable']) ? false : true;
    	if(empty($data['quantity'])) {
    		$data['quantity'] = 1;
    	}
        //Debug
        // dd($data);
        Item::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'quantity' => $data['quantity'],
            'parent_id' => $data['parent_id'],
            'parent_name' => $data['parent_name'],
            'location_id' => $data['location_id'],
            'location_name' => $data['location_name'],
            'childable' => $data['childable']
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
        $item = Item::find($id);
        return view('items.item_show')->with('item', $item);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $items = ['0' => null] + Item::where('childable', '=', 1)->lists('name', 'id');
        $item = Item::find($id);
        return view('items.item_edit', compact('items', 'item'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, ItemFormRequest $request)
    {
        $item = Item::find($id);
        $data = $request->input();
    	$data['childable'] = empty($data['childable']) ? false : true;
    	if(empty($data['quantity'])) {
    		$data['quantity'] = 1;
    	}
        //Debug
        // dd($data);
		$item->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'quantity' => $data['quantity'],
            'parent_id' => $data['parent_id'],
            'parent_name' => $data['parent_name'],
            'location_id' => $data['location_id'],
            'location_name' => $data['location_name'],
            'childable' => $data['childable']
		]);
        return redirect()->route('items.index');
    }
    
    /**
     * Show the form for deleting the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete($id)
    {
        $item = Item::find($id);
        return view('items.item_delete', compact('item'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect()->route('items.index');
    }
}
