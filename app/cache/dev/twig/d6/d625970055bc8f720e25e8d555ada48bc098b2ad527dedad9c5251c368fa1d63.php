<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a3dd99ebdd1911ca441d891c18c597c4bfda9655456b5a68a9c3c5a2337816c0 extends Twig_Template
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
        $__internal_f1feb911b5af574f981ed7e7048c12573457f70e4ccf4b0331f8200fa8ea19d7 = $this->env->getExtension("native_profiler");
        $__internal_f1feb911b5af574f981ed7e7048c12573457f70e4ccf4b0331f8200fa8ea19d7->enter($__internal_f1feb911b5af574f981ed7e7048c12573457f70e4ccf4b0331f8200fa8ea19d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f1feb911b5af574f981ed7e7048c12573457f70e4ccf4b0331f8200fa8ea19d7->leave($__internal_f1feb911b5af574f981ed7e7048c12573457f70e4ccf4b0331f8200fa8ea19d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
