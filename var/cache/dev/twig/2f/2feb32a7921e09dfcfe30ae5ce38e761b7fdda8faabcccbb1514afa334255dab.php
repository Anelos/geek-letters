<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_0a02a795612990e7ca4fe97a4ed9338a6af86890030a8f5c4e7a91de7189d9ec extends Twig_Template
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
        $__internal_2fecbcd0bdbf2b20925b3573232dfc3782058eedcc622502dabd91926221fd5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fecbcd0bdbf2b20925b3573232dfc3782058eedcc622502dabd91926221fd5a->enter($__internal_2fecbcd0bdbf2b20925b3573232dfc3782058eedcc622502dabd91926221fd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1c9ccc30d5c458009209595475fb368607dcadfe9f9da20d537e182fe4722bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9ccc30d5c458009209595475fb368607dcadfe9f9da20d537e182fe4722bc3->enter($__internal_1c9ccc30d5c458009209595475fb368607dcadfe9f9da20d537e182fe4722bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2fecbcd0bdbf2b20925b3573232dfc3782058eedcc622502dabd91926221fd5a->leave($__internal_2fecbcd0bdbf2b20925b3573232dfc3782058eedcc622502dabd91926221fd5a_prof);

        
        $__internal_1c9ccc30d5c458009209595475fb368607dcadfe9f9da20d537e182fe4722bc3->leave($__internal_1c9ccc30d5c458009209595475fb368607dcadfe9f9da20d537e182fe4722bc3_prof);

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
