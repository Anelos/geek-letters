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
        $__internal_7db807dbbb641627a0e0622482be22cc210ef282a90defef52d0acbfd892188e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db807dbbb641627a0e0622482be22cc210ef282a90defef52d0acbfd892188e->enter($__internal_7db807dbbb641627a0e0622482be22cc210ef282a90defef52d0acbfd892188e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/navbar.html.twig"));

        $__internal_eb3ffdd0e9186be43da4e028ee57d74e6fcba2cafe02ad10d040b6a41aa157fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3ffdd0e9186be43da4e028ee57d74e6fcba2cafe02ad10d040b6a41aa157fc->enter($__internal_eb3ffdd0e9186be43da4e028ee57d74e6fcba2cafe02ad10d040b6a41aa157fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/navbar.html.twig"));

        // line 1
        echo " ";
        $this->displayBlock('nav', $context, $blocks);
        
        $__internal_7db807dbbb641627a0e0622482be22cc210ef282a90defef52d0acbfd892188e->leave($__internal_7db807dbbb641627a0e0622482be22cc210ef282a90defef52d0acbfd892188e_prof);

        
        $__internal_eb3ffdd0e9186be43da4e028ee57d74e6fcba2cafe02ad10d040b6a41aa157fc->leave($__internal_eb3ffdd0e9186be43da4e028ee57d74e6fcba2cafe02ad10d040b6a41aa157fc_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_29e6b2e39646312d720bf727b3853fe0393ffcc7db10a7c46b8031620b77d96b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e6b2e39646312d720bf727b3853fe0393ffcc7db10a7c46b8031620b77d96b->enter($__internal_29e6b2e39646312d720bf727b3853fe0393ffcc7db10a7c46b8031620b77d96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_e2c7533513ca3465a6f263a157941d92d5996d26e56b7d2a048cbab6081d3b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c7533513ca3465a6f263a157941d92d5996d26e56b7d2a048cbab6081d3b9f->enter($__internal_e2c7533513ca3465a6f263a157941d92d5996d26e56b7d2a048cbab6081d3b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_e2c7533513ca3465a6f263a157941d92d5996d26e56b7d2a048cbab6081d3b9f->leave($__internal_e2c7533513ca3465a6f263a157941d92d5996d26e56b7d2a048cbab6081d3b9f_prof);

        
        $__internal_29e6b2e39646312d720bf727b3853fe0393ffcc7db10a7c46b8031620b77d96b->leave($__internal_29e6b2e39646312d720bf727b3853fe0393ffcc7db10a7c46b8031620b77d96b_prof);

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
