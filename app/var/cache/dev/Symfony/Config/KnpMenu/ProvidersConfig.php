<?php

namespace Symfony\Config\KnpMenu;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ProvidersConfig 
{
    private $builderAlias;
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function builderAlias($value): self
    {
        $this->builderAlias = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['builder_alias'])) {
            $this->builderAlias = $value['builder_alias'];
            unset($value['builder_alias']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->builderAlias) {
            $output['builder_alias'] = $this->builderAlias;
        }
    
        return $output;
    }
    

}
