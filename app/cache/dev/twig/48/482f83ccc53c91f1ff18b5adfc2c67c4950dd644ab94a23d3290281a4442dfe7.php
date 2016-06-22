<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_37211856ea0b5ee716d87e81343670d75845e823a4c379fecf4fc9062f0bcb43 extends Twig_Template
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
        $__internal_ffdad4fdc542a5258d8584c804541ef6cef6a1981182e499f93a8eed9e8ade3a = $this->env->getExtension("native_profiler");
        $__internal_ffdad4fdc542a5258d8584c804541ef6cef6a1981182e499f93a8eed9e8ade3a->enter($__internal_ffdad4fdc542a5258d8584c804541ef6cef6a1981182e499f93a8eed9e8ade3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ffdad4fdc542a5258d8584c804541ef6cef6a1981182e499f93a8eed9e8ade3a->leave($__internal_ffdad4fdc542a5258d8584c804541ef6cef6a1981182e499f93a8eed9e8ade3a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
