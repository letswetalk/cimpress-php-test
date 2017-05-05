<?php

namespace Controller;


class BaseController
{
    /**
     * @var \Twig_Environment
     */
    private $twig;

    /**
     * BaseController constructor.
     */
    function __construct()
    {
        $loader = new \Twig_Loader_Filesystem('Templates');
        $this->twig = new \Twig_Environment($loader);
    }

    /**
     * @param $template
     * @param $params
     * @return string
     */
    function render($template, $params) {
        $template = $this->twig->loadTemplate($template);
        echo $template->render($params);
    }

}