<x-admin-app-layout :title="'Product Edit'">
    <style>
        .image-input-empty {
            background-image: url({{ asset('admin/assets/media/svg/files/blank-image.svg') }});
        }

        /* Custom Multi file upload */
        .img-thumb {
            border: 2px solid none;
            border-radius: 3px;
            padding: 1px;
            cursor: pointer;
            width: 70px;
            height: 60px;
            border-radius: 0.475rem;
        }


        .img-thumb-wrapper {
            display: inline-block;
            margin: 1rem 1rem 0 0;
        }


        .remove {
            display: block;
            background: #cf054f;
            border: 1px solid none;
            color: white;
            text-align: center;
            cursor: pointer;
            font-size: 12px;
            padding: 2px 5px;
        }


        .remove:hover {
            background: white;
            color: black;
        }


        .dropzone-field {
            border: 1px dashed #009ef7;
            display: flex;
            flex-wrap: wrap;
            /* Allow multiple images in a row */
            align-items: center;
            border-radius: 4px;
            padding: 10px 5px;
            justify-content: center;
        }


        #files {
            display: none;
        }


        .custom-file-upload {
            border: 0px solid #ccc;
            padding: 6px 12px;
            cursor: pointer;
            background-color: transparent;
        }


        .custom-file-upload i {
            margin-right: 5px;
        }

        /* Custom Multi file upload */
    </style>
    <div id="kt_app_content_container" class="app-container container-xxl">
        <form id="kt_ecommerce_add_product_form" method="post" action="{{ route('admin.product.update', $product->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="gap-7 gap-lg-10 mb-7  col-4">
                    {{-- Status Card Start --}}
                    <div class="card card-flush py-4 mb-6">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Status</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <x-metronic.select-option id="kt_ecommerce_add_product_status_select"
                                class="form-select mb-2" data-control="select2" data-hide-search="true" name="status"
                                data-placeholder="Select an option">
                                <option></option>
                                <option value="published" @selected($product->status == 'published')>Published</option>
                                <option value="draft" @selected($product->status == 'draft')>Draft</option>
                                <option value="inactive" @selected($product->status == 'inactive')>Inactive</option>
                            </x-metronic.select-option>
                            <div class="text-muted fs-7">Set the product status.</div>
                        </div>
                    </div>
                    {{-- Status Card End --}}
                    {{-- Category Card Start --}}
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Category</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="fv-row">
                                <x-metronic.label for="brand_id" class="col-form-label required fw-bold fs-6">
                                    {{ __('Select Brand') }}</x-metronic.label>
                                <x-metronic.select-option id="brand_id" class="form-select mb-2" name="brand_id"
                                    data-control="select2" data-placeholder="Select an option" data-allow-clear="true">
                                    <option></option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}" @selected($brand->id == $product->brand_id)>
                                            {{ $brand->name }}
                                        </option>
                                    @endforeach
                                </x-metronic.select-option>
                            </div>
                            <div class="fv-row">
                                <x-metronic.label for="category_id" class="col-form-label required fw-bold fs-6">
                                    {{ __('Select Category') }}</x-metronic.label>
                                <x-metronic.select-option id="category_id" class="form-control select mb-2"
                                    name="category_id[]" multiple multiselect-search="true"
                                    multiselect-select-all="true" data-control="select2"
                                    data-placeholder="Select an option" data-allow-clear="true">
                                    @php
                                        // Ensure $categoryIds is an array
                                        $categoryIds = isset($product->category_id)
                                            ? (is_string($product->category_id)
                                                ? json_decode($product->category_id, true)
                                                : $product->category_id)
                                            : [];
                                        $tagIds = isset($product->tag_id) ? json_decode($product->tag_id, true) : [];
                                        if (!is_array($tagIds)) {
                                            $tagIds = [];
                                        }
                                    @endphp

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ in_array($category->id, $categoryIds) ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </x-metronic.select-option>

                                {{-- @php
                                        $categoryIds = is_string($product->category_id)
                                            ? json_decode($product->category_id, true) // Convert JSON string to array
                                            : $product->category_id;
                                    @endphp

                                    @if (count($categories) > 0)
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ in_array($category->id, $categoryIds) ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    @endif --}}
                            </div>
                            <div class="fv-row">
                                <x-metronic.label for="color" class="col-form-label required fw-bold fs-6">
                                    {{ __('Add Color') }}
                                </x-metronic.label>
                                <!-- Input element for Tagify -->
                                <input class="form-control d-flex align-items-center" name="color"
                                    value="{{ old('color', $product->color) }}" id="color" />
                            </div>
                        </div>
                    </div>
                    {{-- Category Card End --}}
                </div>
                <div class="gap-7 gap-lg-10 col-8">
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_general">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_media">Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_advanced">Inventory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_price">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_meta">Meta Options</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                {{-- General Info --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>General</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="mb-5 fv-row">
                                            <x-metronic.label class="form-label">Product Name</x-metronic.label>
                                            <x-metronic.input type="text" name="name" class="form-control mb-2"
                                                placeholder="Product name recommended" :value="old('name', $product->name)">
                                            </x-metronic.input>
                                            <div class="text-muted fs-7">
                                                A product name is and recommended to be unique.
                                            </div>
                                        </div>
                                        <div class="mb-5 fv-row">
                                            <x-metronic.label class="form-label">Tags</x-metronic.label>
                                            <input class="form-control" name="tags" id="product_Tags"
                                                value="{{ old('tags', $product->tags) }}" />
                                        </div>
                                        <div class="mb-5 fv-row">
                                            <x-metronic.label class="form-label">Short Description</x-metronic.label>
                                            <x-metronic.textarea id="short_description" name="short_description"
                                                placeholder="Add Product Short Description" class="form-control mb-2"
                                                cols="30"
                                                rows="3">{!! old('short_description', $product->short_description) !!}</x-metronic.textarea>
                                        </div>
                                        <div class="mb-5 fv-row">
                                            <x-metronic.label class="form-label">Product Overview</x-metronic.label>
                                            <textarea name="overview" class="ckeditor">{!! old('overview', $product->overview) !!}</textarea>
                                            <div class="text-muted fs-7">
                                                Add product overview here.
                                            </div>
                                        </div>
                                        <div class="mb-5 fv-row">
                                            <x-metronic.label class="form-label">Product Description</x-metronic.label>
                                            <textarea name="description" class="ckeditor">{!! old('description', $product->description) !!}</textarea>
                                            <div class="text-muted fs-7">
                                                Add product description here.
                                            </div>
                                        </div>
                                        <div class="mb-5 fv-row">
                                            <x-metronic.label class="form-label">Product
                                                Specification</x-metronic.label>
                                            <textarea name="specification" class="ckeditor">{!! old('specification', $product->specification) !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_add_product_media" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                {{-- Inventory --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Media</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row mb-5">
                                            <div class="col-lg-4 mb-4">
                                                <div>
                                                    <label class="form-label">Thumbnail Image</label>
                                                </div>
                                                <div class="image-input image-input-empty" data-kt-image-input="true"
                                                    style="background-image: url({{ asset('storage/' . $product->thumbnail) }}); width: auto; background-size: contain;
                                                    background-position: center;
                                                    border: 1px solid #009ae5;">
                                                    <div class="image-input-wrapper w-100px h-70px"
                                                        style="background-size: contain; background-position: center">
                                                    </div>

                                                    <label
                                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        data-bs-dismiss="click" title="Change avatar">
                                                        <i class="bi bi-pencil-fill fs-7"></i>

                                                        <input type="file" name="thumbnail"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="avatar_remove" />
                                                    </label>

                                                    <span
                                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                        data-bs-dismiss="click" title="Cancel avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>

                                                    <span
                                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                        data-bs-dismiss="click" title="Remove avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                </div>
                                                <div class="invalid-feedback"> Please Enter Thumbnail Image. </div>
                                            </div>
                                            {{-- <div class="col-lg-8">
                                                <label class="form-label">Multi Image</label>
                                                <div class="dropzone-field">
                                                    <label for="files" class="custom-file-upload">
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0"><i
                                                                    class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                            </p>
                                                            <h5 class="mb-0">Drop files here or click to upload.
                                                                <br>
                                                                <span class="text-muted"
                                                                    style="font-size: 10px">Upload 10 File</span>
                                                            </h5>
                                                        </div>
                                                    </label>
                                                    <input type="file" id="files" name="multi_img[]" multiple
                                                        class="form-control" style="display: none;" />
                                                </div>

                                                <div class="existing-images">
                                                    @foreach ($product->multiImages as $image)
                                                        <div class="img-thumb-wrapper card shadow">
                                                            <img class="img-thumb"
                                                                src="{{ asset('storage/' . $image->photo) }}"
                                                                title="{{ $image->photo }}" />
                                                            <br />
                                                            <a href="{{ route('admin.multiimage.destroy', $image->id) }}"
                                                                class="remove delete">Remove</a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-8 mb-4">
                                                <div class="fv-row pt-5">
                                                    <x-metronic.label for="video_link" class="form-label">Product
                                                        Video
                                                        Link</x-metronic.label>
                                                    <input type="text" name="video_link" class="form-control mb-2"
                                                        placeholder="Product Video Link" id="video_link"
                                                        value="{{ old('video_link', $product->video_link) }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div class="p-5 mt-5" style="background-color: #eee">
                                                    <p>Product Multi image with Color Variation</p>
                                                    <!--begin::Repeater-->
                                                    <div id="productMediaColor">
                                                        <!--begin::Form group-->
                                                        <div class="form-group">
                                                            <div data-repeater-list="productMediaColor">
                                                                <div data-repeater-item>
                                                                    <div class="form-group row">
                                                                        <div class="col-md-5">
                                                                            <x-metronic.label for="multi_images"
                                                                                class="col-form-label fw-bold fs-6 ">{{ __('Product Image') }}
                                                                            </x-metronic.label>
                                                                            <x-metronic.file-input id="multi_images"
                                                                                name="multi_images"
                                                                                :value="old('multi_images')"></x-metronic.file-input>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <x-metronic.label for="product_color"
                                                                                class="col-form-label fw-bold fs-6 required">{{ __('Color') }}
                                                                            </x-metronic.label>
                                                                            <input class="form-control form-control-lg"
                                                                                id="product_color"
                                                                                style="height: 50px" type="color"
                                                                                name="product_color"
                                                                                value="{{ old('product_color') }}"
                                                                                placeholder="Enter the Color">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <x-metronic.label for="color_name"
                                                                                class="col-form-label fw-bold fs-6 required">{{ __('Color Name') }}
                                                                            </x-metronic.label>
                                                                            <x-metronic.input
                                                                                class="form-control form-control-lg"
                                                                                id="color_name" type="text"
                                                                                name="color_name"
                                                                                value="{{ old('color_name') }}"
                                                                                placeholder="Enter the Color Name"></x-metronic.input>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <div class="pt-2 mt-5 text-end">
                                                                                <a href="javascript:;"
                                                                                    data-repeater-delete
                                                                                    class="mt-5 btn btn-sm btn-danger mt-md-8">
                                                                                    <i class="fas fa-trash fs-5"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Form group-->

                                                        <!--begin::Form group-->
                                                        <div class="mt-5 form-group">
                                                            <a href="javascript:;" data-repeater-create
                                                                class="btn btn-primary">
                                                                <i class="fas fa-plus fs-3"></i>
                                                                Add
                                                            </a>
                                                        </div>
                                                        <!--end::Form group-->
                                                    </div>
                                                    <!--end::Repeater-->
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table class="table table-striped text-center">
                                                        <thead>
                                                            <tr>
                                                                <th width="40%">Image</th>
                                                                <th width="20%">Color</th>
                                                                <th width="25%">Color Name</th>
                                                                <th width="15%">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($product->multiImages as $image)
                                                                <tr>
                                                                    <td>
                                                                        <img src="{{ asset('storage/' . $image->photo) }}"
                                                                            alt="{{ $image->photo }}" width="70px">
                                                                    </td>
                                                                    <td>
                                                                        <span class="p-3"
                                                                            style="height:40px; background: {{ $image->color }};"></span>
                                                                    </td>
                                                                    <td>
                                                                        {{ $image->color_name }}
                                                                    </td>
                                                                    <td>
                                                                        <a href="javascript:void(0)"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#multiimage_{{ $image->id }}"
                                                                            class="me-4">
                                                                            <i
                                                                                class="text-primary fas fa-pencil-square fs-1"></i>
                                                                        </a>
                                                                        <a href="{{ route('admin.multiimage.destroy', $image->id) }}"
                                                                            class="delete"><i
                                                                                class="text-danger fas fa-trash-alt fs-1"></i></a>


                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                {{-- Inventory --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Inventory</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 row">
                                        <div class="mb-10 fv-row col-6">
                                            <x-metronic.label class="form-label">SKU Code</x-metronic.label>
                                            <x-metronic.input type="text" name="sku_code"
                                                class="form-control mb-2" placeholder="SKU Number"
                                                :value="old('sku_code', $product->sku_code)"></x-metronic.file-input>
                                                <div class="text-muted fs-7">Enter the product SKU.</div>
                                        </div>
                                        <div class="mb-10 fv-row col-6">
                                            <x-metronic.label class="form-label">MF Code</x-metronic.label>
                                            <x-metronic.input type="text" name="mf_code" class="form-control mb-2"
                                                placeholder="MF Number" :value="old('mf_code', $product->mf_code)"></x-metronic.file-input>
                                                <div class="text-muted fs-7">Enter the product MF.</div>
                                        </div>

                                        <div class="mb-10 fv-row col-12">
                                            <x-metronic.label class="form-label">Barcode</x-metronic.label>
                                            <x-metronic.input type="text" name="barcode_id"
                                                class="form-control mb-2" placeholder="Barcode Number"
                                                :value="old('barcode_id', $product->barcode_id)"></x-metronic.file-input>
                                                <div class="text-muted fs-7">
                                                    Enter the product barcode number.
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_add_product_price" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                {{-- Pricing --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Pricing</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 row">

                                        <div class="mb-5 fv-row col-4">
                                            <x-metronic.label class="form-label">Price</x-metronic.label>
                                            <x-metronic.input type="number" name="unit_price" id="unit_price"
                                                class="form-control mb-2" placeholder="how much the unit price"
                                                :value="old('unit_price', $product->unit_price)" readonly>
                                                </x-metronic.file-input>
                                                <div class="text-muted fs-7">How much unit price.</div>
                                        </div>
                                        <div class="mb-5 fv-row col-4">
                                            <x-metronic.label class="form-label">Unit Discount</x-metronic.label>
                                            <x-metronic.input type="number" name="unit_discount_price"
                                                id="unit_discount" class="form-control mb-2"
                                                placeholder="how much the unit discount price" :value="old('unit_discount_price', $product->unit_discount_price)"
                                                readonly></x-metronic.file-input>
                                                <div class="text-muted fs-7">How much unit discount price.</div>
                                        </div>
                                        <div class="mb-5 fv-row col-4">
                                            <x-metronic.label class="form-label">Stock</x-metronic.label>
                                            <x-metronic.input type="number" name="stock" id="stock"
                                                class="form-control mb-2" placeholder="how much the stock"
                                                :value="old('stock', $product->stock)"></x-metronic.file-input>
                                                <div class="text-muted fs-7">How much stock. Eg: 50</div>
                                        </div>
                                        <div class="mb-5 fv-row col-4">
                                            <x-metronic.label class="form-label">Vat</x-metronic.label>
                                            <x-metronic.input type="number" name="vat" id="vat"
                                                class="form-control mb-2" placeholder="how much the vat"
                                                :value="old('vat', $product->vat)"></x-metronic.file-input>
                                                <div class="text-muted fs-7">How much box vat. Eg: 5%</div>
                                        </div>
                                        <div class="mb-5 fv-row col-4">
                                            <x-metronic.label class="form-label">Tax</x-metronic.label>
                                            <x-metronic.input type="number" name="tax" id="tax"
                                                class="form-control mb-2" placeholder="how much the tax "
                                                :value="old('tax', $product->tax)"></x-metronic.file-input>
                                                <div class="text-muted fs-7">How much tax Eg: 5%</div>
                                        </div>
                                        {{-- <div class="fv-row col-4 mt-10">
                                            <div class="form-check">
                                                <input class="form-check-input" name="is_refurbished" type="checkbox"
                                                    value="1" id="is_refurbished" @checked($product->is_refurbished == '1') />
                                                <x-metronic.label class="form-check-label" for="is_refurbished">
                                                    Is Refurbished
                                                </x-metronic.label>
                                            </div>
                                        </div> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_add_product_meta" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                {{-- Meta Options --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Meta Options</h2>
                                        </div>
                                    </div>
                                    {{-- @dd($product->meta_title) --}}
                                    <div class="card-body pt-0">
                                        <div class="mb-10">
                                            <div class="mb-5 fv-row">
                                                <x-metronic.label class="form-label">Product Meta
                                                    Title</x-metronic.label>
                                                <x-metronic.input class="form-control" type="text"
                                                    name="meta_title" placeholder="Meta Title"
                                                    :value="old('meta_title', $product->meta_title)"></x-metronic.input>
                                            </div>
                                            <div class="text-muted fs-7">
                                                Add Product Meta Title.
                                            </div>
                                        </div>
                                        <div class="mb-10">
                                            <div class="mb-5 fv-row">
                                                <x-metronic.label class="form-label">Meta
                                                    Description (150 words)</x-metronic.label>
                                                <textarea name="meta_description" class="form-control">{!! old('meta_description', $product->meta_description) !!}</textarea>
                                                <div class="text-muted fs-7">
                                                    Add Meta Meta details.
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="mb-5 fv-row">
                                                <x-metronic.label class="form-label">Meta Tag
                                                    Keywords</x-metronic.label>
                                                <input class="form-control" name="meta_keywords"
                                                    placeholder="Meta tag keywords" id="product_meta_keyword"
                                                    value="{{ old('meta_keywords', $product->meta_keywords) }}" />
                                                <div class="text-muted fs-7">
                                                    Add product Meta tag keywords.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-10">
                        <a href="{{ route('admin.product.index') }}" class="btn btn-danger me-5">
                            Back To Product List
                        </a>
                        {{-- <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                            <span class="indicator-label"> Save Changes </span>
                            <span class="indicator-progress">
                                Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button> --}}
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label"> Save Changes </span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @foreach ($product->multiImages as $image)
        <div class="modal fade" id="multiimage_{{ $image->id }}" data-backdrop="static">
            <div class="modal-dialog modal-lg">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title ps-5">
                            Image Update</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="card border rounded-0">

                                <form action="{{ route('admin.multiimage.update', $image->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body p-1 px-2 mb-4">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <x-metronic.label for="multi_images"
                                                    class="col-form-label fw-bold fs-6 ">{{ __('Product Image') }}
                                                </x-metronic.label>
                                                <x-metronic.file-input name="photo" :source="asset('storage/' . $image->photo)"
                                                    :value="old('photo')"></x-metronic.file-input>
                                            </div>
                                            <div class="col-lg-2">
                                                <x-metronic.label for="product_color"
                                                    class="col-form-label fw-bold fs-6 required">{{ __('Color') }}
                                                </x-metronic.label>
                                                <input class="form-control form-control-lg" id="product_color"
                                                    style="height: 50px" type="color" name="color"
                                                    value="{{ old('color', $image->color) }}"
                                                    placeholder="Enter the Color">
                                            </div>
                                            <div class="col-md-4">
                                                <x-metronic.label for="color_name"
                                                    class="col-form-label fw-bold fs-6 required">{{ __('Color Name') }}
                                                </x-metronic.label>
                                                <x-metronic.input
                                                    class="form-control form-control-lg"
                                                    id="color_name" type="text"
                                                    name="color_name"
                                                    value="{{ old('color_name',$image->color_name) }}"
                                                    placeholder="Enter the Color Name"></x-metronic.input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-3">
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">
                                                <span class="indicator-label"> Update </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @push('scripts')
        <script>
            $('#productMediaColor').repeater({
                initEmpty: false,

                defaultValues: {
                    'text-input': 'foo'
                },

                show: function() {
                    $(this).slideDown();
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // The DOM elements you wish to replace with Tagify
                var input1 = document.querySelector("#product_Tags");
                var input2 = document.querySelector("#product_meta_tags");
                var input3 = document.querySelector("#product_meta_keyword");
                var input4 = document.querySelector("#color");

                // Initialize Tagify components on the above inputs
                new Tagify(input1);
                new Tagify(input2);
                new Tagify(input4);
                new Tagify(input3);
            });



            // Product dimension box
            document.addEventListener('DOMContentLoaded', function() {
                const lengthInput = document.getElementById('length');
                const widthInput = document.getElementById('width');
                const heightInput = document.getElementById('height');

                const dimensionPreview = document.getElementById('dimensionPreview');

                function updatePreview() {
                    const length = lengthInput.value || 0;
                    const width = widthInput.value || 0;
                    const height = heightInput.value || 0;

                    dimensionPreview.textContent = `Length(${length}") X Width(${width}") X Height(${height}")`;
                }

                // Attach the event listener to each input field
                lengthInput.addEventListener('input', updatePreview);
                widthInput.addEventListener('input', updatePreview);
                heightInput.addEventListener('input', updatePreview);
            });
            // Define color mapping
            var colorMapping = {
                'Red': '#FF5733',
                'Green': '#33FF57',
                'Blue': '#3357FF',
                'Yellow': '#FFFF33',
                'Purple': '#A933FF',
                'Orange': '#FF8C33',
                'Pink': '#FF33B5',
                'Brown': '#8C4C33',
                'Gray': '#BEBEBE',
                'Black': '#000000',
                'White': '#FFFFFF',
                'Cyan': '#00FFFF',
                'Magenta': '#FF00FF',
                'Lime': '#00FF00',
                'Teal': '#008080',
                'Olive': '#808000',
                'Navy': '#000080',
                'Maroon': '#800000',
                'Silver': '#C0C0C0',
                'Gold': '#FFD700',
                'Coral': '#FF7F50',
                'Indigo': '#4B0082',
                'Turquoise': '#40E0D0',
                'Salmon': '#FA8072'
            };

            // Convert colorMapping to an array of objects for Tagify dropdown
            var colorArray = Object.keys(colorMapping).map(key => ({
                value: key,
                color: colorMapping[key]
            }));

            // Initialize Tagify on the input element
            var tagify = new Tagify(document.querySelector('#kt_tagify_color'), {
                delimiters: null,
                templates: {
                    tag: function(tagData) {
                        const color = colorMapping[tagData.value] || '#cccccc'; // Default color if not found
                        try {
                            return `<tag title='${tagData.value}' contenteditable='false' spellcheck="false"
                    class='tagify__tag ${tagData.class ? tagData.class : ""}' ${this.getAttributes(tagData)}
                    style="background-color: ${color}; border: none; display: flex; align-items: center; padding: 0;">
                        <x title='remove tag' class='tagify__tag__removeBtn'></x>
                        <div class="d-flex align-items-center" style="width: 25px; height: 25px; background-color: ${color}; border-radius: 4px; margin-right: 8px;"></div>
                        <span class='tagify__tag-text'>${tagData.value}</span>
                    </tag>`;
                        } catch (err) {
                            console.error('Error in tag template:', err);
                        }
                    },

                    dropdownItem: function(tagData) {
                        const color = colorMapping[tagData.value] || '#cccccc'; // Default color if not found
                        try {
                            return `<div ${this.getAttributes(tagData)} class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                    style="background-color: white; color: black; display: flex; align-items: center; padding: 4px 8px;">
                        <div style="width: 25px; height: 25px; background-color: ${color}; border-radius: 4px; margin-right: 8px;"></div>
                        <span>${tagData.value}</span>
                    </div>`;
                        } catch (err) {
                            console.error('Error in dropdown item template:', err);
                        }
                    }
                },
                // Remove whitelist to allow all colors to be shown in dropdown
                enforceWhitelist: false,
                // Display dropdown items based on the colorMapping array
                whitelist: colorArray,
                dropdown: {
                    enabled: 1, // Show the dropdown as the user types
                    classname: 'extra-properties' // Custom class for the suggestions dropdown
                }
            });

            // Show all color options when the input is clicked
            var inputElement = document.querySelector('#kt_tagify_color');

            inputElement.addEventListener('click', function() {
                tagify.dropdown.show.call(tagify);
            });

            // Add the first 2 tags and make them readonly
            // var tagsToAdd = tagify.settings.whitelist.slice(0, 2);
            // tagify.addTags(tagsToAdd);



            // Product Pricing
            function calculatePrices() {
                const boxContains = parseFloat(document.getElementById('box_contains').value) || 0;
                const boxPrice = parseFloat(document.getElementById('box_price').value) || 0;
                const boxDiscountPrice = parseFloat(document.getElementById('box_discount_price').value) || 0;

                const unitPrice = boxContains ? (boxPrice / boxContains).toFixed(2) : 0;
                const unitDiscount = boxContains ? (boxDiscountPrice / boxContains).toFixed(2) : 0;

                document.getElementById('unit_price').value = unitPrice;
                document.getElementById('unit_discount').value = unitDiscount;
            }

            document.getElementById('box_contains').addEventListener('input', calculatePrices);
            document.getElementById('box_price').addEventListener('input', calculatePrices);
            document.getElementById('box_discount_price').addEventListener('input', calculatePrices);

            // Product Multiimage Submit
            var uploadedDocumentMap = {}; // Assuming you have this variable defined somewhere

            var myDropzone = new Dropzone("#product_multiimage", {
                url: "{{ route('admin.product.store') }}",
                paramName: "multi_image", // The name that will be used to transfer the file
                uploadMultiple: true,
                parallelUploads: 10,
                maxFiles: 10,
                maxFilesize: 10, // MB
                addRemoveLinks: true,
                accept: function(file, done) {
                    console.log(file);
                    $('#kt_ecommerce_add_product_form').append(
                        '<input type="hidden" name="document[ value="{{ old('document') }}"]" value="' + file
                        .file + '">');
                    done();
                },
                method: "post",
            });

            document.getElementById('kt_ecommerce_add_product_form').addEventListener('submit', function(event) {
                var formData = new FormData(this);
                console.log(formData);
            });
            // textEditor
            class CKEditorInitializer {
                constructor(className) {
                    this.className = className;
                }

                initialize() {
                    const elements = document.querySelectorAll(this.className);
                    elements.forEach(element => {
                        ClassicEditor
                            .create(element)
                            .then(editor => {
                                console.log('CKEditor initialized:', editor);
                            })
                            .catch(error => {
                                console.error('CKEditor initialization error:', error);
                            });
                    });
                }
            }

            // Example usage:
            const ckEditorInitializer = new CKEditorInitializer('.ckeditor');
            ckEditorInitializer.initialize();
        </script>
    @endpush
</x-admin-app-layout>
