<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_744ea4e2250ed73fea9b9f53b567bcebac630a57d55fa713f47062e67eb42be7 extends Twig_Template
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
        $__internal_04df2a97e5f900f803ddaadb0384dae6784116ad0ffe66c13b35a6066285ec1c = $this->env->getExtension("native_profiler");
        $__internal_04df2a97e5f900f803ddaadb0384dae6784116ad0ffe66c13b35a6066285ec1c->enter($__internal_04df2a97e5f900f803ddaadb0384dae6784116ad0ffe66c13b35a6066285ec1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_04df2a97e5f900f803ddaadb0384dae6784116ad0ffe66c13b35a6066285ec1c->leave($__internal_04df2a97e5f900f803ddaadb0384dae6784116ad0ffe66c13b35a6066285ec1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
