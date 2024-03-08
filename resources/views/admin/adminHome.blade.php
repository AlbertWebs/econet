<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Econet - Wallet & Banking</title>

    <!-- Stylesheet File -->
    <link rel="stylesheet" href="{{asset('mobile/assets/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('mobile/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('mobile/assets/css/responsive.css')}}">
</head>

<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- auto notification start -->
    {{-- <div class="modal fade fade-modal-nitification" id="overlay">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="ba-bill-pay-inner">
                    <div class="ba-single-bill-pay">
                        <div class="thumb">
                            <img src="{{asset('mobile/assets/img/icon/6.png')}}" alt="img">
                        </div>
                        <div class="details">
                            <h5>Recived Money By Aron Fince</h5>
                            <p>You have received a payment from Aorn Fice.</p>
                        </div>
                    </div>
                    <div class="amount-inner">
                        <h5><i class="fa fa-long-arrow-left"></i>$169</h5>
                        <a class="btn btn-blue" href="#">Read</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- auto notification end -->

    <!-- header start -->
    <div class="header-area" style="background-image: url('{{asset('mobile/assets/img/bg/1.png')}}');">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <div class="menu-bar">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>
                <div class="col-sm-4 col-4 text-center">
                    <a href="home.html" class="logo">
                        <img src="{{asset('mobile/assets/img/logo1.png')}}" alt="logo">
                    </a>
                </div>
                <div class="col-sm-4 col-5 text-right">
                    <ul class="header-right">
                        <li>
                            <a class="header-user" href="#">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign Out<i class="fa fa-power-off"></i>
                                </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- navbar end -->
    <div class="ba-navbar">
        <div class="ba-navbar-user">
            <div class="menu-close">
                <i class="la la-times"></i>
            </div>
            <div class="thumb">
                <img src="{{asset('mobile/assets/img/user.png')}}" alt="user">
            </div>
            <div class="details">
                <h5>{{Auth::User()->name}}</h5>
                <p>Acount Number: 99883323</p>
            </div>
        </div>

        <div class="ba-main-menu">

            <a class="btn btn-purple" href="#">View Profile</a>
        </div>
    </div>
    <!-- navbar end -->

    <!-- navbar end -->
    <div class="add-balance-inner-wrap">
        <div class="container">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Balance</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form action="https://www.s7template.com/tf/bankapp/index.html">
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account1">From</label>
                                        <select class="form-control custom-select" id="account1">
                                            <option value="0">Investment (*** 7284)</option>
                                            <option value="1">Savings (*** 5078)</option>
                                            <option value="2">Deposit (*** 2349)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Enter Amount</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input1">kes</span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg" value="7680">
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <button type="button" class="btn-c btn-primary btn-block btn-lg" data-dismiss="modal">Deposit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar end -->

    <!-- balance start -->
    <div class="balance-area pd-top-40 mg-top-50">
        <div class="container">
            <div class="balance-area-bg balance-area-bg-home">
                <div class="balance-title text-center">
                    <h6>Welcome Back! {{Auth::User()->name}}</h6>
                </div>
                <div class="ba-balance-inner text-center" style="background-image: url(assets/img/bg/2.png);">
                    <div class="row">
                        <div class="col-6 pr-0">
                            <div class="icon">
                                <img src="{{asset('mobile/assets/img/icon/1.png')}}" alt="img">
                            </div>
                            <h5 class="title"> Available</h5>
                            <h5 class="amount">KES 56,985.00</h5>
                        </div>
                        <div class="col-6 pr-0">
                            <div class="icon">
                                <img src="{{asset('mobile/assets/img/icon/1.png')}}" alt="img">
                            </div>
                            <h5 class="title">Pending </h5>
                            <h5 class="amount">KES 56,985.00</h5>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- balance End -->

    <!-- add balance start -->
    <div class="add-balance-area pd-top-40">
        <div class="container">
            {{-- <div class="ba-add-balance-title ba-add-balance-btn">
                <h5>Add Balance</h5>
                <i class="fa fa-plus"></i>
            </div> --}}
            <div class="ba-add-balance-inner mg-top-40">
                <div class="row custom-gutters-20">
                    {{-- <div class="col-6">
                        <a class="btn btn-blue ba-add-balance-btn" href="#">Withdraw <i class="fa fa-arrow-down"></i></a>
                    </div> --}}
                    <div class="col-12">
                        <a class="btn btn-green ba-add-balance-btn" href="#">Transfer Funds <i class="fa fa-arrow-right"></i></a>
                    </div>
                    {{-- <div class="col-6">
                        <a class="btn btn-purple ba-add-balance-btn" href="#">Cards <i class="fa fa-credit-card-alt "></i></a>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-green ba-add-balance-btn" href="#">Exchange <i class="fa fa-arrow-down"></i></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- add balance End -->

    <!-- goal area Start -->
    <div class="goal-area pd-top-36">
        <div class="container">
            <div class="section-title">
                <h3 class="title">Updates</h3>
                <a href="#">View All</a>
            </div>
            <div class="single-goal single-goal-one">
                <div class="row">
                    <div class="col-12 pr-0">
                        <div class="details">
                            <h6>Finance Business</h6>
                            <p>This is a sample Business update, here is where all the ipdates will apear in this card and more updates to come,  sample Business update, here is where all the ipdates will apear in this card and more updates</p>
                        </div>
                    </div>
                    {{-- <div class="col-5 pl-0">
                        <div class="circle-inner circle-inner-one">
                            <h6 class="goal-amount">$130</h6>
                            <div class="chart-circle" data-value="0.30">
                                <canvas width="52" height="52"></canvas>
                                <div class="chart-circle-value text-center">30%</div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="single-goal single-goal-one">
                <div class="row">
                    <div class="col-12 pr-0">
                        <div class="details">
                            <h6>Finance Business</h6>
                            <p>This is a sample Business update, here is where all the ipdates will apear in this card and more updates to come,  sample Business update, here is where all the ipdates will apear in this card and more updates</p>
                        </div>
                    </div>
                    {{-- <div class="col-5 pl-0">
                        <div class="circle-inner circle-inner-one">
                            <h6 class="goal-amount">$130</h6>
                            <div class="chart-circle" data-value="0.30">
                                <canvas width="52" height="52"></canvas>
                                <div class="chart-circle-value text-center">30%</div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>


        </div>
    </div>
    <!-- goal area End -->


    <!-- transaction start -->
    <div class="transaction-area pd-top-40">
        <div class="container">
            <div class="section-title">
                <h3 class="title">Transactions</h3>
                <a href="#">View All</a>
            </div>
            <ul class="transaction-inner">
                <li class="ba-single-transaction">
                    <div class="thumb">
                        <img src="{{asset('mobile/assets/img/icon/2.png')}}" alt="img">
                    </div>
                    <div class="details">
                        <h5>Namecheap Inc.</h5>
                        <p>Domain Purchase</p>
                        <h5 class="amount">-kes 1350</h5>
                    </div>
                </li>
                <li class="ba-single-transaction">
                    <div class="thumb">
                        <img src="{{asset('mobile/assets/img/icon/3.png')}}" alt="img">
                    </div>
                    <div class="details">
                        <h5>Namecheap Inc.</h5>
                        <p>Domain Purchase</p>
                        <h5 class="amount">-kes 1350</h5>
                    </div>
                </li>
                <li class="ba-single-transaction">
                    <div class="thumb">
                        <img src="{{asset('mobile/assets/img/icon/4.png')}}" alt="img">
                    </div>
                    <div class="details">
                        <h5>Namecheap Inc.</h5>
                        <p>Domain Purchase</p>
                        <h5 class="amount">-kes 1350</h5>
                    </div>
                </li>
                <li class="ba-single-transaction">
                    <div class="thumb">
                        <img src="{{asset('mobile/assets/img/icon/5.png')}}" alt="img">
                    </div>
                    <div class="details">
                        <h5>Namecheap Inc.</h5>
                        <p>Domain Purchase</p>
                        <h5 class="amount">-kes 1350</h5>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- transaction End -->





    <!-- Footer Area -->
    <div class="footer-area">
        <div class="footer-top text-center" style="background-image: url('{{url('/mobile/assets/img/bg/7.png')}}');">
            <div class="container">
                <p>Copyright © Econet 2024. All Rights Reserved. Powered By Econet Africa</p>
            </div>
        </div>
        {{-- <div class="container">
            <div class="footer-bottom text-center">
                <ul>
                    <li>
                        <a href="home.html">
                            <i class="fa fa-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a href="all-page.html">
                            <i class="fa fa-file-text"></i>
                            <p>Pages</p>
                        </a>
                    </li>
                    <li>
                        <a href="component.html">
                            <i class="fa fa-plus"></i>
                            <p>Components</p>
                        </a>
                    </li>
                    <li>
                        <a class="menu-bar" href="#">
                            <i class="fa fa-bars"></i>
                            <p>Menu</p>
                        </a>
                    </li>
                    <li>
                        <a href="carts.html">
                            <i class="fa fa-home"></i>
                            <p>My Card</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div> --}}
    </div>

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- All Js File here -->
    <script src="{{asset('mobile/assets/js/vendor.js')}}"></script>
    <script src="{{asset('mobile/assets/js/main.js')}}"></script>

</body>


</html>
