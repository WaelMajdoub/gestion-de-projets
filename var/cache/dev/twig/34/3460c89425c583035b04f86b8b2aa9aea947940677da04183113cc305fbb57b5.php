<?php

/* ::base.html.twig */
class __TwigTemplate_eb64423b0693c5d12fac6fce4666d93248786df10fdb38c32eb9391af0eab5a9 extends Twig_Template
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
        $__internal_b1e6a7d5e7c7706348c07626c2f010f90afbc3b0b77f70812a52d66a1597eadb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e6a7d5e7c7706348c07626c2f010f90afbc3b0b77f70812a52d66a1597eadb->enter($__internal_b1e6a7d5e7c7706348c07626c2f010f90afbc3b0b77f70812a52d66a1597eadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b1e6a7d5e7c7706348c07626c2f010f90afbc3b0b77f70812a52d66a1597eadb->leave($__internal_b1e6a7d5e7c7706348c07626c2f010f90afbc3b0b77f70812a52d66a1597eadb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_41db33cf08e1cd4259558e7b44ccda1c1bb8e08c7bf4199fcec04b0d4c51b516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41db33cf08e1cd4259558e7b44ccda1c1bb8e08c7bf4199fcec04b0d4c51b516->enter($__internal_41db33cf08e1cd4259558e7b44ccda1c1bb8e08c7bf4199fcec04b0d4c51b516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_41db33cf08e1cd4259558e7b44ccda1c1bb8e08c7bf4199fcec04b0d4c51b516->leave($__internal_41db33cf08e1cd4259558e7b44ccda1c1bb8e08c7bf4199fcec04b0d4c51b516_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7318beb17a6cca09411e50c02571c24d0e4f19014bf03f3c44c229f0324bec2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7318beb17a6cca09411e50c02571c24d0e4f19014bf03f3c44c229f0324bec2e->enter($__internal_7318beb17a6cca09411e50c02571c24d0e4f19014bf03f3c44c229f0324bec2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
        ";
        
        $__internal_7318beb17a6cca09411e50c02571c24d0e4f19014bf03f3c44c229f0324bec2e->leave($__internal_7318beb17a6cca09411e50c02571c24d0e4f19014bf03f3c44c229f0324bec2e_prof);

    }

    // line 13
    public function block_nav($context, array $blocks = array())
    {
        $__internal_010abd79e31dc151707d2ad568a9409799ef5b174edbb0fc1e186782da92fac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010abd79e31dc151707d2ad568a9409799ef5b174edbb0fc1e186782da92fac1->enter($__internal_010abd79e31dc151707d2ad568a9409799ef5b174edbb0fc1e186782da92fac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_010abd79e31dc151707d2ad568a9409799ef5b174edbb0fc1e186782da92fac1->leave($__internal_010abd79e31dc151707d2ad568a9409799ef5b174edbb0fc1e186782da92fac1_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_0464624298b6a42d0cbed529fd8fe4d49ab1dd79e108735a418789f5b671ae29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0464624298b6a42d0cbed529fd8fe4d49ab1dd79e108735a418789f5b671ae29->enter($__internal_0464624298b6a42d0cbed529fd8fe4d49ab1dd79e108735a418789f5b671ae29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "

        ";
        
        $__internal_0464624298b6a42d0cbed529fd8fe4d49ab1dd79e108735a418789f5b671ae29->leave($__internal_0464624298b6a42d0cbed529fd8fe4d49ab1dd79e108735a418789f5b671ae29_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d04c5b175698495d683acd8bdfcb996e688db64ea61d8048a5fcd17840ccd88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04c5b175698495d683acd8bdfcb996e688db64ea61d8048a5fcd17840ccd88e->enter($__internal_d04c5b175698495d683acd8bdfcb996e688db64ea61d8048a5fcd17840ccd88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d04c5b175698495d683acd8bdfcb996e688db64ea61d8048a5fcd17840ccd88e->leave($__internal_d04c5b175698495d683acd8bdfcb996e688db64ea61d8048a5fcd17840ccd88e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
