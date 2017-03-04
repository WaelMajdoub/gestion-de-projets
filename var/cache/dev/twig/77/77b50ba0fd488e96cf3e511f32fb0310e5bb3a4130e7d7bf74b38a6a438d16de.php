<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_93b181c95d1d37d2c824a57b8d340d2e902068b4ce191db46c84bf2cc11e4457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31adbbd7211e67dbf9334b0b35865b4c7338dd2d07488308d513c395c4fce680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31adbbd7211e67dbf9334b0b35865b4c7338dd2d07488308d513c395c4fce680->enter($__internal_31adbbd7211e67dbf9334b0b35865b4c7338dd2d07488308d513c395c4fce680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31adbbd7211e67dbf9334b0b35865b4c7338dd2d07488308d513c395c4fce680->leave($__internal_31adbbd7211e67dbf9334b0b35865b4c7338dd2d07488308d513c395c4fce680_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b8846b642d9eabc78db5a4f551cbe369f70b44730f2022dcc2ad9cb2bda1be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8846b642d9eabc78db5a4f551cbe369f70b44730f2022dcc2ad9cb2bda1be4->enter($__internal_3b8846b642d9eabc78db5a4f551cbe369f70b44730f2022dcc2ad9cb2bda1be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "    <div class=\"container\" style=\"margin-top: 30px;\" >
        ";
        // line 27
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "    </div>
";
        
        $__internal_3b8846b642d9eabc78db5a4f551cbe369f70b44730f2022dcc2ad9cb2bda1be4->leave($__internal_3b8846b642d9eabc78db5a4f551cbe369f70b44730f2022dcc2ad9cb2bda1be4_prof);

    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_469e12a2c1a59dede0a0714d46e5398d0890d3128e7b92ff77f505835e0bf757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469e12a2c1a59dede0a0714d46e5398d0890d3128e7b92ff77f505835e0bf757->enter($__internal_469e12a2c1a59dede0a0714d46e5398d0890d3128e7b92ff77f505835e0bf757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 28
        echo "        ";
        
        $__internal_469e12a2c1a59dede0a0714d46e5398d0890d3128e7b92ff77f505835e0bf757->leave($__internal_469e12a2c1a59dede0a0714d46e5398d0890d3128e7b92ff77f505835e0bf757_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 28,  54 => 27,  46 => 29,  44 => 27,  41 => 26,  35 => 25,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}
{#
<div>
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
        <a href=\"{{ path('fos_user_security_logout') }}\">
            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
        </a>
    {% else %}
        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
    {% endif %}
</div>

{% if app.request.hasPreviousSession %}
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"flash-{{ type }}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}
{% endif %}
#}

{% block body %}
    <div class=\"container\" style=\"margin-top: 30px;\" >
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>
{% endblock %}";
    }
}
