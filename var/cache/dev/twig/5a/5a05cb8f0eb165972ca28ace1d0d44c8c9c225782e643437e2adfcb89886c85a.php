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
        $__internal_82f26d13a871b2c5bfb82a3bd2b0222ce0ad82b6948564fff5325acb48bacacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f26d13a871b2c5bfb82a3bd2b0222ce0ad82b6948564fff5325acb48bacacc->enter($__internal_82f26d13a871b2c5bfb82a3bd2b0222ce0ad82b6948564fff5325acb48bacacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9047fa36e015323701146209942196a3edaee5822961868fca4b20d6d03d4f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9047fa36e015323701146209942196a3edaee5822961868fca4b20d6d03d4f99->enter($__internal_9047fa36e015323701146209942196a3edaee5822961868fca4b20d6d03d4f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_82f26d13a871b2c5bfb82a3bd2b0222ce0ad82b6948564fff5325acb48bacacc->leave($__internal_82f26d13a871b2c5bfb82a3bd2b0222ce0ad82b6948564fff5325acb48bacacc_prof);

        
        $__internal_9047fa36e015323701146209942196a3edaee5822961868fca4b20d6d03d4f99->leave($__internal_9047fa36e015323701146209942196a3edaee5822961868fca4b20d6d03d4f99_prof);

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
