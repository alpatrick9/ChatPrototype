<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e78720cc6fd37cc3875e52d573bc53c982e2ba5e403d8654b24af023b5851bca extends Twig_Template
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
        $__internal_b28dc1c1be630abf7da84032de60ca5a7226e7456f4fef6e143efe9f134d37a2 = $this->env->getExtension("native_profiler");
        $__internal_b28dc1c1be630abf7da84032de60ca5a7226e7456f4fef6e143efe9f134d37a2->enter($__internal_b28dc1c1be630abf7da84032de60ca5a7226e7456f4fef6e143efe9f134d37a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b28dc1c1be630abf7da84032de60ca5a7226e7456f4fef6e143efe9f134d37a2->leave($__internal_b28dc1c1be630abf7da84032de60ca5a7226e7456f4fef6e143efe9f134d37a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
