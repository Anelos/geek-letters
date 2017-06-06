<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_1920a617f81d47a0de2f07971a40a96322fd59ffaac9f70be226910e717044ce extends Twig_Template
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
        $__internal_d71fe8e565411955b5c98d953cb7ba57ff4371fdeb24c4469bbbf0af66948fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d71fe8e565411955b5c98d953cb7ba57ff4371fdeb24c4469bbbf0af66948fb6->enter($__internal_d71fe8e565411955b5c98d953cb7ba57ff4371fdeb24c4469bbbf0af66948fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_8d72b547fac7f7ce7187bbf5906d12bbbc019262fbaf8e89403faa3cf99acb95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d72b547fac7f7ce7187bbf5906d12bbbc019262fbaf8e89403faa3cf99acb95->enter($__internal_8d72b547fac7f7ce7187bbf5906d12bbbc019262fbaf8e89403faa3cf99acb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d71fe8e565411955b5c98d953cb7ba57ff4371fdeb24c4469bbbf0af66948fb6->leave($__internal_d71fe8e565411955b5c98d953cb7ba57ff4371fdeb24c4469bbbf0af66948fb6_prof);

        
        $__internal_8d72b547fac7f7ce7187bbf5906d12bbbc019262fbaf8e89403faa3cf99acb95->leave($__internal_8d72b547fac7f7ce7187bbf5906d12bbbc019262fbaf8e89403faa3cf99acb95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
