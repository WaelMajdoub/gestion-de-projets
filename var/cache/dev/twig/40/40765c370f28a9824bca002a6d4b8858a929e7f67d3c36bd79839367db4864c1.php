<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_068a7eb35e6bb66e1e2a60c8b5028e06bd75a1b406282fb8cd7c5ba024d04814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb862dd5a47a5e358a31701e8173f28efd0f14fec38ddce4a122d0eeccaeacb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb862dd5a47a5e358a31701e8173f28efd0f14fec38ddce4a122d0eeccaeacb4->enter($__internal_bb862dd5a47a5e358a31701e8173f28efd0f14fec38ddce4a122d0eeccaeacb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb862dd5a47a5e358a31701e8173f28efd0f14fec38ddce4a122d0eeccaeacb4->leave($__internal_bb862dd5a47a5e358a31701e8173f28efd0f14fec38ddce4a122d0eeccaeacb4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9f38c88c4c46e44c8ce8efaf07041dc371c67e2aa72f69d14de3386d6fec1c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f38c88c4c46e44c8ce8efaf07041dc371c67e2aa72f69d14de3386d6fec1c0e->enter($__internal_9f38c88c4c46e44c8ce8efaf07041dc371c67e2aa72f69d14de3386d6fec1c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_9f38c88c4c46e44c8ce8efaf07041dc371c67e2aa72f69d14de3386d6fec1c0e->leave($__internal_9f38c88c4c46e44c8ce8efaf07041dc371c67e2aa72f69d14de3386d6fec1c0e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
";
    }
}
