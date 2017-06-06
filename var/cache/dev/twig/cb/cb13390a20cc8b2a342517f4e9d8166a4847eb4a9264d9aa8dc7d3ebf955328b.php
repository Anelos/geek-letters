<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5411f7c4dc4b95d1641ac1803645f7011debfa2f41475392286399b45439e60f extends Twig_Template
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
        $__internal_cdf73e41bf527451e9b2068afd27ed5976721fd6dd061606502f5b30f95c37a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf73e41bf527451e9b2068afd27ed5976721fd6dd061606502f5b30f95c37a8->enter($__internal_cdf73e41bf527451e9b2068afd27ed5976721fd6dd061606502f5b30f95c37a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9f78892a6dcf05e992fbeb850f22ab9face741891b88341de4bb3847996b4818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f78892a6dcf05e992fbeb850f22ab9face741891b88341de4bb3847996b4818->enter($__internal_9f78892a6dcf05e992fbeb850f22ab9face741891b88341de4bb3847996b4818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_cdf73e41bf527451e9b2068afd27ed5976721fd6dd061606502f5b30f95c37a8->leave($__internal_cdf73e41bf527451e9b2068afd27ed5976721fd6dd061606502f5b30f95c37a8_prof);

        
        $__internal_9f78892a6dcf05e992fbeb850f22ab9face741891b88341de4bb3847996b4818->leave($__internal_9f78892a6dcf05e992fbeb850f22ab9face741891b88341de4bb3847996b4818_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
