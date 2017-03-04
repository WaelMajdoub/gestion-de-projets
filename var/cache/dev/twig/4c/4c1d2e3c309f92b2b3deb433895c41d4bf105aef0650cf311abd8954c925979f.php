<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_37363114ee4aacb55ee77472c4fb02895a164cd12b48320a7696ac9c96f9c96b extends Twig_Template
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
        $__internal_17a89ca26f9737104719b1145173eb091ec0bf1999dca581f7432b5ac1617837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a89ca26f9737104719b1145173eb091ec0bf1999dca581f7432b5ac1617837->enter($__internal_17a89ca26f9737104719b1145173eb091ec0bf1999dca581f7432b5ac1617837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17a89ca26f9737104719b1145173eb091ec0bf1999dca581f7432b5ac1617837->leave($__internal_17a89ca26f9737104719b1145173eb091ec0bf1999dca581f7432b5ac1617837_prof);

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
