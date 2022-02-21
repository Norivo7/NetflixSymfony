<?php

namespace ContainerZgmZqWM;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera7ce1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfb982 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc1903 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'getConnection', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'getMetadataFactory', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'getExpressionBuilder', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'beginTransaction', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'getCache', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'transactional', array('func' => $func), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'commit', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->commit();
    }

    public function rollback()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'rollback', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'getClassMetadata', array('className' => $className), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'createQuery', array('dql' => $dql), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'createNamedQuery', array('name' => $name), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'createQueryBuilder', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'flush', array('entity' => $entity), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'clear', array('entityName' => $entityName), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->clear($entityName);
    }

    public function close()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'close', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->close();
    }

    public function persist($entity)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'persist', array('entity' => $entity), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'remove', array('entity' => $entity), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'refresh', array('entity' => $entity), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'detach', array('entity' => $entity), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'merge', array('entity' => $entity), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'contains', array('entity' => $entity), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'getEventManager', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'getConfiguration', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'isOpen', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'getUnitOfWork', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'getProxyFactory', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'initializeObject', array('obj' => $obj), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'getFilters', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'isFiltersStateClean', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'hasFilters', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return $this->valueHoldera7ce1->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerfb982 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera7ce1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera7ce1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera7ce1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, '__get', ['name' => $name], $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        if (isset(self::$publicPropertiesc1903[$name])) {
            return $this->valueHoldera7ce1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7ce1;

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

        $targetObject = $this->valueHoldera7ce1;
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
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7ce1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera7ce1;
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
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, '__isset', array('name' => $name), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7ce1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera7ce1;
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
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, '__unset', array('name' => $name), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7ce1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera7ce1;
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
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, '__clone', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        $this->valueHoldera7ce1 = clone $this->valueHoldera7ce1;
    }

    public function __sleep()
    {
        $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, '__sleep', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;

        return array('valueHoldera7ce1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfb982 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfb982;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfb982 && ($this->initializerfb982->__invoke($valueHoldera7ce1, $this, 'initializeProxy', array(), $this->initializerfb982) || 1) && $this->valueHoldera7ce1 = $valueHoldera7ce1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera7ce1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera7ce1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
