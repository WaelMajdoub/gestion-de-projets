<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_eff028b3e06e97feddf41019fb6753172cdcccc307e81aab4792b54ba7fda8e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dcf47df905ca54984182d36c7592888c52198f8caaf83db98a965205602c225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcf47df905ca54984182d36c7592888c52198f8caaf83db98a965205602c225->enter($__internal_2dcf47df905ca54984182d36c7592888c52198f8caaf83db98a965205602c225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_2dcf47df905ca54984182d36c7592888c52198f8caaf83db98a965205602c225->leave($__internal_2dcf47df905ca54984182d36c7592888c52198f8caaf83db98a965205602c225_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_e46825402f0cb673689b1c6c73d9dc980a6398f460073d1c49797d48e9c157c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46825402f0cb673689b1c6c73d9dc980a6398f460073d1c49797d48e9c157c8->enter($__internal_e46825402f0cb673689b1c6c73d9dc980a6398f460073d1c49797d48e9c157c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_e46825402f0cb673689b1c6c73d9dc980a6398f460073d1c49797d48e9c157c8->leave($__internal_e46825402f0cb673689b1c6c73d9dc980a6398f460073d1c49797d48e9c157c8_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_21d1ab8d93f02c2ff7f05fd0bdb0159460dad9e57927c85cbfbb478bc98d9cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d1ab8d93f02c2ff7f05fd0bdb0159460dad9e57927c85cbfbb478bc98d9cd8->enter($__internal_21d1ab8d93f02c2ff7f05fd0bdb0159460dad9e57927c85cbfbb478bc98d9cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_21d1ab8d93f02c2ff7f05fd0bdb0159460dad9e57927c85cbfbb478bc98d9cd8->leave($__internal_21d1ab8d93f02c2ff7f05fd0bdb0159460dad9e57927c85cbfbb478bc98d9cd8_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_1b8810b83f76864443153554e5230d7a4cc2015bbdc35c74bdd975d0a3ca82f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8810b83f76864443153554e5230d7a4cc2015bbdc35c74bdd975d0a3ca82f1->enter($__internal_1b8810b83f76864443153554e5230d7a4cc2015bbdc35c74bdd975d0a3ca82f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_1b8810b83f76864443153554e5230d7a4cc2015bbdc35c74bdd975d0a3ca82f1->leave($__internal_1b8810b83f76864443153554e5230d7a4cc2015bbdc35c74bdd975d0a3ca82f1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
";
    }
}
