<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_013e116573d444433a731d273b82ed281566e2d10f2ee2e25baa332118794de4 extends Twig_Template
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
        $__internal_52919b6ad9bdad964e3f724d7b791cbf0b862f707140a23052b31c21a29488c0 = $this->env->getExtension("native_profiler");
        $__internal_52919b6ad9bdad964e3f724d7b791cbf0b862f707140a23052b31c21a29488c0->enter($__internal_52919b6ad9bdad964e3f724d7b791cbf0b862f707140a23052b31c21a29488c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_52919b6ad9bdad964e3f724d7b791cbf0b862f707140a23052b31c21a29488c0->leave($__internal_52919b6ad9bdad964e3f724d7b791cbf0b862f707140a23052b31c21a29488c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
