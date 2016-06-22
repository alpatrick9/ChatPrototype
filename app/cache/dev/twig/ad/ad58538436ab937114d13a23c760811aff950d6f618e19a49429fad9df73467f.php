<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_02029d94093e5728fc040c0b0cc8843105984284ab1b3fe46756fe3a84061870 extends Twig_Template
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
        $__internal_891daaf97977a4528641c207cf5cc4ba75e8866b7fe408f5a5ace2c258815fc9 = $this->env->getExtension("native_profiler");
        $__internal_891daaf97977a4528641c207cf5cc4ba75e8866b7fe408f5a5ace2c258815fc9->enter($__internal_891daaf97977a4528641c207cf5cc4ba75e8866b7fe408f5a5ace2c258815fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_891daaf97977a4528641c207cf5cc4ba75e8866b7fe408f5a5ace2c258815fc9->leave($__internal_891daaf97977a4528641c207cf5cc4ba75e8866b7fe408f5a5ace2c258815fc9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
