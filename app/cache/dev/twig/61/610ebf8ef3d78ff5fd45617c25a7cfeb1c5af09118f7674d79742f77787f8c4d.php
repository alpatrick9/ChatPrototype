<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_cd954fd0b9014fd54588a93bcfe8f83c83150a9fddfe55cf47b77b891b407c19 extends Twig_Template
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
        $__internal_16d37ca7519821c80db50902a91afd0c9a241ff20a452afc378c596aaa2b51fb = $this->env->getExtension("native_profiler");
        $__internal_16d37ca7519821c80db50902a91afd0c9a241ff20a452afc378c596aaa2b51fb->enter($__internal_16d37ca7519821c80db50902a91afd0c9a241ff20a452afc378c596aaa2b51fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_16d37ca7519821c80db50902a91afd0c9a241ff20a452afc378c596aaa2b51fb->leave($__internal_16d37ca7519821c80db50902a91afd0c9a241ff20a452afc378c596aaa2b51fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
