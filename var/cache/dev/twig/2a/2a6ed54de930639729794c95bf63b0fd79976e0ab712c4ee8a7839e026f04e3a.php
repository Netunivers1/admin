<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_009aa3123a18d56188933b5d6b36877ae1c28f1077f6db993f4898d715af6d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83edadedb45ad2bb3d327a74d2647177edf5607609aa5f955465c2a1d356d4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83edadedb45ad2bb3d327a74d2647177edf5607609aa5f955465c2a1d356d4b6->enter($__internal_83edadedb45ad2bb3d327a74d2647177edf5607609aa5f955465c2a1d356d4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83edadedb45ad2bb3d327a74d2647177edf5607609aa5f955465c2a1d356d4b6->leave($__internal_83edadedb45ad2bb3d327a74d2647177edf5607609aa5f955465c2a1d356d4b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_358a76d78ec099f16718f7a3280faa15f891e42f9c1de51f3eed248f0def959b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358a76d78ec099f16718f7a3280faa15f891e42f9c1de51f3eed248f0def959b->enter($__internal_358a76d78ec099f16718f7a3280faa15f891e42f9c1de51f3eed248f0def959b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_358a76d78ec099f16718f7a3280faa15f891e42f9c1de51f3eed248f0def959b->leave($__internal_358a76d78ec099f16718f7a3280faa15f891e42f9c1de51f3eed248f0def959b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_91c4d812cf207384193de86758b8774fc8b51b4607414a4933ea0da210951ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c4d812cf207384193de86758b8774fc8b51b4607414a4933ea0da210951ce0->enter($__internal_91c4d812cf207384193de86758b8774fc8b51b4607414a4933ea0da210951ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_91c4d812cf207384193de86758b8774fc8b51b4607414a4933ea0da210951ce0->leave($__internal_91c4d812cf207384193de86758b8774fc8b51b4607414a4933ea0da210951ce0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e30110c9a5244c49680edbfd0aa4df48cb328e90cf180e9a952e351deabed5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e30110c9a5244c49680edbfd0aa4df48cb328e90cf180e9a952e351deabed5d->enter($__internal_5e30110c9a5244c49680edbfd0aa4df48cb328e90cf180e9a952e351deabed5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5e30110c9a5244c49680edbfd0aa4df48cb328e90cf180e9a952e351deabed5d->leave($__internal_5e30110c9a5244c49680edbfd0aa4df48cb328e90cf180e9a952e351deabed5d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/admin/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
