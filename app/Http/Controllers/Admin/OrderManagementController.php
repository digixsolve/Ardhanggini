<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Setting;
use App\Mail\UserOrderMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class OrderManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the current month and year for comparison
        $currentMonth = now()->month;
        $currentYear = now()->year;

        // Fetch orders with related order items and group them by user
        $data = [
            'orders' => Order::with('orderItems')
                // Fetch orders from the current year
                ->whereYear('created_at', $currentYear)
                // Filter orders for the current month and previous months
                ->where(function ($query) use ($currentMonth) {
                    // Fetch orders from the current month first, then the others
                    $query->whereMonth('created_at', $currentMonth)
                        ->orWhereMonth('created_at', '!=', $currentMonth);
                })
                // Sort orders: Current month first, then past orders, both descending by creation date
                ->orderByRaw('MONTH(created_at) DESC, created_at DESC')
                // Group orders by user
                ->get()
                ->groupBy('user_id'), // Group by user_id
            'pendingOrdersCount' => Order::where('status', 'pending')->count(),
            'deliveredOrdersCount' => Order::where('status', 'delivered')->count(),
        ];

        // Return the view with the data
        return view('admin.pages.orderManagement.index', $data);
    }

    // public function index()
    // {
    //     $data = [

    //         'pendingOrdersCount' => Order::where('status', 'pending')->count(),
    //         'deliveredOrdersCount' => Order::where('status', 'delivered')->count(),
    //         'orders' => Order::with('orderItems')->latest('created_at')->get(),
    //     ];
    //     return view('admin.pages.orderManagement.index', $data);
    // }

    public function orderDetails($id)
    {

        $data = [
            'order' => Order::with('orderItems', 'user')->where('id', $id)->first(),
        ];
        return view('admin.pages.orderManagement.orderDetails', $data);
    }
    public function orderReport(Request $request)
    {
        $query = Order::query();

        if ($request->has('start_date') && $request->has('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $query->whereBetween('order_created_at', [$startDate, $endDate]);
        }
        $total_sale           = $query->sum('total_amount');
        $orders               = $query->with('orderItems')->latest('order_created_at')->get();
        $pendingOrdersCount   = $query->where('status', 'pending')->count();
        $deliveredOrdersCount = $query->where('status', 'delivered')->count();
        $data = [
            'total_sale'           => $total_sale,
            'pendingOrdersCount'   => $pendingOrdersCount,
            'deliveredOrdersCount' => $deliveredOrdersCount,
            'orders'               => $orders,
        ];
        if ($request->ajax()) {
            return view('admin.pages.orderManagement.partial.orderReportTable', $data)->render();
        } else {
            return view('admin.pages.orderManagement.orderReport', $data);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function statusUpdate(Request $request, string $id)
    // {
    //     $order = Order::findOrFail($id);
    //     $previousStatus = $order->payment_status;
    //     $order->update([
    //         'status' => $request->status,
    //         'payment_status' => $request->payment_status,
    //         'external_order_id' => $request->external_order_id,
    //         'client_payment_amount' => $request->client_payment_amount,
    //     ]);

    //     if ($request->payment_status === 'delivery_charge_paid') {
    //         $subTotal = $order->sub_total ?? 0;
    //         $shippingCharge = $order->shipping_charge ?? 0;
    //         $clientPayment = is_numeric($order->client_payment_amount) ? $order->client_payment_amount : 0;

    //         $newTotal = $subTotal + $shippingCharge - $clientPayment;

    //         $order->update([
    //             'total_amount' => max($newTotal, 0), // Prevent negative total just in case
    //         ]);
    //     }
    //     if ($request->payment_status === 'paid') {
    //         $subTotal = $order->sub_total ?? 0;
    //         $shippingCharge = $order->shipping_charge ?? 0;

    //         $clientPayment = is_numeric($order->client_payment_amount) && $order->client_payment_amount > 0
    //             ? $order->client_payment_amount
    //             : $subTotal + $shippingCharge;

    //         $totalAmount = $subTotal + $shippingCharge - $clientPayment;

    //         $order->update([
    //             'total_amount' => max($totalAmount, 0),
    //         ]);
    //     }



    //     if ($previousStatus === 'unpaid' && $request->payment_status === 'delivery_charge_paid' || $previousStatus === 'unpaid' && $request->payment_status === 'paid' || $previousStatus === 'delivery_charge_paid' && $request->payment_status === 'paid') {
    //         try {
    //             $user = $order->user;
    //             $setting = Setting::first();
    //             $data = [
    //                 'order'             => $order,
    //                 'order_items'       => $order->orderItems,
    //                 'user'              => $user,
    //                 'shipping_charge'   => $order->shipping_charge,
    //                 'shipping_method'   => optional($order->shippingCharge)->title,
    //             ];
    //             Mail::to([$order->shipping_email, $user->email])->send(new UserOrderMail($user->name, $data, $setting));
    //         } catch (\Exception $e) {
    //             // Handle PDF save exception
    //             Session::flash('error', 'Failed to send Mail: ' . $e->getMessage());
    //         }
    //     }

    //     // if($request->payment_status && $request->payment_status == 'paid'){
    //     //     $order->update([
    //     //        'total_amount' => $order->total_amount - $order->client_payment_amount,
    //     //     ]);
    //     // }
    //     Session::flash('success', 'Order Status Updated Successfully');
    //     return redirect()->back();
    // }

    public function statusUpdate(Request $request, string $id)
    {
        $order = Order::findOrFail($id);
        $previousPaymentStatus = $order->payment_status;

        // Step 1: Update basic order info
        $order->update([
            'status' => $request->status,
            'payment_status' => $request->payment_status,
            'external_order_id' => $request->external_order_id,
            'client_payment_amount' => $request->client_payment_amount,
        ]);

        // Step 2: Recalculate total if payment_status is changed
        $shouldRecalculateTotal = in_array($request->payment_status, ['delivery_charge_paid', 'paid']);

        if ($shouldRecalculateTotal) {
            $subTotal = $order->sub_total ?? 0;
            $shippingCharge = $order->shipping_charge ?? 0;

            $clientPayment = is_numeric($request->client_payment_amount) && $request->client_payment_amount > 0
                ? $request->client_payment_amount
                : ($request->payment_status === 'paid' ? $subTotal + $shippingCharge : 0);

            $newTotal = $subTotal + $shippingCharge - $clientPayment;

            $order->update([
                'total_amount' => max($newTotal, 0), // Prevent negative total
            ]);
        }

        // Step 3: Conditionally send email on status transitions
        $paymentStatusChanged = (
            ($previousPaymentStatus === 'unpaid' && in_array($request->payment_status, ['delivery_charge_paid', 'paid'])) ||
            ($previousPaymentStatus === 'delivery_charge_paid' && $request->payment_status === 'paid')
        );

        if ($paymentStatusChanged) {
            try {
                $user = $order->user;
                $setting = Setting::first();

                $data = [
                    'order'             => $order,
                    'order_items'       => $order->orderItems,
                    'user'              => $user,
                    'shipping_charge'   => $order->shipping_charge,
                    'shipping_method'   => optional($order->shippingCharge)->title,
                ];

                Mail::to([$order->shipping_email, $user->email])->send(new UserOrderMail($user->name, $data, $setting));
            } catch (\Exception $e) {
                Session::flash('error', 'Failed to send mail: ' . $e->getMessage());
            }
        }

        Session::flash('success', 'Order status updated successfully');
        return redirect()->back();
    }


    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        foreach ($order->orderItems as $orderItem) {
            $orderItem->delete();
        }
        $order->delete();
    }
}
