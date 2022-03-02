<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
require __DIR__.'/ContainerXKSDIax/App_KernelDevDebugContainer.php';
require __DIR__.'/ContainerXKSDIax/EntityManager_9a5be93.php';
require __DIR__.'/ContainerXKSDIax/getWebProfiler_Controller_RouterService.php';
require __DIR__.'/ContainerXKSDIax/getWebProfiler_Controller_ProfilerService.php';
require __DIR__.'/ContainerXKSDIax/getWebProfiler_Controller_ExceptionPanelService.php';
require __DIR__.'/ContainerXKSDIax/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerXKSDIax/getValidator_ExpressionService.php';
require __DIR__.'/ContainerXKSDIax/getValidator_EmailService.php';
require __DIR__.'/ContainerXKSDIax/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerXKSDIax/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerXKSDIax/getTwig_Mailer_MessageListenerService.php';
require __DIR__.'/ContainerXKSDIax/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerXKSDIax/getSessionService.php';
require __DIR__.'/ContainerXKSDIax/getServicesResetterService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Authenticator_HttpBasic_MainService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_Authenticator_FormLogin_MainService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerXKSDIax/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerXKSDIax/getSecrets_VaultService.php';
require __DIR__.'/ContainerXKSDIax/getRouting_LoaderService.php';
require __DIR__.'/ContainerXKSDIax/getPropertyAccessorService.php';
require __DIR__.'/ContainerXKSDIax/getMailer_TransportFactory_SmtpService.php';
require __DIR__.'/ContainerXKSDIax/getMailer_TransportFactory_SendmailService.php';
require __DIR__.'/ContainerXKSDIax/getMailer_TransportFactory_NullService.php';
require __DIR__.'/ContainerXKSDIax/getMailer_TransportFactory_NativeService.php';
require __DIR__.'/ContainerXKSDIax/getMailer_TransportFactory_GmailService.php';
require __DIR__.'/ContainerXKSDIax/getKnpMenu_Voter_RouterService.php';
require __DIR__.'/ContainerXKSDIax/getKnpMenu_Renderer_TwigService.php';
require __DIR__.'/ContainerXKSDIax/getKnpMenu_Renderer_ListService.php';
require __DIR__.'/ContainerXKSDIax/getKnpMenu_MenuProvider_LazyService.php';
require __DIR__.'/ContainerXKSDIax/getKnpMenu_MenuProvider_BuilderAliasService.php';
require __DIR__.'/ContainerXKSDIax/getKnpMenu_FactoryService.php';
require __DIR__.'/ContainerXKSDIax/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerXKSDIax/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerXKSDIax/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerXKSDIax/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerXKSDIax/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerXKSDIax/getForm_TypeExtension_Form_DataCollectorService.php';
require __DIR__.'/ContainerXKSDIax/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerXKSDIax/getForm_Type_FormService.php';
require __DIR__.'/ContainerXKSDIax/getForm_Type_EntityService.php';
require __DIR__.'/ContainerXKSDIax/getForm_Type_ColorService.php';
require __DIR__.'/ContainerXKSDIax/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerXKSDIax/getForm_ServerParamsService.php';
require __DIR__.'/ContainerXKSDIax/getForm_RegistryService.php';
require __DIR__.'/ContainerXKSDIax/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerXKSDIax/getErrorHandler_ErrorRenderer_HtmlService.php';
require __DIR__.'/ContainerXKSDIax/getErrorControllerService.php';
require __DIR__.'/ContainerXKSDIax/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerXKSDIax/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerXKSDIax/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerXKSDIax/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerXKSDIax/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerXKSDIax/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerXKSDIax/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerXKSDIax/getDoctrine_Migrations_ContainerAwareMigrationsFactoryService.php';
require __DIR__.'/ContainerXKSDIax/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerXKSDIax/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerXKSDIax/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerXKSDIax/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerXKSDIax/getDebug_FileLinkFormatter_UrlFormatService.php';
require __DIR__.'/ContainerXKSDIax/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerXKSDIax/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerXKSDIax/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerXKSDIax/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerXKSDIax/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerXKSDIax/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerXKSDIax/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerXKSDIax/getDataCollector_Request_SessionCollectorService.php';
require __DIR__.'/ContainerXKSDIax/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerXKSDIax/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerXKSDIax/getCache_SystemClearerService.php';
require __DIR__.'/ContainerXKSDIax/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerXKSDIax/getCache_AppClearerService.php';
require __DIR__.'/ContainerXKSDIax/getApp_MenuBuilderService.php';
require __DIR__.'/ContainerXKSDIax/getTemplateControllerService.php';
require __DIR__.'/ContainerXKSDIax/getRedirectControllerService.php';
require __DIR__.'/ContainerXKSDIax/getProfilerControllerService.php';
require __DIR__.'/ContainerXKSDIax/getLoginFormAuthenticatorService.php';
require __DIR__.'/ContainerXKSDIax/getUserRepositoryService.php';
require __DIR__.'/ContainerXKSDIax/getSubuserRepositoryService.php';
require __DIR__.'/ContainerXKSDIax/getMovieRepositoryService.php';
require __DIR__.'/ContainerXKSDIax/getCategoryRepositoryService.php';
require __DIR__.'/ContainerXKSDIax/getSubuserTypeService.php';
require __DIR__.'/ContainerXKSDIax/getRegistrationFormTypeService.php';
require __DIR__.'/ContainerXKSDIax/getSubuserCrudControllerService.php';
require __DIR__.'/ContainerXKSDIax/getSubuserControllerService.php';
require __DIR__.'/ContainerXKSDIax/getSecurityControllerService.php';
require __DIR__.'/ContainerXKSDIax/getRegistrationControllerService.php';
require __DIR__.'/ContainerXKSDIax/getMoviesControllerService.php';
require __DIR__.'/ContainerXKSDIax/getExceptionControllerService.php';
require __DIR__.'/ContainerXKSDIax/getAdminControllerService.php';
require __DIR__.'/ContainerXKSDIax/get_Session_DeprecatedService.php';
require __DIR__.'/ContainerXKSDIax/get_ServiceLocator_PwZ6MTMService.php';
require __DIR__.'/ContainerXKSDIax/get_ServiceLocator_PPsXs3mService.php';
require __DIR__.'/ContainerXKSDIax/get_ServiceLocator_L2QwsaZService.php';
require __DIR__.'/ContainerXKSDIax/get_ServiceLocator_EWsEuD9Service.php';
require __DIR__.'/ContainerXKSDIax/get_ServiceLocator_W9y3dzmService.php';
require __DIR__.'/ContainerXKSDIax/get_ServiceLocator_V5oNiHcService.php';
require __DIR__.'/ContainerXKSDIax/get_ServiceLocator_UDgw6OlService.php';
require __DIR__.'/ContainerXKSDIax/get_ServiceLocator_SWF0qErService.php';
require __DIR__.'/ContainerXKSDIax/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerXKSDIax/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerXKSDIax/get_ServiceLocator_I9oAbIxService.php';
require __DIR__.'/ContainerXKSDIax/get_ServiceLocator_EVwVc65Service.php';
require __DIR__.'/ContainerXKSDIax/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerXKSDIax/get_Container_Private_Form_Type_FileService.php';
require __DIR__.'/ContainerXKSDIax/get_Container_Private_Form_FactoryService.php';
require __DIR__.'/ContainerXKSDIax/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerXKSDIax/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\WebProfilerBundle';
$classes[] = 'Knp\Bundle\MenuBundle\KnpMenuBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\SymfonyCastsVerifyEmailBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension';
$classes[] = 'Symfony\Component\VarDumper\Dumper\HtmlDumper';
$classes[] = 'Knp\Menu\Twig\MenuExtension';
$classes[] = 'Knp\Menu\Twig\Helper';
$classes[] = 'Knp\Menu\Renderer\PsrProvider';
$classes[] = 'Knp\Menu\Provider\ChainProvider';
$classes[] = 'Knp\Menu\Util\MenuManipulator';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Component\Validator\Validator\TraceableValidator';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionInterface';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory';
$classes[] = 'App\Controller\AdminController';
$classes[] = 'App\Controller\ExceptionController';
$classes[] = 'App\Controller\MoviesController';
$classes[] = 'App\Controller\RegistrationController';
$classes[] = 'App\Security\EmailVerifier';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelper';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\Util\VerifyEmailQueryUtility';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\Generator\VerifyEmailTokenGenerator';
$classes[] = 'Symfony\Component\Mailer\Mailer';
$classes[] = 'Symfony\Component\Mailer\Transport\Transports';
$classes[] = 'Symfony\Component\Mailer\Transport';
$classes[] = 'App\Controller\SecurityController';
$classes[] = 'App\Controller\SubuserController';
$classes[] = 'App\Controller\SubuserCrudController';
$classes[] = 'App\Form\RegistrationFormType';
$classes[] = 'App\Form\SubuserType';
$classes[] = 'App\Repository\CategoryRepository';
$classes[] = 'App\Repository\MovieRepository';
$classes[] = 'App\Repository\SubuserRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Security\LoginFormAuthenticator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'App\Menu\MenuBuilder';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\TraceableAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataExtractor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\RequestDataCollector';
$classes[] = 'Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\MigrationsFactory\ContainerAwareMigrationFactory';
$classes[] = 'Doctrine\Migrations\Version\MigrationFactory';
$classes[] = 'Doctrine\Migrations\DependencyFactory';
$classes[] = 'Doctrine\Migrations\Configuration\Migration\ExistingConfiguration';
$classes[] = 'Doctrine\Migrations\Configuration\Configuration';
$classes[] = 'Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration';
$classes[] = 'Doctrine\Migrations\Configuration\EntityManager\ManagerRegistryEntityManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Common\Cache\CacheProvider';
$classes[] = 'Doctrine\Common\Cache\Psr6\DoctrineProvider';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Knp\Menu\MenuFactory';
$classes[] = 'Knp\Menu\Integration\Symfony\RoutingExtension';
$classes[] = 'Knp\Menu\Matcher\Matcher';
$classes[] = 'Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider';
$classes[] = 'Knp\Menu\Provider\LazyProvider';
$classes[] = 'Knp\Menu\Renderer\ListRenderer';
$classes[] = 'Knp\Menu\Renderer\TwigRenderer';
$classes[] = 'Knp\Menu\Matcher\Voter\RouteVoter';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mailer\Bridge\Google\Transport\GmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NativeTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\SendmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\Profiler';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\FileProfilerStorage';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\TimeDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector';
$classes[] = 'Symfony\Component\Validator\DataCollector\ValidatorDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\EventDataCollector';
$classes[] = 'Symfony\Component\Cache\DataCollector\CacheDataCollector';
$classes[] = 'Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector';
$classes[] = 'Symfony\Bridge\Twig\DataCollector\TwigDataCollector';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Collector\MigrationsCollector';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Collector\MigrationsFlattener';
$classes[] = 'Symfony\Component\Mailer\DataCollector\MessageDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ProfilerListener';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\Authentication\NoopAuthenticationManager';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\HttpBasicAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageListener';
$classes[] = 'Symfony\Bridge\Twig\Mime\BodyRenderer';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\RouterController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener';

Preloader::preload($classes);
