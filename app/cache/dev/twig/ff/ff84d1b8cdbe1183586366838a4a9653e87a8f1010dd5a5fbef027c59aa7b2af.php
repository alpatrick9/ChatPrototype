<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_45102014ca18728b977fd9c8b04aaac3d9d31e726ff7d6e9f14723b31d533765 extends Twig_Template
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
        $__internal_181715ede280421e5ba499e3e045dd9c61d1cf559df63f25ab9a254eafca37dc = $this->env->getExtension("native_profiler");
        $__internal_181715ede280421e5ba499e3e045dd9c61d1cf559df63f25ab9a254eafca37dc->enter($__internal_181715ede280421e5ba499e3e045dd9c61d1cf559df63f25ab9a254eafca37dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_181715ede280421e5ba499e3e045dd9c61d1cf559df63f25ab9a254eafca37dc->leave($__internal_181715ede280421e5ba499e3e045dd9c61d1cf559df63f25ab9a254eafca37dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
