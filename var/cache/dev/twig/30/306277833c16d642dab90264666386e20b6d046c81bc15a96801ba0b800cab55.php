<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_b77329ff471083afee312950c5ce0639b7f68f2afe8f5742c158d09c8a83bfa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Default:index.html.twig", 1);
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
        $__internal_eac418fe264cadef4fde99ffea5daedf6ba111540cca097eee9f5d99635eb026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac418fe264cadef4fde99ffea5daedf6ba111540cca097eee9f5d99635eb026->enter($__internal_eac418fe264cadef4fde99ffea5daedf6ba111540cca097eee9f5d99635eb026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eac418fe264cadef4fde99ffea5daedf6ba111540cca097eee9f5d99635eb026->leave($__internal_eac418fe264cadef4fde99ffea5daedf6ba111540cca097eee9f5d99635eb026_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1255d52c824c3956b4550633e816910dd31a78db06d080b060a520a8970481a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1255d52c824c3956b4550633e816910dd31a78db06d080b060a520a8970481a3->enter($__internal_1255d52c824c3956b4550633e816910dd31a78db06d080b060a520a8970481a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        <div>
        \tEn cours de construction
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
    <footer class=\"footer\"> © 2017 Material Pro Admin by wrappixel.com </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>

";
        
        $__internal_1255d52c824c3956b4550633e816910dd31a78db06d080b060a520a8970481a3->leave($__internal_1255d52c824c3956b4550633e816910dd31a78db06d080b060a520a8970481a3_prof);

    }

    // line 13
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8a867527a56bc084430277093bfe8bf4e93767caa77c7794e70a0da17c3ff3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a867527a56bc084430277093bfe8bf4e93767caa77c7794e70a0da17c3ff3d7->enter($__internal_8a867527a56bc084430277093bfe8bf4e93767caa77c7794e70a0da17c3ff3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 14
        echo "        <div class=\"row page-titles\">
            <div class=\"col-md-5 col-8 align-self-center\">
                <h3 class=\"text-themecolor\">Tableau de bord</h3>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\">Tableau de bord</li>
                </ol>
            </div>
        </div>
        ";
        
        $__internal_8a867527a56bc084430277093bfe8bf4e93767caa77c7794e70a0da17c3ff3d7->leave($__internal_8a867527a56bc084430277093bfe8bf4e93767caa77c7794e70a0da17c3ff3d7_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 18,  93 => 14,  87 => 13,  54 => 24,  52 => 13,  41 => 4,  35 => 3,  11 => 1,);
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
        <div>
        \tEn cours de construction
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
    <footer class=\"footer\"> © 2017 Material Pro Admin by wrappixel.com </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>

{% endblock %}", "AdminBundle:Default:index.html.twig", "/opt/lampp/htdocs/admin/src/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
