<?php

/* FrontBundle:Departement:index.html.twig */
class __TwigTemplate_b99ba1614dce38313abf42fa2e847b27bd6d0aaa196246963617c97ab212d0ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59d58fcd39adda32aabbc475352bf9945ce894d0541feae6709d762c149032fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d58fcd39adda32aabbc475352bf9945ce894d0541feae6709d762c149032fb->enter($__internal_59d58fcd39adda32aabbc475352bf9945ce894d0541feae6709d762c149032fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Departement:index.html.twig"));

        // line 1
        echo "<table border=1>
    <tr>
        <td>ID</td>
        <td>Nom</td>
        <td>Departement</td>
    </tr>

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departement"]) ? $context["departement"] : $this->getContext($context, "departement")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 9
            echo "    <tr>
        <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "nom", array()), "html", null, true);
            echo "</td>
        <td>
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["d"], "employe", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 14
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", array()), "html", null, true);
                echo "<br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>";
        
        $__internal_59d58fcd39adda32aabbc475352bf9945ce894d0541feae6709d762c149032fb->leave($__internal_59d58fcd39adda32aabbc475352bf9945ce894d0541feae6709d762c149032fb_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Departement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  60 => 16,  51 => 14,  47 => 13,  42 => 11,  38 => 10,  35 => 9,  31 => 8,  22 => 1,);
    }

    public function getSource()
    {
        return "<table border=1>
    <tr>
        <td>ID</td>
        <td>Nom</td>
        <td>Departement</td>
    </tr>

{% for d in departement %}
    <tr>
        <td>{{ d.id}}</td>
        <td>{{ d.nom}}</td>
        <td>
            {% for e in d.employe %}
                {{ e.nom }}<br>
            {% endfor %}

        </td>
    </tr>
{% endfor %}
</table>";
    }
}
