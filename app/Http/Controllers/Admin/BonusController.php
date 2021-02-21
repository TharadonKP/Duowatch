<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Bonu;
use Illuminate\Http\Request;

class BonusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $bonus = Bonu::where('bonus_id', 'LIKE', "%$keyword%")
                ->orWhere('bonus_name', 'LIKE', "%$keyword%")
                ->orWhere('amount', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('price_condition_minimum', 'LIKE', "%$keyword%")
                ->orWhere('price_condition_maximum', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $bonus = Bonu::latest()->paginate($perPage);
        }

        return view('admin.bonus.index', compact('bonus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.bonus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Bonu::create($requestData);

        return redirect('admin/bonus')->with('flash_message', 'Bonu added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $bonu = Bonu::findOrFail($id);

        return view('admin.bonus.show', compact('bonu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $bonu = Bonu::findOrFail($id);

        return view('admin.bonus.edit', compact('bonu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $bonu = Bonu::findOrFail($id);
        $bonu->update($requestData);

        return redirect('admin/bonus')->with('flash_message', 'Bonu updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Bonu::destroy($id);

        return redirect('admin/bonus')->with('flash_message', 'Bonu deleted!');
    }
}
