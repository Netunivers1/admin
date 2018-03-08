<?php

/* ::base.html.twig */
class __TwigTemplate_c4aca2e3b5ad0e14beffd35fa322fd246cd12eb8e534c24cfada81bbda58b0ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ea649b6149bb406f4aca04ecb5737ff65b939ce20c237844e2e73b435988c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea649b6149bb406f4aca04ecb5737ff65b939ce20c237844e2e73b435988c23->enter($__internal_6ea649b6149bb406f4aca04ecb5737ff65b939ce20c237844e2e73b435988c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../assets/images/favicon.png\">
    <title>Netunivers Pro</title>
    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- chartist CSS -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/chartist-js/dist/chartist.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/chartist-js/dist/chartist-init.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--This page css - Morris CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/c3-master/c3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- You can change the theme colors from here -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/colors/blue.css"), "html", null, true);
        echo "\" id=\"theme\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->
</head>

<body class=\"fix-header fix-sidebar card-no-border\">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class=\"preloader\">
        <svg class=\"circular\" viewBox=\"25 25 50 50\">
            <circle class=\"path\" cx=\"50\" cy=\"50\" r=\"20\" fill=\"none\" stroke-width=\"2\" stroke-miterlimit=\"10\" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <div id=\"main-wrapper\">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        ";
        // line 50
        $this->displayBlock('header', $context, $blocks);
        // line 117
        echo "        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        ";
        // line 123
        $this->displayBlock('sidebar', $context, $blocks);
        // line 183
        echo "        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        ";
        // line 189
        $this->displayBlock('content', $context, $blocks);
        // line 513
        echo "        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <!--Wave Effects -->
    <script src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/waves.js"), "html", null, true);
        echo "\"></script>
    <!--Menu sidebar -->
    <script src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
    <!--stickey kit -->
    <script src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
    <!--Custom JavaScript -->
    <script src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src=\"";
        // line 542
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/chartist-js/dist/chartist.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"), "html", null, true);
        echo "\"></script>
    <!--c3 JavaScript -->
    <script src=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/d3/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 546
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/c3-master/c3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Chart JS -->
    <script src=\"";
        // line 548
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dashboard1.js"), "html", null, true);
        echo "\"></script>
</body>

</html>
";
        
        $__internal_6ea649b6149bb406f4aca04ecb5737ff65b939ce20c237844e2e73b435988c23->leave($__internal_6ea649b6149bb406f4aca04ecb5737ff65b939ce20c237844e2e73b435988c23_prof);

    }

    // line 50
    public function block_header($context, array $blocks = array())
    {
        $__internal_fd7ba543728596c822d5b5ca1118b1d4b21f02da4e36708c7ce36f956d84b5bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7ba543728596c822d5b5ca1118b1d4b21f02da4e36708c7ce36f956d84b5bf->enter($__internal_fd7ba543728596c822d5b5ca1118b1d4b21f02da4e36708c7ce36f956d84b5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 51
        echo "        <header class=\"topbar\">
            <nav class=\"navbar top-navbar navbar-toggleable-sm navbar-light\">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                            
                            <!-- Light Logo icon -->
                            <img 
                                src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo-light-icon.png"), "html", null, true);
        echo "\" 
                                alt=\"homepage\" 
                                class=\"light-logo\" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span style=\"color: white;font-weight: bold;\">                         
                        <!-- Light Logo text -->    
                        <!-- <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo-light-text.png"), "html", null, true);
        echo "\" class=\"light-logo\" alt=\"homepage\" /> -->
                            Netuniers Pro
                        </span> 
                     </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class=\"navbar-collapse\">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class=\"navbar-nav mr-auto mt-md-0\">
                        <!-- This is  -->
                        <li class=\"nav-item\"> <a class=\"nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"mdi mdi-menu\"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=\"nav-item hidden-sm-down search-box\"> <a class=\"nav-link hidden-sm-down text-muted waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                            <form class=\"app-search\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search & enter\"> <a class=\"srh-btn\"><i class=\"ti-close\"></i></a> </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class=\"navbar-nav my-lg-0\">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle text-muted waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <!-- <img 
                                    src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/1.jpg"), "html", null, true);
        echo "\" 
                                    alt=\"user\" 
                                    class=\"profile-pic m-r-10\" 
                                /> -->
                                Utlisateur
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        ";
        
        $__internal_fd7ba543728596c822d5b5ca1118b1d4b21f02da4e36708c7ce36f956d84b5bf->leave($__internal_fd7ba543728596c822d5b5ca1118b1d4b21f02da4e36708c7ce36f956d84b5bf_prof);

    }

    // line 123
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_61e6b42b2dc239ac8abe8d6c5db5761d32d5bd49404711257189008f092ce603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e6b42b2dc239ac8abe8d6c5db5761d32d5bd49404711257189008f092ce603->enter($__internal_61e6b42b2dc239ac8abe8d6c5db5761d32d5bd49404711257189008f092ce603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 124
        echo "        <aside class=\"left-sidebar\">
            <!-- Sidebar scroll-->
            <div class=\"scroll-sidebar\">
                <!-- Sidebar navigation-->
                <nav class=\"sidebar-nav\">
                    <ul id=\"sidebarnav\">
                        <li> 
                            <a 
                                class=\"waves-effect waves-dark\" 
                                href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"
                                aria-expanded=\"false\"
                            >
                                <i class=\"mdi mdi-gauge\"></i>
                                <span class=\"hide-menu\">
                                    Tableau de bord
                                </span>
                            </a>
                        </li>
                        <li> 
                            <a class=\"waves-effect waves-dark\" href=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("menus");
        echo "\" aria-expanded=\"false\">
                                <i class=\"mdi mdi-account-check\"></i>
                                <span class=\"hide-menu\">Menu</span>
                            </a>
                        </li>
                        <li> 
                            <a class=\"waves-effect waves-dark\" href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages");
        echo "\" aria-expanded=\"false\">
                                <i class=\"mdi mdi-table\"></i>
                                <span class=\"hide-menu\">Page</span>
                            </a>
                        </li>
                        <li> 
                            <a class=\"waves-effect waves-dark\" href=\"#\" aria-expanded=\"false\">
                                <i class=\"mdi mdi-emoticon\"></i>
                                <span class=\"hide-menu\">Icons</span>
                            </a>
                        </li>
                        <li> 
                            <a class=\"waves-effect waves-dark\" href=\"#\" aria-expanded=\"false\">
                                <i class=\"mdi mdi-earth\"></i>
                                <span class=\"hide-menu\">Google Map</span>
                            </a>
                        </li>
                        <!-- <li> <a class=\"waves-effect waves-dark\" href=\"pages-blank.html\" aria-expanded=\"false\"><i class=\"mdi mdi-book-open-variant\"></i><span class=\"hide-menu\">Blank Page</span></a>
                        </li>
                        <li> <a class=\"waves-effect waves-dark\" href=\"pages-error-404.html\" aria-expanded=\"false\"><i class=\"mdi mdi-help-circle\"></i><span class=\"hide-menu\">Error 404</span></a> -->
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class=\"sidebar-footer\">
                <!-- item--><a href=\"\" class=\"link\" data-toggle=\"tooltip\" title=\"Settings\"><i class=\"ti-settings\"></i></a>
                <!-- item--><a href=\"\" class=\"link\" data-toggle=\"tooltip\" title=\"Email\"><i class=\"mdi mdi-gmail\"></i></a>
                <!-- item--><a href=\"\" class=\"link\" data-toggle=\"tooltip\" title=\"Logout\"><i class=\"mdi mdi-power\"></i></a> </div>
            <!-- End Bottom points-->
        </aside>
        ";
        
        $__internal_61e6b42b2dc239ac8abe8d6c5db5761d32d5bd49404711257189008f092ce603->leave($__internal_61e6b42b2dc239ac8abe8d6c5db5761d32d5bd49404711257189008f092ce603_prof);

    }

    // line 189
    public function block_content($context, array $blocks = array())
    {
        $__internal_63996431f20697dcebdcf3789ff370c7d43f08ea8b7b3cd6aabaa0a360ce74a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63996431f20697dcebdcf3789ff370c7d43f08ea8b7b3cd6aabaa0a360ce74a6->enter($__internal_63996431f20697dcebdcf3789ff370c7d43f08ea8b7b3cd6aabaa0a360ce74a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 190
        echo "        <div class=\"page-wrapper\">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class=\"container-fluid\">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                ";
        // line 198
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 209
        echo "                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class=\"row\">
                    <!-- Column -->
                    <div class=\"col-lg-8 col-md-7\">
                        <div class=\"card\">
                            <div class=\"card-block\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"d-flex flex-wrap\">
                                            <div>
                                                <h3 class=\"card-title\">Sales Overview</h3>
                                                <h6 class=\"card-subtitle\">Ample Admin Vs Pixel Admin</h6> </div>
                                            <div class=\"ml-auto\">
                                                <ul class=\"list-inline\">
                                                    <li>
                                                        <h6 class=\"text-muted text-success\"><i class=\"fa fa-circle font-10 m-r-10 \"></i>Ample</h6> </li>
                                                    <li>
                                                        <h6 class=\"text-muted  text-info\"><i class=\"fa fa-circle font-10 m-r-10\"></i>Pixel</h6> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"amp-pxl\" style=\"height: 360px;\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-5\">
                        <div class=\"card\">
                            <div class=\"card-block\">
                                <h3 class=\"card-title\">Our Visitors </h3>
                                <h6 class=\"card-subtitle\">Different Devices Used to Visit</h6>
                                <div id=\"visitor\" style=\"height:290px; width:100%;\"></div>
                            </div>
                            <div>
                                <hr class=\"m-t-0 m-b-0\">
                            </div>
                            <div class=\"card-block text-center \">
                                <ul class=\"list-inline m-b-0\">
                                    <li>
                                        <h6 class=\"text-muted text-info\"><i class=\"fa fa-circle font-10 m-r-10 \"></i>Mobile</h6> </li>
                                    <li>
                                        <h6 class=\"text-muted  text-primary\"><i class=\"fa fa-circle font-10 m-r-10\"></i>Desktop</h6> </li>
                                    <li>
                                        <h6 class=\"text-muted  text-success\"><i class=\"fa fa-circle font-10 m-r-10\"></i>Tablet</h6> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class=\"row\">
                    <!-- Column -->
                    <div class=\"col-lg-4 col-xlg-3 col-md-5\">
                        <!-- Column -->
                        <div class=\"card\">
                            <img class=\"card-img-top\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/background/profile-bg.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                            <div class=\"card-block little-profile text-center\">
                                <div class=\"pro-img\"><img src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/4.jpg"), "html", null, true);
        echo "\" alt=\"user\" /></div>
                                <h3 class=\"m-b-0\">Angela Dominic</h3>
                                <p>Web Designer &amp; Developer</p>
                                <a href=\"javascript:void(0)\" class=\"m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded\">Follow</a>
                                <div class=\"row text-center m-t-20\">
                                    <div class=\"col-lg-4 col-md-4 m-t-20\">
                                        <h3 class=\"m-b-0 font-light\">1099</h3><small>Articles</small></div>
                                    <div class=\"col-lg-4 col-md-4 m-t-20\">
                                        <h3 class=\"m-b-0 font-light\">23,469</h3><small>Followers</small></div>
                                    <div class=\"col-lg-4 col-md-4 m-t-20\">
                                        <h3 class=\"m-b-0 font-light\">6035</h3><small>Following</small></div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class=\"card\">
                            <div class=\"card-block bg-info\">
                                <h4 class=\"text-white card-title\">My Contacts</h4>
                                <h6 class=\"card-subtitle text-white m-b-0 op-5\">Checkout my contacts here</h6>
                            </div>
                            <div class=\"card-block\">
                                <div class=\"message-box contact-box\">
                                    <h2 class=\"add-ct-btn\"><button type=\"button\" class=\"btn btn-circle btn-lg btn-success waves-effect waves-dark\">+</button></h2>
                                    <div class=\"message-widget contact-widget\">
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/1.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status online pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">info@wrappixel.com</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <img src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/2.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status busy pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Sonu Nigam</h5> <span class=\"mail-desc\">pamela1987@gmail.com</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <span class=\"round\">A</span> <span class=\"profile-status away pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Arijit Sinh</h5> <span class=\"mail-desc\">cruise1298.fiplip@gmail.com</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <img src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/4.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status offline pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">kat@gmail.com</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-8 col-xlg-9 col-md-7\">
                        <div class=\"card\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs profile-tab\" role=\"tablist\">
                                <li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home\" role=\"tab\">Activity</a> </li>
                                <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\">Profile</a> </li>
                                <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#settings\" role=\"tab\">Settings</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"home\" role=\"tabpanel\">
                                    <div class=\"card-block\">
                                        <div class=\"profiletimeline\">
                                            <div class=\"sl-item\">
                                                <div class=\"sl-left\"> <img src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/1.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-circle\"> </div>
                                                <div class=\"sl-right\">
                                                    <div><a href=\"#\" class=\"link\">John Doe</a> <span class=\"sl-date\">5 minutes ago</span>
                                                        <p>assign a new task <a href=\"#\"> Design weblayout</a></p>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-3 col-md-6 m-b-20\"><img src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/big/img1.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-responsive radius\"></div>
                                                            <div class=\"col-lg-3 col-md-6 m-b-20\"><img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/big/img2.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-responsive radius\"></div>
                                                            <div class=\"col-lg-3 col-md-6 m-b-20\"><img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/big/img3.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-responsive radius\"></div>
                                                            <div class=\"col-lg-3 col-md-6 m-b-20\"><img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/big/img4.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-responsive radius\"></div>
                                                        </div>
                                                        <div class=\"like-comm\"> <a href=\"javascript:void(0)\" class=\"link m-r-10\">2 comment</a> <a href=\"javascript:void(0)\" class=\"link m-r-10\"><i class=\"fa fa-heart text-danger\"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class=\"sl-item\">
                                                <div class=\"sl-left\"> <img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/2.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-circle\"> </div>
                                                <div class=\"sl-right\">
                                                    <div> <a href=\"#\" class=\"link\">John Doe</a> <span class=\"sl-date\">5 minutes ago</span>
                                                        <div class=\"m-t-20 row\">
                                                            <div class=\"col-md-3 col-xs-12\"><img src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/big/img1.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-responsive radius\"></div>
                                                            <div class=\"col-md-9 col-xs-12\">
                                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href=\"#\" class=\"btn btn-success\"> Design weblayout</a></div>
                                                        </div>
                                                        <div class=\"like-comm m-t-20\"> <a href=\"javascript:void(0)\" class=\"link m-r-10\">2 comment</a> <a href=\"javascript:void(0)\" class=\"link m-r-10\"><i class=\"fa fa-heart text-danger\"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class=\"sl-item\">
                                                <div class=\"sl-left\"> <img src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/3.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-circle\"> </div>
                                                <div class=\"sl-right\">
                                                    <div><a href=\"#\" class=\"link\">John Doe</a> <span class=\"sl-date\">5 minutes ago</span>
                                                        <p class=\"m-t-10\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class=\"like-comm m-t-20\"> <a href=\"javascript:void(0)\" class=\"link m-r-10\">2 comment</a> <a href=\"javascript:void(0)\" class=\"link m-r-10\"><i class=\"fa fa-heart text-danger\"></i> 5 Love</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class=\"sl-item\">
                                                <div class=\"sl-left\"> <img src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/4.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-circle\"> </div>
                                                <div class=\"sl-right\">
                                                    <div><a href=\"#\" class=\"link\">John Doe</a> <span class=\"sl-date\">5 minutes ago</span>
                                                        <blockquote class=\"m-t-10\">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class=\"tab-pane\" id=\"profile\" role=\"tabpanel\">
                                    <div class=\"card-block\">
                                        <div class=\"row\">
                                            <div class=\"col-md-3 col-xs-6 b-r\"> <strong>Full Name</strong>
                                                <br>
                                                <p class=\"text-muted\">Johnathan Deo</p>
                                            </div>
                                            <div class=\"col-md-3 col-xs-6 b-r\"> <strong>Mobile</strong>
                                                <br>
                                                <p class=\"text-muted\">(123) 456 7890</p>
                                            </div>
                                            <div class=\"col-md-3 col-xs-6 b-r\"> <strong>Email</strong>
                                                <br>
                                                <p class=\"text-muted\">johnathan@admin.com</p>
                                            </div>
                                            <div class=\"col-md-3 col-xs-6\"> <strong>Location</strong>
                                                <br>
                                                <p class=\"text-muted\">London</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class=\"m-t-30\">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <h4 class=\"font-medium m-t-30\">Skill Set</h4>
                                        <hr>
                                        <h5 class=\"m-t-30\">Wordpress <span class=\"pull-right\">80%</span></h5>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:80%; height:6px;\"> <span class=\"sr-only\">50% Complete</span> </div>
                                        </div>
                                        <h5 class=\"m-t-30\">HTML 5 <span class=\"pull-right\">90%</span></h5>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar bg-info\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:90%; height:6px;\"> <span class=\"sr-only\">50% Complete</span> </div>
                                        </div>
                                        <h5 class=\"m-t-30\">jQuery <span class=\"pull-right\">50%</span></h5>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:50%; height:6px;\"> <span class=\"sr-only\">50% Complete</span> </div>
                                        </div>
                                        <h5 class=\"m-t-30\">Photoshop <span class=\"pull-right\">70%</span></h5>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:70%; height:6px;\"> <span class=\"sr-only\">50% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"settings\" role=\"tabpanel\">
                                    <div class=\"card-block\">
                                        <form class=\"form-horizontal form-material\">
                                            <div class=\"form-group\">
                                                <label class=\"col-md-12\">Full Name</label>
                                                <div class=\"col-md-12\">
                                                    <input type=\"text\" placeholder=\"Johnathan Doe\" class=\"form-control form-control-line\">
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"example-email\" class=\"col-md-12\">Email</label>
                                                <div class=\"col-md-12\">
                                                    <input type=\"email\" placeholder=\"johnathan@admin.com\" class=\"form-control form-control-line\" name=\"example-email\" id=\"example-email\">
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"col-md-12\">Password</label>
                                                <div class=\"col-md-12\">
                                                    <input type=\"password\" value=\"password\" class=\"form-control form-control-line\">
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"col-md-12\">Phone No</label>
                                                <div class=\"col-md-12\">
                                                    <input type=\"text\" placeholder=\"123 456 7890\" class=\"form-control form-control-line\">
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"col-md-12\">Message</label>
                                                <div class=\"col-md-12\">
                                                    <textarea rows=\"5\" class=\"form-control form-control-line\"></textarea>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-12\">Select Country</label>
                                                <div class=\"col-sm-12\">
                                                    <select class=\"form-control form-control-line\">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <div class=\"col-sm-12\">
                                                    <button class=\"btn btn-success\">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class=\"footer\"> © 2017 Material Pro Admin by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        ";
        
        $__internal_63996431f20697dcebdcf3789ff370c7d43f08ea8b7b3cd6aabaa0a360ce74a6->leave($__internal_63996431f20697dcebdcf3789ff370c7d43f08ea8b7b3cd6aabaa0a360ce74a6_prof);

    }

    // line 198
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_07fa93240752977afd0e5eef76499948d972e00b7ee7a541abbf3e5e67e5cb53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07fa93240752977afd0e5eef76499948d972e00b7ee7a541abbf3e5e67e5cb53->enter($__internal_07fa93240752977afd0e5eef76499948d972e00b7ee7a541abbf3e5e67e5cb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 199
        echo "                <div class=\"row page-titles\">
                    <div class=\"col-md-5 col-8 align-self-center\">
                        <h3 class=\"text-themecolor\">Tableau de bord</h3>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Accueil</a></li>
                            <li class=\"breadcrumb-item active\">Tableau de bord</li>
                        </ol>
                    </div>
                </div>
                ";
        
        $__internal_07fa93240752977afd0e5eef76499948d972e00b7ee7a541abbf3e5e67e5cb53->leave($__internal_07fa93240752977afd0e5eef76499948d972e00b7ee7a541abbf3e5e67e5cb53_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 203,  751 => 199,  745 => 198,  608 => 383,  595 => 373,  582 => 363,  575 => 359,  564 => 351,  560 => 350,  556 => 349,  552 => 348,  544 => 343,  518 => 320,  503 => 308,  494 => 302,  465 => 276,  460 => 274,  393 => 209,  391 => 198,  381 => 190,  375 => 189,  334 => 149,  325 => 143,  312 => 133,  301 => 124,  295 => 123,  276 => 105,  240 => 72,  229 => 64,  219 => 57,  211 => 51,  205 => 50,  193 => 548,  188 => 546,  184 => 545,  179 => 543,  175 => 542,  167 => 537,  162 => 535,  157 => 533,  152 => 531,  147 => 529,  142 => 527,  138 => 526,  133 => 524,  120 => 513,  118 => 189,  110 => 183,  108 => 123,  100 => 117,  98 => 50,  70 => 25,  65 => 23,  60 => 21,  55 => 19,  51 => 18,  47 => 17,  42 => 15,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../assets/images/favicon.png\">
    <title>Netunivers Pro</title>
    <!-- Bootstrap Core CSS -->
    <link href=\"{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- chartist CSS -->
    <link href=\"{{ asset('assets/plugins/chartist-js/dist/chartist.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/chartist-js/dist/chartist-init.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}\" rel=\"stylesheet\">
    <!--This page css - Morris CSS -->
    <link href=\"{{ asset('assets/plugins/c3-master/c3.min.css') }}\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    <!-- You can change the theme colors from here -->
    <link href=\"{{ asset('css/colors/blue.css') }}\" id=\"theme\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->
</head>

<body class=\"fix-header fix-sidebar card-no-border\">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class=\"preloader\">
        <svg class=\"circular\" viewBox=\"25 25 50 50\">
            <circle class=\"path\" cx=\"50\" cy=\"50\" r=\"20\" fill=\"none\" stroke-width=\"2\" stroke-miterlimit=\"10\" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <div id=\"main-wrapper\">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        {% block header %}
        <header class=\"topbar\">
            <nav class=\"navbar top-navbar navbar-toggleable-sm navbar-light\">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"{{ path('accueil') }}\">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                            
                            <!-- Light Logo icon -->
                            <img 
                                src=\"{{ asset('assets/images/logo-light-icon.png') }}\" 
                                alt=\"homepage\" 
                                class=\"light-logo\" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span style=\"color: white;font-weight: bold;\">                         
                        <!-- Light Logo text -->    
                        <!-- <img src=\"{{ asset('assets/images/logo-light-text.png') }}\" class=\"light-logo\" alt=\"homepage\" /> -->
                            Netuniers Pro
                        </span> 
                     </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class=\"navbar-collapse\">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class=\"navbar-nav mr-auto mt-md-0\">
                        <!-- This is  -->
                        <li class=\"nav-item\"> <a class=\"nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"mdi mdi-menu\"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=\"nav-item hidden-sm-down search-box\"> <a class=\"nav-link hidden-sm-down text-muted waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                            <form class=\"app-search\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search & enter\"> <a class=\"srh-btn\"><i class=\"ti-close\"></i></a> </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class=\"navbar-nav my-lg-0\">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle text-muted waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <!-- <img 
                                    src=\"{{ asset('assets/images/users/1.jpg') }}\" 
                                    alt=\"user\" 
                                    class=\"profile-pic m-r-10\" 
                                /> -->
                                Utlisateur
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        {% endblock %}
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        {% block sidebar %}
        <aside class=\"left-sidebar\">
            <!-- Sidebar scroll-->
            <div class=\"scroll-sidebar\">
                <!-- Sidebar navigation-->
                <nav class=\"sidebar-nav\">
                    <ul id=\"sidebarnav\">
                        <li> 
                            <a 
                                class=\"waves-effect waves-dark\" 
                                href=\"{{ path('accueil') }}\"
                                aria-expanded=\"false\"
                            >
                                <i class=\"mdi mdi-gauge\"></i>
                                <span class=\"hide-menu\">
                                    Tableau de bord
                                </span>
                            </a>
                        </li>
                        <li> 
                            <a class=\"waves-effect waves-dark\" href=\"{{ path('menus') }}\" aria-expanded=\"false\">
                                <i class=\"mdi mdi-account-check\"></i>
                                <span class=\"hide-menu\">Menu</span>
                            </a>
                        </li>
                        <li> 
                            <a class=\"waves-effect waves-dark\" href=\"{{ path('pages') }}\" aria-expanded=\"false\">
                                <i class=\"mdi mdi-table\"></i>
                                <span class=\"hide-menu\">Page</span>
                            </a>
                        </li>
                        <li> 
                            <a class=\"waves-effect waves-dark\" href=\"#\" aria-expanded=\"false\">
                                <i class=\"mdi mdi-emoticon\"></i>
                                <span class=\"hide-menu\">Icons</span>
                            </a>
                        </li>
                        <li> 
                            <a class=\"waves-effect waves-dark\" href=\"#\" aria-expanded=\"false\">
                                <i class=\"mdi mdi-earth\"></i>
                                <span class=\"hide-menu\">Google Map</span>
                            </a>
                        </li>
                        <!-- <li> <a class=\"waves-effect waves-dark\" href=\"pages-blank.html\" aria-expanded=\"false\"><i class=\"mdi mdi-book-open-variant\"></i><span class=\"hide-menu\">Blank Page</span></a>
                        </li>
                        <li> <a class=\"waves-effect waves-dark\" href=\"pages-error-404.html\" aria-expanded=\"false\"><i class=\"mdi mdi-help-circle\"></i><span class=\"hide-menu\">Error 404</span></a> -->
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class=\"sidebar-footer\">
                <!-- item--><a href=\"\" class=\"link\" data-toggle=\"tooltip\" title=\"Settings\"><i class=\"ti-settings\"></i></a>
                <!-- item--><a href=\"\" class=\"link\" data-toggle=\"tooltip\" title=\"Email\"><i class=\"mdi mdi-gmail\"></i></a>
                <!-- item--><a href=\"\" class=\"link\" data-toggle=\"tooltip\" title=\"Logout\"><i class=\"mdi mdi-power\"></i></a> </div>
            <!-- End Bottom points-->
        </aside>
        {% endblock %}
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        {% block content %}
        <div class=\"page-wrapper\">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class=\"container-fluid\">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                {% block breadcrumb %}
                <div class=\"row page-titles\">
                    <div class=\"col-md-5 col-8 align-self-center\">
                        <h3 class=\"text-themecolor\">Tableau de bord</h3>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"{{ path('accueil') }}\">Accueil</a></li>
                            <li class=\"breadcrumb-item active\">Tableau de bord</li>
                        </ol>
                    </div>
                </div>
                {% endblock %}
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class=\"row\">
                    <!-- Column -->
                    <div class=\"col-lg-8 col-md-7\">
                        <div class=\"card\">
                            <div class=\"card-block\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"d-flex flex-wrap\">
                                            <div>
                                                <h3 class=\"card-title\">Sales Overview</h3>
                                                <h6 class=\"card-subtitle\">Ample Admin Vs Pixel Admin</h6> </div>
                                            <div class=\"ml-auto\">
                                                <ul class=\"list-inline\">
                                                    <li>
                                                        <h6 class=\"text-muted text-success\"><i class=\"fa fa-circle font-10 m-r-10 \"></i>Ample</h6> </li>
                                                    <li>
                                                        <h6 class=\"text-muted  text-info\"><i class=\"fa fa-circle font-10 m-r-10\"></i>Pixel</h6> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"amp-pxl\" style=\"height: 360px;\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-5\">
                        <div class=\"card\">
                            <div class=\"card-block\">
                                <h3 class=\"card-title\">Our Visitors </h3>
                                <h6 class=\"card-subtitle\">Different Devices Used to Visit</h6>
                                <div id=\"visitor\" style=\"height:290px; width:100%;\"></div>
                            </div>
                            <div>
                                <hr class=\"m-t-0 m-b-0\">
                            </div>
                            <div class=\"card-block text-center \">
                                <ul class=\"list-inline m-b-0\">
                                    <li>
                                        <h6 class=\"text-muted text-info\"><i class=\"fa fa-circle font-10 m-r-10 \"></i>Mobile</h6> </li>
                                    <li>
                                        <h6 class=\"text-muted  text-primary\"><i class=\"fa fa-circle font-10 m-r-10\"></i>Desktop</h6> </li>
                                    <li>
                                        <h6 class=\"text-muted  text-success\"><i class=\"fa fa-circle font-10 m-r-10\"></i>Tablet</h6> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class=\"row\">
                    <!-- Column -->
                    <div class=\"col-lg-4 col-xlg-3 col-md-5\">
                        <!-- Column -->
                        <div class=\"card\">
                            <img class=\"card-img-top\" src=\"{{ asset('assets/images/background/profile-bg.jpg') }}\" alt=\"Card image cap\">
                            <div class=\"card-block little-profile text-center\">
                                <div class=\"pro-img\"><img src=\"{{ asset('assets/images/users/4.jpg') }}\" alt=\"user\" /></div>
                                <h3 class=\"m-b-0\">Angela Dominic</h3>
                                <p>Web Designer &amp; Developer</p>
                                <a href=\"javascript:void(0)\" class=\"m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded\">Follow</a>
                                <div class=\"row text-center m-t-20\">
                                    <div class=\"col-lg-4 col-md-4 m-t-20\">
                                        <h3 class=\"m-b-0 font-light\">1099</h3><small>Articles</small></div>
                                    <div class=\"col-lg-4 col-md-4 m-t-20\">
                                        <h3 class=\"m-b-0 font-light\">23,469</h3><small>Followers</small></div>
                                    <div class=\"col-lg-4 col-md-4 m-t-20\">
                                        <h3 class=\"m-b-0 font-light\">6035</h3><small>Following</small></div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class=\"card\">
                            <div class=\"card-block bg-info\">
                                <h4 class=\"text-white card-title\">My Contacts</h4>
                                <h6 class=\"card-subtitle text-white m-b-0 op-5\">Checkout my contacts here</h6>
                            </div>
                            <div class=\"card-block\">
                                <div class=\"message-box contact-box\">
                                    <h2 class=\"add-ct-btn\"><button type=\"button\" class=\"btn btn-circle btn-lg btn-success waves-effect waves-dark\">+</button></h2>
                                    <div class=\"message-widget contact-widget\">
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <img src=\"{{ asset('assets/images/users/1.jpg') }}\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status online pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">info@wrappixel.com</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <img src=\"{{ asset('assets/images/users/2.jpg') }}\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status busy pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Sonu Nigam</h5> <span class=\"mail-desc\">pamela1987@gmail.com</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <span class=\"round\">A</span> <span class=\"profile-status away pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Arijit Sinh</h5> <span class=\"mail-desc\">cruise1298.fiplip@gmail.com</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <img src=\"{{ asset('assets/images/users/4.jpg') }}\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status offline pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">kat@gmail.com</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-8 col-xlg-9 col-md-7\">
                        <div class=\"card\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs profile-tab\" role=\"tablist\">
                                <li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home\" role=\"tab\">Activity</a> </li>
                                <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\">Profile</a> </li>
                                <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#settings\" role=\"tab\">Settings</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"home\" role=\"tabpanel\">
                                    <div class=\"card-block\">
                                        <div class=\"profiletimeline\">
                                            <div class=\"sl-item\">
                                                <div class=\"sl-left\"> <img src=\"{{ asset('assets/images/users/1.jpg') }}\" alt=\"user\" class=\"img-circle\"> </div>
                                                <div class=\"sl-right\">
                                                    <div><a href=\"#\" class=\"link\">John Doe</a> <span class=\"sl-date\">5 minutes ago</span>
                                                        <p>assign a new task <a href=\"#\"> Design weblayout</a></p>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-3 col-md-6 m-b-20\"><img src=\"{{ asset('assets/images/big/img1.jpg') }}\" alt=\"user\" class=\"img-responsive radius\"></div>
                                                            <div class=\"col-lg-3 col-md-6 m-b-20\"><img src=\"{{ asset('assets/images/big/img2.jpg') }}\" alt=\"user\" class=\"img-responsive radius\"></div>
                                                            <div class=\"col-lg-3 col-md-6 m-b-20\"><img src=\"{{ asset('assets/images/big/img3.jpg') }}\" alt=\"user\" class=\"img-responsive radius\"></div>
                                                            <div class=\"col-lg-3 col-md-6 m-b-20\"><img src=\"{{ asset('assets/images/big/img4.jpg') }}\" alt=\"user\" class=\"img-responsive radius\"></div>
                                                        </div>
                                                        <div class=\"like-comm\"> <a href=\"javascript:void(0)\" class=\"link m-r-10\">2 comment</a> <a href=\"javascript:void(0)\" class=\"link m-r-10\"><i class=\"fa fa-heart text-danger\"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class=\"sl-item\">
                                                <div class=\"sl-left\"> <img src=\"{{ asset('assets/images/users/2.jpg') }}\" alt=\"user\" class=\"img-circle\"> </div>
                                                <div class=\"sl-right\">
                                                    <div> <a href=\"#\" class=\"link\">John Doe</a> <span class=\"sl-date\">5 minutes ago</span>
                                                        <div class=\"m-t-20 row\">
                                                            <div class=\"col-md-3 col-xs-12\"><img src=\"{{ asset('assets/images/big/img1.jpg') }}\" alt=\"user\" class=\"img-responsive radius\"></div>
                                                            <div class=\"col-md-9 col-xs-12\">
                                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href=\"#\" class=\"btn btn-success\"> Design weblayout</a></div>
                                                        </div>
                                                        <div class=\"like-comm m-t-20\"> <a href=\"javascript:void(0)\" class=\"link m-r-10\">2 comment</a> <a href=\"javascript:void(0)\" class=\"link m-r-10\"><i class=\"fa fa-heart text-danger\"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class=\"sl-item\">
                                                <div class=\"sl-left\"> <img src=\"{{ asset('assets/images/users/3.jpg') }}\" alt=\"user\" class=\"img-circle\"> </div>
                                                <div class=\"sl-right\">
                                                    <div><a href=\"#\" class=\"link\">John Doe</a> <span class=\"sl-date\">5 minutes ago</span>
                                                        <p class=\"m-t-10\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class=\"like-comm m-t-20\"> <a href=\"javascript:void(0)\" class=\"link m-r-10\">2 comment</a> <a href=\"javascript:void(0)\" class=\"link m-r-10\"><i class=\"fa fa-heart text-danger\"></i> 5 Love</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class=\"sl-item\">
                                                <div class=\"sl-left\"> <img src=\"{{ asset('assets/images/users/4.jpg') }}\" alt=\"user\" class=\"img-circle\"> </div>
                                                <div class=\"sl-right\">
                                                    <div><a href=\"#\" class=\"link\">John Doe</a> <span class=\"sl-date\">5 minutes ago</span>
                                                        <blockquote class=\"m-t-10\">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class=\"tab-pane\" id=\"profile\" role=\"tabpanel\">
                                    <div class=\"card-block\">
                                        <div class=\"row\">
                                            <div class=\"col-md-3 col-xs-6 b-r\"> <strong>Full Name</strong>
                                                <br>
                                                <p class=\"text-muted\">Johnathan Deo</p>
                                            </div>
                                            <div class=\"col-md-3 col-xs-6 b-r\"> <strong>Mobile</strong>
                                                <br>
                                                <p class=\"text-muted\">(123) 456 7890</p>
                                            </div>
                                            <div class=\"col-md-3 col-xs-6 b-r\"> <strong>Email</strong>
                                                <br>
                                                <p class=\"text-muted\">johnathan@admin.com</p>
                                            </div>
                                            <div class=\"col-md-3 col-xs-6\"> <strong>Location</strong>
                                                <br>
                                                <p class=\"text-muted\">London</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class=\"m-t-30\">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <h4 class=\"font-medium m-t-30\">Skill Set</h4>
                                        <hr>
                                        <h5 class=\"m-t-30\">Wordpress <span class=\"pull-right\">80%</span></h5>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:80%; height:6px;\"> <span class=\"sr-only\">50% Complete</span> </div>
                                        </div>
                                        <h5 class=\"m-t-30\">HTML 5 <span class=\"pull-right\">90%</span></h5>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar bg-info\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:90%; height:6px;\"> <span class=\"sr-only\">50% Complete</span> </div>
                                        </div>
                                        <h5 class=\"m-t-30\">jQuery <span class=\"pull-right\">50%</span></h5>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:50%; height:6px;\"> <span class=\"sr-only\">50% Complete</span> </div>
                                        </div>
                                        <h5 class=\"m-t-30\">Photoshop <span class=\"pull-right\">70%</span></h5>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:70%; height:6px;\"> <span class=\"sr-only\">50% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"settings\" role=\"tabpanel\">
                                    <div class=\"card-block\">
                                        <form class=\"form-horizontal form-material\">
                                            <div class=\"form-group\">
                                                <label class=\"col-md-12\">Full Name</label>
                                                <div class=\"col-md-12\">
                                                    <input type=\"text\" placeholder=\"Johnathan Doe\" class=\"form-control form-control-line\">
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"example-email\" class=\"col-md-12\">Email</label>
                                                <div class=\"col-md-12\">
                                                    <input type=\"email\" placeholder=\"johnathan@admin.com\" class=\"form-control form-control-line\" name=\"example-email\" id=\"example-email\">
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"col-md-12\">Password</label>
                                                <div class=\"col-md-12\">
                                                    <input type=\"password\" value=\"password\" class=\"form-control form-control-line\">
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"col-md-12\">Phone No</label>
                                                <div class=\"col-md-12\">
                                                    <input type=\"text\" placeholder=\"123 456 7890\" class=\"form-control form-control-line\">
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"col-md-12\">Message</label>
                                                <div class=\"col-md-12\">
                                                    <textarea rows=\"5\" class=\"form-control form-control-line\"></textarea>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-12\">Select Country</label>
                                                <div class=\"col-sm-12\">
                                                    <select class=\"form-control form-control-line\">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <div class=\"col-sm-12\">
                                                    <button class=\"btn btn-success\">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class=\"footer\"> © 2017 Material Pro Admin by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        {% endblock %}
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src=\"{{ asset('assets/plugins/jquery/jquery.min.js') }}\"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=\"{{ asset('assets/plugins/bootstrap/js/tether.min.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=\"{{ asset('js/jquery.slimscroll.js') }}\"></script>
    <!--Wave Effects -->
    <script src=\"{{ asset('js/waves.js') }}\"></script>
    <!--Menu sidebar -->
    <script src=\"{{ asset('js/sidebarmenu.js') }}\"></script>
    <!--stickey kit -->
    <script src=\"{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}\"></script>
    <!--Custom JavaScript -->
    <script src=\"{{ asset('js/custom.min.js') }}\"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src=\"{{ asset('assets/plugins/chartist-js/dist/chartist.min.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}\"></script>
    <!--c3 JavaScript -->
    <script src=\"{{ asset('assets/plugins/d3/d3.min.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/c3-master/c3.min.js') }}\"></script>
    <!-- Chart JS -->
    <script src=\"{{ asset('js/dashboard1.js') }}\"></script>
</body>

</html>
", "::base.html.twig", "/opt/lampp/htdocs/admin/app/Resources/views/base.html.twig");
    }
}
