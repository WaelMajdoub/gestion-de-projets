<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_c53c3620a15cc917f99c1e6d1870ef41fb3f38bddb0639cb7205f646c5c438c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee6c78305cdc2e7848eda907a69b48a7744d7d8d5834e7bdd65a7f7fe86136db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6c78305cdc2e7848eda907a69b48a7744d7d8d5834e7bdd65a7f7fe86136db->enter($__internal_ee6c78305cdc2e7848eda907a69b48a7744d7d8d5834e7bdd65a7f7fe86136db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee6c78305cdc2e7848eda907a69b48a7744d7d8d5834e7bdd65a7f7fe86136db->leave($__internal_ee6c78305cdc2e7848eda907a69b48a7744d7d8d5834e7bdd65a7f7fe86136db_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12ea786ed30ddce74476f5399c3a6fcb6ff848076706498ea07116b2475b542c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ea786ed30ddce74476f5399c3a6fcb6ff848076706498ea07116b2475b542c->enter($__internal_12ea786ed30ddce74476f5399c3a6fcb6ff848076706498ea07116b2475b542c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_12ea786ed30ddce74476f5399c3a6fcb6ff848076706498ea07116b2475b542c->leave($__internal_12ea786ed30ddce74476f5399c3a6fcb6ff848076706498ea07116b2475b542c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
