<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_f57572432785cd39caa03f03ee960a73a1e4624650051341caa70ddc2e0c78aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2520f451dfc7b0936703b945144b9956c06fab25bd211dc690719eab9f2cac43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2520f451dfc7b0936703b945144b9956c06fab25bd211dc690719eab9f2cac43->enter($__internal_2520f451dfc7b0936703b945144b9956c06fab25bd211dc690719eab9f2cac43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2520f451dfc7b0936703b945144b9956c06fab25bd211dc690719eab9f2cac43->leave($__internal_2520f451dfc7b0936703b945144b9956c06fab25bd211dc690719eab9f2cac43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_140b8a91c40ad7d2048fd29a70de07882a61288fc58728ddc0540b9ef4617751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140b8a91c40ad7d2048fd29a70de07882a61288fc58728ddc0540b9ef4617751->enter($__internal_140b8a91c40ad7d2048fd29a70de07882a61288fc58728ddc0540b9ef4617751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('nav', $context, $blocks);
        
        $__internal_140b8a91c40ad7d2048fd29a70de07882a61288fc58728ddc0540b9ef4617751->leave($__internal_140b8a91c40ad7d2048fd29a70de07882a61288fc58728ddc0540b9ef4617751_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_f6bb554b2625b6c4f7b1778c2459a8c4d32f4f9fb2fee1e6666aefe9f55a82c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bb554b2625b6c4f7b1778c2459a8c4d32f4f9fb2fee1e6666aefe9f55a82c7->enter($__internal_f6bb554b2625b6c4f7b1778c2459a8c4d32f4f9fb2fee1e6666aefe9f55a82c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 5
        echo "        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Project name</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#\">Dashboard</a></li>
                        <li><a href=\"#\">Settings</a></li>
                        <li><a href=\"#\">Profile</a></li>
                        <li><a href=\"#\">Help</a></li>
                    </ul>
                    <form action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recherche_projet");
        echo "\" method=\"get\" class=\"navbar-form navbar-right\">
                        <input name=\"keyword\" type=\"text\" class=\"form-control\" placeholder=\"Recherche...\">
                    </form>
                </div>
            </div>
        </nav>
        <br><br>
    ";
        
        $__internal_f6bb554b2625b6c4f7b1778c2459a8c4d32f4f9fb2fee1e6666aefe9f55a82c7->leave($__internal_f6bb554b2625b6c4f7b1778c2459a8c4d32f4f9fb2fee1e6666aefe9f55a82c7_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  54 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block body %}
    {% block nav %}
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Project name</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#\">Dashboard</a></li>
                        <li><a href=\"#\">Settings</a></li>
                        <li><a href=\"#\">Profile</a></li>
                        <li><a href=\"#\">Help</a></li>
                    </ul>
                    <form action=\"{{ path('recherche_projet') }}\" method=\"get\" class=\"navbar-form navbar-right\">
                        <input name=\"keyword\" type=\"text\" class=\"form-control\" placeholder=\"Recherche...\">
                    </form>
                </div>
            </div>
        </nav>
        <br><br>
    {% endblock %}
{% endblock %}";
    }
}
