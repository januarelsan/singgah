@extends('layouts.mk')

@section('title')
Jasa Desain | Singgah
@endsection

@section('content')

<section class="section-b-space light-layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true"></i>
                        <h2>thank you</h2>
                        <p>Order is successfully send and your order is on process</p>
                        <p>Order ID:267676GHERT105467</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- order-detail section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-order">
                        <h3>your order details</h3>
                        <div class="row product-order-detail">
                            <div class="col-3"><img src="../assets/images/pro3/1.jpg" alt=""
                                    class="img-fluid blur-up lazyload"></div>
                            <div class="col-3 order_detail">
                                <div>
                                    <h4>product name</h4>
                                    <h5>cotton shirt</h5>
                                </div>
                            </div>
                            <div class="col-3 order_detail">
                                <div>
                                    <h4>quantity</h4>
                                    <h5>1</h5>
                                </div>
                            </div>
                            {{-- <div class="col-3 order_detail">
                                <div>
                                    <h4>price</h4>
                                    <h5>$555.00</h5>
                                </div>
                            </div> --}}
                        </div>
                        <div class="row product-order-detail">
                            <div class="col-3"><img src="../assets/images/pro3/1.jpg" alt=""
                                    class="img-fluid blur-up lazyload"></div>
                            <div class="col-3 order_detail">
                                <div>
                                    <h4>product name</h4>
                                    <h5>cotton shirt</h5>
                                </div>
                            </div>
                            <div class="col-3 order_detail">
                                <div>
                                    <h4>quantity</h4>
                                    <h5>1</h5>
                                </div>
                            </div>
                            <div class="col-3 order_detail">
                                <div>
                                    <h4>price</h4>
                                    <h5>$555.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="total-sec">
                            <ul>
                                <li>subtotal <span>$55.00</span></li>
                                <li>shipping <span>$12.00</span></li>
                                <li>tax(GST) <span>$10.00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row order-success-sec">
                        <div class="col-sm-6">
                            <h4>summery</h4>
                            <ul class="order-detail">
                                <li>order ID: 5563853658932</li>
                                <li>Order Date: October 22, 2018</li>
                                <li>Order Total: $907.28</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h4>shipping address</h4>
                            <ul class="order-detail">
                                <li>gerg harvell</li>
                                <li>568, suite ave.</li>
                                <li>Austrlia, 235153</li>
                                <li>Contact No. 987456321</li>
                            </ul>
                        </div>
                        <div class="col-sm-12 payment-mode">
                            <h4>payment method</h4>
                            <p>Pay on Delivery (Cash/Card). Cash on delivery (COD) available. Card/Net banking
                                acceptance subject to device availability.</p>
                        </div>
                        <div class="col-md-12">
                            <div class="delivery-sec">
                                <h3>expected date of delivery</h3>
                                <h2>october 22, 2018</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection