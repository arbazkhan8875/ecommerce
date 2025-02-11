<?php
include 'head.php';
// require_once SITE_ROOT."/components/head.php";
?>
<div class="main-wrapper">

<div class="header">

  <div class="header-left">
    <a href="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/dashboard" class="logo">
      <img src="img/logo.png" width="120" height="40" alt="">
    </a>
  </div>

  <a id="toggle_btn" href="javascript:void(0);">
    <span class="bar-icon">
      <span></span>
      <span></span>
      <span></span>
    </span>
  </a>

  <div class="page-title-box">
    <h3>Digital SKills COmputer Institute</h3>
  </div>

  <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

  <ul class="nav user-menu">

    <li class="nav-item">
      <div class="top-nav-search">
        <a href="javascript:void(0);" class="responsive-search">
          <i class="fa fa-search"></i>
        </a>
        <form action="search">
          <input class="form-control" type="text" placeholder="Search here">
          <button class="btn" type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </li>


    <li class="nav-item dropdown has-arrow flag-nav">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
        <img src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/flags/us.png" alt=""
          height="20"> <span>English</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="javascript:void(0);" class="dropdown-item">
          <img src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/flags/us.png" alt=""
            height="16"> English
        </a>
        <a href="javascript:void(0);" class="dropdown-item">
          <img src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/flags/fr.png" alt=""
            height="16"> French
        </a>
        <a href="javascript:void(0);" class="dropdown-item">
          <img src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/flags/es.png" alt=""
            height="16"> Spanish
        </a>
        <a href="javascript:void(0);" class="dropdown-item">
          <img src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/flags/de.png" alt=""
            height="16"> German
        </a>
      </div>
    </li>


    <li class="nav-item dropdown">
      <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
        <i class="fa fa-bell-o"></i> <span class="badge rounded-pill">3</span>
      </a>
      <div class="dropdown-menu notifications">
        <div class="topnav-dropdown-header">
          <span class="notification-title">Notifications</span>
          <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
        </div>
        <div class="noti-content">
          <ul class="notification-list">
            <li class="notification-message">
              <a href="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/activities">
                <div class="media d-flex">
                  <span class="avatar flex-shrink-0">
                    <img alt=""
                      src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/profiles/avatar-02.jpg">
                  </span>
                  <div class="media-body flex-grow-1">
                    <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span
                        class="noti-title">Patient appointment booking</span></p>
                    <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                  </div>
                </div>
              </a>
            </li>
            <li class="notification-message">
              <a href="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/activities">
                <div class="media d-flex">
                  <span class="avatar flex-shrink-0">
                    <img alt=""
                      src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/profiles/avatar-03.jpg">
                  </span>
                  <div class="media-body flex-grow-1">
                    <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name
                      <span class="noti-title">Appointment booking with payment gateway</span></p>
                    <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                  </div>
                </div>
              </a>
            </li>
            <li class="notification-message">
              <a href="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/activities">
                <div class="media d-flex">
                  <span class="avatar flex-shrink-0">
                    <img alt=""
                      src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/profiles/avatar-06.jpg">
                  </span>
                  <div class="media-body flex-grow-1">
                    <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span
                        class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to
                      project <span class="noti-title">Doctor available module</span></p>
                    <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                  </div>
                </div>
              </a>
            </li>
            <li class="notification-message">
              <a href="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/activities">
                <div class="media d-flex">
                  <span class="avatar flex-shrink-0">
                    <img alt=""
                      src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/profiles/avatar-17.jpg">
                  </span>
                  <div class="media-body flex-grow-1">
                    <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span
                        class="noti-title">Patient and Doctor video conferencing</span></p>
                    <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                  </div>
                </div>
              </a>
            </li>
            <li class="notification-message">
              <a href="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/activities">
                <div class="media d-flex">
                  <span class="avatar flex-shrink-0">
                    <img alt=""
                      src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/profiles/avatar-13.jpg">
                  </span>
                  <div class="media-body flex-grow-1">
                    <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span
                        class="noti-title">Private chat module</span></p>
                    <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="topnav-dropdown-footer">
          <a href="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/activities">View all
            Notifications</a>
        </div>
      </div>
    </li>


    <li class="nav-item dropdown">
      <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
        <i class="fa fa-comment-o"></i> <span class="badge rounded-pill">8</span>
      </a>
      <div class="dropdown-menu notifications">
        <div class="topnav-dropdown-header">
          <span class="notification-title">Messages</span>
          <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
        </div>
        <div class="noti-content">
          <ul class="notification-list">
            <li class="notification-message">
              <a href="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/chat">
                <div class="list-item">
                  <div class="list-left">
                    <span class="avatar">
                      <img alt=""
                        src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/profiles/avatar-09.jpg">
                    </span>
                  </div>
                  <div class="list-body">
                    <span class="message-author">Richard Miles </span>
                    <span class="message-time">12:28 AM</span>
                    <div class="clearfix"></div>
                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="notification-message">
              <a href="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/chat">
                <div class="list-item">
                  <div class="list-left">
                    <span class="avatar">
                      <img alt=""
                        src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/profiles/avatar-02.jpg">
                    </span>
                  </div>
                  <div class="list-body">
                    <span class="message-author">John Doe</span>
                    <span class="message-time">6 Mar</span>
                    <div class="clearfix"></div>
                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="notification-message">
              <a href="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/chat">
                <div class="list-item">
                  <div class="list-left">
                    <span class="avatar">
                      <img alt=""
                        src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/profiles/avatar-03.jpg">
                    </span>
                  </div>
                  <div class="list-body">
                    <span class="message-author"> Tarah Shropshire </span>
                    <span class="message-time">5 Mar</span>
                    <div class="clearfix"></div>
                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="notification-message">
              <a href="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/chat">
                <div class="list-item">
                  <div class="list-left">
                    <span class="avatar">
                      <img alt=""
                        src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/profiles/avatar-05.jpg">
                    </span>
                  </div>
                  <div class="list-body">
                    <span class="message-author">Mike Litorus</span>
                    <span class="message-time">3 Mar</span>
                    <div class="clearfix"></div>
                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="notification-message">
              <a href="/smarthr-laravel/light/public/chat">
                <div class="list-item">
                  <div class="list-left">
                    <span class="avatar">
                      <img
                        src="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/assets/img/profiles/avatar-08.jpg"
                        alt="">
                    </span>
                  </div>
                  <div class="list-body">
                    <span class="message-author"> Catherine Manseau </span>
                    <span class="message-time">27 Feb</span>
                    <div class="clearfix"></div>
                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="topnav-dropdown-footer">
          <a href="/smarthr-laravel/light/public/chat">View all Messages</a>
        </div>
      </div>
    </li>

    <li class="nav-item dropdown has-arrow main-drop">
      <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
        <span class="user-img"><img src="/smarthr-laravel/light/public/assets/img/profiles/avatar-21.jpg" alt="">
          <span class="status online"></span></span>
        <span>Admin</span>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/smarthr-laravel/light/public/profile">My Profile</a>
        <a class="dropdown-item" href="/smarthr-laravel/light/public/settings">Settings</a>
        <a class="dropdown-item" href="/smarthr-laravel/light/public/login">Logout</a>
      </div>
    </li>
  </ul>


  <div class="dropdown mobile-user-menu">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
        class="fa fa-ellipsis-v"></i></a>
    <div class="dropdown-menu dropdown-menu-right">
      <a class="dropdown-item" href="/smarthr-laravel/light/public/profile">My Profile</a>
      <a class="dropdown-item" href="/smarthr-laravel/light/public/settings">Settings</a>
      <a class="dropdown-item" href="/smarthr-laravel/light/public/login">Logout</a>
    </div>
  </div>

</div>

