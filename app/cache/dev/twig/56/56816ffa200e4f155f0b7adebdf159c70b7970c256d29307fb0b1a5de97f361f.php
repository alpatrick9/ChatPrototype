<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3cf61c4fe5603553022f1dde312fd71f4207e4bba54a8ec1d269eb9415702247 extends Twig_Template
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
        $__internal_04765cc5df5053adb3d79581ad8f5643544e04de01738d0055b3c5f49da82b0c = $this->env->getExtension("native_profiler");
        $__internal_04765cc5df5053adb3d79581ad8f5643544e04de01738d0055b3c5f49da82b0c->enter($__internal_04765cc5df5053adb3d79581ad8f5643544e04de01738d0055b3c5f49da82b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_04765cc5df5053adb3d79581ad8f5643544e04de01738d0055b3c5f49da82b0c->leave($__internal_04765cc5df5053adb3d79581ad8f5643544e04de01738d0055b3c5f49da82b0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
