<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0d0a6dce5521bbbc4f8dc197b49c8361c0ddd16f447577b87e2ce7879e3ed686 extends Twig_Template
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
        $__internal_51301a319733d7854a30f479dde4a52bd4bc3bc662d7627ab15af7f4e2155fe9 = $this->env->getExtension("native_profiler");
        $__internal_51301a319733d7854a30f479dde4a52bd4bc3bc662d7627ab15af7f4e2155fe9->enter($__internal_51301a319733d7854a30f479dde4a52bd4bc3bc662d7627ab15af7f4e2155fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_51301a319733d7854a30f479dde4a52bd4bc3bc662d7627ab15af7f4e2155fe9->leave($__internal_51301a319733d7854a30f479dde4a52bd4bc3bc662d7627ab15af7f4e2155fe9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
