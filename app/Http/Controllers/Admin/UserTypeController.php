<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\UserType;
use Illuminate\Http\Request;

class UserTypeController extends Controller
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
            $usertype = UserType::where('user_type_id', 'LIKE', "%$keyword%")
                ->orWhere('user_type_name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $usertype = UserType::latest()->paginate($perPage);
        }

        return view('admin.user-type.index', compact('usertype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.user-type.create');
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
        
        UserType::create($requestData);

        return redirect('admin/user-type')->with('flash_message', 'UserType added!');
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
        $usertype = UserType::findOrFail($id);

        return view('admin.user-type.show', compact('usertype'));
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
        $usertype = UserType::findOrFail($id);

        return view('admin.user-type.edit', compact('usertype'));
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
        
        $usertype = UserType::findOrFail($id);
        $usertype->update($requestData);

        return redirect('admin/user-type')->with('flash_message', 'UserType updated!');
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
        UserType::destroy($id);

        return redirect('admin/user-type')->with('flash_message', 'UserType deleted!');
    }
}
