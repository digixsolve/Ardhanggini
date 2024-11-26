<?php

namespace App\Http\Controllers\Admin;

use App\Models\SpecialOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SpecialOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'items' => SpecialOffer::latest()->get(),
        ];
        return view('admin.pages.special_offer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'products' => DB::table('products')->select('id', 'name')->latest('id')->get(),
        ];
        return view('admin.pages.special_offer.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate the request
        $validator = Validator::make($request->all(), [

            // 'product_id'        => 'nullable|exists:products,id',
            'name'              => 'required|string|max:255',
            'button_name'       => 'required|string|max:255',
            'button_link'       => 'required|string|max:255',

            'status'            => 'required|in:active,inactive,expired',

            'logo'              => 'nullable|file|mimes:webp,jpeg,png,jpg|max:2048',
            'image'             => 'nullable|file|mimes:webp,jpeg,png,jpg|max:2048',
            'banner_image'      => 'nullable|file|mimes:webp,jpeg,png,jpg|max:2048',
            'footer_banner'     => 'nullable|file|mimes:webp,jpeg,png,jpg|max:2048',

            'start_date'        => 'nullable|date',
            'end_date'          => 'nullable|date',
            'date'              => 'nullable|date',

        ], [
            // Custom error messages
            'product_id.exists'    => 'The selected Product is invalid.',
            'name.required'        => 'The name field is required.',
            'name.string'          => 'The name must be a string.',
            'name.max'             => 'The name must not exceed 255 characters.',
            'button_name.required' => 'The button name field is required.',
            'button_name.string'   => 'The button name must be a string.',
            'button_name.max'      => 'The button name must not exceed 255 characters.',
            'button_link.required' => 'The button link field is required.',
            'button_link.string'   => 'The button link must be a string.',
            'button_link.max'      => 'The button link must not exceed 255 characters.',

            'status.required'      => 'The status field is required.',
            'status.in'            => 'The status must be one of the following values: active, inactive, expired.',

            'logo.file'            => 'The logo must be a file.',
            'logo.mimes'           => 'The logo must be of type:webp, jpeg, png, jpg.',
            'logo.max'             => 'The logo must not exceed 2MB.',

            'image.file'           => 'The image must be a file.',
            'image.mimes'          => 'The image must be of type:webp, jpeg, png, jpg.',
            'image.max'            => 'The image must not exceed 2MB.',

            'banner_image.file'    => 'The banner image must be a file.',
            'banner_image.mimes'   => 'The banner image must be of type:webp, jpeg, png, jpg.',
            'banner_image.max'     => 'The banner image must not exceed 2MB.',

            'footer_banner.file'   => 'The footer banner must be a file.',
            'footer_banner.mimes'  => 'The footer banner must be of type:webp, jpeg, png, jpg.',
            'footer_banner.max'    => 'The footer banner must not exceed 2MB.',

            'start_date.date'      => 'The start date is not a valid date.',
            'end_date.date'        => 'The end date is not a valid date.',
            'date.date'            => 'The date is not a valid date.',
        ]);

        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                Session::flash('error', $message);
            }
            return redirect()->back()->withInput();
        }

        DB::beginTransaction();

        try {
            $files = [
                'logo'          => $request->file('logo'),
                'image'         => $request->file('image'),
                'banner_image'  => $request->file('banner_image'),
                'footer_banner' => $request->file('footer_banner'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'special_offer/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // Create the Offer model instance
            $offer = SpecialOffer::create([

                'created_by'        => Auth::guard('admin')->user()->id,

                'name'              => $request->name,
                'button_name'       => $request->button_name,
                'button_link'       => $request->button_link,

                'product_id'        => $request->product_id,

                'start_date'        => $request->start_date,
                'end_date'          => $request->end_date,
                'date'              => $request->date,

                'status'            => $request->status,

                'logo'              => $uploadedFiles['logo']['status']         == 1 ? $uploadedFiles['logo']['file_path']        : null,
                'image'             => $uploadedFiles['image']['status']        == 1 ? $uploadedFiles['image']['file_path']       : null,
                'banner_image'      => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : null,
                'footer_banner'     => $uploadedFiles['footer_banner']['status'] == 1 ? $uploadedFiles['footer_banner']['file_path'] : null,

                'created_at'        => now(),
            ]);

            DB::commit();

            //Mail Send
            // $admins = Admin::where('mail_status', 'mail')->get();

            // foreach ($admins as $admin) {
            //     Mail::to($admin->email)->send(new OfferListCreated($offer));
            // }
            //Mail Send

            return redirect()->route('admin.special-offer.index')->with('success', 'Special Offer created successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->with('error', 'An error occurred while creating the Offer: ' . $e->getMessage());
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
        $data = [
            'offer'     => SpecialOffer::findOrFail($id),
            'products'  => DB::table('products')->select('id', 'name')->latest('id')->get(),
        ];

        return view('admin.pages.special_offer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $offer = SpecialOffer::find($id);

        DB::beginTransaction();

        try {
            $files = [
                'logo'          => $request->file('logo'),
                'image'         => $request->file('image'),
                'banner_image'  => $request->file('banner_image'),
                'footer_banner' => $request->file('footer_banner'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'special_offer/' . $key;
                    $oldFile = $offer->$key ?? null;

                    if ($oldFile) {
                        Storage::delete("public/" . $oldFile);
                    }
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // Update the offer with the new or existing file paths
            $offer->update([

                'logo'          => $uploadedFiles['logo']['status'] == 1 ? $uploadedFiles['logo']['file_path'] : $offer->logo,
                'image'         => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : $offer->image,
                'banner_image'  => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : $offer->banner_image,
                'footer_banner' => $uploadedFiles['footer_banner']['status'] == 1 ? $uploadedFiles['footer_banner']['file_path'] : $offer->footer_banner,

                'updated_by'    => Auth::guard('admin')->user()->id,
                'name'          => $request->name,
                'button_name'   => $request->button_name,
                'button_link'   => $request->button_link,
                'product_id'    => $request->product_id,
                'start_date'    => $request->start_date,
                'end_date'      => $request->end_date,
                'date'          => $request->date,
                'status'        => $request->status,

            ]);

            DB::commit();

            return redirect()->route('admin.special-offer.index')->with('success', 'Special Offer updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while updating the offer: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $offer = SpecialOffer::findOrFail($id);

        // Delete associated files from storage
        $files = ['logo', 'image', 'banner_image', 'footer_banner'];

        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $oldFile = $offer->$key ?? null;
                if ($oldFile) {
                    Storage::delete("public/" . $oldFile);
                }
            }
        }
        $offer->delete();

        DB::commit();
    }

    public function updateStatusSpecial(Request $request, $id)
    {
        $offer = SpecialOffer::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}
