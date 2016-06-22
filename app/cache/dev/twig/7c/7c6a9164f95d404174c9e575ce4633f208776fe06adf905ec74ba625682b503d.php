<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_71874248f6d1e6d544af91d1a8fb8c11a6d5fb95dff7a9fa5b19bcb0343febf6 extends Twig_Template
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
        $__internal_c9cdcc4cb4694bbfdc8684d8136d49eca327cd9cc70f499b67314f2c8cb8555f = $this->env->getExtension("native_profiler");
        $__internal_c9cdcc4cb4694bbfdc8684d8136d49eca327cd9cc70f499b67314f2c8cb8555f->enter($__internal_c9cdcc4cb4694bbfdc8684d8136d49eca327cd9cc70f499b67314f2c8cb8555f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c9cdcc4cb4694bbfdc8684d8136d49eca327cd9cc70f499b67314f2c8cb8555f->leave($__internal_c9cdcc4cb4694bbfdc8684d8136d49eca327cd9cc70f499b67314f2c8cb8555f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
