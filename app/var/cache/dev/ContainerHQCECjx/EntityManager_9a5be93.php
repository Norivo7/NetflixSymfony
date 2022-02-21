<?php

namespace ContainerHQCECjx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5a3eb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer363bd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8d889 = [
        
    ];

    public function getConnection()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'getConnection', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'getMetadataFactory', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'getExpressionBuilder', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'beginTransaction', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'getCache', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'transactional', array('func' => $func), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'commit', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->commit();
    }

    public function rollback()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'rollback', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'getClassMetadata', array('className' => $className), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'createQuery', array('dql' => $dql), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'createNamedQuery', array('name' => $name), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'createQueryBuilder', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'flush', array('entity' => $entity), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'clear', array('entityName' => $entityName), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->clear($entityName);
    }

    public function close()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'close', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->close();
    }

    public function persist($entity)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'persist', array('entity' => $entity), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'remove', array('entity' => $entity), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'refresh', array('entity' => $entity), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'detach', array('entity' => $entity), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'merge', array('entity' => $entity), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'contains', array('entity' => $entity), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'getEventManager', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'getConfiguration', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'isOpen', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'getUnitOfWork', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'getProxyFactory', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'initializeObject', array('obj' => $obj), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'getFilters', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'isFiltersStateClean', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'hasFilters', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return $this->valueHolder5a3eb->hasFilters();
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

        $instance->initializer363bd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5a3eb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5a3eb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5a3eb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, '__get', ['name' => $name], $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        if (isset(self::$publicProperties8d889[$name])) {
            return $this->valueHolder5a3eb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a3eb;

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

        $targetObject = $this->valueHolder5a3eb;
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
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a3eb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5a3eb;
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
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, '__isset', array('name' => $name), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a3eb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5a3eb;
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
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, '__unset', array('name' => $name), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a3eb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5a3eb;
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
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, '__clone', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        $this->valueHolder5a3eb = clone $this->valueHolder5a3eb;
    }

    public function __sleep()
    {
        $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, '__sleep', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;

        return array('valueHolder5a3eb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer363bd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer363bd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer363bd && ($this->initializer363bd->__invoke($valueHolder5a3eb, $this, 'initializeProxy', array(), $this->initializer363bd) || 1) && $this->valueHolder5a3eb = $valueHolder5a3eb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a3eb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a3eb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
