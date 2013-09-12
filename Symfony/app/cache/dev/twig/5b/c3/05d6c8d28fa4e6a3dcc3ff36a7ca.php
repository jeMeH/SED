<?php

/* ProjectSedBundle:Default:docentes.html.twig */
class __TwigTemplate_5bc305d6c8d28fa4e6a3dcc3ff36a7ca extends Twig_Template
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
        echo "<form method=\"POST\" enctype=\"multipart/form-data\">
    <table  border=0>
        <tr>
            <td>Cedula</td>
            <td><input type=\"text\" name=\"cedula\" title=\"Ingrese el numero de cedula del docente\"></td>
        </tr>
        <tr>
            <td>Nombres</td>
            <td><input type=\"text\" name=\"nombres\" title=\"Ingrese el/los nombre(s) del docente\"></td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td><input type=\"text\" name=\"apellidos\" title=\"Ingres el/los apellido(s) del docente\"></td>
        </tr>
        <tr>
            <td>Titulo</td>
            <td><input type=\"text\" name=\"titulo\" title=\"Ingrese el titulo principal del docente\"></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type=\"file\" name=\"foto\" title=\"Seleccione la foto del docente. (48x48)\"></td>
        </tr>
    </table>
    <input type=\"submit\" value=\"Guardar\">
</form>
<ul>
";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errores"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 31
            echo "
        <li>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </ul>
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
        // line 58
        echo "
    ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "docentes"));
        foreach ($context['_seq'] as $context["_key"] => $context["docente"]) {
            // line 60
            echo "    <tr>
        <td >";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docente"), "cedula"), "html", null, true);
            echo "</td>
        <td >";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docente"), "nombres"), "html", null, true);
            echo "</td>
        <td >";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docente"), "apellidos"), "html", null, true);
            echo "</td>
        <td >";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docente"), "titulo"), "html", null, true);
            echo "</td>
        <td><img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("/fotos/" . $this->getAttribute($this->getContext($context, "docente"), "foto"))), "html", null, true);
            echo "\"></td>
        <td></td>
        <td><a href='docentes?cedula=";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docente"), "cedula"), "html", null, true);
            echo "' >Eliminar</a></td>
        
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['docente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
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
        return array (  131 => 71,  121 => 67,  116 => 65,  112 => 64,  108 => 63,  104 => 62,  100 => 61,  97 => 60,  93 => 59,  90 => 58,  75 => 35,  66 => 32,  63 => 31,  59 => 30,  31 => 4,  28 => 3,);
    }
}
