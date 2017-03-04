<?php

/* GestionProjetBundle:ModuleUsed:liste_employe.html.twig */
class __TwigTemplate_f96d3168b9546de88a9071978c782b617fef7a1b1a540607598ea062d27b753b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "GestionProjetBundle:ModuleUsed:liste_employe.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e22e21671b5dd2feefe75ca9e30defa31f73bdfbafe712f40b74395915af2505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22e21671b5dd2feefe75ca9e30defa31f73bdfbafe712f40b74395915af2505->enter($__internal_e22e21671b5dd2feefe75ca9e30defa31f73bdfbafe712f40b74395915af2505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionProjetBundle:ModuleUsed:liste_employe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e22e21671b5dd2feefe75ca9e30defa31f73bdfbafe712f40b74395915af2505->leave($__internal_e22e21671b5dd2feefe75ca9e30defa31f73bdfbafe712f40b74395915af2505_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_c6a64f1ff4848eef79d5c8090404520d2aa51ad9a6a438b87e44707fb343b06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a64f1ff4848eef79d5c8090404520d2aa51ad9a6a438b87e44707fb343b06e->enter($__internal_c6a64f1ff4848eef79d5c8090404520d2aa51ad9a6a438b87e44707fb343b06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "employe", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 5
            echo "
    <div> 
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "nom", array()), "html", null, true);
            echo "
    </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    
    
";
        
        $__internal_c6a64f1ff4848eef79d5c8090404520d2aa51ad9a6a438b87e44707fb343b06e->leave($__internal_c6a64f1ff4848eef79d5c8090404520d2aa51ad9a6a438b87e44707fb343b06e_prof);

    }

    public function getTemplateName()
    {
        return "GestionProjetBundle:ModuleUsed:liste_employe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  48 => 7,  44 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}

{% block field %}
{% for d in object.employe %}

    <div> 
        {{ d.nom}}
    </div>
        {% endfor %}
    
    
{% endblock %}";
    }
}
