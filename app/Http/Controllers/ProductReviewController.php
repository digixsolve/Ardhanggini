<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductReview;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =[
            'reviews' => ProductReview::latest('id')->get(),
        ];
        return view('admin.pages.productReview.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.productReview.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            ProductReview::create([
                "name" => $request->name,
                "date" => $request->date,
                "rating" => $request->rating,
                "image" => $request->image,
                "message" => $request->message,
                "status" => $request->status,
            ]);
            DB::commit();
            Session::flash('success','Review Added Successfuly');
            return redirect()->route('admin.product-review.index');
        } catch (\Exception $e) {
            DB::rollback();
           Session::flash('error', 'Review Not Submited'.$e->getMessage());
           return redirect()->back()->withInput();
        }
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
        // $data =[
        //     'reviews' => Testimonial::findOrFail($id),
        // ];
        // return view('admin.pages.pro.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reviews=ProductReview::find($id);
        DB::beginTransaction();
        try {
            $reviews->update([
                "name" => $request->name,
                "date" => $request->date,
                "rating" => $request->rating,
                "image" => $request->image,
                "message" => $request->message,
                "status" => $request->status,
            ]);
            DB::commit();
            Session::flash('success','Review Added Successfuly');
            return redirect()->route('admin.product-review.index');
        } catch (\Exception $e) {
           DB::rolllback();
           Session::flash('error', 'Review Not Submited'.$e->getMessage());
           return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
