<?php

/* base.html.twig */
class __TwigTemplate_354c6a61ed8ba5fa5d58756f89b9666f6d7af571f656a48c46a5b7b4a2f53227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7eadfff66a95a267405bd9cdd250f5a157a5336b089a5da3f961a7fc3044240b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eadfff66a95a267405bd9cdd250f5a157a5336b089a5da3f961a7fc3044240b->enter($__internal_7eadfff66a95a267405bd9cdd250f5a157a5336b089a5da3f961a7fc3044240b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\"  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('nav', $context, $blocks);
        // line 42
        echo "
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "
        ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    </body>
</html>
";
        
        $__internal_7eadfff66a95a267405bd9cdd250f5a157a5336b089a5da3f961a7fc3044240b->leave($__internal_7eadfff66a95a267405bd9cdd250f5a157a5336b089a5da3f961a7fc3044240b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe0aaf2e0aa25d7a0c416bf5915e61c5c1261d70996bb033bf3e1fc6e98adb1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0aaf2e0aa25d7a0c416bf5915e61c5c1261d70996bb033bf3e1fc6e98adb1c->enter($__internal_fe0aaf2e0aa25d7a0c416bf5915e61c5c1261d70996bb033bf3e1fc6e98adb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fe0aaf2e0aa25d7a0c416bf5915e61c5c1261d70996bb033bf3e1fc6e98adb1c->leave($__internal_fe0aaf2e0aa25d7a0c416bf5915e61c5c1261d70996bb033bf3e1fc6e98adb1c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08bcf7dc80a6fa2ae87dae195923bd8b76e16c6d33d02d2be5812e4ecbfb5b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bcf7dc80a6fa2ae87dae195923bd8b76e16c6d33d02d2be5812e4ecbfb5b1e->enter($__internal_08bcf7dc80a6fa2ae87dae195923bd8b76e16c6d33d02d2be5812e4ecbfb5b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
        ";
        
        $__internal_08bcf7dc80a6fa2ae87dae195923bd8b76e16c6d33d02d2be5812e4ecbfb5b1e->leave($__internal_08bcf7dc80a6fa2ae87dae195923bd8b76e16c6d33d02d2be5812e4ecbfb5b1e_prof);

    }

    // line 13
    public function block_nav($context, array $blocks = array())
    {
        $__internal_996d088d7b5d3876a8d13f5eee633f9b32751fe9fe1840fb3d5225f11ef8bed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996d088d7b5d3876a8d13f5eee633f9b32751fe9fe1840fb3d5225f11ef8bed2->enter($__internal_996d088d7b5d3876a8d13f5eee633f9b32751fe9fe1840fb3d5225f11ef8bed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 14
        echo "            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Gestion Projet</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Contact</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Action</a></li>
                                    <li><a href=\"#\">Another action</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
        ";
        
        $__internal_996d088d7b5d3876a8d13f5eee633f9b32751fe9fe1840fb3d5225f11ef8bed2->leave($__internal_996d088d7b5d3876a8d13f5eee633f9b32751fe9fe1840fb3d5225f11ef8bed2_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6158fe8ac8cde8a0736635fe83fb9a0df65d7c1f42658788d9e3035062dc17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6158fe8ac8cde8a0736635fe83fb9a0df65d7c1f42658788d9e3035062dc17e->enter($__internal_a6158fe8ac8cde8a0736635fe83fb9a0df65d7c1f42658788d9e3035062dc17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "

        ";
        
        $__internal_a6158fe8ac8cde8a0736635fe83fb9a0df65d7c1f42658788d9e3035062dc17e->leave($__internal_a6158fe8ac8cde8a0736635fe83fb9a0df65d7c1f42658788d9e3035062dc17e_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f5a0bf7b83cfeea0e8500c0ecf53978a89846d83f18ec59a284ae284fd08b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5a0bf7b83cfeea0e8500c0ecf53978a89846d83f18ec59a284ae284fd08b35->enter($__internal_6f5a0bf7b83cfeea0e8500c0ecf53978a89846d83f18ec59a284ae284fd08b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f5a0bf7b83cfeea0e8500c0ecf53978a89846d83f18ec59a284ae284fd08b35->leave($__internal_6f5a0bf7b83cfeea0e8500c0ecf53978a89846d83f18ec59a284ae284fd08b35_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 48,  143 => 44,  137 => 43,  103 => 14,  97 => 13,  89 => 7,  83 => 6,  71 => 5,  62 => 49,  60 => 48,  57 => 47,  55 => 43,  52 => 42,  50 => 13,  44 => 10,  39 => 9,  37 => 6,  33 => 5,  27 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}

        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\"  href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\" />
    </head>
    <body>
        {% block nav %}
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Gestion Projet</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Contact</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Action</a></li>
                                    <li><a href=\"#\">Another action</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
        {% endblock %}

        {% block body %}


        {% endblock %}

        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
