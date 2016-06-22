<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8cc8cdaf3f6036b7f355ecec56e3111ae944ea6031708e5e12101362dee0eead extends Twig_Template
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
        $__internal_1bbc21453bc1494c42e0f882ee8400dc57121c4fd21f42d6d057f7e065f7d35e = $this->env->getExtension("native_profiler");
        $__internal_1bbc21453bc1494c42e0f882ee8400dc57121c4fd21f42d6d057f7e065f7d35e->enter($__internal_1bbc21453bc1494c42e0f882ee8400dc57121c4fd21f42d6d057f7e065f7d35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1bbc21453bc1494c42e0f882ee8400dc57121c4fd21f42d6d057f7e065f7d35e->leave($__internal_1bbc21453bc1494c42e0f882ee8400dc57121c4fd21f42d6d057f7e065f7d35e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
