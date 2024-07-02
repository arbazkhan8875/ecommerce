<?php

include('./components/header.php');
include('./components/sidebar.php');
?>
<!-- // Main Content -->
<div class="page-wrapper" style="min-height: 601px;">
<div class="content container-fluid">

  <div class="page-header">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="page-title">Welcome Admin!</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item active">Dashboard</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
      <div class="card dash-widget">
        <div class="card-body">
          <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
          <div class="dash-widget-info">
            <h3>112</h3>
            <span>Projects</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
      <div class="card dash-widget">
        <div class="card-body">
          <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
          <div class="dash-widget-info">
            <h3>44</h3>
            <span>Clients</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
      <div class="card dash-widget">
        <div class="card-body">
          <span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
          <div class="dash-widget-info">
            <h3>37</h3>
            <span>Tasks</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
      <div class="card dash-widget">
        <div class="card-body">
          <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
          <div class="dash-widget-info">
            <h3>218</h3>
            <span>Employees</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6 text-center">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Total Revenue</h3>
              <div id="bar-charts" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg
                  height="342" version="1.1" width="641" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  style="overflow: hidden; position: relative; top: -0.6875px;">
                  <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.3.0</desc>
                  <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.84765625" y="303"
                    text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                  </text>
                  <path fill="none" stroke="#aaaaaa" d="M45.34765625,303H615.5" stroke-width="0.5"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84765625" y="233.5"
                    text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan>
                  </text>
                  <path fill="none" stroke="#aaaaaa" d="M45.34765625,233.5H615.5" stroke-width="0.5"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84765625" y="164"
                    text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan>
                  </text>
                  <path fill="none" stroke="#aaaaaa" d="M45.34765625,164H615.5" stroke-width="0.5"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84765625"
                    y="94.50000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none"
                    fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal">
                    <tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan>
                  </text>
                  <path fill="none" stroke="#aaaaaa" d="M45.34765625,94.50000000000003H615.5" stroke-width="0.5"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84765625" y="25"
                    text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan>
                  </text>
                  <path fill="none" stroke="#aaaaaa" d="M45.34765625,25H615.5" stroke-width="0.5"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="574.7748325892857"
                    y="315.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none"
                    fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan>
                  </text><text x="493.32449776785717" y="315.5" text-anchor="middle" font-family="sans-serif"
                    font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan>
                  </text><text x="411.87416294642856" y="315.5" text-anchor="middle" font-family="sans-serif"
                    font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan>
                  </text><text x="330.423828125" y="315.5" text-anchor="middle" font-family="sans-serif"
                    font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan>
                  </text><text x="248.97349330357142" y="315.5" text-anchor="middle" font-family="sans-serif"
                    font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan>
                  </text><text x="167.52315848214286" y="315.5" text-anchor="middle" font-family="sans-serif"
                    font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan>
                  </text><text x="86.07282366071428" y="315.5" text-anchor="middle" font-family="sans-serif"
                    font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan>
                  </text>
                  <rect x="55.52894810267857" y="25" width="29.043875558035715" height="278" rx="0" ry="0"
                    fill="#ff9b44" stroke="none" fill-opacity="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                  <rect x="87.57282366071428" y="52.80000000000001" width="29.043875558035715" height="250.2" rx="0"
                    ry="0" fill="#fc6075" stroke="none" fill-opacity="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                  <rect x="136.97928292410714" y="94.50000000000003" width="29.043875558035715"
                    height="208.49999999999997" rx="0" ry="0" fill="#ff9b44" stroke="none" fill-opacity="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                  <rect x="169.02315848214286" y="122.30000000000001" width="29.043875558035715" height="180.7"
                    rx="0" ry="0" fill="#fc6075" stroke="none" fill-opacity="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                  <rect x="218.42961774553572" y="164" width="29.043875558035715" height="139" rx="0" ry="0"
                    fill="#ff9b44" stroke="none" fill-opacity="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                  <rect x="250.47349330357144" y="191.8" width="29.043875558035715" height="111.19999999999999"
                    rx="0" ry="0" fill="#fc6075" stroke="none" fill-opacity="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                  <rect x="299.8799525669643" y="94.50000000000003" width="29.043875558035715"
                    height="208.49999999999997" rx="0" ry="0" fill="#ff9b44" stroke="none" fill-opacity="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                  <rect x="331.923828125" y="122.30000000000001" width="29.043875558035715" height="180.7" rx="0"
                    ry="0" fill="#fc6075" stroke="none" fill-opacity="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                  <rect x="381.33028738839283" y="164" width="29.043875558035715" height="139" rx="0" ry="0"
                    fill="#ff9b44" stroke="none" fill-opacity="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                  <rect x="413.37416294642856" y="191.8" width="29.043875558035715" height="111.19999999999999"
                    rx="0" ry="0" fill="#fc6075" stroke="none" fill-opacity="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                  <rect x="462.7806222098214" y="94.50000000000003" width="29.043875558035715"
                    height="208.49999999999997" rx="0" ry="0" fill="#ff9b44" stroke="none" fill-opacity="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                  <rect x="494.8244977678571" y="122.30000000000001" width="29.043875558035715" height="180.7"
                    rx="0" ry="0" fill="#fc6075" stroke="none" fill-opacity="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                  <rect x="544.23095703125" y="25" width="29.043875558035715" height="278" rx="0" ry="0"
                    fill="#ff9b44" stroke="none" fill-opacity="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                  <rect x="576.2748325892857" y="52.80000000000001" width="29.043875558035715" height="250.2" rx="0"
                    ry="0" fill="#fc6075" stroke="none" fill-opacity="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                </svg>
                <div class="morris-hover morris-default-style" style="left: 29.3773px; top: 131px;">
                  <div class="morris-hover-row-label">2006</div>
                  <div class="morris-hover-point" style="color: #ff9b44">
                    Total Income:
                    100
                  </div>
                  <div class="morris-hover-point" style="color: #fc6075">
                    Total Outcome:
                    90
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 text-center">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Sales Overview</h3>
              <div id="line-charts" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg
                  height="342" version="1.1" width="641" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  style="overflow: hidden; position: relative; left: -0.5px; top: -0.6875px;">
                  <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.3.0</desc>
                  <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.84765625" y="303"
                    text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                  </text>
                  <path fill="none" stroke="#aaaaaa" d="M45.34765625,303H615.5" stroke-width="0.5"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84765625" y="233.5"
                    text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan>
                  </text>
                  <path fill="none" stroke="#aaaaaa" d="M45.34765625,233.5H615.5" stroke-width="0.5"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84765625" y="164"
                    text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan>
                  </text>
                  <path fill="none" stroke="#aaaaaa" d="M45.34765625,164H615.5" stroke-width="0.5"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84765625"
                    y="94.50000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none"
                    fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal">
                    <tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan>
                  </text>
                  <path fill="none" stroke="#aaaaaa" d="M45.34765625,94.50000000000003H615.5" stroke-width="0.5"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84765625" y="25"
                    text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan>
                  </text>
                  <path fill="none" stroke="#aaaaaa" d="M45.34765625,25H615.5" stroke-width="0.5"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="615.5" y="315.5"
                    text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan>
                  </text><text x="520.5179801603149" y="315.5" text-anchor="middle" font-family="sans-serif"
                    font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan>
                  </text><text x="425.53596032062984" y="315.5" text-anchor="middle" font-family="sans-serif"
                    font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan>
                  </text><text x="330.5539404809448" y="315.5" text-anchor="middle" font-family="sans-serif"
                    font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan>
                  </text><text x="235.31169592937016" y="315.5" text-anchor="middle" font-family="sans-serif"
                    font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan>
                  </text><text x="140.32967608968508" y="315.5" text-anchor="middle" font-family="sans-serif"
                    font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan>
                  </text><text x="45.34765625" y="315.5" text-anchor="middle" font-family="sans-serif"
                    font-size="12px" stroke="none" fill="#888888"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                    font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan>
                  </text>
                  <path fill="none" stroke="#fc6075"
                    d="M45.34765625,52.80000000000001C69.09316120992128,70.17500000000001,116.5841711297638,104.92500000000001,140.32967608968508,122.30000000000001C164.07518104960636,139.675,211.56619096944888,191.8,235.31169592937016,191.8C259.12225706726383,191.8,306.7433793430511,122.30000000000001,330.5539404809448,122.30000000000001C354.29944544086607,122.30000000000001,401.79045536070856,191.8,425.53596032062984,191.8C449.2814652805511,191.8,496.7724752003936,125.775,520.5179801603149,122.30000000000001C544.2634851202362,118.825,591.7544950400787,153.575,615.5,164"
                    stroke-width="3px" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                  <path fill="none" stroke="#ff9b44"
                    d="M45.34765625,164C69.09316120992128,146.625,116.5841711297638,94.50000000000003,140.32967608968508,94.50000000000003C164.07518104960636,94.50000000000003,211.56619096944888,164,235.31169592937016,164C259.12225706726383,164,306.7433793430511,94.50000000000003,330.5539404809448,94.50000000000003C354.29944544086607,94.50000000000003,401.79045536070856,164,425.53596032062984,164C449.2814652805511,164,496.7724752003936,111.87500000000003,520.5179801603149,94.50000000000003C544.2634851202362,77.12500000000003,591.7544950400787,42.37500000000001,615.5,25"
                    stroke-width="3px" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                  <circle cx="45.34765625" cy="52.80000000000001" r="4" fill="#fc6075" stroke="#ffffff"
                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                  <circle cx="140.32967608968508" cy="122.30000000000001" r="4" fill="#fc6075" stroke="#ffffff"
                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                  <circle cx="235.31169592937016" cy="191.8" r="4" fill="#fc6075" stroke="#ffffff" stroke-width="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                  <circle cx="330.5539404809448" cy="122.30000000000001" r="4" fill="#fc6075" stroke="#ffffff"
                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                  <circle cx="425.53596032062984" cy="191.8" r="4" fill="#fc6075" stroke="#ffffff" stroke-width="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                  <circle cx="520.5179801603149" cy="122.30000000000001" r="4" fill="#fc6075" stroke="#ffffff"
                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                  <circle cx="615.5" cy="164" r="7" fill="#fc6075" stroke="#ffffff" stroke-width="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                  <circle cx="45.34765625" cy="164" r="4" fill="#ff9b44" stroke="#ffffff" stroke-width="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                  <circle cx="140.32967608968508" cy="94.50000000000003" r="4" fill="#ff9b44" stroke="#ffffff"
                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                  <circle cx="235.31169592937016" cy="164" r="4" fill="#ff9b44" stroke="#ffffff" stroke-width="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                  <circle cx="330.5539404809448" cy="94.50000000000003" r="4" fill="#ff9b44" stroke="#ffffff"
                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                  <circle cx="425.53596032062984" cy="164" r="4" fill="#ff9b44" stroke="#ffffff" stroke-width="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                  <circle cx="520.5179801603149" cy="94.50000000000003" r="4" fill="#ff9b44" stroke="#ffffff"
                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                  <circle cx="615.5" cy="25" r="7" fill="#ff9b44" stroke="#ffffff" stroke-width="1"
                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                </svg>
                <div class="morris-hover morris-default-style" style="left: 527.766px; top: 35px;">
                  <div class="morris-hover-row-label">2012</div>
                  <div class="morris-hover-point" style="color: #ff9b44">
                    Total Sales:
                    100
                  </div>
                  <div class="morris-hover-point" style="color: #fc6075">
                    Total Revenue:
                    50
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card-group m-b-30">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
              <div>
                <span class="d-block">New Employees</span>
              </div>
              <div>
                <span class="text-success">+10%</span>
              </div>
            </div>
            <h3 class="mb-3">10</h3>
            <div class="progress mb-2" style="height: 5px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="mb-0">Overall Employees 218</p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
              <div>
                <span class="d-block">Earnings</span>
              </div>
              <div>
                <span class="text-success">+12.5%</span>
              </div>
            </div>
            <h3 class="mb-3">$1,42,300</h3>
            <div class="progress mb-2" style="height: 5px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="mb-0">Previous Month <span class="text-muted">$1,15,852</span></p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
              <div>
                <span class="d-block">Expenses</span>
              </div>
              <div>
                <span class="text-danger">-2.8%</span>
              </div>
            </div>
            <h3 class="mb-3">$8,500</h3>
            <div class="progress mb-2" style="height: 5px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="mb-0">Previous Month <span class="text-muted">$7,500</span></p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
              <div>
                <span class="d-block">Profit</span>
              </div>
              <div>
                <span class="text-danger">-75%</span>
              </div>
            </div>
            <h3 class="mb-3">$1,12,000</h3>
            <div class="progress mb-2" style="height: 5px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="mb-0">Previous Month <span class="text-muted">$1,42,000</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 col-lg-12 col-xl-4 d-flex">
      <div class="card flex-fill dash-statistics">
        <div class="card-body">
          <h5 class="card-title">Statistics</h5>
          <div class="stats-list">
            <div class="stats-info">
              <p>Today Leave <strong>4 <small>/ 65</small></strong></p>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 31%" aria-valuenow="31"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="stats-info">
              <p>Pending Invoice <strong>15 <small>/ 92</small></strong></p>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 31%" aria-valuenow="31"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="stats-info">
              <p>Completed Projects <strong>85 <small>/ 112</small></strong></p>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 62%" aria-valuenow="62"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="stats-info">
              <p>Open Tickets <strong>190 <small>/ 212</small></strong></p>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 62%" aria-valuenow="62"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="stats-info">
              <p>Closed Tickets <strong>22 <small>/ 212</small></strong></p>
              <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-6 col-xl-4 d-flex">
      <div class="card flex-fill">
        <div class="card-body">
          <h4 class="card-title">Task Statistics</h4>
          <div class="statistics">
            <div class="row">
              <div class="col-md-6 col-6 text-center">
                <div class="stats-box mb-4">
                  <p>Total Tasks</p>
                  <h3>385</h3>
                </div>
              </div>
              <div class="col-md-6 col-6 text-center">
                <div class="stats-box mb-4">
                  <p>Overdue Tasks</p>
                  <h3>19</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="progress mb-4">
            <div class="progress-bar bg-purple" role="progressbar" style="width: 30%" aria-valuenow="30"
              aria-valuemin="0" aria-valuemax="100">30%</div>
            <div class="progress-bar bg-warning" role="progressbar" style="width: 22%" aria-valuenow="18"
              aria-valuemin="0" aria-valuemax="100">22%</div>
            <div class="progress-bar bg-success" role="progressbar" style="width: 24%" aria-valuenow="12"
              aria-valuemin="0" aria-valuemax="100">24%</div>
            <div class="progress-bar bg-danger" role="progressbar" style="width: 26%" aria-valuenow="14"
              aria-valuemin="0" aria-valuemax="100">21%</div>
            <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="14"
              aria-valuemin="0" aria-valuemax="100">10%</div>
          </div>
          <div>
            <p><i class="fa fa-dot-circle-o text-purple me-2"></i>Completed Tasks <span class="float-end">166</span>
            </p>
            <p><i class="fa fa-dot-circle-o text-warning me-2"></i>Inprogress Tasks <span
                class="float-end">115</span></p>
            <p><i class="fa fa-dot-circle-o text-success me-2"></i>On Hold Tasks <span class="float-end">31</span>
            </p>
            <p><i class="fa fa-dot-circle-o text-danger me-2"></i>Pending Tasks <span class="float-end">47</span>
            </p>
            <p class="mb-0"><i class="fa fa-dot-circle-o text-info me-2"></i>Review Tasks <span
                class="float-end">5</span></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-6 col-xl-4 d-flex">
      <div class="card flex-fill">
        <div class="card-body">
          <h4 class="card-title">Today Absent <span class="badge bg-inverse-danger ms-2">5</span></h4>
          <div class="leave-info-box">
            <div class="media d-flex align-items-center">
              <a href="/smarthr-laravel/light/public/profile" class="avatar"><img alt=""
                  src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/user.jpg"></a>
              <div class="media-body flex-grow-1">
                <div class="text-sm my-0">Martin Lewis</div>
              </div>
            </div>
            <div class="row align-items-center mt-3">
              <div class="col-6">
                <h6 class="mb-0">4 Sep 2019</h6>
                <span class="text-sm text-muted">Leave Date</span>
              </div>
              <div class="col-6 text-end">
                <span class="badge bg-inverse-danger">Pending</span>
              </div>
            </div>
          </div>
          <div class="leave-info-box">
            <div class="media d-flex align-items-center">
              <a href="/smarthr-laravel/light/public/profile" class="avatar"><img alt=""
                  src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/user.jpg"></a>
              <div class="media-body flex-grow-1">
                <div class="text-sm my-0">Martin Lewis</div>
              </div>
            </div>
            <div class="row align-items-center mt-3">
              <div class="col-6">
                <h6 class="mb-0">4 Sep 2019</h6>
                <span class="text-sm text-muted">Leave Date</span>
              </div>
              <div class="col-6 text-end">
                <span class="badge bg-inverse-success">Approved</span>
              </div>
            </div>
          </div>
          <div class="load-more text-center">
            <a class="text-dark" href="javascript:void(0);">Load More</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 d-flex">
      <div class="card card-table flex-fill">
        <div class="card-header">
          <h3 class="card-title mb-0">Invoices</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-nowrap custom-table mb-0">
              <thead>
                <tr>
                  <th>Invoice ID</th>
                  <th>Client</th>
                  <th>Due Date</th>
                  <th>Total</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/smarthr-laravel/light/public/invoice-view">#INV-0001</a></td>
                  <td>
                    <h2><a href="#">Global Technologies</a></h2>
                  </td>
                  <td>11 Mar 2019</td>
                  <td>$380</td>
                  <td>
                    <span class="badge bg-inverse-warning">Partially Paid</span>
                  </td>
                </tr>
                <tr>
                  <td><a href="/smarthr-laravel/light/public/invoice-view">#INV-0002</a></td>
                  <td>
                    <h2><a href="#">Delta Infotech</a></h2>
                  </td>
                  <td>8 Feb 2019</td>
                  <td>$500</td>
                  <td>
                    <span class="badge bg-inverse-success">Paid</span>
                  </td>
                </tr>
                <tr>
                  <td><a href="/smarthr-laravel/light/public/invoice-view">#INV-0003</a></td>
                  <td>
                    <h2><a href="#">Cream Inc</a></h2>
                  </td>
                  <td>23 Jan 2019</td>
                  <td>$60</td>
                  <td>
                    <span class="badge bg-inverse-danger">Unpaid</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer">
          <a href="/smarthr-laravel/light/public/invoices">View all invoices</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 d-flex">
      <div class="card card-table flex-fill">
        <div class="card-header">
          <h3 class="card-title mb-0">Payments</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table custom-table table-nowrap mb-0">
              <thead>
                <tr>
                  <th>Invoice ID</th>
                  <th>Client</th>
                  <th>Payment Type</th>
                  <th>Paid Date</th>
                  <th>Paid Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/smarthr-laravel/light/public/invoice-view">#INV-0001</a></td>
                  <td>
                    <h2><a href="#">Global Technologies</a></h2>
                  </td>
                  <td>Paypal</td>
                  <td>11 Mar 2019</td>
                  <td>$380</td>
                </tr>
                <tr>
                  <td><a href="/smarthr-laravel/light/public/invoice-view">#INV-0002</a></td>
                  <td>
                    <h2><a href="#">Delta Infotech</a></h2>
                  </td>
                  <td>Paypal</td>
                  <td>8 Feb 2019</td>
                  <td>$500</td>
                </tr>
                <tr>
                  <td><a href="/smarthr-laravel/light/public/invoice-view">#INV-0003</a></td>
                  <td>
                    <h2><a href="#">Cream Inc</a></h2>
                  </td>
                  <td>Paypal</td>
                  <td>23 Jan 2019</td>
                  <td>$60</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer">
          <a href="payments">View all payments</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 d-flex">
      <div class="card card-table flex-fill">
        <div class="card-header">
          <h3 class="card-title mb-0">Clients</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table custom-table mb-0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th class="text-end">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <h2 class="table-avatar">
                      <a href="#" class="avatar"><img alt=""
                          src="/smarthr-laravel/light/public/assets/img/profiles/avatar-19.jpg"></a>
                      <a href="/smarthr-laravel/light/public/client-profile">Barry Cuda <span>CEO</span></a>
                    </h2>
                  </td>
                  <td>barrycuda@example.com</td>
                  <td>
                    <div class="dropdown action-label">
                      <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa fa-dot-circle-o text-success"></i> Active
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>
                          Inactive</a>
                      </div>
                    </div>
                  </td>
                  <td class="text-end">
                    <div class="dropdown dropdown-action">
                      <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i>
                          Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i>
                          Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h2 class="table-avatar">
                      <a href="#" class="avatar"><img alt=""
                          src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/profiles/avatar-19.jpg"></a>
                      <a href="/smarthr-laravel/light/public/client-profile">Tressa Wexler <span>Manager</span></a>
                    </h2>
                  </td>
                  <td>tressawexler@example.com</td>
                  <td>
                    <div class="dropdown action-label">
                      <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa fa-dot-circle-o text-danger"></i> Inactive
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>
                          Inactive</a>
                      </div>
                    </div>
                  </td>
                  <td class="text-end">
                    <div class="dropdown dropdown-action">
                      <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i>
                          Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i>
                          Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h2 class="table-avatar">
                      <a href="/smarthr-laravel/light/public/client-profile" class="avatar"><img alt=""
                          src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/profiles/avatar-07.jpg"></a>
                      <a href="/smarthr-laravel/light/public/client-profile">Ruby Bartlett <span>CEO</span></a>
                    </h2>
                  </td>
                  <td>rubybartlett@example.com</td>
                  <td>
                    <div class="dropdown action-label">
                      <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa fa-dot-circle-o text-danger"></i> Inactive
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>
                          Inactive</a>
                      </div>
                    </div>
                  </td>
                  <td class="text-end">
                    <div class="dropdown dropdown-action">
                      <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i>
                          Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i>
                          Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h2 class="table-avatar">
                      <a href="/smarthr-laravel/light/public/client-profile" class="avatar"><img alt=""
                          src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/profiles/avatar-06.jpg"></a>
                      <a href="/smarthr-laravel/light/public/client-profile"> Misty Tison <span>CEO</span></a>
                    </h2>
                  </td>
                  <td>mistytison@example.com</td>
                  <td>
                    <div class="dropdown action-label">
                      <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa fa-dot-circle-o text-success"></i> Active
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>
                          Inactive</a>
                      </div>
                    </div>
                  </td>
                  <td class="text-end">
                    <div class="dropdown dropdown-action">
                      <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i>
                          Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i>
                          Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h2 class="table-avatar">
                      <a href="/smarthr-laravel/light/public/client-profile" class="avatar"><img alt=""
                          src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/profiles/avatar-14.jpg"></a>
                      <a href="/smarthr-laravel/light/public/client-profile"> Daniel Deacon <span>CEO</span></a>
                    </h2>
                  </td>
                  <td>danieldeacon@example.com</td>
                  <td>
                    <div class="dropdown action-label">
                      <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa fa-dot-circle-o text-danger"></i> Inactive
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>
                          Inactive</a>
                      </div>
                    </div>
                  </td>
                  <td class="text-end">
                    <div class="dropdown dropdown-action">
                      <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i>
                          Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i>
                          Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer">
          <a href="clients">View all clients</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 d-flex">
      <div class="card card-table flex-fill">
        <div class="card-header">
          <h3 class="card-title mb-0">Recent Projects</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table custom-table mb-0">
              <thead>
                <tr>
                  <th>Project Name </th>
                  <th>Progress</th>
                  <th class="text-end">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <h2><a href="/smarthr-laravel/light/public/project-view">Office Management</a></h2>
                    <small class="block text-ellipsis">
                      <span>1</span> <span class="text-muted">open tasks, </span>
                      <span>9</span> <span class="text-muted">tasks completed</span>
                    </small>
                  </td>
                  <td>
                    <div class="progress progress-xs progress-striped">
                      <div class="progress-bar" role="progressbar" data-bs-toggle="tooltip" style="width: 65%"
                        aria-label="65%"></div>
                    </div>
                  </td>
                  <td class="text-end">
                    <div class="dropdown dropdown-action">
                      <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i>
                          Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i>
                          Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h2><a href="/smarthr-laravel/light/public/project-view">Project Management</a></h2>
                    <small class="block text-ellipsis">
                      <span>2</span> <span class="text-muted">open tasks, </span>
                      <span>5</span> <span class="text-muted">tasks completed</span>
                    </small>
                  </td>
                  <td>
                    <div class="progress progress-xs progress-striped">
                      <div class="progress-bar" role="progressbar" data-bs-toggle="tooltip" style="width: 15%"
                        aria-label="15%"></div>
                    </div>
                  </td>
                  <td class="text-end">
                    <div class="dropdown dropdown-action">
                      <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i>
                          Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i>
                          Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h2><a href="/smarthr-laravel/light/public/project-view">Video Calling App</a></h2>
                    <small class="block text-ellipsis">
                      <span>3</span> <span class="text-muted">open tasks, </span>
                      <span>3</span> <span class="text-muted">tasks completed</span>
                    </small>
                  </td>
                  <td>
                    <div class="progress progress-xs progress-striped">
                      <div class="progress-bar" role="progressbar" data-bs-toggle="tooltip" style="width: 49%"
                        aria-label="49%"></div>
                    </div>
                  </td>
                  <td class="text-end">
                    <div class="dropdown dropdown-action">
                      <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i>
                          Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i>
                          Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h2><a href="/smarthr-laravel/light/public/project-view">Hospital Administration</a></h2>
                    <small class="block text-ellipsis">
                      <span>12</span> <span class="text-muted">open tasks, </span>
                      <span>4</span> <span class="text-muted">tasks completed</span>
                    </small>
                  </td>
                  <td>
                    <div class="progress progress-xs progress-striped">
                      <div class="progress-bar" role="progressbar" data-bs-toggle="tooltip" style="width: 88%"
                        aria-label="88%"></div>
                    </div>
                  </td>
                  <td class="text-end">
                    <div class="dropdown dropdown-action">
                      <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i>
                          Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i>
                          Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h2><a href="/smarthr-laravel/light/public/project-view">Digital Marketplace</a></h2>
                    <small class="block text-ellipsis">
                      <span>7</span> <span class="text-muted">open tasks, </span>
                      <span>14</span> <span class="text-muted">tasks completed</span>
                    </small>
                  </td>
                  <td>
                    <div class="progress progress-xs progress-striped">
                      <div class="progress-bar" role="progressbar" data-bs-toggle="tooltip" style="width: 100%"
                        aria-label="100%"></div>
                    </div>
                  </td>
                  <td class="text-end">
                    <div class="dropdown dropdown-action">
                      <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i>
                          Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i>
                          Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer">
          <a href="projects">View all projects</a>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
<?php
include('./components/footer.php');