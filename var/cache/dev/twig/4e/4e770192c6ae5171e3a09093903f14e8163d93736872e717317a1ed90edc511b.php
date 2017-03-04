<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ccf2bb3fcda991a29d5719aed8e37b7ecd8b1440084f4741f8f661d66d1c56d1 extends Twig_Template
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
        $__internal_241debd63ea7a930a80a420863bc8d78d725002b0a0e75650aeaed2cf85c6c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241debd63ea7a930a80a420863bc8d78d725002b0a0e75650aeaed2cf85c6c06->enter($__internal_241debd63ea7a930a80a420863bc8d78d725002b0a0e75650aeaed2cf85c6c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_241debd63ea7a930a80a420863bc8d78d725002b0a0e75650aeaed2cf85c6c06->leave($__internal_241debd63ea7a930a80a420863bc8d78d725002b0a0e75650aeaed2cf85c6c06_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca0d8d8af0c77d2092e7cda42bacb2d5fa8145b8182a93c9561d78a264ec6d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0d8d8af0c77d2092e7cda42bacb2d5fa8145b8182a93c9561d78a264ec6d35->enter($__internal_ca0d8d8af0c77d2092e7cda42bacb2d5fa8145b8182a93c9561d78a264ec6d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_ca0d8d8af0c77d2092e7cda42bacb2d5fa8145b8182a93c9561d78a264ec6d35->leave($__internal_ca0d8d8af0c77d2092e7cda42bacb2d5fa8145b8182a93c9561d78a264ec6d35_prof);

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
