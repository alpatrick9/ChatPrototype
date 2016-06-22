<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7e855f2681a83458f44527d0a2662fcce98fb4dad30c9bc328499a1689cd7598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33bfc218848e3c6cfb5362caa1c9cda713357229f34f67b6e6065d05bd941945 = $this->env->getExtension("native_profiler");
        $__internal_33bfc218848e3c6cfb5362caa1c9cda713357229f34f67b6e6065d05bd941945->enter($__internal_33bfc218848e3c6cfb5362caa1c9cda713357229f34f67b6e6065d05bd941945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33bfc218848e3c6cfb5362caa1c9cda713357229f34f67b6e6065d05bd941945->leave($__internal_33bfc218848e3c6cfb5362caa1c9cda713357229f34f67b6e6065d05bd941945_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_32cf269f66529cc247fda896d163144357e0368f4443cbea30e8df01b23d128f = $this->env->getExtension("native_profiler");
        $__internal_32cf269f66529cc247fda896d163144357e0368f4443cbea30e8df01b23d128f->enter($__internal_32cf269f66529cc247fda896d163144357e0368f4443cbea30e8df01b23d128f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_32cf269f66529cc247fda896d163144357e0368f4443cbea30e8df01b23d128f->leave($__internal_32cf269f66529cc247fda896d163144357e0368f4443cbea30e8df01b23d128f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1fd1dc59dc774948cc035654e9b08745a9550613855dea1af57ce5cd8015fffa = $this->env->getExtension("native_profiler");
        $__internal_1fd1dc59dc774948cc035654e9b08745a9550613855dea1af57ce5cd8015fffa->enter($__internal_1fd1dc59dc774948cc035654e9b08745a9550613855dea1af57ce5cd8015fffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1fd1dc59dc774948cc035654e9b08745a9550613855dea1af57ce5cd8015fffa->leave($__internal_1fd1dc59dc774948cc035654e9b08745a9550613855dea1af57ce5cd8015fffa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60c985f6adfca27060759dc9f83dfe8a3ac67360be740f962d20a7d0674a659e = $this->env->getExtension("native_profiler");
        $__internal_60c985f6adfca27060759dc9f83dfe8a3ac67360be740f962d20a7d0674a659e->enter($__internal_60c985f6adfca27060759dc9f83dfe8a3ac67360be740f962d20a7d0674a659e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_60c985f6adfca27060759dc9f83dfe8a3ac67360be740f962d20a7d0674a659e->leave($__internal_60c985f6adfca27060759dc9f83dfe8a3ac67360be740f962d20a7d0674a659e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
