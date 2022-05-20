<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\returnSelf;

class InventoryController extends Controller
{
    public function updateInventory(Request $request)
    {
        $val = Validator::make($request->all(), [
            'inventory_id' => 'required|exists:inventories,id',
            'product_name' => 'required|string|min:3|max:225',
            'price' => 'required|integer|min:1',
            'sku_number' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1',
            'description' => 'required|string|min:3|max:1000',
        ]);
        if($val->fails()) { return back()->with('error', $this->parseError($val->errors()->all())); }
        Inventory::where('id', $request->inventory_id)->update([
            'name' => $request->product_name,
            'sku_number' => $request->sku_number,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description
        ]);

        return back()->with('success', 'Inventory has been sucessfully updated');
    }


    public function createInventory(Request $request)
    {
        $val = Validator::make($request->all(), [
            'product_name' => 'required|string|min:3|max:225',
            'price' => 'required|integer|min:1',
            'sku_number' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1',
            'description' => 'required|string|min:3|max:1000',
        ]);
        if($val->fails()) { return back()->with('error', $this->parseError($val->errors()->all())); }

        Inventory::create([
            'name' => $request->product_name,
            'sku_number' => $request->sku_number,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description
        ]);

        return back()->with('success', 'Inventory added sucessfully');
    }


    public function deleteInventory($id)
    {
        Inventory::where('id', $id)->delete();
        return back()->with('success', 'Inventory Deleted sucessfully');
    }
}
