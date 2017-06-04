<?php

/* includes/navbar.html.twig */
class __TwigTemplate_06b22783d69a37040e6b114dc888cfbe5e57d6792198afaa231960b426d266dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e58fd648de378dbcaa4cc6ae79050900b5004158c5fcc4e3ff8febffe3deb870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58fd648de378dbcaa4cc6ae79050900b5004158c5fcc4e3ff8febffe3deb870->enter($__internal_e58fd648de378dbcaa4cc6ae79050900b5004158c5fcc4e3ff8febffe3deb870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/navbar.html.twig"));

        $__internal_577a2a120244a0d6cf2c7d3af0537ad807d19e2562cd0f075cda5ef74084f20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577a2a120244a0d6cf2c7d3af0537ad807d19e2562cd0f075cda5ef74084f20d->enter($__internal_577a2a120244a0d6cf2c7d3af0537ad807d19e2562cd0f075cda5ef74084f20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/navbar.html.twig"));

        // line 1
        echo " ";
        $this->displayBlock('nav', $context, $blocks);
        
        $__internal_e58fd648de378dbcaa4cc6ae79050900b5004158c5fcc4e3ff8febffe3deb870->leave($__internal_e58fd648de378dbcaa4cc6ae79050900b5004158c5fcc4e3ff8febffe3deb870_prof);

        
        $__internal_577a2a120244a0d6cf2c7d3af0537ad807d19e2562cd0f075cda5ef74084f20d->leave($__internal_577a2a120244a0d6cf2c7d3af0537ad807d19e2562cd0f075cda5ef74084f20d_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_e6a487672686d7541c5ee474b78cf27c1f53ab3447457888d1894439bdd1afa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6a487672686d7541c5ee474b78cf27c1f53ab3447457888d1894439bdd1afa2->enter($__internal_e6a487672686d7541c5ee474b78cf27c1f53ab3447457888d1894439bdd1afa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_da8eb83043ebbcb3ba041b757e45115494a28d6ae6294ea142e81e236f83f4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8eb83043ebbcb3ba041b757e45115494a28d6ae6294ea142e81e236f83f4a6->enter($__internal_da8eb83043ebbcb3ba041b757e45115494a28d6ae6294ea142e81e236f83f4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 2
        echo "<nav class=\"navbar navbar-default navbar-inverse\" role=\"navigation\">
  <div class=\"container-fluid\">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav navbar-right\">
      ";
        // line 7
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 8
            echo "        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b>Login</b> <span class=\"caret\"></span></a>
          <ul id=\"login-dp\" class=\"dropdown-menu\">
            <li>
              <div class=\"row\">
                <div class=\"col-md-12\">
                  ";
            // line 14
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FOSUserBundle:Security:login"));
            echo "
                </div>
                <div class=\"bottom text-center\">
                  New here ? <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"><b>Join Us</b></a>
                </div>
              </div>
            </li>

          </ul>
        </li>

        ";
        } else {
            // line 26
            echo "        <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
        <li><a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span></a></li>
        ";
        }
        // line 29
        echo "      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
";
        
        $__internal_da8eb83043ebbcb3ba041b757e45115494a28d6ae6294ea142e81e236f83f4a6->leave($__internal_da8eb83043ebbcb3ba041b757e45115494a28d6ae6294ea142e81e236f83f4a6_prof);

        
        $__internal_e6a487672686d7541c5ee474b78cf27c1f53ab3447457888d1894439bdd1afa2->leave($__internal_e6a487672686d7541c5ee474b78cf27c1f53ab3447457888d1894439bdd1afa2_prof);

    }

    public function getTemplateName()
    {
        return "includes/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  85 => 27,  80 => 26,  68 => 17,  62 => 14,  54 => 8,  52 => 7,  45 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% block nav %}
<nav class=\"navbar navbar-default navbar-inverse\" role=\"navigation\">
  <div class=\"container-fluid\">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav navbar-right\">
      {% if not is_granted(\"ROLE_USER\") %}
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b>Login</b> <span class=\"caret\"></span></a>
          <ul id=\"login-dp\" class=\"dropdown-menu\">
            <li>
              <div class=\"row\">
                <div class=\"col-md-12\">
                  {{ render(controller('FOSUserBundle:Security:login')) }}
                </div>
                <div class=\"bottom text-center\">
                  New here ? <a href=\"{{ path('fos_user_registration_register') }}\"><b>Join Us</b></a>
                </div>
              </div>
            </li>

          </ul>
        </li>

        {% else %}
        <li><a href=\"#\">{{ app.user.username }}</a></li>
        <li><a href=\"{{ path('fos_user_security_logout') }}\"><span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span></a></li>
        {% endif %}
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
{% endblock %}", "includes/navbar.html.twig", "/var/www/html/geek-letters/app/Resources/views/includes/navbar.html.twig");
    }
}
