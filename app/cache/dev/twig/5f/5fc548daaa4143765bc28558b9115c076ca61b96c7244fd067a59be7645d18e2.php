<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2512f94a9a11b4ee6fa3bf6f1a1276e7d55914eff34f62a6738e750b919198fc extends Twig_Template
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
        $__internal_0501727ff67884916b67ac345fec2da85f93aea12ac7b42720b9c5774a5145a3 = $this->env->getExtension("native_profiler");
        $__internal_0501727ff67884916b67ac345fec2da85f93aea12ac7b42720b9c5774a5145a3->enter($__internal_0501727ff67884916b67ac345fec2da85f93aea12ac7b42720b9c5774a5145a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0501727ff67884916b67ac345fec2da85f93aea12ac7b42720b9c5774a5145a3->leave($__internal_0501727ff67884916b67ac345fec2da85f93aea12ac7b42720b9c5774a5145a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
