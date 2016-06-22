<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1b3f825e5e952f18ffd7facecd2ce6d952f811de77f462eda333729942e87c64 extends Twig_Template
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
        $__internal_99f4b0f4583adfba4383578a291cc0775036b4d950b315e2a0040d15849e529c = $this->env->getExtension("native_profiler");
        $__internal_99f4b0f4583adfba4383578a291cc0775036b4d950b315e2a0040d15849e529c->enter($__internal_99f4b0f4583adfba4383578a291cc0775036b4d950b315e2a0040d15849e529c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_99f4b0f4583adfba4383578a291cc0775036b4d950b315e2a0040d15849e529c->leave($__internal_99f4b0f4583adfba4383578a291cc0775036b4d950b315e2a0040d15849e529c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
