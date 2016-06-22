<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4a18a0bd588239f407208b04d4f2d49ae24b38eefe325d2c892a26324f6cf64e extends Twig_Template
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
        $__internal_be91fe62b05716c7e6367ede95c256dfb5acd3a8c3ca886add721d2d442c5797 = $this->env->getExtension("native_profiler");
        $__internal_be91fe62b05716c7e6367ede95c256dfb5acd3a8c3ca886add721d2d442c5797->enter($__internal_be91fe62b05716c7e6367ede95c256dfb5acd3a8c3ca886add721d2d442c5797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_be91fe62b05716c7e6367ede95c256dfb5acd3a8c3ca886add721d2d442c5797->leave($__internal_be91fe62b05716c7e6367ede95c256dfb5acd3a8c3ca886add721d2d442c5797_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
