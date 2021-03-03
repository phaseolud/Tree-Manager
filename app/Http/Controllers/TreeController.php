<?php

namespace App\Http\Controllers;

use App\Imports\TreeImport;
use App\Models\Tree;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('trees.index', ['trees' => Tree::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trees.create');
    }

    /**
     * Show the input to upload excel file with trees
     *
     * @return \Illuminate\Http\Response
     */
    public function create_excel()
    {
        return view('trees.create_excel');
    }

    /**
     * store the uploaded excel file.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_excel(Request $request)
    {
//        $validated = $request->validate([
//           'excel_file' => 'required'
//        ]);
        Excel::import(new TreeImport, $request->file('excel_file'));
        return redirect('/');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
           'name' => 'required',
           'name_latin' => 'required',
           'planting_date' => 'date|required',
            'origin_from' => 'required',
            'rootstock' => '',
            'background_image' => 'file' ,
            'bloom_start_week' => 'integer|min:1|max:52',
            'bloom_end_week' => 'integer|min:1|max:52|gte:bloom_start_week',
            'harvest_start_week' => 'integer|min:1|max:52',
            'harvest_end_week' => 'integer|min:1|max:52|gte:harvest_start_week',
            'body' => 'required'
        ]);

        if($request['background_image']) {
            $validated['background_image'] = $request['background_image']->store('background_images');
        }

        Tree::create($validated);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tree  $tree
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Tree $tree)
    {
        return view('trees.show',['tree' => $tree]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function edit(Tree $tree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tree $tree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tree $tree)
    {
        //
    }
}
