<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpMenu'.\DIRECTORY_SEPARATOR.'ProvidersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpMenu'.\DIRECTORY_SEPARATOR.'TwigConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class KnpMenuConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $providers;
    private $twig;
    private $templating;
    private $defaultRenderer;
    
    public function providers(array $value = []): \Symfony\Config\KnpMenu\ProvidersConfig
    {
        if (null === $this->providers) {
            $this->providers = new \Symfony\Config\KnpMenu\ProvidersConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "providers()" has already been initialized. You cannot pass values the second time you call providers().');
        }
    
        return $this->providers;
    }
    
    public function twig(array $value = []): \Symfony\Config\KnpMenu\TwigConfig
    {
        if (null === $this->twig) {
            $this->twig = new \Symfony\Config\KnpMenu\TwigConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "twig()" has already been initialized. You cannot pass values the second time you call twig().');
        }
    
        return $this->twig;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function templating($value): self
    {
        $this->templating = $value;
    
        return $this;
    }
    
    /**
     * @default 'twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultRenderer($value): self
    {
        $this->defaultRenderer = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'knp_menu';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['providers'])) {
            $this->providers = new \Symfony\Config\KnpMenu\ProvidersConfig($value['providers']);
            unset($value['providers']);
        }
    
        if (isset($value['twig'])) {
            $this->twig = new \Symfony\Config\KnpMenu\TwigConfig($value['twig']);
            unset($value['twig']);
        }
    
        if (isset($value['templating'])) {
            $this->templating = $value['templating'];
            unset($value['templating']);
        }
    
        if (isset($value['default_renderer'])) {
            $this->defaultRenderer = $value['default_renderer'];
            unset($value['default_renderer']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->providers) {
            $output['providers'] = $this->providers->toArray();
        }
        if (null !== $this->twig) {
            $output['twig'] = $this->twig->toArray();
        }
        if (null !== $this->templating) {
            $output['templating'] = $this->templating;
        }
        if (null !== $this->defaultRenderer) {
            $output['default_renderer'] = $this->defaultRenderer;
        }
    
        return $output;
    }
    

}
