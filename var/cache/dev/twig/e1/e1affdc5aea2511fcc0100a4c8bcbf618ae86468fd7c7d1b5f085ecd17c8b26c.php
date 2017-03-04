<?php

/* GestionProjetBundle:ModuleUsed:liste_employe.html.twig */
class __TwigTemplate_f197b6201afe076d5548229b75d007aec062d0ef6f86d8c372093920a03c5aac extends Twig_Template
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
        $__internal_e15a2436ee5ef231d07a316bb8a24ca44bf3f961169295ba0d95e49d780db5cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15a2436ee5ef231d07a316bb8a24ca44bf3f961169295ba0d95e49d780db5cf->enter($__internal_e15a2436ee5ef231d07a316bb8a24ca44bf3f961169295ba0d95e49d780db5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionProjetBundle:ModuleUsed:liste_employe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e15a2436ee5ef231d07a316bb8a24ca44bf3f961169295ba0d95e49d780db5cf->leave($__internal_e15a2436ee5ef231d07a316bb8a24ca44bf3f961169295ba0d95e49d780db5cf_prof);

    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        $__internal_9b6a8808792d31e3bd36b131d4868ee93df1966d09a19c665504d6c48e2c4194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6a8808792d31e3bd36b131d4868ee93df1966d09a19c665504d6c48e2c4194->enter($__internal_9b6a8808792d31e3bd36b131d4868ee93df1966d09a19c665504d6c48e2c4194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "employe", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 4
            echo "
    <div> 
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "nom", array()), "html", null, true);
            echo "
    </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "       
";
        
        $__internal_9b6a8808792d31e3bd36b131d4868ee93df1966d09a19c665504d6c48e2c4194->leave($__internal_9b6a8808792d31e3bd36b131d4868ee93df1966d09a19c665504d6c48e2c4194_prof);

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
        return array (  57 => 9,  48 => 6,  44 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
