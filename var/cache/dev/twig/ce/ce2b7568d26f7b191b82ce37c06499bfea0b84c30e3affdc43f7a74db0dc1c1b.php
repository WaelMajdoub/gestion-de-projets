<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_c9cd7223852baa9bb617cc95e35917f1a702bc05a805b660b3dbec3a322f0575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcdb3eaf2edef73b52b19c2dc2c73c5f6366a69909dc1af015050adbe374962c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcdb3eaf2edef73b52b19c2dc2c73c5f6366a69909dc1af015050adbe374962c->enter($__internal_fcdb3eaf2edef73b52b19c2dc2c73c5f6366a69909dc1af015050adbe374962c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcdb3eaf2edef73b52b19c2dc2c73c5f6366a69909dc1af015050adbe374962c->leave($__internal_fcdb3eaf2edef73b52b19c2dc2c73c5f6366a69909dc1af015050adbe374962c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
";
    }
}
