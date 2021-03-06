<?php

namespace AsyncPHP\Doorman;

interface Shell
{
    /**
     * Executes a command after filtering all parameters.
     *
     * @param string $format
     * @param array $parameters
     *
     * @return string|array
     */
    public function exec($format, array $parameters = []);
}
