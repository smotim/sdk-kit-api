<?php

namespace service\KitAPI\Component\Serializer\Template;

use Twig\Environment;
use Twig\Loader\ArrayLoader;

abstract class AbstractTemplate
{
    /**
     * @var Environment
     */
    private $twig;

    public function __construct()
    {
        $this->twig = new Environment(new ArrayLoader(), ['autoescape' => false]);
    }

    /**
     * @param string $template
     * @param array $parameters
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\SyntaxError
     */
    protected function render(string $template, array $parameters): string
    {
        $tmpl = $this->twig->createTemplate($template);

        return $tmpl->render($parameters);
    }

}