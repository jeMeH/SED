<?php

/* ProjectSedBundle:Default:materias.html.twig */
class __TwigTemplate_db9680e319f4e21a8bcd2f04305517b0 extends Twig_Template
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
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "
<table border=\"1\">
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Programa</th>
        <th>Creditos</th>
        <th>No. Semestre</th>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "ProjectSedBundle:Default:materias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,);
    }
}
