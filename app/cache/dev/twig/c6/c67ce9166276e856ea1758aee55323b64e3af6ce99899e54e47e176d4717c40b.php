<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4d8728c8907567eccc97efc06123da538355a62cb9975eee81a1a9cec0946e40 extends Twig_Template
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
        $__internal_ae2333b7daf495ffbd88708a658e1aac83f7eb82f33dd285820af9e5cbbfa413 = $this->env->getExtension("native_profiler");
        $__internal_ae2333b7daf495ffbd88708a658e1aac83f7eb82f33dd285820af9e5cbbfa413->enter($__internal_ae2333b7daf495ffbd88708a658e1aac83f7eb82f33dd285820af9e5cbbfa413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ae2333b7daf495ffbd88708a658e1aac83f7eb82f33dd285820af9e5cbbfa413->leave($__internal_ae2333b7daf495ffbd88708a658e1aac83f7eb82f33dd285820af9e5cbbfa413_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
