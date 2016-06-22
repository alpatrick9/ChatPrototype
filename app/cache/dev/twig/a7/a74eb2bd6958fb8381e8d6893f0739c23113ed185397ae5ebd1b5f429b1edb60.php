<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9135bd409ce7f1bff1a666bd328a43c0527ecccd7d442aa6016e1d67f2e03973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18e82fde9888a551d6466d4716207c4008ba74f6b9304f1966f4d490c558655b = $this->env->getExtension("native_profiler");
        $__internal_18e82fde9888a551d6466d4716207c4008ba74f6b9304f1966f4d490c558655b->enter($__internal_18e82fde9888a551d6466d4716207c4008ba74f6b9304f1966f4d490c558655b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_18e82fde9888a551d6466d4716207c4008ba74f6b9304f1966f4d490c558655b->leave($__internal_18e82fde9888a551d6466d4716207c4008ba74f6b9304f1966f4d490c558655b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7d71a5ef0a10a8097e7aa257fedd168640b7e3c4f7fb6bcf1699ebdaee8c3b1 = $this->env->getExtension("native_profiler");
        $__internal_f7d71a5ef0a10a8097e7aa257fedd168640b7e3c4f7fb6bcf1699ebdaee8c3b1->enter($__internal_f7d71a5ef0a10a8097e7aa257fedd168640b7e3c4f7fb6bcf1699ebdaee8c3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f7d71a5ef0a10a8097e7aa257fedd168640b7e3c4f7fb6bcf1699ebdaee8c3b1->leave($__internal_f7d71a5ef0a10a8097e7aa257fedd168640b7e3c4f7fb6bcf1699ebdaee8c3b1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
