<?php

/* AdminBundle:Default:menus.html.twig */
class __TwigTemplate_0d2e43ac7030fc6330bf0729dc7ad8581fb5558f8b0e006976d3328830bacd79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Default:menus.html.twig", 1);
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
        $__internal_7c22dc1c9d5d2ac22d540a744b0f447febadcd24d958a8fbc38a0b91e675f2a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c22dc1c9d5d2ac22d540a744b0f447febadcd24d958a8fbc38a0b91e675f2a8->enter($__internal_7c22dc1c9d5d2ac22d540a744b0f447febadcd24d958a8fbc38a0b91e675f2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:menus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c22dc1c9d5d2ac22d540a744b0f447febadcd24d958a8fbc38a0b91e675f2a8->leave($__internal_7c22dc1c9d5d2ac22d540a744b0f447febadcd24d958a8fbc38a0b91e675f2a8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9ca27e7722696ec51a8ff097a73335706851609d0d6318d75b88c1e38601d5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca27e7722696ec51a8ff097a73335706851609d0d6318d75b88c1e38601d5f3->enter($__internal_9ca27e7722696ec51a8ff097a73335706851609d0d6318d75b88c1e38601d5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        Menus
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
        
        $__internal_9ca27e7722696ec51a8ff097a73335706851609d0d6318d75b88c1e38601d5f3->leave($__internal_9ca27e7722696ec51a8ff097a73335706851609d0d6318d75b88c1e38601d5f3_prof);

    }

    // line 13
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_28ba382440f60057e0ee1c5cab717d90ac37b8b658869223531775d0629ea3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ba382440f60057e0ee1c5cab717d90ac37b8b658869223531775d0629ea3ab->enter($__internal_28ba382440f60057e0ee1c5cab717d90ac37b8b658869223531775d0629ea3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 14
        echo "        <div class=\"row page-titles\">
            <div class=\"col-md-5 col-8 align-self-center\">
                <h3 class=\"text-themecolor\">Tableau de bord</h3>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\">Menus</li>
                </ol>
            </div>
        </div>
        ";
        
        $__internal_28ba382440f60057e0ee1c5cab717d90ac37b8b658869223531775d0629ea3ab->leave($__internal_28ba382440f60057e0ee1c5cab717d90ac37b8b658869223531775d0629ea3ab_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:menus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 18,  91 => 14,  85 => 13,  54 => 24,  52 => 13,  41 => 4,  35 => 3,  11 => 1,);
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
                    <li class=\"breadcrumb-item active\">Menus</li>
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
        Menus
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

{% endblock %}", "AdminBundle:Default:menus.html.twig", "/opt/lampp/htdocs/admin/src/AdminBundle/Resources/views/Default/menus.html.twig");
    }
}
