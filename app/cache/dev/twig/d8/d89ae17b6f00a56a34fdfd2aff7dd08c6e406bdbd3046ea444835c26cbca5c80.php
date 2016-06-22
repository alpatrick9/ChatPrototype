<?php

/* :default:index.html.twig */
class __TwigTemplate_3607cb0499ae663a48594e59f7bb4db3ea48108ab197afb2b9aa46556284d24a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e55817ee1759857df740ccb9f7290087d1bfbd7f20760fca352a66ff6fbbd648 = $this->env->getExtension("native_profiler");
        $__internal_e55817ee1759857df740ccb9f7290087d1bfbd7f20760fca352a66ff6fbbd648->enter($__internal_e55817ee1759857df740ccb9f7290087d1bfbd7f20760fca352a66ff6fbbd648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e55817ee1759857df740ccb9f7290087d1bfbd7f20760fca352a66ff6fbbd648->leave($__internal_e55817ee1759857df740ccb9f7290087d1bfbd7f20760fca352a66ff6fbbd648_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a19b87c882ae52b9c35661e0542e0ad6ff83c8f4533ec798c132979bfbdb8d11 = $this->env->getExtension("native_profiler");
        $__internal_a19b87c882ae52b9c35661e0542e0ad6ff83c8f4533ec798c132979bfbdb8d11->enter($__internal_a19b87c882ae52b9c35661e0542e0ad6ff83c8f4533ec798c132979bfbdb8d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <form>
        <input type=\"submit\" value=\"envoi\">
    </form>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://localhost:4321/socket.io/socket.io.js"), "html", null, true);
        echo "\"></script>

    <script>
        jQuery(function(\$) {
            var socket = io.connect('http://localhost:4321');

            \$('form').on('submit', function() {
                socket.emit('newOrder', '1');
            });

        });
    </script>
";
        
        $__internal_a19b87c882ae52b9c35661e0542e0ad6ff83c8f4533ec798c132979bfbdb8d11->leave($__internal_a19b87c882ae52b9c35661e0542e0ad6ff83c8f4533ec798c132979bfbdb8d11_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     <form>*/
/*         <input type="submit" value="envoi">*/
/*     </form>*/
/*     <script src="{{ asset('http://localhost:4321/socket.io/socket.io.js') }}"></script>*/
/* */
/*     <script>*/
/*         jQuery(function($) {*/
/*             var socket = io.connect('http://localhost:4321');*/
/* */
/*             $('form').on('submit', function() {*/
/*                 socket.emit('newOrder', '1');*/
/*             });*/
/* */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
