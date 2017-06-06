<?php

/* :includes:navbar.html.twig */
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
        $__internal_89e57da7dd9a9932f4c1189124fbdbb65970e91d738f5cd19c1f379d9d2e250e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e57da7dd9a9932f4c1189124fbdbb65970e91d738f5cd19c1f379d9d2e250e->enter($__internal_89e57da7dd9a9932f4c1189124fbdbb65970e91d738f5cd19c1f379d9d2e250e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":includes:navbar.html.twig"));

        $__internal_dbdaf0f264f69c7477a5e0c8764e76bfb923ad9f8273dae29935df15409fa83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbdaf0f264f69c7477a5e0c8764e76bfb923ad9f8273dae29935df15409fa83e->enter($__internal_dbdaf0f264f69c7477a5e0c8764e76bfb923ad9f8273dae29935df15409fa83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":includes:navbar.html.twig"));

        // line 1
        echo " ";
        $this->displayBlock('nav', $context, $blocks);
        
        $__internal_89e57da7dd9a9932f4c1189124fbdbb65970e91d738f5cd19c1f379d9d2e250e->leave($__internal_89e57da7dd9a9932f4c1189124fbdbb65970e91d738f5cd19c1f379d9d2e250e_prof);

        
        $__internal_dbdaf0f264f69c7477a5e0c8764e76bfb923ad9f8273dae29935df15409fa83e->leave($__internal_dbdaf0f264f69c7477a5e0c8764e76bfb923ad9f8273dae29935df15409fa83e_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_4ab99e83c7d4bd3b139c25dd5a81dd4bce2e5ea433d9ab3992631b9351e38572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab99e83c7d4bd3b139c25dd5a81dd4bce2e5ea433d9ab3992631b9351e38572->enter($__internal_4ab99e83c7d4bd3b139c25dd5a81dd4bce2e5ea433d9ab3992631b9351e38572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_ff27164953919f81a65eec27518d8430262ca3d2cae3c50763bfc9ca4a13e5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff27164953919f81a65eec27518d8430262ca3d2cae3c50763bfc9ca4a13e5eb->enter($__internal_ff27164953919f81a65eec27518d8430262ca3d2cae3c50763bfc9ca4a13e5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_ff27164953919f81a65eec27518d8430262ca3d2cae3c50763bfc9ca4a13e5eb->leave($__internal_ff27164953919f81a65eec27518d8430262ca3d2cae3c50763bfc9ca4a13e5eb_prof);

        
        $__internal_4ab99e83c7d4bd3b139c25dd5a81dd4bce2e5ea433d9ab3992631b9351e38572->leave($__internal_4ab99e83c7d4bd3b139c25dd5a81dd4bce2e5ea433d9ab3992631b9351e38572_prof);

    }

    public function getTemplateName()
    {
        return ":includes:navbar.html.twig";
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
{% endblock %}", ":includes:navbar.html.twig", "/var/www/html/geek-letters/app/Resources/views/includes/navbar.html.twig");
    }
}
