<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c8fae400aa93098f9763d3f5f3d236effebb44d7b024410b8265e7a126b7263c extends Twig_Template
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
        $__internal_21e7ecc513681e1e29c3a8182287b83e9d4ba991fa9dacff357f9557c2b1c76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e7ecc513681e1e29c3a8182287b83e9d4ba991fa9dacff357f9557c2b1c76b->enter($__internal_21e7ecc513681e1e29c3a8182287b83e9d4ba991fa9dacff357f9557c2b1c76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_fc5cc6311e819c17c6d97be304cc0747b2585b5fe746b021de16aa139ddc6a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc5cc6311e819c17c6d97be304cc0747b2585b5fe746b021de16aa139ddc6a2e->enter($__internal_fc5cc6311e819c17c6d97be304cc0747b2585b5fe746b021de16aa139ddc6a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_21e7ecc513681e1e29c3a8182287b83e9d4ba991fa9dacff357f9557c2b1c76b->leave($__internal_21e7ecc513681e1e29c3a8182287b83e9d4ba991fa9dacff357f9557c2b1c76b_prof);

        
        $__internal_fc5cc6311e819c17c6d97be304cc0747b2585b5fe746b021de16aa139ddc6a2e->leave($__internal_fc5cc6311e819c17c6d97be304cc0747b2585b5fe746b021de16aa139ddc6a2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
