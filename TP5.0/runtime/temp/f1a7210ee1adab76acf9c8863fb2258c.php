<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"F:\wamp64\www\TP5.0_35\TP5.0\public/../application/admin\view\blogc\addblog.html";i:1502448946;}*/ ?>
﻿<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>写博客</title>

    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/static/img/favicon.png" type="image/x-icon">


    <!--Basic Styles-->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/static/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/static/css/weather-icons.min.css" rel="stylesheet" />

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/css/beyond.min.css" rel="stylesheet" type="text/css" />
    <script src="/static/js/skins.min.js"></script>

</head>
<!-- /Head -->
<!-- Body -->
<body>
<!-- Loading Container -->
<div class="loading-container">
    <div class="loading-progress">
        <div class="rotator">
            <div class="rotator">
                <div class="rotator colored">
                    <div class="rotator">
                        <div class="rotator colored">
                            <div class="rotator colored"></div>
                            <div class="rotator"></div>
                        </div>
                        <div class="rotator colored"></div>
                    </div>
                    <div class="rotator"></div>
                </div>
                <div class="rotator"></div>
            </div>
            <div class="rotator"></div>
        </div>
        <div class="rotator"></div>
    </div>
</div>
<!--  /Loading Container -->
<!-- Navbar -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        Hui Zhou
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->

            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings --->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class=" dropdown-toggle" data-toggle="dropdown" title="Help" href="#">
                                <i class="icon fa fa-warning"></i>
                            </a>
                            <!--Notification Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-notifications">
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <div class="notification-icon">
                                                <i class="fa fa-phone bg-themeprimary white"></i>
                                            </div>
                                            <div class="notification-body">
                                                <span class="title">Skype meeting with Patty</span>
                                                <span class="description">01:00 pm</span>
                                            </div>
                                            <div class="notification-extra">
                                                <i class="fa fa-clock-o themeprimary"></i>
                                                <span class="description">office</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <div class="notification-icon">
                                                <i class="fa fa-check bg-darkorange white"></i>
                                            </div>
                                            <div class="notification-body">
                                                <span class="title">Uncharted break</span>
                                                <span class="description">03:30 pm - 05:15 pm</span>
                                            </div>
                                            <div class="notification-extra">
                                                <i class="fa fa-clock-o darkorange"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <div class="notification-icon">
                                                <i class="fa fa-gift bg-warning white"></i>
                                            </div>
                                            <div class="notification-body">
                                                <span class="title">Kate birthday party</span>
                                                <span class="description">08:30 pm</span>
                                            </div>
                                            <div class="notification-extra">
                                                <i class="fa fa-calendar warning"></i>
                                                <i class="fa fa-clock-o warning"></i>
                                                <span class="description">at home</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <div class="notification-icon">
                                                <i class="fa fa-glass bg-success white"></i>
                                            </div>
                                            <div class="notification-body">
                                                <span class="title">Dinner with friends</span>
                                                <span class="description">10:30 pm</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-footer ">
                                		<span>
                                			Today, March 28
                                		</span>
                                    <span class="pull-right">
                                			10°c
                                			<i class="wi wi-cloudy"></i>
                                		</span>
                                </li>
                            </ul>
                            <!--/Notification Dropdown-->
                        </li>
                        <li>
                            <a class="wave in dropdown-toggle" data-toggle="dropdown" title="Help" href="#">
                                <i class="icon fa fa-envelope"></i>
                                <span class="badge">3</span>
                            </a>
                            <!--Messages Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-messages">
                                <li>
                                    <a href="#">
                                        <img src="/static/img/avatars/divyia.jpg" class="message-avatar" alt="Divyia Austin">
                                        <div class="message">
                            					<span class="message-sender">
                            						Divyia Austin
                            					</span>
                                            <span class="message-time">
                            						2 minutes ago
                            					</span>
                                            <span class="message-subject">
                            						Here's the recipe for apple pie
                            					</span>
                                            <span class="message-body">
                            						to identify the sending application when the senders image is shown for the main icon
                            					</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/static/img/avatars/bing.png" class="message-avatar" alt="Microsoft Bing">
                                        <div class="message">
                            					<span class="message-sender">
                            						Bing.com
                            					</span>
                                            <span class="message-time">
                            						Yesterday
                            					</span>
                                            <span class="message-subject">
                            						Bing Newsletter: The January Issue‏
                            					</span>
                                            <span class="message-body">
                            						Discover new music just in time for the Grammy® Awards.
                            					</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/static/img/avatars/adam-jansen.jpg" class="message-avatar" alt="Divyia Austin">
                                        <div class="message">
                            					<span class="message-sender">
                            						Nicolas
                            					</span>
                                            <span class="message-time">
                            						Friday, September 22
                            					</span>
                                            <span class="message-subject">
                            						New 4K Cameras
                            					</span>
                                            <span class="message-body">
                            						The 4K revolution has come over the horizon and is reaching the general populous
                            					</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!--/Messages Dropdown-->
                        </li>

                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown" title="Tasks" href="#">
                                <i class="icon fa fa-tasks"></i>
                                <span class="badge">4</span>
                            </a>
                            <!--Tasks Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-tasks dropdown-arrow ">
                                <li class="dropdown-header bordered-darkorange">
                                    <i class="fa fa-tasks"></i>
                                    4 Tasks In Progress
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Account Creation</span>
                                            <span class="pull-right">65%</span>
                                        </div>

                                        <div class="progress progress-xs">
                                            <div style="width:65%" class="progress-bar"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Profile Data</span>
                                            <span class="pull-right">35%</span>
                                        </div>

                                        <div class="progress progress-xs">
                                            <div style="width:35%" class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Updating Resume</span>
                                            <span class="pull-right">75%</span>
                                        </div>

                                        <div class="progress progress-xs">
                                            <div style="width:75%" class="progress-bar progress-bar-darkorange"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Adding Contacts</span>
                                            <span class="pull-right">10%</span>
                                        </div>

                                        <div class="progress progress-xs">
                                            <div style="width:10%" class="progress-bar progress-bar-warning"></div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="#">
                                        See All Tasks
                                    </a>
                                    <button class="btn btn-xs btn-default shiny darkorange icon-only pull-right"><i class="fa fa-check"></i></button>
                                </li>
                            </ul>
                            <!--/Tasks Dropdown-->
                        </li>
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/static/img/avatars/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>David Stevenson</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="email"><a>David.Stevenson@live.com</a></li>
                                <!--Avatar Area-->
                                <li>
                                    <div class="avatar-area">
                                        <img src="/static/img/avatars/adam-jansen.jpg" class="avatar">
                                        <span class="caption">Change Photo</span>
                                    </div>
                                </li>
                                <!--Avatar Area-->
                                <li class="edit">
                                    <a href="profile.html" class="pull-left">Profile</a>
                                    <a href="#" class="pull-right">Setting</a>
                                </li>
                                <!--Theme Selector Area-->
                                <li class="theme-area">
                                    <ul class="colorpicker" id="skin-changer">
                                        <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" rel="/static/css/skins/blue.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" rel="/static/css/skins/azure.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;" rel="/static/css/skins/teal.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;" rel="/static/css/skins/green.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;" rel="/static/css/skins/orange.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#cc324b;" rel="/static/css/skins/pink.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#AC193D;" rel="/static/css/skins/darkred.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#8C0095;" rel="/static/css/skins/purple.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#0072C6;" rel="/static/css/skins/darkblue.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#585858;" rel="/static/css/skins/gray.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#474544;" rel="/static/css/skins/black.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#001940;" rel="/static/css/skins/deepblue.min.css"></a></li>
                                    </ul>
                                </li>
                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer">
                                    <a href="login.html">
                                        Sign out
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                        no space must be between these elements-->
                        <!-- Settings -->
                    </ul><div class="setting">
                    <a id="btn-setting" title="Setting" href="#">
                        <i class="icon glyphicon glyphicon-cog"></i>
                    </a>
                </div><div class="setting-container">
                    <label>
                        <input type="checkbox" id="checkbox_fixednavbar">
                        <span class="text">Fixed Navbar</span>
                    </label>
                    <label>
                        <input type="checkbox" id="checkbox_fixedsidebar">
                        <span class="text">Fixed SideBar</span>
                    </label>
                    <label>
                        <input type="checkbox" id="checkbox_fixedbreadcrumbs">
                        <span class="text">Fixed BreadCrumbs</span>
                    </label>
                </div>
                    <!-- Settings -->
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<!-- /Navbar -->
<!-- Main Container -->
<div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
            <!-- Page Sidebar Header-->
            <div class="sidebar-header-wrapper">
                <input type="text" class="searchinput" />
                <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
            </div>
            <!-- /Page Sidebar Header -->
            <!-- Sidebar Menu -->
            <ul class="nav sidebar-menu">
                <!--Dashboard-->
                <li>
                    <a href="index.html">
                        <i class="menu-icon glyphicon glyphicon-home"></i>
                        <span class="menu-text"> 博客列表 </span>
                    </a>
                </li>
                <!--Databoxes-->
                <li class="active">
                    <a href="addblog.html">
                        <i class="menu-icon glyphicon glyphicon-tasks"></i>
                        <span class="menu-text"> 写博客 </span>
                    </a>
                </li>
                <!--Widgets-->
                <li>
                    <a href="#">
                        <i class="menu-icon fa fa-th"></i>
                        <span class="menu-text"> Widgets </span>
                    </a>
                </li>
                <!--UI Elements-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-desktop"></i>
                        <span class="menu-text"> Elements </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="#">
                                <span class="menu-text">Basic Elements</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-dropdown">
								<span class="menu-text">
									Icons
								</span>
                                <i class="menu-expand"></i>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="#">
                                        <i class="menu-icon fa fa-rocket"></i>
                                        <span class="menu-text">Font Awesome</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="menu-icon glyphicon glyphicon-stats"></i>
                                        <span class="menu-text">Glyph Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="menu-icon typcn typcn-location-outline"></i>
                                        <span class="menu-text"> Typicons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="menu-icon wi-day-snow"></i>
                                        <span class="menu-text">Weather Icons</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Tabs & Accordions</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Alerts & Tooltips</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Modals & Wells</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Buttons</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text"> Nestable List</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Treeview</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Tables-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-table"></i>
                        <span class="menu-text"> Tables </span>

                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="#">
                                <span class="menu-text">Simple & Responsive</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Data Tables</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Forms-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-pencil-square-o"></i>
                        <span class="menu-text"> Forms </span>

                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="#">
                                <span class="menu-text">Form Layouts</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="menu-text">Form Inputs</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="menu-text">Data Pickers</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Wizard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Validation</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Editors</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Charts-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-bar-chart-o"></i>
                        <span class="menu-text"> Charts </span>

                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="#">
                                <span class="menu-text">Flot Charts</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="menu-text"> Morris Charts</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Sparkline Charts</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Easy Pie Charts</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text"> ChartJS</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Profile-->
                <li>
                    <a href="#">
                        <i class="menu-icon fa fa-picture-o"></i>
                        <span class="menu-text">Profile</span>
                    </a>
                </li>
                <!--Mail-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-envelope-o"></i>
                        <span class="menu-text"> Mail </span>

                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="#">
                                <span class="menu-text">Inbox</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="menu-text">View Message</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Compose Message</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Calendar-->
                <li>
                    <a href="#">
                        <i class="menu-icon fa fa-calendar"></i>
                        <span class="menu-text">
							Calendar
						</span>
                    </a>
                </li>
                <!--Pages-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon glyphicon glyphicon-paperclip"></i>
                        <span class="menu-text"> Pages </span>

                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#">
                                <span class="menu-text">Timeline</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Pricing Tables</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="menu-text">Invoice</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="menu-text">Login</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Register</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Lock Screen</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text"> Typography </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--More Pages-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon glyphicon glyphicon-link"></i>

                        <span class="menu-text">
							More Pages
						</span>

                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="#">
                                <span class="menu-text">Error 404</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="menu-text"> Error 500</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Blank Page</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text"> Grid</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-dropdown">
								<span class="menu-text">
									Multi Level Menu
								</span>
                                <i class="menu-expand"></i>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="#">
                                        <i class="menu-icon fa fa-camera"></i>
                                        <span class="menu-text">Level 3</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="menu-dropdown">
                                        <i class="menu-icon fa fa-asterisk"></i>

                                        <span class="menu-text">
											Level 4
										</span>
                                        <i class="menu-expand"></i>
                                    </a>

                                    <ul class="submenu">
                                        <li>
                                            <a href="#">
                                                <i class="menu-icon fa fa-bolt"></i>
                                                <span class="menu-text">Some Item</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="menu-icon fa fa-bug"></i>
                                                <span class="menu-text">Another Item</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </li>
                <!--Right to Left-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-align-right"></i>
                        <span class="menu-text"> Right to Left </span>

                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a>
                                <span class="menu-text">RTL</span>
                                <label class="pull-right margin-top-10">
                                    <input id="rtl-changer" class="checkbox-slider slider-icon colored-primary" type="checkbox">
                                    <span class="text"></span>
                                </label>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">Arabic Layout</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="menu-text">Persian Layout</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /Sidebar Menu -->
        </div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="#">博客列表</a>
                    </li>
                    <li class="active">写博客</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->
            <!-- Page Header -->
            <div class="page-header position-relative">

                <!--Header Buttons-->
                <div class="header-buttons">
                    <a class="sidebar-toggler" href="#">
                        <i class="fa fa-arrows-h"></i>
                    </a>
                    <a class="refresh" id="refresh-toggler" href="">
                        <i class="glyphicon glyphicon-refresh"></i>
                    </a>
                    <a class="fullscreen" id="fullscreen-toggler" href="#">
                        <i class="glyphicon glyphicon-fullscreen"></i>
                    </a>
                </div>
                <!--Header Buttons End-->
            </div>
            <!-- /Page Header -->
            <!-- Page Body -->
            <div class="page-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <!--添加博客输入框-->
                        <div class="col-lg-10 col-sm-10 col-xs-10">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-blue">
                                    <!--<span class="widget-caption">Basic Form</span>-->
                                </div>
                                <div class="widget-body">
                                    <div>
                                        <form role="form" method="post" enctype="multipart/form-data" class="form" action="<?php echo url('admin/blogc/add'); ?>">
                                            <div class="form-group">
                                                <label for="blogimg">博客图片</label>
                                                <!--<div class="databox databox-graded">-->
                                                    <!--博客头像-->
                                                    <!--<div class="databox-left no-padding">-->
                                                        <!--<img src="/static/img/avatars/adam-jansen.jpg" style="width:65px; height:65px;">-->
                                                    <!--</div>-->
                                                    <div class="databox-right padding-top-20 bg-whitesmoke">
                                                        <input type="file" class="btn" id="blogimg" name="blogimg">
                                                    </div>
                                                <!--</div>-->

                                            </div>

                                            <div class="form-group">
                                                <label for="title">博客标题</label>
                                                <input type="text" class="form-control" id="title" name="title" placeholder="请输入博客标题">
                                            </div>
                                            <div class="form-group">
                                                <label for="author">作者</label>
                                                <input type="text" class="form-control" id="author" name="author" placeholder="请输入博客作者名字">
                                            </div>

                                            <!--将要使用副文本编辑器-->
                                            <div class="form-group">
                                                <label for="content">博客内容</label>
                                                <!--<input type="text" class="form-control" id="content" name="content" placeholder="请输入博客内容">-->
                                                <textarea name="content"  id="content"></textarea>
                                            </div>


                                            <button type="submit" class="btn btn-blue">发布</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Basic Scripts-->
<script src="/static/js/jquery-2.0.3.min.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/beyond.min.js"></script>
<!--副文本插入控件-->
<script type="text/javascript" charset="utf-8" src="/utf8-php/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/utf8-php/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/utf8-php/lang/zh-cn/zh-cn.js"></script>

<script type="text/javascript">UE.getEditor('content',{initialFrameWidth:null,initialFrameHeight:400,});</script>
</body>
</html>
