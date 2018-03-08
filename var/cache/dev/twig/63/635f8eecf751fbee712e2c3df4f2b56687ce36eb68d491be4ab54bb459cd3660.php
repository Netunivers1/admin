<?php

/* AdminBundle:Default:pages.html.twig */
class __TwigTemplate_682b0140963239012dfd15d6aebbfd70b20007ed8ff4bcadaf2e3b4d70af0ad8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Default:pages.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac7a559c6b6ee66e3b264fd2211959fdd96ddb4bc30b15c58aff81ce465bf4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7a559c6b6ee66e3b264fd2211959fdd96ddb4bc30b15c58aff81ce465bf4d6->enter($__internal_ac7a559c6b6ee66e3b264fd2211959fdd96ddb4bc30b15c58aff81ce465bf4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac7a559c6b6ee66e3b264fd2211959fdd96ddb4bc30b15c58aff81ce465bf4d6->leave($__internal_ac7a559c6b6ee66e3b264fd2211959fdd96ddb4bc30b15c58aff81ce465bf4d6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_291b08a594ce5819422ec0a55893284926752051a7cd0e308ceb840642fe44f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291b08a594ce5819422ec0a55893284926752051a7cd0e308ceb840642fe44f4->enter($__internal_291b08a594ce5819422ec0a55893284926752051a7cd0e308ceb840642fe44f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"page-wrapper\">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class=\"container-fluid\">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        ";
        // line 13
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 24
        echo "        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class=\"row\">
            <div class=\"col-md-12 col-4 align-self-center\">
                <a 
                    href=\"#\" 
                    class=\"btn waves-effect waves-light btn-primary pull-left hidden-sm-down\"
                >
                    Ajouter une page
                </a>
            </div>
        </div><br>
        <div class=\"row\">
            <!-- column -->
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">Toutes les pages</h4>
                        <hr>
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Contact</td>
                                        <td>Contact</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class=\"footer\"> © 2018 netunivers pro</footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>

";
        
        $__internal_291b08a594ce5819422ec0a55893284926752051a7cd0e308ceb840642fe44f4->leave($__internal_291b08a594ce5819422ec0a55893284926752051a7cd0e308ceb840642fe44f4_prof);

    }

    // line 13
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b4922159ba2c18fc3501bdcc5a057a679b9ad0de6d0aca4af918ba01b27f2f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4922159ba2c18fc3501bdcc5a057a679b9ad0de6d0aca4af918ba01b27f2f17->enter($__internal_b4922159ba2c18fc3501bdcc5a057a679b9ad0de6d0aca4af918ba01b27f2f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 14
        echo "        <div class=\"row page-titles\">
            <div class=\"col-md-5 col-8 align-self-center\">
                <h3 class=\"text-themecolor\">Tableau de bord</h3>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\">Pages</li>
                </ol>
            </div>
        </div>
        ";
        
        $__internal_b4922159ba2c18fc3501bdcc5a057a679b9ad0de6d0aca4af918ba01b27f2f17->leave($__internal_b4922159ba2c18fc3501bdcc5a057a679b9ad0de6d0aca4af918ba01b27f2f17_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 18,  130 => 14,  124 => 13,  54 => 24,  52 => 13,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

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
                    <li class=\"breadcrumb-item active\">Pages</li>
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
            <div class=\"col-md-12 col-4 align-self-center\">
                <a 
                    href=\"#\" 
                    class=\"btn waves-effect waves-light btn-primary pull-left hidden-sm-down\"
                >
                    Ajouter une page
                </a>
            </div>
        </div><br>
        <div class=\"row\">
            <!-- column -->
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">Toutes les pages</h4>
                        <hr>
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Contact</td>
                                        <td>Contact</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class=\"footer\"> © 2018 netunivers pro</footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>

{% endblock %}", "AdminBundle:Default:pages.html.twig", "/opt/lampp/htdocs/admin/src/AdminBundle/Resources/views/Default/pages.html.twig");
    }
}
