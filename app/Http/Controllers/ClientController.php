<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Traits\SaveImage;


class ClientController extends Controller
{
    //
    use SaveImage;
    public function index()
    {
        $client = Client::all();
        return view('admin.pages.client.index',compact('client'));
    }
    public function create()
    {
        return view('admin.pages.client.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        if($request->has('logo'))
        {
            $data['logo'] = $this->client_logo($request->logo);
        }
        Client::create($data);
        return redirect()->route('client-management.index');

    }
    public function edit($id)
    {
        $client = Client::find($id);
        return view('admin.pages.client.edit',compact('client'));

    }
    public function update(Request $request,$id)
    {
        $client = Client::find($id);
        $data = $request->except(['_token','_method']);
        if($request->has('logo'))
        {
            $data['logo'] = $this->client_logo($request->logo);
        }
        $client->update($data);
        return redirect()->route('client-management.index');

    }
    public function destroy()
    {

    }
}
