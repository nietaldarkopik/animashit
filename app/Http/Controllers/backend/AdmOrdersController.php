<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\GigPackageModel;
use App\Models\OrderModel;
use App\Models\OrderStatus;
use App\Models\ProfileModel;
use DB;
use Illuminate\Http\Request;

class AdmOrdersController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:order-list|order-create|order-edit|order-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:order-create'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:order-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:order-delete'], ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $orders = OrderModel::orderBy('id', 'DESC')->paginate(5);
        $customers = ProfileModel::where('user_type','=',5)->orderBy('id', 'DESC')->get();
        $packages = GigPackageModel::orderBy('id', 'DESC')->get();
        $order_status = OrderStatus::orderBy('id', 'ASC')->get();
        return view('backend.pages.orders.index', compact('orders', 'customers', 'packages', 'order_status'));
    }

    public function create()
    {
        $customers = ProfileModel::where('user_type','=',5)->orderBy('id', 'DESC')->get();
        $packages = GigPackageModel::orderBy('id', 'DESC')->get();
        $order_status = OrderStatus::orderBy('id', 'ASC')->get();
        return view('backend.pages.orders.create', compact('customers', 'packages', 'order_status'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_id' => 'required',
            'gig_package_id' => 'required',
            'price' => '',
            'status' => 'required',
            'date' => 'required|date',
        ]);

        $order = OrderModel::create([
            'customer_id' => $request->input('customer_id'),
            'gig_package_id' => $request->input('gig_package_id'),
            'price' => $request->input('price'),
            'status' => $request->input('status'),
            'date' => $request->input('date'),
            'note' => $request->input('note'),
        ]);

        return redirect()->route('admin.orders.index')
            ->with('success', 'Order created successfully');
    }

    public function show($id)
    {
        $order = OrderModel::find($id);
        return view('backend.pages.orders.show', compact('order'));
    }

    public function edit($id)
    {
        $order = OrderModel::find($id);
        $customers = ProfileModel::where('user_type','=',5)->orderBy('id', 'DESC')->get();
        $packages = GigPackageModel::orderBy('id', 'DESC')->get();
        $order_status = OrderStatus::orderBy('id', 'ASC')->get();

        return view('backend.pages.orders.edit', compact('order', 'customers','packages','order_status'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'customer_id' => 'required',
            'gig_package_id' => 'required',
            'price' => '',
            'status' => 'required',
            'date' => 'required|date',
        ]);

        $order = OrderModel::find($id);
        $order->customer_id = $request->input('customer_id');
        $order->gig_package_id = $request->input('gig_package_id');
        $order->price = $request->input('price');
        $order->status = $request->input('status');
        $order->date = $request->input('date');
        $order->note = $request->input('note');
        $order->save();

        return redirect()->route('admin.orders.index')
            ->with('success', 'Order updated successfully');
    }

    public function destroy($id)
    {
        DB::table("orders")->where('id', $id)->delete();
        return redirect()->route('admin.orders.index')
            ->with('success', 'Order deleted successfully');
    }
}
