<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_3669e3481ff54e544f79515f7437bc380ed153befd69be9c1b304e68d99e19f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_957d8484d692616f2fe5f2027a5e6e3eba2521386d495e6897d1d26c3f1b71ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957d8484d692616f2fe5f2027a5e6e3eba2521386d495e6897d1d26c3f1b71ec->enter($__internal_957d8484d692616f2fe5f2027a5e6e3eba2521386d495e6897d1d26c3f1b71ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_957d8484d692616f2fe5f2027a5e6e3eba2521386d495e6897d1d26c3f1b71ec->leave($__internal_957d8484d692616f2fe5f2027a5e6e3eba2521386d495e6897d1d26c3f1b71ec_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
";
    }
}
