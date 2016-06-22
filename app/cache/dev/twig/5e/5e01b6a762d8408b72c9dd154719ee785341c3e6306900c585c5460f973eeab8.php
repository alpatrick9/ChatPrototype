<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7dc54764f5f2227cd82fa8436c5ee8467c80b9f30e3692a71ff774a11e4e6f09 extends Twig_Template
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
        $__internal_0115ff8bab0de0a9a1d099fa0e3696287cfc1b2deb602a43d7dec93d12da1ffc = $this->env->getExtension("native_profiler");
        $__internal_0115ff8bab0de0a9a1d099fa0e3696287cfc1b2deb602a43d7dec93d12da1ffc->enter($__internal_0115ff8bab0de0a9a1d099fa0e3696287cfc1b2deb602a43d7dec93d12da1ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0115ff8bab0de0a9a1d099fa0e3696287cfc1b2deb602a43d7dec93d12da1ffc->leave($__internal_0115ff8bab0de0a9a1d099fa0e3696287cfc1b2deb602a43d7dec93d12da1ffc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
