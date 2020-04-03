<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/admin_empresa/index.html.twig */
class __TwigTemplate_8fcaab9647559d169f83740d76da0a1782febad7f1901541111f492730deb221 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_empresa/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_empresa/index.html.twig"));

        $this->parent = $this->loadTemplate("menu.html.twig", "admin/admin_empresa/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AdminEmpresaController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <table class=\"table table-hover\">
        <thead>
            <tr>
            <th scope=\"col\">Id</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Tipus</th>
            <th scope=\"col\">Correu</th>
            <th scope=\"col\">Logo</th>
            <th scope=\"col\"> <a class=\"btn btn-primary\"
                        href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newEmpresa");
        // line 18
        echo "\">
                        Afegir
                    </a></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) || array_key_exists("empresas", $context) ? $context["empresas"] : (function () { throw new RuntimeError('Variable "empresas" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 25
            echo "                <tr>
                <th scope=\"row\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</th>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "tipus", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "correu", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "logo", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <th scope=\"col\">
                    <a class=\"btn btn-primary\"
                        href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_empresa_modif", ["id" => twig_get_attribute($this->env, $this->source,             // line 34
$context["empresa"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            // line 35
            echo "\">
                        Modificar
                    </a>
                    <a class=\"btn btn-primary\"
                        href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_empresa_elim", ["id" => twig_get_attribute($this->env, $this->source,             // line 40
$context["empresa"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            // line 41
            echo "\">
                        Eliminar
                    </a>
                </th>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            
        </tbody>
    </table>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_empresa/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 47,  151 => 41,  149 => 40,  148 => 39,  142 => 35,  140 => 34,  139 => 33,  133 => 30,  129 => 29,  125 => 28,  121 => 27,  117 => 26,  114 => 25,  110 => 24,  102 => 18,  100 => 17,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'menu.html.twig' %}

{% block title %}Hello AdminEmpresaController!{% endblock %}


{% block body %}

    <table class=\"table table-hover\">
        <thead>
            <tr>
            <th scope=\"col\">Id</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Tipus</th>
            <th scope=\"col\">Correu</th>
            <th scope=\"col\">Logo</th>
            <th scope=\"col\"> <a class=\"btn btn-primary\"
                        href=\"{{path(\"newEmpresa\"
                        )}}\">
                        Afegir
                    </a></th>
            </tr>
        </thead>
        <tbody>
            {% for empresa in empresas %}
                <tr>
                <th scope=\"row\">{{empresa.id}}</th>
                <td>{{empresa.nom}}</td>
                <td>{{empresa.tipus}}</td>
                <td>{{empresa.correu}}</td>
                <td>{{empresa.logo}}</td>
                <th scope=\"col\">
                    <a class=\"btn btn-primary\"
                        href=\"{{path(\"admin_empresa_modif\",
                            {'id': empresa.id}
                        )}}\">
                        Modificar
                    </a>
                    <a class=\"btn btn-primary\"
                        href=\"{{path(\"admin_empresa_elim\",
                            {'id': empresa.id}
                        )}}\">
                        Eliminar
                    </a>
                </th>
                </tr>
            {% endfor %}
            
        </tbody>
    </table>
    
{% endblock %}", "admin/admin_empresa/index.html.twig", "/home/odin/JobOrWork/templates/admin/admin_empresa/index.html.twig");
    }
}
