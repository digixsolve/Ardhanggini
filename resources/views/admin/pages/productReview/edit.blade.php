<x-admin-app-layout :title="'Product Review Edit'">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-dark align-items-center">
                        <h3 class="card-title text-white">Review List</h3>
                        <div>
                            <a type="button" href="{{ route('admin.product-review.index') }}"
                                class="btn btn-light-primary">
                                <i class="fa-solid fa-plus"></i> Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="kt_ecommerce_add_product_form" method="post"
                            action="{{ route('admin.product-review.update', $review->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-8 mb-7">
                                    <x-metronic.label for="product_id"
                                        class="col-form-label required fw-bold fs-6">{{ __('Select Product') }}</x-metronic.label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-close-on-select="false" data-placeholder="Select an option"
                                        data-allow-clear="true" id="product_id" name="product_id"
                                        data-hide-search="false" data-placeholder="Select an option">
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}" @selected(old('product_id', $review->product_id) == $product->id)>
                                                {{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-4 mb-7">
                                    <x-metronic.label class="form-label">Name</x-metronic.label>
                                    <x-metronic.input type="text" name="name" id="name"
                                        class="form-control mb-2" placeholder="Reviwer Name"
                                        :value="old('name', $review->name)"></x-metronic.input>
                                </div>
                                <div class="col-lg-6 mb-7">
                                    <x-metronic.label class="form-label">Date</x-metronic.label>
                                    <x-metronic.input type="date" name="date" id="date"
                                        class="form-control mb-2" placeholder="11/25/2024"
                                        :value="old('date', $review->date)"></x-metronic.input>
                                </div>
                                <div class="col-lg-6 mb-7">
                                    <x-metronic.label class="form-label">Rating</x-metronic.label>
                                    <x-metronic.select-option id="kt_ecommerce_add_product_status_select"
                                        class="form-select mb-2" data-control="select2" data-hide-search="true"
                                        name="rating" data-placeholder="Select an option">
                                        <option>Choose Rating</option>
                                        <option value="1" @selected(old('rating', $review->rating) == '1')>1</option>
                                        <option value="2" @selected(old('rating', $review->rating) == '2')>2</option>
                                        <option value="3" @selected(old('rating', $review->rating) == '3')>3</option>
                                        <option value="4" @selected(old('rating', $review->rating) == '4')>4</option>
                                        <option value="5" @selected(old('rating', $review->rating) == '5')>5</option>
                                    </x-metronic.select-option>
                                </div>
                                <div class="col-lg-6 mb-7">
                                    <x-metronic.label class="form-label">Image</x-metronic.label>
                                    <x-metronic.file-input type="file" name="image" id="image"
                                        class="form-control mb-2" placeholder="choose image"
                                        :value="old('image', $review->image)"></x-metronic.file-input>
                                </div>
                                <div class="col-lg-6 mb-7">
                                    <x-metronic.label class="form-label">Review Image</x-metronic.label>
                                    <x-metronic.file-input type="file" name="review_image" id="review_image"
                                        class="form-control mb-2" placeholder="choose review_image"
                                        :value="old('review_image', $review->review_image)"></x-metronic.file-input>
                                </div>
                                <div class="col-lg-6 mb-7" mb-7>
                                    <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                                        {{ __('Select a Status ') }}</x-metronic.label>
                                    <x-metronic.select-option id="status" name="status" data-hide-search="true"
                                        data-placeholder="Select an option">
                                        <option></option>
                                        <option value="active" @selected(old('status', $review->status) == 'active')>Active</option>
                                        <option value="inactive" @selected(old('status', $review->status) == 'inactive')>Inactive</option>
                                    </x-metronic.select-option>
                                </div>
                                <div class="col-lg-12 mb-7">
                                    <div class="mb-5 fv-row">
                                        <x-metronic.label class="form-label">Review</x-metronic.label>
                                        <textarea name="message" id="summernote">{!! old('message', $review->message) !!}</textarea>
                                        <div class="text-muted fs-7">
                                            Add Meta Meta details.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="indicator-label"> Save Changes </span>
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
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });
        </script>
    @endpush
</x-admin-app-layout>
