<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b269b17218d06bb372676126ec4e8fc34312f57909877257c76417d5b22cb61d extends Twig_Template
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
        $__internal_d685046240f16f989d0e97d257c8aa602abd6e389cb98333cbc39db6d862bbd8 = $this->env->getExtension("native_profiler");
        $__internal_d685046240f16f989d0e97d257c8aa602abd6e389cb98333cbc39db6d862bbd8->enter($__internal_d685046240f16f989d0e97d257c8aa602abd6e389cb98333cbc39db6d862bbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d685046240f16f989d0e97d257c8aa602abd6e389cb98333cbc39db6d862bbd8->leave($__internal_d685046240f16f989d0e97d257c8aa602abd6e389cb98333cbc39db6d862bbd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
