<?php

/* MojeBlogBundle:Blog:add_article.html.twig */
class __TwigTemplate_f7d8a66db8f963946489a16da6bf9f1bbfb9002d635a4bc4b1cf46cb3e1a20a9 extends Twig_Template
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
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["addArticleForm"]) ? $context["addArticleForm"] : $this->getContext($context, "addArticleForm")), 'form_start');
        echo "
      ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addArticleForm"]) ? $context["addArticleForm"] : $this->getContext($context, "addArticleForm")), 'errors');
        echo "

      <div>
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addArticleForm"]) ? $context["addArticleForm"] : $this->getContext($context, "addArticleForm")), "title", array()), 'label');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addArticleForm"]) ? $context["addArticleForm"] : $this->getContext($context, "addArticleForm")), "title", array()), 'errors');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addArticleForm"]) ? $context["addArticleForm"] : $this->getContext($context, "addArticleForm")), "title", array()), 'widget');
        echo "
      </div>
      
      <div>
          ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addArticleForm"]) ? $context["addArticleForm"] : $this->getContext($context, "addArticleForm")), "content", array()), 'label');
        echo "
          ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addArticleForm"]) ? $context["addArticleForm"] : $this->getContext($context, "addArticleForm")), "content", array()), 'errors');
        echo "
          ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addArticleForm"]) ? $context["addArticleForm"] : $this->getContext($context, "addArticleForm")), "content", array()), 'widget');
        echo "
      </div>

      <div>
          ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addArticleForm"]) ? $context["addArticleForm"] : $this->getContext($context, "addArticleForm")), "image_address", array()), 'label');
        echo "
          ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addArticleForm"]) ? $context["addArticleForm"] : $this->getContext($context, "addArticleForm")), "image_address", array()), 'errors');
        echo "
          ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addArticleForm"]) ? $context["addArticleForm"] : $this->getContext($context, "addArticleForm")), "image_address", array()), 'widget');
        echo "
      </div>
      
      <div>
          ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addArticleForm"]) ? $context["addArticleForm"] : $this->getContext($context, "addArticleForm")), "save", array()), 'widget');
        echo "
      </div>
      
    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["addArticleForm"]) ? $context["addArticleForm"] : $this->getContext($context, "addArticleForm")), 'form_end');
        echo "
  
";
    }

    public function getTemplateName()
    {
        return "MojeBlogBundle:Blog:add_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 30,  97 => 27,  90 => 23,  86 => 22,  82 => 21,  75 => 17,  71 => 16,  67 => 15,  60 => 11,  56 => 10,  52 => 9,  46 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
