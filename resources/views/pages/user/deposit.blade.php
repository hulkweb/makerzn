@extends('layouts.user')
@section('content')
    <div class="page-right">
        <div class="content-block">
            <h4 class="main_color mb-3">Deposit</h4>
            <div class="block-d">
                <form action="deposit/crypto" method="POST">
                    <input type="hidden" name="_token" value="hSKmz6UzIqOFmsAs6Rceh3fIv5kFPn2CzEisGaPV">
                    <div class="row" style="row-gap: 20px">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Deposit Network</label>
                                <select name="network"
                                    class="mb-3 form-c select-bar dw w-full rounded  bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark"
                                    required value="">
                                    <option disabled selected>Select Deposit Network</option>
                                    <option value="10001" data-image="asset/img/crypto/coins/BTC.png">
                                        BTC [Network: Bitcoin]</option>
                                    <option value="10002" data-image="asset/img/crypto/coins/ETH.png">
                                        ETH [Network: Ethereum]</option>
                                    <option value="10003" data-image="asset/img/crypto/coins/LTC.png">
                                        LTC [Network: Litecoin]</option>
                                    <option value="10004" data-image="asset/img/crypto/coins/USDT.png">
                                        USDT-ERC20 [Network: Ethereum]</option>
                                    <option value="10005" data-image="asset/img/crypto/coins/USDT.png">
                                        USDT-TRC20 [Network: Tron]</option>
                                    <option value="10007" data-image="asset/img/crypto/coins/USDC.png">
                                        USDC [Network: Ethereum]</option>
                                    <option value="10008" data-image="asset/img/crypto/coins/BCH.png">
                                        BCH [Network: Bitcoin Cash]</option>
                                    <option value="10009" data-image="asset/img/crypto/coins/USDT.png">
                                        USDT-BEP20 [Network: Binance Smart Chain]</option>
                                    <option value="10010" data-image="asset/img/crypto/coins/BNB.png">
                                        BNB [Network: Binance Smart Chain]</option>
                                    <option value="10011" data-image="asset/img/crypto/coins/DOGE.png">
                                        DOGE [Network: Dogecoin]</option>
                                    <option value="10012" data-image="asset/img/crypto/coins/USDC.png">
                                        USDC [Network: Base]</option>
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
                        <tr>
                            <td class=" c_yel " id="status">
                                In Progress
                            </td>
                            <td id="time">2024-09-23 18:08:09</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <div class="d-flex align-items-center gap-10" style="gap: 6px">
                                        <img src="/asset/img/crypto/coins/ETH.png" class="round-gate" width="22"
                                            height="22">
                                        <span class="white fw-600" id="amount">
                                            2.99808000
                                        </span> <span id="system">ETH</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="de">$8,000.00</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <button class="table_button  b_pen1 " data-gateway_name="ETH [Network: Ethereum]"
                                        data-currency="ETH" data-amount="8,000.00"
                                        data-wallet="0x8943b243CE3F98952a0349Ff39a8b565b50d2eeE" data-id="22620821"
                                        data-status="0" data-rate="0.00037476" data-final="2.99808000"
                                        data-remark="In Progress">
                                        Upload
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class=" c_yel " id="status">
                                In Progress
                            </td>
                            <td id="time">2024-09-23 18:07:04</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <div class="d-flex align-items-center gap-10" style="gap: 6px">
                                        <img src="/asset/img/crypto/coins/BTC.png" class="round-gate" width="22"
                                            height="22">
                                        <span class="white fw-600" id="amount">
                                            0.12624000
                                        </span> <span id="system">BTC</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="de">$8,000.00</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <button class="table_button  b_pen1 " data-gateway_name="BTC [Network: Bitcoin]"
                                        data-currency="BTC" data-amount="8,000.00"
                                        data-wallet="35d2P8Qtd7s9Myed9k7d7SMruemnBM7Vwj" data-id="22620820"
                                        data-status="0" data-rate="0.00001578" data-final="0.12624000"
                                        data-remark="In Progress">
                                        Upload
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class=" c_yel " id="status">
                                In Progress
                            </td>
                            <td id="time">2024-09-23 18:06:50</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <div class="d-flex align-items-center gap-10" style="gap: 6px">
                                        <img src="/asset/img/crypto/coins/USDC.png" class="round-gate" width="22"
                                            height="22">
                                        <span class="white fw-600" id="amount">
                                            200.00000000
                                        </span> <span id="system">USDC</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="de">$200.00</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <button class="table_button  b_pen1 " data-gateway_name="USDC [Network: Base]"
                                        data-currency="USDC" data-amount="200.00"
                                        data-wallet="0x8943b243CE3F98952a0349Ff39a8b565b50d2eeE" data-id="22620819"
                                        data-status="0" data-rate="1.00000000" data-final="200.00000000"
                                        data-remark="In Progress">
                                        Upload
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class=" c_yel " id="status">
                                In Progress
                            </td>
                            <td id="time">2024-09-23 18:06:21</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <div class="d-flex align-items-center gap-10" style="gap: 6px">
                                        <img src="/asset/img/crypto/coins/DOGE.png" class="round-gate" width="22"
                                            height="22">
                                        <span class="white fw-600" id="amount">
                                            1,870.38249400
                                        </span> <span id="system">DOGE</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="de">$200.00</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <button class="table_button  b_pen1 " data-gateway_name="DOGE [Network: Dogecoin]"
                                        data-currency="DOGE" data-amount="200.00"
                                        data-wallet="DNjuDmyu7raDy1r4j9q9Z7PSy6SijFBs7d" data-id="22620818"
                                        data-status="0" data-rate="9.35191247" data-final="1,870.38249400"
                                        data-remark="In Progress">
                                        Upload
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class=" c_yel " id="status">
                                In Progress
                            </td>
                            <td id="time">2024-09-23 18:06:10</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <div class="d-flex align-items-center gap-10" style="gap: 6px">
                                        <img src="/asset/img/crypto/coins/BNB.png" class="round-gate" width="22"
                                            height="22">
                                        <span class="white fw-600" id="amount">
                                            0.32846200
                                        </span> <span id="system">BNB</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="de">$200.00</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <button class="table_button  b_pen1 "
                                        data-gateway_name="BNB [Network: Binance Smart Chain]" data-currency="BNB"
                                        data-amount="200.00" data-wallet="0x8943b243CE3F98952a0349Ff39a8b565b50d2eeE"
                                        data-id="22620817" data-status="0" data-rate="0.00164231"
                                        data-final="0.32846200" data-remark="In Progress">
                                        Upload
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class=" c_yel " id="status">
                                In Progress
                            </td>
                            <td id="time">2024-09-23 18:05:52</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <div class="d-flex align-items-center gap-10" style="gap: 6px">
                                        <img src="/asset/img/crypto/coins/USDT.png" class="round-gate" width="22"
                                            height="22">
                                        <span class="white fw-600" id="amount">
                                            200.00
                                        </span> <span id="system">USDT</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="de">$200.00</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <button class="table_button  b_pen1 "
                                        data-gateway_name="USDT-BEP20 [Network: Binance Smart Chain]" data-currency="USDT"
                                        data-amount="200.00" data-wallet="0x8943b243CE3F98952a0349Ff39a8b565b50d2eeE"
                                        data-id="22620816" data-status="0" data-rate="1.00000000"
                                        data-final="200.00000000" data-remark="In Progress">
                                        Upload
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class=" c_yel " id="status">
                                In Progress
                            </td>
                            <td id="time">2024-09-23 18:05:30</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <div class="d-flex align-items-center gap-10" style="gap: 6px">
                                        <img src="/asset/img/crypto/coins/BCH.png" class="round-gate" width="22"
                                            height="22">
                                        <span class="white fw-600" id="amount">
                                            0.58823600
                                        </span> <span id="system">BCH</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="de">$200.00</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <button class="table_button  b_pen1 " data-gateway_name="BCH [Network: Bitcoin Cash]"
                                        data-currency="BCH" data-amount="200.00"
                                        data-wallet="qq93les3qlptku3kn4wgg7g0p3t897crfgexk8xd4y" data-id="22620815"
                                        data-status="0" data-rate="0.00294118" data-final="0.58823600"
                                        data-remark="In Progress">
                                        Upload
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class=" c_yel " id="status">
                                In Progress
                            </td>
                            <td id="time">2024-09-23 18:05:10</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <div class="d-flex align-items-center gap-10" style="gap: 6px">
                                        <img src="/asset/img/crypto/coins/USDC.png" class="round-gate" width="22"
                                            height="22">
                                        <span class="white fw-600" id="amount">
                                            200.00000000
                                        </span> <span id="system">USDC</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="de">$200.00</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <button class="table_button  b_pen1 " data-gateway_name="USDC [Network: Ethereum]"
                                        data-currency="USDC" data-amount="200.00"
                                        data-wallet="0x8943b243CE3F98952a0349Ff39a8b565b50d2eeE" data-id="22620814"
                                        data-status="0" data-rate="1.00000000" data-final="200.00000000"
                                        data-remark="In Progress">
                                        Upload
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class=" c_yel " id="status">
                                In Progress
                            </td>
                            <td id="time">2024-09-23 18:04:51</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <div class="d-flex align-items-center gap-10" style="gap: 6px">
                                        <img src="/asset/img/crypto/coins/USDT.png" class="round-gate" width="22"
                                            height="22">
                                        <span class="white fw-600" id="amount">
                                            200.00
                                        </span> <span id="system">USDT</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="de">$200.00</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <button class="table_button  b_pen1 "
                                        data-gateway_name="USDT-ERC20 [Network: Ethereum]" data-currency="USDT"
                                        data-amount="200.00" data-wallet="0x8943b243CE3F98952a0349Ff39a8b565b50d2eeE"
                                        data-id="22620813" data-status="0" data-rate="1.00000000"
                                        data-final="200.00000000" data-remark="In Progress">
                                        Upload
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class=" c_yel " id="status">
                                In Progress
                            </td>
                            <td id="time">2024-09-23 18:04:10</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <div class="d-flex align-items-center gap-10" style="gap: 6px">
                                        <img src="/asset/img/crypto/coins/LTC.png" class="round-gate" width="22"
                                            height="22">
                                        <span class="white fw-600" id="amount">
                                            2.96120800
                                        </span> <span id="system">LTC</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="de">$200.00</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between gap-40">
                                    <button class="table_button  b_pen1 " data-gateway_name="LTC [Network: Litecoin]"
                                        data-currency="LTC" data-amount="200.00"
                                        data-wallet="LaQySumFjxzF4XwYF1RvddGypADDh6iBbW" data-id="22620812"
                                        data-status="0" data-rate="0.01480604" data-final="2.96120800"
                                        data-remark="In Progress">
                                        Upload
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="un_table">
                <link rel="stylesheet" href="asset/css/custom-pag.css">
                <nav class="pagination-outer" aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li class="page-item  activeds"><a class="page-link" href="deposit?page=1">1</a></li>
                        <li class="page-item "><a class="page-link" href="deposit?page=2">2</a></li>
                        <li class="page-item">
                            <a href="deposit?page=2" class="page-link" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
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
                        <form action="deposit/submit/voucher" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="hSKmz6UzIqOFmsAs6Rceh3fIv5kFPn2CzEisGaPV"> <input
                                type="hidden" name="deposit_id" id="deposit_id">
                            <div class="row" style="row-gap: 10px;">
                                <div class="col-12 mt-0">
                                    <label class="label_cod">Deposit Amount:</label>
                                    <input type="text" class="form-control copyd_num icon__copy form-bg-2 w-100"
                                        readonly id="dpsam" style="background-color: transparent;">
                                </div>
                                <div class="col-12 mt-0">
                                    <label class="label_cod">Wallet Address:</label>
                                    <textarea type="text" class="form-control copyd icon__copy form-bg-2 w-100" readonly id="wlt"
                                        style="padding-right: 40px; background-color: transparent;"></textarea>
                                </div>
                                <div class="col-12 mt-0 relative d-flex align-items-center">
                                    <input type="file" name="image" id="imageUpload"
                                        class="upload_btn form-c form-bg-2 w-100" accept=".png, .jpg, .jpeg"
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

    </div>
@endsection
