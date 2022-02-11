<?php

namespace ContainerZUQyKNZ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder70dea = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera7104 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties443ac = [
        
    ];

    public function getConnection()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'getConnection', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'getMetadataFactory', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'getExpressionBuilder', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'beginTransaction', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'getCache', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->getCache();
    }

    public function transactional($func)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'transactional', array('func' => $func), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'wrapInTransaction', array('func' => $func), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'commit', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->commit();
    }

    public function rollback()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'rollback', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'getClassMetadata', array('className' => $className), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'createQuery', array('dql' => $dql), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'createNamedQuery', array('name' => $name), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'createQueryBuilder', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'flush', array('entity' => $entity), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'clear', array('entityName' => $entityName), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->clear($entityName);
    }

    public function close()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'close', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->close();
    }

    public function persist($entity)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'persist', array('entity' => $entity), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'remove', array('entity' => $entity), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'refresh', array('entity' => $entity), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'detach', array('entity' => $entity), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'merge', array('entity' => $entity), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'getRepository', array('entityName' => $entityName), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'contains', array('entity' => $entity), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'getEventManager', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'getConfiguration', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'isOpen', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'getUnitOfWork', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'getProxyFactory', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'initializeObject', array('obj' => $obj), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'getFilters', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'isFiltersStateClean', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'hasFilters', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return $this->valueHolder70dea->hasFilters();
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

        $instance->initializera7104 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder70dea) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder70dea = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder70dea->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, '__get', ['name' => $name], $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        if (isset(self::$publicProperties443ac[$name])) {
            return $this->valueHolder70dea->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70dea;

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

        $targetObject = $this->valueHolder70dea;
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
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70dea;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder70dea;
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
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, '__isset', array('name' => $name), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70dea;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder70dea;
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
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, '__unset', array('name' => $name), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70dea;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder70dea;
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
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, '__clone', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        $this->valueHolder70dea = clone $this->valueHolder70dea;
    }

    public function __sleep()
    {
        $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, '__sleep', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;

        return array('valueHolder70dea');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera7104 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera7104;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera7104 && ($this->initializera7104->__invoke($valueHolder70dea, $this, 'initializeProxy', array(), $this->initializera7104) || 1) && $this->valueHolder70dea = $valueHolder70dea;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder70dea;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder70dea;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
