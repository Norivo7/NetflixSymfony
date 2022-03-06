<?php

namespace ContainerX4PrHdm;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4507e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5aeb3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9365d = [
        
    ];

    public function getConnection()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'getConnection', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'getMetadataFactory', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'getExpressionBuilder', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'beginTransaction', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'getCache', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'transactional', array('func' => $func), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'commit', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->commit();
    }

    public function rollback()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'rollback', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'getClassMetadata', array('className' => $className), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'createQuery', array('dql' => $dql), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'createNamedQuery', array('name' => $name), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'createQueryBuilder', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'flush', array('entity' => $entity), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'clear', array('entityName' => $entityName), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->clear($entityName);
    }

    public function close()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'close', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->close();
    }

    public function persist($entity)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'persist', array('entity' => $entity), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'remove', array('entity' => $entity), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'refresh', array('entity' => $entity), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'detach', array('entity' => $entity), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'merge', array('entity' => $entity), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'contains', array('entity' => $entity), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'getEventManager', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'getConfiguration', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'isOpen', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'getUnitOfWork', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'getProxyFactory', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'initializeObject', array('obj' => $obj), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'getFilters', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'isFiltersStateClean', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'hasFilters', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return $this->valueHolder4507e->hasFilters();
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

        $instance->initializer5aeb3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4507e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4507e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4507e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, '__get', ['name' => $name], $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        if (isset(self::$publicProperties9365d[$name])) {
            return $this->valueHolder4507e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4507e;

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

        $targetObject = $this->valueHolder4507e;
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
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4507e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4507e;
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
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, '__isset', array('name' => $name), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4507e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4507e;
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
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, '__unset', array('name' => $name), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4507e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4507e;
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
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, '__clone', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        $this->valueHolder4507e = clone $this->valueHolder4507e;
    }

    public function __sleep()
    {
        $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, '__sleep', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;

        return array('valueHolder4507e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5aeb3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5aeb3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5aeb3 && ($this->initializer5aeb3->__invoke($valueHolder4507e, $this, 'initializeProxy', array(), $this->initializer5aeb3) || 1) && $this->valueHolder4507e = $valueHolder4507e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4507e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4507e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
