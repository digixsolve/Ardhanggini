<x-admin-app-layout :title="'Order Report'">
    <div class="row">
        <div class="col-xl-4 mx-auto">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between">
                        <div class="d-flex align-items-center me-3 p-8 rounded-3 bg-light-info">
                            <a href="">
                                <span class="bg-black rounded-3 p-3 me-3"><i
                                        class="fa-brand text-white fa-product-hunt fs-3" aria-hidden="true"></i></span>
                            </a>
                            <div class="flex-grow-1">
                                <a href="#" class="text-black fs-5 fw-bold lh-0">Total Order
                                    <span class="text-black fw-semibold d-block fs-6 pt-4">{{ date('d M Y') }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center pe-4">
                            <div>
                                <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">{{ $orders->count() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mx-auto">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between">
                        <div class="d-flex align-items-center me-3 p-8 rounded-3 bg-light-info">
                            <a href="">
                                <span class="bg-black rounded-3 p-3 me-3"><i
                                        class="fa-product text-white fa-product-hunt fs-3"
                                        aria-hidden="true"></i></span>
                            </a>
                            <div class="flex-grow-1">
                                <a href="#" class="text-black fs-5 fw-bold lh-0">Total Order Pending
                                    <span class="text-black fw-semibold d-block fs-6 pt-4">{{ date('d M Y') }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center pe-4">
                            <div>
                                <span
                                    class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">{{ $pendingOrdersCount }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mx-auto">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between">
                        <div class="d-flex align-items-center me-3 p-8 rounded-3 bg-light-info">
                            <a href="">
                                <span class="bg-black rounded-3 p-3 me-3"><i
                                        class="fa-product text-white fa-product-hunt fs-3"
                                        aria-hidden="true"></i></span>
                            </a>
                            <div class="flex-grow-1">
                                <a href="#" class="text-black fs-5 fw-bold lh-0">Total Order Delivered
                                    <span class="text-black fw-semibold d-block fs-6 pt-4">{{ date('d M Y') }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center pe-4">
                            <div>
                                <span
                                    class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">{{ $deliveredOrdersCount }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-flush mt-10">
        <div class="card-header bg-light-info align-items-center">
            <h3 class="card-title">Mange Your Orders</h3>
            <div>
                <a type="button" href="{{ route('admin.product.create') }}" class="btn btn-primary btn btn-sm">
                    <i class="fa-solid fa-plus"></i> Create
                </a>
            </div>
        </div>

        <div class="card-body table-responsive">
            <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7">
                <thead>
                    <tr class="fw-semibold fs-6 text-gray-800 text-center">
                        <th>Order Number</th>
                        <th>Customer</th>
                        <th>Created At</th>
                        <th>Price</th>
                        <th>QTY</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody class="fw-bold text-gray-600">
                    @foreach ($orders as $order)
                        <tr class="text-center">
                            <td>
                                <a href="">
                                    {{ $order->order_number }}
                                </a>
                            </td>
                            <td>{{ $order->user->first_name }} {{ $order->user->last_name }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td><span class="text-info fw-bold">£</span>{{ $order->total_amount }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>
                                @if ($order->pending())
                                    <span class="badge py-3 px-4 fs-7 badge-light-primary">Pending</span>
                                @elseif ($order->processing())
                                    <span class="badge py-3 px-4 fs-7 badge-light-warning">Processing</span>
                                @elseif ($order->shipped())
                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                @elseif ($order->delivered())
                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Delivered</span>
                                @elseif ($order->cancelled())
                                    <span class="badge py-3 px-4 fs-7 badge-light-dangered">Cancelled</span>
                                @elseif ($order->returned())
                                    <span class="badge py-3 px-4 fs-7 badge-light-dangered">Returned</span>
                                @endif
                            </td>
                            <td>
                                <button
                                    class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                    data-bs-toggle="modal" data-bs-target="#printInovice{{ $order->id }}">
                                    <i class="fa-solid fa-print"></i>
                                </button>
                                <a href="{{ route('admin.orderReport',{{ $order->id }}) }}"
                                    class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px">
                                    <i class="fa-solid fa-eye" title="Order Details"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <button
                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px">
                                        <i class="fa-solid fa-file-download"></i>
                                    </button>
                                </a>
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                    data-kt-docs-datatable-subtable="expand_row">
                                    <span class="svg-icon fs-3 m-0 toggle-off">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                    <span class="svg-icon fs-3 m-0 toggle-on">
                                        <i class="fa-solid fa-minus"></i>
                                    </span>
                                </button>
                            </td>
                        </tr>
                        @foreach ($order->orderItems as $item)
                            <tr data-kt-docs-datatable-subtable="subtable_template" class="d-none bg-light">
                                <td colspan="3">
                                    <div class="d-flex align-items-center gap-3">
                                        <a href="#" class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                            <img src="{{ asset('storage/' . $item->product->thumbnail) }}"
                                                alt="" data-kt-docs-datatable-subtable="template_image" />
                                        </a>
                                        <div class="d-flex flex-column text-muted">
                                            <a href="#" class="text-gray-900 text-hover-primary fw-bold"
                                                data-kt-docs-datatable-subtable="template_name">Product name</a>
                                            <div class="fs-7" data-kt-docs-datatable-subtable="template_description">
                                                {{ $item->product->name }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="text-gray-900 fs-7">Cost</div>
                                    <div class="text-muted fs-7 fw-bold"
                                        data-kt-docs-datatable-subtable="template_cost">£ {{ $item->price }}</div>
                                </td>
                                <td class="text-end">
                                    <div class="text-gray-900 fs-7">Qty</div>
                                    <div class="text-muted fs-7 fw-bold"
                                        data-kt-docs-datatable-subtable="template_qty">{{ $item->quantity }}</div>
                                </td>
                                <td class="text-end">
                                    <div class="text-gray-900 fs-7">Total</div>
                                    <div class="text-muted fs-7 fw-bold"
                                        data-kt-docs-datatable-subtable="template_total">£ {{ $item->subtotal }}
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                        @endforeach
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    @include('admin.pages.orderManagement.partial.invoice')
    @push('scripts')
        <script>
            $(document).ready(function() {
                // Toggle subtable visibility
                $('button[data-kt-docs-datatable-subtable="expand_row"]').on('click', function() {
                    var $row = $(this).closest('tr'); // Get the closest row
                    var $subtable = $row.nextUntil(
                        'tr:not([data-kt-docs-datatable-subtable="subtable_template"])'
                    ); // Get all subsequent subtable rows

                    // Toggle subtable visibility
                    $subtable.toggleClass('d-none');

                    // Update toggle button icon
                    $(this).find('.toggle-on, .toggle-off').toggle();
                });
            });
        </script>
        <!-- Your existing HTML content here -->

        <script>
            function printInvoice(orderId) {
                var printContents = document.getElementById('invoiceContent' + orderId).innerHTML;
                var printWindow = window.open('', '', 'height=800,width=600');
                printWindow.document.write('<html><head><title>Invoice</title>');
                printWindow.document.write('<style>/* Add your print styles here */</style>');
                printWindow.document.write('</head><body >');
                printWindow.document.write(printContents);
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.focus();
                printWindow.print();
            }
        </script>
    @endpush
</x-admin-app-layout>
