<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_18597bc028695795cd64017f04b8918933a548f08417975d6bc4c7623ad9ee3a extends Twig_Template
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
        $__internal_c388e3df3e06bc8a80e74ed2c31fb1c41806b68602b8b913681525378ee3d754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c388e3df3e06bc8a80e74ed2c31fb1c41806b68602b8b913681525378ee3d754->enter($__internal_c388e3df3e06bc8a80e74ed2c31fb1c41806b68602b8b913681525378ee3d754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c447a34bdef676ef9157de53df4936580b01d5aeb1b3686534a575aabf82d237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c447a34bdef676ef9157de53df4936580b01d5aeb1b3686534a575aabf82d237->enter($__internal_c447a34bdef676ef9157de53df4936580b01d5aeb1b3686534a575aabf82d237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c388e3df3e06bc8a80e74ed2c31fb1c41806b68602b8b913681525378ee3d754->leave($__internal_c388e3df3e06bc8a80e74ed2c31fb1c41806b68602b8b913681525378ee3d754_prof);

        
        $__internal_c447a34bdef676ef9157de53df4936580b01d5aeb1b3686534a575aabf82d237->leave($__internal_c447a34bdef676ef9157de53df4936580b01d5aeb1b3686534a575aabf82d237_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
