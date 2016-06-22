<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8b09f7687b53247b545b7cd088c659c5899f6d543e45c8215185eebbe331bd45 extends Twig_Template
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
        $__internal_493a6cf46838c7bc09f059e419b5fa67639896f80addb44b2c23e73545638a34 = $this->env->getExtension("native_profiler");
        $__internal_493a6cf46838c7bc09f059e419b5fa67639896f80addb44b2c23e73545638a34->enter($__internal_493a6cf46838c7bc09f059e419b5fa67639896f80addb44b2c23e73545638a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_493a6cf46838c7bc09f059e419b5fa67639896f80addb44b2c23e73545638a34->leave($__internal_493a6cf46838c7bc09f059e419b5fa67639896f80addb44b2c23e73545638a34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
