<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_8051437910eb9f1fa54e107dbfa996ca807c99b4ef36e02ef2fdee577ccd7f62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d4fee46772a8f04aeb9a9b25d43c30d84c3234dae0b67d1d73e2cfd9a778132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4fee46772a8f04aeb9a9b25d43c30d84c3234dae0b67d1d73e2cfd9a778132->enter($__internal_1d4fee46772a8f04aeb9a9b25d43c30d84c3234dae0b67d1d73e2cfd9a778132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_1d4fee46772a8f04aeb9a9b25d43c30d84c3234dae0b67d1d73e2cfd9a778132->leave($__internal_1d4fee46772a8f04aeb9a9b25d43c30d84c3234dae0b67d1d73e2cfd9a778132_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_4cd58eeed52bdce22bf8f1abb189475db610eedec15cfec26e59eb97f9ef58d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd58eeed52bdce22bf8f1abb189475db610eedec15cfec26e59eb97f9ef58d7->enter($__internal_4cd58eeed52bdce22bf8f1abb189475db610eedec15cfec26e59eb97f9ef58d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_4cd58eeed52bdce22bf8f1abb189475db610eedec15cfec26e59eb97f9ef58d7->leave($__internal_4cd58eeed52bdce22bf8f1abb189475db610eedec15cfec26e59eb97f9ef58d7_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
";
    }
}
