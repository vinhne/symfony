<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_3d0580328dea5cdff27c00586db7a3f8b381abd1ea34d18a9769a81bb1a239e1 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  81 => 20,  76 => 35,  73 => 34,  67 => 32,  61 => 29,  56 => 28,  53 => 27,  51 => 26,  48 => 25,  45 => 24,  42 => 23,  38 => 21,  32 => 19,  30 => 13,  24 => 12,  21 => 11,  39 => 18,  36 => 20,  34 => 16,  31 => 15,  29 => 15,  26 => 14,  22 => 12,  19 => 11,);
    }
}
