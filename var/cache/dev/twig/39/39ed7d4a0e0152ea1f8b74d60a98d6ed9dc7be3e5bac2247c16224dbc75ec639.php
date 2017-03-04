<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8a40f30bafe1a7fb4c2a007b5678d926904faeae40270629362723ac10ce4b74 extends Twig_Template
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
        $__internal_d3548cc4baa96e1eecbd73edea2e13015db552ed900c3f152a4c2f16567c3145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3548cc4baa96e1eecbd73edea2e13015db552ed900c3f152a4c2f16567c3145->enter($__internal_d3548cc4baa96e1eecbd73edea2e13015db552ed900c3f152a4c2f16567c3145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3548cc4baa96e1eecbd73edea2e13015db552ed900c3f152a4c2f16567c3145->leave($__internal_d3548cc4baa96e1eecbd73edea2e13015db552ed900c3f152a4c2f16567c3145_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f7d6c7cde192aad95799af5a8eee48ef2b80443531e4a3b87578a7fd7782505e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d6c7cde192aad95799af5a8eee48ef2b80443531e4a3b87578a7fd7782505e->enter($__internal_f7d6c7cde192aad95799af5a8eee48ef2b80443531e4a3b87578a7fd7782505e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f7d6c7cde192aad95799af5a8eee48ef2b80443531e4a3b87578a7fd7782505e->leave($__internal_f7d6c7cde192aad95799af5a8eee48ef2b80443531e4a3b87578a7fd7782505e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b4eb471380d5bfea6e386860ab0fb9a4998a91ceef73aa321126d8cdc3d990f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4eb471380d5bfea6e386860ab0fb9a4998a91ceef73aa321126d8cdc3d990f->enter($__internal_6b4eb471380d5bfea6e386860ab0fb9a4998a91ceef73aa321126d8cdc3d990f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6b4eb471380d5bfea6e386860ab0fb9a4998a91ceef73aa321126d8cdc3d990f->leave($__internal_6b4eb471380d5bfea6e386860ab0fb9a4998a91ceef73aa321126d8cdc3d990f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_335a96717bc5b155bd4517726a57bf907cdcb02e3544d3cfc561cdb53c999ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335a96717bc5b155bd4517726a57bf907cdcb02e3544d3cfc561cdb53c999ca9->enter($__internal_335a96717bc5b155bd4517726a57bf907cdcb02e3544d3cfc561cdb53c999ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_335a96717bc5b155bd4517726a57bf907cdcb02e3544d3cfc561cdb53c999ca9->leave($__internal_335a96717bc5b155bd4517726a57bf907cdcb02e3544d3cfc561cdb53c999ca9_prof);

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

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
