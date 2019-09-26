<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Home\Entities\Home;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function list()
    {
        $homes = Home::all();

        return view('home::list', compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $home = new Home();

        return view('home::create', compact('home'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function doCreate(Request $request)
    {
        $home = new Home;

        $home->name = $request->name;
        $home->title = $request->title;
        $home->description = $request->description;
        $home->save();

        return redirect(route('admin.home.list'))->with('status', 'O Home'.$home->name.' foi salvo com sucesso!!');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $home = Home::find($id);

        return view('home::edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $home = Home::find($id);

        $home->name = $request->name;
        $home->title = $request->title;
        $home->description = $request->description;
        $home->save();

        return redirect(route('admin.home.list'))->with('status', 'O Home '.$home->name.' foi salvo com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        $home = Home::find($id);

        $home->name = $request->name;
        $home->title = $request->title;
        $home->description = $request->description;
        $home->delete();

        return redirect(route('admin.home.list'))->with('status', 'O Home'.$home->name.' foi deletado com sucesso!!');
    }
}
