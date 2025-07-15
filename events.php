<html class="fixed sidebar-left-sm sidebar-light js flexbox flexboxlegacy no-touch csstransforms csstransforms3d no-overflowscrolling no-mobile-device custom-scroll"><!-- html header --><head>
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta http-equiv="Content-type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Laguna State Polytechnic University">
    <meta name="author" content="techtune">
    <title>Events</title>
    <link rel="shortcut icon" href="https://online.lspusys.com/assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- include stylesheet -->
    <!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700" rel="stylesheet"> 
<link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/font-awesome/css/all.min.css">

<!-- techtune css -->
<link rel="stylesheet" href="https://online.lspusys.com/assets/css/techtune.css">

<!-- Jquery Datatables CSS -->
<link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/datatables/media/css/dataTables.bootstrap.min.css">

<link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/select2/css/select2.css">
<link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css">
<link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/simple-line-icons/css/simple-line-icons.css">
<link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/magnific-popup/magnific-popup.css">
<link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css">
<link rel="stylesheet" href="https://online.lspusys.com/assets/css/custom-style.css?v=1.1.1">
<link rel="stylesheet" href="https://online.lspusys.com/assets/css/skins/default.css">
<link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/sweetalert/sweetalert-custom.css">
<link rel="stylesheet" href="https://online.lspusys.com/assets/css/frost.css?v=1.2.13">
<link rel="stylesheet" href="https://online.lspusys.com/assets/css/modal.css?v=1.1.9">
<link rel="stylesheet" href="https://online.lspusys.com/assets/css/table.css?v=1.2.12">

<!-- jquery -->
<script src="https://online.lspusys.com/assets/vendor/jquery/jquery.min.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/modernizr/modernizr.js" type="text/javascript"></script>
<style>
    td.recomputePayment:hover{
        text-decoration: underline;
        color:dodgerblue;
        cursor:pointer;
    }
    .text-monospace{
        font-family: monospace;
    }
    .opacity-25{
        opacity: 0.25;
    }
    .border-3{
        border: 1px solid rgba(255,255,255,0.35) !important;
    }
    .border-1{
        border: 1px solid silver;
    }
    .w-0{
        width: 0 !important;
    }
    .w-auto{
        width: auto;
    }
    .fw-bold{
        font-weight: bold;
    }
    .flex-1{
        flex:1;
    }
    .justify-content-end{
        justify-content: end;
    }
    .position-absolute{
        position:absolute;
    }
    .border-0{
        border: none!important;
    }
    .rounded-0{
        border-radius: 0 !important;
    }
    .text-white{
        color:white !important;
    }
    .bg-banner-success{
        background-color:rgba(5,150,5, 0.25);
        color: darkgreen;
    }
    .bg-banner-info{
        background-color:rgba(0,50,255, 0.25);
        color: navy;
    }
    .bg-banner-danger{
        background-color:rgba(255,50,50, 0.25);
        color: maroon;
    }
    .fadeInDownBig{
        top:  -100vh;
        animation-timing-function: ease-in-out;
        animation-fill-mode: forwards;
        animation-name: fadeInBigDown;
        animation-duration: 333ms;
    }
    .fadeOutUpBig{
        top:  0;
        animation-timing-function: ease-in-out;
        animation-duration: 333ms;
        animation-fill-mode: forwards;
        animation-name: fadeOutBigUp;
    }
    .table-row-clickable tr:hover > td{
        background-color:dodgerblue !important;
        color:white !important;
        cursor:pointer;
    }
    @keyframes fadeInBigDown{
        0%{
            opacity:0;
            top:  -100px;
        }
        100%{
            top:0;
            opacity:1;
            -moz-backdrop-filter: saturate(2.5) blur(15px) brightness(1.15);
            -webkit-backdrop-filter: saturate(2.5) blur(15px);
            backdrop-filter: saturate(200%) blur(20px);
        }
    }
    @keyframes fadeOutBigUp{
        0%{
            top:  0;
            opacity:1;
            -moz-backdrop-filter: saturate(2.5) blur(15px) brightness(1.15);
            -webkit-backdrop-filter: saturate(2.5) blur(15px);
            backdrop-filter: saturate(200%) blur(20px);
        }
        100%{
            top: -100px;
            opacity:0;
        }
    }
</style>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/javascript-obfuscator/dist/index.browser.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@frostsw/frostjs@1.2.21/public_html/frostjs.min.js" type="text/javascript"></script>

    <!-- If user have enabled CSRF proctection this function will take care of the ajax requests and append custom header for CSRF -->
    <script type="text/javascript">
        var Events = {};
        var base_url = 'https://online.lspusys.com/';
        var csrfData = {"school_csrf_name":"a97a42dba7fb62fecddbbc6bd72414a5"};
        $(function ($) {
            $.ajaxSetup({
                data: csrfData
            });
        });

        fr.regedit("beforesuccess", function (response) {
            try {
                let resp = JSON.parse(response);
                if (resp.csrf_token) {
                    fr.regedit("initdata", [{name: resp.csrf_token.name, value: resp.csrf_token.value}]);
                    if (fr("input[name='" + resp.csrf_token.name + "']")) {
                        fr("input[name='" + resp.csrf_token.name + "']").val(resp.csrf_token.value);
                    }

                    csrfData[resp.csrf_token.name] = resp.csrf_token.value;
                    $.ajaxSetup({
                        data: csrfData
                    });
                }
            } catch (e) {
            }
        });

        fr.plugin("modal", function (method) {
            if (!method) {
                method = {
                    backdrop: "static",
                    keyboard: false
                };
            }
            
            this.data("backdrop", "static");
            this.data("keyboard", "false");
            
            return $(this.selector).modal(method);
        });

        fr(function () {
            let key = Object.keys(csrfData)[0];
            fr.regedit("initdata", [{name: key, value: csrfData[key]}]);

            fr("script[obfuscated]")?.member("*").forEach(function (script) {
                if (script.attr("src")) {
                    fr.xhr({
                        url: script.attr("src")
                    }).then(function (r) {
                        script.attr("src", null);
                        script.html(JavaScriptObfuscator.obfuscate(r)._obfuscatedCode);

                        if (fr.f.t(Events.initComponents, "function")) {
                            Events.initComponents();
                        }
                    });
                } else {
                    script.html(JavaScriptObfuscator.obfuscate(script.html())._obfuscatedCode);
                }

                if (fr.f.t(Events.initComponents, "function")) {
                    Events.initComponents();
                }
            });
        });

        function gcp_url(type, filename) {
            return "https://storage.googleapis.com/lspusyscom/uploads/" + type + "/" + filename;
        }
    </script>
</head>

    <!-- <body class="loading-overlay-showing" data-loading-overlay> -->
    <!-- page preloader -->
    <!-- <div class="loading-overlay dark">
            <div class="ring-loader">
                    Loading <span></span>
            </div>
    </div> -->
    <body>
        <section class="body">
            <!-- top navbar -->
            <header class="header">
    <div class="logo-env">
        <a href="https://online.lspusys.com/dashboard" class="logo">
            <img src="https://online.lspusys.com/uploads/app_image/logo-small.png" height="40">
        </a>

        <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="header-left hidden-xs">
        <ul class="header-menu">
            <!-- sidebar toggle button -->
            <li>
                <div class="header-menu-icon sidebar-toggle" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                    <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </li>
            <!-- full screen button -->
            <li>
                <div class="header-menu-icon s-expand">
                    <i class="fas fa-expand"></i>
                </div>
            </li>
            <!-- shortcut box -->
                    </ul>

        <!-- search bar -->
            </div>

    <div class="header-right">
        <ul class="header-menu">
                        <!-- session switcher box -->
            <li>
                <a href="#" class="dropdown-toggle header-menu-icon" data-toggle="dropdown">
                    <i class="far fa-calendar-alt"></i>
                </a>
                <div class="bg-blur bg-white-55 rounded-20 dropdown-menu header-menubox mh-oh">
                    <div class="notification-title">
                        <i class="far fa-calendar-alt"></i> Academic Session                    </div>
                    <div class="content hbox pr-none">
                        <div class="scrollable visible-slider dh-tf has-scrollbar" data-plugin-scrollable="">
                            <div class="scrollable-content" tabindex="0" style="right: -15px;">
                                <ul>
                                                                            <li>
                                            <a href="https://online.lspusys.com/sessions/set_academic/5">
                                                2018-2019                                             </a>
                                        </li>
                                                                            <li>
                                            <a href="https://online.lspusys.com/sessions/set_academic/6">
                                                2019-2020                                             </a>
                                        </li>
                                                                            <li>
                                            <a href="https://online.lspusys.com/sessions/set_academic/7">
                                                2020-2021                                             </a>
                                        </li>
                                                                            <li>
                                            <a href="https://online.lspusys.com/sessions/set_academic/9">
                                                2021-2022                                             </a>
                                        </li>
                                                                            <li>
                                            <a href="https://online.lspusys.com/sessions/set_academic/10">
                                                2022-2023                                             </a>
                                        </li>
                                                                            <li>
                                            <a href="https://online.lspusys.com/sessions/set_academic/11">
                                                2023-2024                                             </a>
                                        </li>
                                                                            <li>
                                            <a href="https://online.lspusys.com/sessions/set_academic/12">
                                                2024-2025 <i class="fas fa-check"></i>                                            </a>
                                        </li>
                                                                    </ul>
                            </div>
                        <div class="scrollable-pane" style="opacity: 1; visibility: visible; display: none;"><div class="scrollable-slider" style="height: 226px; transform: translate(0px, 0px);"></div></div></div>
                    </div>
                </div>
            </li>

            <!-- languages switcher box -->
            <!--<li>
                <a href="#" class="dropdown-toggle header-menu-icon" data-toggle="dropdown">
                    <i class="far fa-flag"></i>
                </a>
                <div class="bg-blur bg-white-55 rounded-20 dropdown-menu header-menubox mh-oh">
                    <div class="notification-title">
                        <i class="far fa-flag"></i>                     </div>
                    <div class="content hbox lb-pr">
                        <div class="scrollable visible-slider dh-tf" data-plugin-scrollable>
                            <div class="scrollable-content">
                                <ul>
                                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>-->
            <!-- message alert box -->
            <li>
                <a href="#" class="dropdown-toggle header-menu-icon" data-toggle="dropdown">
                    <i class="far fa-bell"></i>
                                    </a>
                <div class="bg-blur bg-white-55 rounded-20 dropdown-menu header-menubox qmsg-box-mw">
                    <div class="notification-title">
                        <i class="far fa-bell"></i> Message                    </div>
                    <div class="content">
                        <ul>
                            <li class="text-center">You do not have any new messages</li>                        </ul>
                    </div>
                    <div class="notification-footer">
                        <div class="text-right">
                            <a href="https://online.lspusys.com/communication/mailbox/inbox" class="view-more">All Messages</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <!-- user profile box -->
        <span class="separator"></span>
        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="https://online.lspusys.com/uploads/app_image/defualt.png" alt="user-image" class="img-circle" height="35">
                </figure>
            </a>
            <div class="bg-blur bg-white-55 rounded-20 dropdown-menu ">
                <ul class="dropdown-user list-unstyled">
                    <li class="user-p-box">
                        <div class="dw-user-box">
                            <div class="u-img">
                                <img src="https://online.lspusys.com/uploads/app_image/defualt.png" alt="user">
                            </div>
                            <div class="u-text">
                                <h4>Henson Brix Arroyo</h4>
                                <p class="text-muted">Student</p>
                                <a href="https://online.lspusys.com/authentication/logout" class="btn btn-danger btn-xs"><i class="fas fa-sign-out-alt"></i> Logout</a>
                            </div>
                        </div>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="https://online.lspusys.com/profile"><i class="fas fa-user-shield"></i> Profile</a></li>
                    <li><a href="https://online.lspusys.com/profile/password"><i class="fas fa-mars-stroke-h"></i> Reset Password</a></li>
                    <li><a href="https://online.lspusys.com/communication/mailbox/inbox"><i class="far fa-envelope"></i> Mailbox</a></li>
                                                            <li role="separator" class="divider"></li>
                    <li><a href="https://online.lspusys.com/authentication/logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>            <div class="inner-wrapper">
                <!-- sidebar -->
                <aside id="sidebar-left" class="sidebar-left">
    <div class="sidebar-header">
        <div class="sidebar-title">
            Main
        </div>
    </div>

    <div class="nano has-scrollbar">
        <div class="nano-content" tabindex="0" style="right: -15px;">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                                            <!-- dashboard -->
                        <li class="">
                            <a href="https://online.lspusys.com/dashboard">
                                <i class="icons icon-grid"></i><span>Dashboard</span>
                            </a>
                        </li>
                                            <!-- teachers -->
                        <li class="">
                            <a href="https://online.lspusys.com/userrole/teachers">
                                <i class="icon-people icons"></i><span>Instructors</span>
                            </a>
                        </li>

                        <!-- academic -->
                        <li class="nav-parent ">
                            <a>
                                <i class="icons icon-home" aria-hidden="true"></i><span>Academic</span>
                            </a>
                            <ul class="nav nav-children">
                                <!-- subject -->
                                <li class="">
                                    <a href="https://online.lspusys.com/userrole/subject">
                                        <i class="fas fa-book-reader"></i>Subject                                    </a>
                                </li>

                                <!-- class schedule -->
                                <li class=" ">
                                    <a href="https://online.lspusys.com/userrole/class_schedule">
                                        <i class="fas fa-dna"></i><span>Class Schedule</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="https://online.lspusys.com/userrole/curriculum">
                                        <i class="fas fa-book-open" aria-hidden="true"></i>
                                        <span>Curriculum</span>
                                    </a>
                                </li>

                               <!-- <li class=" ">
                                    <a href="https://online.lspusys.com/userrole/print_cor">
                                        <i class="fas fa-book"></i><span>View COR</span>
                                    </a>
                                </li>
                                idoy
                                -->

     <li class="nav-parent ">
                            <a>
                                <i class="fas fa-book" aria-hidden="true"></i><span>View COR</span>
                            </a>
                            <ul class="nav nav-children">
                                <!-- subject -->
                                <li class="">
                                    <a href="https://online.lspusys.com/userrole/print_cor/1">
                                        <i class="fas fa-book-reader"></i>First Semester                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://online.lspusys.com/userrole/print_cor/2">
                                        <i class="fas fa-book-reader"></i>Second Semester                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://online.lspusys.com/userrole/print_cor/3">
                                        <i class="fas fa-book-reader"></i>InterSemester                                    </a>
                                </li>
                            </ul>
                        </li>

                            </ul>
                        </li>

                        <!-- leave -->
                        <li class="nav-parent ">
                            <a>
                                <i class="icons icon-envelope-open"></i> <span>Requests</span>
                            </a>
                            <ul class="nav nav-children">
                                <li class="">
                                    <a href="https://online.lspusys.com/userrole/leave_request">
                                        <i class="icons icon-docs"></i><span>Leave Requests</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://online.lspusys.com/userrole/requests/shifting">
                                        <i class="icons icon-folder-alt"></i> <span>Shift Requests</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- attachments upload -->
                        <!-- <li class=" ">
                            <a href="https://online.lspusys.com/userrole/attachments">
                                <i class="icons icon-cloud-upload"></i><span>Attachments Book</span>
                            </a>
                        </li> -->

                        <!-- homework -->
                        <!-- <li class=" ">
                            <a href="https://online.lspusys.com/userrole/homework">
                                <i class="icons icon-note"></i><span>Homework</span>
                            </a>
                        </li> -->

                        <!-- exam master -->
                        <li class="nav-parent ">
                            <a>
                                <i class="icons icon-book-open" aria-hidden="true"></i><span>Exam Master</span>
                            </a>
                            <ul class="nav nav-children">
                                <!-- exam schedule -->
                                <li class=" ">
                                    <a href="https://online.lspusys.com/userrole/exam_schedule">
                                        <i class="fas fa-dna"></i><span>Exam Schedule</span>
                                    </a>
                                </li>

                                <!-- marks -->
                                <li class="">
                                    <a href="https://online.lspusys.com/userrole/report_card">
                                        <i class="fas fa-marker"></i><span>Report Card</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- supervision -->
                        
                        <!-- attendance control -->
                        <li class="">
                            <a href="https://online.lspusys.com/userrole/attendance">
                                <i class="icons icon-chart"></i><span>Attendance</span>
                            </a>
                        </li>

                        <li class="nav-parent ">
                            <a>
                                <i class="icons icon-notebook"></i><span>Library</span>
                            </a>
                            <ul class="nav nav-children">
                                <li class="">
                                    <a href="https://online.lspusys.com/userrole/book">
                                        <span><i class="fas fa-caret-right"></i>Books List</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://online.lspusys.com/userrole/book_request">
                                        <span><i class="fas fa-caret-right"></i>Issued Book</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- events -->
                        <li class="nav-active ">
                            <a href="https://online.lspusys.com/userrole/event">
                                <i class="icons icon-speech"></i><span>Events</span>
                            </a>
                        </li>

                        <!-- fees history -->
                        <li class=" ">
                            <a href="https://online.lspusys.com/userrole/invoice">
                                <i class="icons icon-calculator"></i><span>School Fees</span>
                            </a>
                        </li>

                        <!-- message -->
                        <li class=" ">
                            <a href="https://online.lspusys.com/communication/mailbox/inbox">
                                <i class="icons icon-envelope-open"></i><span>Message</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
                <script type="text/javascript">
            // maintain scroll position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                            sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>
    <div class="nano-pane" style="display: none; opacity: 1; visibility: visible;"><div class="nano-slider" style="height: 912px; transform: translate(0px, 0px);"></div></div></div>
</aside>
<!-- end sidebar -->
                <!-- page main content -->
                <section role="main" class="content-body">
                    <header class="page-header">
                        <a class="page-title-icon" href="https://online.lspusys.com/dashboard"><i class="fas fa-home"></i></a>
                        <h2>Events</h2>
                    </header>
                    <section class="panel">
	<header class="panel-heading">
		<h4 class="panel-title"><i class="fas fa-list-ul"></i> Event List</h4>
	</header>
	<div class="panel-body">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6 mb-xs"><div class="dt-buttons btn-group">               <a class="btn btn-default buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Copy"><span><i class="far fa-copy"></i></span></a> <a class="btn btn-default buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Excel"><span><i class="fa fa-file-excel"></i></span></a> <a class="btn btn-default buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="CSV"><span><i class="fa fa-file-alt"></i></span></a> <a class="btn btn-default buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="PDF"><span><i class="fa fa-file-pdf"></i></span></a> <a class="btn btn-default buttons-print" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Print"><span><i class="fa fa-print"></i></span></a> <a class="btn btn-default buttons-collection buttons-colvis" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Columns"><span><i class="fas fa-columns"></i></span></a> </div></div><div class="col-sm-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control pull-right" placeholder="Search..." aria-controls="DataTables_Table_0"></label></div></div></div><div class="table-responsive"><table class="table table-bordered table-hover mb-none tbr-top table-export dataTable no-footer" id="DataTables_Table_0" role="grid">
			<thead>
				<tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1">Sl</th><th class="sorting_disabled" rowspan="1" colspan="1">Title</th><th class="sorting_disabled" rowspan="1" colspan="1">Type</th><th class="sorting_disabled" rowspan="1" colspan="1">Date Of Start</th><th class="sorting_disabled" rowspan="1" colspan="1">Date Of End</th><th class="sorting_disabled" rowspan="1" colspan="1">Audience</th><th class="sorting_disabled" rowspan="1" colspan="1">Created By</th><th class="sorting_disabled" rowspan="1" colspan="1">Action</th></tr>
			</thead>
			<tbody>
							<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No data available in table</td></tr></tbody>
		</table></div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"><i class="fa fa-chevron-left"></i></a></li><li class="paginate_button next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"><i class="fa fa-chevron-right"></i></a></li></ul></div></div>
	</div>
</section>

<div class="zoom-anim-dialog modal-block modal-block-primary mfp-hide" id="modal">
	<section class="panel">
		<header class="panel-heading">
			<div class="panel-btn">
				<button onclick="if (!window.__cfRLUnblockHandlers) return false; fn_printElem('printResult')" class="btn btn-default btn-circle icon"><i class="fas fa-print"></i></button>
			</div>
			<h4 class="panel-title"><i class="fas fa-info-circle"></i> Event Details</h4>
		</header>
		<div class="panel-body">
			<div id="printResult" class="pt-sm pb-sm">
				<div class="table-responsive">						
					<table class="table table-bordered table-condensed text-dark tbr-top" id="ev_table"></table>
				</div>
			</div>
		</div>
		<footer class="panel-footer">
			<div class="row">
				<div class="col-md-12 text-right">
					<button class="btn btn-default modal-dismiss">
						Close					</button>
				</div>
			</div>
		</footer>
	</section>
</div>                </section>
            </div>
        </section>

        <!-- JS Script -->
        <script src="https://online.lspusys.com/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/nanoscroller/nanoscroller.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/jquery-placeholder/jquery-placeholder.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/select2/js/select2.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/fuelux/js/spinner.js" type="text/javascript"></script>

<!-- Jquery Datatables JS -->
<script src="https://online.lspusys.com/assets/vendor/datatables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/datatables/media/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap.min.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.colVis.min.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/bootstrap-timepicker/bootstrap-timepicker.js" type="text/javascript"></script>

<script src="https://online.lspusys.com/assets/vendor/jquery-appear/jquery-appear.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/jquery-validation/jquery.validate.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/magnific-popup/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/screenfull/screenfull.min.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/vendor/sweetalert/sweetalert.min.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/js/custom.js?v=1" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/js/plug.init.js" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/js/app.js?v=1.1.6" charset="utf-8" type="text/javascript"></script>
<script src="https://online.lspusys.com/assets/js/app-t.js" type="text/javascript"></script>



<script type="text/javascript">
    jQuery.extend(jQuery.validator.messages, {
        required: "This Value Is Required",
        email: "Enter Valid Email",
        url: "Please enter a valid URL.",
        date: "Please enter a valid date.",
        dateISO: "Please enter a valid date (ISO).",
        number: "Please enter a valid number.",
        digits: "Please enter only digits.",
        remote: "Please fix this field.",
        creditcard: "Please enter a valid credit card number.",
        equalTo: "Please enter the same value again.",
        accept: "Please enter a value with a valid extension.",
        maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
        minlength: jQuery.validator.format("Please enter at least {0} characters."),
        rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
        range: jQuery.validator.format("Please enter a value between {0} and {1}."),
        max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
        min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
    });
</script>
        
        <!-- sweetalert box -->
        <script type="text/javascript">
            function confirm_modal(delete_url) {
                swal({
                    title: "Are You Sure",
                    text: "Delete This Information",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn btn-default swal2-btn-default",
                    cancelButtonClass: "btn btn-default swal2-btn-default",
                    confirmButtonText: "Yes Continue",
                    cancelButtonText: "Cancel",
                    buttonsStyling: false,
                    footer: "Deleted Note"
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: delete_url,
                            type: "POST",
                            success: function (data) {
                                swal({
                                    title: "Deleted",
                                    text: "Information Deleted",
                                    buttonsStyling: false,
                                    showCloseButton: true,
                                    focusConfirm: false,
                                    confirmButtonClass: "btn btn-default swal2-btn-default",
                                    type: "success"
                                }).then((result) => {
                                    if (result.value) {
                                        location.reload();
                                    }
                                });
                            }
                        });
                    }
                });
            }
        </script>
    

<a class="scroll-to-top hidden-mobile" href="#"><i class="fa fa-chevron-up"></i></a></body></html>