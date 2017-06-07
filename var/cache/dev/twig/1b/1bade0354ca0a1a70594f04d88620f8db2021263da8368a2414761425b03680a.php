<?php

/* :includes:navbar.html.twig */
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
        $__internal_9239a86edbdf6da59e0f3087f9d57e735a798c2aa0084cbd42e6f98acc7ec2ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9239a86edbdf6da59e0f3087f9d57e735a798c2aa0084cbd42e6f98acc7ec2ca->enter($__internal_9239a86edbdf6da59e0f3087f9d57e735a798c2aa0084cbd42e6f98acc7ec2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":includes:navbar.html.twig"));

        $__internal_b2b9e1a25e23e2e1dcb82d0e95b1c496d738d8b6a3361488f60a7a0364865fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b9e1a25e23e2e1dcb82d0e95b1c496d738d8b6a3361488f60a7a0364865fa7->enter($__internal_b2b9e1a25e23e2e1dcb82d0e95b1c496d738d8b6a3361488f60a7a0364865fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":includes:navbar.html.twig"));

        // line 1
        echo " ";
        $this->displayBlock('nav', $context, $blocks);
        
        $__internal_9239a86edbdf6da59e0f3087f9d57e735a798c2aa0084cbd42e6f98acc7ec2ca->leave($__internal_9239a86edbdf6da59e0f3087f9d57e735a798c2aa0084cbd42e6f98acc7ec2ca_prof);

        
        $__internal_b2b9e1a25e23e2e1dcb82d0e95b1c496d738d8b6a3361488f60a7a0364865fa7->leave($__internal_b2b9e1a25e23e2e1dcb82d0e95b1c496d738d8b6a3361488f60a7a0364865fa7_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_c556ed98c17a4d2b3b8db6f76cc581f2de1bee96bb755dd560bb20b4418f4f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c556ed98c17a4d2b3b8db6f76cc581f2de1bee96bb755dd560bb20b4418f4f93->enter($__internal_c556ed98c17a4d2b3b8db6f76cc581f2de1bee96bb755dd560bb20b4418f4f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_a696d217e7d3dbc62ea89f24d0db0f6c2dc2b5982997981b0b7ff170e323d34f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a696d217e7d3dbc62ea89f24d0db0f6c2dc2b5982997981b0b7ff170e323d34f->enter($__internal_a696d217e7d3dbc62ea89f24d0db0f6c2dc2b5982997981b0b7ff170e323d34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_a696d217e7d3dbc62ea89f24d0db0f6c2dc2b5982997981b0b7ff170e323d34f->leave($__internal_a696d217e7d3dbc62ea89f24d0db0f6c2dc2b5982997981b0b7ff170e323d34f_prof);

        
        $__internal_c556ed98c17a4d2b3b8db6f76cc581f2de1bee96bb755dd560bb20b4418f4f93->leave($__internal_c556ed98c17a4d2b3b8db6f76cc581f2de1bee96bb755dd560bb20b4418f4f93_prof);

    }

    public function getTemplateName()
    {
        return ":includes:navbar.html.twig";
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
", ":includes:navbar.html.twig", "/var/www/html/geek-letters/app/Resources/views/includes/navbar.html.twig");
    }
}
