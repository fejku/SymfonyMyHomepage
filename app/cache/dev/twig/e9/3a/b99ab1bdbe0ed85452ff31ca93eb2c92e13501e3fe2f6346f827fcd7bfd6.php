<?php

/* MojeBlogBundle:Blog:index.html.twig */
class __TwigTemplate_e93ab99ab1bdbe0ed85452ff31ca93eb2c92e13501e3fe2f6346f827fcd7bfd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  
  <ul>
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "      <li>
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_article", array("idArticle" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a>
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo " 
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "imageAddress", array()), "html", null, true);
            echo "
        ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "creationDate", array()), "Y-m-d"), "html", null, true);
            echo "
        ";
            // line 12
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["article"], "comments", array())), "html", null, true);
            echo "
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </ul>

  ";
        // line 17
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != 1)) {
            echo "  
    <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
            echo "\">Poprzednia strona</a>
  ";
        }
        // line 20
        echo "  ";
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["ilosc_stron"]) ? $context["ilosc_stron"] : $this->getContext($context, "ilosc_stron")))) {
            // line 21
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
            echo "\">Nastepna strona</a>
  ";
        }
    }

    public function getTemplateName()
    {
        return "MojeBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  90 => 20,  85 => 18,  81 => 17,  77 => 15,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  50 => 8,  47 => 7,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
