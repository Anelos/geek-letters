<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_22de183280262f7cac18cf4266a95f2db7b0ba42b968a8b3ca069d14fb15f6d7 extends Twig_Template
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
        $__internal_fb8edf64cc75fc84b97746a3242de56022be731fc97d242662f31c84ad8ea8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8edf64cc75fc84b97746a3242de56022be731fc97d242662f31c84ad8ea8ea->enter($__internal_fb8edf64cc75fc84b97746a3242de56022be731fc97d242662f31c84ad8ea8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_4f54e5f69a15c0aa8227347dbaad180cc2e6cbe75e159deae7dcf6222628ade3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f54e5f69a15c0aa8227347dbaad180cc2e6cbe75e159deae7dcf6222628ade3->enter($__internal_4f54e5f69a15c0aa8227347dbaad180cc2e6cbe75e159deae7dcf6222628ade3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fb8edf64cc75fc84b97746a3242de56022be731fc97d242662f31c84ad8ea8ea->leave($__internal_fb8edf64cc75fc84b97746a3242de56022be731fc97d242662f31c84ad8ea8ea_prof);

        
        $__internal_4f54e5f69a15c0aa8227347dbaad180cc2e6cbe75e159deae7dcf6222628ade3->leave($__internal_4f54e5f69a15c0aa8227347dbaad180cc2e6cbe75e159deae7dcf6222628ade3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
