<?php

/* MojeBlogBundle:Blog:article.html.twig */
class __TwigTemplate_3f51d77fb7924836f609b2c21654db49e0db60c67bf2b5bf2f34361e0aaa3752 extends Twig_Template
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
        echo "  <div>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</div>
  <div>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</div>
  <div>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "imageAddress", array()), "html", null, true);
        echo "</div>
  
   ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["addCommentForm"]) ? $context["addCommentForm"] : $this->getContext($context, "addCommentForm")), 'form_start');
        echo "
      ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addCommentForm"]) ? $context["addCommentForm"] : $this->getContext($context, "addCommentForm")), 'errors');
        echo "

      <div>
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addCommentForm"]) ? $context["addCommentForm"] : $this->getContext($context, "addCommentForm")), "author", array()), 'label');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addCommentForm"]) ? $context["addCommentForm"] : $this->getContext($context, "addCommentForm")), "author", array()), 'errors');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addCommentForm"]) ? $context["addCommentForm"] : $this->getContext($context, "addCommentForm")), "author", array()), 'widget');
        echo "
      </div>
      
      <div>
          ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addCommentForm"]) ? $context["addCommentForm"] : $this->getContext($context, "addCommentForm")), "content", array()), 'label');
        echo "
          ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addCommentForm"]) ? $context["addCommentForm"] : $this->getContext($context, "addCommentForm")), "content", array()), 'errors');
        echo "
          ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addCommentForm"]) ? $context["addCommentForm"] : $this->getContext($context, "addCommentForm")), "content", array()), 'widget');
        echo "
      </div>

      <div>
          ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addCommentForm"]) ? $context["addCommentForm"] : $this->getContext($context, "addCommentForm")), "save", array()), 'widget');
        echo "
      </div>
      
    ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["addCommentForm"]) ? $context["addCommentForm"] : $this->getContext($context, "addCommentForm")), 'form_end');
        echo "
  
  <ul>
    ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 31
            echo "      <li>
        ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", array()), "html", null, true);
            echo "
        ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo " 
        ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "creationDate", array()), "Y-m-d"), "html", null, true);
            echo "
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "  </ul>
";
    }

    public function getTemplateName()
    {
        return "MojeBlogBundle:Blog:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 37,  120 => 34,  116 => 33,  112 => 32,  109 => 31,  105 => 30,  99 => 27,  93 => 24,  86 => 20,  82 => 19,  78 => 18,  71 => 14,  67 => 13,  63 => 12,  57 => 9,  53 => 8,  48 => 6,  44 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
