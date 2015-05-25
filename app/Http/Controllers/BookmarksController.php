<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bookmark;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

/**
* @Resource("/bookmarks")
*/

class BookmarksController extends Controller {

	/**
	 *
	 * Display a listing of the resource.
	 *
	 * @return Response
	 *
	 */
	public function index()
	{
		$bookmarks = Bookmark::all();
		//print_r($bookmarks);
		try {
			$statusCode = 200;
	        $response = [
	        	'bookmarks'	=>	[]
	        ];

		    $response['bookmarks'] = $bookmarks;
	        
   		} catch (Exception $e) {
   			$response = [
            	"error" => "Nop? :D"
        	];
   			$statusCode = 400;
    	} finally {
    		return response()->json($response,$statusCode);
	    }
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::get('bookmark');
		$bookmark = Bookmark::create($input);
		try {
			$statusCode = 200;
	        $response = [
	        	'bookmark'	=>	[]
	        ];

	        $response['bookmark'] = $bookmark;
   		} catch (Exception $e) {
   			$response = [
            	"error" => "Nop? :D"
        	];
   			$statusCode = 400;
    	} finally {
    		return response()->json($response,$statusCode);
	    }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$bookmark = Bookmark::find($id);
		//print_r($bookmarks);
		try {
			$statusCode = 200;
	        $response = [
	        	'bookmark'	=>	[]
	        ];

	        $response['bookmark'] = $bookmark;
   		} catch (Exception $e) {
   			$response = [
            	"error" => "Nop? :D"
        	];
   			$statusCode = 400;
    	} finally {
    		return response()->json($response,$statusCode);
	    }
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::get('bookmark');
		$bookmark = Bookmark::find($id);
		//print_r($bookmarks);
		try {
			$statusCode = 200;
	        $response = [
	        	'bookmark'	=>	[]
	        ];

	    	$bookmark->title = $input->title;
	    	$bookmark->url = $input->url;
	    	$bookmark->tags = $input->tags;

	    	// store it again after updating.
	    	$bookmark->push();

	        $response['bookmark'] = $ret;
   		} catch (Exception $e) {
   			$response = [
            	"error" => "Nop? :D"
        	];
   			$statusCode = 400;
    	} finally {
    		return response()->json($response,$statusCode);
	    }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Bookmark::destroy($id);
		return response()->json(null,204);
	}

}
