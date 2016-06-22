<?php

/* ::base.html.twig */
class __TwigTemplate_c1c4a74c47a1808f30003fb6b6e8289c55bc6bb7fc1df9f031dfbb815ca59850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36e71939871a12c13a44052d13867898f7dc5aa974c32b7b53e2064f78361039 = $this->env->getExtension("native_profiler");
        $__internal_36e71939871a12c13a44052d13867898f7dc5aa974c32b7b53e2064f78361039->enter($__internal_36e71939871a12c13a44052d13867898f7dc5aa974c32b7b53e2064f78361039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.0.0.min.js\"></script>
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_36e71939871a12c13a44052d13867898f7dc5aa974c32b7b53e2064f78361039->leave($__internal_36e71939871a12c13a44052d13867898f7dc5aa974c32b7b53e2064f78361039_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bf3cc44ce9f4fa35ce03730312a4b0a5261e2035755e727f9422b6e897a2a47 = $this->env->getExtension("native_profiler");
        $__internal_1bf3cc44ce9f4fa35ce03730312a4b0a5261e2035755e727f9422b6e897a2a47->enter($__internal_1bf3cc44ce9f4fa35ce03730312a4b0a5261e2035755e727f9422b6e897a2a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1bf3cc44ce9f4fa35ce03730312a4b0a5261e2035755e727f9422b6e897a2a47->leave($__internal_1bf3cc44ce9f4fa35ce03730312a4b0a5261e2035755e727f9422b6e897a2a47_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c94c201c77a9a73f04680c87969f75ae75cea8c780fc6b111ef743c34a44b6e5 = $this->env->getExtension("native_profiler");
        $__internal_c94c201c77a9a73f04680c87969f75ae75cea8c780fc6b111ef743c34a44b6e5->enter($__internal_c94c201c77a9a73f04680c87969f75ae75cea8c780fc6b111ef743c34a44b6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c94c201c77a9a73f04680c87969f75ae75cea8c780fc6b111ef743c34a44b6e5->leave($__internal_c94c201c77a9a73f04680c87969f75ae75cea8c780fc6b111ef743c34a44b6e5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_703d3c438ae42c16f40a0f608893ee35010ce1ac5ba57e97614788b2d565625c = $this->env->getExtension("native_profiler");
        $__internal_703d3c438ae42c16f40a0f608893ee35010ce1ac5ba57e97614788b2d565625c->enter($__internal_703d3c438ae42c16f40a0f608893ee35010ce1ac5ba57e97614788b2d565625c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_703d3c438ae42c16f40a0f608893ee35010ce1ac5ba57e97614788b2d565625c->leave($__internal_703d3c438ae42c16f40a0f608893ee35010ce1ac5ba57e97614788b2d565625c_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7fda6cf30f0b3359786b8cfb6562d182cc20da02a68d426e8e0370502a464517 = $this->env->getExtension("native_profiler");
        $__internal_7fda6cf30f0b3359786b8cfb6562d182cc20da02a68d426e8e0370502a464517->enter($__internal_7fda6cf30f0b3359786b8cfb6562d182cc20da02a68d426e8e0370502a464517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7fda6cf30f0b3359786b8cfb6562d182cc20da02a68d426e8e0370502a464517->leave($__internal_7fda6cf30f0b3359786b8cfb6562d182cc20da02a68d426e8e0370502a464517_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 12,  83 => 11,  72 => 6,  60 => 5,  51 => 13,  48 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
