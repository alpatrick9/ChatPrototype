<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b5ea92b44992d53b4ef497f82352d3811f48b8472a33a9ca3d9bf9cb1e648a22 extends Twig_Template
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
        $__internal_c203cb8216d38c5c5bd6a50e02ccb3d96233da6e2bb66e73734402fd684f7dea = $this->env->getExtension("native_profiler");
        $__internal_c203cb8216d38c5c5bd6a50e02ccb3d96233da6e2bb66e73734402fd684f7dea->enter($__internal_c203cb8216d38c5c5bd6a50e02ccb3d96233da6e2bb66e73734402fd684f7dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c203cb8216d38c5c5bd6a50e02ccb3d96233da6e2bb66e73734402fd684f7dea->leave($__internal_c203cb8216d38c5c5bd6a50e02ccb3d96233da6e2bb66e73734402fd684f7dea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
