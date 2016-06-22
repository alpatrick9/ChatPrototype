<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0b3789daecc54aff9ba3161f7f67bbc73630216259d0aec82ec0db0f73f5f5a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_6f5b6cc21c55d547b996fc023dd1d76b0d5383509272db4ca74df00468e5735b = $this->env->getExtension("native_profiler");
        $__internal_6f5b6cc21c55d547b996fc023dd1d76b0d5383509272db4ca74df00468e5735b->enter($__internal_6f5b6cc21c55d547b996fc023dd1d76b0d5383509272db4ca74df00468e5735b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f5b6cc21c55d547b996fc023dd1d76b0d5383509272db4ca74df00468e5735b->leave($__internal_6f5b6cc21c55d547b996fc023dd1d76b0d5383509272db4ca74df00468e5735b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dab2f4fc2750d1b35121cee592be2a0e8431f98375f7ff1ac5808ca39f285a8 = $this->env->getExtension("native_profiler");
        $__internal_4dab2f4fc2750d1b35121cee592be2a0e8431f98375f7ff1ac5808ca39f285a8->enter($__internal_4dab2f4fc2750d1b35121cee592be2a0e8431f98375f7ff1ac5808ca39f285a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4dab2f4fc2750d1b35121cee592be2a0e8431f98375f7ff1ac5808ca39f285a8->leave($__internal_4dab2f4fc2750d1b35121cee592be2a0e8431f98375f7ff1ac5808ca39f285a8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_43c00f9bc4c23c294c4bda60a04b53433134874770d5fb818e45af36f57588c5 = $this->env->getExtension("native_profiler");
        $__internal_43c00f9bc4c23c294c4bda60a04b53433134874770d5fb818e45af36f57588c5->enter($__internal_43c00f9bc4c23c294c4bda60a04b53433134874770d5fb818e45af36f57588c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_43c00f9bc4c23c294c4bda60a04b53433134874770d5fb818e45af36f57588c5->leave($__internal_43c00f9bc4c23c294c4bda60a04b53433134874770d5fb818e45af36f57588c5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
