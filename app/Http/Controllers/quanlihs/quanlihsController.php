<?php

namespace App\Http\Controllers\quanlihs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class quanlihsController extends Controller
{
    public function index()
	{
		return view('quanlyhoso.index');
	}
	 public function themhoso()
	{
		return view('quanlyhoso.add');
	}
	public function quanlynghihuu()
	{
		return view('quanlyhoso.tabquanlynghihuu');
	}
}
