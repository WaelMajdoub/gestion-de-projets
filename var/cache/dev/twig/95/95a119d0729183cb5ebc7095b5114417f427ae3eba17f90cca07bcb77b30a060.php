<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_fb386266cf23743ffb55ffba9e4b07dc428d33abfdc7f467f393602e98d27227 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c1a13c8b0dabd0dd7d678707e8653e6d9c83e00175845812340815e6058a2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1a13c8b0dabd0dd7d678707e8653e6d9c83e00175845812340815e6058a2c4->enter($__internal_2c1a13c8b0dabd0dd7d678707e8653e6d9c83e00175845812340815e6058a2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c1a13c8b0dabd0dd7d678707e8653e6d9c83e00175845812340815e6058a2c4->leave($__internal_2c1a13c8b0dabd0dd7d678707e8653e6d9c83e00175845812340815e6058a2c4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}
";
    }
}
