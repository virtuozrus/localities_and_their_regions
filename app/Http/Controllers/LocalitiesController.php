<?php

namespace App\Http\Controllers;

use App\Models\Locality;
use Illuminate\Http\Request;

class LocalitiesController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $inputSearch = null;

        if ($request->has('inputSearch')) {
            $inputSearch = $request->query('inputSearch');
        }

        $localities = Locality::with('region', 'districts')
            ->search($inputSearch)
            ->get()
            ->toArray();

        return view('localities.index', compact('localities', 'inputSearch'));
    }
}
