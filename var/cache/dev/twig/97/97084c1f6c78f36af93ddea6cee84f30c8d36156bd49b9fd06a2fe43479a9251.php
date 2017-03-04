<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_4732b373dc689ed9e17a047b5d891a2455f9a86d7e26460944099b955d63d1d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e31becbcb0bc9216282902b9c83f9b3e9d84a98d9a0dc2a02d576773ab14dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e31becbcb0bc9216282902b9c83f9b3e9d84a98d9a0dc2a02d576773ab14dda->enter($__internal_1e31becbcb0bc9216282902b9c83f9b3e9d84a98d9a0dc2a02d576773ab14dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e31becbcb0bc9216282902b9c83f9b3e9d84a98d9a0dc2a02d576773ab14dda->leave($__internal_1e31becbcb0bc9216282902b9c83f9b3e9d84a98d9a0dc2a02d576773ab14dda_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
";
    }
}
