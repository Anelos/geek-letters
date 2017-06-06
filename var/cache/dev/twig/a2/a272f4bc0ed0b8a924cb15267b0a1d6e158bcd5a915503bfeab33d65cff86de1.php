<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a7e37a7496c77043fcf43c05e94fe5907de3fc290603fd99be2c74a3df89aa9d extends Twig_Template
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
        $__internal_5e834f8b3864f5b3c29a0408e2cd4d6085fffda4be2ba2eb43cf33676891268c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e834f8b3864f5b3c29a0408e2cd4d6085fffda4be2ba2eb43cf33676891268c->enter($__internal_5e834f8b3864f5b3c29a0408e2cd4d6085fffda4be2ba2eb43cf33676891268c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_856bf251cbf112aaa1e8635347d3dab4c370d29e81d1bfc6c75ec0e701117da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856bf251cbf112aaa1e8635347d3dab4c370d29e81d1bfc6c75ec0e701117da3->enter($__internal_856bf251cbf112aaa1e8635347d3dab4c370d29e81d1bfc6c75ec0e701117da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5e834f8b3864f5b3c29a0408e2cd4d6085fffda4be2ba2eb43cf33676891268c->leave($__internal_5e834f8b3864f5b3c29a0408e2cd4d6085fffda4be2ba2eb43cf33676891268c_prof);

        
        $__internal_856bf251cbf112aaa1e8635347d3dab4c370d29e81d1bfc6c75ec0e701117da3->leave($__internal_856bf251cbf112aaa1e8635347d3dab4c370d29e81d1bfc6c75ec0e701117da3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
