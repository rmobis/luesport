<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Storage;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$isAdmin = false;
		$user = Auth::user();

		$userData = $user->data;

		$dir = "user-files/" . str_replace("/", "_", substr(md5(sha1($user->email)), 7));
		$files = Storage::disk('public')->files($dir);

		$fileData = [];

		foreach ($files as $file) {
			$fileData[pathinfo($file)['filename']] = Storage::disk('public')->url($file);
		}

		return view('home', compact('fileData', 'userData', 'isAdmin'));

	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function view(\App\User $user) {
		$isAdmin = Auth::user()->isAdmin();

		if (!$isAdmin) {
			return redirect('login');
		}

		$userID = $user->id;
		$userData = $user->data;

		$dir = "user-files/" . str_replace("/", "_", substr(md5(sha1($user->email)), 7));
		$files = Storage::disk('public')->files($dir);

		$fileData = [];

		foreach ($files as $file) {
			$fileData[pathinfo($file)['filename']] = \Storage::disk('public')->url($file);
		}

		return view('home', compact('fileData', 'userData', 'userID', 'isAdmin'));
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function saveData() {
		$user = Auth::user();
		$user->data = json_encode(collect(request()->all())->filter()->all());
		$user->save();

		return redirect()->route('dashboard');
	}
}
