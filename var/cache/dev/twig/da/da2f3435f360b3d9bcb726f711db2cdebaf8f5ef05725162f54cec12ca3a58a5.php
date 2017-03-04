<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_6a7fa80e0b6e558716fdf6343744caa88b25cfef57ea6a913c80f8942879b07f extends Twig_Template
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
        $__internal_7dcf00b60595b38359cbaf4b03a0885821cf750675ff680206bbacff139450b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcf00b60595b38359cbaf4b03a0885821cf750675ff680206bbacff139450b7->enter($__internal_7dcf00b60595b38359cbaf4b03a0885821cf750675ff680206bbacff139450b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dcf00b60595b38359cbaf4b03a0885821cf750675ff680206bbacff139450b7->leave($__internal_7dcf00b60595b38359cbaf4b03a0885821cf750675ff680206bbacff139450b7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e4f12178853e0e737b212d5d22e4c2336b9b24a0f222432b4db0ef10c702ed87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f12178853e0e737b212d5d22e4c2336b9b24a0f222432b4db0ef10c702ed87->enter($__internal_e4f12178853e0e737b212d5d22e4c2336b9b24a0f222432b4db0ef10c702ed87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_e4f12178853e0e737b212d5d22e4c2336b9b24a0f222432b4db0ef10c702ed87->leave($__internal_e4f12178853e0e737b212d5d22e4c2336b9b24a0f222432b4db0ef10c702ed87_prof);

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
