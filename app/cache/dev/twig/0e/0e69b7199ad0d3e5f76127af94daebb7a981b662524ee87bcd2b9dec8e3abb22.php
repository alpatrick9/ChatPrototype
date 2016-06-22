<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_98dfb9f2c846a92b48a37dd00009b0b1b9b4f8a194ca28fd74486f48d5ff7cee extends Twig_Template
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
        $__internal_493d48a2819d44d752305df73922d8404f518581cdc063a89d7c0561d9c2f018 = $this->env->getExtension("native_profiler");
        $__internal_493d48a2819d44d752305df73922d8404f518581cdc063a89d7c0561d9c2f018->enter($__internal_493d48a2819d44d752305df73922d8404f518581cdc063a89d7c0561d9c2f018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_493d48a2819d44d752305df73922d8404f518581cdc063a89d7c0561d9c2f018->leave($__internal_493d48a2819d44d752305df73922d8404f518581cdc063a89d7c0561d9c2f018_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
