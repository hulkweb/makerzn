@extends('layouts.app')
@section('content')
    <script>
        const menu = "Plans";
        if (document.getElementById(menu)) {
            document.getElementById(menu).classList.add("current");
        }
    </script>
    <section class="page-title mb-3">
        <div class="page-title-icon"
            style="
            background-image: url({{ asset('asset/img/icons/page-title_icon-1.png') }});
        "></div>
        <div class="page-title-icon-two"
            style="
            background-image: url({{ asset('asset/img/icons/page-title_icon-2.png') }});
        "></div>
        <div class="page-title-shadow"
            style="
            background-image: url({{ asset('asset/img/background/page-title-1.png') }});
        "></div>
        <div class="page-title-shadow_two"
            style="
            background-image: url({{ asset('asset/img/background/page-title-2.png') }});
        "></div>
        <div class="auto-container">
            <h2>{{ $plan->name }}</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="../home.html">Home</a></li>
                <li>{{ $plan->name }}</li>
            </ul>
        </div>
    </section>

    <section class="team-detail">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Team Block One -->
                <div class="team-detail_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="team-detail_image-outer" style="margin-top: 120px">
                        <div class="team-detail_image">
                            <img src="{{ asset('uploads/plans/' . $plan->image) }}" alt="" />
                        </div>
                    </div>
                </div>

                <div class="team-detail_content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="team-detail_content-outer">
                        <h2 class="team-detail_title">
                            {{ $plan->name }}
                        </h2>
                        <div class="d-flex justify-content-between align-items-end flex-wrap">
                            <div class="price-block_one-price">
                                <sup>$</sup>{{ number_format($plan->price, 0, '', '') }}
                            </div>
                        </div>
                        <div class="team-detail_info-outer" style="margin-top: 40px">
                            <div class="row clearfix">
                                <div class="column col-lg-6 col-md-6 col-sm-6">
                                    <div class="team-detail_info">
                                        Contract Terms
                                        <span> {{ $plan->duration }} Days </span>
                                    </div>
                                    <div class="team-detail_info">
                                        Daily Rebate
                                        <span>{{ priceHTML($plan->daily_rebate) }} </span>
                                    </div>
                                    <div class="team-detail_info">
                                        Recoverable funds
                                        <span>{{ priceHTML($plan->recoverable_funds) }}+
                                            {{ priceHTML($plan->recoverable_funds_two) }}</span>
                                    </div>
                                    <div class="team-detail_info">
                                        Affiliate Rewards 2nd
                                        <span>{{ priceHTML($plan->second_referral) }} </span>
                                    </div>
                                </div>
                                <div class="column col-lg-6 col-md-6 col-sm-6">
                                    <div class="team-detail_info">
                                        Settle Interests
                                        <span>Every {{ $plan->interest_settlement_time }} Hours</span>
                                    </div>
                                    <div class="team-detail_info">
                                        Principal Refund
                                        <span>{{ $plan->principal_refund ? 'Yes' : 'No' }}</span>
                                    </div>
                                    <div class="team-detail_info">
                                        Affiliate Rewards 1st
                                        <span>{{ priceHTML($plan->first_referral) }} </span>
                                    </div>
                                    <div class="team-detail_info">
                                        Affiliate Rewards 3rd
                                        <span>{{ priceHTML($plan->third_referral) }} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-detail_button">
                            <a href="#" class="template-btn calc btn-style-one" data-bs-toggle="modal"
                                data-bs-target="#buy" id="buyed">
                                <span class="btn-wrap">
                                    <span class="text-one">Invest Now</span>
                                    <span class="text-two">Invest Now</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-one">
            <div class="auto-container">
                <div class="inner-container details" style="padding: 50px">
                    <pre style="font-size: 10.5px"><div class="ram_detail" style="border-radius: 10px; border: 2px solid var(--blue-blue-300, #2A92CD); padding: 15px 35px; font-size: 18px; display: inline-flex; align-items: center; gap: 10px; font-family: Helvetica; white-space: normal;"><img src="data:image/png')}};base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAhCAYAAAC4JqlRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAMzSURBVHgB7VdLUttAEB2NMGyAKDuqQEYu8qmsIk4Qc4LACSAniDkB9gnIDTAnwJwAOAHOKlVJwCqwC5YCwwL06bx2JJCxJY9SUGHBqxp7RurpeTP9mZYQL/jP0PIItyzL8DxvWZfyExFZmqZZ+HfxykW/KdGElAclx3FUdSoRwMJWGASb6C4LNdSlrtdUiIwkcFQsVgXRRjzGjvcxqYHdOhNjY80botfC91+FQtg4hWUSohzLhkS1t+129Z8I8HFTEOwkFH677HZri67rigz8mJmxxgsFJrwWEW52r66W0uZpqYuH4R4m2xg6kmit1G4fiByADhtm20HXyiIhh01me8eL33reUt7FGbB/k+eyDpjGnp6a2hwmN3ACv01zDQ+30HWhYPHD+bmTtgjL6ppGpZOT7TQZNsnE+PghNmT4vr/y/uyskXw/cAJwrp7DwQSVrMU5MpgoHK3+c3bWTpNjHUEQ1LhfKBQ2RRZ4R0emSWgtoQDIbaHtqMgem+Ye626Z5ufk87HkAMexCq/n3VeFAhZOT78IRcAPGjBDOSCqYLibWPMecch5QZDb6UZCyu2ISJ+57ghw2PRIIGSybJ/EcbHY4qYii6jgEHTQjKTP3BGAhxpR1xWK4PuAm1BHk380ovkBArEiHJEjng5utIYxQEBKGe/cEE8EhK3F/3pik3cEdF2PH9riqRDt3CO6GCAg/qZMPgXr0DAe/RQ4cUXpXbzrdJoDBHpeigjg/vTk5Kp4ZCAblvmfr/Pk87484IdhL1ZJvfBQRpziwaCeSgC5mi8KNkUZhUhFjEBkMmeUHKf4KMqcN53OdioBNgN2vx4x3WC7ZSm+uLwsoUhZzJJhHdh97xIaluK1FMZ1vFjlnKBJuZSnyHy4eFTYWBjWh90dQwsShGSFq9xepoOCrOs2Db/m5srx4pzecVLrw+Sya8L7soyhVOnyvJCPmugrj9nrUY6t5KoJ+xQWixsoOqrxmBXiu6CBiPnO3wRwXPf25sZGITqPcV9VDOHqQrtdy9Kv9F3wsNIdBRBpeL6/rnKr5voyYiLwjzJO4CMm2jgZgy8W9B3iFob73evr3VGl+wueFf4Apau8q/LsijQAAAAASUVORK5CYII=" data-filename="info.png')}}" style="width: 32px;">Unlimited supply per account per day.</div></pre>
                    <h3>
                        <span style="font-weight: bolder">Purchase instructions</span>
                    </h3>
                    <h6>
                        Please understand the product carefully before
                        placing an order. If you have any questions,
                        please consult customer service. After placing
                        an order, the mining contract takes effect
                        immediately upon confirmation of payment. All
                        purchases are final and non-refundable unless
                        otherwise required by applicable law or a
                        specific offer.
                    </h6>
                    <p><br /></p>
                    <h3>
                        <span style="font-weight: bolder">Calculate output</span>
                    </h3>
                    <h6>
                        For calculation of mining income, please refer
                        to {{ setting('site_name') }} pool: {{ env('APP_URL') }}plans
                    </h6>
                    <p><br /></p>
                    <h3>
                        <span style="font-weight: bolder">Output settlement</span>
                    </h3>
                    <h6>
                        After the contract expires, the mining machine
                        will stop running, and the system will settle
                        the principal and profit for you; users can only
                        withdraw money if they meet the minimum amount
                        requirement set by the platform.
                    </h6>
                    <p><br /></p>
                    <h3>
                        <span style="font-weight: bolder">Termination of contract</span>
                    </h3>
                    <h6>
                        The contract will be automatically terminated
                        upon expiration. No refunds will be given for
                        early termination. Thank you for your
                        understanding.
                    </h6>
                    <p><br /></p>
                    <h3><br /></h3>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="buy" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content custom-modal">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Checkout
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('plan.buy') }}" method="post" class="mb-0">
                    @csrf
                    <input type="hidden" name="plan_id" value="{{ $plan->id }}" />
                    <input type="hidden" name="quantity" id="q_order" />
                    <div class="modal-body">
                        <div class="row" style="row-gap: 10px">
                            <div class="col-12 ld-n">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="medium mb-0 fw-700">
                                            Contract
                                        </h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0">
                                            <span class="fw-700"> {{ $plan->name }}</span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ld-n">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="medium mb-0 fw-700">
                                            Unit Price
                                        </h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0">
                                            <span class="fw-700"> {{ priceHTML($plan->price) }}</span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ld-n">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="medium mb-0 fw-700">
                                            Quantity
                                        </h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0">
                                            <span class="fw-700" id="quantity_order">1</span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ld-n">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="medium mb-0 fw-700">
                                            Purchase Total
                                        </h1>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="medium mb-0">
                                            <span class="fw-700 c_red"
                                                id="totalsum">{{ priceHTML($plan->price) }}</span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex relative align-items-center mt-4" style="position: relative">
                                <div class="control_circle left_c" onclick="minused('#quantity')">
                                    <i class="fa-solid fa-minus"></i>
                                </div>
                                <input type="number" name="quantity" class="plan_input form-c w-100" required
                                    value="1" min="1" id="quantity" />
                                <div class="control_circle right_c" onclick="plused('#quantity')">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="template-btn d-flex justify-content-center btn-style-one w-100">
                            <span class="btn-wrap">
                                <span class="text-one">Invest Now</span>
                                <span class="text-two">Invest Now</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section class="cta-one cta-footer" style="margin-top: 400px">
        <div class="auto-container">
            <div class="inner-container">
                <div class="cta-icon_one"
                    style="
                    background-image: url({{ asset('asset/img/icons/cta-icon-1.png') }});
                ">
                </div>
                <div class="cta-icon_two"
                    style="
                    background-image: url({{ asset('asset/img/icons/cta-icon-2.png') }});
                ">
                </div>

                <div class="row clearfix">
                    <div class="cta-one_title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="cta-one_title-outer">
                            <h2 class="cta-one_title">
                                Start your first mining with
                                <span>{{ setting('site_name') }}.</span>
                            </h2>
                            <div class="cta-one_button">
                                <a href="#" class="template-btn btn-style-three">
                                    <span class="btn-wrap">
                                        <span class="text-one">Get Started Free</span>
                                        <span class="text-two">Get Started Free</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cta-one_image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="cta-one_image-outer">
                            <div class="image">
                                <img src="{{ asset('asset/img/sections/subfooter/66a42302d54b71722032898.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        // Get references to key elements
        const unitPrice = {{ $plan->price }}; // Assuming unit price is passed from the backend
        const quantityInput = document.getElementById('quantity');
        const quantityOrderDisplay = document.getElementById('quantity_order');
        const totalSumDisplay = document.getElementById('totalsum');
        const qOrderHiddenInput = document.getElementById('q_order');

        // Function to update total price and hidden input based on quantity
        function updatePrice() {
            let quantity = parseInt(quantityInput.value);
            if (quantity < 1) {
                quantity = 1; // Minimum quantity is 1
            }

            // Update hidden input
            qOrderHiddenInput.value = quantity;

            // Update quantity display
            quantityOrderDisplay.textContent = quantity;

            // Update total price display
            let total = unitPrice * quantity;
            totalSumDisplay.innerHTML = "$" + total; // Assuming priceHTML is a JS function
        }

        // Function to increase quantity
        function plused() {
            let quantity = parseInt(quantityInput.value);
            quantityInput.value = quantity + 1;
            updatePrice();
        }

        // Function to decrease quantity
        function minused() {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
            }
            updatePrice();
        }

        // Event listener to update the price when the input changes manually
        quantityInput.addEventListener('input', updatePrice);
    </script>
@endpush
