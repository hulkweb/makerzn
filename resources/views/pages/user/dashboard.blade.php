@extends('layouts.user')
@section('content')
    <script>
        const menu3 = "dashboard";
        if (document.getElementById(menu3)) {
            document.getElementById(menu3).classList.add("act");
        }
    </script>

    <div class="page-right">
        <div class="content-block">
            <div class="d-grid brs" style="grid-template-columns: repeat(4, 1fr); gap: 15px">
                <div class="block-d outlined-b">
                    <div class="icon-dash">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="#fff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <rect height="16" rx="2" ry="2" width="22" x="1" y="4" />
                            <line x1="1" x2="23" y1="10" y2="10" />
                        </svg>
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center">
                        <h4 class="text-center main_color">$0.00</h4>
                        <h5 class="text-right mt-2">Available Balance</h5>
                    </div>
                </div>
                <div class="block-d outlined-b">
                    <div class="icon-dash">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="#fff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <rect height="16" rx="2" ry="2" width="16" x="4" y="4" />
                            <rect height="6" width="6" x="9" y="9" />
                            <line x1="9" x2="9" y1="1" y2="4" />
                            <line x1="15" x2="15" y1="1" y2="4" />
                            <line x1="9" x2="9" y1="20" y2="23" />
                            <line x1="15" x2="15" y1="20" y2="23" />
                            <line x1="20" x2="23" y1="9" y2="9" />
                            <line x1="20" x2="23" y1="14" y2="14" />
                            <line x1="1" x2="4" y1="9" y2="9" />
                            <line x1="1" x2="4" y1="14" y2="14" />
                        </svg>
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center">
                        <h4 class="text-center main_color">$50.00</h4>
                        <h5 class="text-center mt-2">Trial Funds</h5>
                    </div>
                </div>
                <div class="block-d outlined-b">
                    <div class="icon-dash">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="#fff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <line x1="12" x2="12" y1="1" y2="23" />
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                        </svg>
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center">
                        <h4 class="text-center main_color">$0.00</h4>
                        <h5 class="text-center mt-2">Total Deposit</h5>
                    </div>
                </div>
                <div class="block-d outlined-b">
                    <div class="icon-dash">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="#fff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="8 12 12 16 16 12" />
                            <line x1="12" x2="12" y1="8" y2="16" />
                        </svg>
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center">
                        <h4 class="text-center main_color">$0.00</h4>
                        <h5 class="text-center mt-2">Total Withdraw</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-block mt-4">
            <div class="d-grid brs" style="grid-template-columns: repeat(3, 1fr); gap: 15px">
                <div class="block-d outlined-b bds">
                    <div class="icon-dash">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="#fff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <line x1="18" x2="18" y1="20" y2="10" />
                            <line x1="12" x2="12" y1="20" y2="4" />
                            <line x1="6" x2="6" y1="20" y2="14" />
                        </svg>
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center">
                        <h5 class="text-center main_color">Today Profits</h5>
                        <h4 class="text-center mt-2">+ $0.00</h4>
                    </div>
                </div>
                <div class="block-d outlined-b bds">
                    <div class="icon-dash">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="#fff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center">
                        <h5 class="text-center main_color">Today Referrals</h5>
                        <h4 class="text-center mt-2">+ 0</h4>
                    </div>
                </div>
                <div class="block-d outlined-b bds">
                    <div class="icon-dash">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="#fff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
                            <polyline points="17 6 23 6 23 12" />
                        </svg>
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center">
                        <h5 class="text-center main_color">Today Rewards</h5>
                        <h4 class="text-center mt-2">+ $0</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-block">
            <h4 class="main_color mt-4 mb-3">My Orders</h4>
            <div class="d-grid brs" style="grid-template-columns: repeat(3, 1fr); gap: 15px">
                <div class="block-d">
                    <div class="icon-dash">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="#fff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <line x1="16.5" x2="7.5" y1="9.4" y2="4.21"></line>
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" x2="12" y1="22.08" y2="12"></line>
                        </svg>
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center">
                        <h5 class="text-center main_color">Total Orders</h5>
                        <h4 class="text-center mt-2">$0.00</h4>
                    </div>
                </div>
                <div class="block-d">
                    <div class="icon-dash">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="#fff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg>
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center">
                        <h5 class="text-center main_color">Active Orders</h5>
                        <h4 class="text-center mt-2">$0.00</h4>
                    </div>
                </div>
                <div class="block-d">
                    <div class="icon-dash">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="#fff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <circle cx="12" cy="12" r="10" />
                            <line x1="15" x2="9" y1="9" y2="15" />
                            <line x1="9" x2="15" y1="9" y2="15" />
                        </svg>
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center">
                        <h5 class="text-center main_color">Expired Orders</h5>
                        <h4 class="text-center mt-2">$0.00</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-block">
            <h4 class="main_color mt-4 mb-3">My Referral Link</h4>
            <div class="row">
                <div class="col-7">
                    <div class="block-d">
                        <input type="text" class="form-c w-100 text-center copyd" readonly
                            value="signup?ref=A5KEKW" />
                        <div class="w-100 d-flex justify-content-center mt-3">
                            <a href="#" id="copyButton" class="template-btn btn-style-three"
                                style="padding: 13px 34px">
                                <span class="btn-wrap p-0">
                                    <span class="text-one p-0">Copy</span>
                                    <span class="text-two p-0">Copy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="block-d h-100 align-items-center d-flex justify-content-center"
                        style="flex-direction: column">
                        <h5 class="text-center main_color">Your Partners</h5>
                        <h4 class="text-center mt-2">0</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-block">
            <div class="blog-detail">
                <blockquote>
                    <div class="blockquote_bg"
                        style="
              background-image: url(asset/img/background/blockquote-bg.png);
              background-size: cover;
            ">
                    </div>
                    Do you have any Questions?
                    <p class="w-50">
                        We strongly recommend that you search for the necessary
                        information in the FAQ section. Contact our 24-hour online
                        customer service if you need advice or technical assistance.
                    </p>
                    <a href="faq" class="template-btn btn-style-two" style="padding: 13px 34px">
                        <span class="btn-wrap p-0">
                            <span class="text-one p-0">Get Support Now</span>
                            <span class="text-two p-0">Get Support Now</span>
                        </span>
                    </a>
                </blockquote>
            </div>
        </div>
    </div>
@endsection
