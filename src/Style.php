<?php

namespace Melhorenvio\PhpCsFixer;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

class Style
{
    /**
     * @var Finder
     */
    protected $finder;

    /**
     * @var Config
     */
    protected $config;

    /**
     * Style constructor.
     * @param Finder $finder
     * @param Config $config
     */
    public function __construct(Finder $finder, Config $config)
    {
        $this->config = $config;

        $this->config->setFinder($finder);
    }

    /**
     * @param array $rules
     * @return Config
     */
    public function rules(array $rules = []): Config {
        $rules = array_merge(require __DIR__.'/rules.php', $rules);

        return $this->config->setRules($rules);
    }
}
