<?php

namespace App\Http\Controllers;

use App\Interfaces\ItemInterface;
use App\models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PgSql\Lob;

class ItemController extends Controller
{

    private $itemInterface;

    /**
     * constructer
     * @date    22/08/2023
     * @author  Thura Win
     * @param   ---
     * @return  ---
     */
    public function __construct(ItemInterface $itemInterface)
    {
        $this->itemInterface = $itemInterface;
    }

    /**
     * get all the items from the database.
     * @date    22/08/2023
     * @author  Thura Win
     * @param   ---
     * @return  json -> items.
     */
    public function index()
    {
        //
        try {
            // get all the items.
            $items = $this->itemInterface->getAllItems();


            // return all the items as the json obj.
            return response()->json(["items" => $items, "status" => 200]);
        } catch (\Throwable $e) {
            //throw $th;
            return response()->json(["Error" => $e->getMessage(), "status" => 500]);
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
     * @param  \App\models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
