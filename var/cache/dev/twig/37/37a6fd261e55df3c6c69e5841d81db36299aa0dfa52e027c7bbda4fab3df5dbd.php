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
        $__internal_bf546105d17357034aa07dc0bfa44b9c96b76f88934c7e87f2f65c18afcc8aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf546105d17357034aa07dc0bfa44b9c96b76f88934c7e87f2f65c18afcc8aab->enter($__internal_bf546105d17357034aa07dc0bfa44b9c96b76f88934c7e87f2f65c18afcc8aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":includes:navbar.html.twig"));

        $__internal_3d2faaaa1c571d5d5316a946beed99584ee64f41f761ea3156ff904b35931c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2faaaa1c571d5d5316a946beed99584ee64f41f761ea3156ff904b35931c25->enter($__internal_3d2faaaa1c571d5d5316a946beed99584ee64f41f761ea3156ff904b35931c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":includes:navbar.html.twig"));

        // line 1
        echo " ";
        $this->displayBlock('nav', $context, $blocks);
        
        $__internal_bf546105d17357034aa07dc0bfa44b9c96b76f88934c7e87f2f65c18afcc8aab->leave($__internal_bf546105d17357034aa07dc0bfa44b9c96b76f88934c7e87f2f65c18afcc8aab_prof);

        
        $__internal_3d2faaaa1c571d5d5316a946beed99584ee64f41f761ea3156ff904b35931c25->leave($__internal_3d2faaaa1c571d5d5316a946beed99584ee64f41f761ea3156ff904b35931c25_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_643b0bb234a77414a03aad2b5f2b41cb609dd96dcd387b307964e680b690e497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643b0bb234a77414a03aad2b5f2b41cb609dd96dcd387b307964e680b690e497->enter($__internal_643b0bb234a77414a03aad2b5f2b41cb609dd96dcd387b307964e680b690e497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_2b02b3fab3b60b43789870d24bdfd4261fdf4fa6334125d942c40443177b7eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b02b3fab3b60b43789870d24bdfd4261fdf4fa6334125d942c40443177b7eee->enter($__internal_2b02b3fab3b60b43789870d24bdfd4261fdf4fa6334125d942c40443177b7eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_2b02b3fab3b60b43789870d24bdfd4261fdf4fa6334125d942c40443177b7eee->leave($__internal_2b02b3fab3b60b43789870d24bdfd4261fdf4fa6334125d942c40443177b7eee_prof);

        
        $__internal_643b0bb234a77414a03aad2b5f2b41cb609dd96dcd387b307964e680b690e497->leave($__internal_643b0bb234a77414a03aad2b5f2b41cb609dd96dcd387b307964e680b690e497_prof);

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
