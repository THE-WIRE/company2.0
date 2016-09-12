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
</div>



<!-- common libraries. required for every page-->
<script src="lib/jquery/dist/jquery.min.js"></script>
<script src="lib/jquery-pjax/jquery.pjax.js"></script>
<script src="lib/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
<script src="lib/widgster/widgster.js"></script>
<script src="lib/underscore/underscore.js"></script>

<!-- common application js -->
<script src="js/app.js"></script>
<script src="js/settings.js"></script>

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

<!-- page specific scripts -->
<!-- page libs -->
<script src="assets/lib/slimScroll/jquery.slimscroll.min.js"></script>

<!-- page application js -->
<script src="assets/js/index.js"></script>

<!-- page template -->


</body>
</html>