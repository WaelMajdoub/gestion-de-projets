<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_560949ee2ed5853208d8e3e1c03c44346c73008687d9b02edd22c71a8d2a44ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8866c7cc9d493f5ad72a953d330baa0a0981ea208e52f45ae20425bdb36dd518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8866c7cc9d493f5ad72a953d330baa0a0981ea208e52f45ae20425bdb36dd518->enter($__internal_8866c7cc9d493f5ad72a953d330baa0a0981ea208e52f45ae20425bdb36dd518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8866c7cc9d493f5ad72a953d330baa0a0981ea208e52f45ae20425bdb36dd518->leave($__internal_8866c7cc9d493f5ad72a953d330baa0a0981ea208e52f45ae20425bdb36dd518_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b3ac5ea6ab2cfd7733e06b381a0d0e8bcf4d3312380cfe4a377fd5dcf73cd27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ac5ea6ab2cfd7733e06b381a0d0e8bcf4d3312380cfe4a377fd5dcf73cd27a->enter($__internal_b3ac5ea6ab2cfd7733e06b381a0d0e8bcf4d3312380cfe4a377fd5dcf73cd27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b3ac5ea6ab2cfd7733e06b381a0d0e8bcf4d3312380cfe4a377fd5dcf73cd27a->leave($__internal_b3ac5ea6ab2cfd7733e06b381a0d0e8bcf4d3312380cfe4a377fd5dcf73cd27a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd6877018d40fddb1e72ec2ff7d690e745d9e51b1cbe8831227bc62e9e9d4697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6877018d40fddb1e72ec2ff7d690e745d9e51b1cbe8831227bc62e9e9d4697->enter($__internal_dd6877018d40fddb1e72ec2ff7d690e745d9e51b1cbe8831227bc62e9e9d4697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dd6877018d40fddb1e72ec2ff7d690e745d9e51b1cbe8831227bc62e9e9d4697->leave($__internal_dd6877018d40fddb1e72ec2ff7d690e745d9e51b1cbe8831227bc62e9e9d4697_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_41988222a2b2c2b362024d5d993eb1ca26dbf8b481908c75a7da98de66cb5f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41988222a2b2c2b362024d5d993eb1ca26dbf8b481908c75a7da98de66cb5f70->enter($__internal_41988222a2b2c2b362024d5d993eb1ca26dbf8b481908c75a7da98de66cb5f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_41988222a2b2c2b362024d5d993eb1ca26dbf8b481908c75a7da98de66cb5f70->leave($__internal_41988222a2b2c2b362024d5d993eb1ca26dbf8b481908c75a7da98de66cb5f70_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
