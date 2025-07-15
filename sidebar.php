<head>
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
    <div class="nano-pane" style="opacity: 1; visibility: visible; display: none;"><div class="nano-slider" style="height: 912px; transform: translate(0px, 0px);"></div></div></div>
</aside>