<?php

/* FrontBundle:projet:index.html.twig */
class __TwigTemplate_0de0b7b6b4a6d7b8362217ef95108a29e32bed11bebabfda036786839fff7907 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:projet:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d353f6651f0d8849fe97f44051324c1469f6b76d22062bbf43f0e53de9f2c6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d353f6651f0d8849fe97f44051324c1469f6b76d22062bbf43f0e53de9f2c6f3->enter($__internal_d353f6651f0d8849fe97f44051324c1469f6b76d22062bbf43f0e53de9f2c6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:projet:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d353f6651f0d8849fe97f44051324c1469f6b76d22062bbf43f0e53de9f2c6f3->leave($__internal_d353f6651f0d8849fe97f44051324c1469f6b76d22062bbf43f0e53de9f2c6f3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8d63118af552c3455ebc9a1f11ad90053fe0f5bd2371616c3ba8faab596ee6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d63118af552c3455ebc9a1f11ad90053fe0f5bd2371616c3ba8faab596ee6f->enter($__internal_b8d63118af552c3455ebc9a1f11ad90053fe0f5bd2371616c3ba8faab596ee6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Projet list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Datedebut</th>
                <th>Cout</th>
                 <th>emplo</th>  
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["projet"], "dateDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebut", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "cout", array()), "html", null, true);
            echo "</td>
                
                <td>
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["projet"], "employe", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 28
                echo "                
                    
                        ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", array()), "html", null, true);
                echo "

                        <br>
                    
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_edit", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_b8d63118af552c3455ebc9a1f11ad90053fe0f5bd2371616c3ba8faab596ee6f->leave($__internal_b8d63118af552c3455ebc9a1f11ad90053fe0f5bd2371616c3ba8faab596ee6f_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:projet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 53,  129 => 48,  117 => 42,  111 => 39,  105 => 35,  94 => 30,  90 => 28,  86 => 27,  80 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'FrontBundle::layout.html.twig' %}

{% block body %}

    <h1>Projet list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Datedebut</th>
                <th>Cout</th>
                 <th>emplo</th>  
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for projet in projets %}
            <tr>
                <td><a href=\"{{ path('projet_show', { 'id': projet.id }) }}\">{{ projet.id }}</a></td>
                <td>{{ projet.nom }}</td>
                <td>{% if projet.dateDebut %}{{ projet.dateDebut|date('Y-m-d') }}{% endif %}</td>
                <td>{{ projet.cout }}</td>
                
                <td>
                    {% for e in projet.employe %}
                
                    
                        {{ e.nom }}

                        <br>
                    
                     {% endfor %}
                
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('projet_show', { 'id': projet.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('projet_edit', { 'id': projet.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('projet_new') }}\">Create a new entry</a>
        </li>
    </ul>
{% endblock %}
";
    }
}
