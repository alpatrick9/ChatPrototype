<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8e3fffae858a992641339231434f4a8b248ea4ca65f6bd3dc3eb3d6cb372cee4 extends Twig_Template
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
        $__internal_ab5b9e646cba4f4795a4db354e2a7e7ef164809b7997820b27040e021bdcb367 = $this->env->getExtension("native_profiler");
        $__internal_ab5b9e646cba4f4795a4db354e2a7e7ef164809b7997820b27040e021bdcb367->enter($__internal_ab5b9e646cba4f4795a4db354e2a7e7ef164809b7997820b27040e021bdcb367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ab5b9e646cba4f4795a4db354e2a7e7ef164809b7997820b27040e021bdcb367->leave($__internal_ab5b9e646cba4f4795a4db354e2a7e7ef164809b7997820b27040e021bdcb367_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
