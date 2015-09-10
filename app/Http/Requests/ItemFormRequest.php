<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class ItemFormRequest extends Request
{
    
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
        	'name' => 'required',
        	'parent_id' => 'required|numeric',
        	// 'parent_name' => 'alpha',
        	'location_id' => 'numeric',
        	// 'location_name' => 'regex:/^[A-Za-z0-9 ]+$/',
            // 'childable' => 'boolean',
    	];
    }
}
