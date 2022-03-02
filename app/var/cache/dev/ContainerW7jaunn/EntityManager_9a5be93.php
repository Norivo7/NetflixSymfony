<?php

namespace ContainerW7jaunn;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder53a10 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer229be = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa3c6d = [
        
    ];

    public function getConnection()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'getConnection', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'getMetadataFactory', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'getExpressionBuilder', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'beginTransaction', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'getCache', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->getCache();
    }

    public function transactional($func)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'transactional', array('func' => $func), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'wrapInTransaction', array('func' => $func), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'commit', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->commit();
    }

    public function rollback()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'rollback', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'getClassMetadata', array('className' => $className), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'createQuery', array('dql' => $dql), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'createNamedQuery', array('name' => $name), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'createQueryBuilder', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'flush', array('entity' => $entity), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'clear', array('entityName' => $entityName), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->clear($entityName);
    }

    public function close()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'close', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->close();
    }

    public function persist($entity)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'persist', array('entity' => $entity), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'remove', array('entity' => $entity), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'refresh', array('entity' => $entity), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'detach', array('entity' => $entity), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'merge', array('entity' => $entity), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'getRepository', array('entityName' => $entityName), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'contains', array('entity' => $entity), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'getEventManager', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'getConfiguration', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'isOpen', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'getUnitOfWork', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'getProxyFactory', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'initializeObject', array('obj' => $obj), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'getFilters', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'isFiltersStateClean', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'hasFilters', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return $this->valueHolder53a10->hasFilters();
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

        $instance->initializer229be = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder53a10) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder53a10 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder53a10->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, '__get', ['name' => $name], $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        if (isset(self::$publicPropertiesa3c6d[$name])) {
            return $this->valueHolder53a10->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53a10;

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

        $targetObject = $this->valueHolder53a10;
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
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53a10;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder53a10;
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
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, '__isset', array('name' => $name), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53a10;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder53a10;
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
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, '__unset', array('name' => $name), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53a10;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder53a10;
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
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, '__clone', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        $this->valueHolder53a10 = clone $this->valueHolder53a10;
    }

    public function __sleep()
    {
        $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, '__sleep', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;

        return array('valueHolder53a10');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer229be = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer229be;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer229be && ($this->initializer229be->__invoke($valueHolder53a10, $this, 'initializeProxy', array(), $this->initializer229be) || 1) && $this->valueHolder53a10 = $valueHolder53a10;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder53a10;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder53a10;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
