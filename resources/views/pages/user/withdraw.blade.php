@extends('layouts.user')
@section('content')
    <script>
        const menu3 = "orders";
        if (document.getElementById(menu3)) {
            document.getElementById(menu3).classList.add("act");
        }
    </script>

    <div class="page-right">
        <div class="content-block">
            <h4 class="main_color mb-3">Withdraw</h4>
            <div class="block-d">
                <form action="" method="POST">
                    <input type="hidden" name="_token" value="jtIYmy9qs5Oc2ssMo15UFMjEi6hC2k3u2pcxtt6u">
                    <div class="row" style="row-gap: 20px">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Withdraw Network</label>
                                <select name="network"
                                    class="mb-3 form-c select-bar dw w-full rounded  bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark"
                                    required="" value="" style="display: none;">
                                    <option disabled="" selected="">Select Withdraw Network</option>
                                    <option value="10001" data-image="{{ env('APP_URL') }}asset/img/crypto/coins/USDT.png">
                                        USDT-ERC20 [Network: Ethereum]</option>
                                    <option value="10002" data-image="{{ env('APP_URL') }}asset/img/crypto/coins/USDT.png">
                                        USDT-TRC20 [Network: Tron]</option>
                                    <option value="10003" data-image="{{ env('APP_URL') }}asset/img/crypto/coins/BTC.png">
                                        BTC [Network: Bitcoin]</option>
                                    <option value="10004" data-image="{{ env('APP_URL') }}asset/img/crypto/coins/ETH.png">
                                        ETH [Network: Ethereum]</option>
                                    <option value="10005" data-image="{{ env('APP_URL') }}asset/img/crypto/coins/LTC.png">
                                        LTC [Network: Litecoin]</option>
                                    <option value="10007" data-image="{{ env('APP_URL') }}asset/img/crypto/coins/USDC.png">
                                        USDC [Network: Ethereum]</option>
                                    <option value="10008" data-image="{{ env('APP_URL') }}asset/img/crypto/coins/BCH.png">
                                        BCH [Network: Bitcoin Cash]</option>
                                    <option value="10009" data-image="{{ env('APP_URL') }}asset/img/crypto/coins/DOGE.png">
                                        DOGE [Network: Dogecoin]</option>
                                    <option value="10011" data-image="{{ env('APP_URL') }}asset/img/crypto/coins/USDT.png">
                                        USDT-BEP20 [Network: Binance Smart Chain]</option>
                                    <option value="10012" data-image="{{ env('APP_URL') }}asset/img/crypto/coins/BNB.png">
                                        BNB [Network: Binance Smart Chain]</option>
                                    <option value="10013"
                                        data-image="{{ env('APP_URL') }}asset/img/crypto/coins/USDC.png">
                                        USDC [Network: Base]</option>
                                </select>
                                <div class="nice-select mb-3 form-c select-bar dw w-full rounded bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark"
                                    tabindex="0"><span class="current">Select Withdraw Network</span>
                                    <ul class="list">
                                        <li data-value="Select Withdraw Network" class="option selected disabled">Select
                                            Withdraw Network</li>
                                        <li data-value="10001"
                                            data-image="{{ env('APP_URL') }}asset/img/crypto/coins/USDT.png"
                                            class="option">
                                            <img src="{{ env('APP_URL') }}asset/img/crypto/coins/USDT.png"
                                                class="icon-dep">USDT-ERC20 [Network: Ethereum]
                                        </li>
                                        <li data-value="10002"
                                            data-image="{{ env('APP_URL') }}asset/img/crypto/coins/USDT.png"
                                            class="option">
                                            <img src="{{ env('APP_URL') }}asset/img/crypto/coins/USDT.png"
                                                class="icon-dep">USDT-TRC20 [Network: Tron]
                                        </li>
                                        <li data-value="10003"
                                            data-image="{{ env('APP_URL') }}asset/img/crypto/coins/BTC.png" class="option">
                                            <img src="{{ env('APP_URL') }}asset/img/crypto/coins/BTC.png"
                                                class="icon-dep">BTC [Network: Bitcoin]
                                        </li>
                                        <li data-value="10004"
                                            data-image="{{ env('APP_URL') }}asset/img/crypto/coins/ETH.png" class="option">
                                            <img src="{{ env('APP_URL') }}asset/img/crypto/coins/ETH.png"
                                                class="icon-dep">ETH [Network: Ethereum]
                                        </li>
                                        <li data-value="10005"
                                            data-image="{{ env('APP_URL') }}asset/img/crypto/coins/LTC.png" class="option">
                                            <img src="{{ env('APP_URL') }}asset/img/crypto/coins/LTC.png"
                                                class="icon-dep">LTC [Network: Litecoin]
                                        </li>
                                        <li data-value="10007"
                                            data-image="{{ env('APP_URL') }}asset/img/crypto/coins/USDC.png"
                                            class="option">
                                            <img src="{{ env('APP_URL') }}asset/img/crypto/coins/USDC.png"
                                                class="icon-dep">USDC [Network: Ethereum]
                                        </li>
                                        <li data-value="10008"
                                            data-image="{{ env('APP_URL') }}asset/img/crypto/coins/BCH.png" class="option">
                                            <img src="{{ env('APP_URL') }}asset/img/crypto/coins/BCH.png"
                                                class="icon-dep">BCH [Network: Bitcoin Cash]
                                        </li>
                                        <li data-value="10009"
                                            data-image="{{ env('APP_URL') }}asset/img/crypto/coins/DOGE.png"
                                            class="option">
                                            <img src="{{ env('APP_URL') }}asset/img/crypto/coins/DOGE.png"
                                                class="icon-dep">DOGE [Network: Dogecoin]
                                        </li>
                                        <li data-value="10011"
                                            data-image="{{ env('APP_URL') }}asset/img/crypto/coins/USDT.png"
                                            class="option">
                                            <img src="{{ env('APP_URL') }}asset/img/crypto/coins/USDT.png"
                                                class="icon-dep">USDT-BEP20 [Network: Binance Smart Chain]
                                        </li>
                                        <li data-value="10012"
                                            data-image="{{ env('APP_URL') }}asset/img/crypto/coins/BNB.png" class="option">
                                            <img src="{{ env('APP_URL') }}asset/img/crypto/coins/BNB.png"
                                                class="icon-dep">BNB [Network: Binance Smart Chain]
                                        </li>
                                        <li data-value="10013"
                                            data-image="{{ env('APP_URL') }}asset/img/crypto/coins/USDC.png"
                                            class="option"> <img
                                                src="{{ env('APP_URL') }}asset/img/crypto/coins/USDC.png"
                                                class="icon-dep">USDC [Network: Base]</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" name="amount" class="form-c w-100"
                                    placeholder="Please Input Amount"
                                    onkeyup="value=value.replace(/^\D*(\d*(?:\.\d{0,2})?).*$/g, '$1')" required="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Withdraw Address</label>
                                <textarea type="text" name="wallet" class="form-c w-100" placeholder="Enter your Address" required=""
                                    style="min-height: 80px;"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Payment Password</label>
                                <input type="password" name="password" class="form-c w-100"
                                    placeholder="Default Payment Password: 123456" required="">
                            </div>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-center">
                        <button class="template-btn btn-style-three mt-4 w-100 d-flex justify-content-center"
                            style="max-width: 200px">
                            <span class="btn-wrap">
                                <span class="text-one">Withdraw</span>
                                <span class="text-two">Withdraw</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="content-block">
            <h4 class="main_color mt-4 mb-2">History</h4>
            <div class="w-100 overflow-auto p-0 m-0">
                <table class="table c-table chat-box ai-speech bg-flashlight mt-1">
                    <thead>
                        <tr>
                            <th scope="col" class="col-3">Status</th>
                            <th scope="col" class="col-3">Time</th>
                            <th scope="col" class="col-3">USD</th>
                            <th scope="col" class="col-3">Amount</th>
                            <th scope="col" class="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="body_table">
                        <tr>
                            <td class="text-center no-data-table" colspan="100%">No data found</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="un_table">
            </div>
        </div>

        <div class="modal fade" id="details_status" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="transition: .3s ease;">
                <div class="modal-content custom-modal">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Withdraw <span id="header_m"></span></h1>
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
                                        <h1 class="medium mb-0 fw-700">Withdraw Network</h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0"><span id="system_m"></span></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ld-n">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="medium mb-0 fw-700">Withdraw Amount</h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0"><span id="amount_m"></span></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ld-n">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="medium mb-0 fw-700">Exchange Rate</h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0"><span id="rate_m"></span></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ld-n">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="medium mb-0 fw-700">Amount</h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0"><span id="final_m"></span></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ld-n">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="medium mb-0 fw-700">Remarks</h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0"><span id="remark_m"></span></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
