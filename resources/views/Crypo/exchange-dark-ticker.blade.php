<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crypo</title>
  <link rel="icon" href="{{ asset('crypo/assets/img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('crypo/assets/css/style.css">
</head>

<body id="dark">
  <header class="dark-bb">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="exchange-dark.html"><img src="{{ asset('crypo/assets/img/logo-light.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
        aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon ion-md-menu"></i>
      </button>

      <div class="collapse navbar-collapse" id="headerMenu">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Exchange
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="exchange-dark.html">Exchange</a>
              <a class="dropdown-item" href="exchange-dark-live-price.html">Exchange Live Price</a>
              <a class="dropdown-item" href="exchange-dark-ticker.html">Exchange Ticker</a>
              <a class="dropdown-item" href="exchange-dark-fluid.html">Exchange Fluid</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Markets
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="markets-dark.html">Markets</a>
              <a class="dropdown-item" href="market-capital-dark.html">Markets Line</a>
              <a class="dropdown-item" href="market-capital-bar-dark.html">Markets Bar</a>
              <a class="dropdown-item" href="market-overview-dark.html">Market Overview</a>
              <a class="dropdown-item" href="market-screener-dark.html">Market Screener</a>
              <a class="dropdown-item" href="market-crypto-dark.html">Market Crypto</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Dashboard
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="settings-profile-dark.html">Profile</a>
              <a class="dropdown-item" href="settings-wallet-dark.html">Wallet</a>
              <a class="dropdown-item" href="settings-dark.html">Settings</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Others
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="technical-analysis-dark.html">Technical Analysis</a>
              <a class="dropdown-item" href="cross-rates-dark.html">Cross Rates</a>
              <a class="dropdown-item" href="symbol-info-dark.html">Symbol Info</a>
              <a class="dropdown-item" href="heat-map-dark.html">Heat Map</a>
              <a class="dropdown-item" href="signin-dark.html">Sign in</a>
              <a class="dropdown-item" href="signup-dark.html">Sign up</a>
              <a class="dropdown-item" href="404-dark.html">404</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item header-custom-icon">
            <a class="nav-link" href="#" id="clickFullscreen">
              <i class="icon ion-md-expand"></i>
            </a>
          </li>
          <li class="nav-item dropdown header-custom-icon">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <i class="icon ion-md-notifications"></i>
              <span class="circle-pulse"></span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-header d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium">6 New Notifications</p>
                <a href="#!" class="text-muted">Clear all</a>
              </div>
              <div class="dropdown-body">
                <a href="#!" class="dropdown-item">
                  <div class="icon">
                    <i class="icon ion-md-lock"></i>
                  </div>
                  <div class="content">
                    <p>Account password change</p>
                    <p class="sub-text text-muted">5 sec ago</p>
                  </div>
                </a>
                <a href="#!" class="dropdown-item">
                  <div class="icon">
                    <i class="icon ion-md-alert"></i>
                  </div>
                  <div class="content">
                    <p>Solve the security issue</p>
                    <p class="sub-text text-muted">10 min ago</p>
                  </div>
                </a>
                <a href="#!" class="dropdown-item">
                  <div class="icon">
                    <i class="icon ion-logo-android"></i>
                  </div>
                  <div class="content">
                    <p>Download android app</p>
                    <p class="sub-text text-muted">1 hrs ago</p>
                  </div>
                </a>
                <a href="#!" class="dropdown-item">
                  <div class="icon">
                    <i class="icon ion-logo-bitcoin"></i>
                  </div>
                  <div class="content">
                    <p>Bitcoin price is high now</p>
                    <p class="sub-text text-muted">2 hrs ago</p>
                  </div>
                </a>
                <a href="#!" class="dropdown-item">
                  <div class="icon">
                    <i class="icon ion-logo-usd"></i>
                  </div>
                  <div class="content">
                    <p>Payment completed</p>
                    <p class="sub-text text-muted">4 hrs ago</p>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer d-flex align-items-center justify-content-center">
                <a href="#!">View all</a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown header-img-icon">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <img src="{{ asset('crypo/assets/img/avatar.svg" alt="avatar">
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-header d-flex flex-column align-items-center">
                <div class="figure mb-3">
                  <img src="{{ asset('crypo/assets/img/avatar.svg" alt="">
                </div>
                <div class="info text-center">
                  <p class="name font-weight-bold mb-0">Tony Stark</p>
                  <p class="email text-muted mb-3">tonystark@gmail.com</p>
                </div>
              </div>
              <div class="dropdown-body">
                <ul class="profile-nav">
                  <li class="nav-item">
                    <a href="settings-profile-dark.html" class="nav-link">
                      <i class="icon ion-md-person"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="settings-wallet-dark.html" class="nav-link">
                      <i class="icon ion-md-wallet"></i>
                      <span>My Wallet</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="settings-dark.html" class="nav-link">
                      <i class="icon ion-md-settings"></i>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li class="nav-item" id="changeThemeDark">
                    <a href="#!" class="nav-link">
                      <i class="icon ion-md-moon"></i>
                      <span>Theme</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="exchange-dark.html" class="nav-link red">
                      <i class="icon ion-md-power"></i>
                      <span>Log Out</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="container-fluid mtb15 no-fluid">
    <div class="row sm-gutters market-capital-ticker">
      <div class="col-md-12 mb15">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
            {
              "colorTheme": "dark"
            }
          </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="markets-capital-item">
          <h2>
            <img src="{{ asset('crypo/assets/img/icon/3.png" alt="LTC">
            <span>LTC</span>
          </h2>
          <div class="markets-capital-details">
            <h4>$431,684,298.45</h4>
            <h3 class="red">-6.19% <i class="icon ion-md-arrow-down"></i></h3>
          </div>
          <div class="markets-capital-chart" data-charts="[50,48,72,80,60,82,50,48,72,33,44]"
            data-bg="rgba(255,35,31,.1)" data-border="bd0300">
            <canvas></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="markets-capital-item">
          <h2>
            <img src="{{ asset('crypo/assets/img/icon/4.png" alt="KCS">
            <span>KCS</span>
          </h2>
          <div class="markets-capital-details">
            <h4>$431,684,298.45</h4>
            <h3 class="green">+11.79% <i class="icon ion-md-arrow-up"></i></h3>
          </div>
          <div class="markets-capital-chart" data-charts="[50,42,72,80,60,82,82,45,40,55]" data-bg="rgba(38,222,129,.1)"
            data-border="18d877">
            <canvas></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="markets-capital-item">
          <h2>
            <img src="{{ asset('crypo/assets/img/icon/3.png" alt="LTC">
            <span>LTC</span>
          </h2>
          <div class="markets-capital-details">
            <h4>$431,684,298.45</h4>
            <h3 class="red">-6.19% <i class="icon ion-md-arrow-down"></i></h3>
          </div>
          <div class="markets-capital-chart" data-charts="[50,48,72,80,60,82,50,48,72,33,44]"
            data-bg="rgba(255,35,31,.1)" data-border="bd0300">
            <canvas></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="markets-capital-item">
          <h2>
            <img src="{{ asset('crypo/assets/img/icon/4.png" alt="KCS">
            <span>KCS</span>
          </h2>
          <div class="markets-capital-details">
            <h4>$431,684,298.45</h4>
            <h3 class="green">+11.79% <i class="icon ion-md-arrow-up"></i></h3>
          </div>
          <div class="markets-capital-chart" data-charts="[50,42,72,80,60,82,82,45,40,55]" data-bg="rgba(38,222,129,.1)"
            data-border="18d877">
            <canvas></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="market-pairs">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm"><i class="icon ion-md-search"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Search" aria-describedby="inputGroup-sizing-sm">
          </div>
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#STAR" role="tab" aria-selected="true"><i
                  class="icon ion-md-star"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#BTC" role="tab" aria-selected="true">BTC</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#ETH" role="tab" aria-selected="false">ETH</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#NEO" role="tab" aria-selected="false">NEO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#USDT" role="tab" aria-selected="false">USDT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#DAI" role="tab" aria-selected="false">DAI</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show" id="STAR" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ETH/BTC</td>
                    <td>0.00020255</td>
                    <td class="red">-2.58%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KCS/BTC</td>
                    <td>0.00013192</td>
                    <td class="green">+5.6%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XRP/BTC</td>
                    <td>0.00002996</td>
                    <td class="red">-1.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> VET/BTC</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show active" id="BTC" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ETH/BTC</td>
                    <td>0.00020255</td>
                    <td class="red">-2.58%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KCS/BTC</td>
                    <td>0.00013192</td>
                    <td class="green">+5.6%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XRP/BTC</td>
                    <td>0.00002996</td>
                    <td class="red">-1.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> VET/BTC</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> EOS/BTC</td>
                    <td>0.00000103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BTT/BTC</td>
                    <td>0.00002303</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> LTC/BTC</td>
                    <td>0.03520103</td>
                    <td class="green">+1.5%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRX/BTC</td>
                    <td>0.00330103</td>
                    <td class="red">-3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BSV/BTC</td>
                    <td>0.00300103</td>
                    <td class="green">+2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> COTI/BTC</td>
                    <td>0.003500103</td>
                    <td class="green">+2.85%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XYT/BTC</td>
                    <td>0.00003103</td>
                    <td class="green">+3.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BNB/BTC</td>
                    <td>0.003500103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XMR/BTC</td>
                    <td>0.003500103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRY/BTC</td>
                    <td>0.00000123</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ADA/BTC</td>
                    <td>0.00050103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> NEO/BTC</td>
                    <td>0.00340103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XLM/BTC</td>
                    <td>0.00035103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ENQ/BTC</td>
                    <td>0.00354103</td>
                    <td class="green">+2.02%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AVA/BTC</td>
                    <td>0.02535103</td>
                    <td class="green">+3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AMB/BTC</td>
                    <td>0.05335103</td>
                    <td class="green">+1.0%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> MAP/BTC</td>
                    <td>0.00234103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GO/BTC</td>
                    <td>0.00354103</td>
                    <td class="red">-6.50%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KICK/BTC</td>
                    <td>0.02053103</td>
                    <td class="red">-6.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> DBC/BTC</td>
                    <td>0.02535103</td>
                    <td class="green">+7.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GGC/BTC</td>
                    <td>0.00353103</td>
                    <td class="red">-4.05%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show" id="ETH" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BTC/ETH</td>
                    <td>0.00020255</td>
                    <td class="green">+1.58%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KCS/ETH</td>
                    <td>0.00013192</td>
                    <td class="red">-0.6%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XRP/ETH</td>
                    <td>0.00002996</td>
                    <td class="red">-0.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> VET/ETH</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> EOS/ETH</td>
                    <td>0.00000103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BTT/ETH</td>
                    <td>0.00002303</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> LTC/ETH</td>
                    <td>0.03520103</td>
                    <td class="green">+1.5%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRX/ETH</td>
                    <td>0.00330103</td>
                    <td class="red">-3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BSV/ETH</td>
                    <td>0.00300103</td>
                    <td class="green">+2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> COTI/ETH</td>
                    <td>0.003500103</td>
                    <td class="green">+2.85%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XYT/ETH</td>
                    <td>0.00003103</td>
                    <td class="green">+3.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BNB/ETH</td>
                    <td>0.003500103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XMR/ETH</td>
                    <td>0.003500103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRY/ETH</td>
                    <td>0.00000123</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ADA/ETH</td>
                    <td>0.00050103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> NEO/ETH</td>
                    <td>0.00340103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XLM/ETH</td>
                    <td>0.00035103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ENQ/ETH</td>
                    <td>0.00354103</td>
                    <td class="green">+2.02%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AVA/ETH</td>
                    <td>0.02535103</td>
                    <td class="green">+3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AMB/ETH</td>
                    <td>0.05335103</td>
                    <td class="green">+1.0%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> MAP/ETH</td>
                    <td>0.00234103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GO/ETH</td>
                    <td>0.00354103</td>
                    <td class="red">-6.50%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KICK/ETH</td>
                    <td>0.02053103</td>
                    <td class="red">-6.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> DBC/ETH</td>
                    <td>0.02535103</td>
                    <td class="green">+7.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GGC/ETH</td>
                    <td>0.00353103</td>
                    <td class="red">-4.05%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show" id="NEO" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ETH/NEO</td>
                    <td>0.00350255</td>
                    <td class="red">-6.58%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KCS/NEO</td>
                    <td>0.00013192</td>
                    <td class="green">+0.6%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XRP/NEO</td>
                    <td>0.00002996</td>
                    <td class="red">-0.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> VET/NEO</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> EOS/NEO</td>
                    <td>0.00000103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BTT/NEO</td>
                    <td>0.00002303</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> LTC/NEO</td>
                    <td>0.03520103</td>
                    <td class="green">+1.5%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRX/NEO</td>
                    <td>0.00330103</td>
                    <td class="red">-3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BSV/NEO</td>
                    <td>0.00300103</td>
                    <td class="green">+2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> COTI/NEO</td>
                    <td>0.003500103</td>
                    <td class="green">+2.85%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XYT/NEO</td>
                    <td>0.00003103</td>
                    <td class="green">+3.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BNB/NEO</td>
                    <td>0.003500103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XMR/NEO</td>
                    <td>0.003500103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRY/NEO</td>
                    <td>0.00000123</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ADA/NEO</td>
                    <td>0.00050103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> NEO/NEO</td>
                    <td>0.00340103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XLM/NEO</td>
                    <td>0.00035103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ENQ/NEO</td>
                    <td>0.00354103</td>
                    <td class="green">+2.02%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AVA/NEO</td>
                    <td>0.02535103</td>
                    <td class="green">+3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AMB/NEO</td>
                    <td>0.05335103</td>
                    <td class="green">+1.0%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> MAP/NEO</td>
                    <td>0.00234103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GO/NEO</td>
                    <td>0.00354103</td>
                    <td class="red">-6.50%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KICK/NEO</td>
                    <td>0.02053103</td>
                    <td class="red">-6.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> DBC/NEO</td>
                    <td>0.02535103</td>
                    <td class="green">+7.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GGC/NEO</td>
                    <td>0.00353103</td>
                    <td class="red">-4.05%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show" id="USDT" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ETH/USDT</td>
                    <td>0.00350255</td>
                    <td class="red">-2.58%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KCS/USDT</td>
                    <td>0.00013192</td>
                    <td class="green">+6.6%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XRP/USDT</td>
                    <td>0.00002996</td>
                    <td class="red">-0.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> VET/USDT</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> EOS/USDT</td>
                    <td>0.00000103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BTT/USDT</td>
                    <td>0.00002303</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> LTC/USDT</td>
                    <td>0.03520103</td>
                    <td class="green">+1.5%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRX/USDT</td>
                    <td>0.00330103</td>
                    <td class="red">-3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BSV/USDT</td>
                    <td>0.00300103</td>
                    <td class="green">+2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> COTI/USDT</td>
                    <td>0.003500103</td>
                    <td class="green">+2.85%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XYT/USDT</td>
                    <td>0.00003103</td>
                    <td class="green">+3.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BNB/USDT</td>
                    <td>0.003500103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XMR/USDT</td>
                    <td>0.003500103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRY/USDT</td>
                    <td>0.00000123</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ADA/USDT</td>
                    <td>0.00050103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> USDT/USDT</td>
                    <td>0.00340103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XLM/USDT</td>
                    <td>0.00035103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ENQ/USDT</td>
                    <td>0.00354103</td>
                    <td class="green">+2.02%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AVA/USDT</td>
                    <td>0.02535103</td>
                    <td class="green">+3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AMB/USDT</td>
                    <td>0.05335103</td>
                    <td class="green">+1.0%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> MAP/USDT</td>
                    <td>0.00234103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GO/USDT</td>
                    <td>0.00354103</td>
                    <td class="red">-6.50%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KICK/USDT</td>
                    <td>0.02053103</td>
                    <td class="red">-6.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> DBC/USDT</td>
                    <td>0.02535103</td>
                    <td class="green">+7.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GGC/USDT</td>
                    <td>0.00353103</td>
                    <td class="red">-4.05%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show" id="DAI" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ETH/DAI</td>
                    <td>0.05320255</td>
                    <td class="green">+6.58%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KCS/DAI</td>
                    <td>0.00013192</td>
                    <td class="green">+0.6%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XRP/DAI</td>
                    <td>0.00002996</td>
                    <td class="red">-0.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> VET/DAI</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> EOS/DAI</td>
                    <td>0.00000103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BTT/DAI</td>
                    <td>0.00002303</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> LTC/DAI</td>
                    <td>0.03520103</td>
                    <td class="green">+1.5%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRX/DAI</td>
                    <td>0.00330103</td>
                    <td class="red">-3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BSV/DAI</td>
                    <td>0.00300103</td>
                    <td class="green">+2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> COTI/DAI</td>
                    <td>0.003500103</td>
                    <td class="green">+2.85%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XYT/DAI</td>
                    <td>0.00003103</td>
                    <td class="green">+3.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BNB/DAI</td>
                    <td>0.003500103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XMR/DAI</td>
                    <td>0.003500103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRY/DAI</td>
                    <td>0.00000123</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ADA/DAI</td>
                    <td>0.00050103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> DAI/DAI</td>
                    <td>0.00340103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XLM/DAI</td>
                    <td>0.00035103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ENQ/DAI</td>
                    <td>0.00354103</td>
                    <td class="green">+2.02%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AVA/DAI</td>
                    <td>0.02535103</td>
                    <td class="green">+3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AMB/DAI</td>
                    <td>0.05335103</td>
                    <td class="green">+1.0%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> MAP/DAI</td>
                    <td>0.00234103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GO/DAI</td>
                    <td>0.00354103</td>
                    <td class="red">-6.50%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KICK/DAI</td>
                    <td>0.02053103</td>
                    <td class="red">-6.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> DBC/DAI</td>
                    <td>0.02535103</td>
                    <td class="green">+7.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GGC/DAI</td>
                    <td>0.00353103</td>
                    <td class="red">-4.05%</td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="main-chart">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div id="tradingview_e8053"></div>
            <script src="https://s3.tradingview.com/tv.js"></script>
            <script>
              new TradingView.widget(
                {
                  "width": "100%",
                  "height": 550,
                  "symbol": "BITSTAMP:BTCUSD",
                  "interval": "D",
                  "timezone": "Etc/UTC",
                  "theme": "Dark",
                  "style": "1",
                  "locale": "en",
                  "toolbar_bg": "#f1f3f6",
                  "enable_publishing": false,
                  "withdateranges": true,
                  "hide_side_toolbar": false,
                  "allow_symbol_change": true,
                  "show_popup_button": true,
                  "popup_width": "1000",
                  "popup_height": "650",
                  "container_id": "tradingview_e8053"
                }
              );
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="market-trade mt15">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#pills-trade-limit" role="tab"
                aria-selected="true">Limit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-market" role="tab" aria-selected="false">Market</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-stop-limit" role="tab" aria-selected="false">Stop
                Limit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-stop-market" role="tab" aria-selected="false">Stop
                Market</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-trade-limit" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn buy">Buy</button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell">Sell</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-market" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn buy">Buy</button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell">Sell</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-stop-limit" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn buy">Buy</button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell">Sell</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-stop-market" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn buy">Buy</button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell">Sell</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="market-history market-order mt15">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#open-orders" role="tab" aria-selected="true">Open
                Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#stop-orders" role="tab" aria-selected="false">Closed
                Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#order-history" role="tab" aria-selected="false">Order
                history</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#trade-history" role="tab" aria-selected="false">Balance</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="open-orders" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
            <div class="tab-pane fade" id="stop-orders" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
            <div class="tab-pane fade" id="order-history" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
            <div class="tab-pane fade" id="trade-history" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('crypo/assets/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('crypo/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('crypo/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('crypo/assets/js/amcharts-core.min.js') }}"></script>
  <script src="{{ asset('crypo/assets/js/amcharts.min.js') }}"></script>
  <script src="{{ asset('crypo/assets/js/Chart.bundle.min.js') }}"></script>
  <script src="{{ asset('crypo/assets/js/jquery.mCustomScrollbar.js') }}"></script>
  <script src="{{ asset('crypo/assets/js/custom.js') }}"></script>
  <script>
    $('tbody, .market-news ul').mCustomScrollbar({
      theme: 'minimal',
    });
  </script>
</body>

</html>