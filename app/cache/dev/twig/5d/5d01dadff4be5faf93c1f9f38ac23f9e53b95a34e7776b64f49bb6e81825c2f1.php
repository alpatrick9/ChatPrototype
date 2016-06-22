<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4efdecbb8de2f66045ebc8a2bf7e2ce37fadfbb0ec72732b47a5292906991d05 extends Twig_Template
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
        $__internal_a00fd9b3a34d7de459a6c92f853e51d36f11d9fd0ad6ce74f3a1f84b2cf24568 = $this->env->getExtension("native_profiler");
        $__internal_a00fd9b3a34d7de459a6c92f853e51d36f11d9fd0ad6ce74f3a1f84b2cf24568->enter($__internal_a00fd9b3a34d7de459a6c92f853e51d36f11d9fd0ad6ce74f3a1f84b2cf24568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a00fd9b3a34d7de459a6c92f853e51d36f11d9fd0ad6ce74f3a1f84b2cf24568->leave($__internal_a00fd9b3a34d7de459a6c92f853e51d36f11d9fd0ad6ce74f3a1f84b2cf24568_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
