<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ec3575c1e9b624acb5a1a34267d17db06d51735626bb66f18b0ff604626f3d0a extends Twig_Template
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
        $__internal_2ed2a8c1f8cc69cae065597a692c423fb752dfe1570312e7d80f85c428c8bbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed2a8c1f8cc69cae065597a692c423fb752dfe1570312e7d80f85c428c8bbbd->enter($__internal_2ed2a8c1f8cc69cae065597a692c423fb752dfe1570312e7d80f85c428c8bbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ed2a8c1f8cc69cae065597a692c423fb752dfe1570312e7d80f85c428c8bbbd->leave($__internal_2ed2a8c1f8cc69cae065597a692c423fb752dfe1570312e7d80f85c428c8bbbd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe938b9c13f99eeda5d8604e346efab94bdbf05d73d20cf929a35ebb869c974c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe938b9c13f99eeda5d8604e346efab94bdbf05d73d20cf929a35ebb869c974c->enter($__internal_fe938b9c13f99eeda5d8604e346efab94bdbf05d73d20cf929a35ebb869c974c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe938b9c13f99eeda5d8604e346efab94bdbf05d73d20cf929a35ebb869c974c->leave($__internal_fe938b9c13f99eeda5d8604e346efab94bdbf05d73d20cf929a35ebb869c974c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24f777cf455a206d54f936887a958ea172e6b4019d8f6697a7c79659631cd1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f777cf455a206d54f936887a958ea172e6b4019d8f6697a7c79659631cd1ee->enter($__internal_24f777cf455a206d54f936887a958ea172e6b4019d8f6697a7c79659631cd1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_24f777cf455a206d54f936887a958ea172e6b4019d8f6697a7c79659631cd1ee->leave($__internal_24f777cf455a206d54f936887a958ea172e6b4019d8f6697a7c79659631cd1ee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05c554e2269bccb7f492ad293cb1fdca865e2e7a596baf3a25b55087109baf61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c554e2269bccb7f492ad293cb1fdca865e2e7a596baf3a25b55087109baf61->enter($__internal_05c554e2269bccb7f492ad293cb1fdca865e2e7a596baf3a25b55087109baf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_05c554e2269bccb7f492ad293cb1fdca865e2e7a596baf3a25b55087109baf61->leave($__internal_05c554e2269bccb7f492ad293cb1fdca865e2e7a596baf3a25b55087109baf61_prof);

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
