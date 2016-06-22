<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2f5f11f386d1879acbedb66b7c63ceee39f699171516126a5937f5d0c5240b88 extends Twig_Template
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
        $__internal_9d960cc7a254fdb1b3966f74d1a30820df6e493f8965de4648ddbb78982e5e91 = $this->env->getExtension("native_profiler");
        $__internal_9d960cc7a254fdb1b3966f74d1a30820df6e493f8965de4648ddbb78982e5e91->enter($__internal_9d960cc7a254fdb1b3966f74d1a30820df6e493f8965de4648ddbb78982e5e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9d960cc7a254fdb1b3966f74d1a30820df6e493f8965de4648ddbb78982e5e91->leave($__internal_9d960cc7a254fdb1b3966f74d1a30820df6e493f8965de4648ddbb78982e5e91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
