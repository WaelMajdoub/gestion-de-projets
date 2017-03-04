<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_a236ffa1a89b8c6ab33e7c5e3ebb2a6c8f688bcd88bdc89f2f2b75aaf114d85f extends Twig_Template
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
        $__internal_1f035f16b183541b8e12578afc6fd74f87c3988b2ada463c36caa5ec7ce6cb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f035f16b183541b8e12578afc6fd74f87c3988b2ada463c36caa5ec7ce6cb4e->enter($__internal_1f035f16b183541b8e12578afc6fd74f87c3988b2ada463c36caa5ec7ce6cb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_1f035f16b183541b8e12578afc6fd74f87c3988b2ada463c36caa5ec7ce6cb4e->leave($__internal_1f035f16b183541b8e12578afc6fd74f87c3988b2ada463c36caa5ec7ce6cb4e_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
";
    }
}
