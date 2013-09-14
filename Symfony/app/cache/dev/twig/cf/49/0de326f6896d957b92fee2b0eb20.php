<?php

/* ProjectSedBundle:Default:docentes.html.twig */
class __TwigTemplate_cf490de326f6896d957b92fee2b0eb20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProjectSedBundle:Default:base.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjectSedBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "
     
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo " 

";
        // line 39
        echo "</ul>
<table border=\"1\">

    <tr> 
        <th>Cédula</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Titulo</th>
        <th>Foto</th>
        <th>Actualizar</th>
        <th>Eliminar</th>
    </tr>

    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["docentes"]) ? $context["docentes"] : $this->getContext($context, "docentes")));
        foreach ($context['_seq'] as $context["_key"] => $context["docente"]) {
            // line 53
            echo "    <form action=\"#\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
            echo ">
        <tr>
            <td >";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["docente"]) ? $context["docente"] : $this->getContext($context, "docente")), "cedula"), "html", null, true);
            echo "</td>
            <td >";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["docente"]) ? $context["docente"] : $this->getContext($context, "docente")), "nombres"), "html", null, true);
            echo "</td>
            <td >";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["docente"]) ? $context["docente"] : $this->getContext($context, "docente")), "apellidos"), "html", null, true);
            echo "</td>
            <td >";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["docente"]) ? $context["docente"] : $this->getContext($context, "docente")), "titulo"), "html", null, true);
            echo "</td>
            <td><img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("fotos/" . $this->getAttribute((isset($context["docente"]) ? $context["docente"] : $this->getContext($context, "docente")), "foto"))), "html", null, true);
            echo "\"></td>
            <td><a href=\"#\"> Actualizar</a></td>
            <td><a href='docentes/eliminar/";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["docente"]) ? $context["docente"] : $this->getContext($context, "docente")), "cedula"), "html", null, true);
            echo "' >Eliminar</a></td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['docente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "ProjectSedBundle:Default:docentes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 65,  87 => 61,  82 => 59,  78 => 58,  74 => 57,  70 => 56,  66 => 55,  59 => 53,  55 => 52,  40 => 39,  35 => 6,  31 => 4,  28 => 3,);
    }
}
