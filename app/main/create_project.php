<!DOCTYPE html>
<html>
<head>
    <title>Light Blue - Responsive Admin Dashboard Template</title>

    <link href="assets/css/application.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
         chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
         https://code.google.com/p/chromium/issues/detail?id=332189
         */
    </script>
</head>
<body>

<div class="logo">
    <h4><a href="index.html">Company: <strong>Animation</strong></a></h4>
</div>

<nav id="sidebar" class="sidebar nav-collapse collapse">
    <ul id="side-nav" class="side-nav">
        <li class="active">
            <a href="index.html"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#forms-collapse"><i class="fa fa-pencil"></i> <span class="name">Assign Tasks</span></a>

        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#stats-collapse"><i class="fa fa-area-chart"></i> <span class="name">Artists</span></a>

        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#ui-collapse"><i class="fa fa-magic"></i> <span class="name">Assign Roles</span></a>

        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#components-collapse"><i class="fa fa-tree"></i> <span class="name">Shots</span></a>

        </li>



        <li class="visible-xs">
            <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
        </li>
    </ul>
</nav>


<div class="wrap">
    <header class="page-header">
        <div class="navbar">
            <ul class="nav navbar-nav navbar-right pull-right">
                <li class="visible-phone-landscape">
                    <a href="#" id="search-toggle">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" title="Messages" id="messages"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="glyphicon glyphicon-comment"></i>
                    </a>

                <li class="dropdown">
                    <a href="#" title="8 support tickets"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="glyphicon glyphicon-globe"></i>
                        <span class="count">8</span>
                    </a>

                </li>
                <li class="divider"></li>
                <li class="hidden-xs">
                    <a href="#" id="settings"
                       title="Settings"
                       data-toggle="popover"
                       data-placement="bottom">
                        <i class="glyphicon glyphicon-cog"></i>
                    </a>
                </li>
                <li class="hidden-xs dropdown">
                    <a href="#" title="Account" id="account"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                    </a>
                    <ul id="account-menu" class="dropdown-menu account" role="menu">

                    </ul>
                </li>
                <li class="visible-xs">
                    <a href="#"
                       class="btn-navbar"
                       data-toggle="collapse"
                       data-target=".sidebar"
                       title="">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <li class="hidden-xs"><a href="login.html"><i class="glyphicon glyphicon-off"></i></a></li>
            </ul>
            <form id="search-form" class="navbar-form pull-right" role="search">
                <input type="search" class="form-control search-query" placeholder="Search...">
            </form>

        </div>
    </header>


    <div class="logo">
        <h4><a href="index.html">Light <strong>Blue</strong></a></h4>
    </div>
    <div >
        <div class="content container">
            <h2 class="page-title">Create <em>Project</em></h2>
            <div class="row">
                <div class="col-md-12 ">
                    <section class="widget">
                        <header>
                            <h4>
                                <i class="fa fa-windows"></i>

                            </h4>
                            <p class="text-muted"></p>
                            <div class="widget-controls">
                                <a title="Options" href="#"><i class="glyphicon glyphicon-cog"></i></a>
                                <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>
                                <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                                <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </header>
                        <div class="body">
                            <div id="wizard" class="form-wizard">
                                <ul class="wizard-navigation nav-justified">
                                    <li><a href="#tab1" data-toggle="tab"><small>1.</small><strong> Project Details</strong></a></li>
                                    <li><a href="#tab2" data-toggle="tab"><small>2.</small> <strong>Budget Plan</strong></a></li>
                                    <li><a href="#tab3" data-toggle="tab"><small>3.</small> <strong>Role Assign</strong></a></li>
                                    <li><a href="#tab4" data-toggle="tab"><small>4.</small> <strong>List Project</strong></a></li>
                                    <li><a href="#tab5" data-toggle="tab"><small>5.</small> <strong>Thank you!</strong></a></li>
                                </ul>
                                <div id="bar" class="progress progress-small">
                                    <div class="progress-bar progress-bar-inverse"></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab1">
                                        <form class="form-horizontal mt-sm" action='' method="POST">
                                            <fieldset>
                                                <div class="form-group">
                                                    <!-- ID -->
                                                    <label class="control-label col-md-3"  for="project">Project Type ID:</label>
                                                    <div class="col-md-8">
                                                        <div class="col-md-10">
                                                            <input type="text" id="project" name="project" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- Name -->
                                                    <label class="control-label col-md-3"  for="name">Project Name:</label>
                                                    <div class="col-md-8">
                                                        <div class="col-md-10">
                                                            <input type="text" id="name" name="name" placeholder="" class="form-control">
                                                            <span class="help-block">Project name can contain any letters  without spaces</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- Short Description -->
                                                    <label class="control-label col-md-3"  for="desc">Project Name:</label>
                                                    <div class="col-md-8">
                                                        <div class="col-md-10">
                                                            <input type="text" id="desc" name="desc" placeholder="" class="form-control">
                                                            <span class="help-block">Description can contain short number of letters </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <form class="form-horizontal mt-sm" action='' method="POST">
                                            <fieldset>
                                                <div class="form-group">
                                                    <!-- Requirements -->
                                                    <label class="control-label col-md-3"  for="req">Requirements</label>
                                                    <div class="col-md-8">
                                                        <div class="col-md-10">
                                                            <input type="text" id="req" name="req" placeholder="" class="form-control">
                                                            <span class="help-block">Description can contain short number of letters </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <!-- Amount-->
                                                    <label class="control-label col-md-3"  for="amt">Amount</label>
                                                    <div class="col-md-8">
                                                        <div class="col-md-10">
                                                            <input type="text" id="amt" name="amt" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <form class="form-horizontal mt-sm" action='' method="POST">
                                            <fieldset>
                                                <div class="form-group">
                                                    <!-- Role -->
                                                    <label class="control-label col-md-3"  for="rid">Role ID:</label>
                                                    <div class="col-md-8">
                                                        <div class="col-md-10">
                                                            <input type="text" id="rid" name="rid" placeholder="" class="form-control">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- Role Type -->
                                                    <label class="control-label col-md-3"  for="rtyp">Role Name:</label>
                                                    <div class="col-md-8">
                                                        <div class="col-md-10">
                                                            <input type="text" id="rtyp" name="rtyp" placeholder="" class="form-control">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- Role Description -->
                                                    <label class="control-label col-md-3"  for="rdesc">Role Desc:</label>
                                                    <div class="col-md-8">
                                                        <div class="col-md-10">
                                                            <input type="text" id="rdesc" name="rdesc" placeholder="" class="form-control">
                                                            <span class="help-block">Description can contain short number of letters </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <section class="widget">
                                                        <header>
                                                            <h5>Role <span class="fw-semi-bold">Maintainence</span></h5>
                                                            <div class="widget-controls">
                                                                <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                                                                <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                                                            </div>
                                                        </header>
                                                        <div class="body">
                                                            <table class="table table-bordered table-lg mt-lg mb-0">
                                                                <thead>
                                                                <tr>
                                                                    <th>

                                                                    </th>
                                                                    <th class="text-align-center">Project</th>
                                                                    <th class="text-align-center">Asset</th>
                                                                    <th class="text-align-center">Shot</th>
                                                                    <th class="text-align-center">Task</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td class="text-align-center">Artist</td>
                                                                    <td class="text-align-center col-md-3">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox111" type="checkbox" >
                                                                            <label for="checkbox111"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox112" type="checkbox" >
                                                                            <label for="checkbox112"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox113" type="checkbox" >
                                                                            <label for="checkbox113"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-align-center col-md-3">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox121" type="checkbox" >
                                                                            <label for="checkbox121"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox122" type="checkbox" >
                                                                            <label for="checkbox122"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox123" type="checkbox" >
                                                                            <label for="checkbox123"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-align-center col-md-3">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox131" type="checkbox" >
                                                                            <label for="checkbox131"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox132" type="checkbox" >
                                                                            <label for="checkbox132"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox133" type="checkbox" >
                                                                            <label for="checkbox133"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-align-center col-md-12">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox141" type="checkbox" >
                                                                            <label for="checkbox141"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox142" type="checkbox" >
                                                                            <label for="checkbox142"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox143" type="checkbox" >
                                                                            <label for="checkbox143"></label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-align-center">Supervisor</td>
                                                                    <td class="text-align-center col-md-3">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox211" type="checkbox" >
                                                                            <label for="checkbox211"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox212" type="checkbox" >
                                                                            <label for="checkbox212"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox213" type="checkbox" >
                                                                            <label for="checkbox213"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-align-center col-md-3">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox221" type="checkbox" >
                                                                            <label for="checkbox221"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox222" type="checkbox" >
                                                                            <label for="checkbox222"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox223" type="checkbox" >
                                                                            <label for="checkbox223"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-align-center col-md-3">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox231" type="checkbox" >
                                                                            <label for="checkbox231"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox232" type="checkbox" >
                                                                            <label for="checkbox232"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox233" type="checkbox" >
                                                                            <label for="checkbox233"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-align-center col-md-3">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox241" type="checkbox" >
                                                                            <label for="checkbox241"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox242" type="checkbox" >
                                                                            <label for="checkbox242"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox243" type="checkbox" >
                                                                            <label for="checkbox243"></label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-align-center">Lead</td>
                                                                    <td class="text-align-center col-md-3">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox311" type="checkbox" >
                                                                            <label for="checkbox311"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox312" type="checkbox" >
                                                                            <label for="checkbox312"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox313" type="checkbox" >
                                                                            <label for="checkbox313"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-align-center col-md-3">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox321" type="checkbox" >
                                                                            <label for="checkbox321"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox322" type="checkbox" >
                                                                            <label for="checkbox322"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox323" type="checkbox" >
                                                                            <label for="checkbox323"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-align-center col-md-3">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox331" type="checkbox" >
                                                                            <label for="checkbox331"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox332" type="checkbox" >
                                                                            <label for="checkbox332"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox333" type="checkbox" >
                                                                            <label for="checkbox333"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-align-center col-md-3">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox341" type="checkbox" >
                                                                            <label for="checkbox341"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox342" type="checkbox" >
                                                                            <label for="checkbox342"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox343" type="checkbox" >
                                                                            <label for="checkbox343"></label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-align-center">Management</td>
                                                                    <td class="text-align-center col-md-3">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox411" type="checkbox" >
                                                                            <label for="checkbox411"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox412" type="checkbox" >
                                                                            <label for="checkbox412"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox413" type="checkbox" >
                                                                            <label for="checkbox413"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-align-center col-md-3">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox421" type="checkbox" >
                                                                            <label for="checkbox421"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox422" type="checkbox" >
                                                                            <label for="checkbox422"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox423" type="checkbox" >
                                                                            <label for="checkbox423"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-align-center col-md-3">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox431" type="checkbox" >
                                                                            <label for="checkbox431"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox432" type="checkbox" >
                                                                            <label for="checkbox432"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox433" type="checkbox" >
                                                                            <label for="checkbox433"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-align-center col-md-3">
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox441" type="checkbox" >
                                                                            <label for="checkbox441"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox442" type="checkbox" >
                                                                            <label for="checkbox442"></label>
                                                                        </div>
                                                                        <div class="checkbox col-md-4">
                                                                            <input id="checkbox443" type="checkbox" >
                                                                            <label for="checkbox443"></label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </section>
                                                 </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab4">
                                        <form class="form-horizontal mt-sm" action='' method="POST">
                                            <fieldset>
                                                <div class="form-group">
                                                    <!-- List -->

                                                    <div class="content container">
                                                        <h2 class="page-title">Projects - <span class="fw-semi-bold"></span></h2>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <section class="widget">

                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>First Name</th>
                                                                                <th>Last Name</th>
                                                                                <th>Email</th>
                                                                                <th>Status</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td><a href="#">ottoto@example.com</a></td>
                                                                                <td><span class="badge bg-gray-lighter text-gray fw-semi-bold">Pending</span></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>2</td>
                                                                                <td>Jacob</td>
                                                                                <td>Thornton</td>
                                                                                <td><a href="#">fat.thor@example.com</a></td>
                                                                                <td><span class="badge bg-gray-lighter text-gray-light">Unconfirmed</span></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>

                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab5">
                                        <h2>Thank you!</h2>
                                        <p class="mb-lg">Your submission has been received.</p>
                                    </div>
                                    <div class="description ml mr mt-n-md">
                                        <ul class="pager wizard">
                                            <li class="previous">
                                                <button class="btn btn-primary pull-left"><i class="fa fa-caret-left"></i> Previous</button>
                                            </li>
                                            <li class="next">
                                                <button class="btn btn-primary pull-right" >Next <i class="fa fa-caret-right"></i></button>
                                            </li>
                                            <li class="finish" style="display: none">
                                                <button class="btn btn-success pull-right" >Finish <i class="fa fa-check"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
    </div>



<!-- common libraries. required for every page-->
<script src="assets/lib/jquery/dist/jquery.min.js"></script>
<script src="assets/lib/jquery-pjax/jquery.pjax.js"></script>
<script src="assets/lib/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
<script src="assets/lib/widgster/widgster.js"></script>
<script src="assets/lib/underscore/underscore.js"></script>

<!-- common application js -->
<script src="assets/js/app.js"></script>
<script src="assets/js/settings.js"></script>

<!-- common templates -->
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Light Version</div>
        <div>
            <a href="../light/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="../white/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

<!-- page libs -->
<script src="assets/lib/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="assets/lib/select2/select2.min.js"></script>
<script src="assets/lib/jquery.maskedinput/dist/jquery.maskedinput.min.js"></script>
<script src="assets/lib/moment/moment.js"></script>
<script src="assets/lib/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/lib/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

<!-- common application js -->
<script src="assets/js/create.js"></script>

</body>
</html>