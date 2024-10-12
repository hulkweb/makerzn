@extends('layouts.user')
@section('content')
    <div class="page-right">
        <div class="content-block">
            <h4 class="main_color mb-3">Deposit</h4>
            <div class="block-d">
                <form action="{{ route('deposit_post') }}" method="POST">
                    @csrf
                    {{-- <input type="hidden" name="_token" value="hSKmz6UzIqOFmsAs6Rceh3fIv5kFPn2CzEisGaPV"> --}}
                    <div class="row" style="row-gap: 20px">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Deposit Network</label>
                                <select name="currency_id"
                                    class="mb-3 form-c select-bar dw w-full rounded  bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark"
                                    required value="">
                                    <option disabled selected>Select Deposit Network</option>

                                    @foreach ($currencies as $item)
                                        <option value="{{ $item->id }}"
                                            data-image="{{ asset('asset/img/crypto/coins/' . $item->symbol . '.png') }}">
                                            {{ $item->symbol }} [Network: {{ $item->name }}]</option>
                                    @endforeach


                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" name="amount" class="form-c w-100" placeholder="Enter USD"
                                    onkeyup="value=value.replace(/^\D*(\d*(?:\.\d{0,2})?).*$/g, '$1')" required>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-center">
                        <button class="template-btn btn-style-three mt-4 w-100 d-flex justify-content-center"
                            style="max-width: 200px">
                            <span class="btn-wrap">
                                <span class="text-one">Deposit</span>
                                <span class="text-two">Deposit</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="content-block">
            <h4 class="main_color mt-4 mb-2">History</h4>
            <div class="w-100 overflow-auto p-0 m-0">
                <table class="table c-table chat-box ai-speech bg-flashlight mt-1 ">
                    <thead>
                        <tr>
                            <th scope="col" class="col-3">Status</th>
                            <th scope="col" class="col-3">Time</th>
                            <th scope="col" class="col-3">Amount</th>
                            <th scope="col" class="col-3">USD</th>
                            <th scope="col" class="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="body_table">
                        @forelse ($deposits as $item)
                            <tr>
                                <td class=" c_yel " id="status">
                                    {{ ucfirst($item->status) }}
                                </td>
                                <td id="time">{{ $item->created_at }}</td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-between gap-40">
                                        <div class="d-flex align-items-center gap-10" style="gap: 6px">
                                            <img src="{{ asset('asset/img/crypto/coins/' . $item->currency->symbol . '.png') }}"
                                                class="round-gate" width="22" height="22">
                                            <span class="white fw-600" id="amount">
                                                {{ $item->amount }}
                                            </span> <span id="system">{{ $item->currency->symbol }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="de">${{ number_format($item->usd_value, 2, '.', ',') }}</div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-between gap-40">
                                        <button class="table_button  b_pen1 "
                                            data-gateway_name="{{ $item->currency->symbol }} [Network: Ethereum]"
                                            data-currency_id="{{ $item->currency->symbol }}"
                                            data-amount="${{ number_format($item->usd_value, 2, '.', ',') }}"
                                            data-id="{{ $item->id }}"
                                            data-wallet="0x8943b243CE3F98952a0349Ff39a8b565b50d2eeE"
                                            onclick="openVoucherModal(this)" data-id="{{ $item->id }}" data-status="0"
                                            data-rate="0.00037476" data-final="2.99808000" data-remark="In Progress">
                                            Upload
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" align="center">No records found</td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
            <div class="un_table">
                <link rel="stylesheet" href="{{ asset('asset/css/custom-pag.css') }}">
                <nav class="pagination-outer" aria-label="Page navigation">
                    <ul class="pagination">
                        <!-- Previous Page Link -->
                        @if ($deposits->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">«</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $deposits->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                        @endif

                        <!-- Pagination Elements -->
                        @for ($page = 1; $page <= $deposits->lastPage(); $page++)
                            <li class="page-item {{ $page == $deposits->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $deposits->url($page) }}">{{ $page }}</a>
                            </li>
                        @endfor

                        <!-- Next Page Link -->
                        @if ($deposits->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $deposits->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link">»</span>
                            </li>
                        @endif
                    </ul>
                </nav>



            </div>
        </div>

        <div class="modal fade" id="voucher_modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="transition: .3s ease;">
                <div class="modal-content custom-modal">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Payment Voucher</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('deposit_post_verify') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="deposit_id" id="voucher_deposit_id">
                            <div class="row" style="row-gap: 10px;">
                                <div class="col-12 mt-0">
                                    <label class="label_cod">Deposit Amount:</label>
                                    <input type="text" class="form-control copyd_num icon__copy form-bg-2 w-100"
                                        readonly id="dpsam" style="background-color: transparent;">
                                </div>
                                <div class="col-12 mt-0">
                                    <label class="label_cod">Wallet Address:</label>
                                    <textarea type="text" id="wallet" class="form-control copyd icon__copy form-bg-2 w-100" readonly
                                        id="wlt" style="padding-right: 40px; background-color: transparent;"></textarea>
                                </div>
                                <div class="col-12 mt-0 relative d-flex align-items-center">
                                    <input type="file" name="image" id="imageUpload"
                                        class="upload_btn form-c form-bg-2 w-100" accept=".png') }}, .jpg, .jpeg"
                                        required="">
                                </div>
                                <div class="col-12 mb-2">
                                    <p class="medium grayd">After confirming the transfer, please upload a screenshot with
                                        the TXID.<br />Your deposit will be processed within 30 minutes. If you have any
                                        questions, please contact our 24-hour online support team.</p>
                                </div>
                                <div class="col-12 mt-0">
                                    <div class="modal-footer">
                                        <button class="template-btn d-flex justify-content-center btn-style-one w-100"
                                            style="padding: 15px 30px;">
                                            <span class="btn-wrap">
                                                <span class="text-one">Submit</span>
                                                <span class="text-two">Submit</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="details_status" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="transition: .3s ease;">
                <div class="modal-content custom-modal">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Deposit <span id="header_m"></span></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="row-gap: 10px;">
                            <div class="col-12 ld-n">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="medium mb-0 fw-700">Time</h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0"><span id="time_m"></span></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ld-n">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="medium mb-0 fw-700">Status</h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0"><span id="status_m"></span></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ld-n">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="medium mb-0 fw-700">Deposit Network</h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0"><span id="system_m"></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ld-n">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="medium mb-0 fw-700">Deposit Amount</h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0"><span id="final_m"></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ld-n">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="medium mb-0 fw-700">Exchange Rate</h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0"><span id="rate_m"></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ld-n">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="medium mb-0 fw-700">Amount</h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0"><span id="amount_m"></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ld-n">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="medium mb-0 fw-700">Remarks</h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0"><span id="remark_m"></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (Session::has('deposit') && $last)
            <div class="modal fade show" id="deposit_preload" tabindex="-1" aria-modal="true" role="dialog"
                style="display: block; padding-left: 0px;">
                <div class="modal-dialog modal-dialog-centered modal-lg" style="transition: .3s ease;">
                    <div class="modal-content custom-modal">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Deposit
                                {{ $last->currency->symbol }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex align-items-center w-100 justify-content-center mb-3 qr_code_preload">
                                <img src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&amp;data=3KPbQR5uRc5A12DwtAf1chWbi85AnFdiEj"
                                    class="qr_code_preload mb-4" width="200" height="200"
                                    style="display: block;margin: 0 auto;">

                            </div>
                            <div class="container">
                                <p class="medium grayd text-center">Please send funds to the specified address or use a QR
                                    code
                                    for a deposit. Your amount will be deposited in your account.</p>
                                <p class="medium c_red text-center mt-4 mb-4" style="color: #D3AC20!important;">
                                    {{ $last->currency->symbol }} [Network: {{ $last->currency->name }}]</p>
                                <div class="row mt-2" style="row-gap: 15px;">
                                    <div class="col-12 mt-0">
                                        <label class="label_cod">Deposit Amount:</label>
                                        <input type="text" class="form-control copyd_num icon__copy form-bg-2 w-100"
                                            readonly="" value=" {{ $last->amount }} {{ $last->currency->symbol }} "
                                            style="background-color: transparent;">
                                    </div>
                                    <div class="col-12 mt-0">
                                        <label class="label_cod">Wallet Address:</label>
                                        <input type="text" class="form-control copyd icon__copy form-bg-2 w-100"
                                            readonly="" value="3KPbQR5uRc5A12DwtAf1chWbi85AnFdiEj"
                                            style="background-color: transparent;">
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('deposit_post_verify') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="deposit_id" value="{{ $last->id }}">
                                <div class="container" style="margin-top: 15px">
                                    <div class="col-12 mt-0 relative d-flex align-items-center">
                                        <input type="file" name="image" id="imageUpload"
                                            class="upload_btn form-c form-bg-2 w-100" accept=".png, .jpg, .jpeg"
                                            required="">
                                    </div>
                                </div>
                                <p class="medium c_red text-center mt-4"
                                    style="color: #D3AC20!important; text-align: left!important;">
                                    After confirming the transfer, please upload a screenshot with the TXID.<br>Your deposit
                                    will be processed within 30 minutes. If you have any questions, please contact our
                                    24-hour
                                    online support team.
                                </p>
                                <div class="col-12 mt-0">
                                    <div class="modal-footer pb-0">
                                        <button class="template-btn d-flex justify-content-center btn-style-one w-100 m-0"
                                            style="padding: 15px 30px;">
                                            <span class="btn-wrap">
                                                <span class="text-one">Submit</span>
                                                <span class="text-two">Submit</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>


    @if ($success = Session::has('deposit'))
        <script>
            $('document').ready(function() {
                $("#deposit_preload").modal("show");
            })
        </script>
    @endif

    <script>
        function openVoucherModal(ele) {
            $("#voucher_modal").modal("show");
            $("#dpsam").val(ele.getAttribute("data-amount"));
            $("#wallet").val(ele.getAttribute("data-wallet"));

            $("#voucher_deposit_id").val(ele.getAttribute("data-id"));

        }
    </script>
@endsection
