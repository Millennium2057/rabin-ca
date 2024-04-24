<!DOCTYPE html>
<html lang="en">


<head>
    <title>Rabin Dhakal and Associates Admin</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/fav.ico') }}" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/font-awesome.min.css') }}">
    <!-- ALL CSS FILES -->
    <link href="{{ asset('backend/assets/css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{ asset('backend/assets/css/style-mob.css') }}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <script src="https://cdn.tiny.cloud/1/ulxwnnzwsuhe83ahjp97g6akk21ml7affz74btbvdrwze7r0/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="/admin" class="logo"><img src="{{ asset('backend/assets/images/rabin.png') }}" style="height: 50px; width: 100px; background-color: #fff; border: 5px solid #0000; border-radius: 5px; margin-top: 5px;" alt="rabin associates" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide ">
                <!-- <form class="app-search ">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form> -->
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">

                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="images/user/6.png" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="admin-panel-setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{route('logout')}}" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="{{ asset('backend/assets/images/placeholder.jpg')}}" alt="">
                        </li>
                        <li>
                            <h5>Rabin Associates <span> Kathmandu, Nepal</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="/admin" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>

                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> Acts And Rules</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/show-ActAndRule">See Acts And Rules</a>
                                    </li>
                                    <li><a href="/add-ActAndRule">Add New Acts And Rules</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> Blogs</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/show-Blog">See Blogs</a>
                                    </li>
                                    <li><a href="/add-Blog">Add New Blogs</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> Teams</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/show-team">See Teams</a>
                                    </li>
                                    <li><a href="/add-team">Add New Team</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> Testimonials</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/show-Testimonial">See Testimonials</a>
                                    </li>
                                    <li><a href="/add-Testimonial">Add New Testimonial</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> Contact</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/show-Contact">See Contacts</a>
                                    </li>


                                </ul>
                            </div>
                        </li>

                        <li><a href="/logout" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> Logout</a> </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
    <div style="">
        <!--== BODY INNER CONTAINER ==-->
        @yield('content')
    </div>

    <!--Import jQuery before materialize.js-->
    <!--Import jQuery before materialize.js-->
    <script src="{{ asset('backend/assets/js/main.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/materialize.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
</body>


</html>