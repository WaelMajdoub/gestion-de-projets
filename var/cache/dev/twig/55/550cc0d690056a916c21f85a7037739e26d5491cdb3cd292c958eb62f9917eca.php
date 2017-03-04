<?php

/* FrontBundle:Employe:index.html.twig */
class __TwigTemplate_63441b089512bbc8cbf1a7e6c24d5437aa04919a73f65bc469f0566aa2c708ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:Employe:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52a9379d3dd1b548357774bf8297a1c21971de986adb145baabb9cee9a1cbad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a9379d3dd1b548357774bf8297a1c21971de986adb145baabb9cee9a1cbad4->enter($__internal_52a9379d3dd1b548357774bf8297a1c21971de986adb145baabb9cee9a1cbad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Employe:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52a9379d3dd1b548357774bf8297a1c21971de986adb145baabb9cee9a1cbad4->leave($__internal_52a9379d3dd1b548357774bf8297a1c21971de986adb145baabb9cee9a1cbad4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2536616bf4e7398d97bcd813d3ce7e04fea36c0f155d0147603be66509f4a523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2536616bf4e7398d97bcd813d3ce7e04fea36c0f155d0147603be66509f4a523->enter($__internal_2536616bf4e7398d97bcd813d3ce7e04fea36c0f155d0147603be66509f4a523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('nav', $context, $blocks);
        // line 33
        echo "
    <table class=\"table table-striped\">
    <tr>
        <td>ID</td>
        <td>dep</td>
         <td>Nom</td>
        <td>prenom</td>
        <td>date</td>

        <td>sexe</td>
        <td>pays</td>
        <td>projet</td>
              
              
    </tr>

";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 50
            echo "    <tr>
        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["d"], "departement", array()), "nom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "nom", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "prenom", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["d"], "date", array()), "d-m-y"), "html", null, true);
            echo "</td>

        <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "sexe", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "pays", array()), "html", null, true);
            echo "</td>
        <td>
            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["d"], "projet", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 61
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
                echo "
                <br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        <td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "</table>

";
        
        $__internal_2536616bf4e7398d97bcd813d3ce7e04fea36c0f155d0147603be66509f4a523->leave($__internal_2536616bf4e7398d97bcd813d3ce7e04fea36c0f155d0147603be66509f4a523_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_34390fa486754d04f0783eeab67006530d1deeb906e13ad44ab5019fc6f25e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34390fa486754d04f0783eeab67006530d1deeb906e13ad44ab5019fc6f25e4a->enter($__internal_34390fa486754d04f0783eeab67006530d1deeb906e13ad44ab5019fc6f25e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 6
        echo "    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
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
                <form class=\"navbar-form navbar-right\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                </form>
            </div>
        </div>
    </nav>
    <br><br>

";
        
        $__internal_34390fa486754d04f0783eeab67006530d1deeb906e13ad44ab5019fc6f25e4a->leave($__internal_34390fa486754d04f0783eeab67006530d1deeb906e13ad44ab5019fc6f25e4a_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Employe:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 6,  132 => 5,  123 => 67,  115 => 64,  105 => 61,  101 => 60,  96 => 58,  92 => 57,  87 => 55,  83 => 54,  79 => 53,  75 => 52,  71 => 51,  68 => 50,  64 => 49,  46 => 33,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

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
                <form class=\"navbar-form navbar-right\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                </form>
            </div>
        </div>
    </nav>
    <br><br>

{% endblock %}

    <table class=\"table table-striped\">
    <tr>
        <td>ID</td>
        <td>dep</td>
         <td>Nom</td>
        <td>prenom</td>
        <td>date</td>

        <td>sexe</td>
        <td>pays</td>
        <td>projet</td>
              
              
    </tr>

{% for d in employe %}
    <tr>
        <td>{{ d.id}}</td>
          <td>{{ d.departement.nom}}</td>
        <td>{{ d.nom}}</td>
         <td>{{ d.prenom}}</td>
    <td>{{ d.date |date('d-m-y')}}</td>

        <td>{{ d.sexe}}</td>
        <td>{{ d.pays}}</td>
        <td>
            {% for p in d.projet %}
                {{ p.nom }}
                <br>
            {% endfor %}
        <td>
    </tr>
{% endfor %}
</table>

{% endblock %}
";
    }
}
