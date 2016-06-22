<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_195543cb830c31ea6d2c1a9b24e8599024dc336d33acf14fb74d8dcf313db3c5 extends Twig_Template
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
        $__internal_f7db8f43ff6d16fb2d1a43ea5352eb632096938bc46bdd78f1546de00b487822 = $this->env->getExtension("native_profiler");
        $__internal_f7db8f43ff6d16fb2d1a43ea5352eb632096938bc46bdd78f1546de00b487822->enter($__internal_f7db8f43ff6d16fb2d1a43ea5352eb632096938bc46bdd78f1546de00b487822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f7db8f43ff6d16fb2d1a43ea5352eb632096938bc46bdd78f1546de00b487822->leave($__internal_f7db8f43ff6d16fb2d1a43ea5352eb632096938bc46bdd78f1546de00b487822_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
