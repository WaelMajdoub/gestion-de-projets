<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_bbb383b711aa32f2c5b74277b8fe7d166b8b72b1cba3c8fcff8a1f8d09bf7230 extends Twig_Template
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
        $__internal_394fc72549eae21711d5ba9fbb678638efb3c35613840dec137dbea9b2311e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394fc72549eae21711d5ba9fbb678638efb3c35613840dec137dbea9b2311e54->enter($__internal_394fc72549eae21711d5ba9fbb678638efb3c35613840dec137dbea9b2311e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_394fc72549eae21711d5ba9fbb678638efb3c35613840dec137dbea9b2311e54->leave($__internal_394fc72549eae21711d5ba9fbb678638efb3c35613840dec137dbea9b2311e54_prof);

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
