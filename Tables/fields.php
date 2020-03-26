<?php 

function field($fsize,$fclass,$fieldname,$vsize,$vclass,$fieldvalue)
{
    $content  =	 "<div class=\"col-md-$fsize col-sm-4 $fclass\">";
    $content .=  "$fieldname";
    $content .=	 "</div>";
    $content .=	 "<div class=\"col-md-$vsize col-sm-8 $vclass\">";
    $content .=  "$fieldvalue";
    $content .=	 "</div>";
    return $content;
}
function field_1($rc,$fsize,$fclass,$fieldname,$vsize,$vclass,$fieldvalue)	
{
    $content  =  "<div class=\"row $rc\">";
    $content .= field($fsize,$fclass,$fieldname,$vsize,$vclass,$fieldvalue);    
    $content .=	"</div>";
    echo $content;
}

function field_2($rc,$f1size,$v1size,$f2size,$v2size,$f1class,$f2class,$v1class,$v2class,$f1,$v1,$f2,$v2)	
{
    $content  =  "<div class=\"row $rc\">";
    $content .= "\n";
    $content .= field($f1size,$f1class,$f1,$v1size,$v1class,$v1);
    $content .= "\n";
    $content .= field($f2size,$f2class,$f2,$v2size,$v2class,$v2);
    $content .= "\n";
    $content .=	"</div>";
    echo $content;
}

function field_3($rc,$f1size,$v1size,$f2size,$v2size,$f3size,$v3size,$f1class,$f2class,$f3class,$v1class,$v2class,$v3class,$f1,$v1,$f2,$v2,$f3,$v3)	
{
    $content  =  "<div class=\"row $rc\">";
    $content .= "\n";
    $content .= field($f1size,$f1class,$f1,$v1size,$v1class,$v1);
    $content .= "\n";
    $content .= field($f2size,$f2class,$f2,$v2size,$v2class,$v2);
    $content .= "\n";
    $content .= field($f3size,$f3class,$f3,$v3size,$v3class,$v3);    
    $content .= "\n";
    $content .=	"</div>";
    echo $content;
}



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blank Page - MTC</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>MTC</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html"><i
                                class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="profile.html"><i
                                class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="table.html"><i
                                class="fas fa-table"></i><span>Table</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.html"><i
                                class="far fa-user-circle"></i><span>Login</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="register.html"><i
                                class="fas fa-user-circle"></i><span>Register</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
                        id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">

                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3"
                            id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form
                            class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text"
                                    placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i
                                            class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                                    data-toggle="dropdown" aria-expanded="false" href="#"><i
                                        class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small"
                                                type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0"
                                                    type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        data-toggle="dropdown" aria-expanded="false" href="#"><span
                                            class="badge badge-danger badge-counter">3+</span><i
                                            class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i
                                                        class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i
                                                        class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i
                                                        class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your
                                                    account.</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All
                                            Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        data-toggle="dropdown" aria-expanded="false" href="#"><i
                                            class="fas fa-envelope fa-fw"></i><span
                                            class="badge badge-danger badge-counter">7</span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                    src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can
                                                        help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                    src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last
                                                        month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                    src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am
                                                        very happy with the progress so far, keep up the good
                                                        work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                    src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is
                                                        because someone told me that people say this to all dogs, even
                                                        if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All
                                            Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right"
                                    aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        data-toggle="dropdown" aria-expanded="false" href="#"><span
                                            class="d-none d-lg-inline mr-2 text-gray-600 small">Valerie Luna</span><img
                                            class="border rounded-circle img-profile"
                                            src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                        <a class="dropdown-item" role="presentation" href="#"><i
                                                class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a
                                            class="dropdown-item" role="presentation" href="#"><i
                                                class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a class="dropdown-item" role="presentation" href="#"><i
                                                class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity
                                            log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation"
                                            href="#"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="container-fluid">
                    <h3 class="text-dark mb-1">Blank Page</h3><br>

                    <h6 class="text-dark mb-1">[col-md-6 col-sm-4] , [col-md-6 col-sm-8]</h6>

                    <?php field_1("","6","borderit","Rfield1","6","borderit","rvalue1")?><br>
                    
                    <h6 class="text-dark mb-1">[col-md-5 col-sm-4] , [col-md-7 col-sm-8]</h6>
                    <?php field_1("","5","borderit","Field1","7","borderit","Value1")?><br>
                    
                    <h6 class="text-dark mb-1">[col-sm-4] , [col-sm-8]</h6>
                    <?php field_1("","4","borderit","Field1","8","borderit","Value1")?><br>

                    <h6 class="text-dark mb-1">[col-md-3 col-sm-4] , [col-md-9 col-sm-8]</h6>
                    <?php field_1("","3","borderit","Field2","9","borderit","Value2")?><br>

                    <h6 class="text-dark mb-1">[col-md-2 col-sm-4] , [col-md-10 col-sm-8]</h6>
                    <?php field_1("","2","borderit","Field2","10","borderit","Value2")?><br>

                    <h6 class="text-dark mb-1">[col-md-1 col-sm-4] , [col-md-11 col-sm-8]</h6>
                    <?php field_1("",1,"borderit","Field3",11,"borderit",123)?><br>


                    <h6 class="text-dark mb-1">{ [col-md-5 col-sm-4] , [col-md-1 col-sm-8] x 2] }</h6>
                    
                    <?php field_2("",5,1,5,1,"borderit","borderit","borderit","borderit","Field1","Value1","Field2","Value2") ?><br>
                    
                    <h6 class="text-dark mb-1">{ [col-md-4 col-sm-4] , [col-md-2 col-sm-8] x 2 }</h6>
                    <?php field_2("",4,2,4,2,"borderit","borderit","borderit","borderit","Field1","Value1","Field2","Value2") ?><br>
                    
                    <h6 class="text-dark mb-1">{ [col-md-3 col-sm-4] , [col-md-3 col-sm-8] x 2 }</h6>
                    <?php field_2("",3,3,3,3,"borderit","borderit","borderit","borderit","Field1","Value1","Field2","Value2") ?><br>
                    
                    <h6 class="text-dark mb-1">{ [col-md-2 col-sm-4] , [col-md-4 col-sm-8] x 2 }</h6>
                    <?php field_2("",2,4,2,4,"borderit","borderit","borderit","borderit","Field1","Value1","Field2","Value2") ?><br>
                    
                    <h6 class="text-dark mb-1">{ [col-md-1 col-sm-4] , [col-md-5 col-sm-8] x 2 }</h6>
                    <?php field_2("",1,5,1,5,"borderit","borderit","borderit","borderit","Field1","Value1","Field2","Value2") ?><br>
                    
                    <h6 class="text-dark mb-1">{ [col-lg-3 col-md-3 col-sm-4] , [col-lg-1 col-md-9 col-sm-8] x 3 }</h6>
                    <?php field_3("",3,1,3,1,3,1,"borderit","borderit","borderit","borderit","borderit","borderit","Field1","Value1","Field2","Value2","Field3","Value3") ?><br>
                    
                    <h6 class="text-dark mb-1">{ [col-lg-2 col-md-3 col-sm-4] , [col-lg-2 col-md-9 col-sm-8] x 3 }</h6>
                    <?php field_3("",2,2,2,2,2,2,"borderit","borderit","borderit","borderit","borderit","borderit","Field1","Value1","Field2","Value2","Field3","Value3") ?><br>
                    
                    <h6 class="text-dark mb-1">{ [col-lg-1 col-md-3 col-sm-4] , [col-lg-3 col-md-9 col-sm-8] x 3 }</h6>
                    <?php field_3("",1,3,1,3,1,3,"borderit","borderit","borderit","borderit","borderit","borderit","Field1","Value1","Field2","Value2","Field3","Value3") ?><br>

                </div>


            </div>

            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © MTC 2020</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>