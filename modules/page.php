<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--link rel="shortcut icon" href="http://getbootstrap.com/assets/ico/favicon.ico"-->

    <title>Madawa Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style id="clearly_highlighting_css" type="text/css">/* selection */ html.clearly_highlighting_enabled ::-moz-selection { background: rgba(246, 238, 150, 0.99); } html.clearly_highlighting_enabled ::selection { background: rgba(246, 238, 150, 0.99); } /* cursor */ html.clearly_highlighting_enabled {    /* cursor and hot-spot position -- requires a default cursor, after the URL one */    cursor: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--cursor.png") 14 16, text; } /* highlight tag */ em.clearly_highlight_element {    font-style: inherit !important; font-weight: inherit !important;    background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--yellow.png");    background-repeat: repeat-x; background-position: top left; background-size: 100% 100%; } /* the delete-buttons are positioned relative to this */ em.clearly_highlight_element.clearly_highlight_first { position: relative; } /* delete buttons */ em.clearly_highlight_element a.clearly_highlight_delete_element {    display: none; cursor: pointer;    padding: 0; margin: 0; line-height: 0;    position: absolute; width: 34px; height: 34px; left: -17px; top: -17px;    background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--delete-sprite.png"); background-repeat: no-repeat; background-position: 0px 0px; } em.clearly_highlight_element a.clearly_highlight_delete_element:hover { background-position: -34px 0px; } /* retina */ @media (min--moz-device-pixel-ratio: 2), (-webkit-min-device-pixel-ratio: 2), (min-device-pixel-ratio: 2) {    em.clearly_highlight_element { background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--yellow@2x.png"); }    em.clearly_highlight_element a.clearly_highlight_delete_element { background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--delete-sprite@2x.png"); background-size: 68px 34px; } } </style><style id="holderjs-style" type="text/css"></style><style>[touch-action="none"]{ -ms-touch-action: none; touch-action: none; }[touch-action="pan-x"]{ -ms-touch-action: pan-x; touch-action: pan-x; }[touch-action="pan-y"]{ -ms-touch-action: pan-y; touch-action: pan-y; }[touch-action="scroll"],[touch-action="pan-x pan-y"],[touch-action="pan-y pan-x"]{ -ms-touch-action: pan-x pan-y; touch-action: pan-x pan-y; }</style></head>

  <body style=""><div id="StayFocusd-infobar" style="display: none; top: 0px;">
    <img src="chrome-extension://laankejkbhbdhmipfmgcngdelahlfoji/common/img/eye_19x19_red.png">
    <span id="StayFocusd-infobar-msg"></span>
    <span id="StayFocusd-infobar-links">
        <a href="http://getbootstrap.com/examples/dashboard/#" id="StayFocusd-infobar-never-show">hide forever</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="http://getbootstrap.com/examples/dashboard/#" id="StayFocusd-infobar-hide">hide once</a>
    </span>
</div>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://getbootstrap.com/examples/dashboard/#">Madawa Management System</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://getbootstrap.com/examples/dashboard/#">Dashboard</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/#">Settings</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/#">Proile</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="http://getbootstrap.com/examples/dashboard/#"> <span class="glyphicon glyphicon-search"></span> Sell drugs</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/#">Check store</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/#">Make Requisition pay</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/#">Reports</a></li>
            <li class=""><a href="http://getbootstrap.com/examples/dashboard/#">Supply drugs</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/#">Check store</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/#">Handle Invoice</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/#">Reports</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="200x200" src="data:image/png;base64,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">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="200x200" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAAIiUlEQVR4Xu2YXWiVBRjHHzvHzR33rZuaUhCmJFnQyrBMrUDRbsJC07qwC79Cb7KIqIxK6soyMSP7uCizoqKIPvTGyBtLFNEgtGmUiDrd5prptrO507sTDqKOD+dxeuH/t6vB8z57z//3P7+9H4MmN36WM34gAIH/JTAIQfhmQKAwAQTh2wGBCxBAEL4eEEAQvgMQiBHgChLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLg1rHzgLVv2mY9R1ssVV1umRkNVjn3rvxf6tp/2No2brGeI82Wqi23ynnTLHP3ze7sQh/jcp8vgOSKXUGQIqvtTqQ4sfwNSw2rssysBuvcsd+6DxyxmqfnWVnDWDu+aK3lzuWsYs4U69i+z7K/N9mI9Y9Zur664GzwmLqCn+Jyn69IHFf84QhSZMVdvxy2s9/vtcy0m6z0xmutY9ev1vriZit/cIqVTLgm/3vFw/ckV46p1rG70Vpf+NDKF0y3krFXF5xdVVZq7e9utcqFMxKx7rDOvb9Zy3PvW9m0iTZ01m0Dfr6qh6YXmVr3cAS5yO5b13xuHT/8bDVPzbXelnb7850t+d8zd06w7uOtdmLxOiubOtFKxo0uOKtZOceaV22ybHJ7Vr9mkbWs/sisN2d165ZaKjPkX59wIM5X+8QDF5laZx1Bgl3nes5Z21vf2tmtu23I5BtsWHKLdfrT7db+wTarfXa+lU0ab+daT9vxhWus9PbxVpoIUmg2/Jn5+WObVmww6+m13q6s1b38qJUmV6TzPwN9vmBsuTUECVTe25m11lc+sa49hywzs8Gql8y2QemU/fXVT8lV4rv+K0jPsVPWtOT1/K1SyfVjCs5qV/7zH71PuDPf7LR0cjs24tXF/Z/sUp0vEF1uBUGKrDyXy1nLS5uta1ejVS2dbeWzJ/X/hc49B63l+U39zyCdyduuvtulikfuTQQZVXDW9wYse+iYnXzybUuPHm49f5yw6mX35Z8/LtX5iowteziCFFl93wP6qde+sNSIGhs685b+7dSoWhuS3FY1Jc8cltx+ld8/OXm43pe8Cm62+g3Lk7delQVn6doKa3p8o+XOZq1+/TJrXf2xZQ8etfq1S/JvyAb6fINH1haZWvdwBCmy+7b3ttqZL3f8Z6v01nE2fNUCyzYeTW6Vvrbuw82WrqvMXz0yyTNK30+hWVtyW3YmuT07/+zS92r35Io3LX3dSCsZPyaZ/Tig5ysysvThCCJdP+E9AgjiEWIuTQBBpOsnvEcAQTxCzKUJIIh0/YT3CCCIR4i5NAEEka6f8B4BBPEIMZcmgCDS9RPeI4AgHiHm0gQQRLp+wnsEEMQjxFyaAIJI1094jwCCeISYSxNAEOn6Ce8RQBCPEHNpAggiXT/hPQII4hFiLk0AQaTrJ7xHAEE8QsylCSCIdP2E9wggiEeIuTQBBJGun/AeAQTxCDGXJoAg0vUT3iOAIB4h5tIEEES6fsJ7BBDEI8RcmgCCSNdPeI8AgniEmEsTQBDp+gnvEUAQjxBzaQIIIl0/4T0CCOIRYi5NAEGk6ye8RwBBPELMpQkgiHT9hPcIIIhHiLk0AQSRrp/wHgEE8QgxlyaAINL1E94jgCAeIebSBBBEun7CewQQxCPEXJoAgkjXT3iPAIJ4hJhLE0AQ6foJ7xFAEI8Qc2kCCCJdP+E9AgjiEWIuTQBBpOsnvEcAQTxCzKUJIIh0/YT3CCCIR4i5NAEEka6f8B4BBPEIMZcmgCDS9RPeI4AgHiHm0gQQRLp+wnsEEMQjxFyaAIJI1094jwCCeISYSxNAEOn6Ce8RQBCPEHNpAggiXT/hPQII4hFiLk0AQaTrJ7xHAEE8QsylCSCIdP2E9wggiEeIuTQBBJGun/AeAQTxCDGXJoAg0vUT3iOAIB4h5tIEEES6fsJ7BBDEI8RcmgCCSNdPeI8AgniEmEsTQBDp+gnvEUAQjxBzaQIIIl0/4T0CCOIRYi5NAEGk6ye8RwBBPELMpQkgiHT9hPcIIIhHiLk0AQSRrp/wHgEE8QgxlyaAINL1E94jgCAeIebSBBBEun7CewQQxCPEXJoAgkjXT3iPAIJ4hJhLE0AQ6foJ7xFAEI8Qc2kCfwOkrHI9lGWGkAAAAABJRU5ErkJggg==">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="200x200" src="data:image/png;base64,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">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="200x200" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAAIiUlEQVR4Xu2YXWiVBRjHHzvHzR33rZuaUhCmJFnQyrBMrUDRbsJC07qwC79Cb7KIqIxK6soyMSP7uCizoqKIPvTGyBtLFNEgtGmUiDrd5prptrO507sTDqKOD+dxeuH/t6vB8z57z//3P7+9H4MmN36WM34gAIH/JTAIQfhmQKAwAQTh2wGBCxBAEL4eEEAQvgMQiBHgChLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLjxpYIAQQRKZqYMQIIEuPGlggBBBEpmpgxAggS48aWCAEEESmamDECCBLg1rHzgLVv2mY9R1ssVV1umRkNVjn3rvxf6tp/2No2brGeI82Wqi23ynnTLHP3ze7sQh/jcp8vgOSKXUGQIqvtTqQ4sfwNSw2rssysBuvcsd+6DxyxmqfnWVnDWDu+aK3lzuWsYs4U69i+z7K/N9mI9Y9Zur664GzwmLqCn+Jyn69IHFf84QhSZMVdvxy2s9/vtcy0m6z0xmutY9ev1vriZit/cIqVTLgm/3vFw/ckV46p1rG70Vpf+NDKF0y3krFXF5xdVVZq7e9utcqFMxKx7rDOvb9Zy3PvW9m0iTZ01m0Dfr6qh6YXmVr3cAS5yO5b13xuHT/8bDVPzbXelnb7850t+d8zd06w7uOtdmLxOiubOtFKxo0uOKtZOceaV22ybHJ7Vr9mkbWs/sisN2d165ZaKjPkX59wIM5X+8QDF5laZx1Bgl3nes5Z21vf2tmtu23I5BtsWHKLdfrT7db+wTarfXa+lU0ab+daT9vxhWus9PbxVpoIUmg2/Jn5+WObVmww6+m13q6s1b38qJUmV6TzPwN9vmBsuTUECVTe25m11lc+sa49hywzs8Gql8y2QemU/fXVT8lV4rv+K0jPsVPWtOT1/K1SyfVjCs5qV/7zH71PuDPf7LR0cjs24tXF/Z/sUp0vEF1uBUGKrDyXy1nLS5uta1ejVS2dbeWzJ/X/hc49B63l+U39zyCdyduuvtulikfuTQQZVXDW9wYse+iYnXzybUuPHm49f5yw6mX35Z8/LtX5iowteziCFFl93wP6qde+sNSIGhs685b+7dSoWhuS3FY1Jc8cltx+ld8/OXm43pe8Cm62+g3Lk7delQVn6doKa3p8o+XOZq1+/TJrXf2xZQ8etfq1S/JvyAb6fINH1haZWvdwBCmy+7b3ttqZL3f8Z6v01nE2fNUCyzYeTW6Vvrbuw82WrqvMXz0yyTNK30+hWVtyW3YmuT07/+zS92r35Io3LX3dSCsZPyaZ/Tig5ysysvThCCJdP+E9AgjiEWIuTQBBpOsnvEcAQTxCzKUJIIh0/YT3CCCIR4i5NAEEka6f8B4BBPEIMZcmgCDS9RPeI4AgHiHm0gQQRLp+wnsEEMQjxFyaAIJI1094jwCCeISYSxNAEOn6Ce8RQBCPEHNpAggiXT/hPQII4hFiLk0AQaTrJ7xHAEE8QsylCSCIdP2E9wggiEeIuTQBBJGun/AeAQTxCDGXJoAg0vUT3iOAIB4h5tIEEES6fsJ7BBDEI8RcmgCCSNdPeI8AgniEmEsTQBDp+gnvEUAQjxBzaQIIIl0/4T0CCOIRYi5NAEGk6ye8RwBBPELMpQkgiHT9hPcIIIhHiLk0AQSRrp/wHgEE8QgxlyaAINL1E94jgCAeIebSBBBEun7CewQQxCPEXJoAgkjXT3iPAIJ4hJhLE0AQ6foJ7xFAEI8Qc2kCCCJdP+E9AgjiEWIuTQBBpOsnvEcAQTxCzKUJIIh0/YT3CCCIR4i5NAEEka6f8B4BBPEIMZcmgCDS9RPeI4AgHiHm0gQQRLp+wnsEEMQjxFyaAIJI1094jwCCeISYSxNAEOn6Ce8RQBCPEHNpAggiXT/hPQII4hFiLk0AQaTrJ7xHAEE8QsylCSCIdP2E9wggiEeIuTQBBJGun/AeAQTxCDGXJoAg0vUT3iOAIB4h5tIEEES6fsJ7BBDEI8RcmgCCSNdPeI8AgniEmEsTQBDp+gnvEUAQjxBzaQIIIl0/4T0CCOIRYi5NAEGk6ye8RwBBPELMpQkgiHT9hPcIIIhHiLk0AQSRrp/wHgEE8QgxlyaAINL1E94jgCAeIebSBBBEun7CewQQxCPEXJoAgkjXT3iPAIJ4hJhLE0AQ6foJ7xFAEI8Qc2kCfwOkrHI9lGWGkAAAAABJRU5ErkJggg==">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery-1.10.2.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/docs.min.js"></script>
  

</body></html>