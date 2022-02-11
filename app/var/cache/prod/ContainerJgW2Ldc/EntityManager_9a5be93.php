<?php

namespace ContainerJgW2Ldc;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderaa5d8 = null;
    private $initializer9c210 = null;
    private static $publicProperties2af76 = [
        
    ];
    public function getConnection()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'getConnection', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'getMetadataFactory', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'getExpressionBuilder', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'beginTransaction', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'getCache', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->getCache();
    }
    public function transactional($func)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'transactional', array('func' => $func), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->transactional($func);
    }
    public function commit()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'commit', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->commit();
    }
    public function rollback()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'rollback', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'getClassMetadata', array('className' => $className), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'createQuery', array('dql' => $dql), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'createNamedQuery', array('name' => $name), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'createQueryBuilder', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'flush', array('entity' => $entity), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'clear', array('entityName' => $entityName), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->clear($entityName);
    }
    public function close()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'close', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->close();
    }
    public function persist($entity)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'persist', array('entity' => $entity), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'remove', array('entity' => $entity), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'refresh', array('entity' => $entity), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'detach', array('entity' => $entity), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'merge', array('entity' => $entity), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'contains', array('entity' => $entity), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'getEventManager', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'getConfiguration', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'isOpen', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'getUnitOfWork', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'getProxyFactory', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'initializeObject', array('obj' => $obj), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'getFilters', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'isFiltersStateClean', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'hasFilters', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return $this->valueHolderaa5d8->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer9c210 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderaa5d8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaa5d8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderaa5d8->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, '__get', ['name' => $name], $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        if (isset(self::$publicProperties2af76[$name])) {
            return $this->valueHolderaa5d8->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa5d8;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa5d8;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa5d8;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa5d8;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, '__isset', array('name' => $name), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa5d8;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderaa5d8;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, '__unset', array('name' => $name), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa5d8;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderaa5d8;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, '__clone', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        $this->valueHolderaa5d8 = clone $this->valueHolderaa5d8;
    }
    public function __sleep()
    {
        $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, '__sleep', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
        return array('valueHolderaa5d8');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9c210 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9c210;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer9c210 && ($this->initializer9c210->__invoke($valueHolderaa5d8, $this, 'initializeProxy', array(), $this->initializer9c210) || 1) && $this->valueHolderaa5d8 = $valueHolderaa5d8;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa5d8;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa5d8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
