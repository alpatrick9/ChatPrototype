<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a298b93528eb67c17fb017d5546ce0a07213760c227ad1222f93d4a80425297b extends Twig_Template
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
        $__internal_1a85963c663ee1779d17efde48a73ae0dc2303d6f6bcf49942e3d22edd6539a7 = $this->env->getExtension("native_profiler");
        $__internal_1a85963c663ee1779d17efde48a73ae0dc2303d6f6bcf49942e3d22edd6539a7->enter($__internal_1a85963c663ee1779d17efde48a73ae0dc2303d6f6bcf49942e3d22edd6539a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_1a85963c663ee1779d17efde48a73ae0dc2303d6f6bcf49942e3d22edd6539a7->leave($__internal_1a85963c663ee1779d17efde48a73ae0dc2303d6f6bcf49942e3d22edd6539a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
