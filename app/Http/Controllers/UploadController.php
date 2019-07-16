<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function file($file) {
		$user = \Auth::user();
		$public = \Storage::disk('public');

		$image = request()->file('file');
		$ext = $image->getClientOriginalExtension();

		$dir = "user-files/" . str_replace("/", "_", substr(md5(sha1($user->email)), 7));
		$filename = $file.".".$ext;

		foreach ($public->files($dir) as $f) {
			$pinfo = pathinfo($f);

			if ($pinfo['filename'] == $file) {
				$hash = sha1($public->get($f));
				$newFile = $pinfo['dirname'] . '/old/' . $file . '-' . $hash . '.' . $pinfo['extension'];

				if ($public->exists($newFile)) {
					$public->delete($f);
				} else {
					$public->move($f, $newFile);
				}
			}
		}

		\Log::info($dir);
		\Log::info($filename);

		$status = $image->storeAs($dir, $filename, 'public');

		if ($status) {
			return response()->json($status, 200);
		} else {
			return response()->json('error', 400);
		}
	}
}
