<?php
$coin[0] = "bitcoin";
$coin[1] = "ethereum";
$coin[2] = "ripple";
$coin[3] = "cardano";
$coin[4] = "tron";
$image[0] = '<img src="https://s2.coinmarketcap.com/static/img/coins/16x16/1.png" class="logo-sprite" alt="Bitcoin" height="16" width="16">&nbsp;&nbsp;';

$image[1] = '<img src="https://s2.coinmarketcap.com/static/img/coins/16x16/1027.png" class="logo-sprite" alt="Ethereum" height="16" width="16">&nbsp;&nbsp;';

$image[2] = '<img src="https://s2.coinmarketcap.com/static/img/coins/16x16/52.png" class="logo-sprite" alt="Ripple" height="16" width="16">&nbsp;&nbsp;';

$image[3] = '<img src="https://s2.coinmarketcap.com/static/img/coins/16x16/1831.png" class="logo-sprite" alt="Bitcoin Cash" height="16" width="16">&nbsp;&nbsp;';

$image[4] = '<img src="https://s2.coinmarketcap.com/static/img/coins/16x16/1765.png" class="logo-sprite" alt="EOS" height="16" width="16">&nbsp;&nbsp;';
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
          <a class="mdl-navigation__link" href="#"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">help_outline</i><span class="">Help</span></a>
        </nav>
      </div>
        <main class="mdl-layout__content mdl-color--blue-grey-700">
        <div class="mdl-grid content">
          <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-grid">
            <a href="https://ieee-iccdw.com/portfolio_new.php" class="card-links">
              <p class="dashboard-header">
                <span class="icons-symbol">+</span>Add a Transaction</p>
            </a>
          </div>
            
          <div class="mdl-cell mdl-cell--12-col mdl-grid">
            <p class="dashboard-header-secondary">Top Cryptocurrencies</p>
          </div>
          <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <table class="mdl-data-table mdl-js-data-table" style="width: 100%">
              <thead>
                <tr>
                  <th class="mdl-data-table__cell--non-numeric">RANK</th>
                  <th class="mdl-data-table__cell--non-numeric">COINS</th>
                  <th class="mdl-data-table__cell--non-numeric">VALUE</th>
                  <th class="mdl-data-table__cell--non-numeric">PERCENT CHANGE</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                  for($n=0;$n<5;$n++)
                  {
                 $json = file_get_contents('http://13.126.248.75:8080/dataset/coin/'.$coin["$n"]);
                $data = json_decode($json);
                $value = $data[0]->Open;
                $high = $data[0]->High;
                $low = $data[0]->Low;
                $volume = ($high+$low)/2 - $value;
                $z = $n + 1;
                    echo '
                <tr>
                  <th class="mdl-data-table__cell--non-numeric">'.$z.'</th>
                  <th class="mdl-data-table__cell--non-numeric">'.$image["$n"].$coin["$n"].'</th>
                  <th class="mdl-data-table__cell--non-numeric">'.$value.'</th>
                  <th class="mdl-data-table__cell--non-numeric">';if($volume<0){echo '<font color="red">'.$volume.'</font></th>
                </tr>
                '; }else {echo'<font color="green">'.$volume.'</font></th>
                </tr>
                ';}}
                ?>
              </tbody>
            </table>
            </div>
        </div>
      </main>
    
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript" src="js/chart.js"></script>
  </body>
</html>
