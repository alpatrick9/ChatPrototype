<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_532b738911811313edf02de50fc616e7872dc96bc0e1db2a1cfc9ba3ac46ae2b extends Twig_Template
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
        $__internal_379e57d5f5999c217aff5f683c517f6ef38ffd3a4b58b495f9129b11ab134fd6 = $this->env->getExtension("native_profiler");
        $__internal_379e57d5f5999c217aff5f683c517f6ef38ffd3a4b58b495f9129b11ab134fd6->enter($__internal_379e57d5f5999c217aff5f683c517f6ef38ffd3a4b58b495f9129b11ab134fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_379e57d5f5999c217aff5f683c517f6ef38ffd3a4b58b495f9129b11ab134fd6->leave($__internal_379e57d5f5999c217aff5f683c517f6ef38ffd3a4b58b495f9129b11ab134fd6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
