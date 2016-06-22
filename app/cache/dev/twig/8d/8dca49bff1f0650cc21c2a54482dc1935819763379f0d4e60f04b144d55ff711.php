<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d78c2c24241744d37331bdda9dce1ffe7b8ec91e3117a3dd91f7f1a59a08fdb5 extends Twig_Template
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
        $__internal_9d7d4dfb4a43a5362d7ac376ea8a5ced363588e4f3acb2e84594119e2c2a6b11 = $this->env->getExtension("native_profiler");
        $__internal_9d7d4dfb4a43a5362d7ac376ea8a5ced363588e4f3acb2e84594119e2c2a6b11->enter($__internal_9d7d4dfb4a43a5362d7ac376ea8a5ced363588e4f3acb2e84594119e2c2a6b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9d7d4dfb4a43a5362d7ac376ea8a5ced363588e4f3acb2e84594119e2c2a6b11->leave($__internal_9d7d4dfb4a43a5362d7ac376ea8a5ced363588e4f3acb2e84594119e2c2a6b11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
