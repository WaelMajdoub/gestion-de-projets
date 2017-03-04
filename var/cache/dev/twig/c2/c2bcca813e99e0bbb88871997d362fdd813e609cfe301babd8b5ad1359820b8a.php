<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_253446adf401135fb53843812c0409d443b29926fd343aab4b43246dd4e9d2e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_a204e691356e0f56e47aa400a9c312b128b525eb37f31376d542d9c695710fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a204e691356e0f56e47aa400a9c312b128b525eb37f31376d542d9c695710fcf->enter($__internal_a204e691356e0f56e47aa400a9c312b128b525eb37f31376d542d9c695710fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a204e691356e0f56e47aa400a9c312b128b525eb37f31376d542d9c695710fcf->leave($__internal_a204e691356e0f56e47aa400a9c312b128b525eb37f31376d542d9c695710fcf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e16720e79b2bb927e8feaaf070ab5732f1bddcc1fcbb1a4747984f0f7da5ff1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16720e79b2bb927e8feaaf070ab5732f1bddcc1fcbb1a4747984f0f7da5ff1c->enter($__internal_e16720e79b2bb927e8feaaf070ab5732f1bddcc1fcbb1a4747984f0f7da5ff1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_e16720e79b2bb927e8feaaf070ab5732f1bddcc1fcbb1a4747984f0f7da5ff1c->leave($__internal_e16720e79b2bb927e8feaaf070ab5732f1bddcc1fcbb1a4747984f0f7da5ff1c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
