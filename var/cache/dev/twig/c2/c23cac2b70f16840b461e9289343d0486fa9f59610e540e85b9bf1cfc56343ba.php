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

/* emails/facture.html.twig */
class __TwigTemplate_d8a25afd84e2558097d1eaed650d4b9a9a20f89db8f515fded591fb3fc3c6707 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/facture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/facture.html.twig"));

        // line 1
        echo "
<h1> FACTURE </h1>

<h2>GOODBUY</h2>
<h4>Gagnant a tous les moments !</h4>

<div>Adresse Postale : 14 Rue Fructidor, SAINT-OUEN 93400</div>
<div>Telephone : +33 6 65 43 21 34</div>
<div>Fax : +33 9 65 43 21 34 </div>

<h3>Voici la facture de votre  ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " </h3>
<div>Objet : facture suite a commande</div>


<h4>Adresse de facturation</h4>
    <hr/>
    <br/>
    <table style=\"border-collapse: collapse;  width: 100%;\" >
    <tr>
        <th style=\"background-color : grey;border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\">Produit </th>
        <th style=\"background-color : grey;border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\">Quantite</th>
        <th style=\"background-color : grey;border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\">Prix </th>
        <th style=\"background-color : grey;border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\">Poids </th>
    </tr>
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 34
            echo "        <tr>
        <th style=\"border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\"> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "title", [], "any", false, false, false, 37), "html", null, true);
            echo " </th>
        <th style=\"border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\"> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "quantity", [], "any", false, false, false, 40), "html", null, true);
            echo " </th>
        <th style=\"border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\"> ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "price", [], "any", false, false, false, 43), "html", null, true);
            echo " €</th>
        <th style=\"border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\"> ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "weight", [], "any", false, false, false, 46), "html", null, true);
            echo " Kg</th>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    <tr>
    <th style=\"background-color : grey; border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\"> TOTAL : ";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["final"]) || array_key_exists("final", $context) ? $context["final"] : (function () { throw new RuntimeError('Variable "final" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " € (Promos et Code reduction compris)</th>
    </tr>
    </table>


<h5>GOODBUY , societe au capital de 73 000€ , SIRET : 0345N4095P</h5>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 52,  116 => 49,  107 => 46,  101 => 43,  95 => 40,  89 => 37,  84 => 34,  80 => 33,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<h1> FACTURE </h1>

<h2>GOODBUY</h2>
<h4>Gagnant a tous les moments !</h4>

<div>Adresse Postale : 14 Rue Fructidor, SAINT-OUEN 93400</div>
<div>Telephone : +33 6 65 43 21 34</div>
<div>Fax : +33 9 65 43 21 34 </div>

<h3>Voici la facture de votre  {{dates}} </h3>
<div>Objet : facture suite a commande</div>


<h4>Adresse de facturation</h4>
    <hr/>
    <br/>
    <table style=\"border-collapse: collapse;  width: 100%;\" >
    <tr>
        <th style=\"background-color : grey;border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\">Produit </th>
        <th style=\"background-color : grey;border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\">Quantite</th>
        <th style=\"background-color : grey;border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\">Prix </th>
        <th style=\"background-color : grey;border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\">Poids </th>
    </tr>
    {% for panier in paniers %}
        <tr>
        <th style=\"border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\"> {{ panier.title }} </th>
        <th style=\"border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\"> {{ panier.quantity }} </th>
        <th style=\"border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\"> {{ panier.price }} €</th>
        <th style=\"border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\"> {{ panier.weight }} Kg</th>
        </tr>
    {% endfor %}
    <tr>
    <th style=\"background-color : grey; border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;\"> TOTAL : {{final}} € (Promos et Code reduction compris)</th>
    </tr>
    </table>


<h5>GOODBUY , societe au capital de 73 000€ , SIRET : 0345N4095P</h5>
", "emails/facture.html.twig", "/home/yamsubunto/Bureau/back/Goodbuy/templates/emails/facture.html.twig");
    }
}
