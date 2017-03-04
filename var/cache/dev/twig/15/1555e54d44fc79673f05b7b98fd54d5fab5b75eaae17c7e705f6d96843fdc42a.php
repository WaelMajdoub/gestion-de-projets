<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_7fb1a0ec62a4b883d37bf320d758e7b892116513f4fa28de31b2af0fee618f6d extends Twig_Template
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
        $__internal_6ea2cb975eb4490f3d3644ba0fcfd191c9e98058c6fafc2db6c1685727233444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea2cb975eb4490f3d3644ba0fcfd191c9e98058c6fafc2db6c1685727233444->enter($__internal_6ea2cb975eb4490f3d3644ba0fcfd191c9e98058c6fafc2db6c1685727233444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ea2cb975eb4490f3d3644ba0fcfd191c9e98058c6fafc2db6c1685727233444->leave($__internal_6ea2cb975eb4490f3d3644ba0fcfd191c9e98058c6fafc2db6c1685727233444_prof);

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
