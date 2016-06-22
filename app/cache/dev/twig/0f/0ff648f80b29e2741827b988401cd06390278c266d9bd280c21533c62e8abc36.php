<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9d55415f4ce891e280d5d4db29d674e837ae0a13ba120814cd896e083704d2f4 extends Twig_Template
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
        $__internal_55492ded601bf7d100723f0fbbe32509f83bdeb85c786ec1bea8f09087d9ed08 = $this->env->getExtension("native_profiler");
        $__internal_55492ded601bf7d100723f0fbbe32509f83bdeb85c786ec1bea8f09087d9ed08->enter($__internal_55492ded601bf7d100723f0fbbe32509f83bdeb85c786ec1bea8f09087d9ed08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_55492ded601bf7d100723f0fbbe32509f83bdeb85c786ec1bea8f09087d9ed08->leave($__internal_55492ded601bf7d100723f0fbbe32509f83bdeb85c786ec1bea8f09087d9ed08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
