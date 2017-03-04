<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_a3e67003fd94f18ade4f9d94d78440e7f7f1b61c4963c740e7aa74e3062fc834 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9070b343a3fe8bd71b335557c02231579d5686a212b186a641bf5b626fb09c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9070b343a3fe8bd71b335557c02231579d5686a212b186a641bf5b626fb09c1->enter($__internal_c9070b343a3fe8bd71b335557c02231579d5686a212b186a641bf5b626fb09c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9070b343a3fe8bd71b335557c02231579d5686a212b186a641bf5b626fb09c1->leave($__internal_c9070b343a3fe8bd71b335557c02231579d5686a212b186a641bf5b626fb09c1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}
";
    }
}
