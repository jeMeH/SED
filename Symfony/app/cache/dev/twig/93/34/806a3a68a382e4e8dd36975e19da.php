<?php

/* ProjectSedBundle:Default:base.html.twig */
class __TwigTemplate_9334806a3a68a382e4e8dd36975e19da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <title>sed - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "pagina"), "html", null, true);
        echo "</title>
        <!--<meta http-equiv=\"refresh\" content=\"2\">-->
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/templateCSS.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    </head>

    <body>
        <header >
            <nav>
                <a href=\"inicio\"><menu class=\"item\">Inicio</menu></a>
                <a href=\"docentes\"><menu class=\"item\">Docentes</menu></a>
                <a href=\"materias\"><menu class=\"item\">Materias</menu></a>
                <a href=\"programas\"><menu class=\"item\">Programas</menu></a>
                <a href=\"cursos\"><menu class=\"item\">Cursos</menu></a>
                <a href=\"preguntas\"><menu class=\"item\">Preguntas</menu></a>
                <a href=\"reportes\"><menu class=\"item\">Reportes</menu></a>
                <a href=\"acerca\"><menu class=\"item\">Acerca de</menu></a>
            </nav>
        </header>

        <div id =\"contenedor\">
                ";
        // line 26
        $this->displayBlock('contenido', $context, $blocks);
        // line 28
        echo "
            </div>
            <footer>Universidad del Valle - Sede Palmira<br/><br/>&COPY;Jefferson Mendoza </footer>
        </body>
    </html>
";
    }

    // line 26
    public function block_contenido($context, array $blocks = array())
    {
        // line 27
        echo "                ";
    }

    public function getTemplateName()
    {
        return "ProjectSedBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 27,  64 => 26,  55 => 28,  53 => 26,  32 => 8,  26 => 5,  20 => 1,);
    }
}
