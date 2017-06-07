<?php

/* includes/navbar.html.twig */
class __TwigTemplate_95d0715462819d6fd41c1266430173ea4931eb6847cc94894e46ac7dbf4d00d1 extends Twig_Template
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
        $__internal_59ea35f256477be1e14941664eb3d74045599468ff9a59f90b7c1a06bdbaeb75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ea35f256477be1e14941664eb3d74045599468ff9a59f90b7c1a06bdbaeb75->enter($__internal_59ea35f256477be1e14941664eb3d74045599468ff9a59f90b7c1a06bdbaeb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/navbar.html.twig"));

        $__internal_6ba6420bfbdb3bd6c67367e0056b4b04d2c0c9001369d8f3fcfe067197e89a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba6420bfbdb3bd6c67367e0056b4b04d2c0c9001369d8f3fcfe067197e89a7d->enter($__internal_6ba6420bfbdb3bd6c67367e0056b4b04d2c0c9001369d8f3fcfe067197e89a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/navbar.html.twig"));

        // line 1
        echo " ";
        $this->displayBlock('nav', $context, $blocks);
        
        $__internal_59ea35f256477be1e14941664eb3d74045599468ff9a59f90b7c1a06bdbaeb75->leave($__internal_59ea35f256477be1e14941664eb3d74045599468ff9a59f90b7c1a06bdbaeb75_prof);

        
        $__internal_6ba6420bfbdb3bd6c67367e0056b4b04d2c0c9001369d8f3fcfe067197e89a7d->leave($__internal_6ba6420bfbdb3bd6c67367e0056b4b04d2c0c9001369d8f3fcfe067197e89a7d_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_3dd9704491201b66b248f11422d1cb2a663cc2b99c3dd7633556c796c366e6bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd9704491201b66b248f11422d1cb2a663cc2b99c3dd7633556c796c366e6bc->enter($__internal_3dd9704491201b66b248f11422d1cb2a663cc2b99c3dd7633556c796c366e6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_982314f536bdfc0bb680e07e43c925c0f64459af703fec3462883e623d13b2a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982314f536bdfc0bb680e07e43c925c0f64459af703fec3462883e623d13b2a5->enter($__internal_982314f536bdfc0bb680e07e43c925c0f64459af703fec3462883e623d13b2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 2
        echo "<nav class=\"navbar navbar-default navbar-inverse\" role=\"navigation\">
  <div class=\"container-fluid\">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">


      <a class=\"navbar-brand\" href=\"http://127.0.0.1:8000\">Geek Letter</a>

      <ul class=\"nav navbar-nav navbar-right\">
      ";
        // line 11
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 12
            echo "        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b>Login</b> <span class=\"caret\"></span></a>
          <ul id=\"login-dp\" class=\"dropdown-menu\">
            <li>
              <div class=\"row\">
                <div class=\"col-md-12\">
                  ";
            // line 18
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FOSUserBundle:Security:login"));
            echo "
                </div>
                <div class=\"bottom text-center\">
                  New here ? <a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"><b>Join Us</b></a>
                </div>
              </div>
            </li>

          </ul>
        </li>

        ";
        } else {
            // line 30
            echo "        <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
        <li><a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span></a></li>
        ";
        }
        // line 33
        echo "      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
";
        
        $__internal_982314f536bdfc0bb680e07e43c925c0f64459af703fec3462883e623d13b2a5->leave($__internal_982314f536bdfc0bb680e07e43c925c0f64459af703fec3462883e623d13b2a5_prof);

        
        $__internal_3dd9704491201b66b248f11422d1cb2a663cc2b99c3dd7633556c796c366e6bc->leave($__internal_3dd9704491201b66b248f11422d1cb2a663cc2b99c3dd7633556c796c366e6bc_prof);

    }

    public function getTemplateName()
    {
        return "includes/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  89 => 31,  84 => 30,  72 => 21,  66 => 18,  58 => 12,  56 => 11,  45 => 2,  26 => 1,);
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


      <a class=\"navbar-brand\" href=\"http://127.0.0.1:8000\">Geek Letter</a>

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
{% endblock %}
", "includes/navbar.html.twig", "/var/www/html/geek-letters/app/Resources/views/includes/navbar.html.twig");
    }
}
