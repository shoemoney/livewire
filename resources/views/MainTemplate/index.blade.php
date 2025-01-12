<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('maintemplate/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('maintemplate/assets/css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('maintemplate/assets/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('maintemplate/assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('maintemplate/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('maintemplate/css/responsive.css') }}">
  <title>Excoin cryptowatch</title>
</head>
<body>
    <div class="banner-block">
        <nav class="navbar main-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-logo" src="{{ asset('maintemplate/images/logo.png') }}" alt="..."/>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="exchange-one.html">Exchange </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="exchange-one.html">Exchange Default</a></li>
                                <li class="nav-item"><a class="nav-link" href="exchange-two.html">Exchange Full</a></li>
                                <li class="nav-item"><a class="nav-link" href="exchange-three.html">Exchange Dark</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="chart.html">Chart</a></li>
                        <li class="nav-item"><a class="nav-link" href="features.html">Features</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Support</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="support.html">Support Default</a></li>
                                <li class="nav-item"><a class="nav-link" href="support-details.html">Support Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">News</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="latest-news.html">Latest News</a></li>
                                <li class="nav-item"><a class="nav-link" href="news-details.html">News Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">More</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="faq.html">Faq</a></li>
                                <li class="nav-item"><a class="nav-link" href="how-work.html">How Work</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown language-option">
                            <a class="nav-link" href="#">
                                <i class="fas fa-globe"></i> EN
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                            <i class="fab fa-buysellads"></i> US
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-lira-sign"></i> UK
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            <!-- Modal -->
        </nav><!-- main-nav-block -->
        <div class="container">
            <div class="offset-md-2 col-md-8">
                <div class="banner-content">
                    <h2>Buy and Sell Cryptocurrency</h2>
                    <p>
                        Many desktop publishing packages and web page editors now use Lorem Ipsum <br>
                         as their default model text
                    </p>
                    <form action="#" method="get" class="subs-form">
                        <div class="input-box">
                            <input type="text" value="" required="" name="s" class="form-control" placeholder="Email">
                            <button type="submit">Get Start Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Graph -->
	    <div class="graph graph-padding">
            <div class="container">
                <div class="row margin-balance">
                    <div class="col-lg-3 col-6">
                        <a href="./exchange-one.html" class="graph-item-block">
                            <div class="graph-item">
                                <div class="graph-content">
                                    <h5>BNB/BTC</h5>
                                    <div class="lastprice">
                                        <span class="price-change color-buy">0.0017571</span>
                                        <span class="transmoney">$12.31</span>
                                    </div>
                                    <span class="volume">Volume: 4,356.83 BTC</span>
                                </div>
                                <div class="graph-chart">
                                    <span class="updating-chart-one">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6">
                        <a href="./exchange-one.html" class="graph-item-block">
                            <div class="graph-item">
                                <div class="graph-content">
                                    <h5>XVG/BTC</h5>
                                    <div class="lastprice">
                                        <span class="price-change color-white">0.00000924</span>
                                        <span class="transmoney">$0.07</span>
                                    </div>
                                    <span class="volume">Volume: 4,206.95 BTC</span>
                                </div>
                                <div class="graph-chart">
                                    <span class="updating-chart-two">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
                                </div>
                            </div>
                        </a> 
                    </div>
                    <div class="col-lg-3 col-6">
                        <a href="./exchange-one.html" class="graph-item-block">
                            <div class="graph-item">
                                <div class="graph-content">
                                    <h5>TRX/BTC</h5>
                                    <div class="lastprice">
                                        <span class="price-change color-sell">0.0017571</span>
                                        <span class="transmoney">$12.31</span>
                                    </div>
                                    <span class="volume">Volume: 4,356.83 BTC</span>
                                </div>
                                <div class="graph-chart">
                                    <span class="updating-chart-three">2,5,3,7,9,3,3,3,3,6,8,5,7,7,1,9,7,3,5,2</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6">
                        <a href="./exchange-one.html" class="graph-item-block">
                            <div class="graph-item">
                                <div class="graph-content">
                                    <h5>ONT/BTC</h5>
                                    <div class="lastprice">
                                        <span class="price-change color-buy">0.0017571</span>
                                        <span class="transmoney">$12.31</span>
                                    </div>
                                    <span class="volume">Volume: 4,356.83 BTC</span>
                                </div>
                                <div class="graph-chart">
                                    <span class="updating-chart-four">0,0,5,6,5,7,8,9,10,12,13,14,15,6,5,9,7,3,5,2</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- graph-block -->
        <div class="news-headline-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-md-2">
                        <span class="news-tags">News</span>
                    </div>
                    <div class="col-lg-11 col-md-10">
                        <div class="news-headlines-block">
                            <div class="news-headlines-slider" id="news_headlines_slider">
                                <div>
                                    <a href="./news-details.html">
                                        Nam dignissim auctor In sit amet lacinia .....
                                    </a>
                                </div>
                                <div>
                                    <a href="./news-details.html">
                                        We Are Specialized in the Following Services .....
                                    </a>
                                </div>
                                <div>
                                    <a href="./news-details.html">
                                        We can cover all the aspects of your digital .....
                                    </a>
                                </div>
                                <div>
                                    <a href="./news-details.html">
                                        Nam dignissim auctor In sit amet lacinia .....
                                    </a>
                                </div>
                                <div>
                                    <a href="./news-details.html">
                                        We Are Specialized in the Following Services .....
                                    </a>
                                </div>
                                <div>
                                    <a href="./news-details.html">
                                        We can cover all the aspects of your digital .....
                                    </a>
                                </div>
                            </div><!-- news-headlines-slider -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- banner-block -->
    <div class="new-ticker-block new-ticker-block-section">
        <div class="container">
            <div class="new-ticker-block-wrap">
                <div class="ticker-head">
                    <ul class="nav nav-tabs ticker-nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#favorite_ticker" role="tab" data-toggle="tab">
                                <h5>Favorites</h5>
                                <i class="fa fa-stroopwafel"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#BNB_markets" role="tab" data-toggle="tab">BNB Markets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#BTC_markets" role="tab" data-toggle="tab">BTC Markets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ETH_markets" role="tab" data-toggle="tab">ETH Markets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#USDT_markets" role="tab" data-toggle="tab">USDT Markets</a>
                        </li>
                        <li class="nav-item nav-item-last">
                            <form action="#" method="get" class="search-form">
                                <div class="input-box">
                                    <input type="text" value="" required="" name="s" class="form-control" placeholder="Search...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="market-ticker-block">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="favorite_ticker">
                            <table class="table coin-list table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th scope="col">Pair</th>
                                        <th scope="col">Last Price</th>
                                        <th scope="col">24h Change <span class="ti-arrow-down"></span></th>
                                        <th scope="col">24h High</th>
                                        <th scope="col">24h Low</th>
                                        <th scope="col">24h Volume</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td> POA / BTC</td>
                                        <td><span class="color-buy">0.00006822 </span>/$0.48</td>
                                        <td><span class="color-sell">-23.80%</span></td>
                                        <td>0.00007300</td>
                                        <td>0.00005510</td>
                                        <td>7,522.88586112</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ONT/BTC</td>
                                        <td><span class="color-buy">0.00050900 / $3.55</span></td>
                                        <td><span class="color-buy">+8.70%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ETH/BTC</td>
                                        <td><span class="color-buy">0.05722 </span>/ $399.8</td>
                                        <td><span class="color-buy">+2.76%</span></td>
                                        <td>0.05723</td>
                                        <td>0.05550</td>
                                        <td>5,523.15018959</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>IOST/BTC</td>
                                        <td><span class="color-sell">0.00000490  </span>/ $399.8/td>
                                        <td><span class="color-sell">-2.73%</span></td>
                                        <td>0.0000051</td>
                                        <td>0.0000046</td>
                                        <td>5,300.71861161</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>POA / BTC</td>
                                        <td><span class="color-sell">0.0000054 </span>/ $0.0</td>
                                        <td><span class="color-buy">+2.70%</span></td>
                                        <td>0.0000055</td>
                                        <td>0.0000052</td>
                                        <td>4,683.61663443</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>NCASH/BTC</td>
                                        <td>0.00050900 / $3.55</td>
                                        <td><span class="color-sell">-8.70%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>BNB/BTC</td>
                                        <td><span class="color-sell">0.001741</span> / $12.1</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ICX/BTC</td>
                                        <td>0.0000093 / $12.1</td>
                                        <td><span class="color-sell">+7.59%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>XVG/BTC</td>
                                        <td><span class="color-buy">0.0000041</span> / $0.03</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ADA/BTC</td>
                                        <td><span class="color-buy">0.0014589</span> / $18.29</td>
                                        <td><span class="color-sell">+5.74%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>NCASH/BTC</td>
                                        <td>0.00050900 / $3.55</td>
                                        <td><span class="color-sell">-8.70%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>BNB/BTC</td>
                                        <td><span class="color-sell">0.001741</span> / $12.1</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ICX/BTC</td>
                                        <td>0.0000093 / $12.1</td>
                                        <td><span class="color-sell">+7.59%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>XVG/BTC</td>
                                        <td><span class="color-buy">0.0000041</span> / $0.03</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ADA/BTC</td>
                                        <td><span class="color-buy">0.0014589</span> / $18.29</td>
                                        <td><span class="color-sell">+5.74%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                </tbody>
                            </table><!-- coin-list table -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="BNB_markets">
                            <table class="table coin-list table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th scope="col">Pair</th>
                                        <th scope="col">Last Price</th>
                                        <th scope="col">24h Change <span class="ti-arrow-down"></span></th>
                                        <th scope="col">24h High</th>
                                        <th scope="col">24h Low</th>
                                        <th scope="col">24h Volume</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td> POA / BTC</td>
                                        <td><span class="color-buy">0.00006822 </span>/$0.48</td>
                                        <td><span class="color-sell">-23.80%</span></td>
                                        <td>0.00007300</td>
                                        <td>0.00005510</td>
                                        <td>7,522.88586112</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ONT/BTC</td>
                                        <td><span class="color-buy">0.00050900 / $3.55</span></td>
                                        <td><span class="color-buy">+8.70%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ETH/BTC</td>
                                        <td><span class="color-buy">0.05722 </span>/ $399.8</td>
                                        <td><span class="color-buy">+2.76%</span></td>
                                        <td>0.05723</td>
                                        <td>0.05550</td>
                                        <td>5,523.15018959</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>IOST/BTC</td>
                                        <td><span class="color-sell">0.00000490  </span>/ $399.8/td>
                                        <td><span class="color-sell">-2.73%</span></td>
                                        <td>0.0000051</td>
                                        <td>0.0000046</td>
                                        <td>5,300.71861161</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>POA / BTC</td>
                                        <td><span class="color-sell">0.0000054 </span>/ $0.0</td>
                                        <td><span class="color-buy">+2.70%</span></td>
                                        <td>0.0000055</td>
                                        <td>0.0000052</td>
                                        <td>4,683.61663443</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>NCASH/BTC</td>
                                        <td>0.00050900 / $3.55</td>
                                        <td><span class="color-sell">-8.70%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>BNB/BTC</td>
                                        <td><span class="color-sell">0.001741</span> / $12.1</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ICX/BTC</td>
                                        <td>0.0000093 / $12.1</td>
                                        <td><span class="color-sell">+7.59%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>XVG/BTC</td>
                                        <td><span class="color-buy">0.0000041</span> / $0.03</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ADA/BTC</td>
                                        <td><span class="color-buy">0.0014589</span> / $18.29</td>
                                        <td><span class="color-sell">+5.74%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>NCASH/BTC</td>
                                        <td>0.00050900 / $3.55</td>
                                        <td><span class="color-sell">-8.70%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>BNB/BTC</td>
                                        <td><span class="color-sell">0.001741</span> / $12.1</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ICX/BTC</td>
                                        <td>0.0000093 / $12.1</td>
                                        <td><span class="color-sell">+7.59%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>XVG/BTC</td>
                                        <td><span class="color-buy">0.0000041</span> / $0.03</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ADA/BTC</td>
                                        <td><span class="color-buy">0.0014589</span> / $18.29</td>
                                        <td><span class="color-sell">+5.74%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                </tbody>
                            </table><!-- coin-list table -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="BTC_markets">
                            <table class="table coin-list table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th scope="col">Pair</th>
                                        <th scope="col">Last Price</th>
                                        <th scope="col">24h Change <span class="ti-arrow-down"></span></th>
                                        <th scope="col">24h High</th>
                                        <th scope="col">24h Low</th>
                                        <th scope="col">24h Volume</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td> POA / BTC</td>
                                        <td><span class="color-buy">0.00006822 </span>/$0.48</td>
                                        <td><span class="color-sell">-23.80%</span></td>
                                        <td>0.00007300</td>
                                        <td>0.00005510</td>
                                        <td>7,522.88586112</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ONT/BTC</td>
                                        <td><span class="color-buy">0.00050900 / $3.55</span></td>
                                        <td><span class="color-buy">+8.70%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ETH/BTC</td>
                                        <td><span class="color-buy">0.05722 </span>/ $399.8</td>
                                        <td><span class="color-buy">+2.76%</span></td>
                                        <td>0.05723</td>
                                        <td>0.05550</td>
                                        <td>5,523.15018959</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>IOST/BTC</td>
                                        <td><span class="color-sell">0.00000490  </span>/ $399.8/td>
                                        <td><span class="color-sell">-2.73%</span></td>
                                        <td>0.0000051</td>
                                        <td>0.0000046</td>
                                        <td>5,300.71861161</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>POA / BTC</td>
                                        <td><span class="color-sell">0.0000054 </span>/ $0.0</td>
                                        <td><span class="color-buy">+2.70%</span></td>
                                        <td>0.0000055</td>
                                        <td>0.0000052</td>
                                        <td>4,683.61663443</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>NCASH/BTC</td>
                                        <td>0.00050900 / $3.55</td>
                                        <td><span class="color-sell">-8.70%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>BNB/BTC</td>
                                        <td><span class="color-sell">0.001741</span> / $12.1</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ICX/BTC</td>
                                        <td>0.0000093 / $12.1</td>
                                        <td><span class="color-sell">+7.59%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>XVG/BTC</td>
                                        <td><span class="color-buy">0.0000041</span> / $0.03</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ADA/BTC</td>
                                        <td><span class="color-buy">0.0014589</span> / $18.29</td>
                                        <td><span class="color-sell">+5.74%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>NCASH/BTC</td>
                                        <td>0.00050900 / $3.55</td>
                                        <td><span class="color-sell">-8.70%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>BNB/BTC</td>
                                        <td><span class="color-sell">0.001741</span> / $12.1</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ICX/BTC</td>
                                        <td>0.0000093 / $12.1</td>
                                        <td><span class="color-sell">+7.59%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>XVG/BTC</td>
                                        <td><span class="color-buy">0.0000041</span> / $0.03</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ADA/BTC</td>
                                        <td><span class="color-buy">0.0014589</span> / $18.29</td>
                                        <td><span class="color-sell">+5.74%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                </tbody>
                            </table><!-- coin-list table -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="ETH_markets">
                            <table class="table coin-list table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th scope="col">Pair</th>
                                        <th scope="col">Last Price</th>
                                        <th scope="col">24h Change <span class="ti-arrow-down"></span></th>
                                        <th scope="col">24h High</th>
                                        <th scope="col">24h Low</th>
                                        <th scope="col">24h Volume</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td> POA / BTC</td>
                                        <td><span class="color-buy">0.00006822 </span>/$0.48</td>
                                        <td><span class="color-sell">-23.80%</span></td>
                                        <td>0.00007300</td>
                                        <td>0.00005510</td>
                                        <td>7,522.88586112</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ONT/BTC</td>
                                        <td><span class="color-buy">0.00050900 / $3.55</span></td>
                                        <td><span class="color-buy">+8.70%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ETH/BTC</td>
                                        <td><span class="color-buy">0.05722 </span>/ $399.8</td>
                                        <td><span class="color-buy">+2.76%</span></td>
                                        <td>0.05723</td>
                                        <td>0.05550</td>
                                        <td>5,523.15018959</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>IOST/BTC</td>
                                        <td><span class="color-sell">0.00000490  </span>/ $399.8/td>
                                        <td><span class="color-sell">-2.73%</span></td>
                                        <td>0.0000051</td>
                                        <td>0.0000046</td>
                                        <td>5,300.71861161</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>POA / BTC</td>
                                        <td><span class="color-sell">0.0000054 </span>/ $0.0</td>
                                        <td><span class="color-buy">+2.70%</span></td>
                                        <td>0.0000055</td>
                                        <td>0.0000052</td>
                                        <td>4,683.61663443</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>NCASH/BTC</td>
                                        <td>0.00050900 / $3.55</td>
                                        <td><span class="color-sell">-8.70%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>BNB/BTC</td>
                                        <td><span class="color-sell">0.001741</span> / $12.1</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ICX/BTC</td>
                                        <td>0.0000093 / $12.1</td>
                                        <td><span class="color-sell">+7.59%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>XVG/BTC</td>
                                        <td><span class="color-buy">0.0000041</span> / $0.03</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ADA/BTC</td>
                                        <td><span class="color-buy">0.0014589</span> / $18.29</td>
                                        <td><span class="color-sell">+5.74%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>NCASH/BTC</td>
                                        <td>0.00050900 / $3.55</td>
                                        <td><span class="color-sell">-8.70%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>BNB/BTC</td>
                                        <td><span class="color-sell">0.001741</span> / $12.1</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ICX/BTC</td>
                                        <td>0.0000093 / $12.1</td>
                                        <td><span class="color-sell">+7.59%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>XVG/BTC</td>
                                        <td><span class="color-buy">0.0000041</span> / $0.03</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ADA/BTC</td>
                                        <td><span class="color-buy">0.0014589</span> / $18.29</td>
                                        <td><span class="color-sell">+5.74%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                </tbody>
                            </table><!-- coin-list table -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="USDT_markets">
                            <table class="table coin-list table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th scope="col">Pair</th>
                                        <th scope="col">Last Price</th>
                                        <th scope="col">24h Change <span class="ti-arrow-down"></span></th>
                                        <th scope="col">24h High</th>
                                        <th scope="col">24h Low</th>
                                        <th scope="col">24h Volume</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td> POA / BTC</td>
                                        <td><span class="color-buy">0.00006822 </span>/$0.48</td>
                                        <td><span class="color-sell">-23.80%</span></td>
                                        <td>0.00007300</td>
                                        <td>0.00005510</td>
                                        <td>7,522.88586112</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ONT/BTC</td>
                                        <td><span class="color-buy">0.00050900 / $3.55</span></td>
                                        <td><span class="color-buy">+8.70%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ETH/BTC</td>
                                        <td><span class="color-buy">0.05722 </span>/ $399.8</td>
                                        <td><span class="color-buy">+2.76%</span></td>
                                        <td>0.05723</td>
                                        <td>0.05550</td>
                                        <td>5,523.15018959</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>IOST/BTC</td>
                                        <td><span class="color-sell">0.00000490  </span>/ $399.8/td>
                                        <td><span class="color-sell">-2.73%</span></td>
                                        <td>0.0000051</td>
                                        <td>0.0000046</td>
                                        <td>5,300.71861161</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>POA / BTC</td>
                                        <td><span class="color-sell">0.0000054 </span>/ $0.0</td>
                                        <td><span class="color-buy">+2.70%</span></td>
                                        <td>0.0000055</td>
                                        <td>0.0000052</td>
                                        <td>4,683.61663443</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>NCASH/BTC</td>
                                        <td>0.00050900 / $3.55</td>
                                        <td><span class="color-sell">-8.70%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>BNB/BTC</td>
                                        <td><span class="color-sell">0.001741</span> / $12.1</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ICX/BTC</td>
                                        <td>0.0000093 / $12.1</td>
                                        <td><span class="color-sell">+7.59%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>XVG/BTC</td>
                                        <td><span class="color-buy">0.0000041</span> / $0.03</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ADA/BTC</td>
                                        <td><span class="color-buy">0.0014589</span> / $18.29</td>
                                        <td><span class="color-sell">+5.74%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>NCASH/BTC</td>
                                        <td>0.00050900 / $3.55</td>
                                        <td><span class="color-sell">-8.70%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>BNB/BTC</td>
                                        <td><span class="color-sell">0.001741</span> / $12.1</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.0005700</td>
                                        <td>0.0004910</td>
                                        <td>5,774.97192430</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ICX/BTC</td>
                                        <td>0.0000093 / $12.1</td>
                                        <td><span class="color-sell">+7.59%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>XVG/BTC</td>
                                        <td><span class="color-buy">0.0000041</span> / $0.03</td>
                                        <td><span class="color-buy">-2.44%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="favorite-coin">

                                            </div>
                                        </td>
                                        <td>ADA/BTC</td>
                                        <td><span class="color-buy">0.0014589</span> / $18.29</td>
                                        <td><span class="color-sell">+5.74%</span></td>
                                        <td>0.00551478</td>
                                        <td>0.00478963</td>
                                        <td>92.76872852</td>
                                    </tr>
                                </tbody>
                            </table><!-- coin-list table -->
                        </div><!-- market-ticker-block -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- new-ticker-block -->
    <div class="activity-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="activity-block">
                        <img src="{{ asset('maintemplate/images/others/1.png') }}" alt="img" class="img-responsive"/>
                        <h4>
                            Safe and secure
                        </h4>
                        <p>
                            It uses a dictionary of over 200 Latin words, combined with 
                            a handful of model sentence structures, to generate Lorem 
                            Ipsum which looks reasonable therefore always
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="activity-block">
                        <img src="{{ asset('maintemplate/images/others/2.png') }}" alt="img" class="img-responsive"/>
                        <h4>
                            High Exchange Limits
                        </h4>
                        <p>
                            It uses a dictionary of over 200 Latin words, combined with 
                            a handful of model sentence structures, to generate Lorem 
                            Ipsum which looks reasonable therefore always
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="activity-block">
                        <img src="{{ asset('maintemplate/images/others/3.png') }}" alt="img" class="img-responsive"/>
                        <h4>
                            24/7 Live Support
                        </h4>
                        <p>
                            It uses a dictionary of over 200 Latin words, combined with 
                            a handful of model sentence structures, to generate Lorem 
                            Ipsum which looks reasonable therefore always
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="activity-block">
                        <img src="{{ asset('maintemplate/images/others/4.png') }}" alt="img" class="img-responsive"/>
                        <h4>
                            Fast and Reliable
                        </h4>
                        <p>
                            It uses a dictionary of over 200 Latin words, combined with 
                            a handful of model sentence structures, to generate Lorem 
                            Ipsum which looks reasonable therefore always
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- activity-section -->
    <div class="catagori-section">
        <div class="section-title-one">
            <h3>Categories of Wallets</h3>
            <p>
                If you are going to use a passage of Lorem Ipsum, 
                you need to be sure there isn't <br> anything 
                embarrassing hidden in the middle of text.
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="catagori-content-block">
                        <nav class="catagori-list">
                            <ul class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#nav_wallet" role="tab" data-toggle="tab">
                                        <h4>Bread Wallet</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#nav_mycelium" role="tab" data-toggle="tab">
                                        <h4>Mycelium</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#nav_exodus" role="tab" data-toggle="tab">
                                        <h4>Exodus</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#nav_copay" role="tab" data-toggle="tab">
                                        <h4>Copay</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#nav_nano" role="tab" data-toggle="tab">
                                        <h4>Ledger Nano</h4>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="tab-content catagoritab-content" id="nav-tabContent">
                            <div role="tabpanel" class="tab-pane fade show active" id="nav_wallet">
                                <div class="catagori-content">
                                    <img src="{{ asset('maintemplate/images/others/6.png') }}" alt="img" class="img-responsive"/>
                                    <p class="catagori-info">
                                        Advanced users searching for a Bitcoin mobile digital wallet, should look no further than mycelium. 
                                        The Mycelium mobile wallet allows iPhone and Android users to send and receive bitcoins and keep 
                                        complete control over bitcoins. No third party can freeze or lose your funds! With enterprise-level 
                                        security superior to most other apps and features like cold storage and encrypted PDF backups, 
                                        an integrated QR-code scanner receive bitcoins and keep.
                                    </p>
                                    <div class="pros-cons-block">
                                        <div class="pros-block">
                                            <h5 class="cp_level">Pros: </h5>
                                            <p>Good privacy, advanced security, feature-rich, open source Software, free</p>
                                        </div>
                                        <div class="cons-block">
                                            <h5 class="cp_level">Cons: </h5>
                                            <p>No web or desktop interface, hot wallet, not for beginners</p>
                                        </div>
                                    </div>
                                </div><!-- catagori-content -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="nav_mycelium">
                                <div class="catagori-content">
                                    <img src="{{ asset('maintemplate/images/others/6.png') }}" alt="img" class="img-responsive"/>
                                    <p class="catagori-info">
                                        Advanced users searching for a Bitcoin mobile digital wallet, should look no further than mycelium. 
                                        The Mycelium mobile wallet allows iPhone and Android users to send and receive bitcoins and keep 
                                        complete control over bitcoins. No third party can freeze or lose your funds! With enterprise-level 
                                        security superior to most other apps and features like cold storage and encrypted PDF backups, 
                                        an integrated QR-code scanner receive bitcoins and keep.
                                    </p>
                                    <div class="pros-cons-block">
                                        <div class="pros-block">
                                            <h5 class="base-color">Pros: </h5>
                                            <p>Good privacy, advanced security, feature-rich, open source Software, free</p>
                                        </div>
                                        <div class="cons-block">
                                            <h5 class="base-color">Cons: </h5>
                                            <p>No web or desktop interface, hot wallet, not for beginners</p>
                                        </div>
                                    </div>
                                </div><!-- catagori-content -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="nav_exodus">
                                <div class="catagori-content">
                                    <img src="{{ asset('maintemplate/images/others/6.png') }}" alt="img" class="img-responsive"/>
                                    <p class="catagori-info">
                                        Advanced users searching for a Bitcoin mobile digital wallet, should look no further than mycelium. 
                                        The Mycelium mobile wallet allows iPhone and Android users to send and receive bitcoins and keep 
                                        complete control over bitcoins. No third party can freeze or lose your funds! With enterprise-level 
                                        security superior to most other apps and features like cold storage and encrypted PDF backups, 
                                        an integrated QR-code scanner receive bitcoins and keep.
                                    </p>
                                    <div class="pros-cons-block">
                                        <div class="pros-block">
                                            <h5 class="base-color">Pros: </h5>
                                            <p>Good privacy, advanced security, feature-rich, open source Software, free</p>
                                        </div>
                                        <div class="cons-block">
                                            <h5 class="base-color">Cons: </h5>
                                            <p>No web or desktop interface, hot wallet, not for beginners</p>
                                        </div>
                                    </div>
                                </div><!-- catagori-content -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="nav_copay">
                                <div class="catagori-content">
                                    <img src="{{ asset('maintemplate/images/others/6.png') }}" alt="img" class="img-responsive"/>
                                    <p class="catagori-info">
                                        Advanced users searching for a Bitcoin mobile digital wallet, should look no further than mycelium. 
                                        The Mycelium mobile wallet allows iPhone and Android users to send and receive bitcoins and keep 
                                        complete control over bitcoins. No third party can freeze or lose your funds! With enterprise-level 
                                        security superior to most other apps and features like cold storage and encrypted PDF backups, 
                                        an integrated QR-code scanner receive bitcoins and keep.
                                    </p>
                                    <div class="pros-cons-block">
                                        <div class="pros-block">
                                            <h5 class="base-color">Pros: </h5>
                                            <p>Good privacy, advanced security, feature-rich, open source Software, free</p>
                                        </div>
                                        <div class="cons-block">
                                            <h5 class="base-color">Cons: </h5>
                                            <p>No web or desktop interface, hot wallet, not for beginners</p>
                                        </div>
                                    </div>
                                </div><!-- catagori-content -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="nav_nano">
                                <div class="catagori-content">
                                    <img src="{{ asset('maintemplate/images/others/6.png') }}" alt="img" class="img-responsive"/>
                                    <p class="catagori-info">
                                        Advanced users searching for a Bitcoin mobile digital wallet, should look no further than mycelium. 
                                        The Mycelium mobile wallet allows iPhone and Android users to send and receive bitcoins and keep 
                                        complete control over bitcoins. No third party can freeze or lose your funds! With enterprise-level 
                                        security superior to most other apps and features like cold storage and encrypted PDF backups, 
                                        an integrated QR-code scanner receive bitcoins and keep.
                                    </p>
                                    <div class="pros-cons-block">
                                        <div class="pros-block">
                                            <h5 class="base-color">Pros: </h5>
                                            <p>Good privacy, advanced security, feature-rich, open source Software, free</p>
                                        </div>
                                        <div class="cons-block">
                                            <h5 class="base-color">Cons: </h5>
                                            <p>No web or desktop interface, hot wallet, not for beginners</p>
                                        </div>
                                    </div>
                                </div><!-- catagori-content -->
                            </div>
                        </div>
                    </div><!-- catagori-content-block -->
                </div>
                <div class="col-lg-3">
                    <div class="catagori-vintage">
                        <img src="{{ asset('maintemplate/images/others/7.png') }}" alt="img" class="img-responsive"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- catagori-section -->
    <div class="wallets-section">
        <div class="container">
            <div class="setion-title-two">
                <h5>Our Wallets</h5>
            </div>
            <div class="row">
                <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8">
                    <div class="wallets-block">
                        <img src="{{ asset('maintemplate/images/others/5.png') }}" alt="img" class="img-responsive"/>
                        <h5>Fully compatible with iOS, Android, Mac & Windows</h5>
                        <h5 class="base-color">Select one & Download</h5>
                        <div class="download-option-block">
                            <div class="download-wrap">
                                <div class="download-wrap-inner">
                                    <input type="radio" id="iPhone" name="radio" class="input-hidden">
                                    <label for="iPhone" class="download-option">
                                        <i class="fab fa-apple"></i>
                                    </label>
                                </div>
                                <h4>iPhone</h4>
                            </div>
                            <div class="download-wrap">
                                <div class="download-wrap-inner">
                                    <input type="radio" id="Android" name="radio" class="input-hidden">
                                    <label for="Android" class="download-option">
                                        <i class="fab fa-android"></i>
                                    </label>
                                </div>
                                <h4>Android</h4>
                            </div>
                            <div class="download-wrap">
                                    <div class="download-wrap-inner">
                                    <input type="radio" id="Windows" name="radio" class="input-hidden">
                                    <label for="Windows" class="download-option">
                                        <i class="fab fa-windows"></i>
                                    </label>
                                </div>
                                <h4>Windows</h4>
                            </div>
                            <div class="download-wrap">
                                    <div class="download-wrap-inner">
                                    <input type="radio" id="iMac" name="radio" class="input-hidden">
                                    <label for="iMac" class="download-option">
                                        <i class="fab fa-apple"></i>
                                    </label>
                                </div>
                                <h4>iMac</h4>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn download-btn">Download Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- wallets-section -->
    <div class="lattest-news-section">
        <div class="container">
            <div class="setion-title-two">
                <h5>Latest News</h5>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <article class="post-style-one">
                        <span class="post-metat-date">02 DEC, 2019</span>
                        <h4 class="post-title">
                            <a href="./news-details.html">
                                It is a long established fact
                            </a>
                        </h4>
                        <p class="post-entry">
                            It is a long established fact that a reader will be distracted by 
                            the readable content of a page when looking
                        </p>
                        <a href="./news-details.html" class="post-link" >
                            Read More
                        </a>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="post-style-one">
                        <span class="post-metat-date">20 NOV, 2019</span>
                        <h4 class="post-title">
                            <a href="./news-details.html">
                                here are many variations
                            </a>
                        </h4>
                        <p class="post-entry">
                            It is a long established fact that a reader will be distracted by 
                            the readable content of a page when looking
                        </p>
                        <a href="./news-details.html" class="post-link" >
                            Read More
                        </a>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="post-style-one">
                        <span class="post-metat-date">30 NOV, 2019</span>
                        <h4 class="post-title">
                            <a href="./news-details.html">
                                The standard chunk of Lorem
                            </a>
                        </h4>
                        <p class="post-entry">
                            It is a long established fact that a reader will be distracted by 
                            the readable content of a page when looking
                        </p>
                        <a href="./news-details.html" class="post-link" >
                            Read More
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </div><!-- lattest-news-section -->
    <div class="colto-section">
        <div class="container">
            <div class="colto-content-wrap">
                <div class="colto-content">
                    <h3>Getting started</h3>
                    <p>We provide professional and secure trading services for investors</p>
                </div>
                <div class="colto-btn-group">
                    <button class="btn callto-btn">Log In</button>
                    <span>or</span>
                    <button class="btn callto-btn">Create Account</button>
                </div>
            </div>
        </div>
    </div><!-- colto-section -->
    <footer class="footer">
        <div class="footer-upper-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="footer-logo">
                            <a href="#">
                                <img src="{{ asset('maintemplate/images/logo.png') }}" alt="img" class="img-responsive"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="footer-info-list">
                            <h4>About Us</h4>
                            <ul>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Our Company</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Token Listing</a></li>
                                <li><a href="#">Join Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="footer-info-list">
                            <h4>Learn</h4>
                            <ul>
                                <li><a href="#">Legal</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">AML&CFT</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="footer-info-list">
                            <h4>Help</h4>
                            <ul>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">API Support</a></li>
                                <li><a href="#">Coin/Token Listing</a></li>
                                <li><a href="#">Partnership</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="footer-info-list">
                            <h4>Contact Us</h4>
                            <ul class="contact-info">
                                <li>Email:  <span>info.excoin@gmail.com</span></li>
                                <li>Phone:   <span>+99 5589 54789</span></li>
                            </ul>
                            <ul class="social-style-two">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-icon-wrap">
                <a href="#">
                    <img src="{{ asset('maintemplate/images/others/31.png') }}" alt="img" class="img-responsive">
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-wrap">
                    <div class="trade-volume-block">
                        <ul>
                            <li>
                                <span>39151</span> Active Traders
                            </li>
                            <li>
                                <span>4191 BTC</span> 24h Volume
                            </li>
                        </ul>
                    </div>
                    <div class="copyright-text">
                        © 2019 <a href="#">Excoin</a>. All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('maintemplate/assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('maintemplate/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('maintemplate/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('maintemplate/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('maintemplate/assets/js/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('maintemplate/assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('maintemplate/js/custom.js') }}"></script>
</body>
</html>
