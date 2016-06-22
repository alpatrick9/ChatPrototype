<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3147705687d8ada6338de548f7c955014e91c703bfd4b659e0eb5175185685ac extends Twig_Template
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
        $__internal_e57493b9bce51b17547710adf141443b7af9555670a72bb9c7c85586b4a60d22 = $this->env->getExtension("native_profiler");
        $__internal_e57493b9bce51b17547710adf141443b7af9555670a72bb9c7c85586b4a60d22->enter($__internal_e57493b9bce51b17547710adf141443b7af9555670a72bb9c7c85586b4a60d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e57493b9bce51b17547710adf141443b7af9555670a72bb9c7c85586b4a60d22->leave($__internal_e57493b9bce51b17547710adf141443b7af9555670a72bb9c7c85586b4a60d22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
