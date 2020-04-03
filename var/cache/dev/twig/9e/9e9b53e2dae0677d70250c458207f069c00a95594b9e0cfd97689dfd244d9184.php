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

/* admin/admin_oferta/editarOferta.html.twig */
class __TwigTemplate_c6b86b57e471b205d9daae4658205707abc70de08e818850f66befdf722f247c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_oferta/editarOferta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_oferta/editarOferta.html.twig"));

        $this->parent = $this->loadTemplate("menu.html.twig", "admin/admin_oferta/editarOferta.html.twig", 1);
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

        echo "Hello AdminOfertaController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <table class=\"table table-hover\">
        <thead>
            <tr>
            <th scope=\"col\">Id</th>
            <th scope=\"col\">Titulo</th>
            <th scope=\"col\">Descripcion</th>
            <th scope=\"col\">Fecha</th>
            <th scope=\"col\">Empresa</th>
            <th scope=\"col\"> <a class=\"btn btn-primary\"
                        href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newOferta");
        // line 17
        echo "\">
                        Afegir
                    </a></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ofertas"]) || array_key_exists("ofertas", $context) ? $context["ofertas"] : (function () { throw new RuntimeError('Variable "ofertas" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
            // line 24
            echo "                <tr>
                <th scope=\"row\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oferta"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</th>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oferta"], "titol", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oferta"], "descripcio", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oferta"], "dataPub", [], "any", false, false, false, 28), "Y/m/d"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oferta"], "empresa", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <th scope=\"col\">
                    <a class=\"btn btn-primary\"
                        href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_oferta_modif", ["id" => twig_get_attribute($this->env, $this->source,             // line 33
$context["oferta"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            // line 34
            echo "\">
                        Modificar
                    </a>
                    <a class=\"btn btn-primary\"
                        href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_oferta_elim", ["id" => twig_get_attribute($this->env, $this->source,             // line 39
$context["oferta"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            // line 40
            echo "\">
                        Eliminar
                    </a>
                </th>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            
        </tbody>
    </table>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_oferta/editarOferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 46,  151 => 40,  149 => 39,  148 => 38,  142 => 34,  140 => 33,  139 => 32,  133 => 29,  129 => 28,  125 => 27,  121 => 26,  117 => 25,  114 => 24,  110 => 23,  102 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'menu.html.twig' %}

{% block title %}Hello AdminOfertaController!{% endblock %}

{% block body %}

    <table class=\"table table-hover\">
        <thead>
            <tr>
            <th scope=\"col\">Id</th>
            <th scope=\"col\">Titulo</th>
            <th scope=\"col\">Descripcion</th>
            <th scope=\"col\">Fecha</th>
            <th scope=\"col\">Empresa</th>
            <th scope=\"col\"> <a class=\"btn btn-primary\"
                        href=\"{{path(\"newOferta\"
                        )}}\">
                        Afegir
                    </a></th>
            </tr>
        </thead>
        <tbody>
            {% for oferta in ofertas %}
                <tr>
                <th scope=\"row\">{{oferta.id}}</th>
                <td>{{oferta.titol}}</td>
                <td>{{oferta.descripcio}}</td>
                <td>{{oferta.dataPub|date(\"Y/m/d\")}}</td>
                <td>{{oferta.empresa}}</td>
                <th scope=\"col\">
                    <a class=\"btn btn-primary\"
                        href=\"{{path(\"admin_oferta_modif\",
                            {'id': oferta.id}
                        )}}\">
                        Modificar
                    </a>
                    <a class=\"btn btn-primary\"
                        href=\"{{path(\"admin_oferta_elim\",
                            {'id': oferta.id}
                        )}}\">
                        Eliminar
                    </a>
                </th>
                </tr>
            {% endfor %}
            
        </tbody>
    </table>
    
{% endblock %}", "admin/admin_oferta/editarOferta.html.twig", "/home/odin/JobOrWork/templates/admin/admin_oferta/editarOferta.html.twig");
    }
}
