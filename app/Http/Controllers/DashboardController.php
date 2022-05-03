<?php

namespace App\Http\Controllers;

use App\DashboardItem;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $items = DashboardItem::all();

        return view('dashboard', [
            'items' => $items
        ]);
    }

    public function edit($id)
    {
        $item = DashboardItem::find($id);

        return view('edit', [
            'id' => $id,
            'title' => $item->title ?? "",
            'url' => $item->url ?? "",
            'color' => $item->color ?? ""
        ]);
    }

    public function process(Request $request)
    {
        $id = $request->id;
        $item = DashboardItem::find($id);

        $item->title = $request->title;
        $item->url = $request->url;
        $item->color = $request->color;

        $item->save();

        return redirect()->to('/');
    }

    public function delete($id)
    {

        $item = DashboardItem::find($id);

        $item->title = null;
        $item->url = null;
        $item->color = null;

        $item->save();

        return redirect()->to('/');
    }
}
