<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_1f6ce6cca9a155d57487c5fb7a1c4e5b71b1be045336f9de791fa59ee63400b5 extends Twig_Template
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
        $__internal_f46b038a422b92f6f4d395d46a69d8296531a1f52ba92e2a40e3312aca822852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46b038a422b92f6f4d395d46a69d8296531a1f52ba92e2a40e3312aca822852->enter($__internal_f46b038a422b92f6f4d395d46a69d8296531a1f52ba92e2a40e3312aca822852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e57390b04a27c1b6a50434746a0bf2054a123ffeb3c40b166dc37af958c9ec47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57390b04a27c1b6a50434746a0bf2054a123ffeb3c40b166dc37af958c9ec47->enter($__internal_e57390b04a27c1b6a50434746a0bf2054a123ffeb3c40b166dc37af958c9ec47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f46b038a422b92f6f4d395d46a69d8296531a1f52ba92e2a40e3312aca822852->leave($__internal_f46b038a422b92f6f4d395d46a69d8296531a1f52ba92e2a40e3312aca822852_prof);

        
        $__internal_e57390b04a27c1b6a50434746a0bf2054a123ffeb3c40b166dc37af958c9ec47->leave($__internal_e57390b04a27c1b6a50434746a0bf2054a123ffeb3c40b166dc37af958c9ec47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
