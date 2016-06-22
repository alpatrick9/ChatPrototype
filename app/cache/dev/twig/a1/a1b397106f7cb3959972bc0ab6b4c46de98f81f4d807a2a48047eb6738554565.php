<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_603dbdba6dc3f5420b49a603542b86e9e61fb7596d1d827b1030c2c0c649f4d9 extends Twig_Template
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
        $__internal_5e95f16afa357c514d2f37c8cd5ba30e15fd34246ad707a533cc84c6c97c420e = $this->env->getExtension("native_profiler");
        $__internal_5e95f16afa357c514d2f37c8cd5ba30e15fd34246ad707a533cc84c6c97c420e->enter($__internal_5e95f16afa357c514d2f37c8cd5ba30e15fd34246ad707a533cc84c6c97c420e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5e95f16afa357c514d2f37c8cd5ba30e15fd34246ad707a533cc84c6c97c420e->leave($__internal_5e95f16afa357c514d2f37c8cd5ba30e15fd34246ad707a533cc84c6c97c420e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
