<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3f5f8494099c70d8900a8e5d639051cf4bd14e3433efd675743cf2ed5086ac80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f5ec4a6336887162aeabf61b4b1a68c9627e64180b4f0bed9af17aebecbe365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5ec4a6336887162aeabf61b4b1a68c9627e64180b4f0bed9af17aebecbe365->enter($__internal_7f5ec4a6336887162aeabf61b4b1a68c9627e64180b4f0bed9af17aebecbe365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f5ec4a6336887162aeabf61b4b1a68c9627e64180b4f0bed9af17aebecbe365->leave($__internal_7f5ec4a6336887162aeabf61b4b1a68c9627e64180b4f0bed9af17aebecbe365_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6da19a6e948a5112ecb3016c18e713e1c29e348aa35154592d689549ade9c153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da19a6e948a5112ecb3016c18e713e1c29e348aa35154592d689549ade9c153->enter($__internal_6da19a6e948a5112ecb3016c18e713e1c29e348aa35154592d689549ade9c153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6da19a6e948a5112ecb3016c18e713e1c29e348aa35154592d689549ade9c153->leave($__internal_6da19a6e948a5112ecb3016c18e713e1c29e348aa35154592d689549ade9c153_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
