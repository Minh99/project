<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\DoanhNghiep;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class DoanhNghiepController extends Controller
{
    public function index(HttpFoundationRequest $request)
    {
        $category_id = $request->get('category_id') ?? Category::DKY_MOI;

        // get all data doanh nghiep
        $dns = DoanhNghiep::where('category_id', $category_id)->get();
        $categories = Category::all();
        $now = Carbon::now('Asia/Ho_Chi_Minh');

        return view('index', compact('dns', 'categories', 'now'));
    }
}
