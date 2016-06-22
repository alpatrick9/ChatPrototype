<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_43a1525d587706f7c3ebeef91d1c97979b1c200bdc39ef720694ad9b811cc85a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72a16dda8e287681ffb6cb15d76d3e9e2e25e9547bb1b33eb3ed6ab9f46d1a93 = $this->env->getExtension("native_profiler");
        $__internal_72a16dda8e287681ffb6cb15d76d3e9e2e25e9547bb1b33eb3ed6ab9f46d1a93->enter($__internal_72a16dda8e287681ffb6cb15d76d3e9e2e25e9547bb1b33eb3ed6ab9f46d1a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72a16dda8e287681ffb6cb15d76d3e9e2e25e9547bb1b33eb3ed6ab9f46d1a93->leave($__internal_72a16dda8e287681ffb6cb15d76d3e9e2e25e9547bb1b33eb3ed6ab9f46d1a93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_049d0e0076e3b19c75fe7a7ce23c326bd04308daa38598db935ae51303828714 = $this->env->getExtension("native_profiler");
        $__internal_049d0e0076e3b19c75fe7a7ce23c326bd04308daa38598db935ae51303828714->enter($__internal_049d0e0076e3b19c75fe7a7ce23c326bd04308daa38598db935ae51303828714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_049d0e0076e3b19c75fe7a7ce23c326bd04308daa38598db935ae51303828714->leave($__internal_049d0e0076e3b19c75fe7a7ce23c326bd04308daa38598db935ae51303828714_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_db5ca21068ac5dc60aa08af8d2a94bc32178d4d45bce92c15f1a0330ce2ad18f = $this->env->getExtension("native_profiler");
        $__internal_db5ca21068ac5dc60aa08af8d2a94bc32178d4d45bce92c15f1a0330ce2ad18f->enter($__internal_db5ca21068ac5dc60aa08af8d2a94bc32178d4d45bce92c15f1a0330ce2ad18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_db5ca21068ac5dc60aa08af8d2a94bc32178d4d45bce92c15f1a0330ce2ad18f->leave($__internal_db5ca21068ac5dc60aa08af8d2a94bc32178d4d45bce92c15f1a0330ce2ad18f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c734f5ce8601016fd98098fdc07104146122d5cf8212c05b1c59c7b39c1b1512 = $this->env->getExtension("native_profiler");
        $__internal_c734f5ce8601016fd98098fdc07104146122d5cf8212c05b1c59c7b39c1b1512->enter($__internal_c734f5ce8601016fd98098fdc07104146122d5cf8212c05b1c59c7b39c1b1512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c734f5ce8601016fd98098fdc07104146122d5cf8212c05b1c59c7b39c1b1512->leave($__internal_c734f5ce8601016fd98098fdc07104146122d5cf8212c05b1c59c7b39c1b1512_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
