<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;

class storesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = ['ملابس', 'هدايا', 'كهربائيات', 'أثاث', 'ألعاب وهدايا', 'ساعات وعطور', 'الكل', 'منظفات', 'مواد تموينية'];

        // handel the search input for store name
        $filterSearch = [];
        if ($request->search) {
            $searchStores = User::where('roll', 'owner')->get();
            foreach ($searchStores as $user) {
                if ($user->stores->store_name == $request->search) {
                    array_push($filterSearch, $user);
                }
            }
            return view('/index', ['owners' => $filterSearch, 'categories' => $categories]);
        }

        //check if there is no filter     OR    if the route is empty     OR        the search bar is empty
        if ($request->category == '' || $request->category == 'الكل' ) {
            $storeOwner = User::where('roll', 'owner')->get();
            return view('/index', ['owners' => $storeOwner, 'categories' => $categories]);
        }

        $filteredOwners = [];
        // send only the owner with status 1 and category the same as request in an array 
        if ($request->category) {
            $filterStores = User::all()->where('roll', 'owner');
            foreach ($filterStores as $user) {
                if ($user->stores->status == '1' && $user->stores->category == $request->category) {
                    array_push($filteredOwners, $user);
                }
            }

            return view('/index', ['owners' => $filteredOwners, 'categories' => $categories]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $currnetStoreOwner = User::find($id)->get();
        $currentStore = Store::find($id);
        // dd($currentStore[0]->products);
        // dd($currentStore);
        return view('/store' , ['store' => $currentStore]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
