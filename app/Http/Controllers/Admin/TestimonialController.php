<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =[
            'testimonials' => Testimonial::latest('id')->get(),
        ];
        return view('admin.pages.testimonial.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            Testimonial::create([
                "name" => $request->name,
                "company_name" => $request->company_name,
                "message" => $request->message,
                "rating" => $request->rating,
                "status" => $request->status,
            ]);
            DB::commit();
            Session::flash('success','Testimonial Added Successfuly');
            return redirect()->route('admin.testimonial.index');
        } catch (\Exception $e) {
           DB::rolllback();
           Session::flash('error', 'Testimonial Not Submited'.$e->getMessage());
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
        $data =[
            'testimonial' => Testimonial::findOrFail($id),
        ];
        return view('admin.pages.testimonial.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimonial=Testimonial::find($id);
        DB::beginTransaction();
        try {
            $testimonial->update([
                "name" => $request->name,
                "company_name" => $request->company_name,
                "message" => $request->message,
                "rating" => $request->rating,
                "status" => $request->status,
            ]);
            DB::commit();
            Session::flash('success','Testimonial Added Successfuly');
            return redirect()->route('admin.testimonial.index');
        } catch (\Exception $e) {
           DB::rolllback();
           Session::flash('error', 'Testimonial Not Submited'.$e->getMessage());
           return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial=Testimonial::find($id);
        $testimonial->delete();
    }
}
