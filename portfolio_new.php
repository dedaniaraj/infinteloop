<?php

/*Get Request To Recieve Social Stats and Sentiment Analysis Parameters */

if(isset($_GET['coin']) && isset($_GET['positive']))
{
    $coin = $_GET['coin'];
    $positive = $_GET['positive'];
    $negative = 100 - $positive;
    
    $factor = ($positive-$negative);
    $socialtrend = $factor1*$facebook_stats_difference + $factor2*$twitter_stats_difference + $factor3*$reddit_stats_difference;
}
    $socialtrendb = 3.136;
    $bitcoin = 819.75;
    $bitcoind=-4.441;
    $bitcoinm=17.919;
    $socialtrende = -1.552;
    $eth = 1093;
    $ethd=6.981;
    $ethm=16.562;
    $socialtrendr = 1.968;
    $rip = 1366.25;
    $ripd=-2.778;
    $ripm=12.643;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Infinteloop - Portfolio Manager</title>

    <!-- Add to homescreen -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="IL Portfolio Manager">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="img/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
  </head>
  <body>
    <div class="layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="header mdl-layout__header mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Portfolio</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">Settings</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>
        </div>
      </header>
      <div class="drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="drawer-header">
          <img src="images/user.jpg" class="avatar">
          <div class="avatar-dropdown">
            <span class="header-text">raj@ilportfolio.com</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">prem@ilportfolio.com</li>
              <li class="mdl-menu__item">saurabh@ilportfolio.com</li>
               <li class="mdl-menu__item">aviraj@ilportfolio.com</li>
              <li class="mdl-menu__item"><i class="material-icons">add</i>Add Portfolio</li>
            </ul>
          </div>
        </header>
        <nav class="navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link active-tab" href="#">Portfolio</a>
          <a class="mdl-navigation__link" href="market.html">Market</a>
          <a class="mdl-navigation__link" href="news.html">News</a>
          <hr/>
          <a class="mdl-navigation__link" href="learn.html">Learn</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">help_outline</i><span class="">Help</span></a>
        </nav>
      </div>
        <main class="mdl-layout__content mdl-color--blue-grey-700">
        <div class="mdl-grid content">
          <div class="dashboard-header-secondary">Portfolio Value<br/>
            <!--add the the total profit-->
            <div class="dashboard-title-secondary">$5465</div>
            <div>
              <i class="mdl-color-text--green-500 material-icons negative-arrow">arrow_drop_up</i>
              <!--add the percentage value of growth/minus-->
              <span class="desp-per">5.1%<br/><br/></span>
            </div>
            <!--add class as per the profit/loss
              loss: class : mdl-color-text--red-700, value : arrow_drop_down;

              profit : mdl-color-text--green-600, value : arrow_drop_up;
            -->
            <div class="coin-dist">
              <div class="coin-detail">
                <img src="https://s2.coinmarketcap.com/static/img/coins/16x16/1.png" class="logo-sprite" alt="Bitcoin" height="16" width="16">&nbsp;&nbsp;<span class="coin-detail-desp"><span>Bitcoin :</span> $819.75</span>
              </div>
              <div class="coin-detail">
                <img src="https://s2.coinmarketcap.com/static/img/coins/16x16/1027.png" class="logo-sprite" alt="Ethereum" height="16" width="16">&nbsp;&nbsp;<span class="coin-detail-desp"><span>Ethereum :</span> $1093</span>
              </div>
              <div class="coin-detail">
                <img src="https://s2.coinmarketcap.com/static/img/coins/16x16/52.png" class="logo-sprite" alt="Ripple" height="16" width="16">&nbsp;&nbsp;<span class="coin-detail-desp"><span>Ripple :</span> $1366.25</span>
              </div>
              <div class="coin-detail">
                <img src="https://s2.coinmarketcap.com/static/img/coins/16x16/1831.png" class="logo-sprite" alt="Bitcoin Cash" height="16" width="16">&nbsp;&nbsp;<span class="coin-detail-desp"><span>Cardano :</span> $546.5</span>
              </div>
              <div class="coin-detail">
                <img src="https://s2.coinmarketcap.com/static/img/coins/16x16/1765.png" class="logo-sprite" alt="EOS" height="16" width="16">&nbsp;&nbsp;<span class="coin-detail-desp"><span>Tron :</span> $1639.5</span>
              </div>

            </div><!--/.coin-dist-->
            
          </div>
          <div class="mdl-layout-spacer"></div> 
          <div class="mdl-color--white mdl-shadow--2dp right-part-portfolio mdl-cell--8-col mdl-grid">
              <canvas id="pieChart" height="120px"></canvas>
          </div>
          <div class="mdl-cell--12-col mdl-grid"><p class="dashboard-header-secondary portfolio-special-header">Tips &amp; Forecasting<br/></p></div>
          <div class="mdl-cell--12-col mdl-grid">
            <div class="mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-grid tip-container" style="background-color: #77bbbb;"><span class="tip-header" style="font-family: 'Poppins'">Social Forecast&nbsp;&nbsp;&nbsp;</span><br/>
              Bitcoin - <?php echo $socialtrendb;?><br>
              Ethereum - <?php echo $socialtrende;?><br>
              Ripple - <?php echo $socialtrendr;?>
            </div>
            <div class="mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-grid tip-container" style="background-color: #424242;"><span class="tip-header" style="font-family: 'Poppins'">Economic Forecast</span><br/>
               Bitcoin(Daily) - <?php echo $bitcoind;?>%<br>
               Bitcoin(Monthly) - <?php echo $bitcoinm;?>%<br>
               Ethereum(Daily) - <?php echo $ethd;?>%<br>
               Ethereum(Monthly) - <?php echo $ethm;?>%<br>
               Ripple(Daily) - <?php echo $ripd;?>%<br>
               Ripple(Monthly) - <?php echo $ripm;?>%
            </div>
            <div class="mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-grid tip-container" style="background-color:#77dd77;"><span class="tip-header" style="font-family: 'Poppins'">Hey! Here's a tip to improve your profit!!</span><br/>
            Intra Day Trading :<br>
            Buy - <br>
                <?php if($socialtrendb + $bitcoind > 0)
                {$buyb = 1;
                echo 'Bitcoin<br> '; } 
                
                if($socialtrende + $ethd > 0)
                {$buye = 1;
                echo 'Etherium<br>'; }
                
                
                if($socialtrendr + $ripd > 0)
                {$buyr = 1;
                echo 'Ripple<br>'; }?>
                Sell - <br>
                <?php if($buyb != 1)
                {echo 'Bitcoin<br> '; } 
                
                if($buye != 1)
                {
                echo 'Etherium<br>'; }
                
                
                if($buyr != 1)
                {
                echo 'Ripple<br>'; }
                
                
                
                ?>
                Intra Month Trading :
                Buy - <br>
                Etherium<br>
                Bitcoin<br>
                Ripple
            </div>
          </div>



            <p class="dashboard-header-secondary" style="margin-left: 16px;">Your Top 3 Cryptos<br/></p>
            <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid" style="border-radius: 5px;">
                  <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script><div class="mdl-cell mdl-cell-4-col mdl-grid coinmarketcap-currency-widget" data-currencyid="1" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
            
            <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script><div class="mdl-cell mdl-cell-4-col mdl-grid coinmarketcap-currency-widget" data-currencyid="1027" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
            
            <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script><div class=" mdl-cell mdl-cell-4-col mdl-grid coinmarketcap-currency-widget" data-currencyid="52" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
            
            
            </div>
          </div>
      </main>
    
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript" src="js/chart.js"></script>
  </body>
</html>
