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

/* empresa/detalleEmpresa.html.twig */
class __TwigTemplate_ceca5225f2d87a164aad2bebf3d892098680a0e9eafccbcdf74df3d63b5addae extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empresa/detalleEmpresa.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empresa/detalleEmpresa.html.twig"));

        $this->parent = $this->loadTemplate("menu.html.twig", "empresa/detalleEmpresa.html.twig", 1);
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

        echo "JobOrWork";
        
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
    <div class=\"container\">
        <br>
        <div class=\"row\">
            <div class=\"col-3\">
            </div>
            <div class=\"col-6\">
                <div class=\"card mb-3\" style=\"max-width: 540px;\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-md-4\">
                        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/.{{empresa.logo}}"), "html", null, true);
        echo "\" class=\"card-img\" alt=\"...\">
                        </div>
                        <div class=\"col-md-8\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo "</h5>
                            <p class=\"card-text\">Correo: ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 21, $this->source); })()), "correu", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                            <p class=\"card-text\"><small class=\"text-muted\">Tipo: ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 22, $this->source); })()), "tipus", [], "any", false, false, false, 22), "html", null, true);
        echo "</small></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-3\">
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-3\">
            </div>
            <div class=\"list-group col-6\">
            
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ofertas"]) || array_key_exists("ofertas", $context) ? $context["ofertas"] : (function () { throw new RuntimeError('Variable "ofertas" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
            // line 38
            echo "                    <a href=\"/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oferta"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\" class=\"list-group-item list-group-item-action\">
                        ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oferta"], "titol", [], "any", false, false, false, 39), "html", null, true);
            echo "
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                
            </div>

            <div class=\"col-3\">
            </div>
        </div>
    </div>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "empresa/detalleEmpresa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 42,  142 => 39,  137 => 38,  133 => 37,  115 => 22,  111 => 21,  107 => 20,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'menu.html.twig' %}

{% block title %}JobOrWork{% endblock %}

{% block body %}

    <div class=\"container\">
        <br>
        <div class=\"row\">
            <div class=\"col-3\">
            </div>
            <div class=\"col-6\">
                <div class=\"card mb-3\" style=\"max-width: 540px;\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-md-4\">
                        <img src=\"{{asset('img/.{{empresa.logo}}')}}\" class=\"card-img\" alt=\"...\">
                        </div>
                        <div class=\"col-md-8\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{empresa.nom}}</h5>
                            <p class=\"card-text\">Correo: {{empresa.correu}}</p>
                            <p class=\"card-text\"><small class=\"text-muted\">Tipo: {{empresa.tipus}}</small></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-3\">
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-3\">
            </div>
            <div class=\"list-group col-6\">
            
                {% for oferta in ofertas %}
                    <a href=\"/{{oferta.id}}\" class=\"list-group-item list-group-item-action\">
                        {{ oferta.titol }}
                    </a>
                {% endfor %}
                
            </div>

            <div class=\"col-3\">
            </div>
        </div>
    </div>
    

{% endblock %}", "empresa/detalleEmpresa.html.twig", "/home/odin/JobOrWork/templates/empresa/detalleEmpresa.html.twig");
    }
}
