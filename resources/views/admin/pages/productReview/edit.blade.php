<x-admin-app-layout :title="'Product Review Edit'">
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
                            action="{{ route('admin.product-review.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <x-metronic.label class="form-label">Name</x-metronic.label>
                                    <x-metronic.input type="text" name="name" id="name"
                                        class="form-control mb-2" placeholder="Reviwer Name"
                                        :value="old('name')"></x-metronic.input>
                                </div>
                                <div class="col-lg-6">
                                    <x-metronic.label class="form-label">Date</x-metronic.label>
                                    <x-metronic.input type="date" name="date" id="date"
                                        class="form-control mb-2" placeholder="11/25/2024"
                                        :value="old('date')"></x-metronic.input>
                                </div>
                                <div class="col-lg-6">
                                    <x-metronic.label class="form-label">Rating</x-metronic.label>
                                    <x-metronic.select-option id="kt_ecommerce_add_product_status_select"
                                        class="form-select mb-2" data-control="select2" data-hide-search="true"
                                        name="rating" data-placeholder="Select an option">
                                        <option>Choose Rating</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </x-metronic.select-option>
                                </div>
                                <div class="col-lg-6">
                                    <x-metronic.label class="form-label">Image</x-metronic.label>
                                    <x-metronic.input type="file" name="image" id="image"
                                        class="form-control mb-2" placeholder="choose image"
                                        :value="old('image')"></x-metronic.input>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-5 fv-row">
                                        <x-metronic.label class="form-label">Review</x-metronic.label>
                                        <textarea name="meta_description" class="ckeditor">{!! old('meta_description') !!}</textarea>
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
    @endpush
</x-admin-app-layout>
