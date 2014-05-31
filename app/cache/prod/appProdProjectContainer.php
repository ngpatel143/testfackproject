<?php
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class appProdProjectContainer extends Container
{
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->set('service_container', $this);
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'cmf.block.action' => 'getCmf_Block_ActionService',
            'cmf.block.container' => 'getCmf_Block_ContainerService',
            'cmf.block.imagine' => 'getCmf_Block_ImagineService',
            'cmf.block.reference' => 'getCmf_Block_ReferenceService',
            'cmf.block.rss_controller' => 'getCmf_Block_RssControllerService',
            'cmf.block.service' => 'getCmf_Block_ServiceService',
            'cmf.block.simple' => 'getCmf_Block_SimpleService',
            'cmf.block.slideshow' => 'getCmf_Block_SlideshowService',
            'cmf.block.string' => 'getCmf_Block_StringService',
            'cmf_block.fragment.renderer.action' => 'getCmfBlock_Fragment_Renderer_ActionService',
            'cmf_block.templating.helper.block' => 'getCmfBlock_Templating_Helper_BlockService',
            'cmf_block.twig.embed_extension' => 'getCmfBlock_Twig_EmbedExtensionService',
            'cmf_content.controller' => 'getCmfContent_ControllerService',
            'cmf_content.initializer' => 'getCmfContent_InitializerService',
            'cmf_core.form.type.checkbox_url_label' => 'getCmfCore_Form_Type_CheckboxUrlLabelService',
            'cmf_core.listener.request_aware' => 'getCmfCore_Listener_RequestAwareService',
            'cmf_core.persistence.phpcr.non_translatable_metadata_listener' => 'getCmfCore_Persistence_Phpcr_NonTranslatableMetadataListenerService',
            'cmf_core.publish_workflow.checker' => 'getCmfCore_PublishWorkflow_CheckerService',
            'cmf_core.templating.helper' => 'getCmfCore_Templating_HelperService',
            'cmf_core.twig.children_extension' => 'getCmfCore_Twig_ChildrenExtensionService',
            'cmf_menu.current_item_voter.uri_prefix' => 'getCmfMenu_CurrentItemVoter_UriPrefixService',
            'cmf_menu.factory' => 'getCmfMenu_FactoryService',
            'cmf_routing.dynamic_router' => 'getCmfRouting_DynamicRouterService',
            'cmf_routing.enhancer.route_content' => 'getCmfRouting_Enhancer_RouteContentService',
            'cmf_routing.final_matcher' => 'getCmfRouting_FinalMatcherService',
            'cmf_routing.generator' => 'getCmfRouting_GeneratorService',
            'cmf_routing.initializer' => 'getCmfRouting_InitializerService',
            'cmf_routing.nested_matcher' => 'getCmfRouting_NestedMatcherService',
            'cmf_routing.phpcr_content_repository' => 'getCmfRouting_PhpcrContentRepositoryService',
            'cmf_routing.phpcr_route_provider' => 'getCmfRouting_PhpcrRouteProviderService',
            'cmf_routing.phpcrodm_route_idprefix_listener' => 'getCmfRouting_PhpcrodmRouteIdprefixListenerService',
            'cmf_routing.redirect_controller' => 'getCmfRouting_RedirectControllerService',
            'cmf_routing.route_type_form_type' => 'getCmfRouting_RouteTypeFormTypeService',
            'cmf_routing.router' => 'getCmfRouting_RouterService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.emergency_logger_listener' => 'getDebug_EmergencyLoggerListenerService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'doctrine_cache.providers.sylius_settings' => 'getDoctrineCache_Providers_SyliusSettingsService',
            'doctrine_phpcr' => 'getDoctrinePhpcrService',
            'doctrine_phpcr.console_dumper' => 'getDoctrinePhpcr_ConsoleDumperService',
            'doctrine_phpcr.default_session' => 'getDoctrinePhpcr_DefaultSessionService',
            'doctrine_phpcr.jackalope.repository.default' => 'getDoctrinePhpcr_Jackalope_Repository_DefaultService',
            'doctrine_phpcr.jackalope.repository.factory.doctrinedbal' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_DoctrinedbalService',
            'doctrine_phpcr.jackalope.repository.factory.jackrabbit' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_JackrabbitService',
            'doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_Service_DoctrinedbalService',
            'doctrine_phpcr.jackalope.repository.factory.service.jackrabbit' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_Service_JackrabbitService',
            'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener' => 'getDoctrinePhpcr_JackalopeDoctrineDbal_SchemaListenerService',
            'doctrine_phpcr.odm.default_document_manager' => 'getDoctrinePhpcr_Odm_DefaultDocumentManagerService',
            'doctrine_phpcr.odm.form.type.path' => 'getDoctrinePhpcr_Odm_Form_Type_PathService',
            'doctrine_phpcr.odm.validator.valid_phpcr_odm' => 'getDoctrinePhpcr_Odm_Validator_ValidPhpcrOdmService',
            'event_dispatcher' => 'getEventDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.phpcr.document' => 'getForm_Type_Phpcr_DocumentService',
            'form.type.phpcr.reference' => 'getForm_Type_Phpcr_ReferenceService',
            'form.type.phpcr_odm.reference_collection' => 'getForm_Type_PhpcrOdm_ReferenceCollectionService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.doctrine_phpcr' => 'getForm_TypeGuesser_DoctrinePhpcrService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_rest.format_negotiator' => 'getFosRest_FormatNegotiatorService',
            'fos_rest.inflector.doctrine' => 'getFosRest_Inflector_DoctrineService',
            'fos_rest.normalizer.camel_keys' => 'getFosRest_Normalizer_CamelKeysService',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService',
            'fos_rest.routing.loader.controller' => 'getFosRest_Routing_Loader_ControllerService',
            'fos_rest.routing.loader.processor' => 'getFosRest_Routing_Loader_ProcessorService',
            'fos_rest.routing.loader.reader.action' => 'getFosRest_Routing_Loader_Reader_ActionService',
            'fos_rest.routing.loader.reader.controller' => 'getFosRest_Routing_Loader_Reader_ControllerService',
            'fos_rest.routing.loader.xml_collection' => 'getFosRest_Routing_Loader_XmlCollectionService',
            'fos_rest.routing.loader.yaml_collection' => 'getFosRest_Routing_Loader_YamlCollectionService',
            'fos_rest.view.exception_wrapper_handler' => 'getFosRest_View_ExceptionWrapperHandlerService',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService',
            'fos_rest.violation_formatter' => 'getFosRest_ViolationFormatterService',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.entity_manager' => 'getFosUser_EntityManagerService',
            'fos_user.group.form.factory' => 'getFosUser_Group_Form_FactoryService',
            'fos_user.group.form.type' => 'getFosUser_Group_Form_TypeService',
            'fos_user.group_manager' => 'getFosUser_GroupManagerService',
            'fos_user.listener.authentication' => 'getFosUser_Listener_AuthenticationService',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.user_provider.username' => 'getFosUser_UserProvider_UsernameService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'gaufrette.sylius_image_filesystem' => 'getGaufrette_SyliusImageFilesystemService',
            'http_kernel' => 'getHttpKernelService',
            'hwi_oauth.http_client' => 'getHwiOauth_HttpClientService',
            'hwi_oauth.resource_owner.amazon' => 'getHwiOauth_ResourceOwner_AmazonService',
            'hwi_oauth.resource_owner.facebook' => 'getHwiOauth_ResourceOwner_FacebookService',
            'hwi_oauth.resource_owner.google' => 'getHwiOauth_ResourceOwner_GoogleService',
            'hwi_oauth.resource_ownermap.main' => 'getHwiOauth_ResourceOwnermap_MainService',
            'hwi_oauth.security.oauth_utils' => 'getHwiOauth_Security_OauthUtilsService',
            'hwi_oauth.storage.session' => 'getHwiOauth_Storage_SessionService',
            'hwi_oauth.templating.helper.oauth' => 'getHwiOauth_Templating_Helper_OauthService',
            'hwi_oauth.user_checker' => 'getHwiOauth_UserCheckerService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService',
            'jms_serializer.naming_strategy' => 'getJmsSerializer_NamingStrategyService',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService',
            'jms_translation.config_factory' => 'getJmsTranslation_ConfigFactoryService',
            'jms_translation.loader_manager' => 'getJmsTranslation_LoaderManagerService',
            'jms_translation.twig_extension' => 'getJmsTranslation_TwigExtensionService',
            'jms_translation.updater' => 'getJmsTranslation_UpdaterService',
            'kernel' => 'getKernelService',
            'knp_gaufrette.filesystem_map' => 'getKnpGaufrette_FilesystemMapService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'knp_snappy.image' => 'getKnpSnappy_ImageService',
            'knp_snappy.pdf' => 'getKnpSnappy_PdfService',
            'liip_imagine' => 'getLiipImagineService',
            'liip_imagine.cache.clearer' => 'getLiipImagine_Cache_ClearerService',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService',
            'liip_imagine.cache.resolver.no_cache' => 'getLiipImagine_Cache_Resolver_NoCacheService',
            'liip_imagine.cache.resolver.web_path' => 'getLiipImagine_Cache_Resolver_WebPathService',
            'liip_imagine.controller' => 'getLiipImagine_ControllerService',
            'liip_imagine.data.loader.filesystem' => 'getLiipImagine_Data_Loader_FilesystemService',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService',
            'liip_imagine.filter.configuration' => 'getLiipImagine_Filter_ConfigurationService',
            'liip_imagine.filter.loader.auto_rotate' => 'getLiipImagine_Filter_Loader_AutoRotateService',
            'liip_imagine.filter.loader.background' => 'getLiipImagine_Filter_Loader_BackgroundService',
            'liip_imagine.filter.loader.crop' => 'getLiipImagine_Filter_Loader_CropService',
            'liip_imagine.filter.loader.paste' => 'getLiipImagine_Filter_Loader_PasteService',
            'liip_imagine.filter.loader.relative_resize' => 'getLiipImagine_Filter_Loader_RelativeResizeService',
            'liip_imagine.filter.loader.resize' => 'getLiipImagine_Filter_Loader_ResizeService',
            'liip_imagine.filter.loader.strip' => 'getLiipImagine_Filter_Loader_StripService',
            'liip_imagine.filter.loader.thumbnail' => 'getLiipImagine_Filter_Loader_ThumbnailService',
            'liip_imagine.filter.loader.upscale' => 'getLiipImagine_Filter_Loader_UpscaleService',
            'liip_imagine.filter.loader.watermark' => 'getLiipImagine_Filter_Loader_WatermarkService',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService',
            'liip_imagine.form.type.image' => 'getLiipImagine_Form_Type_ImageService',
            'liip_imagine.routing.loader' => 'getLiipImagine_Routing_LoaderService',
            'liip_imagine.templating.helper' => 'getLiipImagine_Templating_HelperService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.emergency' => 'getMonolog_Logger_EmergencyService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.snappy' => 'getMonolog_Logger_SnappyService',
            'pagerfanta.convert_not_valid_current_page_to_not_found_listener' => 'getPagerfanta_ConvertNotValidCurrentPageToNotFoundListenerService',
            'pagerfanta.convert_not_valid_max_per_page_to_not_found_listener' => 'getPagerfanta_ConvertNotValidMaxPerPageToNotFoundListenerService',
            'payum' => 'getPayumService',
            'payum.action.execute_same_request_with_model_details' => 'getPayum_Action_ExecuteSameRequestWithModelDetailsService',
            'payum.action.get_http_query' => 'getPayum_Action_GetHttpQueryService',
            'payum.buzz.client' => 'getPayum_Buzz_ClientService',
            'payum.context._security_token.storage.syliusbundlepayumbundlemodelpaymentsecuritytoken' => 'getPayum_Context_SecurityToken_Storage_SyliusbundlepayumbundlemodelpaymentsecuritytokenService',
            'payum.context.be2bill.api' => 'getPayum_Context_Be2bill_ApiService',
            'payum.context.be2bill.payment' => 'getPayum_Context_Be2bill_PaymentService',
            'payum.context.be2bill.storage.syliusbundlecorebundlemodelorder' => 'getPayum_Context_Be2bill_Storage_SyliusbundlecorebundlemodelorderService',
            'payum.context.be2bill.storage.syliusbundlepaymentsbundlemodelpayment' => 'getPayum_Context_Be2bill_Storage_SyliusbundlepaymentsbundlemodelpaymentService',
            'payum.context.be2bill_onsite.api' => 'getPayum_Context_Be2billOnsite_ApiService',
            'payum.context.be2bill_onsite.payment' => 'getPayum_Context_Be2billOnsite_PaymentService',
            'payum.context.be2bill_onsite.storage.syliusbundlecorebundlemodelorder' => 'getPayum_Context_Be2billOnsite_Storage_SyliusbundlecorebundlemodelorderService',
            'payum.context.be2bill_onsite.storage.syliusbundlepaymentsbundlemodelpayment' => 'getPayum_Context_Be2billOnsite_Storage_SyliusbundlepaymentsbundlemodelpaymentService',
            'payum.context.dummy.payment' => 'getPayum_Context_Dummy_PaymentService',
            'payum.context.dummy.storage.syliusbundlecorebundlemodelorder' => 'getPayum_Context_Dummy_Storage_SyliusbundlecorebundlemodelorderService',
            'payum.context.dummy.storage.syliusbundlepaymentsbundlemodelpayment' => 'getPayum_Context_Dummy_Storage_SyliusbundlepaymentsbundlemodelpaymentService',
            'payum.context.paypal_express_checkout.api' => 'getPayum_Context_PaypalExpressCheckout_ApiService',
            'payum.context.paypal_express_checkout.payment' => 'getPayum_Context_PaypalExpressCheckout_PaymentService',
            'payum.context.paypal_express_checkout.storage.syliusbundlecorebundlemodelorder' => 'getPayum_Context_PaypalExpressCheckout_Storage_SyliusbundlecorebundlemodelorderService',
            'payum.context.paypal_express_checkout.storage.syliusbundlepaymentsbundlemodelpayment' => 'getPayum_Context_PaypalExpressCheckout_Storage_SyliusbundlepaymentsbundlemodelpaymentService',
            'payum.context.stripe.action.capture' => 'getPayum_Context_Stripe_Action_CaptureService',
            'payum.context.stripe.action.status' => 'getPayum_Context_Stripe_Action_StatusService',
            'payum.context.stripe.gateway' => 'getPayum_Context_Stripe_GatewayService',
            'payum.context.stripe.payment' => 'getPayum_Context_Stripe_PaymentService',
            'payum.context.stripe.storage.syliusbundlecorebundlemodelorder' => 'getPayum_Context_Stripe_Storage_SyliusbundlecorebundlemodelorderService',
            'payum.context.stripe.storage.syliusbundlepaymentsbundlemodelpayment' => 'getPayum_Context_Stripe_Storage_SyliusbundlepaymentsbundlemodelpaymentService',
            'payum.entity_manager' => 'getPayum_EntityManagerService',
            'payum.extension.endless_cycle_detector' => 'getPayum_Extension_EndlessCycleDetectorService',
            'payum.extension.log_executed_actions' => 'getPayum_Extension_LogExecutedActionsService',
            'payum.extension.logger' => 'getPayum_Extension_LoggerService',
            'payum.listener.interactive_request' => 'getPayum_Listener_InteractiveRequestService',
            'payum.security.http_request_verifier' => 'getPayum_Security_HttpRequestVerifierService',
            'payum.security.token_factory' => 'getPayum_Security_TokenFactoryService',
            'payum.security.token_storage' => 'getPayum_Security_TokenStorageService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'response_listener' => 'getResponseListenerService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access_listener' => 'getSecurity_AccessListenerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.channel_listener' => 'getSecurity_ChannelListenerService',
            'security.context' => 'getSecurity_ContextService',
            'security.context_listener.0' => 'getSecurity_ContextListener_0Service',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.administration' => 'getSecurity_Firewall_Map_Context_AdministrationService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout.handler.session' => 'getSecurity_Logout_Handler_SessionService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'sonata.block.cache.handler.default' => 'getSonata_Block_Cache_Handler_DefaultService',
            'sonata.block.cache.handler.noop' => 'getSonata_Block_Cache_Handler_NoopService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService',
            'sonata.block.exception.strategy.manager' => 'getSonata_Block_Exception_Strategy_ManagerService',
            'sonata.block.form.type.block' => 'getSonata_Block_Form_Type_BlockService',
            'sonata.block.loader.chain' => 'getSonata_Block_Loader_ChainService',
            'sonata.block.loader.service' => 'getSonata_Block_Loader_ServiceService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService',
            'sonata.block.templating.helper' => 'getSonata_Block_Templating_HelperService',
            'sonata.block.twig.global' => 'getSonata_Block_Twig_GlobalService',
            'stof_doctrine_extensions.event_listener.logger' => 'getStofDoctrineExtensions_EventListener_LoggerService',
            'stof_doctrine_extensions.listener.loggable' => 'getStofDoctrineExtensions_Listener_LoggableService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'sylius.availability_checker.default' => 'getSylius_AvailabilityChecker_DefaultService',
            'sylius.backorders_handler' => 'getSylius_BackordersHandlerService',
            'sylius.builder.product' => 'getSylius_Builder_ProductService',
            'sylius.builder.prototype' => 'getSylius_Builder_PrototypeService',
            'sylius.cart.purger' => 'getSylius_Cart_PurgerService',
            'sylius.cart_flash_listener' => 'getSylius_CartFlashListenerService',
            'sylius.cart_item_resolver.default' => 'getSylius_CartItemResolver_DefaultService',
            'sylius.cart_listener' => 'getSylius_CartListenerService',
            'sylius.cart_provider.default' => 'getSylius_CartProvider_DefaultService',
            'sylius.cart_storage.session' => 'getSylius_CartStorage_SessionService',
            'sylius.cart_twig' => 'getSylius_CartTwigService',
            'sylius.checker.restricted_zone' => 'getSylius_Checker_RestrictedZoneService',
            'sylius.checkout_form.addressing' => 'getSylius_CheckoutForm_AddressingService',
            'sylius.checkout_form.payment' => 'getSylius_CheckoutForm_PaymentService',
            'sylius.checkout_form.shipment' => 'getSylius_CheckoutForm_ShipmentService',
            'sylius.checkout_form.shipping' => 'getSylius_CheckoutForm_ShippingService',
            'sylius.checkout_scenario' => 'getSylius_CheckoutScenarioService',
            'sylius.checkout_step.addressing' => 'getSylius_CheckoutStep_AddressingService',
            'sylius.checkout_step.finalize' => 'getSylius_CheckoutStep_FinalizeService',
            'sylius.checkout_step.payment' => 'getSylius_CheckoutStep_PaymentService',
            'sylius.checkout_step.purchase' => 'getSylius_CheckoutStep_PurchaseService',
            'sylius.checkout_step.security' => 'getSylius_CheckoutStep_SecurityService',
            'sylius.checkout_step.shipping' => 'getSylius_CheckoutStep_ShippingService',
            'sylius.controller.address' => 'getSylius_Controller_AddressService',
            'sylius.controller.adjustment' => 'getSylius_Controller_AdjustmentService',
            'sylius.controller.backend.dashboard' => 'getSylius_Controller_Backend_DashboardService',
            'sylius.controller.backend.form' => 'getSylius_Controller_Backend_FormService',
            'sylius.controller.backend.security' => 'getSylius_Controller_Backend_SecurityService',
            'sylius.controller.block' => 'getSylius_Controller_BlockService',
            'sylius.controller.cart' => 'getSylius_Controller_CartService',
            'sylius.controller.cart_item' => 'getSylius_Controller_CartItemService',
            'sylius.controller.configuration_factory' => 'getSylius_Controller_ConfigurationFactoryService',
            'sylius.controller.country' => 'getSylius_Controller_CountryService',
            'sylius.controller.credit_card' => 'getSylius_Controller_CreditCardService',
            'sylius.controller.currency' => 'getSylius_Controller_CurrencyService',
            'sylius.controller.exchange_rate' => 'getSylius_Controller_ExchangeRateService',
            'sylius.controller.frontend.account.order' => 'getSylius_Controller_Frontend_Account_OrderService',
            'sylius.controller.frontend.homepage' => 'getSylius_Controller_Frontend_HomepageService',
            'sylius.controller.group' => 'getSylius_Controller_GroupService',
            'sylius.controller.inventory_unit' => 'getSylius_Controller_InventoryUnitService',
            'sylius.controller.locale' => 'getSylius_Controller_LocaleService',
            'sylius.controller.number' => 'getSylius_Controller_NumberService',
            'sylius.controller.option' => 'getSylius_Controller_OptionService',
            'sylius.controller.option_value' => 'getSylius_Controller_OptionValueService',
            'sylius.controller.order' => 'getSylius_Controller_OrderService',
            'sylius.controller.order_item' => 'getSylius_Controller_OrderItemService',
            'sylius.controller.page' => 'getSylius_Controller_PageService',
            'sylius.controller.parameter' => 'getSylius_Controller_ParameterService',
            'sylius.controller.parameters_parser' => 'getSylius_Controller_ParametersParserService',
            'sylius.controller.payment' => 'getSylius_Controller_PaymentService',
            'sylius.controller.payment_method' => 'getSylius_Controller_PaymentMethodService',
            'sylius.controller.payment_security_token' => 'getSylius_Controller_PaymentSecurityTokenService',
            'sylius.controller.process' => 'getSylius_Controller_ProcessService',
            'sylius.controller.product' => 'getSylius_Controller_ProductService',
            'sylius.controller.product_property' => 'getSylius_Controller_ProductPropertyService',
            'sylius.controller.promotion' => 'getSylius_Controller_PromotionService',
            'sylius.controller.promotion_action' => 'getSylius_Controller_PromotionActionService',
            'sylius.controller.promotion_coupon' => 'getSylius_Controller_PromotionCouponService',
            'sylius.controller.promotion_rule' => 'getSylius_Controller_PromotionRuleService',
            'sylius.controller.promotion_subject' => 'getSylius_Controller_PromotionSubjectService',
            'sylius.controller.property' => 'getSylius_Controller_PropertyService',
            'sylius.controller.prototype' => 'getSylius_Controller_PrototypeService',
            'sylius.controller.province' => 'getSylius_Controller_ProvinceService',
            'sylius.controller.settings' => 'getSylius_Controller_SettingsService',
            'sylius.controller.shipment' => 'getSylius_Controller_ShipmentService',
            'sylius.controller.shipment_item' => 'getSylius_Controller_ShipmentItemService',
            'sylius.controller.shipping_category' => 'getSylius_Controller_ShippingCategoryService',
            'sylius.controller.shipping_method' => 'getSylius_Controller_ShippingMethodService',
            'sylius.controller.shipping_method_rule' => 'getSylius_Controller_ShippingMethodRuleService',
            'sylius.controller.stockable' => 'getSylius_Controller_StockableService',
            'sylius.controller.tax_category' => 'getSylius_Controller_TaxCategoryService',
            'sylius.controller.tax_rate' => 'getSylius_Controller_TaxRateService',
            'sylius.controller.taxon' => 'getSylius_Controller_TaxonService',
            'sylius.controller.taxonomy' => 'getSylius_Controller_TaxonomyService',
            'sylius.controller.user' => 'getSylius_Controller_UserService',
            'sylius.controller.variant' => 'getSylius_Controller_VariantService',
            'sylius.controller.variant_image' => 'getSylius_Controller_VariantImageService',
            'sylius.controller.zone' => 'getSylius_Controller_ZoneService',
            'sylius.controller.zone_member' => 'getSylius_Controller_ZoneMemberService',
            'sylius.controller.zone_member_country' => 'getSylius_Controller_ZoneMemberCountryService',
            'sylius.controller.zone_member_province' => 'getSylius_Controller_ZoneMemberProvinceService',
            'sylius.controller.zone_member_zone' => 'getSylius_Controller_ZoneMemberZoneService',
            'sylius.currency_context' => 'getSylius_CurrencyContextService',
            'sylius.currency_converter' => 'getSylius_CurrencyConverterService',
            'sylius.event_subscriber.kernel_controller' => 'getSylius_EventSubscriber_KernelControllerService',
            'sylius.event_subscriber.load_metadata' => 'getSylius_EventSubscriber_LoadMetadataService',
            'sylius.expresssion_language' => 'getSylius_ExpresssionLanguageService',
            'sylius.form.frontend.profile.type' => 'getSylius_Form_Frontend_Profile_TypeService',
            'sylius.form.listener.address' => 'getSylius_Form_Listener_AddressService',
            'sylius.form.type.address' => 'getSylius_Form_Type_AddressService',
            'sylius.form.type.adjustment' => 'getSylius_Form_Type_AdjustmentService',
            'sylius.form.type.block' => 'getSylius_Form_Type_BlockService',
            'sylius.form.type.cart' => 'getSylius_Form_Type_CartService',
            'sylius.form.type.cart_item' => 'getSylius_Form_Type_CartItemService',
            'sylius.form.type.configuration' => 'getSylius_Form_Type_ConfigurationService',
            'sylius.form.type.configuration.database' => 'getSylius_Form_Type_Configuration_DatabaseService',
            'sylius.form.type.configuration.hidden' => 'getSylius_Form_Type_Configuration_HiddenService',
            'sylius.form.type.configuration.locale' => 'getSylius_Form_Type_Configuration_LocaleService',
            'sylius.form.type.configuration.mailer' => 'getSylius_Form_Type_Configuration_MailerService',
            'sylius.form.type.country' => 'getSylius_Form_Type_CountryService',
            'sylius.form.type.country_choice' => 'getSylius_Form_Type_CountryChoiceService',
            'sylius.form.type.credit_card' => 'getSylius_Form_Type_CreditCardService',
            'sylius.form.type.exchange_rate' => 'getSylius_Form_Type_ExchangeRateService',
            'sylius.form.type.group' => 'getSylius_Form_Type_GroupService',
            'sylius.form.type.group_choice' => 'getSylius_Form_Type_GroupChoiceService',
            'sylius.form.type.image' => 'getSylius_Form_Type_ImageService',
            'sylius.form.type.list' => 'getSylius_Form_Type_ListService',
            'sylius.form.type.locale' => 'getSylius_Form_Type_LocaleService',
            'sylius.form.type.money' => 'getSylius_Form_Type_MoneyService',
            'sylius.form.type.option' => 'getSylius_Form_Type_OptionService',
            'sylius.form.type.option_choice' => 'getSylius_Form_Type_OptionChoiceService',
            'sylius.form.type.option_value' => 'getSylius_Form_Type_OptionValueService',
            'sylius.form.type.option_value_choice' => 'getSylius_Form_Type_OptionValueChoiceService',
            'sylius.form.type.option_value_collection' => 'getSylius_Form_Type_OptionValueCollectionService',
            'sylius.form.type.order' => 'getSylius_Form_Type_OrderService',
            'sylius.form.type.order_filter' => 'getSylius_Form_Type_OrderFilterService',
            'sylius.form.type.order_item' => 'getSylius_Form_Type_OrderItemService',
            'sylius.form.type.page' => 'getSylius_Form_Type_PageService',
            'sylius.form.type.payment' => 'getSylius_Form_Type_PaymentService',
            'sylius.form.type.payment_gateway_choice' => 'getSylius_Form_Type_PaymentGatewayChoiceService',
            'sylius.form.type.payment_method' => 'getSylius_Form_Type_PaymentMethodService',
            'sylius.form.type.payment_method_choice' => 'getSylius_Form_Type_PaymentMethodChoiceService',
            'sylius.form.type.product' => 'getSylius_Form_Type_ProductService',
            'sylius.form.type.product_filter' => 'getSylius_Form_Type_ProductFilterService',
            'sylius.form.type.product_property' => 'getSylius_Form_Type_ProductPropertyService',
            'sylius.form.type.promotion' => 'getSylius_Form_Type_PromotionService',
            'sylius.form.type.promotion_action' => 'getSylius_Form_Type_PromotionActionService',
            'sylius.form.type.promotion_action.add_product_configuration' => 'getSylius_Form_Type_PromotionAction_AddProductConfigurationService',
            'sylius.form.type.promotion_action.fixed_discount_configuration' => 'getSylius_Form_Type_PromotionAction_FixedDiscountConfigurationService',
            'sylius.form.type.promotion_action.percentage_discount_configuration' => 'getSylius_Form_Type_PromotionAction_PercentageDiscountConfigurationService',
            'sylius.form.type.promotion_action.shipping_discount_configuration' => 'getSylius_Form_Type_PromotionAction_ShippingDiscountConfigurationService',
            'sylius.form.type.promotion_action_choice' => 'getSylius_Form_Type_PromotionActionChoiceService',
            'sylius.form.type.promotion_coupon' => 'getSylius_Form_Type_PromotionCouponService',
            'sylius.form.type.promotion_coupon_generate_instruction' => 'getSylius_Form_Type_PromotionCouponGenerateInstructionService',
            'sylius.form.type.promotion_coupon_to_code' => 'getSylius_Form_Type_PromotionCouponToCodeService',
            'sylius.form.type.promotion_rule' => 'getSylius_Form_Type_PromotionRuleService',
            'sylius.form.type.promotion_rule.item_count_configuration' => 'getSylius_Form_Type_PromotionRule_ItemCountConfigurationService',
            'sylius.form.type.promotion_rule.item_total_configuration' => 'getSylius_Form_Type_PromotionRule_ItemTotalConfigurationService',
            'sylius.form.type.promotion_rule.nth_order_configuration' => 'getSylius_Form_Type_PromotionRule_NthOrderConfigurationService',
            'sylius.form.type.promotion_rule.shipping_country_configuration' => 'getSylius_Form_Type_PromotionRule_ShippingCountryConfigurationService',
            'sylius.form.type.promotion_rule.taxonomy_configuration' => 'getSylius_Form_Type_PromotionRule_TaxonomyConfigurationService',
            'sylius.form.type.promotion_rule.user_loyality_configuration' => 'getSylius_Form_Type_PromotionRule_UserLoyalityConfigurationService',
            'sylius.form.type.promotion_rule_choice' => 'getSylius_Form_Type_PromotionRuleChoiceService',
            'sylius.form.type.property' => 'getSylius_Form_Type_PropertyService',
            'sylius.form.type.property_choice' => 'getSylius_Form_Type_PropertyChoiceService',
            'sylius.form.type.prototype' => 'getSylius_Form_Type_PrototypeService',
            'sylius.form.type.province' => 'getSylius_Form_Type_ProvinceService',
            'sylius.form.type.province_choice' => 'getSylius_Form_Type_ProvinceChoiceService',
            'sylius.form.type.setup' => 'getSylius_Form_Type_SetupService',
            'sylius.form.type.shipment' => 'getSylius_Form_Type_ShipmentService',
            'sylius.form.type.shipment_filter' => 'getSylius_Form_Type_ShipmentFilterService',
            'sylius.form.type.shipment_tracking' => 'getSylius_Form_Type_ShipmentTrackingService',
            'sylius.form.type.shipping_calculator.flat_rate_configuration' => 'getSylius_Form_Type_ShippingCalculator_FlatRateConfigurationService',
            'sylius.form.type.shipping_calculator.flexible_rate_configuration' => 'getSylius_Form_Type_ShippingCalculator_FlexibleRateConfigurationService',
            'sylius.form.type.shipping_calculator.per_item_rate_configuration' => 'getSylius_Form_Type_ShippingCalculator_PerItemRateConfigurationService',
            'sylius.form.type.shipping_calculator.weight_rate_configuration' => 'getSylius_Form_Type_ShippingCalculator_WeightRateConfigurationService',
            'sylius.form.type.shipping_calculator_choice' => 'getSylius_Form_Type_ShippingCalculatorChoiceService',
            'sylius.form.type.shipping_category' => 'getSylius_Form_Type_ShippingCategoryService',
            'sylius.form.type.shipping_category_choice' => 'getSylius_Form_Type_ShippingCategoryChoiceService',
            'sylius.form.type.shipping_method' => 'getSylius_Form_Type_ShippingMethodService',
            'sylius.form.type.shipping_method_choice' => 'getSylius_Form_Type_ShippingMethodChoiceService',
            'sylius.form.type.shipping_rule_item_count_configuration' => 'getSylius_Form_Type_ShippingRuleItemCountConfigurationService',
            'sylius.form.type.tax_calculator_choice' => 'getSylius_Form_Type_TaxCalculatorChoiceService',
            'sylius.form.type.tax_category' => 'getSylius_Form_Type_TaxCategoryService',
            'sylius.form.type.tax_category_choice' => 'getSylius_Form_Type_TaxCategoryChoiceService',
            'sylius.form.type.tax_rate' => 'getSylius_Form_Type_TaxRateService',
            'sylius.form.type.taxon' => 'getSylius_Form_Type_TaxonService',
            'sylius.form.type.taxon_choice' => 'getSylius_Form_Type_TaxonChoiceService',
            'sylius.form.type.taxon_selection' => 'getSylius_Form_Type_TaxonSelectionService',
            'sylius.form.type.taxonomy' => 'getSylius_Form_Type_TaxonomyService',
            'sylius.form.type.taxonomy_choice' => 'getSylius_Form_Type_TaxonomyChoiceService',
            'sylius.form.type.user' => 'getSylius_Form_Type_UserService',
            'sylius.form.type.user_filter' => 'getSylius_Form_Type_UserFilterService',
            'sylius.form.type.variant' => 'getSylius_Form_Type_VariantService',
            'sylius.form.type.variant_choice' => 'getSylius_Form_Type_VariantChoiceService',
            'sylius.form.type.variant_match' => 'getSylius_Form_Type_VariantMatchService',
            'sylius.form.type.zone' => 'getSylius_Form_Type_ZoneService',
            'sylius.form.type.zone_choice' => 'getSylius_Form_Type_ZoneChoiceService',
            'sylius.form.type.zone_member_collection' => 'getSylius_Form_Type_ZoneMemberCollectionService',
            'sylius.form.type.zone_member_country' => 'getSylius_Form_Type_ZoneMemberCountryService',
            'sylius.form.type.zone_member_province' => 'getSylius_Form_Type_ZoneMemberProvinceService',
            'sylius.form.type.zone_member_zone' => 'getSylius_Form_Type_ZoneMemberZoneService',
            'sylius.generator.order_number' => 'getSylius_Generator_OrderNumberService',
            'sylius.generator.promotion_coupon' => 'getSylius_Generator_PromotionCouponService',
            'sylius.generator.variant' => 'getSylius_Generator_VariantService',
            'sylius.image_uploader' => 'getSylius_ImageUploaderService',
            'sylius.installer.scenario' => 'getSylius_Installer_ScenarioService',
            'sylius.installer.yaml_persister' => 'getSylius_Installer_YamlPersisterService',
            'sylius.inventory_listener' => 'getSylius_InventoryListenerService',
            'sylius.inventory_operator.default' => 'getSylius_InventoryOperator_DefaultService',
            'sylius.inventory_operator.noop' => 'getSylius_InventoryOperator_NoopService',
            'sylius.inventory_twig' => 'getSylius_InventoryTwigService',
            'sylius.inventory_unit_factory' => 'getSylius_InventoryUnitFactoryService',
            'sylius.listener.complete_order' => 'getSylius_Listener_CompleteOrderService',
            'sylius.listener.coupon_usage' => 'getSylius_Listener_CouponUsageService',
            'sylius.listener.frontend.address' => 'getSylius_Listener_Frontend_AddressService',
            'sylius.listener.image_upload' => 'getSylius_Listener_ImageUploadService',
            'sylius.listener.insufficient_stock_exception' => 'getSylius_Listener_InsufficientStockExceptionService',
            'sylius.listener.inventory_unit' => 'getSylius_Listener_InventoryUnitService',
            'sylius.listener.locale' => 'getSylius_Listener_LocaleService',
            'sylius.listener.order_currency' => 'getSylius_Listener_OrderCurrencyService',
            'sylius.listener.order_inventory' => 'getSylius_Listener_OrderInventoryService',
            'sylius.listener.order_item_inventory' => 'getSylius_Listener_OrderItemInventoryService',
            'sylius.listener.order_number' => 'getSylius_Listener_OrderNumberService',
            'sylius.listener.order_payment' => 'getSylius_Listener_OrderPaymentService',
            'sylius.listener.order_promotion' => 'getSylius_Listener_OrderPromotionService',
            'sylius.listener.order_shipping' => 'getSylius_Listener_OrderShippingService',
            'sylius.listener.order_state' => 'getSylius_Listener_OrderStateService',
            'sylius.listener.order_taxation' => 'getSylius_Listener_OrderTaxationService',
            'sylius.listener.order_user' => 'getSylius_Listener_OrderUserService',
            'sylius.listener.purchase' => 'getSylius_Listener_PurchaseService',
            'sylius.listener.restricted_zone' => 'getSylius_Listener_RestrictedZoneService',
            'sylius.listener.shipment' => 'getSylius_Listener_ShipmentService',
            'sylius.listener.user_update' => 'getSylius_Listener_UserUpdateService',
            'sylius.mailer' => 'getSylius_MailerService',
            'sylius.mailer.customer_welcome' => 'getSylius_Mailer_CustomerWelcomeService',
            'sylius.mailer.order_confirmation' => 'getSylius_Mailer_OrderConfirmationService',
            'sylius.menu.backend.main' => 'getSylius_Menu_Backend_MainService',
            'sylius.menu.backend.sidebar' => 'getSylius_Menu_Backend_SidebarService',
            'sylius.menu.frontend.account' => 'getSylius_Menu_Frontend_AccountService',
            'sylius.menu.frontend.currency' => 'getSylius_Menu_Frontend_CurrencyService',
            'sylius.menu.frontend.main' => 'getSylius_Menu_Frontend_MainService',
            'sylius.menu.frontend.social' => 'getSylius_Menu_Frontend_SocialService',
            'sylius.menu.frontend.taxonomies' => 'getSylius_Menu_Frontend_TaxonomiesService',
            'sylius.menu_builder.backend' => 'getSylius_MenuBuilder_BackendService',
            'sylius.menu_builder.frontend' => 'getSylius_MenuBuilder_FrontendService',
            'sylius.oauth.user_provider' => 'getSylius_Oauth_UserProviderService',
            'sylius.order.purger' => 'getSylius_Order_PurgerService',
            'sylius.order.releaser' => 'getSylius_Order_ReleaserService',
            'sylius.order_processing.inventory_handler' => 'getSylius_OrderProcessing_InventoryHandlerService',
            'sylius.order_processing.payment_processor' => 'getSylius_OrderProcessing_PaymentProcessorService',
            'sylius.order_processing.shipment_factory' => 'getSylius_OrderProcessing_ShipmentFactoryService',
            'sylius.order_processing.shipping_processor' => 'getSylius_OrderProcessing_ShippingProcessorService',
            'sylius.order_processing.state_resolver' => 'getSylius_OrderProcessing_StateResolverService',
            'sylius.order_processing.taxation_processor' => 'getSylius_OrderProcessing_TaxationProcessorService',
            'sylius.payum.action.execute_same_request_with_payment_details' => 'getSylius_Payum_Action_ExecuteSameRequestWithPaymentDetailsService',
            'sylius.payum.action.obtain_credit_card' => 'getSylius_Payum_Action_ObtainCreditCardService',
            'sylius.payum.action.order_status' => 'getSylius_Payum_Action_OrderStatusService',
            'sylius.payum.be2bill.action.capture_order_using_be2bill_form' => 'getSylius_Payum_Be2bill_Action_CaptureOrderUsingBe2billFormService',
            'sylius.payum.be2bill.action.capture_order_using_credit_card' => 'getSylius_Payum_Be2bill_Action_CaptureOrderUsingCreditCardService',
            'sylius.payum.be2bill.action.notify' => 'getSylius_Payum_Be2bill_Action_NotifyService',
            'sylius.payum.dummy.action.capture_order' => 'getSylius_Payum_Dummy_Action_CaptureOrderService',
            'sylius.payum.dummy.action.order_status' => 'getSylius_Payum_Dummy_Action_OrderStatusService',
            'sylius.payum.paypal.action.capture_order_using_express_checkout' => 'getSylius_Payum_Paypal_Action_CaptureOrderUsingExpressCheckoutService',
            'sylius.payum.paypal.action.notify_order' => 'getSylius_Payum_Paypal_Action_NotifyOrderService',
            'sylius.payum.stripe.action.capture_order_using_credit_card' => 'getSylius_Payum_Stripe_Action_CaptureOrderUsingCreditCardService',
            'sylius.price_calculator.default' => 'getSylius_PriceCalculator_DefaultService',
            'sylius.process.builder' => 'getSylius_Process_BuilderService',
            'sylius.process.context' => 'getSylius_Process_ContextService',
            'sylius.process.coordinator' => 'getSylius_Process_CoordinatorService',
            'sylius.process.validator' => 'getSylius_Process_ValidatorService',
            'sylius.process_storage.session' => 'getSylius_ProcessStorage_SessionService',
            'sylius.process_storage.session.bag' => 'getSylius_ProcessStorage_Session_BagService',
            'sylius.processor.shipment_processor' => 'getSylius_Processor_ShipmentProcessorService',
            'sylius.promotion_action.add_product' => 'getSylius_PromotionAction_AddProductService',
            'sylius.promotion_action.fixed_discount' => 'getSylius_PromotionAction_FixedDiscountService',
            'sylius.promotion_action.percentage_discount' => 'getSylius_PromotionAction_PercentageDiscountService',
            'sylius.promotion_action.shipping_discount' => 'getSylius_PromotionAction_ShippingDiscountService',
            'sylius.promotion_applicator' => 'getSylius_PromotionApplicatorService',
            'sylius.promotion_eligibility_checker' => 'getSylius_PromotionEligibilityCheckerService',
            'sylius.promotion_processor' => 'getSylius_PromotionProcessorService',
            'sylius.promotion_rule_checker.item_count' => 'getSylius_PromotionRuleChecker_ItemCountService',
            'sylius.promotion_rule_checker.item_total' => 'getSylius_PromotionRuleChecker_ItemTotalService',
            'sylius.promotion_rule_checker.nth_order' => 'getSylius_PromotionRuleChecker_NthOrderService',
            'sylius.promotion_rule_checker.shipping_country' => 'getSylius_PromotionRuleChecker_ShippingCountryService',
            'sylius.promotion_rule_checker.taxonomy' => 'getSylius_PromotionRuleChecker_TaxonomyService',
            'sylius.promotion_rule_checker.user_loyality' => 'getSylius_PromotionRuleChecker_UserLoyalityService',
            'sylius.refresh_cart_listener' => 'getSylius_RefreshCartListenerService',
            'sylius.registry.promotion_action' => 'getSylius_Registry_PromotionActionService',
            'sylius.registry.promotion_rule_checker' => 'getSylius_Registry_PromotionRuleCheckerService',
            'sylius.repository.address' => 'getSylius_Repository_AddressService',
            'sylius.repository.adjustment' => 'getSylius_Repository_AdjustmentService',
            'sylius.repository.block' => 'getSylius_Repository_BlockService',
            'sylius.repository.country' => 'getSylius_Repository_CountryService',
            'sylius.repository.credit_card' => 'getSylius_Repository_CreditCardService',
            'sylius.repository.exchange_rate' => 'getSylius_Repository_ExchangeRateService',
            'sylius.repository.group' => 'getSylius_Repository_GroupService',
            'sylius.repository.inventory_unit' => 'getSylius_Repository_InventoryUnitService',
            'sylius.repository.locale' => 'getSylius_Repository_LocaleService',
            'sylius.repository.number' => 'getSylius_Repository_NumberService',
            'sylius.repository.option' => 'getSylius_Repository_OptionService',
            'sylius.repository.option_value' => 'getSylius_Repository_OptionValueService',
            'sylius.repository.order' => 'getSylius_Repository_OrderService',
            'sylius.repository.order_item' => 'getSylius_Repository_OrderItemService',
            'sylius.repository.page' => 'getSylius_Repository_PageService',
            'sylius.repository.parameter' => 'getSylius_Repository_ParameterService',
            'sylius.repository.payment' => 'getSylius_Repository_PaymentService',
            'sylius.repository.payment_method' => 'getSylius_Repository_PaymentMethodService',
            'sylius.repository.payment_security_token' => 'getSylius_Repository_PaymentSecurityTokenService',
            'sylius.repository.product' => 'getSylius_Repository_ProductService',
            'sylius.repository.product_property' => 'getSylius_Repository_ProductPropertyService',
            'sylius.repository.promotion' => 'getSylius_Repository_PromotionService',
            'sylius.repository.promotion_action' => 'getSylius_Repository_PromotionActionService',
            'sylius.repository.promotion_coupon' => 'getSylius_Repository_PromotionCouponService',
            'sylius.repository.promotion_rule' => 'getSylius_Repository_PromotionRuleService',
            'sylius.repository.promotion_subject' => 'getSylius_Repository_PromotionSubjectService',
            'sylius.repository.property' => 'getSylius_Repository_PropertyService',
            'sylius.repository.prototype' => 'getSylius_Repository_PrototypeService',
            'sylius.repository.province' => 'getSylius_Repository_ProvinceService',
            'sylius.repository.shipment' => 'getSylius_Repository_ShipmentService',
            'sylius.repository.shipment_item' => 'getSylius_Repository_ShipmentItemService',
            'sylius.repository.shipping_category' => 'getSylius_Repository_ShippingCategoryService',
            'sylius.repository.shipping_method' => 'getSylius_Repository_ShippingMethodService',
            'sylius.repository.shipping_method_rule' => 'getSylius_Repository_ShippingMethodRuleService',
            'sylius.repository.stockable' => 'getSylius_Repository_StockableService',
            'sylius.repository.tax_category' => 'getSylius_Repository_TaxCategoryService',
            'sylius.repository.tax_rate' => 'getSylius_Repository_TaxRateService',
            'sylius.repository.taxon' => 'getSylius_Repository_TaxonService',
            'sylius.repository.taxonomy' => 'getSylius_Repository_TaxonomyService',
            'sylius.repository.user' => 'getSylius_Repository_UserService',
            'sylius.repository.variant' => 'getSylius_Repository_VariantService',
            'sylius.repository.variant_image' => 'getSylius_Repository_VariantImageService',
            'sylius.repository.zone' => 'getSylius_Repository_ZoneService',
            'sylius.repository.zone_member' => 'getSylius_Repository_ZoneMemberService',
            'sylius.repository.zone_member_country' => 'getSylius_Repository_ZoneMemberCountryService',
            'sylius.repository.zone_member_province' => 'getSylius_Repository_ZoneMemberProvinceService',
            'sylius.repository.zone_member_zone' => 'getSylius_Repository_ZoneMemberZoneService',
            'sylius.requirements' => 'getSylius_RequirementsService',
            'sylius.settings.form_factory' => 'getSylius_Settings_FormFactoryService',
            'sylius.settings.manager' => 'getSylius_Settings_ManagerService',
            'sylius.settings.schema_registry' => 'getSylius_Settings_SchemaRegistryService',
            'sylius.settings.twig' => 'getSylius_Settings_TwigService',
            'sylius.settings_schema.general' => 'getSylius_SettingsSchema_GeneralService',
            'sylius.settings_schema.taxation' => 'getSylius_SettingsSchema_TaxationService',
            'sylius.shipping_calculator' => 'getSylius_ShippingCalculatorService',
            'sylius.shipping_calculator.flexible_rate' => 'getSylius_ShippingCalculator_FlexibleRateService',
            'sylius.shipping_calculator.per_item_rate' => 'getSylius_ShippingCalculator_PerItemRateService',
            'sylius.shipping_calculator.weight_rate' => 'getSylius_ShippingCalculator_WeightRateService',
            'sylius.shipping_calculator_registry' => 'getSylius_ShippingCalculatorRegistryService',
            'sylius.shipping_eligibility_checker' => 'getSylius_ShippingEligibilityCheckerService',
            'sylius.shipping_methods_resolver' => 'getSylius_ShippingMethodsResolverService',
            'sylius.shipping_rule_checker.item_count' => 'getSylius_ShippingRuleChecker_ItemCountService',
            'sylius.shipping_rule_checker_registry' => 'getSylius_ShippingRuleCheckerRegistryService',
            'sylius.shipping_shipping_calculator.flat_rate' => 'getSylius_ShippingShippingCalculator_FlatRateService',
            'sylius.tax_calculator' => 'getSylius_TaxCalculatorService',
            'sylius.tax_calculator.default' => 'getSylius_TaxCalculator_DefaultService',
            'sylius.tax_rate_resolver' => 'getSylius_TaxRateResolverService',
            'sylius.twig.money' => 'getSylius_Twig_MoneyService',
            'sylius.twig.resource' => 'getSylius_Twig_ResourceService',
            'sylius.twig.restricted_zone_extension' => 'getSylius_Twig_RestrictedZoneExtensionService',
            'sylius.twig.text_extension' => 'getSylius_Twig_TextExtensionService',
            'sylius.user.registration.form.type' => 'getSylius_User_Registration_Form_TypeService',
            'sylius.validator.in_stock' => 'getSylius_Validator_InStockService',
            'sylius.validator.product.unique' => 'getSylius_Validator_Product_UniqueService',
            'sylius.validator.shippable_address' => 'getSylius_Validator_ShippableAddressService',
            'sylius.validator.variant.combination' => 'getSylius_Validator_Variant_CombinationService',
            'sylius.validator.variant.unique' => 'getSylius_Validator_Variant_UniqueService',
            'sylius.zone_matcher' => 'getSylius_ZoneMatcherService',
            'sylius_entity_to_identifier' => 'getSyliusEntityToIdentifierService',
            'sylius_phpcr_document_to_identifier' => 'getSyliusPhpcrDocumentToIdentifierService',
            'templating' => 'getTemplatingService',
            'templating.asset.package_factory' => 'getTemplating_Asset_PackageFactoryService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.code' => 'getTemplating_Helper_CodeService',
            'templating.helper.form' => 'getTemplating_Helper_FormService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.request' => 'getTemplating_Helper_RequestService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.helper.session' => 'getTemplating_Helper_SessionService',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.mapping.class_metadata_factory' => 'getValidator_Mapping_ClassMetadataFactoryService',
            'white_october_pagerfanta.view_factory' => 'getWhiteOctoberPagerfanta_ViewFactoryService',
        );
        $this->aliases = array(
            'cmf_routing.content_repository' => 'cmf_routing.phpcr_content_repository',
            'cmf_routing.route_provider' => 'cmf_routing.phpcr_route_provider',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'doctrine_phpcr.odm.document_manager' => 'doctrine_phpcr.odm.default_document_manager',
            'doctrine_phpcr.session' => 'doctrine_phpcr.default_session',
            'fos_rest.inflector' => 'fos_rest.inflector.doctrine',
            'fos_rest.router' => 'cmf_routing.router',
            'fos_rest.serializer' => 'jms_serializer',
            'fos_rest.templating' => 'templating',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'hwi_oauth.user.provider.entity.main' => 'sylius.oauth.user_provider',
            'mailer' => 'swiftmailer.mailer.default',
            'router' => 'cmf_routing.router',
            'serializer' => 'jms_serializer',
            'session.storage' => 'session.storage.native',
            'sonata.block.cache.handler' => 'sonata.block.cache.handler.default',
            'sonata.block.context_manager' => 'sonata.block.context_manager.default',
            'sonata.block.renderer' => 'sonata.block.renderer.default',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'sylius.availability_checker' => 'sylius.availability_checker.default',
            'sylius.cart_provider' => 'sylius.cart_provider.default',
            'sylius.cart_resolver' => 'sylius.cart_item_resolver.default',
            'sylius.cart_storage' => 'sylius.cart_storage.session',
            'sylius.inventory_operator' => 'sylius.inventory_operator.default',
            'sylius.manager.address' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.adjustment' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.block' => 'doctrine_phpcr.odm.default_document_manager',
            'sylius.manager.cart' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.cart_item' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.country' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.credit_card' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.exchange_rate' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.group' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.inventory_unit' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.locale' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.number' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.option' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.option_value' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.order' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.order_item' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.page' => 'doctrine_phpcr.odm.default_document_manager',
            'sylius.manager.parameter' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.payment' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.payment_method' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.payment_security_token' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_property' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion_action' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion_coupon' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion_rule' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion_subject' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.property' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.prototype' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.province' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipment' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipment_item' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipping_category' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipping_method' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipping_method_rule' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.stockable' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.tax_category' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.tax_rate' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.taxon' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.taxonomy' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.user' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.variant' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.variant_image' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.zone' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.zone_member' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.zone_member_country' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.zone_member_province' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.zone_member_zone' => 'doctrine.orm.default_entity_manager',
            'sylius.process_storage' => 'sylius.process_storage.session',
            'sylius.repository.cart' => 'sylius.repository.order',
            'sylius.repository.cart_item' => 'sylius.repository.order_item',
            'sylius.settings.cache' => 'doctrine_cache.providers.sylius_settings',
            'translator' => 'translator.default',
        );
    }
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), 'C:/xampp/htdocs/bsylius/app/cache/prod/annotations', false);
    }
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');
        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), new \Assetic\Cache\ConfigCache('C:/xampp/htdocs/bsylius/app/cache/prod/assetic/config'), false)));
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SyliusWebBundle', 'C:/xampp/htdocs/bsylius/app/Resources/SyliusWebBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SyliusWebBundle', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', 'C:/xampp/htdocs/bsylius/app/Resources/views', '/\\.[^.]+\\.twig$/'), 'twig');
        return $instance;
    }
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => $this->get('liip_imagine.cache.clearer')));
    }
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');
        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, 'C:/xampp/htdocs/bsylius/app/Resources');
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 3 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine_phpcr')), 4 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('cmf_routing.router')), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c)));
    }
    protected function getCmf_Block_ActionService()
    {
        $this->services['cmf.block.action'] = $instance = new \Symfony\Cmf\Bundle\BlockBundle\Block\ActionBlockService('cmf.block.action', $this->get('templating'), $this->get('fragment.handler'));
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        return $instance;
    }
    protected function getCmf_Block_ContainerService()
    {
        return $this->services['cmf.block.container'] = new \Symfony\Cmf\Bundle\BlockBundle\Block\ContainerBlockService('cmf.block.container', $this->get('templating'), $this->get('sonata.block.renderer.default'));
    }
    protected function getCmf_Block_ImagineService()
    {
        return $this->services['cmf.block.imagine'] = new \Symfony\Cmf\Bundle\BlockBundle\Block\SimpleBlockService('cmf.block.imagine', $this->get('templating'), 'CmfBlockBundle:Block:block_imagine.html.twig');
    }
    protected function getCmf_Block_ReferenceService()
    {
        return $this->services['cmf.block.reference'] = new \Symfony\Cmf\Bundle\BlockBundle\Block\ReferenceBlockService('cmf.block.reference', $this->get('templating'), $this->get('sonata.block.renderer.default'), $this->get('sonata.block.context_manager.default'));
    }
    protected function getCmf_Block_RssControllerService()
    {
        $this->services['cmf.block.rss_controller'] = $instance = new \Symfony\Cmf\Bundle\BlockBundle\Controller\RssController();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getCmf_Block_ServiceService()
    {
        $this->services['cmf.block.service'] = $instance = new \Symfony\Cmf\Bundle\BlockBundle\Block\PhpcrBlockLoader($this->get('doctrine_phpcr'), $this->get('cmf_core.publish_workflow.checker'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE), 'sonata.block.service.empty');
        $instance->setManagerName(NULL);
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        return $instance;
    }
    protected function getCmf_Block_SimpleService()
    {
        return $this->services['cmf.block.simple'] = new \Symfony\Cmf\Bundle\BlockBundle\Block\SimpleBlockService('cmf.block.simple', $this->get('templating'));
    }
    protected function getCmf_Block_SlideshowService()
    {
        return $this->services['cmf.block.slideshow'] = new \Symfony\Cmf\Bundle\BlockBundle\Block\ContainerBlockService('cmf.block.slideshow', $this->get('templating'), $this->get('sonata.block.renderer.default'), 'CmfBlockBundle:Block:block_slideshow.html.twig');
    }
    protected function getCmf_Block_StringService()
    {
        return $this->services['cmf.block.string'] = new \Symfony\Cmf\Bundle\BlockBundle\Block\StringBlockService('cmf.block.string', $this->get('templating'));
    }
    protected function getCmfBlock_Fragment_Renderer_ActionService()
    {
        $this->services['cmf_block.fragment.renderer.action'] = $instance = new \Symfony\Cmf\Bundle\BlockBundle\Fragment\ActionFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));
        $instance->setFragmentPath('/_cmf_block_fragment');
        return $instance;
    }
    protected function getCmfBlock_Templating_Helper_BlockService()
    {
        return $this->services['cmf_block.templating.helper.block'] = new \Symfony\Cmf\Bundle\BlockBundle\Templating\Helper\CmfBlockHelper($this->get('sonata.block.templating.helper'), '%embed-block|', '|end%', $this->get('logger'));
    }
    protected function getCmfBlock_Twig_EmbedExtensionService()
    {
        return $this->services['cmf_block.twig.embed_extension'] = new \Symfony\Cmf\Bundle\BlockBundle\Twig\Extension\CmfBlockExtension($this->get('cmf_block.templating.helper.block'));
    }
    protected function getCmfContent_ControllerService()
    {
        return $this->services['cmf_content.controller'] = new \Symfony\Cmf\Bundle\ContentBundle\Controller\ContentController($this->get('templating'), NULL, $this->get('fos_rest.view_handler', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getCmfContent_InitializerService()
    {
        return $this->services['cmf_content.initializer'] = new \Doctrine\Bundle\PHPCRBundle\Initializer\GenericInitializer(array(0 => '/cms/pages'));
    }
    protected function getCmfCore_Form_Type_CheckboxUrlLabelService()
    {
        return $this->services['cmf_core.form.type.checkbox_url_label'] = new \Symfony\Cmf\Bundle\CoreBundle\Form\Type\CheckboxUrlLabelFormType($this->get('cmf_routing.router'));
    }
    protected function getCmfCore_Listener_RequestAwareService()
    {
        return $this->services['cmf_core.listener.request_aware'] = new \Symfony\Cmf\Bundle\CoreBundle\EventListener\RequestAwareListener();
    }
    protected function getCmfCore_Persistence_Phpcr_NonTranslatableMetadataListenerService()
    {
        return $this->services['cmf_core.persistence.phpcr.non_translatable_metadata_listener'] = new \Symfony\Cmf\Bundle\CoreBundle\Doctrine\Phpcr\NonTranslatableMetadataListener();
    }
    protected function getCmfCore_PublishWorkflow_CheckerService()
    {
        return $this->services['cmf_core.publish_workflow.checker'] = new \Symfony\Cmf\Bundle\CoreBundle\PublishWorkflow\AlwaysPublishedWorkflowChecker();
    }
    protected function getCmfCore_Templating_HelperService()
    {
        return $this->services['cmf_core.templating.helper'] = new \Symfony\Cmf\Bundle\CoreBundle\Templating\Helper\CmfHelper($this->get('cmf_core.publish_workflow.checker', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('doctrine_phpcr', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL);
    }
    protected function getCmfCore_Twig_ChildrenExtensionService()
    {
        return $this->services['cmf_core.twig.children_extension'] = new \Symfony\Cmf\Bundle\CoreBundle\Twig\Extension\CmfExtension($this->get('cmf_core.templating.helper'));
    }
    protected function getCmfMenu_CurrentItemVoter_UriPrefixService()
    {
        $this->services['cmf_menu.current_item_voter.uri_prefix'] = $instance = new \Symfony\Cmf\Bundle\MenuBundle\Voter\UriPrefixVoter();
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        return $instance;
    }
    protected function getCmfMenu_FactoryService()
    {
        $a = $this->get('cmf_routing.router');
        $this->services['cmf_menu.factory'] = $instance = new \Symfony\Cmf\Bundle\MenuBundle\ContentAwareFactory($a, $a, $this->get('cmf_core.publish_workflow.checker'), $this->get('logger'));
        $instance->setAllowEmptyItems(false);
        $instance->addCurrentItemVoter($this->get('cmf_menu.current_item_voter.uri_prefix'));
        return $instance;
    }
    protected function getCmfRouting_DynamicRouterService()
    {
        $this->services['cmf_routing.dynamic_router'] = $instance = new \Symfony\Cmf\Bundle\RoutingBundle\Routing\DynamicRouter($this->get('router.request_context'), $this->get('cmf_routing.nested_matcher'), $this->get('cmf_routing.generator'), NULL, $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->setContainer($this);
        $instance->addRouteEnhancer($this->get('cmf_routing.enhancer.route_content'), 100);
        $instance->addRouteEnhancer(new \Symfony\Cmf\Component\Routing\Enhancer\FieldPresenceEnhancer(NULL, '_controller', 'cmf_content.controller:indexAction'), -100);
        return $instance;
    }
    protected function getCmfRouting_Enhancer_RouteContentService()
    {
        return $this->services['cmf_routing.enhancer.route_content'] = new \Symfony\Cmf\Component\Routing\Enhancer\RouteContentEnhancer('_route_object', '_content');
    }
    protected function getCmfRouting_FinalMatcherService()
    {
        return $this->services['cmf_routing.final_matcher'] = new \Symfony\Cmf\Component\Routing\NestedMatcher\UrlMatcher(new \Symfony\Component\Routing\RouteCollection(), new \Symfony\Component\Routing\RequestContext());
    }
    protected function getCmfRouting_GeneratorService()
    {
        $this->services['cmf_routing.generator'] = $instance = new \Symfony\Cmf\Component\Routing\ContentAwareGenerator($this->get('cmf_routing.phpcr_route_provider'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->setContentRepository($this->get('cmf_routing.phpcr_content_repository'));
        return $instance;
    }
    protected function getCmfRouting_InitializerService()
    {
        return $this->services['cmf_routing.initializer'] = new \Doctrine\Bundle\PHPCRBundle\Initializer\GenericInitializer(array(0 => '/cms/routes'));
    }
    protected function getCmfRouting_NestedMatcherService()
    {
        return $this->services['cmf_routing.nested_matcher'] = new \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher($this->get('cmf_routing.phpcr_route_provider'), $this->get('cmf_routing.final_matcher'));
    }
    protected function getCmfRouting_PhpcrContentRepositoryService()
    {
        $this->services['cmf_routing.phpcr_content_repository'] = $instance = new \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\ContentRepository($this->get('doctrine_phpcr'));
        $instance->setManagerName(NULL);
        return $instance;
    }
    protected function getCmfRouting_PhpcrRouteProviderService()
    {
        $this->services['cmf_routing.phpcr_route_provider'] = $instance = new \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\RouteProvider($this->get('doctrine_phpcr'), NULL);
        $instance->setManagerName(NULL);
        $instance->setPrefix('/cms/routes');
        return $instance;
    }
    protected function getCmfRouting_PhpcrodmRouteIdprefixListenerService()
    {
        return $this->services['cmf_routing.phpcrodm_route_idprefix_listener'] = new \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\IdPrefixListener('/cms/routes');
    }
    protected function getCmfRouting_RedirectControllerService()
    {
        return $this->services['cmf_routing.redirect_controller'] = new \Symfony\Cmf\Bundle\RoutingBundle\Controller\RedirectController($this->get('cmf_routing.router'));
    }
    protected function getCmfRouting_RouteTypeFormTypeService()
    {
        return $this->services['cmf_routing.route_type_form_type'] = new \Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType();
    }
    protected function getCmfRouting_RouterService()
    {
        $a = $this->get('router.request_context');
        $this->services['cmf_routing.router'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->setContext($a);
        $instance->add(new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, 'C:/xampp/htdocs/bsylius/app/config/routing.yml', array('cache_dir' => 'C:/xampp/htdocs/bsylius/app/cache/prod', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdUrlMatcher', 'strict_requirements' => NULL), $a, $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE)), '100');
        return $instance;
    }
    protected function getDebug_EmergencyLoggerListenerService()
    {
        return $this->services['debug.emergency_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('emergency', $this->get('monolog.logger.emergency', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = $this->get('annotation_reader');
        $b = new \Gedmo\Sortable\SortableListener();
        $b->setAnnotationReader($a);
        $c = new \Gedmo\Sluggable\SluggableListener();
        $c->setAnnotationReader($a);
        $c->addManagedFilter('softdeleteable');
        $d = new \Gedmo\Timestampable\TimestampableListener();
        $d->setAnnotationReader($a);
        $e = new \Gedmo\Tree\TreeListener();
        $e->setAnnotationReader($a);
        $f = new \Gedmo\SoftDeleteable\SoftDeleteableListener();
        $f->setAnnotationReader($a);
        $g = new \Doctrine\ORM\Tools\ResolveTargetEntityListener();
        $g->addResolveTargetEntity('Sylius\\Bundle\\OrderBundle\\Model\\OrderInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Order', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\OrderBundle\\Model\\OrderItemInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\OrderItem', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\OrderBundle\\Model\\AdjustmentInterface', 'Sylius\\Bundle\\OrderBundle\\Model\\Adjustment', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\OrderBundle\\Model\\NumberInterface', 'Sylius\\Bundle\\OrderBundle\\Model\\Number', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\MoneyBundle\\Model\\ExchangeRateInterface', 'Sylius\\Bundle\\MoneyBundle\\Model\\ExchangeRate', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\SettingsBundle\\Model\\ParameterInterface', 'Sylius\\Bundle\\SettingsBundle\\Model\\Parameter', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\CartBundle\\Model\\CartInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Order', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\CartBundle\\Model\\CartItemInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\OrderItem', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\ProductBundle\\Model\\ProductInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Product', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\ProductBundle\\Model\\PropertyInterface', 'Sylius\\Bundle\\ProductBundle\\Model\\Property', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\ProductBundle\\Model\\ProductPropertyInterface', 'Sylius\\Bundle\\ProductBundle\\Model\\ProductProperty', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\ProductBundle\\Model\\PrototypeInterface', 'Sylius\\Bundle\\VariableProductBundle\\Model\\Prototype', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\VariableProductBundle\\Model\\VariantInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Variant', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\VariableProductBundle\\Model\\OptionInterface', 'Sylius\\Bundle\\VariableProductBundle\\Model\\Option', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\VariableProductBundle\\Model\\OptionValueInterface', 'Sylius\\Bundle\\VariableProductBundle\\Model\\OptionValue', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategoryInterface', 'Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategory', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\TaxationBundle\\Model\\TaxRateInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\TaxRate', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\ShippingBundle\\Model\\ShipmentInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Shipment', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\ShippingBundle\\Model\\ShipmentItemInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategoryInterface', 'Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategory', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\ShippingBundle\\Model\\ShippingMethodInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\ShippingMethod', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\ShippingBundle\\Model\\RuleInterface', 'Sylius\\Bundle\\ShippingBundle\\Model\\Rule', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCardInterface', 'Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCard', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentInterface', 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethodInterface', 'Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethod', array());
        $g->addResolveTargetEntity('Payum\\Core\\Security\\TokenInterface', 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\PromotionsBundle\\Model\\PromotionInterface', 'Sylius\\Bundle\\PromotionsBundle\\Model\\Promotion', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\PromotionsBundle\\Model\\CouponInterface', 'Sylius\\Bundle\\PromotionsBundle\\Model\\Coupon', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\PromotionsBundle\\Model\\RuleInterface', 'Sylius\\Bundle\\PromotionsBundle\\Model\\Rule', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\PromotionsBundle\\Model\\ActionInterface', 'Sylius\\Bundle\\PromotionsBundle\\Model\\Action', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\PromotionsBundle\\Model\\PromotionSubjectInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Order', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\AddressingBundle\\Model\\AddressInterface', 'Sylius\\Bundle\\AddressingBundle\\Model\\Address', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\AddressingBundle\\Model\\CountryInterface', 'Sylius\\Bundle\\AddressingBundle\\Model\\Country', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\AddressingBundle\\Model\\ProvinceInterface', 'Sylius\\Bundle\\AddressingBundle\\Model\\Province', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneInterface', 'Sylius\\Bundle\\AddressingBundle\\Model\\Zone', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberInterface', 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMember', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\InventoryBundle\\Model\\InventoryUnitInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\InventoryBundle\\Model\\StockableInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Variant', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\TaxonomiesBundle\\Model\\TaxonomyInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Taxonomy', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\TaxonomiesBundle\\Model\\TaxonInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Taxon', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\CoreBundle\\Model\\UserInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\User', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\CoreBundle\\Model\\GroupInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Group', array());
        $g->addResolveTargetEntity('Sylius\\Bundle\\CoreBundle\\Model\\VariantImageInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\VariantImage', array());
        $h = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $h->addEventSubscriber($b);
        $h->addEventSubscriber($c);
        $h->addEventSubscriber(new \FOS\UserBundle\Doctrine\Orm\UserListener($this));
        $h->addEventSubscriber($this->get('sylius.event_subscriber.load_metadata'));
        $h->addEventSubscriber($d);
        $h->addEventSubscriber($this->get('stof_doctrine_extensions.listener.loggable'));
        $h->addEventSubscriber($e);
        $h->addEventSubscriber($f);
        $h->addEventListener(array(0 => 'prePersist', 1 => 'onFlush'), $this->get('sylius.listener.order_item_inventory'));
        $h->addEventListener(array(0 => 'loadClassMetadata'), $g);
        $h->addEventListener(array(0 => 'postGenerateSchema'), 'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener');
        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'sylius', 'user' => 'root', 'password' => NULL, 'charset' => 'UTF8', 'driverOptions' => array()), new \Doctrine\DBAL\Configuration(), $h, array());
    }
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\ORM\Mapping\DefaultEntityListenerResolver();
    }
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array('C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\doctrine' => 'FOS\\UserBundle\\Entity'));
        $a->setGlobalBasename('mapping');
        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array(0 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\Loggable\\Entity')), 'Gedmo\\Loggable\\Entity');
        $b->addDriver($a, 'FOS\\UserBundle\\Entity');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\order-bundle\\Sylius\\Bundle\\OrderBundle\\Resources\\config\\doctrine\\model' => 'Sylius\\Bundle\\OrderBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\OrderBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle\\Resources\\config\\doctrine\\model' => 'Sylius\\Bundle\\MoneyBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\MoneyBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle\\Resources\\config\\doctrine\\model' => 'Sylius\\Bundle\\SettingsBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\SettingsBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle\\Resources\\config\\doctrine\\model' => 'Sylius\\Bundle\\CartBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\CartBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle\\Resources\\config\\doctrine\\model' => 'Sylius\\Bundle\\ProductBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\ProductBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle\\Resources\\config\\doctrine\\model' => 'Sylius\\Bundle\\VariableProductBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\VariableProductBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle\\Resources\\config\\doctrine\\model' => 'Sylius\\Bundle\\TaxationBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\TaxationBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle\\Resources\\config\\doctrine\\model' => 'Sylius\\Bundle\\ShippingBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\ShippingBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle\\Resources\\config\\doctrine\\model' => 'Sylius\\Bundle\\PaymentsBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\PaymentsBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payum-bundle\\Sylius\\Bundle\\PayumBundle\\Resources\\config\\doctrine\\model' => 'Sylius\\Bundle\\PayumBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\PayumBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle\\Resources\\config\\doctrine\\model' => 'Sylius\\Bundle\\PromotionsBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\PromotionsBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle\\Resources\\config\\doctrine\\model' => 'Sylius\\Bundle\\AddressingBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\AddressingBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle\\Resources\\config\\doctrine\\model' => 'Sylius\\Bundle\\InventoryBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\InventoryBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle\\Resources\\config\\doctrine\\model' => 'Sylius\\Bundle\\TaxonomiesBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\TaxonomiesBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle\\Resources\\config\\doctrine\\model' => 'Sylius\\Bundle\\CoreBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\CoreBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\doctrine\\model' => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');
        $c = new \Doctrine\ORM\Configuration();
        $c->setEntityNamespaces(array('gedmo_loggable' => 'Gedmo\\Loggable\\Entity', 'FOSUserBundle' => 'FOS\\UserBundle\\Entity'));
        $c->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $c->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $c->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $c->setMetadataDriverImpl($b);
        $c->setProxyDir('C:/xampp/htdocs/bsylius/app/cache/prod/doctrine/orm/Proxies');
        $c->setProxyNamespace('Proxies');
        $c->setAutoGenerateProxyClasses(false);
        $c->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $c->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $c->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $c->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));
        $c->addFilter('softdeleteable', 'Gedmo\\SoftDeleteable\\Filter\\SoftDeleteableFilter');
        $this->services['doctrine.orm.default_entity_manager'] = $instance = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->get('doctrine.dbal.default_connection'), $c);
        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);
        return $instance;
    }
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(0 => 'softdeleteable'), array());
    }
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();
        $instance->setNamespace('sf2orm_default_b9abbae5082a4acc7b6781f8948350690252f90ab4584fcd23f773d9ab63b707');
        return $instance;
    }
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();
        $instance->setNamespace('sf2orm_default_b9abbae5082a4acc7b6781f8948350690252f90ab4584fcd23f773d9ab63b707');
        return $instance;
    }
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();
        $instance->setNamespace('sf2orm_default_b9abbae5082a4acc7b6781f8948350690252f90ab4584fcd23f773d9ab63b707');
        return $instance;
    }
    protected function getDoctrineCache_Providers_SyliusSettingsService()
    {
        return $this->services['doctrine_cache.providers.sylius_settings'] = new \Doctrine\Common\Cache\FilesystemCache('C:/xampp/htdocs/bsylius/app/cache/prod/doctrine/cache/file_system', NULL);
    }
    protected function getDoctrinePhpcrService()
    {
        $this->services['doctrine_phpcr'] = $instance = new \Doctrine\Bundle\PHPCRBundle\ManagerRegistry('PHPCR', array('default' => 'doctrine_phpcr.default_session'), array('default' => 'doctrine_phpcr.odm.default_document_manager'), 'default', 'default', 'Doctrine\\Common\\Proxy\\Proxy');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getDoctrinePhpcr_ConsoleDumperService()
    {
        return $this->services['doctrine_phpcr.console_dumper'] = new \PHPCR\Util\Console\Helper\PhpcrConsoleDumperHelper();
    }
    protected function getDoctrinePhpcr_DefaultSessionService()
    {
        return $this->services['doctrine_phpcr.default_session'] = $this->get('doctrine_phpcr.jackalope.repository.default')->login(new \PHPCR\SimpleCredentials('admin', 'admin'), 'default');
    }
    protected function getDoctrinePhpcr_Jackalope_Repository_DefaultService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.default'] = $this->get('doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal')->getRepository(array('jackalope.doctrine_dbal_connection' => $this->get('doctrine.dbal.default_connection'), 'jackalope.check_login_on_server' => false));
    }
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_DoctrinedbalService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.doctrinedbal'] = $this->get('doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal')->getRepository(array());
    }
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_JackrabbitService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.jackrabbit'] = $this->get('doctrine_phpcr.jackalope.repository.factory.service.jackrabbit')->getRepository(array('jackalope.jackrabbit_check_login_on_server' => false));
    }
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_Service_DoctrinedbalService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal'] = new \Jackalope\RepositoryFactoryDoctrineDBAL();
    }
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_Service_JackrabbitService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.service.jackrabbit'] = new \Jackalope\RepositoryFactoryJackrabbit();
    }
    protected function getDoctrinePhpcr_JackalopeDoctrineDbal_SchemaListenerService()
    {
        return $this->services['doctrine_phpcr.jackalope_doctrine_dbal.schema_listener'] = new \Doctrine\Bundle\PHPCRBundle\EventListener\JackalopeDoctrineDbalSchemaListener(new \Jackalope\Transport\DoctrineDBAL\RepositorySchema());
    }
    protected function getDoctrinePhpcr_Odm_DefaultDocumentManagerService()
    {
        $a = $this->get('annotation_reader');
        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2phpcr_default_40eeffe886896c73efe2a998e6517515');
        $c = new \Doctrine\ODM\PHPCR\Mapping\Driver\AnnotationDriver($a, array(0 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\doctrine\\phpcr-odm\\lib\\Doctrine\\ODM\\PHPCR\\Document', 1 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Document'));
        $d = new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\block-bundle\\Symfony\\Cmf\\Bundle\\BlockBundle\\Resources\\config\\doctrine-model' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Model', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\block-bundle\\Symfony\\Cmf\\Bundle\\BlockBundle\\Resources\\config\\doctrine-phpcr' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr'), '.phpcr.xml');
        $e = new \Doctrine\ODM\PHPCR\Mapping\Driver\XmlDriver($d);
        $f = new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\content-bundle\\Symfony\\Cmf\\Bundle\\ContentBundle\\Resources\\config\\doctrine-model' => 'Symfony\\Cmf\\Bundle\\ContentBundle\\Model', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\content-bundle\\Symfony\\Cmf\\Bundle\\ContentBundle\\Resources\\config\\doctrine-phpcr' => 'Symfony\\Cmf\\Bundle\\ContentBundle\\Doctrine\\Phpcr'), '.phpcr.xml');
        $g = new \Doctrine\ODM\PHPCR\Mapping\Driver\XmlDriver($f);
        $h = new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\routing-bundle\\Symfony\\Cmf\\Bundle\\RoutingBundle\\Resources\\config\\doctrine-model' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Model', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\routing-bundle\\Symfony\\Cmf\\Bundle\\RoutingBundle\\Resources\\config\\doctrine-phpcr' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Doctrine\\Phpcr'), '.phpcr.xml');
        $i = new \Doctrine\ODM\PHPCR\Mapping\Driver\XmlDriver($h);
        $j = new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\menu-bundle\\Symfony\\Cmf\\Bundle\\MenuBundle\\Resources\\config\\doctrine-model' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\Model', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\menu-bundle\\Symfony\\Cmf\\Bundle\\MenuBundle\\Resources\\config\\doctrine-phpcr' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\Doctrine\\Phpcr'), '.phpcr.xml');
        $k = new \Doctrine\ODM\PHPCR\Mapping\Driver\XmlDriver($j);
        $l = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $l->addDriver($c, 'Doctrine\\ODM\\PHPCR\\Document');
        $l->addDriver($c, 'FOS\\UserBundle\\Document');
        $l->addDriver($e, 'Symfony\\Cmf\\Bundle\\BlockBundle\\Model');
        $l->addDriver($e, 'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr');
        $l->addDriver($g, 'Symfony\\Cmf\\Bundle\\ContentBundle\\Model');
        $l->addDriver($g, 'Symfony\\Cmf\\Bundle\\ContentBundle\\Doctrine\\Phpcr');
        $l->addDriver(new \Doctrine\ODM\PHPCR\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\DefaultFileLocator(array(0 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\routing-bundle\\Symfony\\Cmf\\Bundle\\RoutingBundle\\Resources\\config\\doctrine-base'), '.phpcr.xml')), 'Symfony\\Component\\Routing');
        $l->addDriver($i, 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Model');
        $l->addDriver($i, 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Doctrine\\Phpcr');
        $l->addDriver($k, 'Symfony\\Cmf\\Bundle\\MenuBundle\\Model');
        $l->addDriver($k, 'Symfony\\Cmf\\Bundle\\MenuBundle\\Doctrine\\Phpcr');
        $m = new \Doctrine\ODM\PHPCR\Configuration();
        $m->setDocumentNamespaces(array('__PHPCRODM__' => 'Doctrine\\ODM\\PHPCR\\Document', 'FOSUserBundle' => 'FOS\\UserBundle\\Document'));
        $m->setMetadataCacheImpl($b);
        $m->setMetadataDriverImpl($l, false);
        $m->setProxyDir('C:/xampp/htdocs/bsylius/app/cache/prod/doctrine/PHPCRProxies');
        $m->setProxyNamespace('PHPCRProxies');
        $m->setAutoGenerateProxyClasses(false);
        $n = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $n->addEventSubscriber($this->get('cmf_core.persistence.phpcr.non_translatable_metadata_listener'));
        $n->addEventListener(array(0 => 'postLoad', 1 => 'postPersist'), $this->get('cmf_routing.phpcrodm_route_idprefix_listener'));
        return $this->services['doctrine_phpcr.odm.default_document_manager'] = new \Doctrine\ODM\PHPCR\DocumentManager($this->get('doctrine_phpcr.default_session'), $m, $n);
    }
    protected function getDoctrinePhpcr_Odm_Form_Type_PathService()
    {
        return $this->services['doctrine_phpcr.odm.form.type.path'] = new \Doctrine\Bundle\PHPCRBundle\Form\Type\PathType($this->get('doctrine_phpcr'));
    }
    protected function getDoctrinePhpcr_Odm_Validator_ValidPhpcrOdmService()
    {
        return $this->services['doctrine_phpcr.odm.validator.valid_phpcr_odm'] = new \Doctrine\Bundle\PHPCRBundle\Validator\Constraints\ValidPhpcrOdmValidator($this->get('doctrine_phpcr'));
    }
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);
        $instance->addListenerService('sylius.order.pre_create', array(0 => 'sylius.listener.order_number', 1 => 'generateOrderNumber'), 10);
        $instance->addListenerService('sylius.order.pre_create', array(0 => 'sylius.listener.complete_order', 1 => 'completeOrder'), 0);
        $instance->addListenerService('sylius.cart_change', array(0 => 'sylius.refresh_cart_listener', 1 => 'refreshCart'), 255);
        $instance->addListenerService('sylius.user.post_create', array(0 => 'sylius.listener.user_update', 1 => 'processUser'), 0);
        $instance->addListenerService('sylius.user.post_update', array(0 => 'sylius.listener.user_update', 1 => 'processUser'), 0);
        $instance->addListenerService('sylius.checkout.finalize.pre_complete', array(0 => 'sylius.listener.order_inventory', 1 => 'holdInventoryUnits'), 0);
        $instance->addListenerService('sylius.order.pre_release', array(0 => 'sylius.listener.order_inventory', 1 => 'releaseInventoryUnits'), 0);
        $instance->addListenerService('sylius.order.pre_pay', array(0 => 'sylius.listener.order_inventory', 1 => 'updateInventoryUnits'), 0);
        $instance->addListenerService('sylius.order_item.pre_create', array(0 => 'sylius.listener.order_inventory', 1 => 'processInventoryUnits'), 0);
        $instance->addListenerService('sylius.order_item.pre_update', array(0 => 'sylius.listener.order_inventory', 1 => 'processInventoryUnits'), 0);
        $instance->addListenerService('sylius.inventory_unit.pre_state_change', array(0 => 'sylius.listener.inventory_unit', 1 => 'updateState'), 0);
        $instance->addListenerService('sylius.checkout.finalize.pre_complete', array(0 => 'sylius.listener.order_state', 1 => 'resolveOrderStates'), 0);
        $instance->addListenerService('sylius.order.pre_pay', array(0 => 'sylius.listener.order_state', 1 => 'resolveOrderStates'), -100);
        $instance->addListenerService('sylius.order.pre_ship', array(0 => 'sylius.listener.order_state', 1 => 'resolveOrderStates'), -100);
        $instance->addListenerService('sylius.order.pre_cancel', array(0 => 'sylius.listener.order_state', 1 => 'resolveOrderStates'), -100);
        $instance->addListenerService('sylius.order.pre_return', array(0 => 'sylius.listener.order_state', 1 => 'resolveOrderStates'), -100);
        $instance->addListenerService('sylius.order.pre_release', array(0 => 'sylius.listener.order_state', 1 => 'resolveOrderStates'), -100);
        $instance->addListenerService('sylius.cart_change', array(0 => 'sylius.listener.order_taxation', 1 => 'applyTaxes'), 0);
        $instance->addListenerService('sylius.checkout.addressing.pre_complete', array(0 => 'sylius.listener.order_taxation', 1 => 'applyTaxes'), 0);
        $instance->addListenerService('sylius.checkout.shipping.initialize', array(0 => 'sylius.listener.order_shipping', 1 => 'processOrderShipments'), 0);
        $instance->addListenerService('sylius.checkout.shipping.pre_complete', array(0 => 'sylius.listener.order_shipping', 1 => 'processOrderShippingCharges'), 0);
        $instance->addListenerService('sylius.checkout.finalize.pre_complete', array(0 => 'sylius.listener.order_shipping', 1 => 'updateShipmentStatesOnhold'), 0);
        $instance->addListenerService('sylius.order.pre_pay', array(0 => 'sylius.listener.order_shipping', 1 => 'updateShipmentStatesReady'), 0);
        $instance->addListenerService('sylius.shipment.pre_ship', array(0 => 'sylius.listener.shipment', 1 => 'ship'), 0);
        $instance->addListenerService('sylius.order.pre_release', array(0 => 'sylius.listener.shipment', 1 => 'releaseOrderShipments'), 0);
        $instance->addListenerService('sylius.checkout.payment.initialize', array(0 => 'sylius.listener.order_payment', 1 => 'createOrderPayment'), 0);
        $instance->addListenerService('sylius.checkout.finalize.pre_complete', array(0 => 'sylius.listener.order_payment', 1 => 'updateOrderPayment'), 0);
        $instance->addListenerService('sylius.payment.pre_state_change', array(0 => 'sylius.listener.order_payment', 1 => 'updateOrderOnPayment'), 0);
        $instance->addListenerService('sylius.order.pre_release', array(0 => 'sylius.listener.order_payment', 1 => 'voidOrderPayment'), 0);
        $instance->addListenerService('sylius.cart_change', array(0 => 'sylius.listener.order_promotion', 1 => 'processOrderPromotion'), -50);
        $instance->addListenerService('sylius.checkout.addressing.pre_complete', array(0 => 'sylius.listener.order_promotion', 1 => 'processOrderPromotion'), 0);
        $instance->addListenerService('sylius.checkout.shipping.pre_complete', array(0 => 'sylius.listener.order_promotion', 1 => 'processOrderPromotion'), 0);
        $instance->addListenerService('sylius.promotion.coupon_invalid', array(0 => 'sylius.listener.order_promotion', 1 => 'handleCouponPromotion'), 0);
        $instance->addListenerService('sylius.promotion.coupon_eligible', array(0 => 'sylius.listener.order_promotion', 1 => 'handleCouponPromotion'), 0);
        $instance->addListenerService('sylius.promotion.coupon_not_eligible', array(0 => 'sylius.listener.order_promotion', 1 => 'handleCouponPromotion'), 0);
        $instance->addListenerService('sylius.cart.initialize', array(0 => 'sylius.listener.order_currency', 1 => 'processOrderCurrency'), 0);
        $instance->addListenerService('sylius.address.post_update', array(0 => 'sylius.listener.restricted_zone', 1 => 'handleRestrictedZone'), 0);
        $instance->addListenerService('sylius.checkout.addressing.complete', array(0 => 'sylius.listener.restricted_zone', 1 => 'handleRestrictedZone'), 0);
        $instance->addListenerService('sylius.order.pre_create', array(0 => 'sylius.listener.coupon_usage', 1 => 'handleCouponUsage'), 0);
        $instance->addListenerService('sylius.checkout.security.pre_complete', array(0 => 'sylius.listener.order_user', 1 => 'setOrderUser'), 0);
        $instance->addListenerService('sylius.cart.initialize', array(0 => 'sylius.listener.order_user', 1 => 'setOrderUser'), 0);
        $instance->addListenerService('sylius.checkout.purchase.complete', array(0 => 'sylius.listener.purchase', 1 => 'abandonCart'), 0);
        $instance->addListenerService('sylius.checkout.purchase.complete', array(0 => 'sylius.listener.purchase', 1 => 'addFlash'), 0);
        $instance->addListenerService('kernel.exception', array(0 => 'sylius.listener.insufficient_stock_exception', 1 => 'onKernelException'), 0);
        $instance->addListenerService('sylius.product.pre_create', array(0 => 'sylius.listener.image_upload', 1 => 'uploadProductImage'), 0);
        $instance->addListenerService('sylius.product.pre_update', array(0 => 'sylius.listener.image_upload', 1 => 'uploadProductImage'), 0);
        $instance->addListenerService('sylius.variant.pre_create', array(0 => 'sylius.listener.image_upload', 1 => 'uploadProductImage'), 0);
        $instance->addListenerService('sylius.variant.pre_update', array(0 => 'sylius.listener.image_upload', 1 => 'uploadProductImage'), 0);
        $instance->addListenerService('sylius.taxon.pre_create', array(0 => 'sylius.listener.image_upload', 1 => 'uploadTaxonImage'), 0);
        $instance->addListenerService('sylius.taxon.pre_update', array(0 => 'sylius.listener.image_upload', 1 => 'uploadTaxonImage'), 0);
        $instance->addListenerService('sylius.taxonomy.pre_create', array(0 => 'sylius.listener.image_upload', 1 => 'uploadTaxonomyImage'), 0);
        $instance->addListenerService('sylius.taxonomy.pre_update', array(0 => 'sylius.listener.image_upload', 1 => 'uploadTaxonomyImage'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'sylius.listener.locale', 1 => 'setRequestLocale'), 0);
        $instance->addListenerService('sylius.address.pre_delete', array(0 => 'sylius.listener.frontend.address', 1 => 'onAddressPreDelete'), 0);
        $instance->addListenerService('sylius.address.pre_create', array(0 => 'sylius.listener.frontend.address', 1 => 'onAddressPreCreate'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'sylius.twig.resource', 1 => 'fetchRequest'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'sonata.block.cache.handler.default', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.body_listener', 1 => 'onKernelRequest'), 64);
        $instance->addListenerService('kernel.exception', array(0 => 'payum.listener.interactive_request', 1 => 'onKernelException'), 128);
        $instance->addSubscriberService('sylius.cart_listener', 'Sylius\\Bundle\\CartBundle\\EventListener\\CartListener');
        $instance->addSubscriberService('sylius.cart_flash_listener', 'Sylius\\Bundle\\CartBundle\\EventListener\\FlashListener');
        $instance->addSubscriberService('sylius.event_subscriber.kernel_controller', 'Sylius\\Bundle\\ResourceBundle\\EventListener\\KernelControllerSubscriber');
        $instance->addSubscriberService('cmf_core.listener.request_aware', 'Symfony\\Cmf\\Bundle\\CoreBundle\\EventListener\\RequestAwareListener');
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('debug.emergency_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('fos_user.security.interactive_login_listener', 'FOS\\UserBundle\\EventListener\\LastLoginListener');
        $instance->addSubscriberService('fos_user.listener.authentication', 'FOS\\UserBundle\\EventListener\\AuthenticationListener');
        $instance->addSubscriberService('fos_user.listener.flash', 'FOS\\UserBundle\\EventListener\\FlashListener');
        $instance->addSubscriberService('fos_user.listener.resetting', 'FOS\\UserBundle\\EventListener\\ResettingListener');
        $instance->addSubscriberService('stof_doctrine_extensions.event_listener.logger', 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener');
        return $instance;
    }
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), 'C:/xampp/htdocs/bsylius/app/Resources');
    }
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider($this->get('session'), 'abc');
    }
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('sylius_configuration' => 'sylius.form.type.configuration', 'sylius_configuration_database' => 'sylius.form.type.configuration.database', 'sylius_configuration_mailer' => 'sylius.form.type.configuration.mailer', 'sylius_configuration_locale' => 'sylius.form.type.configuration.locale', 'sylius_configuration_hidden' => 'sylius.form.type.configuration.hidden', 'sylius_setup' => 'sylius.form.type.setup', 'sylius_order' => 'sylius.form.type.order', 'sylius_order_item' => 'sylius.form.type.order_item', 'sylius_adjustment' => 'sylius.form.type.adjustment', 'sylius_money' => 'sylius.form.type.money', 'sylius_exchange_rate' => 'sylius.form.type.exchange_rate', 'sylius_cart' => 'sylius.form.type.cart', 'sylius_cart_item' => 'sylius.form.type.cart_item', 'sylius_product' => 'sylius.form.type.product', 'sylius_property' => 'sylius.form.type.property', 'sylius_property_choice' => 'sylius.form.type.property_choice', 'sylius_product_property' => 'sylius.form.type.product_property', 'sylius_prototype' => 'sylius.form.type.prototype', 'sylius_option' => 'sylius.form.type.option', 'sylius_option_choice' => 'sylius.form.type.option_choice', 'sylius_option_value' => 'sylius.form.type.option_value', 'sylius_option_value_choice' => 'sylius.form.type.option_value_choice', 'sylius_option_value_collection' => 'sylius.form.type.option_value_collection', 'sylius_variant' => 'sylius.form.type.variant', 'sylius_variant_choice' => 'sylius.form.type.variant_choice', 'sylius_variant_match' => 'sylius.form.type.variant_match', 'sylius_tax_category' => 'sylius.form.type.tax_category', 'sylius_tax_rate' => 'sylius.form.type.tax_rate', 'sylius_tax_calculator_choice' => 'sylius.form.type.tax_calculator_choice', 'sylius_tax_category_choice' => 'sylius.form.type.tax_category_choice', 'sylius_shipping_rule_item_count_configuration' => 'sylius.form.type.shipping_rule_item_count_configuration', 'sylius_shipping_category' => 'sylius.form.type.shipping_category', 'sylius_shipping_method' => 'sylius.form.type.shipping_method', 'sylius_shipping_category_choice' => 'sylius.form.type.shipping_category_choice', 'sylius_shipment' => 'sylius.form.type.shipment', 'sylius_shipping_method_choice' => 'sylius.form.type.shipping_method_choice', 'sylius_shipping_calculator_choice' => 'sylius.form.type.shipping_calculator_choice', 'sylius_shipping_calculator_flat_rate_configuration' => 'sylius.form.type.shipping_calculator.flat_rate_configuration', 'sylius_shipping_calculator_per_item_rate_configuration' => 'sylius.form.type.shipping_calculator.per_item_rate_configuration', 'sylius_shipping_calculator_flexible_rate_configuration' => 'sylius.form.type.shipping_calculator.flexible_rate_configuration', 'sylius_shipping_calculator_weight_rate_configuration' => 'sylius.form.type.shipping_calculator.weight_rate_configuration', 'sylius_shipment_tracking' => 'sylius.form.type.shipment_tracking', 'sylius_payment_method' => 'sylius.form.type.payment_method', 'sylius_payment_method_choice' => 'sylius.form.type.payment_method_choice', 'sylius_payment' => 'sylius.form.type.payment', 'sylius_payment_gateway_choice' => 'sylius.form.type.payment_gateway_choice', 'sylius_credit_card' => 'sylius.form.type.credit_card', 'sylius_promotion' => 'sylius.form.type.promotion', 'sylius_promotion_coupon' => 'sylius.form.type.promotion_coupon', 'sylius_promotion_rule' => 'sylius.form.type.promotion_rule', 'sylius_promotion_action' => 'sylius.form.type.promotion_action', 'sylius_promotion_rule_choice' => 'sylius.form.type.promotion_rule_choice', 'sylius_promotion_rule_item_total_configuration' => 'sylius.form.type.promotion_rule.item_total_configuration', 'sylius_promotion_rule_item_count_configuration' => 'sylius.form.type.promotion_rule.item_count_configuration', 'sylius_promotion_action_choice' => 'sylius.form.type.promotion_action_choice', 'sylius_promotion_action_fixed_discount_configuration' => 'sylius.form.type.promotion_action.fixed_discount_configuration', 'sylius_promotion_action_percentage_discount_configuration' => 'sylius.form.type.promotion_action.percentage_discount_configuration', 'sylius_promotion_coupon_to_code' => 'sylius.form.type.promotion_coupon_to_code', 'sylius_promotion_coupon_generate_instruction' => 'sylius.form.type.promotion_coupon_generate_instruction', 'sylius_zone_member_collection' => 'sylius.form.type.zone_member_collection', 'sylius_address' => 'sylius.form.type.address', 'sylius_country' => 'sylius.form.type.country', 'sylius_province' => 'sylius.form.type.province', 'sylius_zone' => 'sylius.form.type.zone', 'sylius_zone_member_country' => 'sylius.form.type.zone_member_country', 'sylius_zone_member_province' => 'sylius.form.type.zone_member_province', 'sylius_zone_member_zone' => 'sylius.form.type.zone_member_zone', 'sylius_country_choice' => 'sylius.form.type.country_choice', 'sylius_province_choice' => 'sylius.form.type.province_choice', 'sylius_zone_choice' => 'sylius.form.type.zone_choice', 'sylius_taxonomy' => 'sylius.form.type.taxonomy', 'sylius_taxonomy_choice' => 'sylius.form.type.taxonomy_choice', 'sylius_taxon' => 'sylius.form.type.taxon', 'sylius_taxon_choice' => 'sylius.form.type.taxon_choice', 'sylius_taxon_selection' => 'sylius.form.type.taxon_selection', 'sylius_user' => 'sylius.form.type.user', 'sylius_group' => 'sylius.form.type.group', 'sylius_locale' => 'sylius.form.type.locale', 'sylius_block' => 'sylius.form.type.block', 'sylius_page' => 'sylius.form.type.page', 'sylius_checkout_addressing' => 'sylius.checkout_form.addressing', 'sylius_checkout_shipping' => 'sylius.checkout_form.shipping', 'sylius_checkout_shipment' => 'sylius.checkout_form.shipment', 'sylius_checkout_payment' => 'sylius.checkout_form.payment', 'sylius_image' => 'sylius.form.type.image', 'list' => 'sylius.form.type.list', 'sylius_user_filter' => 'sylius.form.type.user_filter', 'sylius_product_filter' => 'sylius.form.type.product_filter', 'sylius_order_filter' => 'sylius.form.type.order_filter', 'sylius_shipment_filter' => 'sylius.form.type.shipment_filter', 'sylius_promotion_rule_nth_order_configuration' => 'sylius.form.type.promotion_rule.nth_order_configuration', 'sylius_promotion_rule_user_loyality_configuration' => 'sylius.form.type.promotion_rule.user_loyality_configuration', 'sylius_promotion_rule_shipping_country_configuration' => 'sylius.form.type.promotion_rule.shipping_country_configuration', 'sylius_promotion_rule_taxonomy_configuration' => 'sylius.form.type.promotion_rule.taxonomy_configuration', 'sylius_promotion_action_shipping_discount_configuration' => 'sylius.form.type.promotion_action.shipping_discount_configuration', 'sylius_promotion_action_add_product_configuration' => 'sylius.form.type.promotion_action.add_product_configuration', 'sylius_group_choice' => 'sylius.form.type.group_choice', 'sylius_user_profile' => 'sylius.form.frontend.profile.type', 'sylius_user_registration' => 'sylius.user.registration.form.type', 'sonata_block_service_choice' => 'sonata.block.form.type.block', 'cmf_core_checkbox_url_label' => 'cmf_core.form.type.checkbox_url_label', 'cmf_routing_route_type' => 'cmf_routing.route_type_form_type', 'entity' => 'form.type.entity', 'phpcr_reference' => 'form.type.phpcr.reference', 'phpcr_odm_reference_collection' => 'form.type.phpcr_odm.reference_collection', 'phpcr_document' => 'form.type.phpcr.document', 'phpcr_odm_path' => 'doctrine_phpcr.odm.form.type.path', 'form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'liip_imagine_image' => 'liip_imagine.form.type.image', 'fos_user_username' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'fos_user_registration' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type', 'fos_user_group' => 'fos_user.group.form.type', 'sylius_entity_to_identifier' => 'sylius_entity_to_identifier', 'sylius_phpcr_document_to_identifier' => 'sylius_phpcr_document_to_identifier'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.doctrine', 1 => 'form.type_guesser.doctrine_phpcr', 2 => 'form.type_guesser.validator'))), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }
    protected function getForm_Type_Phpcr_DocumentService()
    {
        return $this->services['form.type.phpcr.document'] = new \Doctrine\Bundle\PHPCRBundle\Form\Type\DocumentType($this->get('doctrine_phpcr'));
    }
    protected function getForm_Type_Phpcr_ReferenceService()
    {
        return $this->services['form.type.phpcr.reference'] = new \Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRReferenceType($this->get('doctrine_phpcr.default_session'));
    }
    protected function getForm_Type_PhpcrOdm_ReferenceCollectionService()
    {
        return $this->services['form.type.phpcr_odm.reference_collection'] = new \Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRODMReferenceCollectionType($this->get('doctrine_phpcr.odm.default_document_manager'));
    }
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('form.csrf_provider'), true, '_token', $this->get('translator.default'), 'validators');
    }
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension();
    }
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }
    protected function getForm_TypeGuesser_DoctrinePhpcrService()
    {
        return $this->services['form.type_guesser.doctrine_phpcr'] = new \Doctrine\Bundle\PHPCRBundle\Form\PHPCRTypeGuesser($this->get('doctrine_phpcr'));
    }
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator.mapping.class_metadata_factory'));
    }
    protected function getFosRest_BodyListenerService()
    {
        return $this->services['fos_rest.body_listener'] = new \FOS\RestBundle\EventListener\BodyListener($this->get('fos_rest.decoder_provider'), false);
    }
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }
    protected function getFosRest_Decoder_JsontoformService()
    {
        return $this->services['fos_rest.decoder.jsontoform'] = new \FOS\RestBundle\Decoder\JsonToFormDecoder();
    }
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }
    protected function getFosRest_DecoderProviderService()
    {
        $this->services['fos_rest.decoder_provider'] = $instance = new \FOS\RestBundle\Decoder\ContainerDecoderProvider(array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getFosRest_FormatNegotiatorService()
    {
        return $this->services['fos_rest.format_negotiator'] = new \FOS\RestBundle\Util\FormatNegotiator();
    }
    protected function getFosRest_Inflector_DoctrineService()
    {
        return $this->services['fos_rest.inflector.doctrine'] = new \FOS\RestBundle\Util\Inflector\DoctrineInflector();
    }
    protected function getFosRest_Normalizer_CamelKeysService()
    {
        return $this->services['fos_rest.normalizer.camel_keys'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizer();
    }
    protected function getFosRest_Request_ParamFetcherService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_rest.request.param_fetcher', 'request');
        }
        return $this->services['fos_rest.request.param_fetcher'] = $this->scopedServices['request']['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this->get('fos_rest.request.param_fetcher.reader'), $this->get('request'), $this->get('fos_rest.violation_formatter'), $this->get('validator', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader($this->get('annotation_reader'));
    }
    protected function getFosRest_Routing_Loader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.controller'] = new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $this->get('file_locator'), $this->get('controller_name_converter'), $this->get('fos_rest.routing.loader.reader.controller'), NULL);
    }
    protected function getFosRest_Routing_Loader_ProcessorService()
    {
        return $this->services['fos_rest.routing.loader.processor'] = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();
    }
    protected function getFosRest_Routing_Loader_Reader_ActionService()
    {
        return $this->services['fos_rest.routing.loader.reader.action'] = new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($this->get('annotation_reader'), $this->get('fos_rest.request.param_fetcher.reader'), $this->get('fos_rest.inflector.doctrine'), true, array('json' => false, 'xml' => false, 'html' => true));
    }
    protected function getFosRest_Routing_Loader_Reader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.reader.controller'] = new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader($this->get('fos_rest.routing.loader.reader.action'), $this->get('annotation_reader'));
    }
    protected function getFosRest_Routing_Loader_XmlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.xml_collection'] = new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'), true, array('json' => false, 'xml' => false, 'html' => true), NULL);
    }
    protected function getFosRest_Routing_Loader_YamlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.yaml_collection'] = new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'), true, array('json' => false, 'xml' => false, 'html' => true), NULL);
    }
    protected function getFosRest_View_ExceptionWrapperHandlerService()
    {
        return $this->services['fos_rest.view.exception_wrapper_handler'] = new \FOS\RestBundle\View\ExceptionWrapperHandler();
    }
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \FOS\RestBundle\View\ViewHandler(array('json' => false, 'xml' => false, 'html' => true), 400, 204, false, array('html' => 302), 'twig');
        $instance->setExclusionStrategyGroups('');
        $instance->setExclusionStrategyVersion('');
        $instance->setSerializeNullStrategy(false);
        $instance->setContainer($this);
        return $instance;
    }
    protected function getFosRest_ViolationFormatterService()
    {
        return $this->services['fos_rest.violation_formatter'] = new \FOS\RestBundle\Util\ViolationFormatter();
    }
    protected function getFosUser_ChangePassword_Form_FactoryService()
    {
        return $this->services['fos_user.change_password.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_change_password_form', 'fos_user_change_password', array(0 => 'ChangePassword', 1 => 'Default'));
    }
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }
    protected function getFosUser_Group_Form_FactoryService()
    {
        return $this->services['fos_user.group.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_group_form', 'fos_user_group', array(0 => 'Registration', 1 => 'Default'));
    }
    protected function getFosUser_Group_Form_TypeService()
    {
        return $this->services['fos_user.group.form.type'] = new \FOS\UserBundle\Form\Type\GroupFormType('Sylius\\Bundle\\CoreBundle\\Model\\Group');
    }
    protected function getFosUser_GroupManagerService()
    {
        return $this->services['fos_user.group_manager'] = new \FOS\UserBundle\Doctrine\GroupManager($this->get('fos_user.entity_manager'), 'Sylius\\Bundle\\CoreBundle\\Model\\Group');
    }
    protected function getFosUser_Listener_AuthenticationService()
    {
        return $this->services['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener($this->get('fos_user.security.login_manager'), 'main');
    }
    protected function getFosUser_Listener_FlashService()
    {
        return $this->services['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener($this->get('session'), $this->get('translator.default'));
    }
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->services['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener($this->get('cmf_routing.router'), 86400);
    }
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('cmf_routing.router'), $this->get('templating'), array('confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig', 'resetting.template' => 'FOSUserBundle:Resetting:email.txt.twig', 'from_email' => array('confirmation' => array('webmaster@example.com' => 'webmaster'), 'resetting' => array('webmaster@example.com' => 'webmaster'))));
    }
    protected function getFosUser_Profile_Form_FactoryService()
    {
        return $this->services['fos_user.profile.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_profile_form', 'sylius_user_profile', array(0 => 'Profile', 1 => 'Default'));
    }
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }
    protected function getFosUser_Registration_Form_FactoryService()
    {
        return $this->services['fos_user.registration.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_registration_form', 'sylius_user_registration', array(0 => 'Registration', 1 => 'Default'));
    }
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }
    protected function getFosUser_Resetting_Form_FactoryService()
    {
        return $this->services['fos_user.resetting.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_resetting_form', 'fos_user_resetting', array(0 => 'ResetPassword', 1 => 'Default'));
    }
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener($this->get('fos_user.user_manager'));
    }
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.context'), $this->get('hwi_oauth.user_checker'), $this->get('security.authentication.session_strategy'), $this);
    }
    protected function getFosUser_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');
        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('fos_user.entity_manager'), 'Sylius\\Bundle\\CoreBundle\\Model\\User');
    }
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'));
    }
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\Fragment\FragmentHandler(array(), false);
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->addRenderer($this->get('cmf_block.fragment.renderer.action'));
        $instance->addRenderer($this->get('fragment.renderer.inline'));
        $instance->addRenderer($this->get('fragment.renderer.hinclude'));
        return $instance;
    }
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer($this, $this->get('uri_signer'), NULL);
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getGaufrette_SyliusImageFilesystemService()
    {
        return $this->services['gaufrette.sylius_image_filesystem'] = new \Gaufrette\Filesystem(new \Gaufrette\Adapter\Local('C:/xampp/htdocs/bsylius/app/../web/media/image', true));
    }
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('event_dispatcher'), $this, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }
    protected function getHwiOauth_ResourceOwner_AmazonService()
    {
        return $this->services['hwi_oauth.resource_owner.amazon'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\AmazonResourceOwner($this->get('hwi_oauth.http_client'), $this->get('security.http_utils'), array('client_id' => '<amazon_client_id>', 'client_secret' => '<amazon_client_secret>', 'paths' => array(), 'options' => array()), 'amazon', $this->get('hwi_oauth.storage.session'));
    }
    protected function getHwiOauth_ResourceOwner_FacebookService()
    {
        return $this->services['hwi_oauth.resource_owner.facebook'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\FacebookResourceOwner($this->get('hwi_oauth.http_client'), $this->get('security.http_utils'), array('client_id' => '<facebook_client_id>', 'client_secret' => '<facebook_client_secret>', 'paths' => array(), 'options' => array()), 'facebook', $this->get('hwi_oauth.storage.session'));
    }
    protected function getHwiOauth_ResourceOwner_GoogleService()
    {
        return $this->services['hwi_oauth.resource_owner.google'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\GoogleResourceOwner($this->get('hwi_oauth.http_client'), $this->get('security.http_utils'), array('client_id' => '<google_client_id>', 'client_secret' => '<google_client_secret>', 'scope' => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile', 'paths' => array(), 'options' => array()), 'google', $this->get('hwi_oauth.storage.session'));
    }
    protected function getHwiOauth_ResourceOwnermap_MainService()
    {
        $this->services['hwi_oauth.resource_ownermap.main'] = $instance = new \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap($this->get('security.http_utils'), array(0 => 'amazon', 1 => 'facebook', 2 => 'google'), array('amazon' => '/login/check-amazon', 'facebook' => '/login/check-facebook', 'google' => '/login/check-google'));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getHwiOauth_Security_OauthUtilsService()
    {
        $this->services['hwi_oauth.security.oauth_utils'] = $instance = new \HWI\Bundle\OAuthBundle\Security\OAuthUtils($this->get('security.http_utils'), $this->get('security.context'), false);
        $instance->setResourceOwnerMap($this->get('hwi_oauth.resource_ownermap.main'));
        return $instance;
    }
    protected function getHwiOauth_Templating_Helper_OauthService()
    {
        $this->services['hwi_oauth.templating.helper.oauth'] = $instance = new \HWI\Bundle\OAuthBundle\Templating\Helper\OAuthHelper($this->get('hwi_oauth.security.oauth_utils'));
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        return $instance;
    }
    protected function getHwiOauth_UserCheckerService()
    {
        return $this->services['hwi_oauth.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }
    protected function getJmsSerializerService()
    {
        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', false);
        $a->setCache(new \Metadata\Cache\FileCache('C:/xampp/htdocs/bsylius/app/cache/prod/jms_serializer'));
        $b = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $b->setListeners(array('serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL))));
        return $this->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, $this->get('jms_serializer.handler_registry'), $this->get('jms_serializer.unserialize_object_constructor'), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_serialization_visitor'), 'xml' => $this->get('jms_serializer.xml_serialization_visitor'), 'yml' => $this->get('jms_serializer.yaml_serialization_visitor'))), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_deserialization_visitor'), 'xml' => $this->get('jms_serializer.xml_deserialization_visitor'))), $b);
    }
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler();
    }
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sO', 'Europe/Berlin');
    }
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber();
    }
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler($this->get('translator.default'));
    }
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(2 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'))), 1 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml')))));
    }
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));
    }
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor($this->get('jms_serializer.naming_strategy'));
        $instance->setOptions(0);
        return $instance;
    }
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array('Sylius\\Bundle\\InstallerBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/config/serializer', 'Sylius\\Bundle\\OrderBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\order-bundle\\Sylius\\Bundle\\OrderBundle/Resources/config/serializer', 'Sylius\\Bundle\\MoneyBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/config/serializer', 'Sylius\\Bundle\\SettingsBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/config/serializer', 'Sylius\\Bundle\\CartBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/config/serializer', 'Sylius\\Bundle\\ProductBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/config/serializer', 'Sylius\\Bundle\\VariableProductBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/config/serializer', 'Sylius\\Bundle\\TaxationBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/config/serializer', 'Sylius\\Bundle\\ShippingBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/config/serializer', 'Sylius\\Bundle\\PaymentsBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/config/serializer', 'Sylius\\Bundle\\PayumBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payum-bundle\\Sylius\\Bundle\\PayumBundle/Resources/config/serializer', 'Sylius\\Bundle\\PromotionsBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/config/serializer', 'Sylius\\Bundle\\AddressingBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/config/serializer', 'Sylius\\Bundle\\InventoryBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/config/serializer', 'Sylius\\Bundle\\TaxonomiesBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/config/serializer', 'Sylius\\Bundle\\FlowBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/config/serializer', 'Sylius\\Bundle\\CoreBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/config/serializer', 'Sylius\\Bundle\\WebBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/config/serializer', 'Sylius\\Bundle\\ResourceBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/config/serializer', 'Sonata\\BlockBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sonata-project\\block-bundle\\Sonata\\BlockBundle/Resources/config/serializer', 'Symfony\\Cmf\\Bundle\\CoreBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\core-bundle\\Symfony\\Cmf\\Bundle\\CoreBundle/Resources/config/serializer', 'Symfony\\Cmf\\Bundle\\BlockBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\block-bundle\\Symfony\\Cmf\\Bundle\\BlockBundle/Resources/config/serializer', 'Symfony\\Cmf\\Bundle\\ContentBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\content-bundle\\Symfony\\Cmf\\Bundle\\ContentBundle/Resources/config/serializer', 'Symfony\\Cmf\\Bundle\\RoutingBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\routing-bundle\\Symfony\\Cmf\\Bundle\\RoutingBundle/Resources/config/serializer', 'Symfony\\Cmf\\Bundle\\MenuBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\menu-bundle\\Symfony\\Cmf\\Bundle\\MenuBundle/Resources/config/serializer', 'Doctrine\\Bundle\\DoctrineBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\doctrine\\doctrine-bundle\\Doctrine\\Bundle\\DoctrineBundle/Resources/config/serializer', 'Doctrine\\Bundle\\PHPCRBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\doctrine\\phpcr-bundle\\Doctrine\\Bundle\\PHPCRBundle/Resources/config/serializer', 'Symfony\\Bundle\\AsseticBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\assetic-bundle\\Symfony\\Bundle\\AsseticBundle/Resources/config/serializer', 'Symfony\\Bundle\\FrameworkBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/config/serializer', 'Symfony\\Bundle\\MonologBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\monolog-bundle\\Symfony\\Bundle\\MonologBundle/Resources/config/serializer', 'Symfony\\Bundle\\SecurityBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/config/serializer', 'Symfony\\Bundle\\SwiftmailerBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\swiftmailer-bundle\\Symfony\\Bundle\\SwiftmailerBundle/Resources/config/serializer', 'Symfony\\Bundle\\TwigBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/config/serializer', 'Doctrine\\Bundle\\DoctrineCacheBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\doctrine\\doctrine-cache-bundle\\Doctrine\\Bundle\\DoctrineCacheBundle/Resources/config/serializer', 'Liip\\ImagineBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\liip\\imagine-bundle\\Liip\\ImagineBundle/Resources/config/serializer', 'Knp\\Bundle\\MenuBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\knplabs\\knp-menu-bundle\\Knp\\Bundle\\MenuBundle/Resources/config/serializer', 'Knp\\Bundle\\GaufretteBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\knplabs\\knp-gaufrette-bundle\\Knp\\Bundle\\GaufretteBundle/Resources/config/serializer', 'JMS\\SerializerBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\jms\\serializer-bundle\\JMS\\SerializerBundle/Resources/config/serializer', 'HWI\\Bundle\\OAuthBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\hwi\\oauth-bundle\\HWI\\Bundle\\OAuthBundle/Resources/config/serializer', 'FOS\\RestBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\rest-bundle\\FOS\\RestBundle/Resources/config/serializer', 'FOS\\UserBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/config/serializer', 'WhiteOctober\\PagerfantaBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/config/serializer', 'Stof\\DoctrineExtensionsBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\stof\\doctrine-extensions-bundle\\Stof\\DoctrineExtensionsBundle/Resources/config/serializer', 'JMS\\TranslationBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\jms\\translation-bundle\\JMS\\TranslationBundle/Resources/config/serializer', 'Knp\\Bundle\\SnappyBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\knplabs\\knp-snappy-bundle\\Knp\\Bundle\\SnappyBundle/Resources/config/serializer', 'Payum\\Bundle\\PayumBundle' => 'C:\\xampp\\htdocs\\bsylius\\vendor\\payum\\payum-bundle\\Payum\\Bundle\\PayumBundle/Resources/config/serializer'));
        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')))), $this->get('doctrine'));
    }
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
    }
    protected function getJmsSerializer_PhpCollectionHandlerService()
    {
        return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
    }
    protected function getJmsSerializer_Templating_Helper_SerializerService()
    {
        return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper($this->get('jms_serializer'));
    }
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));
        $instance->setDoctypeWhitelist(array());
        return $instance;
    }
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        return $this->services['jms_serializer.xml_serialization_visitor'] = new \JMS\Serializer\XmlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }
    protected function getJmsTranslation_ConfigFactoryService()
    {
        return $this->services['jms_translation.config_factory'] = new \JMS\TranslationBundle\Translation\ConfigFactory(array());
    }
    protected function getJmsTranslation_LoaderManagerService()
    {
        return $this->services['jms_translation.loader_manager'] = new \JMS\TranslationBundle\Translation\LoaderManager(array('php' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.php')), 'yml' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.yml')), 'xlf' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.xliff')), 'po' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.po')), 'mo' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.mo')), 'ts' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.qt')), 'csv' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.csv')), 'res' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.res')), 'dat' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.dat')), 'ini' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.ini')), 'xliff' => new \JMS\TranslationBundle\Translation\Loader\XliffLoader()));
    }
    protected function getJmsTranslation_TwigExtensionService()
    {
        return $this->services['jms_translation.twig_extension'] = new \JMS\TranslationBundle\Twig\TranslationExtension($this->get('translator.default'), false);
    }
    protected function getJmsTranslation_UpdaterService()
    {
        $a = $this->get('logger');
        $b = $this->get('twig');
        $c = new \Doctrine\Common\Annotations\DocParser();
        $c->setImports(array('desc' => 'JMS\\TranslationBundle\\Annotation\\Desc', 'meaning' => 'JMS\\TranslationBundle\\Annotation\\Meaning', 'ignore' => 'JMS\\TranslationBundle\\Annotation\\Ignore'));
        $c->setIgnoreNotImportedAnnotations(true);
        $d = new \JMS\TranslationBundle\Translation\Dumper\XliffDumper();
        $d->setSourceLanguage('en');
        $e = new \JMS\TranslationBundle\Translation\Dumper\XliffDumper();
        $e->setSourceLanguage('en');
        return $this->services['jms_translation.updater'] = new \JMS\TranslationBundle\Translation\Updater($this->get('jms_translation.loader_manager'), new \JMS\TranslationBundle\Translation\ExtractorManager(new \JMS\TranslationBundle\Translation\Extractor\FileExtractor($b, $a, array(0 => new \JMS\TranslationBundle\Translation\Extractor\File\DefaultPhpFileExtractor($c), 1 => new \JMS\TranslationBundle\Translation\Extractor\File\FormExtractor($c), 2 => new \JMS\TranslationBundle\Translation\Extractor\File\TranslationContainerExtractor(), 3 => new \JMS\TranslationBundle\Translation\Extractor\File\TwigFileExtractor($b), 4 => new \JMS\TranslationBundle\Translation\Extractor\File\ValidationExtractor($this->get('validator.mapping.class_metadata_factory')), 5 => new \JMS\TranslationBundle\Translation\Extractor\File\AuthenticationMessagesExtractor($c))), $a, array()), $a, new \JMS\TranslationBundle\Translation\FileWriter(array('php' => new \JMS\TranslationBundle\Translation\Dumper\PhpDumper(), 'xlf' => $d, 'po' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.po'), 'po'), 'mo' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.mo'), 'mo'), 'yml' => new \JMS\TranslationBundle\Translation\Dumper\YamlDumper(), 'ts' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.qt'), 'ts'), 'csv' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.csv'), 'csv'), 'ini' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.ini'), 'ini'), 'res' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.res'), 'res'), 'xliff' => $e)));
    }
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }
    protected function getKnpGaufrette_FilesystemMapService()
    {
        return $this->services['knp_gaufrette.filesystem_map'] = new \Knp\Bundle\GaufretteBundle\FilesystemMap(array('sylius_image' => $this->get('gaufrette.sylius_image_filesystem')));
    }
    protected function getKnpMenu_FactoryService()
    {
        return $this->services['knp_menu.factory'] = new \Knp\Menu\Silex\RouterAwareFactory($this->get('cmf_routing.router'));
    }
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array('sylius.frontend.main' => 'sylius.menu.frontend.main', 'sylius.frontend.currency' => 'sylius.menu.frontend.currency', 'sylius.frontend.taxonomies' => 'sylius.menu.frontend.taxonomies', 'sylius.frontend.account' => 'sylius.menu.frontend.account', 'sylius.frontend.social' => 'sylius.menu.frontend.social', 'sylius.backend.main' => 'sylius.menu.backend.main', 'sylius.backend.sidebar' => 'sylius.menu.backend.sidebar')), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(array(), 'UTF-8');
    }
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig', array());
    }
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }
    protected function getKnpSnappy_ImageService()
    {
        return $this->services['knp_snappy.image'] = new \Knp\Bundle\SnappyBundle\Snappy\LoggableGenerator(new \Knp\Snappy\Image('/usr/bin/wkhtmltoimage', array(), array()), $this->get('monolog.logger.snappy', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getKnpSnappy_PdfService()
    {
        return $this->services['knp_snappy.pdf'] = new \Knp\Bundle\SnappyBundle\Snappy\LoggableGenerator(new \Knp\Snappy\Pdf('/usr/bin/wkhtmltopdf', array(), array()), $this->get('monolog.logger.snappy', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getLiipImagineService()
    {
        return $this->services['liip_imagine'] = new \Imagine\Gd\Imagine();
    }
    protected function getLiipImagine_Cache_ClearerService()
    {
        return $this->services['liip_imagine.cache.clearer'] = new \Liip\ImagineBundle\Imagine\Cache\CacheClearer($this->get('liip_imagine.cache.manager'), '/media/cache');
    }
    protected function getLiipImagine_Cache_ManagerService()
    {
        $this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager($this->get('liip_imagine.filter.configuration'), $this->get('cmf_routing.router'), 'C:/xampp/htdocs/bsylius/app/../web', 'web_path');
        $instance->addResolver('web_path', $this->get('liip_imagine.cache.resolver.web_path'));
        $instance->addResolver('no_cache', $this->get('liip_imagine.cache.resolver.no_cache'));
        return $instance;
    }
    protected function getLiipImagine_Cache_Resolver_NoCacheService()
    {
        return $this->services['liip_imagine.cache.resolver.no_cache'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheResolver($this->get('filesystem'));
    }
    protected function getLiipImagine_Cache_Resolver_WebPathService()
    {
        $this->services['liip_imagine.cache.resolver.web_path'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver($this->get('filesystem'));
        $instance->setBasePath('');
        $instance->setFolderPermissions(511);
        return $instance;
    }
    protected function getLiipImagine_ControllerService()
    {
        return $this->services['liip_imagine.controller'] = new \Liip\ImagineBundle\Controller\ImagineController($this->get('liip_imagine.data.manager'), $this->get('liip_imagine.filter.manager'), $this->get('liip_imagine.cache.manager'));
    }
    protected function getLiipImagine_Data_Loader_FilesystemService()
    {
        return $this->services['liip_imagine.data.loader.filesystem'] = new \Liip\ImagineBundle\Imagine\Data\Loader\FileSystemLoader($this->get('liip_imagine'), array(), 'C:/xampp/htdocs/bsylius/app/../web/media/image');
    }
    protected function getLiipImagine_Data_ManagerService()
    {
        $this->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager($this->get('liip_imagine.filter.configuration'), 'filesystem');
        $instance->addLoader('filesystem', $this->get('liip_imagine.data.loader.filesystem'));
        return $instance;
    }
    protected function getLiipImagine_Filter_ConfigurationService()
    {
        return $this->services['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration(array('sylius_small' => array('filters' => array('thumbnail' => array('size' => array(0 => 120, 1 => 90), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_medium' => array('filters' => array('thumbnail' => array('size' => array(0 => 240, 1 => 180), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_large' => array('filters' => array('thumbnail' => array('size' => array(0 => 640, 1 => 480), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array())));
    }
    protected function getLiipImagine_Filter_Loader_AutoRotateService()
    {
        return $this->services['liip_imagine.filter.loader.auto_rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader();
    }
    protected function getLiipImagine_Filter_Loader_BackgroundService()
    {
        return $this->services['liip_imagine.filter.loader.background'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader($this->get('liip_imagine'));
    }
    protected function getLiipImagine_Filter_Loader_CropService()
    {
        return $this->services['liip_imagine.filter.loader.crop'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader();
    }
    protected function getLiipImagine_Filter_Loader_PasteService()
    {
        return $this->services['liip_imagine.filter.loader.paste'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($this->get('liip_imagine'), 'C:/xampp/htdocs/bsylius/app');
    }
    protected function getLiipImagine_Filter_Loader_RelativeResizeService()
    {
        return $this->services['liip_imagine.filter.loader.relative_resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader();
    }
    protected function getLiipImagine_Filter_Loader_ResizeService()
    {
        return $this->services['liip_imagine.filter.loader.resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader();
    }
    protected function getLiipImagine_Filter_Loader_StripService()
    {
        return $this->services['liip_imagine.filter.loader.strip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader();
    }
    protected function getLiipImagine_Filter_Loader_ThumbnailService()
    {
        return $this->services['liip_imagine.filter.loader.thumbnail'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader();
    }
    protected function getLiipImagine_Filter_Loader_UpscaleService()
    {
        return $this->services['liip_imagine.filter.loader.upscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader();
    }
    protected function getLiipImagine_Filter_Loader_WatermarkService()
    {
        return $this->services['liip_imagine.filter.loader.watermark'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader($this->get('liip_imagine'), 'C:/xampp/htdocs/bsylius/app');
    }
    protected function getLiipImagine_Filter_ManagerService()
    {
        $this->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager($this->get('liip_imagine.filter.configuration'));
        $instance->addLoader('relative_resize', $this->get('liip_imagine.filter.loader.relative_resize'));
        $instance->addLoader('resize', $this->get('liip_imagine.filter.loader.resize'));
        $instance->addLoader('thumbnail', $this->get('liip_imagine.filter.loader.thumbnail'));
        $instance->addLoader('crop', $this->get('liip_imagine.filter.loader.crop'));
        $instance->addLoader('paste', $this->get('liip_imagine.filter.loader.paste'));
        $instance->addLoader('watermark', $this->get('liip_imagine.filter.loader.watermark'));
        $instance->addLoader('background', $this->get('liip_imagine.filter.loader.background'));
        $instance->addLoader('strip', $this->get('liip_imagine.filter.loader.strip'));
        $instance->addLoader('upscale', $this->get('liip_imagine.filter.loader.upscale'));
        $instance->addLoader('auto_rotate', $this->get('liip_imagine.filter.loader.auto_rotate'));
        return $instance;
    }
    protected function getLiipImagine_Form_Type_ImageService()
    {
        return $this->services['liip_imagine.form.type.image'] = new \Liip\ImagineBundle\Form\Type\ImageType();
    }
    protected function getLiipImagine_Routing_LoaderService()
    {
        return $this->services['liip_imagine.routing.loader'] = new \Liip\ImagineBundle\Routing\ImagineLoader('liip_imagine.controller:filterAction', '/media/cache', array('sylius_small' => array('filters' => array('thumbnail' => array('size' => array(0 => 120, 1 => 90), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_medium' => array('filters' => array('thumbnail' => array('size' => array(0 => 240, 1 => 180), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_large' => array('filters' => array('thumbnail' => array('size' => array(0 => 640, 1 => 480), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array())));
    }
    protected function getLiipImagine_Templating_HelperService()
    {
        return $this->services['liip_imagine.templating.helper'] = new \Liip\ImagineBundle\Templating\Helper\ImagineHelper($this->get('liip_imagine.cache.manager'));
    }
    protected function getLocaleListenerService()
    {
        $this->services['locale_listener'] = $instance = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('en', $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        return $instance;
    }
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true);
    }
    protected function getMonolog_Handler_NestedService()
    {
        return $this->services['monolog.handler.nested'] = new \Monolog\Handler\StreamHandler('C:/xampp/htdocs/bsylius/app/logs/prod.log', 100, true);
    }
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_EmergencyService()
    {
        $this->services['monolog.logger.emergency'] = $instance = new \Symfony\Bridge\Monolog\Logger('emergency');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_SnappyService()
    {
        $this->services['monolog.logger.snappy'] = $instance = new \Symfony\Bridge\Monolog\Logger('snappy');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getPagerfanta_ConvertNotValidCurrentPageToNotFoundListenerService()
    {
        return $this->services['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener();
    }
    protected function getPagerfanta_ConvertNotValidMaxPerPageToNotFoundListenerService()
    {
        return $this->services['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener();
    }
    protected function getPayumService()
    {
        $this->services['payum'] = $instance = new \Payum\Bundle\PayumBundle\Registry\ContainerAwareRegistry(array('paypal_express_checkout' => 'payum.context.paypal_express_checkout.payment', 'stripe' => 'payum.context.stripe.payment', 'be2bill' => 'payum.context.be2bill.payment', 'be2bill_onsite' => 'payum.context.be2bill_onsite.payment', 'dummy' => 'payum.context.dummy.payment'), array('paypal_express_checkout' => array('Sylius\\Bundle\\CoreBundle\\Model\\Order' => 'payum.context.paypal_express_checkout.storage.syliusbundlecorebundlemodelorder', 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment' => 'payum.context.paypal_express_checkout.storage.syliusbundlepaymentsbundlemodelpayment'), 'stripe' => array('Sylius\\Bundle\\CoreBundle\\Model\\Order' => 'payum.context.stripe.storage.syliusbundlecorebundlemodelorder', 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment' => 'payum.context.stripe.storage.syliusbundlepaymentsbundlemodelpayment'), 'be2bill' => array('Sylius\\Bundle\\CoreBundle\\Model\\Order' => 'payum.context.be2bill.storage.syliusbundlecorebundlemodelorder', 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment' => 'payum.context.be2bill.storage.syliusbundlepaymentsbundlemodelpayment'), 'be2bill_onsite' => array('Sylius\\Bundle\\CoreBundle\\Model\\Order' => 'payum.context.be2bill_onsite.storage.syliusbundlecorebundlemodelorder', 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment' => 'payum.context.be2bill_onsite.storage.syliusbundlepaymentsbundlemodelpayment'), 'dummy' => array('Sylius\\Bundle\\CoreBundle\\Model\\Order' => 'payum.context.dummy.storage.syliusbundlecorebundlemodelorder', 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment' => 'payum.context.dummy.storage.syliusbundlepaymentsbundlemodelpayment')), 'paypal_express_checkout', 'paypal_express_checkout');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getPayum_Action_ExecuteSameRequestWithModelDetailsService()
    {
        return $this->services['payum.action.execute_same_request_with_model_details'] = new \Payum\Core\Action\ExecuteSameRequestWithModelDetailsAction();
    }
    protected function getPayum_Action_GetHttpQueryService()
    {
        $this->services['payum.action.get_http_query'] = $instance = new \Payum\Bundle\PayumBundle\Action\GetHttpQueryAction();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getPayum_Context_SecurityToken_Storage_SyliusbundlepayumbundlemodelpaymentsecuritytokenService()
    {
        return $this->services['payum.context._security_token.storage.syliusbundlepayumbundlemodelpaymentsecuritytoken'] = new \Payum\Core\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken');
    }
    protected function getPayum_Context_Be2bill_ApiService()
    {
        return $this->services['payum.context.be2bill.api'] = new \Payum\Be2Bill\Api($this->get('payum.buzz.client'), array('identifier' => 'EDITME', 'password' => 'EDITME', 'sandbox' => true));
    }
    protected function getPayum_Context_Be2bill_PaymentService()
    {
        $this->services['payum.context.be2bill.payment'] = $instance = new \Payum\Core\Payment();
        $instance->addApi($this->get('payum.context.be2bill.api'));
        $instance->addAction($this->get('payum.action.execute_same_request_with_model_details'));
        $instance->addAction($this->get('payum.action.get_http_query'));
        $instance->addAction(new \Payum\Be2Bill\Action\CaptureAction());
        $instance->addAction(new \Payum\Be2Bill\Action\CaptureOnsiteAction());
        $instance->addAction(new \Payum\Be2Bill\Action\StatusAction());
        $instance->addAction($this->get('sylius.payum.action.execute_same_request_with_payment_details'), true);
        $instance->addAction($this->get('sylius.payum.action.order_status'), true);
        $instance->addAction($this->get('sylius.payum.action.obtain_credit_card'), true);
        $instance->addAction($this->get('sylius.payum.be2bill.action.capture_order_using_credit_card'), true);
        $instance->addExtension($this->get('payum.extension.endless_cycle_detector'));
        $instance->addExtension($this->get('payum.extension.log_executed_actions'));
        $instance->addExtension($this->get('payum.extension.logger'));
        $instance->addExtension(new \Payum\Core\Extension\StorageExtension($this->get('payum.context.be2bill.storage.syliusbundlecorebundlemodelorder')));
        $instance->addExtension(new \Payum\Core\Extension\StorageExtension($this->get('payum.context.be2bill.storage.syliusbundlepaymentsbundlemodelpayment')));
        return $instance;
    }
    protected function getPayum_Context_Be2bill_Storage_SyliusbundlecorebundlemodelorderService()
    {
        return $this->services['payum.context.be2bill.storage.syliusbundlecorebundlemodelorder'] = new \Payum\Core\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\CoreBundle\\Model\\Order');
    }
    protected function getPayum_Context_Be2bill_Storage_SyliusbundlepaymentsbundlemodelpaymentService()
    {
        return $this->services['payum.context.be2bill.storage.syliusbundlepaymentsbundlemodelpayment'] = new \Payum\Core\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment');
    }
    protected function getPayum_Context_Be2billOnsite_ApiService()
    {
        return $this->services['payum.context.be2bill_onsite.api'] = new \Payum\Be2Bill\Api($this->get('payum.buzz.client'), array('identifier' => 'EDITME', 'password' => 'EDITME', 'sandbox' => true));
    }
    protected function getPayum_Context_Be2billOnsite_PaymentService()
    {
        $this->services['payum.context.be2bill_onsite.payment'] = $instance = new \Payum\Core\Payment();
        $instance->addApi($this->get('payum.context.be2bill_onsite.api'));
        $instance->addAction($this->get('payum.action.execute_same_request_with_model_details'));
        $instance->addAction($this->get('payum.action.get_http_query'));
        $instance->addAction(new \Payum\Be2Bill\Action\CaptureAction());
        $instance->addAction(new \Payum\Be2Bill\Action\CaptureOnsiteAction());
        $instance->addAction(new \Payum\Be2Bill\Action\StatusAction());
        $instance->addAction($this->get('sylius.payum.action.execute_same_request_with_payment_details'), true);
        $instance->addAction($this->get('sylius.payum.action.order_status'), true);
        $instance->addAction($this->get('sylius.payum.be2bill.action.notify'), true);
        $instance->addAction($this->get('sylius.payum.be2bill.action.capture_order_using_be2bill_form'), true);
        $instance->addExtension($this->get('payum.extension.endless_cycle_detector'));
        $instance->addExtension($this->get('payum.extension.log_executed_actions'));
        $instance->addExtension($this->get('payum.extension.logger'));
        $instance->addExtension(new \Payum\Core\Extension\StorageExtension($this->get('payum.context.be2bill_onsite.storage.syliusbundlecorebundlemodelorder')));
        $instance->addExtension(new \Payum\Core\Extension\StorageExtension($this->get('payum.context.be2bill_onsite.storage.syliusbundlepaymentsbundlemodelpayment')));
        return $instance;
    }
    protected function getPayum_Context_Be2billOnsite_Storage_SyliusbundlecorebundlemodelorderService()
    {
        return $this->services['payum.context.be2bill_onsite.storage.syliusbundlecorebundlemodelorder'] = new \Payum\Core\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\CoreBundle\\Model\\Order');
    }
    protected function getPayum_Context_Be2billOnsite_Storage_SyliusbundlepaymentsbundlemodelpaymentService()
    {
        return $this->services['payum.context.be2bill_onsite.storage.syliusbundlepaymentsbundlemodelpayment'] = new \Payum\Core\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment');
    }
    protected function getPayum_Context_Dummy_PaymentService()
    {
        $this->services['payum.context.dummy.payment'] = $instance = new \Payum\Core\Payment();
        $instance->addAction($this->get('payum.action.execute_same_request_with_model_details'));
        $instance->addAction($this->get('payum.action.get_http_query'));
        $instance->addAction($this->get('sylius.payum.dummy.action.order_status'), true);
        $instance->addAction($this->get('sylius.payum.dummy.action.capture_order'), true);
        $instance->addExtension($this->get('payum.extension.endless_cycle_detector'));
        $instance->addExtension($this->get('payum.extension.log_executed_actions'));
        $instance->addExtension($this->get('payum.extension.logger'));
        $instance->addExtension(new \Payum\Core\Extension\StorageExtension($this->get('payum.context.dummy.storage.syliusbundlecorebundlemodelorder')));
        $instance->addExtension(new \Payum\Core\Extension\StorageExtension($this->get('payum.context.dummy.storage.syliusbundlepaymentsbundlemodelpayment')));
        return $instance;
    }
    protected function getPayum_Context_Dummy_Storage_SyliusbundlecorebundlemodelorderService()
    {
        return $this->services['payum.context.dummy.storage.syliusbundlecorebundlemodelorder'] = new \Payum\Core\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\CoreBundle\\Model\\Order');
    }
    protected function getPayum_Context_Dummy_Storage_SyliusbundlepaymentsbundlemodelpaymentService()
    {
        return $this->services['payum.context.dummy.storage.syliusbundlepaymentsbundlemodelpayment'] = new \Payum\Core\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment');
    }
    protected function getPayum_Context_PaypalExpressCheckout_ApiService()
    {
        return $this->services['payum.context.paypal_express_checkout.api'] = new \Payum\Paypal\ExpressCheckout\Nvp\Api($this->get('payum.buzz.client'), array('username' => 'EDITME', 'password' => 'EDITME', 'signature' => 'EDITME', 'sandbox' => true));
    }
    protected function getPayum_Context_PaypalExpressCheckout_PaymentService()
    {
        $this->services['payum.context.paypal_express_checkout.payment'] = $instance = new \Payum\Core\Payment();
        $instance->addApi($this->get('payum.context.paypal_express_checkout.api'));
        $instance->addAction($this->get('payum.action.execute_same_request_with_model_details'));
        $instance->addAction($this->get('payum.action.get_http_query'));
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\AuthorizeTokenAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\DoExpressCheckoutPaymentAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\GetExpressCheckoutDetailsAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\GetTransactionDetailsAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\SetExpressCheckoutAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\CreateRecurringPaymentProfileAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\GetRecurringPaymentsProfileDetailsAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\ManageRecurringPaymentsProfileStatusAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\CaptureAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\NotifyAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\PaymentDetailsStatusAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\PaymentDetailsSyncAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\RecurringPaymentDetailsStatusAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\RecurringPaymentDetailsSyncAction());
        $instance->addAction($this->get('sylius.payum.action.execute_same_request_with_payment_details'), true);
        $instance->addAction($this->get('sylius.payum.action.order_status'), true);
        $instance->addAction($this->get('sylius.payum.paypal.action.notify_order'), true);
        $instance->addAction($this->get('sylius.payum.paypal.action.capture_order_using_express_checkout'), true);
        $instance->addExtension($this->get('payum.extension.endless_cycle_detector'));
        $instance->addExtension($this->get('payum.extension.log_executed_actions'));
        $instance->addExtension($this->get('payum.extension.logger'));
        $instance->addExtension(new \Payum\Core\Extension\StorageExtension($this->get('payum.context.paypal_express_checkout.storage.syliusbundlecorebundlemodelorder')));
        $instance->addExtension(new \Payum\Core\Extension\StorageExtension($this->get('payum.context.paypal_express_checkout.storage.syliusbundlepaymentsbundlemodelpayment')));
        return $instance;
    }
    protected function getPayum_Context_PaypalExpressCheckout_Storage_SyliusbundlecorebundlemodelorderService()
    {
        return $this->services['payum.context.paypal_express_checkout.storage.syliusbundlecorebundlemodelorder'] = new \Payum\Core\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\CoreBundle\\Model\\Order');
    }
    protected function getPayum_Context_PaypalExpressCheckout_Storage_SyliusbundlepaymentsbundlemodelpaymentService()
    {
        return $this->services['payum.context.paypal_express_checkout.storage.syliusbundlepaymentsbundlemodelpayment'] = new \Payum\Core\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment');
    }
    protected function getPayum_Context_Stripe_Action_CaptureService()
    {
        return $this->services['payum.context.stripe.action.capture'] = new \Payum\OmnipayBridge\Action\CaptureAction();
    }
    protected function getPayum_Context_Stripe_Action_StatusService()
    {
        return $this->services['payum.context.stripe.action.status'] = new \Payum\OmnipayBridge\Action\StatusAction();
    }
    protected function getPayum_Context_Stripe_GatewayService()
    {
        $this->services['payum.context.stripe.gateway'] = $instance = call_user_func(array('Omnipay\\Common\\GatewayFactory', 'create'), 'Stripe');
        $instance->setAPIKEY('EDITME');
        $instance->setTESTMODE(true);
        return $instance;
    }
    protected function getPayum_Context_Stripe_PaymentService()
    {
        $this->services['payum.context.stripe.payment'] = $instance = new \Payum\Core\Payment();
        $instance->addApi($this->get('payum.context.stripe.gateway'));
        $instance->addAction($this->get('payum.action.execute_same_request_with_model_details'));
        $instance->addAction($this->get('payum.action.get_http_query'));
        $instance->addAction($this->get('payum.context.stripe.action.capture'));
        $instance->addAction($this->get('payum.context.stripe.action.status'));
        $instance->addAction($this->get('sylius.payum.action.execute_same_request_with_payment_details'), true);
        $instance->addAction($this->get('sylius.payum.action.order_status'), true);
        $instance->addAction($this->get('sylius.payum.action.obtain_credit_card'), true);
        $instance->addAction($this->get('sylius.payum.stripe.action.capture_order_using_credit_card'), true);
        $instance->addExtension($this->get('payum.extension.endless_cycle_detector'));
        $instance->addExtension($this->get('payum.extension.log_executed_actions'));
        $instance->addExtension($this->get('payum.extension.logger'));
        $instance->addExtension(new \Payum\Core\Extension\StorageExtension($this->get('payum.context.stripe.storage.syliusbundlecorebundlemodelorder')));
        $instance->addExtension(new \Payum\Core\Extension\StorageExtension($this->get('payum.context.stripe.storage.syliusbundlepaymentsbundlemodelpayment')));
        return $instance;
    }
    protected function getPayum_Context_Stripe_Storage_SyliusbundlecorebundlemodelorderService()
    {
        return $this->services['payum.context.stripe.storage.syliusbundlecorebundlemodelorder'] = new \Payum\Core\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\CoreBundle\\Model\\Order');
    }
    protected function getPayum_Context_Stripe_Storage_SyliusbundlepaymentsbundlemodelpaymentService()
    {
        return $this->services['payum.context.stripe.storage.syliusbundlepaymentsbundlemodelpayment'] = new \Payum\Core\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment');
    }
    protected function getPayum_Extension_LogExecutedActionsService()
    {
        return $this->services['payum.extension.log_executed_actions'] = new \Payum\Core\Bridge\Psr\Log\LogExecutedActionsExtension($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getPayum_Extension_LoggerService()
    {
        return $this->services['payum.extension.logger'] = new \Payum\Core\Bridge\Psr\Log\LoggerExtension($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getPayum_Listener_InteractiveRequestService()
    {
        return $this->services['payum.listener.interactive_request'] = new \Payum\Bundle\PayumBundle\EventListener\InteractiveRequestListener();
    }
    protected function getPayum_Security_HttpRequestVerifierService()
    {
        return $this->services['payum.security.http_request_verifier'] = new \Payum\Bundle\PayumBundle\Security\HttpRequestVerifier($this->get('payum.security.token_storage'));
    }
    protected function getPayum_Security_TokenFactoryService()
    {
        return $this->services['payum.security.token_factory'] = new \Payum\Bundle\PayumBundle\Security\TokenFactory($this->get('cmf_routing.router'), $this->get('payum.security.token_storage'), $this->get('payum'), 'payum_capture_do', 'payum_notify_do');
    }
    protected function getPayum_Security_TokenStorageService()
    {
        return $this->services['payum.security.token_storage'] = new \Payum\Core\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken');
    }
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor();
    }
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }
        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }
    protected function getRouterListenerService()
    {
        $this->services['router_listener'] = $instance = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('cmf_routing.router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        return $instance;
    }
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = new \Symfony\Component\Config\Loader\LoaderResolver();
        $b->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $b->addLoader($this->get('liip_imagine.routing.loader'));
        $b->addLoader($this->get('fos_rest.routing.loader.controller'));
        $b->addLoader($this->get('fos_rest.routing.loader.yaml_collection'));
        $b->addLoader($this->get('fos_rest.routing.loader.xml_collection'));
        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $b);
    }
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.administration' => new \Symfony\Component\HttpFoundation\RequestMatcher('/administration/.*'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('/.*'), 'security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'))), $this->get('event_dispatcher'));
    }
    protected function getSecurity_Firewall_Map_Context_AdministrationService()
    {
        $a = $this->get('security.http_utils');
        $b = $this->get('security.context');
        $c = $this->get('http_kernel');
        $d = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $f = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, '/administration/login'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/administration/logout'));
        $f->addHandler($this->get('security.logout.handler.session'));
        $g = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array('login_path' => '/administration/login', 'default_target_path' => '/administration/dashboard', 'use_referer' => true, 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path'));
        $g->setProviderKey('administration');
        return $this->services['security.firewall.map.context.administration'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => $this->get('security.context_listener.0'), 2 => $f, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $this->get('security.authentication.manager'), $this->get('security.authentication.session_strategy'), $a, 'administration', $g, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($c, $a, array('login_path' => '/administration/login', 'failure_path' => '/administration/login', 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $d), array('check_path' => '/administration/login-check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $d, $e), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '537d0f75660ed', $d), 5 => $this->get('security.access_listener'), 6 => new \Symfony\Component\Security\Http\Firewall\SwitchUserListener($b, $this->get('fos_user.user_provider.username'), $this->get('hwi_oauth.user_checker'), 'administration', $this->get('security.access.decision_manager'), $d, '_switch_user', 'ROLE_ALLOWED_TO_SWITCH', $e)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $a, 'administration', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($c, $a, '/administration/login', false), NULL, NULL, $d));
    }
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('security.http_utils');
        $b = $this->get('fos_user.user_provider.username');
        $c = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('security.context');
        $e = $this->get('http_kernel');
        $f = $this->get('security.authentication.manager');
        $g = $this->get('security.authentication.session_strategy');
        $h = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $i = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(array(0 => $b, 1 => $b), 'abc', 'main', array('name' => 'APP_REMEMBER_ME', 'lifetime' => 31536000, 'always_remember_me' => true, 'remember_me_parameter' => '_remember_me', 'path' => '/', 'domain' => NULL, 'secure' => false, 'httponly' => true), $c);
        $j = new \Symfony\Component\Security\Http\Firewall\LogoutListener($d, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, '/'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/logout'));
        $j->addHandler($this->get('security.logout.handler.session'));
        $j->addHandler($i);
        $k = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array('login_path' => '/login', 'default_target_path' => '/', 'use_referer' => true, 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path'));
        $k->setProviderKey('main');
        $l = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($d, $f, $g, $a, 'main', $k, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $a, array('login_path' => '/login', 'failure_path' => '/login', 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $c), array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $c, $h);
        $l->setRememberMeServices($i);
        $m = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array('login_path' => '/connect', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $m->setProviderKey('main');
        $n = new \HWI\Bundle\OAuthBundle\Security\Http\Firewall\OAuthListener($d, $f, $g, $a, 'main', $m, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $a, array('login_path' => '/connect', 'failure_path' => '/connect', 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $c), array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true), $c, $h);
        $n->setResourceOwnerMap($this->get('hwi_oauth.resource_ownermap.main'));
        $n->setCheckPaths(array(0 => '/login/check-amazon', 1 => '/login/check-facebook', 2 => '/login/check-google'));
        $n->setRememberMeServices($i);
        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => $this->get('security.context_listener.0'), 2 => $j, 3 => $l, 4 => $n, 5 => new \Symfony\Component\Security\Http\Firewall\RememberMeListener($d, $i, $f, $c, $h), 6 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($d, '537d0f75660ed', $c), 7 => $this->get('security.access_listener'), 8 => new \Symfony\Component\Security\Http\Firewall\SwitchUserListener($d, $b, $this->get('hwi_oauth.user_checker'), 'main', $this->get('security.access.decision_manager'), $c, '_switch_user', 'ROLE_SYLIUS_ADMIN', $h)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($d, $this->get('security.authentication.trust_resolver'), $a, 'main', new \HWI\Bundle\OAuthBundle\Security\Http\EntryPoint\OAuthEntryPoint($a, '/connect'), NULL, NULL, $c));
    }
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom('C:/xampp/htdocs/bsylius/app/cache/prod/secure_random.seed', $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }
    protected function getSessionService()
    {
        $this->services['session'] = $instance = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
        $instance->registerBag($this->get('sylius.process_storage.session.bag'));
        return $instance;
    }
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler('C:/xampp/htdocs/bsylius/app/cache/prod/sessions');
    }
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage('C:/xampp/htdocs/bsylius/app/cache/prod/sessions');
    }
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array(), $this->get('session.handler'));
    }
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'));
    }
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }
    protected function getSonata_Block_Cache_Handler_DefaultService()
    {
        return $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler();
    }
    protected function getSonata_Block_Cache_Handler_NoopService()
    {
        return $this->services['sonata.block.cache.handler.noop'] = new \Sonata\BlockBundle\Cache\NoopHttpCacheHandler();
    }
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        $this->services['sonata.block.context_manager.default'] = $instance = new \Sonata\BlockBundle\Block\BlockContextManager($this->get('sonata.block.loader.chain'), $this->get('sonata.block.manager'), array('by_type' => array('sonata.block.service.text' => 'sonata.cache.noop'), 'by_class' => array('Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\RssBlock' => 'sonata.cache.noop')));
        $instance->addSettingsByClass('Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\RssBlock', array('title' => 'Insert the rss title', 'url' => false, 'maxItems' => 10, 'template' => 'CmfBlockBundle:Block:block_rss.html.twig', 'itemClass' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Model\\FeedItem'), true);
        return $instance;
    }
    protected function getSonata_Block_Exception_Filter_DebugOnlyService()
    {
        return $this->services['sonata.block.exception.filter.debug_only'] = new \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter(false);
    }
    protected function getSonata_Block_Exception_Filter_IgnoreBlockExceptionService()
    {
        return $this->services['sonata.block.exception.filter.ignore_block_exception'] = new \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter('Sonata\\BlockBundle\\Exception\\BlockExceptionInterface');
    }
    protected function getSonata_Block_Exception_Filter_KeepAllService()
    {
        return $this->services['sonata.block.exception.filter.keep_all'] = new \Sonata\BlockBundle\Exception\Filter\KeepAllFilter();
    }
    protected function getSonata_Block_Exception_Filter_KeepNoneService()
    {
        return $this->services['sonata.block.exception.filter.keep_none'] = new \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter();
    }
    protected function getSonata_Block_Exception_Renderer_InlineService()
    {
        return $this->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception.html.twig');
    }
    protected function getSonata_Block_Exception_Renderer_InlineDebugService()
    {
        return $this->services['sonata.block.exception.renderer.inline_debug'] = new \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception_debug.html.twig', false, true);
    }
    protected function getSonata_Block_Exception_Renderer_ThrowService()
    {
        return $this->services['sonata.block.exception.renderer.throw'] = new \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer();
    }
    protected function getSonata_Block_Exception_Strategy_ManagerService()
    {
        $this->services['sonata.block.exception.strategy.manager'] = $instance = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, array('debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'), array('inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'), array(), array());
        $instance->setDefaultFilter('debug_only');
        $instance->setDefaultRenderer('throw');
        return $instance;
    }
    protected function getSonata_Block_Form_Type_BlockService()
    {
        return $this->services['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType($this->get('sonata.block.manager'), array('cms' => array(0 => 'sonata.block.service.text')));
    }
    protected function getSonata_Block_Loader_ChainService()
    {
        return $this->services['sonata.block.loader.chain'] = new \Sonata\BlockBundle\Block\BlockLoaderChain(array(0 => $this->get('sonata.block.loader.service'), 1 => $this->get('cmf.block.service')));
    }
    protected function getSonata_Block_Loader_ServiceService()
    {
        return $this->services['sonata.block.loader.service'] = new \Sonata\BlockBundle\Block\Loader\ServiceLoader(array(0 => 'sonata.block.service.text'));
    }
    protected function getSonata_Block_Renderer_DefaultService()
    {
        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer($this->get('sonata.block.manager'), $this->get('sonata.block.exception.strategy.manager'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE), false);
    }
    protected function getSonata_Block_Service_EmptyService()
    {
        return $this->services['sonata.block.service.empty'] = new \Sonata\BlockBundle\Block\Service\EmptyBlockService('sonata.block.empty', $this->get('templating'));
    }
    protected function getSonata_Block_Service_RssService()
    {
        return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', $this->get('templating'));
    }
    protected function getSonata_Block_Service_TextService()
    {
        return $this->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService('sonata.block.text', $this->get('templating'));
    }
    protected function getSonata_Block_Twig_GlobalService()
    {
        return $this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables($this, array('block_base' => 'CmfBlockBundle:Block:block_base.html.twig'));
    }
    protected function getStofDoctrineExtensions_EventListener_LoggerService()
    {
        return $this->services['stof_doctrine_extensions.event_listener.logger'] = new \Stof\DoctrineExtensionsBundle\EventListener\LoggerListener($this->get('stof_doctrine_extensions.listener.loggable'), $this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader($this->get('annotation_reader'));
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        return $this->services['swiftmailer.mailer.default.transport'] = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));
    }
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);
        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));
        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        return $instance;
    }
    protected function getSylius_AvailabilityChecker_DefaultService()
    {
        return $this->services['sylius.availability_checker.default'] = new \Sylius\Bundle\InventoryBundle\Checker\AvailabilityChecker(true);
    }
    protected function getSylius_BackordersHandlerService()
    {
        return $this->services['sylius.backorders_handler'] = new \Sylius\Bundle\InventoryBundle\Operator\BackordersHandler($this->get('sylius.repository.inventory_unit'));
    }
    protected function getSylius_Builder_ProductService()
    {
        return $this->services['sylius.builder.product'] = new \Sylius\Bundle\ProductBundle\Builder\ProductBuilder($this->get('doctrine.orm.default_entity_manager'), $this->get('sylius.repository.product'), $this->get('sylius.repository.property'), $this->get('sylius.repository.product_property'));
    }
    protected function getSylius_Builder_PrototypeService()
    {
        return $this->services['sylius.builder.prototype'] = new \Sylius\Bundle\VariableProductBundle\Builder\PrototypeBuilder($this->get('sylius.repository.product_property'));
    }
    protected function getSylius_Cart_PurgerService()
    {
        return $this->services['sylius.cart.purger'] = new \Sylius\Bundle\CartBundle\Purger\ExpiredCartsPurger($this->get('doctrine.orm.default_entity_manager'), $this->get('sylius.repository.order'));
    }
    protected function getSylius_CartFlashListenerService()
    {
        $this->services['sylius.cart_flash_listener'] = $instance = new \Sylius\Bundle\CartBundle\EventListener\FlashListener($this->get('session'), $this->get('translator.default'));
        $instance->setMessages();
        return $instance;
    }
    protected function getSylius_CartItemResolver_DefaultService()
    {
        return $this->services['sylius.cart_item_resolver.default'] = new \Sylius\Bundle\CoreBundle\Cart\ItemResolver($this->get('sylius.cart_provider.default'), $this->get('sylius.price_calculator.default'), $this->get('sylius.repository.product'), $this->get('form.factory'), $this->get('sylius.availability_checker.default'), $this->get('sylius.checker.restricted_zone'));
    }
    protected function getSylius_CartListenerService()
    {
        return $this->services['sylius.cart_listener'] = new \Sylius\Bundle\CartBundle\EventListener\CartListener($this->get('doctrine.orm.default_entity_manager'), $this->get('validator'), $this->get('sylius.cart_provider.default'));
    }
    protected function getSylius_CartProvider_DefaultService()
    {
        return $this->services['sylius.cart_provider.default'] = new \Sylius\Bundle\CartBundle\Provider\CartProvider($this->get('sylius.cart_storage.session'), $this->get('doctrine.orm.default_entity_manager'), $this->get('sylius.repository.order'), $this->get('event_dispatcher'));
    }
    protected function getSylius_CartStorage_SessionService()
    {
        return $this->services['sylius.cart_storage.session'] = new \Sylius\Bundle\CartBundle\Storage\SessionCartStorage($this->get('session'));
    }
    protected function getSylius_CartTwigService()
    {
        return $this->services['sylius.cart_twig'] = new \Sylius\Bundle\CartBundle\Twig\SyliusCartExtension($this->get('sylius.cart_provider.default'), $this->get('sylius.repository.order_item'), $this->get('form.factory'));
    }
    protected function getSylius_Checker_RestrictedZoneService()
    {
        return $this->services['sylius.checker.restricted_zone'] = new \Sylius\Bundle\CoreBundle\Checker\RestrictedZoneChecker($this->get('security.context'), $this->get('sylius.zone_matcher'));
    }
    protected function getSylius_CheckoutForm_AddressingService()
    {
        return $this->services['sylius.checkout_form.addressing'] = new \Sylius\Bundle\CoreBundle\Form\Type\Checkout\AddressingStepType('Sylius\\Bundle\\CoreBundle\\Model\\Order');
    }
    protected function getSylius_CheckoutForm_PaymentService()
    {
        return $this->services['sylius.checkout_form.payment'] = new \Sylius\Bundle\CoreBundle\Form\Type\Checkout\PaymentStepType('Sylius\\Bundle\\CoreBundle\\Model\\Order');
    }
    protected function getSylius_CheckoutForm_ShipmentService()
    {
        return $this->services['sylius.checkout_form.shipment'] = new \Sylius\Bundle\CoreBundle\Form\Type\Checkout\ShipmentType('Sylius\\Bundle\\CoreBundle\\Model\\Shipment', $this->get('translator.default'));
    }
    protected function getSylius_CheckoutForm_ShippingService()
    {
        return $this->services['sylius.checkout_form.shipping'] = new \Sylius\Bundle\CoreBundle\Form\Type\Checkout\ShippingStepType('Sylius\\Bundle\\CoreBundle\\Model\\Order');
    }
    protected function getSylius_CheckoutScenarioService()
    {
        return $this->services['sylius.checkout_scenario'] = new \Sylius\Bundle\CoreBundle\Checkout\CheckoutProcessScenario($this->get('sylius.cart_provider.default'));
    }
    protected function getSylius_CheckoutStep_AddressingService()
    {
        $this->services['sylius.checkout_step.addressing'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\AddressingStep();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_CheckoutStep_FinalizeService()
    {
        $this->services['sylius.checkout_step.finalize'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\FinalizeStep();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_CheckoutStep_PaymentService()
    {
        $this->services['sylius.checkout_step.payment'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\PaymentStep();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_CheckoutStep_PurchaseService()
    {
        $this->services['sylius.checkout_step.purchase'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\PurchaseStep();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_CheckoutStep_SecurityService()
    {
        $this->services['sylius.checkout_step.security'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\SecurityStep();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_CheckoutStep_ShippingService()
    {
        $this->services['sylius.checkout_step.shipping'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\ShippingStep();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_AddressService()
    {
        $this->services['sylius.controller.address'] = $instance = new \Sylius\Bundle\WebBundle\Controller\Frontend\Account\AddressController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'address', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_AdjustmentService()
    {
        $this->services['sylius.controller.adjustment'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'adjustment', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_Backend_DashboardService()
    {
        $this->services['sylius.controller.backend.dashboard'] = $instance = new \Sylius\Bundle\WebBundle\Controller\Backend\DashboardController();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_Backend_FormService()
    {
        $this->services['sylius.controller.backend.form'] = $instance = new \Sylius\Bundle\WebBundle\Controller\Backend\FormController();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_Backend_SecurityService()
    {
        $this->services['sylius.controller.backend.security'] = $instance = new \Sylius\Bundle\WebBundle\Controller\Backend\SecurityController();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_BlockService()
    {
        $this->services['sylius.controller.block'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'block', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_CartService()
    {
        $this->services['sylius.controller.cart'] = $instance = new \Sylius\Bundle\CartBundle\Controller\CartController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'cart', 'SyliusCartBundle:Cart'));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_CartItemService()
    {
        $this->services['sylius.controller.cart_item'] = $instance = new \Sylius\Bundle\CartBundle\Controller\CartItemController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'cart_item', 'SyliusCartBundle:CartItem'));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ConfigurationFactoryService()
    {
        return $this->services['sylius.controller.configuration_factory'] = new \Sylius\Bundle\ResourceBundle\Controller\ConfigurationFactory($this->get('sylius.controller.parameters_parser'));
    }
    protected function getSylius_Controller_CountryService()
    {
        $this->services['sylius.controller.country'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'country', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_CreditCardService()
    {
        $this->services['sylius.controller.credit_card'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'credit_card', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_CurrencyService()
    {
        $this->services['sylius.controller.currency'] = $instance = new \Sylius\Bundle\MoneyBundle\Controller\CurrencyController();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ExchangeRateService()
    {
        $this->services['sylius.controller.exchange_rate'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'exchange_rate', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_Frontend_Account_OrderService()
    {
        $this->services['sylius.controller.frontend.account.order'] = $instance = new \Sylius\Bundle\WebBundle\Controller\Frontend\Account\OrderController();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_Frontend_HomepageService()
    {
        $this->services['sylius.controller.frontend.homepage'] = $instance = new \Sylius\Bundle\WebBundle\Controller\Frontend\HomepageController();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_GroupService()
    {
        $this->services['sylius.controller.group'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'group', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_InventoryUnitService()
    {
        $this->services['sylius.controller.inventory_unit'] = $instance = new \Sylius\Bundle\InventoryBundle\Controller\InventoryUnitController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'inventory_unit', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_LocaleService()
    {
        $this->services['sylius.controller.locale'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'locale', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_NumberService()
    {
        $this->services['sylius.controller.number'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'number', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_OptionService()
    {
        $this->services['sylius.controller.option'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'option', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_OptionValueService()
    {
        $this->services['sylius.controller.option_value'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'option_value', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_OrderService()
    {
        $this->services['sylius.controller.order'] = $instance = new \Sylius\Bundle\CoreBundle\Controller\OrderController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'order', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_OrderItemService()
    {
        $this->services['sylius.controller.order_item'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'order_item', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PageService()
    {
        $this->services['sylius.controller.page'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'page', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ParameterService()
    {
        $this->services['sylius.controller.parameter'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'parameter', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ParametersParserService()
    {
        return $this->services['sylius.controller.parameters_parser'] = new \Sylius\Bundle\ResourceBundle\Controller\ParametersParser($this->get('sylius.expresssion_language'));
    }
    protected function getSylius_Controller_PaymentService()
    {
        $this->services['sylius.controller.payment'] = $instance = new \Sylius\Bundle\CoreBundle\Controller\PaymentController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'payment', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PaymentMethodService()
    {
        $this->services['sylius.controller.payment_method'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'payment_method', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PaymentSecurityTokenService()
    {
        $this->services['sylius.controller.payment_security_token'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'payment_security_token', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ProcessService()
    {
        $this->services['sylius.controller.process'] = $instance = new \Sylius\Bundle\FlowBundle\Controller\ProcessController();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ProductService()
    {
        $this->services['sylius.controller.product'] = $instance = new \Sylius\Bundle\CoreBundle\Controller\ProductController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'product', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ProductPropertyService()
    {
        $this->services['sylius.controller.product_property'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'product_property', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PromotionService()
    {
        $this->services['sylius.controller.promotion'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'promotion', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PromotionActionService()
    {
        $this->services['sylius.controller.promotion_action'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'promotion_action', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PromotionCouponService()
    {
        $this->services['sylius.controller.promotion_coupon'] = $instance = new \Sylius\Bundle\PromotionsBundle\Controller\CouponController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'promotion_coupon', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PromotionRuleService()
    {
        $this->services['sylius.controller.promotion_rule'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'promotion_rule', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PromotionSubjectService()
    {
        $this->services['sylius.controller.promotion_subject'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'promotion_subject', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PropertyService()
    {
        $this->services['sylius.controller.property'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'property', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PrototypeService()
    {
        $this->services['sylius.controller.prototype'] = $instance = new \Sylius\Bundle\ProductBundle\Controller\PrototypeController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'prototype', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ProvinceService()
    {
        $this->services['sylius.controller.province'] = $instance = new \Sylius\Bundle\AddressingBundle\Controller\ProvinceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'province', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_SettingsService()
    {
        $this->services['sylius.controller.settings'] = $instance = new \Sylius\Bundle\SettingsBundle\Controller\SettingsController();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ShipmentService()
    {
        $this->services['sylius.controller.shipment'] = $instance = new \Sylius\Bundle\ShippingBundle\Controller\ShipmentController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'shipment', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ShipmentItemService()
    {
        $this->services['sylius.controller.shipment_item'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'shipment_item', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ShippingCategoryService()
    {
        $this->services['sylius.controller.shipping_category'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'shipping_category', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ShippingMethodService()
    {
        $this->services['sylius.controller.shipping_method'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'shipping_method', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ShippingMethodRuleService()
    {
        $this->services['sylius.controller.shipping_method_rule'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'shipping_method_rule', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_StockableService()
    {
        $this->services['sylius.controller.stockable'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'stockable', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_TaxCategoryService()
    {
        $this->services['sylius.controller.tax_category'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'tax_category', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_TaxRateService()
    {
        $this->services['sylius.controller.tax_rate'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'tax_rate', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_TaxonService()
    {
        $this->services['sylius.controller.taxon'] = $instance = new \Sylius\Bundle\TaxonomiesBundle\Controller\TaxonController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'taxon', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_TaxonomyService()
    {
        $this->services['sylius.controller.taxonomy'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'taxonomy', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_UserService()
    {
        $this->services['sylius.controller.user'] = $instance = new \Sylius\Bundle\CoreBundle\Controller\UserController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'user', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_VariantService()
    {
        $this->services['sylius.controller.variant'] = $instance = new \Sylius\Bundle\VariableProductBundle\Controller\VariantController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'variant', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_VariantImageService()
    {
        $this->services['sylius.controller.variant_image'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'variant_image', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ZoneService()
    {
        $this->services['sylius.controller.zone'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'zone', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ZoneMemberService()
    {
        $this->services['sylius.controller.zone_member'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'zone_member', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ZoneMemberCountryService()
    {
        $this->services['sylius.controller.zone_member_country'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'zone_member_country', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ZoneMemberProvinceService()
    {
        $this->services['sylius.controller.zone_member_province'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'zone_member_province', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ZoneMemberZoneService()
    {
        $this->services['sylius.controller.zone_member_zone'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController($this->get('sylius.controller.configuration_factory')->createConfiguration('sylius', 'zone_member_zone', NULL));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_CurrencyContextService()
    {
        return $this->services['sylius.currency_context'] = new \Sylius\Bundle\CoreBundle\Context\CurrencyContext($this->get('security.context'), $this->get('session'), $this->get('sylius.settings.manager'), $this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getSylius_CurrencyConverterService()
    {
        return $this->services['sylius.currency_converter'] = new \Sylius\Bundle\MoneyBundle\Converter\CurrencyConverter($this->get('sylius.repository.exchange_rate'));
    }
    protected function getSylius_EventSubscriber_KernelControllerService()
    {
        return $this->services['sylius.event_subscriber.kernel_controller'] = new \Sylius\Bundle\ResourceBundle\EventListener\KernelControllerSubscriber();
    }
    protected function getSylius_EventSubscriber_LoadMetadataService()
    {
        return $this->services['sylius.event_subscriber.load_metadata'] = new \Sylius\Bundle\ResourceBundle\EventListener\LoadMetadataSubscriber(array('sylius.user' => array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\User', 'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\UserController', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\UserRepository')), 'sylius.group' => array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Group', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController')), 'sylius.locale' => array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Locale', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController')), 'sylius.block' => array('driver' => 'doctrine/phpcr-odm', 'classes' => array('model' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\SimpleBlock', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController')), 'sylius.page' => array('driver' => 'doctrine/phpcr-odm', 'classes' => array('model' => 'Symfony\\Cmf\\Bundle\\ContentBundle\\Doctrine\\Phpcr\\StaticContent', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\PageRepository', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController')), 'user' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\User'), 'group' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Group', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\GroupType'), 'locale' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Locale', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\LocaleType'), 'block' => array('model' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\SimpleBlock', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\BlockType'), 'page' => array('model' => 'Symfony\\Cmf\\Bundle\\ContentBundle\\Doctrine\\Phpcr\\StaticContent', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\PageType'), 'variant_image' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\VariantImage', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController'), 'taxonomy' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Taxonomy', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxonomyType', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController'), 'taxon' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Taxon', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxonType', 'controller' => 'Sylius\\Bundle\\TaxonomiesBundle\\Controller\\TaxonController'), 'inventory_unit' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit', 'controller' => 'Sylius\\Bundle\\InventoryBundle\\Controller\\InventoryUnitController'), 'stockable' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Variant', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController'), 'address' => array('controller' => 'Sylius\\Bundle\\WebBundle\\Controller\\Frontend\\Account\\AddressController', 'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Address', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\AddressType'), 'country' => array('model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Country', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryType'), 'province' => array('model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Province', 'controller' => 'Sylius\\Bundle\\AddressingBundle\\Controller\\ProvinceController', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceType'), 'zone' => array('model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Zone', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneType'), 'zone_member' => array('model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMember', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberType'), 'zone_member_country' => array('model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberCountry', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberCountryType'), 'zone_member_province' => array('model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberProvince', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberProvinceType'), 'zone_member_zone' => array('model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberZone', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberZoneType'), 'promotion_subject' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Order', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController'), 'promotion' => array('model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Promotion', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\PromotionType'), 'promotion_rule' => array('model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Rule', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\RuleType'), 'promotion_action' => array('model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Action', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\ActionType'), 'promotion_coupon' => array('model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Coupon', 'controller' => 'Sylius\\Bundle\\PromotionsBundle\\Controller\\CouponController', 'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\CouponType'), 'payment_security_token' => array('model' => 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController'), 'payment' => array('controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\PaymentController', 'model' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment', 'form' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentType'), 'payment_method' => array('model' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethod', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentMethodType'), 'credit_card' => array('model' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCard', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\CreditCardType'), 'shipment' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Shipment', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\ShipmentRepository', 'controller' => 'Sylius\\Bundle\\ShippingBundle\\Controller\\ShipmentController', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentType'), 'shipment_item' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentItemType'), 'shipping_method' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\ShippingMethod', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ShippingMethodType', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController'), 'shipping_category' => array('model' => 'Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategory', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryType'), 'shipping_method_rule' => array('model' => 'Sylius\\Bundle\\ShippingBundle\\Model\\Rule', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\RuleType'), 'tax_rate' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\TaxRate', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxRateType', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController'), 'tax_category' => array('model' => 'Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategory', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryType'), 'variant' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Variant', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\VariantRepository', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\VariantType', 'controller' => 'Sylius\\Bundle\\VariableProductBundle\\Controller\\VariantController'), 'option' => array('model' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\Option', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionType'), 'option_value' => array('model' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\OptionValue', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionValueType'), 'product' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Product', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ProductType', 'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductController', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\ProductRepository'), 'prototype' => array('model' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\Prototype', 'form' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\PrototypeType', 'controller' => 'Sylius\\Bundle\\ProductBundle\\Controller\\PrototypeController'), 'property' => array('model' => 'Sylius\\Bundle\\ProductBundle\\Model\\Property', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\PropertyType'), 'product_property' => array('model' => 'Sylius\\Bundle\\ProductBundle\\Model\\ProductProperty', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductPropertyType'), 'item' => array('form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\CartItemType', 'controller' => 'Sylius\\Bundle\\CartBundle\\Controller\\CartItemController'), 'cart' => array('form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\CartType', 'controller' => 'Sylius\\Bundle\\CartBundle\\Controller\\CartController'), 'parameter' => array('model' => 'Sylius\\Bundle\\SettingsBundle\\Model\\Parameter', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController'), 'exchange_rate' => array('model' => 'Sylius\\Bundle\\MoneyBundle\\Model\\ExchangeRate', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\MoneyBundle\\Form\\Type\\ExchangeRateType'), 'currency' => array('controller' => 'Sylius\\Bundle\\MoneyBundle\\Controller\\CurrencyController'), 'order_item' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\OrderItem', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderItemType'), 'order' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Order', 'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\OrderController', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\OrderRepository', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\OrderType'), 'adjustment' => array('model' => 'Sylius\\Bundle\\OrderBundle\\Model\\Adjustment', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\AdjustmentType'), 'number' => array('model' => 'Sylius\\Bundle\\OrderBundle\\Model\\Number', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController')));
    }
    protected function getSylius_ExpresssionLanguageService()
    {
        $this->services['sylius.expresssion_language'] = $instance = new \Sylius\Bundle\ResourceBundle\ExpressionLanguage\ExpressionLanguage();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Form_Frontend_Profile_TypeService()
    {
        return $this->services['sylius.form.frontend.profile.type'] = new \Sylius\Bundle\WebBundle\Form\ProfileFormType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }
    protected function getSylius_Form_Listener_AddressService()
    {
        return $this->services['sylius.form.listener.address'] = new \Sylius\Bundle\AddressingBundle\Form\EventListener\BuildAddressFormListener($this->get('sylius.repository.country'), $this->get('form.factory'));
    }
    protected function getSylius_Form_Type_AddressService()
    {
        return $this->services['sylius.form.type.address'] = new \Sylius\Bundle\AddressingBundle\Form\Type\AddressType('Sylius\\Bundle\\AddressingBundle\\Model\\Address', array(0 => 'sylius'), $this->get('sylius.form.listener.address'));
    }
    protected function getSylius_Form_Type_AdjustmentService()
    {
        return $this->services['sylius.form.type.adjustment'] = new \Sylius\Bundle\OrderBundle\Form\Type\AdjustmentType('Sylius\\Bundle\\OrderBundle\\Model\\Adjustment', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_BlockService()
    {
        return $this->services['sylius.form.type.block'] = new \Sylius\Bundle\CoreBundle\Form\Type\BlockType('Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\SimpleBlock');
    }
    protected function getSylius_Form_Type_CartService()
    {
        return $this->services['sylius.form.type.cart'] = new \Sylius\Bundle\CoreBundle\Form\Type\CartType('Sylius\\Bundle\\CoreBundle\\Model\\Order', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_CartItemService()
    {
        return $this->services['sylius.form.type.cart_item'] = new \Sylius\Bundle\CoreBundle\Form\Type\CartItemType('Sylius\\Bundle\\CoreBundle\\Model\\OrderItem', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ConfigurationService()
    {
        return $this->services['sylius.form.type.configuration'] = new \Sylius\Bundle\InstallerBundle\Form\Type\ConfigurationType();
    }
    protected function getSylius_Form_Type_Configuration_DatabaseService()
    {
        return $this->services['sylius.form.type.configuration.database'] = new \Sylius\Bundle\InstallerBundle\Form\Type\Configuration\DatabaseType();
    }
    protected function getSylius_Form_Type_Configuration_HiddenService()
    {
        return $this->services['sylius.form.type.configuration.hidden'] = new \Sylius\Bundle\InstallerBundle\Form\Type\Configuration\HiddenType();
    }
    protected function getSylius_Form_Type_Configuration_LocaleService()
    {
        return $this->services['sylius.form.type.configuration.locale'] = new \Sylius\Bundle\InstallerBundle\Form\Type\Configuration\LocaleType();
    }
    protected function getSylius_Form_Type_Configuration_MailerService()
    {
        return $this->services['sylius.form.type.configuration.mailer'] = new \Sylius\Bundle\InstallerBundle\Form\Type\Configuration\MailerType();
    }
    protected function getSylius_Form_Type_CountryService()
    {
        return $this->services['sylius.form.type.country'] = new \Sylius\Bundle\AddressingBundle\Form\Type\CountryType('Sylius\\Bundle\\AddressingBundle\\Model\\Country', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_CountryChoiceService()
    {
        return $this->services['sylius.form.type.country_choice'] = new \Sylius\Bundle\AddressingBundle\Form\Type\CountryEntityChoiceType('Sylius\\Bundle\\AddressingBundle\\Model\\Country');
    }
    protected function getSylius_Form_Type_CreditCardService()
    {
        return $this->services['sylius.form.type.credit_card'] = new \Sylius\Bundle\PaymentsBundle\Form\Type\CreditCardType('Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCard', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ExchangeRateService()
    {
        return $this->services['sylius.form.type.exchange_rate'] = new \Sylius\Bundle\MoneyBundle\Form\Type\ExchangeRateType('Sylius\\Bundle\\MoneyBundle\\Model\\ExchangeRate');
    }
    protected function getSylius_Form_Type_GroupService()
    {
        return $this->services['sylius.form.type.group'] = new \Sylius\Bundle\CoreBundle\Form\Type\GroupType('Sylius\\Bundle\\CoreBundle\\Model\\Group');
    }
    protected function getSylius_Form_Type_GroupChoiceService()
    {
        return $this->services['sylius.form.type.group_choice'] = new \Sylius\Bundle\CoreBundle\Form\Type\GroupEntityType('Sylius\\Bundle\\CoreBundle\\Model\\Group');
    }
    protected function getSylius_Form_Type_ImageService()
    {
        return $this->services['sylius.form.type.image'] = new \Sylius\Bundle\CoreBundle\Form\Type\ImageType('Sylius\\Bundle\\CoreBundle\\Model\\VariantImage');
    }
    protected function getSylius_Form_Type_ListService()
    {
        return $this->services['sylius.form.type.list'] = new \Sylius\Bundle\CoreBundle\Form\Type\ListType();
    }
    protected function getSylius_Form_Type_LocaleService()
    {
        return $this->services['sylius.form.type.locale'] = new \Sylius\Bundle\CoreBundle\Form\Type\LocaleType('Sylius\\Bundle\\CoreBundle\\Model\\Locale');
    }
    protected function getSylius_Form_Type_MoneyService()
    {
        return $this->services['sylius.form.type.money'] = new \Sylius\Bundle\MoneyBundle\Form\Type\MoneyType('EUR');
    }
    protected function getSylius_Form_Type_OptionService()
    {
        return $this->services['sylius.form.type.option'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\OptionType('Sylius\\Bundle\\VariableProductBundle\\Model\\Option', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_OptionChoiceService()
    {
        return $this->services['sylius.form.type.option_choice'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\OptionEntityChoiceType('Sylius\\Bundle\\VariableProductBundle\\Model\\Option');
    }
    protected function getSylius_Form_Type_OptionValueService()
    {
        return $this->services['sylius.form.type.option_value'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\OptionValueType('Sylius\\Bundle\\VariableProductBundle\\Model\\OptionValue', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_OptionValueChoiceService()
    {
        return $this->services['sylius.form.type.option_value_choice'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\OptionValueChoiceType();
    }
    protected function getSylius_Form_Type_OptionValueCollectionService()
    {
        return $this->services['sylius.form.type.option_value_collection'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\OptionValueCollectionType();
    }
    protected function getSylius_Form_Type_OrderService()
    {
        return $this->services['sylius.form.type.order'] = new \Sylius\Bundle\CoreBundle\Form\Type\OrderType('Sylius\\Bundle\\CoreBundle\\Model\\Order', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_OrderFilterService()
    {
        return $this->services['sylius.form.type.order_filter'] = new \Sylius\Bundle\CoreBundle\Form\Type\Filter\OrderFilterType();
    }
    protected function getSylius_Form_Type_OrderItemService()
    {
        return $this->services['sylius.form.type.order_item'] = new \Sylius\Bundle\OrderBundle\Form\Type\OrderItemType('Sylius\\Bundle\\CoreBundle\\Model\\OrderItem', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PageService()
    {
        return $this->services['sylius.form.type.page'] = new \Sylius\Bundle\CoreBundle\Form\Type\PageType('Symfony\\Cmf\\Bundle\\ContentBundle\\Doctrine\\Phpcr\\StaticContent');
    }
    protected function getSylius_Form_Type_PaymentService()
    {
        return $this->services['sylius.form.type.payment'] = new \Sylius\Bundle\PaymentsBundle\Form\Type\PaymentType('Sylius\\Bundle\\PaymentsBundle\\Model\\Payment', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PaymentGatewayChoiceService()
    {
        return $this->services['sylius.form.type.payment_gateway_choice'] = new \Sylius\Bundle\PaymentsBundle\Form\Type\PaymentGatewayChoiceType(array('dummy' => 'Test', 'stripe' => 'Stripe', 'be2bill' => 'Be2Bill'));
    }
    protected function getSylius_Form_Type_PaymentMethodService()
    {
        return $this->services['sylius.form.type.payment_method'] = new \Sylius\Bundle\PaymentsBundle\Form\Type\PaymentMethodType('Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethod', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PaymentMethodChoiceService()
    {
        return $this->services['sylius.form.type.payment_method_choice'] = new \Sylius\Bundle\PaymentsBundle\Form\Type\PaymentMethodEntityType('Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethod');
    }
    protected function getSylius_Form_Type_ProductService()
    {
        return $this->services['sylius.form.type.product'] = new \Sylius\Bundle\CoreBundle\Form\Type\ProductType('Sylius\\Bundle\\CoreBundle\\Model\\Product', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ProductFilterService()
    {
        return $this->services['sylius.form.type.product_filter'] = new \Sylius\Bundle\CoreBundle\Form\Type\Filter\ProductFilterType();
    }
    protected function getSylius_Form_Type_ProductPropertyService()
    {
        return $this->services['sylius.form.type.product_property'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductPropertyType('Sylius\\Bundle\\ProductBundle\\Model\\ProductProperty', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionService()
    {
        return $this->services['sylius.form.type.promotion'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\PromotionType('Sylius\\Bundle\\PromotionsBundle\\Model\\Promotion', array(0 => 'sylius'), $this->get('sylius.registry.promotion_rule_checker'), $this->get('sylius.registry.promotion_action'));
    }
    protected function getSylius_Form_Type_PromotionActionService()
    {
        return $this->services['sylius.form.type.promotion_action'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\ActionType('Sylius\\Bundle\\PromotionsBundle\\Model\\Action', array(0 => 'sylius'), $this->get('sylius.registry.promotion_action'));
    }
    protected function getSylius_Form_Type_PromotionAction_AddProductConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_action.add_product_configuration'] = new \Sylius\Bundle\CoreBundle\Form\Type\Action\AddProductConfigurationType(array(0 => 'sylius'), $this->get('sylius.repository.variant'));
    }
    protected function getSylius_Form_Type_PromotionAction_FixedDiscountConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_action.fixed_discount_configuration'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\Action\FixedDiscountConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionAction_PercentageDiscountConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_action.percentage_discount_configuration'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\Action\PercentageDiscountConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionAction_ShippingDiscountConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_action.shipping_discount_configuration'] = new \Sylius\Bundle\CoreBundle\Form\Type\Action\ShippingDiscountConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionActionChoiceService()
    {
        return $this->services['sylius.form.type.promotion_action_choice'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\ActionChoiceType(array('fixed_discount' => 'Fixed discount', 'percentage_discount' => 'Percentage discount', 'shipping_discount' => 'Shipping discount', 'add_product' => 'Add product'));
    }
    protected function getSylius_Form_Type_PromotionCouponService()
    {
        return $this->services['sylius.form.type.promotion_coupon'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\CouponType('Sylius\\Bundle\\PromotionsBundle\\Model\\Coupon', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionCouponGenerateInstructionService()
    {
        return $this->services['sylius.form.type.promotion_coupon_generate_instruction'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\CouponGenerateInstructionType('Sylius\\Bundle\\PromotionsBundle\\Generator\\Instruction', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionCouponToCodeService()
    {
        return $this->services['sylius.form.type.promotion_coupon_to_code'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\CouponToCodeType($this->get('sylius.repository.promotion_coupon'), $this->get('event_dispatcher'));
    }
    protected function getSylius_Form_Type_PromotionRuleService()
    {
        return $this->services['sylius.form.type.promotion_rule'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\RuleType('Sylius\\Bundle\\PromotionsBundle\\Model\\Rule', array(0 => 'sylius'), $this->get('sylius.registry.promotion_rule_checker'));
    }
    protected function getSylius_Form_Type_PromotionRule_ItemCountConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_rule.item_count_configuration'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\Rule\ItemCountConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionRule_ItemTotalConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_rule.item_total_configuration'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\Rule\ItemTotalConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionRule_NthOrderConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_rule.nth_order_configuration'] = new \Sylius\Bundle\CoreBundle\Form\Type\Rule\NthOrderConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionRule_ShippingCountryConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_rule.shipping_country_configuration'] = new \Sylius\Bundle\CoreBundle\Form\Type\Rule\ShippingCountryConfigurationType(array(0 => 'sylius'), 'Sylius\\Bundle\\AddressingBundle\\Model\\Country');
    }
    protected function getSylius_Form_Type_PromotionRule_TaxonomyConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_rule.taxonomy_configuration'] = new \Sylius\Bundle\CoreBundle\Form\Type\Rule\TaxonomyConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionRule_UserLoyalityConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_rule.user_loyality_configuration'] = new \Sylius\Bundle\CoreBundle\Form\Type\Rule\UserLoyalityConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionRuleChoiceService()
    {
        return $this->services['sylius.form.type.promotion_rule_choice'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\RuleChoiceType(array('item_total' => 'Item total', 'item_count' => 'Item count', 'nth_order' => 'Nth order', 'user_loyality' => 'User loyality', 'shipping_country' => 'Shipping country', 'taxonomy' => 'Taxonomy'));
    }
    protected function getSylius_Form_Type_PropertyService()
    {
        return $this->services['sylius.form.type.property'] = new \Sylius\Bundle\ProductBundle\Form\Type\PropertyType('Sylius\\Bundle\\ProductBundle\\Model\\Property', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PropertyChoiceService()
    {
        return $this->services['sylius.form.type.property_choice'] = new \Sylius\Bundle\ProductBundle\Form\Type\PropertyEntityChoiceType('Sylius\\Bundle\\ProductBundle\\Model\\Property');
    }
    protected function getSylius_Form_Type_PrototypeService()
    {
        return $this->services['sylius.form.type.prototype'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\PrototypeType('Sylius\\Bundle\\VariableProductBundle\\Model\\Prototype', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ProvinceService()
    {
        return $this->services['sylius.form.type.province'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ProvinceType('Sylius\\Bundle\\AddressingBundle\\Model\\Province', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ProvinceChoiceService()
    {
        return $this->services['sylius.form.type.province_choice'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ProvinceChoiceType($this->get('sylius.repository.province'));
    }
    protected function getSylius_Form_Type_SetupService()
    {
        return $this->services['sylius.form.type.setup'] = new \Sylius\Bundle\InstallerBundle\Form\Type\SetupType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }
    protected function getSylius_Form_Type_ShipmentService()
    {
        return $this->services['sylius.form.type.shipment'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShipmentType('Sylius\\Bundle\\CoreBundle\\Model\\Shipment');
    }
    protected function getSylius_Form_Type_ShipmentFilterService()
    {
        return $this->services['sylius.form.type.shipment_filter'] = new \Sylius\Bundle\CoreBundle\Form\Type\Filter\ShipmentFilterType();
    }
    protected function getSylius_Form_Type_ShipmentTrackingService()
    {
        return $this->services['sylius.form.type.shipment_tracking'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShipmentTrackingType('Sylius\\Bundle\\CoreBundle\\Model\\Shipment');
    }
    protected function getSylius_Form_Type_ShippingCalculator_FlatRateConfigurationService()
    {
        return $this->services['sylius.form.type.shipping_calculator.flat_rate_configuration'] = new \Sylius\Bundle\ShippingBundle\Form\Type\Calculator\FlatRateConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ShippingCalculator_FlexibleRateConfigurationService()
    {
        return $this->services['sylius.form.type.shipping_calculator.flexible_rate_configuration'] = new \Sylius\Bundle\ShippingBundle\Form\Type\Calculator\FlexibleRateConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ShippingCalculator_PerItemRateConfigurationService()
    {
        return $this->services['sylius.form.type.shipping_calculator.per_item_rate_configuration'] = new \Sylius\Bundle\ShippingBundle\Form\Type\Calculator\PerItemRateConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ShippingCalculator_WeightRateConfigurationService()
    {
        return $this->services['sylius.form.type.shipping_calculator.weight_rate_configuration'] = new \Sylius\Bundle\ShippingBundle\Form\Type\Calculator\WeightRateConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ShippingCalculatorChoiceService()
    {
        return $this->services['sylius.form.type.shipping_calculator_choice'] = new \Sylius\Bundle\ShippingBundle\Form\Type\CalculatorChoiceType(array('flat_rate' => 'sylius.form.shipping_calculator.flat_rate_configuration.label', 'per_item_rate' => 'sylius.form.shipping_calculator.per_item_rate_configuration.label', 'flexible_rate' => 'sylius.form.shipping_calculator.flexible_rate_configuration.label', 'weight_rate' => 'sylius.form.shipping_calculator.weight_rate_configuration.label'));
    }
    protected function getSylius_Form_Type_ShippingCategoryService()
    {
        return $this->services['sylius.form.type.shipping_category'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShippingCategoryType('Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategory', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ShippingCategoryChoiceService()
    {
        return $this->services['sylius.form.type.shipping_category_choice'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShippingCategoryEntityType('Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategory');
    }
    protected function getSylius_Form_Type_ShippingMethodService()
    {
        return $this->services['sylius.form.type.shipping_method'] = new \Sylius\Bundle\CoreBundle\Form\Type\ShippingMethodType('Sylius\\Bundle\\CoreBundle\\Model\\ShippingMethod', array(0 => 'sylius'), $this->get('sylius.shipping_calculator_registry'), $this->get('sylius.shipping_rule_checker_registry'));
    }
    protected function getSylius_Form_Type_ShippingMethodChoiceService()
    {
        return $this->services['sylius.form.type.shipping_method_choice'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodChoiceType($this->get('sylius.shipping_methods_resolver'), $this->get('sylius.shipping_calculator_registry'));
    }
    protected function getSylius_Form_Type_ShippingRuleItemCountConfigurationService()
    {
        return $this->services['sylius.form.type.shipping_rule_item_count_configuration'] = new \Sylius\Bundle\ShippingBundle\Form\Type\Rule\ItemCountConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_TaxCalculatorChoiceService()
    {
        return $this->services['sylius.form.type.tax_calculator_choice'] = new \Sylius\Bundle\TaxationBundle\Form\Type\CalculatorChoiceType(array('default' => 'default'));
    }
    protected function getSylius_Form_Type_TaxCategoryService()
    {
        return $this->services['sylius.form.type.tax_category'] = new \Sylius\Bundle\TaxationBundle\Form\Type\TaxCategoryType('Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategory', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_TaxCategoryChoiceService()
    {
        return $this->services['sylius.form.type.tax_category_choice'] = new \Sylius\Bundle\TaxationBundle\Form\Type\TaxCategoryEntityType('Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategory');
    }
    protected function getSylius_Form_Type_TaxRateService()
    {
        return $this->services['sylius.form.type.tax_rate'] = new \Sylius\Bundle\CoreBundle\Form\Type\TaxRateType('Sylius\\Bundle\\CoreBundle\\Model\\TaxRate', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_TaxonService()
    {
        return $this->services['sylius.form.type.taxon'] = new \Sylius\Bundle\CoreBundle\Form\Type\TaxonType('Sylius\\Bundle\\CoreBundle\\Model\\Taxon', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_TaxonChoiceService()
    {
        return $this->services['sylius.form.type.taxon_choice'] = new \Sylius\Bundle\TaxonomiesBundle\Form\Type\TaxonChoiceType($this->get('sylius.repository.taxon'));
    }
    protected function getSylius_Form_Type_TaxonSelectionService()
    {
        return $this->services['sylius.form.type.taxon_selection'] = new \Sylius\Bundle\TaxonomiesBundle\Form\Type\TaxonSelectionType($this->get('sylius.repository.taxonomy'), $this->get('sylius.repository.taxon'));
    }
    protected function getSylius_Form_Type_TaxonomyService()
    {
        return $this->services['sylius.form.type.taxonomy'] = new \Sylius\Bundle\CoreBundle\Form\Type\TaxonomyType('Sylius\\Bundle\\CoreBundle\\Model\\Taxonomy', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_TaxonomyChoiceService()
    {
        return $this->services['sylius.form.type.taxonomy_choice'] = new \Sylius\Bundle\TaxonomiesBundle\Form\Type\TaxonomyEntityChoiceType('Sylius\\Bundle\\CoreBundle\\Model\\Taxonomy');
    }
    protected function getSylius_Form_Type_UserService()
    {
        return $this->services['sylius.form.type.user'] = new \Sylius\Bundle\CoreBundle\Form\Type\UserType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }
    protected function getSylius_Form_Type_UserFilterService()
    {
        return $this->services['sylius.form.type.user_filter'] = new \Sylius\Bundle\CoreBundle\Form\Type\Filter\UserFilterType();
    }
    protected function getSylius_Form_Type_VariantService()
    {
        return $this->services['sylius.form.type.variant'] = new \Sylius\Bundle\CoreBundle\Form\Type\VariantType('Sylius\\Bundle\\CoreBundle\\Model\\Variant', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_VariantChoiceService()
    {
        return $this->services['sylius.form.type.variant_choice'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\VariantChoiceType();
    }
    protected function getSylius_Form_Type_VariantMatchService()
    {
        return $this->services['sylius.form.type.variant_match'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\VariantMatchType();
    }
    protected function getSylius_Form_Type_ZoneService()
    {
        return $this->services['sylius.form.type.zone'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneType('Sylius\\Bundle\\AddressingBundle\\Model\\Zone', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ZoneChoiceService()
    {
        return $this->services['sylius.form.type.zone_choice'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneEntityChoiceType('Sylius\\Bundle\\AddressingBundle\\Model\\Zone');
    }
    protected function getSylius_Form_Type_ZoneMemberCollectionService()
    {
        return $this->services['sylius.form.type.zone_member_collection'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberCollectionType('Sylius\\Bundle\\AddressingBundle\\Model\\Zone');
    }
    protected function getSylius_Form_Type_ZoneMemberCountryService()
    {
        return $this->services['sylius.form.type.zone_member_country'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberCountryType('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberCountry', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ZoneMemberProvinceService()
    {
        return $this->services['sylius.form.type.zone_member_province'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberProvinceType('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberProvince', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ZoneMemberZoneService()
    {
        return $this->services['sylius.form.type.zone_member_zone'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberZoneType('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberZone', array(0 => 'sylius'));
    }
    protected function getSylius_Generator_OrderNumberService()
    {
        return $this->services['sylius.generator.order_number'] = new \Sylius\Bundle\OrderBundle\Generator\OrderNumberGenerator($this->get('sylius.repository.number'));
    }
    protected function getSylius_Generator_PromotionCouponService()
    {
        return $this->services['sylius.generator.promotion_coupon'] = new \Sylius\Bundle\PromotionsBundle\Generator\CouponGenerator($this->get('sylius.repository.promotion_coupon'), $this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getSylius_Generator_VariantService()
    {
        return $this->services['sylius.generator.variant'] = new \Sylius\Bundle\VariableProductBundle\Generator\VariantGenerator($this->get('validator'), $this->get('sylius.repository.variant'), $this->get('event_dispatcher'));
    }
    protected function getSylius_ImageUploaderService()
    {
        return $this->services['sylius.image_uploader'] = new \Sylius\Bundle\CoreBundle\Uploader\ImageUploader($this->get('knp_gaufrette.filesystem_map')->get('sylius_image'));
    }
    protected function getSylius_Installer_ScenarioService()
    {
        $this->services['sylius.installer.scenario'] = $instance = new \Sylius\Bundle\InstallerBundle\Process\InstallerScenario();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Installer_YamlPersisterService()
    {
        return $this->services['sylius.installer.yaml_persister'] = new \Sylius\Bundle\InstallerBundle\Persister\YamlPersister('C:/xampp/htdocs/bsylius/app/config/parameters.yml');
    }
    protected function getSylius_InventoryListenerService()
    {
        return $this->services['sylius.inventory_listener'] = new \Sylius\Bundle\InventoryBundle\EventListener\InventoryChangeListener($this->get('sylius.backorders_handler'));
    }
    protected function getSylius_InventoryOperator_DefaultService()
    {
        return $this->services['sylius.inventory_operator.default'] = new \Sylius\Bundle\InventoryBundle\Operator\InventoryOperator($this->get('sylius.backorders_handler'), $this->get('sylius.availability_checker.default'), $this->get('event_dispatcher'));
    }
    protected function getSylius_InventoryOperator_NoopService()
    {
        return $this->services['sylius.inventory_operator.noop'] = new \Sylius\Bundle\InventoryBundle\Operator\NoopInventoryOperator();
    }
    protected function getSylius_InventoryTwigService()
    {
        return $this->services['sylius.inventory_twig'] = new \Sylius\Bundle\InventoryBundle\Twig\SyliusInventoryExtension($this->get('sylius.availability_checker.default'));
    }
    protected function getSylius_InventoryUnitFactoryService()
    {
        return $this->services['sylius.inventory_unit_factory'] = new \Sylius\Bundle\InventoryBundle\Factory\InventoryUnitFactory($this->get('sylius.repository.inventory_unit'));
    }
    protected function getSylius_Listener_CompleteOrderService()
    {
        return $this->services['sylius.listener.complete_order'] = new \Sylius\Bundle\OrderBundle\EventListener\CompleteOrderListener();
    }
    protected function getSylius_Listener_CouponUsageService()
    {
        return $this->services['sylius.listener.coupon_usage'] = new \Sylius\Bundle\CoreBundle\EventListener\CouponUsageListener();
    }
    protected function getSylius_Listener_Frontend_AddressService()
    {
        return $this->services['sylius.listener.frontend.address'] = new \Sylius\Bundle\WebBundle\EventListener\Account\AddressListener($this->get('security.context'));
    }
    protected function getSylius_Listener_ImageUploadService()
    {
        return $this->services['sylius.listener.image_upload'] = new \Sylius\Bundle\CoreBundle\EventListener\ImageUploadListener($this->get('sylius.image_uploader'));
    }
    protected function getSylius_Listener_InsufficientStockExceptionService()
    {
        return $this->services['sylius.listener.insufficient_stock_exception'] = new \Sylius\Bundle\CoreBundle\EventListener\InsufficientStockExceptionListener($this->get('cmf_routing.router'), $this->get('session'), $this->get('translator.default'), 'sylius_cart_summary');
    }
    protected function getSylius_Listener_InventoryUnitService()
    {
        return $this->services['sylius.listener.inventory_unit'] = new \Sylius\Bundle\CoreBundle\EventListener\InventoryUnitListener();
    }
    protected function getSylius_Listener_LocaleService()
    {
        return $this->services['sylius.listener.locale'] = new \Sylius\Bundle\CoreBundle\EventListener\LocaleListener($this->get('sylius.settings.manager'));
    }
    protected function getSylius_Listener_OrderCurrencyService()
    {
        return $this->services['sylius.listener.order_currency'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderCurrencyListener($this->get('sylius.currency_context'));
    }
    protected function getSylius_Listener_OrderInventoryService()
    {
        return $this->services['sylius.listener.order_inventory'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderInventoryListener($this->get('sylius.order_processing.inventory_handler'));
    }
    protected function getSylius_Listener_OrderItemInventoryService()
    {
        return $this->services['sylius.listener.order_item_inventory'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderItemInventoryListener($this->get('event_dispatcher'));
    }
    protected function getSylius_Listener_OrderNumberService()
    {
        return $this->services['sylius.listener.order_number'] = new \Sylius\Bundle\OrderBundle\EventListener\OrderNumberListener($this->get('sylius.generator.order_number'), $this->get('sylius.repository.number'), $this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getSylius_Listener_OrderPaymentService()
    {
        return $this->services['sylius.listener.order_payment'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderPaymentListener($this->get('sylius.order_processing.payment_processor'), $this->get('sylius.repository.order'), $this->get('event_dispatcher'));
    }
    protected function getSylius_Listener_OrderPromotionService()
    {
        return $this->services['sylius.listener.order_promotion'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderPromotionListener($this->get('sylius.promotion_processor'), $this->get('session'), $this->get('translator.default'));
    }
    protected function getSylius_Listener_OrderShippingService()
    {
        return $this->services['sylius.listener.order_shipping'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderShippingListener($this->get('sylius.order_processing.shipment_factory'), $this->get('sylius.processor.shipment_processor'), $this->get('sylius.order_processing.shipping_processor'));
    }
    protected function getSylius_Listener_OrderStateService()
    {
        return $this->services['sylius.listener.order_state'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderStateListener($this->get('sylius.order_processing.state_resolver'));
    }
    protected function getSylius_Listener_OrderTaxationService()
    {
        return $this->services['sylius.listener.order_taxation'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderTaxationListener($this->get('sylius.order_processing.taxation_processor'));
    }
    protected function getSylius_Listener_OrderUserService()
    {
        return $this->services['sylius.listener.order_user'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderUserListener($this->get('security.context'));
    }
    protected function getSylius_Listener_PurchaseService()
    {
        return $this->services['sylius.listener.purchase'] = new \Sylius\Bundle\CoreBundle\EventListener\PurchaseListener($this->get('sylius.cart_provider.default'), $this->get('cmf_routing.router'), $this->get('session'), $this->get('translator.default'), 'sylius_checkout_payment');
    }
    protected function getSylius_Listener_RestrictedZoneService()
    {
        return $this->services['sylius.listener.restricted_zone'] = new \Sylius\Bundle\CoreBundle\EventListener\RestrictedZoneListener($this->get('sylius.checker.restricted_zone'), $this->get('sylius.cart_provider.default'), $this->get('doctrine.orm.default_entity_manager'), $this->get('session'), $this->get('translator.default'));
    }
    protected function getSylius_Listener_ShipmentService()
    {
        return $this->services['sylius.listener.shipment'] = new \Sylius\Bundle\CoreBundle\EventListener\ShipmentListener($this->get('sylius.order_processing.state_resolver'), $this->get('sylius.processor.shipment_processor'), $this->get('event_dispatcher'));
    }
    protected function getSylius_Listener_UserUpdateService()
    {
        return $this->services['sylius.listener.user_update'] = new \Sylius\Bundle\CoreBundle\EventListener\UserUpdateListener($this->get('fos_user.user_manager'));
    }
    protected function getSylius_MailerService()
    {
        return $this->services['sylius.mailer'] = new \Sylius\Bundle\CoreBundle\Mailer\TwigSwiftMailer($this->get('swiftmailer.mailer.default'), $this->get('twig'));
    }
    protected function getSylius_Mailer_CustomerWelcomeService()
    {
        return $this->services['sylius.mailer.customer_welcome'] = new \Sylius\Bundle\CoreBundle\Mailer\CustomerWelcomeMailer($this->get('sylius.mailer'), array('template' => 'SyliusWebBundle:Frontend/Email:customerWelcome.html.twig', 'from_email' => array('webmaster@example.com' => 'webmaster')));
    }
    protected function getSylius_Mailer_OrderConfirmationService()
    {
        return $this->services['sylius.mailer.order_confirmation'] = new \Sylius\Bundle\CoreBundle\Mailer\OrderConfirmationMailer($this->get('sylius.mailer'), array('template' => 'SyliusWebBundle:Frontend/Email:orderConfirmation.html.twig', 'from_email' => array('webmaster@example.com' => 'webmaster')));
    }
    protected function getSylius_Menu_Backend_MainService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sylius.menu.backend.main', 'request');
        }
        return $this->services['sylius.menu.backend.main'] = $this->scopedServices['request']['sylius.menu.backend.main'] = $this->get('sylius.menu_builder.backend')->createMainMenu($this->get('request'));
    }
    protected function getSylius_Menu_Backend_SidebarService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sylius.menu.backend.sidebar', 'request');
        }
        return $this->services['sylius.menu.backend.sidebar'] = $this->scopedServices['request']['sylius.menu.backend.sidebar'] = $this->get('sylius.menu_builder.backend')->createSidebarMenu($this->get('request'));
    }
    protected function getSylius_Menu_Frontend_AccountService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sylius.menu.frontend.account', 'request');
        }
        return $this->services['sylius.menu.frontend.account'] = $this->scopedServices['request']['sylius.menu.frontend.account'] = $this->get('sylius.menu_builder.frontend')->createAccountMenu($this->get('request'));
    }
    protected function getSylius_Menu_Frontend_CurrencyService()
    {
        return $this->services['sylius.menu.frontend.currency'] = $this->get('sylius.menu_builder.frontend')->createCurrencyMenu();
    }
    protected function getSylius_Menu_Frontend_MainService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sylius.menu.frontend.main', 'request');
        }
        return $this->services['sylius.menu.frontend.main'] = $this->scopedServices['request']['sylius.menu.frontend.main'] = $this->get('sylius.menu_builder.frontend')->createMainMenu($this->get('request'));
    }
    protected function getSylius_Menu_Frontend_SocialService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sylius.menu.frontend.social', 'request');
        }
        return $this->services['sylius.menu.frontend.social'] = $this->scopedServices['request']['sylius.menu.frontend.social'] = $this->get('sylius.menu_builder.frontend')->createSocialMenu($this->get('request'));
    }
    protected function getSylius_Menu_Frontend_TaxonomiesService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sylius.menu.frontend.taxonomies', 'request');
        }
        return $this->services['sylius.menu.frontend.taxonomies'] = $this->scopedServices['request']['sylius.menu.frontend.taxonomies'] = $this->get('sylius.menu_builder.frontend')->createTaxonomiesMenu($this->get('request'));
    }
    protected function getSylius_MenuBuilder_BackendService()
    {
        return $this->services['sylius.menu_builder.backend'] = new \Sylius\Bundle\WebBundle\Menu\BackendMenuBuilder($this->get('knp_menu.factory'), $this->get('security.context'), $this->get('translator.default'), $this->get('event_dispatcher'));
    }
    protected function getSylius_MenuBuilder_FrontendService()
    {
        $this->services['sylius.menu_builder.frontend'] = $instance = new \Sylius\Bundle\WebBundle\Menu\FrontendMenuBuilder($this->get('knp_menu.factory'), $this->get('security.context'), $this->get('translator.default'), $this->get('event_dispatcher'), $this->get('sylius.repository.exchange_rate'), $this->get('sylius.repository.taxonomy'), $this->get('sylius.cart_provider.default'), $this->get('sylius.twig.money'));
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        return $instance;
    }
    protected function getSylius_Oauth_UserProviderService()
    {
        return $this->services['sylius.oauth.user_provider'] = new \Sylius\Bundle\CoreBundle\OAuth\UserProvider($this->get('fos_user.user_manager'), array('amazon' => 'amazonId', 'facebook' => 'facebookId', 'google' => 'googleId'));
    }
    protected function getSylius_Order_PurgerService()
    {
        return $this->services['sylius.order.purger'] = new \Sylius\Bundle\CoreBundle\Purger\ExpiredOrdersPurger($this->get('doctrine.orm.default_entity_manager'), $this->get('sylius.repository.order'));
    }
    protected function getSylius_Order_ReleaserService()
    {
        return $this->services['sylius.order.releaser'] = new \Sylius\Bundle\CoreBundle\Releaser\ExpiredOrdersReleaser($this->get('doctrine.orm.default_entity_manager'), $this->get('sylius.repository.order'), $this->get('event_dispatcher'));
    }
    protected function getSylius_OrderProcessing_InventoryHandlerService()
    {
        return $this->services['sylius.order_processing.inventory_handler'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\InventoryHandler($this->get('sylius.inventory_operator.default'), $this->get('sylius.inventory_unit_factory'));
    }
    protected function getSylius_OrderProcessing_PaymentProcessorService()
    {
        return $this->services['sylius.order_processing.payment_processor'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\PaymentProcessor($this->get('sylius.repository.payment'));
    }
    protected function getSylius_OrderProcessing_ShipmentFactoryService()
    {
        return $this->services['sylius.order_processing.shipment_factory'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\ShipmentFactory($this->get('sylius.repository.shipment'));
    }
    protected function getSylius_OrderProcessing_ShippingProcessorService()
    {
        return $this->services['sylius.order_processing.shipping_processor'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\ShippingChargesProcessor($this->get('sylius.repository.adjustment'), $this->get('sylius.shipping_calculator'));
    }
    protected function getSylius_OrderProcessing_StateResolverService()
    {
        return $this->services['sylius.order_processing.state_resolver'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\StateResolver();
    }
    protected function getSylius_OrderProcessing_TaxationProcessorService()
    {
        return $this->services['sylius.order_processing.taxation_processor'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\TaxationProcessor($this->get('sylius.repository.adjustment'), $this->get('sylius.tax_calculator'), $this->get('sylius.tax_rate_resolver'), $this->get('sylius.zone_matcher'), $this->get('sylius.settings.manager')->loadSettings('taxation'));
    }
    protected function getSylius_Payum_Action_ExecuteSameRequestWithPaymentDetailsService()
    {
        return $this->services['sylius.payum.action.execute_same_request_with_payment_details'] = new \Sylius\Bundle\PayumBundle\Payum\Action\ExecuteSameRequestWithPaymentDetailsAction();
    }
    protected function getSylius_Payum_Action_ObtainCreditCardService()
    {
        $this->services['sylius.payum.action.obtain_credit_card'] = $instance = new \Sylius\Bundle\PayumBundle\Payum\Action\ObtainCreditCardAction($this->get('form.factory'), $this->get('templating'));
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        return $instance;
    }
    protected function getSylius_Payum_Action_OrderStatusService()
    {
        return $this->services['sylius.payum.action.order_status'] = new \Sylius\Bundle\PayumBundle\Payum\Action\OrderStatusAction();
    }
    protected function getSylius_Payum_Be2bill_Action_CaptureOrderUsingBe2billFormService()
    {
        $this->services['sylius.payum.be2bill.action.capture_order_using_be2bill_form'] = $instance = new \Sylius\Bundle\PayumBundle\Payum\Be2bill\Action\CaptureOrderUsingBe2billFormAction();
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        return $instance;
    }
    protected function getSylius_Payum_Be2bill_Action_CaptureOrderUsingCreditCardService()
    {
        $this->services['sylius.payum.be2bill.action.capture_order_using_credit_card'] = $instance = new \Sylius\Bundle\PayumBundle\Payum\Be2bill\Action\CaptureOrderUsingCreditCardAction();
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        return $instance;
    }
    protected function getSylius_Payum_Be2bill_Action_NotifyService()
    {
        return $this->services['sylius.payum.be2bill.action.notify'] = new \Sylius\Bundle\PayumBundle\Payum\Be2bill\Action\NotifyAction($this->get('payum.context.be2bill.api'), $this->get('sylius.repository.order'), $this->get('event_dispatcher'), $this->get('doctrine.orm.default_entity_manager'), 'id');
    }
    protected function getSylius_Payum_Dummy_Action_CaptureOrderService()
    {
        return $this->services['sylius.payum.dummy.action.capture_order'] = new \Sylius\Bundle\PayumBundle\Payum\Dummy\Action\CaptureOrderAction();
    }
    protected function getSylius_Payum_Dummy_Action_OrderStatusService()
    {
        return $this->services['sylius.payum.dummy.action.order_status'] = new \Sylius\Bundle\PayumBundle\Payum\Dummy\Action\OrderStatusAction();
    }
    protected function getSylius_Payum_Paypal_Action_CaptureOrderUsingExpressCheckoutService()
    {
        return $this->services['sylius.payum.paypal.action.capture_order_using_express_checkout'] = new \Sylius\Bundle\PayumBundle\Payum\Paypal\Action\CaptureOrderUsingExpressCheckoutAction($this->get('payum.security.token_factory'));
    }
    protected function getSylius_Payum_Paypal_Action_NotifyOrderService()
    {
        return $this->services['sylius.payum.paypal.action.notify_order'] = new \Sylius\Bundle\PayumBundle\Payum\Paypal\Action\NotifyOrderAction($this->get('event_dispatcher'), $this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getSylius_Payum_Stripe_Action_CaptureOrderUsingCreditCardService()
    {
        return $this->services['sylius.payum.stripe.action.capture_order_using_credit_card'] = new \Sylius\Bundle\PayumBundle\Payum\Stripe\Action\CaptureOrderUsingCreditCardAction();
    }
    protected function getSylius_PriceCalculator_DefaultService()
    {
        return $this->services['sylius.price_calculator.default'] = new \Sylius\Bundle\CoreBundle\Calculator\DefaultPriceCalculator();
    }
    protected function getSylius_Process_BuilderService()
    {
        $this->services['sylius.process.builder'] = $instance = new \Sylius\Bundle\FlowBundle\Process\Builder\ProcessBuilder($this);
        $instance->registerStep('sylius_checkout_security', $this->get('sylius.checkout_step.security'));
        $instance->registerStep('sylius_checkout_addressing', $this->get('sylius.checkout_step.addressing'));
        $instance->registerStep('sylius_checkout_shipping', $this->get('sylius.checkout_step.shipping'));
        $instance->registerStep('sylius_checkout_payment', $this->get('sylius.checkout_step.payment'));
        $instance->registerStep('sylius_checkout_purchase', $this->get('sylius.checkout_step.purchase'));
        $instance->registerStep('sylius_checkout_finalize', $this->get('sylius.checkout_step.finalize'));
        return $instance;
    }
    protected function getSylius_Process_ContextService()
    {
        return $this->services['sylius.process.context'] = new \Sylius\Bundle\FlowBundle\Process\Context\ProcessContext($this->get('sylius.process_storage.session'));
    }
    protected function getSylius_Process_CoordinatorService()
    {
        $this->services['sylius.process.coordinator'] = $instance = new \Sylius\Bundle\FlowBundle\Process\Coordinator\Coordinator($this->get('cmf_routing.router'), $this->get('sylius.process.builder'), $this->get('sylius.process.context'));
        $instance->registerScenario('sylius_installer', $this->get('sylius.installer.scenario'));
        $instance->registerScenario('sylius_checkout', $this->get('sylius.checkout_scenario'));
        return $instance;
    }
    protected function getSylius_Process_ValidatorService()
    {
        return $this->services['sylius.process.validator'] = new \Sylius\Bundle\FlowBundle\Validator\ProcessValidator('An error occurred.');
    }
    protected function getSylius_ProcessStorage_SessionService()
    {
        return $this->services['sylius.process_storage.session'] = new \Sylius\Bundle\FlowBundle\Storage\SessionStorage($this->get('session'));
    }
    protected function getSylius_ProcessStorage_Session_BagService()
    {
        return $this->services['sylius.process_storage.session.bag'] = new \Sylius\Bundle\FlowBundle\Storage\SessionFlowsBag();
    }
    protected function getSylius_Processor_ShipmentProcessorService()
    {
        return $this->services['sylius.processor.shipment_processor'] = new \Sylius\Bundle\ShippingBundle\Processor\ShipmentProcessor();
    }
    protected function getSylius_PromotionAction_AddProductService()
    {
        return $this->services['sylius.promotion_action.add_product'] = new \Sylius\Bundle\CoreBundle\Promotion\Action\AddProductAction($this->get('sylius.repository.order_item'), $this->get('sylius.repository.variant'));
    }
    protected function getSylius_PromotionAction_FixedDiscountService()
    {
        return $this->services['sylius.promotion_action.fixed_discount'] = new \Sylius\Bundle\CoreBundle\Promotion\Action\FixedDiscountAction($this->get('sylius.repository.adjustment'));
    }
    protected function getSylius_PromotionAction_PercentageDiscountService()
    {
        return $this->services['sylius.promotion_action.percentage_discount'] = new \Sylius\Bundle\CoreBundle\Promotion\Action\PercentageDiscountAction($this->get('sylius.repository.adjustment'));
    }
    protected function getSylius_PromotionAction_ShippingDiscountService()
    {
        return $this->services['sylius.promotion_action.shipping_discount'] = new \Sylius\Bundle\CoreBundle\Promotion\Action\ShippingDiscountAction($this->get('sylius.repository.adjustment'));
    }
    protected function getSylius_PromotionApplicatorService()
    {
        return $this->services['sylius.promotion_applicator'] = new \Sylius\Bundle\PromotionsBundle\Action\PromotionApplicator($this->get('sylius.registry.promotion_action'));
    }
    protected function getSylius_PromotionEligibilityCheckerService()
    {
        return $this->services['sylius.promotion_eligibility_checker'] = new \Sylius\Bundle\PromotionsBundle\Checker\PromotionEligibilityChecker($this->get('sylius.registry.promotion_rule_checker'), $this->get('event_dispatcher'));
    }
    protected function getSylius_PromotionProcessorService()
    {
        return $this->services['sylius.promotion_processor'] = new \Sylius\Bundle\PromotionsBundle\Processor\PromotionProcessor($this->get('sylius.repository.promotion'), $this->get('sylius.promotion_eligibility_checker'), $this->get('sylius.promotion_applicator'));
    }
    protected function getSylius_PromotionRuleChecker_ItemCountService()
    {
        return $this->services['sylius.promotion_rule_checker.item_count'] = new \Sylius\Bundle\PromotionsBundle\Checker\ItemCountRuleChecker();
    }
    protected function getSylius_PromotionRuleChecker_ItemTotalService()
    {
        return $this->services['sylius.promotion_rule_checker.item_total'] = new \Sylius\Bundle\PromotionsBundle\Checker\ItemTotalRuleChecker();
    }
    protected function getSylius_PromotionRuleChecker_NthOrderService()
    {
        return $this->services['sylius.promotion_rule_checker.nth_order'] = new \Sylius\Bundle\CoreBundle\Promotion\Checker\NthOrderRuleChecker();
    }
    protected function getSylius_PromotionRuleChecker_ShippingCountryService()
    {
        return $this->services['sylius.promotion_rule_checker.shipping_country'] = new \Sylius\Bundle\CoreBundle\Promotion\Checker\ShippingCountryRuleChecker();
    }
    protected function getSylius_PromotionRuleChecker_TaxonomyService()
    {
        return $this->services['sylius.promotion_rule_checker.taxonomy'] = new \Sylius\Bundle\CoreBundle\Promotion\Checker\TaxonomyRuleChecker();
    }
    protected function getSylius_PromotionRuleChecker_UserLoyalityService()
    {
        return $this->services['sylius.promotion_rule_checker.user_loyality'] = new \Sylius\Bundle\CoreBundle\Promotion\Checker\UserLoyalityRuleChecker();
    }
    protected function getSylius_RefreshCartListenerService()
    {
        return $this->services['sylius.refresh_cart_listener'] = new \Sylius\Bundle\CartBundle\EventListener\RefreshCartListener();
    }
    protected function getSylius_Registry_PromotionActionService()
    {
        $this->services['sylius.registry.promotion_action'] = $instance = new \Sylius\Bundle\PromotionsBundle\Action\Registry\PromotionActionRegistry();
        $instance->registerAction('fixed_discount', $this->get('sylius.promotion_action.fixed_discount'));
        $instance->registerAction('percentage_discount', $this->get('sylius.promotion_action.percentage_discount'));
        $instance->registerAction('shipping_discount', $this->get('sylius.promotion_action.shipping_discount'));
        $instance->registerAction('add_product', $this->get('sylius.promotion_action.add_product'));
        return $instance;
    }
    protected function getSylius_Registry_PromotionRuleCheckerService()
    {
        $this->services['sylius.registry.promotion_rule_checker'] = $instance = new \Sylius\Bundle\PromotionsBundle\Checker\Registry\RuleCheckerRegistry();
        $instance->registerChecker('item_total', $this->get('sylius.promotion_rule_checker.item_total'));
        $instance->registerChecker('item_count', $this->get('sylius.promotion_rule_checker.item_count'));
        $instance->registerChecker('nth_order', $this->get('sylius.promotion_rule_checker.nth_order'));
        $instance->registerChecker('user_loyality', $this->get('sylius.promotion_rule_checker.user_loyality'));
        $instance->registerChecker('shipping_country', $this->get('sylius.promotion_rule_checker.shipping_country'));
        $instance->registerChecker('taxonomy', $this->get('sylius.promotion_rule_checker.taxonomy'));
        return $instance;
    }
    protected function getSylius_Repository_AddressService()
    {
        return $this->services['sylius.repository.address'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\Address'));
    }
    protected function getSylius_Repository_AdjustmentService()
    {
        return $this->services['sylius.repository.adjustment'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\OrderBundle\\Model\\Adjustment'));
    }
    protected function getSylius_Repository_BlockService()
    {
        return $this->services['sylius.repository.block'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ODM\PHPCR\DocumentRepository($this->get('doctrine_phpcr.odm.default_document_manager'), $this->get('doctrine_phpcr.odm.default_document_manager')->getClassMetadata('Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\SimpleBlock'));
    }
    protected function getSylius_Repository_CountryService()
    {
        return $this->services['sylius.repository.country'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\Country'));
    }
    protected function getSylius_Repository_CreditCardService()
    {
        return $this->services['sylius.repository.credit_card'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCard'));
    }
    protected function getSylius_Repository_ExchangeRateService()
    {
        return $this->services['sylius.repository.exchange_rate'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\MoneyBundle\\Model\\ExchangeRate'));
    }
    protected function getSylius_Repository_GroupService()
    {
        return $this->services['sylius.repository.group'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Group'));
    }
    protected function getSylius_Repository_InventoryUnitService()
    {
        return $this->services['sylius.repository.inventory_unit'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit'));
    }
    protected function getSylius_Repository_LocaleService()
    {
        return $this->services['sylius.repository.locale'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Locale'));
    }
    protected function getSylius_Repository_NumberService()
    {
        return $this->services['sylius.repository.number'] = new \Sylius\Bundle\OrderBundle\Doctrine\ORM\NumberRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\OrderBundle\\Model\\Number'));
    }
    protected function getSylius_Repository_OptionService()
    {
        return $this->services['sylius.repository.option'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\VariableProductBundle\\Model\\Option'));
    }
    protected function getSylius_Repository_OptionValueService()
    {
        return $this->services['sylius.repository.option_value'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\VariableProductBundle\\Model\\OptionValue'));
    }
    protected function getSylius_Repository_OrderService()
    {
        return $this->services['sylius.repository.order'] = new \Sylius\Bundle\CoreBundle\Repository\OrderRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Order'));
    }
    protected function getSylius_Repository_OrderItemService()
    {
        return $this->services['sylius.repository.order_item'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\OrderItem'));
    }
    protected function getSylius_Repository_PageService()
    {
        return $this->services['sylius.repository.page'] = new \Sylius\Bundle\CoreBundle\Repository\PageRepository($this->get('doctrine_phpcr.odm.default_document_manager'), $this->get('doctrine_phpcr.odm.default_document_manager')->getClassMetadata('Symfony\\Cmf\\Bundle\\ContentBundle\\Doctrine\\Phpcr\\StaticContent'));
    }
    protected function getSylius_Repository_ParameterService()
    {
        return $this->services['sylius.repository.parameter'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\SettingsBundle\\Model\\Parameter'));
    }
    protected function getSylius_Repository_PaymentService()
    {
        return $this->services['sylius.repository.payment'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PaymentsBundle\\Model\\Payment'));
    }
    protected function getSylius_Repository_PaymentMethodService()
    {
        return $this->services['sylius.repository.payment_method'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethod'));
    }
    protected function getSylius_Repository_PaymentSecurityTokenService()
    {
        return $this->services['sylius.repository.payment_security_token'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken'));
    }
    protected function getSylius_Repository_ProductService()
    {
        return $this->services['sylius.repository.product'] = new \Sylius\Bundle\CoreBundle\Repository\ProductRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Product'));
    }
    protected function getSylius_Repository_ProductPropertyService()
    {
        return $this->services['sylius.repository.product_property'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\ProductBundle\\Model\\ProductProperty'));
    }
    protected function getSylius_Repository_PromotionService()
    {
        return $this->services['sylius.repository.promotion'] = new \Sylius\Bundle\PromotionsBundle\Doctrine\ORM\PromotionRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PromotionsBundle\\Model\\Promotion'));
    }
    protected function getSylius_Repository_PromotionActionService()
    {
        return $this->services['sylius.repository.promotion_action'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PromotionsBundle\\Model\\Action'));
    }
    protected function getSylius_Repository_PromotionCouponService()
    {
        return $this->services['sylius.repository.promotion_coupon'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PromotionsBundle\\Model\\Coupon'));
    }
    protected function getSylius_Repository_PromotionRuleService()
    {
        return $this->services['sylius.repository.promotion_rule'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PromotionsBundle\\Model\\Rule'));
    }
    protected function getSylius_Repository_PromotionSubjectService()
    {
        return $this->services['sylius.repository.promotion_subject'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Order'));
    }
    protected function getSylius_Repository_PropertyService()
    {
        return $this->services['sylius.repository.property'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\ProductBundle\\Model\\Property'));
    }
    protected function getSylius_Repository_PrototypeService()
    {
        return $this->services['sylius.repository.prototype'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\VariableProductBundle\\Model\\Prototype'));
    }
    protected function getSylius_Repository_ProvinceService()
    {
        return $this->services['sylius.repository.province'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\Province'));
    }
    protected function getSylius_Repository_ShipmentService()
    {
        return $this->services['sylius.repository.shipment'] = new \Sylius\Bundle\CoreBundle\Repository\ShipmentRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Shipment'));
    }
    protected function getSylius_Repository_ShipmentItemService()
    {
        return $this->services['sylius.repository.shipment_item'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit'));
    }
    protected function getSylius_Repository_ShippingCategoryService()
    {
        return $this->services['sylius.repository.shipping_category'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategory'));
    }
    protected function getSylius_Repository_ShippingMethodService()
    {
        return $this->services['sylius.repository.shipping_method'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\ShippingMethod'));
    }
    protected function getSylius_Repository_ShippingMethodRuleService()
    {
        return $this->services['sylius.repository.shipping_method_rule'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\ShippingBundle\\Model\\Rule'));
    }
    protected function getSylius_Repository_StockableService()
    {
        return $this->services['sylius.repository.stockable'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Variant'));
    }
    protected function getSylius_Repository_TaxCategoryService()
    {
        return $this->services['sylius.repository.tax_category'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategory'));
    }
    protected function getSylius_Repository_TaxRateService()
    {
        return $this->services['sylius.repository.tax_rate'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\TaxRate'));
    }
    protected function getSylius_Repository_TaxonService()
    {
        return $this->services['sylius.repository.taxon'] = new \Sylius\Bundle\TaxonomiesBundle\Doctrine\ORM\TaxonRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Taxon'));
    }
    protected function getSylius_Repository_TaxonomyService()
    {
        return $this->services['sylius.repository.taxonomy'] = new \Sylius\Bundle\TaxonomiesBundle\Doctrine\ORM\TaxonomyRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Taxonomy'));
    }
    protected function getSylius_Repository_UserService()
    {
        return $this->services['sylius.repository.user'] = new \Sylius\Bundle\CoreBundle\Repository\UserRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\User'));
    }
    protected function getSylius_Repository_VariantService()
    {
        return $this->services['sylius.repository.variant'] = new \Sylius\Bundle\CoreBundle\Repository\VariantRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Variant'));
    }
    protected function getSylius_Repository_VariantImageService()
    {
        return $this->services['sylius.repository.variant_image'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\VariantImage'));
    }
    protected function getSylius_Repository_ZoneService()
    {
        return $this->services['sylius.repository.zone'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\Zone'));
    }
    protected function getSylius_Repository_ZoneMemberService()
    {
        return $this->services['sylius.repository.zone_member'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMember'));
    }
    protected function getSylius_Repository_ZoneMemberCountryService()
    {
        return $this->services['sylius.repository.zone_member_country'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberCountry'));
    }
    protected function getSylius_Repository_ZoneMemberProvinceService()
    {
        return $this->services['sylius.repository.zone_member_province'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberProvince'));
    }
    protected function getSylius_Repository_ZoneMemberZoneService()
    {
        return $this->services['sylius.repository.zone_member_zone'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberZone'));
    }
    protected function getSylius_RequirementsService()
    {
        $a = $this->get('translator.default');
        return $this->services['sylius.requirements'] = new \Sylius\Bundle\InstallerBundle\Requirement\SyliusRequirements(array(0 => new \Sylius\Bundle\InstallerBundle\Requirement\SettingsRequirements($a), 1 => new \Sylius\Bundle\InstallerBundle\Requirement\ExtensionsRequirements($a), 2 => new \Sylius\Bundle\InstallerBundle\Requirement\FilesystemRequirements($a, 'C:/xampp/htdocs/bsylius/app')));
    }
    protected function getSylius_Settings_FormFactoryService()
    {
        return $this->services['sylius.settings.form_factory'] = new \Sylius\Bundle\SettingsBundle\Form\Factory\SettingsFormFactory($this->get('sylius.settings.schema_registry'), $this->get('form.factory'));
    }
    protected function getSylius_Settings_ManagerService()
    {
        return $this->services['sylius.settings.manager'] = new \Sylius\Bundle\SettingsBundle\Manager\SettingsManager($this->get('sylius.settings.schema_registry'), $this->get('doctrine.orm.default_entity_manager'), $this->get('sylius.repository.parameter'), $this->get('doctrine_cache.providers.sylius_settings'), $this->get('validator'));
    }
    protected function getSylius_Settings_SchemaRegistryService()
    {
        $this->services['sylius.settings.schema_registry'] = $instance = new \Sylius\Bundle\SettingsBundle\Schema\SchemaRegistry();
        $instance->registerSchema('general', $this->get('sylius.settings_schema.general'));
        $instance->registerSchema('taxation', $this->get('sylius.settings_schema.taxation'));
        return $instance;
    }
    protected function getSylius_Settings_TwigService()
    {
        return $this->services['sylius.settings.twig'] = new \Sylius\Bundle\SettingsBundle\Twig\SyliusSettingsExtension($this->get('sylius.settings.manager'));
    }
    protected function getSylius_SettingsSchema_GeneralService()
    {
        return $this->services['sylius.settings_schema.general'] = new \Sylius\Bundle\CoreBundle\Settings\GeneralSettingsSchema(array('currency' => 'EUR', 'locale' => 'en'));
    }
    protected function getSylius_SettingsSchema_TaxationService()
    {
        return $this->services['sylius.settings_schema.taxation'] = new \Sylius\Bundle\CoreBundle\Settings\TaxationSettingsSchema($this->get('sylius.repository.zone'));
    }
    protected function getSylius_ShippingCalculatorService()
    {
        return $this->services['sylius.shipping_calculator'] = new \Sylius\Bundle\ShippingBundle\Calculator\DelegatingCalculator($this->get('sylius.shipping_calculator_registry'));
    }
    protected function getSylius_ShippingCalculator_FlexibleRateService()
    {
        return $this->services['sylius.shipping_calculator.flexible_rate'] = new \Sylius\Bundle\ShippingBundle\Calculator\FlexibleRateCalculator();
    }
    protected function getSylius_ShippingCalculator_PerItemRateService()
    {
        return $this->services['sylius.shipping_calculator.per_item_rate'] = new \Sylius\Bundle\ShippingBundle\Calculator\PerItemRateCalculator();
    }
    protected function getSylius_ShippingCalculator_WeightRateService()
    {
        return $this->services['sylius.shipping_calculator.weight_rate'] = new \Sylius\Bundle\ShippingBundle\Calculator\WeightRateCalculator();
    }
    protected function getSylius_ShippingCalculatorRegistryService()
    {
        $this->services['sylius.shipping_calculator_registry'] = $instance = new \Sylius\Bundle\ShippingBundle\Calculator\Registry\CalculatorRegistry();
        $instance->registerCalculator('flat_rate', $this->get('sylius.shipping_shipping_calculator.flat_rate'));
        $instance->registerCalculator('per_item_rate', $this->get('sylius.shipping_calculator.per_item_rate'));
        $instance->registerCalculator('flexible_rate', $this->get('sylius.shipping_calculator.flexible_rate'));
        $instance->registerCalculator('weight_rate', $this->get('sylius.shipping_calculator.weight_rate'));
        return $instance;
    }
    protected function getSylius_ShippingEligibilityCheckerService()
    {
        return $this->services['sylius.shipping_eligibility_checker'] = new \Sylius\Bundle\ShippingBundle\Checker\ShippingMethodEligibilityChecker($this->get('sylius.shipping_rule_checker_registry'));
    }
    protected function getSylius_ShippingMethodsResolverService()
    {
        return $this->services['sylius.shipping_methods_resolver'] = new \Sylius\Bundle\ShippingBundle\Resolver\MethodsResolver($this->get('sylius.repository.shipping_method'), $this->get('sylius.shipping_eligibility_checker'));
    }
    protected function getSylius_ShippingRuleChecker_ItemCountService()
    {
        return $this->services['sylius.shipping_rule_checker.item_count'] = new \Sylius\Bundle\ShippingBundle\Checker\ItemCountRuleChecker();
    }
    protected function getSylius_ShippingRuleCheckerRegistryService()
    {
        $this->services['sylius.shipping_rule_checker_registry'] = $instance = new \Sylius\Bundle\ShippingBundle\Checker\Registry\RuleCheckerRegistry();
        $instance->registerChecker('item_count', $this->get('sylius.shipping_rule_checker.item_count'));
        return $instance;
    }
    protected function getSylius_ShippingShippingCalculator_FlatRateService()
    {
        return $this->services['sylius.shipping_shipping_calculator.flat_rate'] = new \Sylius\Bundle\ShippingBundle\Calculator\FlatRateCalculator();
    }
    protected function getSylius_TaxCalculatorService()
    {
        $this->services['sylius.tax_calculator'] = $instance = new \Sylius\Bundle\TaxationBundle\Calculator\DelegatingCalculator();
        $instance->registerCalculator('default', $this->get('sylius.tax_calculator.default'));
        return $instance;
    }
    protected function getSylius_TaxCalculator_DefaultService()
    {
        return $this->services['sylius.tax_calculator.default'] = new \Sylius\Bundle\TaxationBundle\Calculator\DefaultCalculator();
    }
    protected function getSylius_TaxRateResolverService()
    {
        return $this->services['sylius.tax_rate_resolver'] = new \Sylius\Bundle\TaxationBundle\Resolver\TaxRateResolver($this->get('sylius.repository.tax_rate'));
    }
    protected function getSylius_Twig_MoneyService()
    {
        return $this->services['sylius.twig.money'] = new \Sylius\Bundle\CoreBundle\Twig\SyliusMoneyExtension($this->get('sylius.price_calculator.default'), $this->get('sylius.currency_context'), $this->get('sylius.currency_converter'), 'en');
    }
    protected function getSylius_Twig_ResourceService()
    {
        return $this->services['sylius.twig.resource'] = new \Sylius\Bundle\ResourceBundle\Twig\SyliusResourceExtension($this, 'SyliusResourceBundle:Twig:paginate.html.twig', 'SyliusResourceBundle:Twig:sorting.html.twig');
    }
    protected function getSylius_Twig_RestrictedZoneExtensionService()
    {
        return $this->services['sylius.twig.restricted_zone_extension'] = new \Sylius\Bundle\CoreBundle\Twig\SyliusRestrictedZoneExtension($this->get('sylius.checker.restricted_zone'));
    }
    protected function getSylius_Twig_TextExtensionService()
    {
        return $this->services['sylius.twig.text_extension'] = new \Twig_Extensions_Extension_Text();
    }
    protected function getSylius_User_Registration_Form_TypeService()
    {
        return $this->services['sylius.user.registration.form.type'] = new \Sylius\Bundle\CoreBundle\Form\Type\RegistrationFormType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }
    protected function getSylius_Validator_InStockService()
    {
        return $this->services['sylius.validator.in_stock'] = new \Sylius\Bundle\InventoryBundle\Validator\Constraints\InStockValidator($this->get('sylius.availability_checker.default'));
    }
    protected function getSylius_Validator_Product_UniqueService()
    {
        return $this->services['sylius.validator.product.unique'] = new \Sylius\Bundle\ProductBundle\Validator\ProductUniqueValidator($this->get('sylius.repository.product'));
    }
    protected function getSylius_Validator_ShippableAddressService()
    {
        return $this->services['sylius.validator.shippable_address'] = new \Sylius\Bundle\AddressingBundle\Validator\Constraints\ShippableAddressConstraintValidator();
    }
    protected function getSylius_Validator_Variant_CombinationService()
    {
        return $this->services['sylius.validator.variant.combination'] = new \Sylius\Bundle\VariableProductBundle\Validator\VariantCombinationValidator();
    }
    protected function getSylius_Validator_Variant_UniqueService()
    {
        return $this->services['sylius.validator.variant.unique'] = new \Sylius\Bundle\VariableProductBundle\Validator\VariantUniqueValidator($this->get('sylius.repository.variant'));
    }
    protected function getSylius_ZoneMatcherService()
    {
        return $this->services['sylius.zone_matcher'] = new \Sylius\Bundle\AddressingBundle\Matcher\ZoneMatcher($this->get('sylius.repository.zone'));
    }
    protected function getSyliusEntityToIdentifierService()
    {
        return $this->services['sylius_entity_to_identifier'] = new \Sylius\Bundle\ResourceBundle\Form\Type\ObjectToIdentifierType($this->get('doctrine'), 'sylius_entity_to_identifier');
    }
    protected function getSyliusPhpcrDocumentToIdentifierService()
    {
        return $this->services['sylius_phpcr_document_to_identifier'] = new \Sylius\Bundle\ResourceBundle\Form\Type\ObjectToIdentifierType($this->get('doctrine_phpcr'), 'sylius_phpcr_document_to_identifier');
    }
    protected function getTemplatingService()
    {
        $this->services['templating'] = $instance = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
        $instance->setDefaultEscapingStrategy(array(0 => $instance, 1 => 'guessDefaultEscapingStrategy'));
        return $instance;
    }
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('fragment.handler'));
    }
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }
        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, 'C:/xampp/htdocs/bsylius/app', 'UTF-8');
    }
    protected function getTemplating_Helper_FormService()
    {
        $a = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('templating.globals'));
        $a->setCharset('UTF-8');
        $a->setHelpers(array('sonata_block' => 'sonata.block.templating.helper', 'cmf_block' => 'cmf_block.templating.helper.block', 'slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'imagine' => 'liip_imagine.templating.helper', 'jms_serializer' => 'jms_serializer.templating.helper.serializer', 'oauth' => 'hwi_oauth.templating.helper.oauth'));
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($a, array(0 => 'FrameworkBundle:Form')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }
    protected function getTemplating_Helper_LogoutUrlService()
    {
        $this->services['templating.helper.logout_url'] = $instance = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('cmf_routing.router'));
        $instance->registerListener('administration', '/administration/logout', 'logout', '_csrf_token', NULL);
        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);
        return $instance;
    }
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('cmf_routing.router'));
    }
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator.default'));
    }
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();
        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));
        return $instance;
    }
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');
        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();
        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        return $instance;
    }
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \JMS\TranslationBundle\Translation\Loader\Symfony\XliffLoader();
    }
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));
        return $instance;
    }
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini')), array('cache_dir' => 'C:/xampp/htdocs/bsylius/app/cache/prod/translations', 'debug' => false));
        $instance->setFallbackLocales(array(0 => 'en'));
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.af.xlf', 'af', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cy.xlf', 'cy', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.no.xlf', 'no', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sq.xlf', 'sq', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.th.xlf', 'th', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tr.xlf', 'tr', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.uk.xlf', 'uk', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.vi.xlf', 'vi', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_TW.xlf', 'zh_TW', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lv.xlf', 'lv', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.uk.xlf', 'uk', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.ar.xlf', 'ar', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.bg.xlf', 'bg', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.ca.xlf', 'ca', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.cs.xlf', 'cs', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.da.xlf', 'da', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.de.xlf', 'de', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.el.xlf', 'el', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.en.xlf', 'en', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.es.xlf', 'es', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.fa.xlf', 'fa', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.fr.xlf', 'fr', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.gl.xlf', 'gl', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.hr.xlf', 'hr', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.hu.xlf', 'hu', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.id.xlf', 'id', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.it.xlf', 'it', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.ja.xlf', 'ja', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.lb.xlf', 'lb', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.nl.xlf', 'nl', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.no.xlf', 'no', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.pl.xlf', 'pl', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.pt_BR.xlf', 'pt_BR', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.pt_PT.xlf', 'pt_PT', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.ro.xlf', 'ro', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.ru.xlf', 'ru', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.sk.xlf', 'sk', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.sl.xlf', 'sl', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.sr_Cyrl.xlf', 'sr_Cyrl', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.sr_Latn.xlf', 'sr_Latn', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.sv.xlf', 'sv', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.th.xlf', 'th', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.tr.xlf', 'tr', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.ua.xlf', 'ua', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.vi.xlf', 'vi', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.zh_CN.xlf', 'zh_CN', 'security');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.af.yml', 'af', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.ar.yml', 'ar', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.bg.yml', 'bg', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.ca.yml', 'ca', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.cs.yml', 'cs', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.da.yml', 'da', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.el.yml', 'el', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.et.yml', 'et', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.fi.yml', 'fi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.he.yml', 'he', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.hr.yml', 'hr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.hu.yml', 'hu', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.id.yml', 'id', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.it.yml', 'it', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.ja.yml', 'ja', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.ko.yml', 'ko', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.no.yml', 'no', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.pt.yml', 'pt', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.ro.yml', 'ro', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.sk.yml', 'sk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.sl.yml', 'sl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.sr.yml', 'sr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.sv.yml', 'sv', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.th.yml', 'th', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.tr.yml', 'tr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.uk.yml', 'uk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.vi.yml', 'vi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.zh.yml', 'zh', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.af.yml', 'af', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.ar.yml', 'ar', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.bg.yml', 'bg', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.ca.yml', 'ca', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.cs.yml', 'cs', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.da.yml', 'da', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.de.yml', 'de', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.el.yml', 'el', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.en.yml', 'en', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.es.yml', 'es', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.et.yml', 'et', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.fi.yml', 'fi', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.fr.yml', 'fr', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.he.yml', 'he', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.hr.yml', 'hr', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.hu.yml', 'hu', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.id.yml', 'id', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.it.yml', 'it', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.ja.yml', 'ja', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.ko.yml', 'ko', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.nl.yml', 'nl', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.no.yml', 'no', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.pl.yml', 'pl', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.pt.yml', 'pt', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.ro.yml', 'ro', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.ru.yml', 'ru', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.sk.yml', 'sk', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.sl.yml', 'sl', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.sr.yml', 'sr', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.sv.yml', 'sv', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.th.yml', 'th', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.tr.yml', 'tr', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.uk.yml', 'uk', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.vi.yml', 'vi', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.zh.yml', 'zh', 'requirements');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.af.yml', 'af', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.ar.yml', 'ar', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.bg.yml', 'bg', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.ca.yml', 'ca', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.cs.yml', 'cs', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.da.yml', 'da', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.el.yml', 'el', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.et.yml', 'et', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.fi.yml', 'fi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.he.yml', 'he', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.hr.yml', 'hr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.hu.yml', 'hu', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.id.yml', 'id', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.it.yml', 'it', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.ja.yml', 'ja', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.ko.yml', 'ko', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.no.yml', 'no', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.pt.yml', 'pt', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.ro.yml', 'ro', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.sk.yml', 'sk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.sl.yml', 'sl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.sr.yml', 'sr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.sv.yml', 'sv', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.th.yml', 'th', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.tr.yml', 'tr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.uk.yml', 'uk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.vi.yml', 'vi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.zh.yml', 'zh', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.af.yml', 'af', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.ar.yml', 'ar', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.ca.yml', 'ca', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.el.yml', 'el', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.et.yml', 'et', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.he.yml', 'he', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.id.yml', 'id', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.ko.yml', 'ko', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.no.yml', 'no', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.ro.yml', 'ro', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.sr.yml', 'sr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.th.yml', 'th', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.vi.yml', 'vi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.zh.yml', 'zh', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.af.yml', 'af', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.ar.yml', 'ar', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.bg.yml', 'bg', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.ca.yml', 'ca', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.cs.yml', 'cs', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.da.yml', 'da', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.de.yml', 'de', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.el.yml', 'el', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.en.yml', 'en', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.es.yml', 'es', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.et.yml', 'et', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.fi.yml', 'fi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.fr.yml', 'fr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.he.yml', 'he', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.hr.yml', 'hr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.hu.yml', 'hu', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.id.yml', 'id', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.it.yml', 'it', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.ja.yml', 'ja', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.ko.yml', 'ko', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.nl.yml', 'nl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.no.yml', 'no', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.pl.yml', 'pl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.pt.yml', 'pt', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.ro.yml', 'ro', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.ru.yml', 'ru', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.sk.yml', 'sk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.sl.yml', 'sl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.sr.yml', 'sr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.sv.yml', 'sv', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.th.yml', 'th', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.tr.yml', 'tr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.uk.yml', 'uk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.vi.yml', 'vi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.zh.yml', 'zh', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.af.yml', 'af', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.ar.yml', 'ar', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.bg.yml', 'bg', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.ca.yml', 'ca', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.cs.yml', 'cs', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.da.yml', 'da', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.de.yml', 'de', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.el.yml', 'el', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.en.yml', 'en', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.es.yml', 'es', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.et.yml', 'et', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.fi.yml', 'fi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.fr.yml', 'fr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.he.yml', 'he', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.hr.yml', 'hr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.hu.yml', 'hu', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.id.yml', 'id', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.it.yml', 'it', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.ja.yml', 'ja', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.ko.yml', 'ko', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.nl.yml', 'nl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.no.yml', 'no', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.pl.yml', 'pl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.pt.yml', 'pt', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.ro.yml', 'ro', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.ru.yml', 'ru', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.sk.yml', 'sk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.sl.yml', 'sl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.sr.yml', 'sr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.sv.yml', 'sv', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.th.yml', 'th', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.tr.yml', 'tr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.uk.yml', 'uk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.vi.yml', 'vi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/translations\\flashes.zh.yml', 'zh', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.af.yml', 'af', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.ar.yml', 'ar', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.bg.yml', 'bg', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.ca.yml', 'ca', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.cs.yml', 'cs', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.da.yml', 'da', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.el.yml', 'el', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.et.yml', 'et', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.fi.yml', 'fi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.he.yml', 'he', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.hr.yml', 'hr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.hu.yml', 'hu', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.id.yml', 'id', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.it.yml', 'it', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.ja.yml', 'ja', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.ko.yml', 'ko', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.no.yml', 'no', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.pt.yml', 'pt', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.ro.yml', 'ro', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.sk.yml', 'sk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.sl.yml', 'sl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.sr.yml', 'sr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.sv.yml', 'sv', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.th.yml', 'th', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.tr.yml', 'tr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.uk.yml', 'uk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.vi.yml', 'vi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.zh.yml', 'zh', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.af.yml', 'af', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.ar.yml', 'ar', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.ca.yml', 'ca', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.el.yml', 'el', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.et.yml', 'et', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.he.yml', 'he', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.id.yml', 'id', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.ko.yml', 'ko', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.no.yml', 'no', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.ro.yml', 'ro', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.sr.yml', 'sr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.th.yml', 'th', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.vi.yml', 'vi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.zh.yml', 'zh', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.af.yml', 'af', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.ar.yml', 'ar', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.bg.yml', 'bg', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.ca.yml', 'ca', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.cs.yml', 'cs', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.da.yml', 'da', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.el.yml', 'el', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.et.yml', 'et', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.fi.yml', 'fi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.he.yml', 'he', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.hr.yml', 'hr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.hu.yml', 'hu', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.id.yml', 'id', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.it.yml', 'it', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.ja.yml', 'ja', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.ko.yml', 'ko', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.no.yml', 'no', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.pt.yml', 'pt', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.ro.yml', 'ro', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.sk.yml', 'sk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.sl.yml', 'sl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.sr.yml', 'sr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.sv.yml', 'sv', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.th.yml', 'th', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.tr.yml', 'tr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.uk.yml', 'uk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.vi.yml', 'vi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\messages.zh.yml', 'zh', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.af.yml', 'af', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.ar.yml', 'ar', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.ca.yml', 'ca', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.el.yml', 'el', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.et.yml', 'et', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.he.yml', 'he', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.id.yml', 'id', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.ko.yml', 'ko', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.no.yml', 'no', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.ro.yml', 'ro', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.sr.yml', 'sr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.th.yml', 'th', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.vi.yml', 'vi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/translations\\validators.zh.yml', 'zh', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.af.yml', 'af', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.ar.yml', 'ar', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.bg.yml', 'bg', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.ca.yml', 'ca', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.cs.yml', 'cs', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.da.yml', 'da', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.el.yml', 'el', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.et.yml', 'et', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.fi.yml', 'fi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.he.yml', 'he', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.hr.yml', 'hr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.hu.yml', 'hu', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.id.yml', 'id', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.it.yml', 'it', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.ja.yml', 'ja', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.ko.yml', 'ko', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.no.yml', 'no', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.pt.yml', 'pt', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.ro.yml', 'ro', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.sk.yml', 'sk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.sl.yml', 'sl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.sr.yml', 'sr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.sv.yml', 'sv', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.th.yml', 'th', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.tr.yml', 'tr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.uk.yml', 'uk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.vi.yml', 'vi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.zh.yml', 'zh', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.af.yml', 'af', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.ar.yml', 'ar', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.ca.yml', 'ca', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.el.yml', 'el', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.et.yml', 'et', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.he.yml', 'he', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.id.yml', 'id', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.ko.yml', 'ko', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.no.yml', 'no', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.ro.yml', 'ro', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.sr.yml', 'sr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.th.yml', 'th', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.vi.yml', 'vi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.zh.yml', 'zh', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.af.yml', 'af', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.ar.yml', 'ar', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.bg.yml', 'bg', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.ca.yml', 'ca', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.cs.yml', 'cs', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.da.yml', 'da', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.de.yml', 'de', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.el.yml', 'el', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.en.yml', 'en', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.es.yml', 'es', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.et.yml', 'et', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.fi.yml', 'fi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.fr.yml', 'fr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.he.yml', 'he', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.hr.yml', 'hr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.hu.yml', 'hu', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.id.yml', 'id', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.it.yml', 'it', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.ja.yml', 'ja', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.ko.yml', 'ko', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.nl.yml', 'nl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.no.yml', 'no', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.pl.yml', 'pl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.pt.yml', 'pt', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.ro.yml', 'ro', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.ru.yml', 'ru', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.sk.yml', 'sk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.sl.yml', 'sl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.sr.yml', 'sr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.sv.yml', 'sv', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.th.yml', 'th', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.tr.yml', 'tr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.uk.yml', 'uk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.vi.yml', 'vi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\flashes.zh.yml', 'zh', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.af.yml', 'af', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.ar.yml', 'ar', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.bg.yml', 'bg', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.ca.yml', 'ca', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.cs.yml', 'cs', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.da.yml', 'da', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.el.yml', 'el', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.et.yml', 'et', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.fi.yml', 'fi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.he.yml', 'he', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.hr.yml', 'hr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.hu.yml', 'hu', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.id.yml', 'id', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.it.yml', 'it', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.ja.yml', 'ja', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.ko.yml', 'ko', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.no.yml', 'no', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.pt.yml', 'pt', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.ro.yml', 'ro', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.sk.yml', 'sk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.sl.yml', 'sl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.sr.yml', 'sr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.sv.yml', 'sv', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.th.yml', 'th', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.tr.yml', 'tr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.uk.yml', 'uk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.vi.yml', 'vi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.zh.yml', 'zh', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.af.yml', 'af', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.ar.yml', 'ar', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.ca.yml', 'ca', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.el.yml', 'el', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.et.yml', 'et', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.he.yml', 'he', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.id.yml', 'id', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.ko.yml', 'ko', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.no.yml', 'no', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.ro.yml', 'ro', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.sr.yml', 'sr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.th.yml', 'th', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.vi.yml', 'vi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.zh.yml', 'zh', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.af.yml', 'af', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.ar.yml', 'ar', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.bg.yml', 'bg', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.ca.yml', 'ca', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.cs.yml', 'cs', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.da.yml', 'da', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.el.yml', 'el', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.et.yml', 'et', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.fi.yml', 'fi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.he.yml', 'he', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.hr.yml', 'hr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.hu.yml', 'hu', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.id.yml', 'id', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.it.yml', 'it', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.ja.yml', 'ja', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.ko.yml', 'ko', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.no.yml', 'no', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.pt.yml', 'pt', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.ro.yml', 'ro', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.sk.yml', 'sk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.sl.yml', 'sl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.sr.yml', 'sr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.sv.yml', 'sv', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.th.yml', 'th', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.tr.yml', 'tr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.uk.yml', 'uk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.vi.yml', 'vi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.zh.yml', 'zh', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.af.yml', 'af', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.ar.yml', 'ar', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.ca.yml', 'ca', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.el.yml', 'el', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.et.yml', 'et', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.he.yml', 'he', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.id.yml', 'id', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.ko.yml', 'ko', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.no.yml', 'no', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.ro.yml', 'ro', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.sr.yml', 'sr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.th.yml', 'th', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.vi.yml', 'vi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.zh.yml', 'zh', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.af.yml', 'af', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.ar.yml', 'ar', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.bg.yml', 'bg', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.ca.yml', 'ca', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.cs.yml', 'cs', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.da.yml', 'da', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.de.yml', 'de', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.el.yml', 'el', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.en.yml', 'en', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.es.yml', 'es', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.et.yml', 'et', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.fi.yml', 'fi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.fr.yml', 'fr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.he.yml', 'he', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.hr.yml', 'hr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.hu.yml', 'hu', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.id.yml', 'id', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.it.yml', 'it', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.ja.yml', 'ja', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.ko.yml', 'ko', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.nl.yml', 'nl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.no.yml', 'no', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.pl.yml', 'pl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.pt.yml', 'pt', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.ro.yml', 'ro', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.ru.yml', 'ru', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.sk.yml', 'sk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.sl.yml', 'sl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.sr.yml', 'sr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.sv.yml', 'sv', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.th.yml', 'th', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.tr.yml', 'tr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.uk.yml', 'uk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.vi.yml', 'vi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.zh.yml', 'zh', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.af.yml', 'af', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.ar.yml', 'ar', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.bg.yml', 'bg', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.ca.yml', 'ca', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.cs.yml', 'cs', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.da.yml', 'da', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.el.yml', 'el', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.et.yml', 'et', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.fi.yml', 'fi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.he.yml', 'he', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.hr.yml', 'hr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.hu.yml', 'hu', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.id.yml', 'id', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.it.yml', 'it', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.ja.yml', 'ja', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.ko.yml', 'ko', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.no.yml', 'no', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.pt.yml', 'pt', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.ro.yml', 'ro', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.sk.yml', 'sk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.sl.yml', 'sl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.sr.yml', 'sr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.sv.yml', 'sv', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.th.yml', 'th', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.tr.yml', 'tr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.uk.yml', 'uk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.vi.yml', 'vi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.zh.yml', 'zh', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.af.yml', 'af', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.ar.yml', 'ar', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.ca.yml', 'ca', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.el.yml', 'el', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.et.yml', 'et', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.he.yml', 'he', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.id.yml', 'id', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.ko.yml', 'ko', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.no.yml', 'no', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.ro.yml', 'ro', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.sr.yml', 'sr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.th.yml', 'th', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.vi.yml', 'vi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.zh.yml', 'zh', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.af.yml', 'af', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.ar.yml', 'ar', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.bg.yml', 'bg', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.ca.yml', 'ca', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.cs.yml', 'cs', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.da.yml', 'da', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.el.yml', 'el', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.et.yml', 'et', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.fa_IR.yml', 'fa_IR', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.fi.yml', 'fi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.he.yml', 'he', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.hr.yml', 'hr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.hu.yml', 'hu', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.id.yml', 'id', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.it.yml', 'it', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.ja.yml', 'ja', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.ko.yml', 'ko', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.no.yml', 'no', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.pt.yml', 'pt', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.ro.yml', 'ro', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.sk.yml', 'sk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.sl.yml', 'sl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.sr.yml', 'sr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.sv.yml', 'sv', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.th.yml', 'th', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.tr.yml', 'tr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.uk.yml', 'uk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.vi.yml', 'vi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.zh.yml', 'zh', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.af.yml', 'af', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.ar.yml', 'ar', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.ca.yml', 'ca', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.el.yml', 'el', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.et.yml', 'et', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.he.yml', 'he', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.id.yml', 'id', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.ko.yml', 'ko', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.no.yml', 'no', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.ro.yml', 'ro', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.sr.yml', 'sr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.th.yml', 'th', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.vi.yml', 'vi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.zh.yml', 'zh', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.af.yml', 'af', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.ar.yml', 'ar', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.bg.yml', 'bg', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.ca.yml', 'ca', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.cs.yml', 'cs', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.da.yml', 'da', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.de.yml', 'de', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.el.yml', 'el', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.en.yml', 'en', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.es.yml', 'es', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.et.yml', 'et', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.fi.yml', 'fi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.fr.yml', 'fr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.he.yml', 'he', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.hr.yml', 'hr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.hu.yml', 'hu', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.id.yml', 'id', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.it.yml', 'it', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.ja.yml', 'ja', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.ko.yml', 'ko', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.nl.yml', 'nl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.no.yml', 'no', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.pl.yml', 'pl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.pt.yml', 'pt', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.ro.yml', 'ro', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.ru.yml', 'ru', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.sk.yml', 'sk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.sl.yml', 'sl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.sr.yml', 'sr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.sv.yml', 'sv', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.th.yml', 'th', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.tr.yml', 'tr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.uk.yml', 'uk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.vi.yml', 'vi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/translations\\flashes.zh.yml', 'zh', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.af.yml', 'af', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.ar.yml', 'ar', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.bg.yml', 'bg', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.ca.yml', 'ca', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.cs.yml', 'cs', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.da.yml', 'da', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.el.yml', 'el', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.et.yml', 'et', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.fi.yml', 'fi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.he.yml', 'he', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.hr.yml', 'hr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.hu.yml', 'hu', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.id.yml', 'id', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.it.yml', 'it', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.ja.yml', 'ja', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.ko.yml', 'ko', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.no.yml', 'no', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.pt.yml', 'pt', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.ro.yml', 'ro', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.sk.yml', 'sk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.sl.yml', 'sl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.sr.yml', 'sr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.sv.yml', 'sv', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.th.yml', 'th', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.tr.yml', 'tr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.uk.yml', 'uk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.vi.yml', 'vi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.zh.yml', 'zh', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.af.yml', 'af', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.ar.yml', 'ar', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.ca.yml', 'ca', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.el.yml', 'el', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.et.yml', 'et', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.he.yml', 'he', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.id.yml', 'id', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.ko.yml', 'ko', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.no.yml', 'no', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.ro.yml', 'ro', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.sr.yml', 'sr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.th.yml', 'th', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.vi.yml', 'vi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.zh.yml', 'zh', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.af.yml', 'af', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.ar.yml', 'ar', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.bg.yml', 'bg', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.ca.yml', 'ca', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.cs.yml', 'cs', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.da.yml', 'da', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.el.yml', 'el', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.et.yml', 'et', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.fi.yml', 'fi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.he.yml', 'he', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.hr.yml', 'hr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.hu.yml', 'hu', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.id.yml', 'id', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.it.yml', 'it', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.ja.yml', 'ja', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.ko.yml', 'ko', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.no.yml', 'no', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.pt.yml', 'pt', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.ro.yml', 'ro', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.sk.yml', 'sk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.sl.yml', 'sl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.sr.yml', 'sr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.sv.yml', 'sv', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.th.yml', 'th', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.tr.yml', 'tr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.uk.yml', 'uk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.vi.yml', 'vi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.zh.yml', 'zh', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.af.yml', 'af', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.ar.yml', 'ar', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.bg.yml', 'bg', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.ca.yml', 'ca', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.cs.yml', 'cs', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.da.yml', 'da', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.de.yml', 'de', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.el.yml', 'el', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.en.yml', 'en', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.es.yml', 'es', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.et.yml', 'et', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.fi.yml', 'fi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.fr.yml', 'fr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.he.yml', 'he', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.hr.yml', 'hr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.hu.yml', 'hu', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.id.yml', 'id', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.it.yml', 'it', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.ja.yml', 'ja', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.ko.yml', 'ko', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.nl.yml', 'nl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.no.yml', 'no', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.pl.yml', 'pl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.pt.yml', 'pt', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.ro.yml', 'ro', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.ru.yml', 'ru', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.sk.yml', 'sk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.sl.yml', 'sl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.sr.yml', 'sr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.sv.yml', 'sv', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.th.yml', 'th', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.tr.yml', 'tr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.uk.yml', 'uk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.vi.yml', 'vi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.zh.yml', 'zh', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.af.yml', 'af', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.ar.yml', 'ar', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.bg.yml', 'bg', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.ca.yml', 'ca', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.cs.yml', 'cs', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.da.yml', 'da', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.el.yml', 'el', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.et.yml', 'et', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.fi.yml', 'fi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.he.yml', 'he', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.hr.yml', 'hr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.hu.yml', 'hu', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.id.yml', 'id', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.it.yml', 'it', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.ja.yml', 'ja', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.ko.yml', 'ko', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.no.yml', 'no', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.pt.yml', 'pt', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.ro.yml', 'ro', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.sk.yml', 'sk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.sl.yml', 'sl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.sr.yml', 'sr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.sv.yml', 'sv', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.th.yml', 'th', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.tr.yml', 'tr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.uk.yml', 'uk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.vi.yml', 'vi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.zh.yml', 'zh', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.af.yml', 'af', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.ar.yml', 'ar', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.ca.yml', 'ca', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.el.yml', 'el', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.et.yml', 'et', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.he.yml', 'he', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.id.yml', 'id', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.ko.yml', 'ko', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.no.yml', 'no', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.ro.yml', 'ro', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.sr.yml', 'sr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.th.yml', 'th', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.vi.yml', 'vi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.zh.yml', 'zh', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.af.yml', 'af', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.ar.yml', 'ar', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.bg.yml', 'bg', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.ca.yml', 'ca', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.cs.yml', 'cs', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.da.yml', 'da', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.de.yml', 'de', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.el.yml', 'el', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.en.yml', 'en', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.es.yml', 'es', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.et.yml', 'et', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.fi.yml', 'fi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.fr.yml', 'fr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.he.yml', 'he', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.hr.yml', 'hr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.hu.yml', 'hu', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.id.yml', 'id', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.it.yml', 'it', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.ja.yml', 'ja', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.ko.yml', 'ko', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.nl.yml', 'nl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.no.yml', 'no', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.pl.yml', 'pl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.pt.yml', 'pt', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.ro.yml', 'ro', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.ru.yml', 'ru', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.sk.yml', 'sk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.sl.yml', 'sl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.sr.yml', 'sr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.sv.yml', 'sv', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.th.yml', 'th', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.tr.yml', 'tr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.uk.yml', 'uk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.vi.yml', 'vi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\flashes.zh.yml', 'zh', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.af.yml', 'af', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.ar.yml', 'ar', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.bg.yml', 'bg', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.ca.yml', 'ca', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.cs.yml', 'cs', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.da.yml', 'da', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.de.yml', 'de', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.el.yml', 'el', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.en.yml', 'en', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.es.yml', 'es', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.et.yml', 'et', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.fi.yml', 'fi', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.fr.yml', 'fr', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.he.yml', 'he', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.hr.yml', 'hr', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.hu.yml', 'hu', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.id.yml', 'id', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.it.yml', 'it', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.ja.yml', 'ja', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.ko.yml', 'ko', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.nl.yml', 'nl', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.no.yml', 'no', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.pl.yml', 'pl', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.pt.yml', 'pt', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.ro.yml', 'ro', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.ru.yml', 'ru', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.sk.yml', 'sk', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.sl.yml', 'sl', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.sr.yml', 'sr', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.sr_Cyrl.yml', 'sr_Cyrl', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.sr_Latn.yml', 'sr_Latn', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.sv.yml', 'sv', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.th.yml', 'th', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.tr.yml', 'tr', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.uk.yml', 'uk', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.vi.yml', 'vi', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\menu.zh.yml', 'zh', 'menu');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.af.yml', 'af', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.ar.yml', 'ar', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.bg.yml', 'bg', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.ca.yml', 'ca', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.cs.yml', 'cs', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.da.yml', 'da', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.el.yml', 'el', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.et.yml', 'et', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.fi.yml', 'fi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.he.yml', 'he', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.hr.yml', 'hr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.hu.yml', 'hu', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.id.yml', 'id', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.it.yml', 'it', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.ja.yml', 'ja', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.ko.yml', 'ko', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.no.yml', 'no', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.pt.yml', 'pt', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.ro.yml', 'ro', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.sk.yml', 'sk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.sl.yml', 'sl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.sr.yml', 'sr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.sr_Cyrl.yml', 'sr_Cyrl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.sr_Latn.yml', 'sr_Latn', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.sv.yml', 'sv', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.th.yml', 'th', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.tr.yml', 'tr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.uk.yml', 'uk', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.vi.yml', 'vi', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/translations\\messages.zh.yml', 'zh', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.af.yml', 'af', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.ar.yml', 'ar', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.bg.yml', 'bg', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.ca.yml', 'ca', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.cs.yml', 'cs', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.da.yml', 'da', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.de.yml', 'de', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.el.yml', 'el', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.en.yml', 'en', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.es.yml', 'es', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.et.yml', 'et', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.fi.yml', 'fi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.fr.yml', 'fr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.he.yml', 'he', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.hr.yml', 'hr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.hu.yml', 'hu', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.id.yml', 'id', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.it.yml', 'it', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.ja.yml', 'ja', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.ko.yml', 'ko', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.nl.yml', 'nl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.no.yml', 'no', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.pl.yml', 'pl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.pt.yml', 'pt', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.ro.yml', 'ro', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.ru.yml', 'ru', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.sk.yml', 'sk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.sl.yml', 'sl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.sr.yml', 'sr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.sr_Cyrl.yml', 'sr_Cyrl', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.sr_Latn.yml', 'sr_Latn', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.sv.yml', 'sv', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.th.yml', 'th', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.tr.yml', 'tr', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.uk.yml', 'uk', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.vi.yml', 'vi', 'flashes');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.zh.yml', 'zh', 'flashes');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\core-bundle\\Symfony\\Cmf\\Bundle\\CoreBundle/Resources/translations\\CmfCoreBundle.cs.xliff', 'cs', 'CmfCoreBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\core-bundle\\Symfony\\Cmf\\Bundle\\CoreBundle/Resources/translations\\CmfCoreBundle.de.xliff', 'de', 'CmfCoreBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\core-bundle\\Symfony\\Cmf\\Bundle\\CoreBundle/Resources/translations\\CmfCoreBundle.en.xliff', 'en', 'CmfCoreBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\core-bundle\\Symfony\\Cmf\\Bundle\\CoreBundle/Resources/translations\\CmfCoreBundle.fr.xliff', 'fr', 'CmfCoreBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\core-bundle\\Symfony\\Cmf\\Bundle\\CoreBundle/Resources/translations\\CmfCoreBundle.sk.xliff', 'sk', 'CmfCoreBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\core-bundle\\Symfony\\Cmf\\Bundle\\CoreBundle/Resources/translations\\CmfCoreBundle.sl.xliff', 'sl', 'CmfCoreBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\block-bundle\\Symfony\\Cmf\\Bundle\\BlockBundle/Resources/translations\\CmfBlockBundle.de.xliff', 'de', 'CmfBlockBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\block-bundle\\Symfony\\Cmf\\Bundle\\BlockBundle/Resources/translations\\CmfBlockBundle.en.xliff', 'en', 'CmfBlockBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\block-bundle\\Symfony\\Cmf\\Bundle\\BlockBundle/Resources/translations\\CmfBlockBundle.fr.xliff', 'fr', 'CmfBlockBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\block-bundle\\Symfony\\Cmf\\Bundle\\BlockBundle/Resources/translations\\CmfBlockBundle.sk.xliff', 'sk', 'CmfBlockBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\block-bundle\\Symfony\\Cmf\\Bundle\\BlockBundle/Resources/translations\\CmfBlockBundle.sl.xliff', 'sl', 'CmfBlockBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\content-bundle\\Symfony\\Cmf\\Bundle\\ContentBundle/Resources/translations\\CmfContentBundle.cs.xliff', 'cs', 'CmfContentBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\content-bundle\\Symfony\\Cmf\\Bundle\\ContentBundle/Resources/translations\\CmfContentBundle.de.xliff', 'de', 'CmfContentBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\content-bundle\\Symfony\\Cmf\\Bundle\\ContentBundle/Resources/translations\\CmfContentBundle.en.xliff', 'en', 'CmfContentBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\content-bundle\\Symfony\\Cmf\\Bundle\\ContentBundle/Resources/translations\\CmfContentBundle.fr.xliff', 'fr', 'CmfContentBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\content-bundle\\Symfony\\Cmf\\Bundle\\ContentBundle/Resources/translations\\CmfContentBundle.nl.xliff', 'nl', 'CmfContentBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\content-bundle\\Symfony\\Cmf\\Bundle\\ContentBundle/Resources/translations\\CmfContentBundle.pl.xliff', 'pl', 'CmfContentBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\content-bundle\\Symfony\\Cmf\\Bundle\\ContentBundle/Resources/translations\\CmfContentBundle.sk.xliff', 'sk', 'CmfContentBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\content-bundle\\Symfony\\Cmf\\Bundle\\ContentBundle/Resources/translations\\CmfContentBundle.sl.xliff', 'sl', 'CmfContentBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\routing-bundle\\Symfony\\Cmf\\Bundle\\RoutingBundle/Resources/translations\\CmfRoutingBundle.de.xliff', 'de', 'CmfRoutingBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\routing-bundle\\Symfony\\Cmf\\Bundle\\RoutingBundle/Resources/translations\\CmfRoutingBundle.en.xliff', 'en', 'CmfRoutingBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\routing-bundle\\Symfony\\Cmf\\Bundle\\RoutingBundle/Resources/translations\\CmfRoutingBundle.fr.xliff', 'fr', 'CmfRoutingBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\routing-bundle\\Symfony\\Cmf\\Bundle\\RoutingBundle/Resources/translations\\CmfRoutingBundle.nl.xliff', 'nl', 'CmfRoutingBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\routing-bundle\\Symfony\\Cmf\\Bundle\\RoutingBundle/Resources/translations\\CmfRoutingBundle.pl.xliff', 'pl', 'CmfRoutingBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\menu-bundle\\Symfony\\Cmf\\Bundle\\MenuBundle/Resources/translations\\CmfMenuBundle.cs.xliff', 'cs', 'CmfMenuBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\menu-bundle\\Symfony\\Cmf\\Bundle\\MenuBundle/Resources/translations\\CmfMenuBundle.de.xliff', 'de', 'CmfMenuBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\menu-bundle\\Symfony\\Cmf\\Bundle\\MenuBundle/Resources/translations\\CmfMenuBundle.en.xliff', 'en', 'CmfMenuBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\menu-bundle\\Symfony\\Cmf\\Bundle\\MenuBundle/Resources/translations\\CmfMenuBundle.fr.xliff', 'fr', 'CmfMenuBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\menu-bundle\\Symfony\\Cmf\\Bundle\\MenuBundle/Resources/translations\\CmfMenuBundle.sk.xliff', 'sk', 'CmfMenuBundle');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\menu-bundle\\Symfony\\Cmf\\Bundle\\MenuBundle/Resources/translations\\CmfMenuBundle.sl.xliff', 'sl', 'CmfMenuBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\hwi\\oauth-bundle\\HWI\\Bundle\\OAuthBundle/Resources/translations\\HWIOAuthBundle.de.yml', 'de', 'HWIOAuthBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\hwi\\oauth-bundle\\HWI\\Bundle\\OAuthBundle/Resources/translations\\HWIOAuthBundle.en.yml', 'en', 'HWIOAuthBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\hwi\\oauth-bundle\\HWI\\Bundle\\OAuthBundle/Resources/translations\\HWIOAuthBundle.es.yml', 'es', 'HWIOAuthBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\hwi\\oauth-bundle\\HWI\\Bundle\\OAuthBundle/Resources/translations\\HWIOAuthBundle.fr.yml', 'fr', 'HWIOAuthBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\hwi\\oauth-bundle\\HWI\\Bundle\\OAuthBundle/Resources/translations\\HWIOAuthBundle.it.yml', 'it', 'HWIOAuthBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\hwi\\oauth-bundle\\HWI\\Bundle\\OAuthBundle/Resources/translations\\HWIOAuthBundle.nl.yml', 'nl', 'HWIOAuthBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\hwi\\oauth-bundle\\HWI\\Bundle\\OAuthBundle/Resources/translations\\HWIOAuthBundle.pl.yml', 'pl', 'HWIOAuthBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\hwi\\oauth-bundle\\HWI\\Bundle\\OAuthBundle/Resources/translations\\HWIOAuthBundle.ru.yml', 'ru', 'HWIOAuthBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ar.yml', 'ar', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.bg.yml', 'bg', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ca.yml', 'ca', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.cs.yml', 'cs', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.da.yml', 'da', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.de.yml', 'de', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.en.yml', 'en', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.es.yml', 'es', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.et.yml', 'et', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.fa.yml', 'fa', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.fi.yml', 'fi', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.fr.yml', 'fr', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.he.yml', 'he', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.hr.yml', 'hr', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.hu.yml', 'hu', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.id.yml', 'id', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.it.yml', 'it', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ja.yml', 'ja', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.lb.yml', 'lb', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.lt.yml', 'lt', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.lv.yml', 'lv', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.nb.yml', 'nb', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.nl.yml', 'nl', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.pl.yml', 'pl', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.pt_BR.yml', 'pt_BR', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.pt_PT.yml', 'pt_PT', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ro.yml', 'ro', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ru.yml', 'ru', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sk.yml', 'sk', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sl.yml', 'sl', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sr_Latn.yml', 'sr_Latn', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sv.yml', 'sv', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.th.yml', 'th', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.tr.yml', 'tr', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.uk.yml', 'uk', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.vi.yml', 'vi', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.zh_CN.yml', 'zh_CN', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ar.yml', 'ar', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ca.yml', 'ca', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.fa.yml', 'fa', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.he.yml', 'he', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.id.yml', 'id', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.lt.yml', 'lt', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.lv.yml', 'lv', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.nb.yml', 'nb', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.pt_BR.yml', 'pt_BR', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ro.yml', 'ro', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sr_Latn.yml', 'sr_Latn', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.th.yml', 'th', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.vi.yml', 'vi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.zh_CN.yml', 'zh_CN', 'validators');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.ar.xliff', 'ar', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.az.xliff', 'az', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.ca.xliff', 'ca', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.cs.xliff', 'cs', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.da.xliff', 'da', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.de.xliff', 'de', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.en.xliff', 'en', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.es.xliff', 'es', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.fr.xliff', 'fr', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.it.xliff', 'it', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.nl.xliff', 'nl', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.pl.xliff', 'pl', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.pt.xliff', 'pt', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.ru.xliff', 'ru', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.sl.xliff', 'sl', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.sr_Cyrl.xliff', 'sr_Cyrl', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.sr_Latn.xliff', 'sr_Latn', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.tr.xliff', 'tr', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.ua.xliff', 'ua', 'pagerfanta');
        $instance->addResource('xliff', 'C:\\xampp\\htdocs\\bsylius\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.zh_CN.xliff', 'zh_CN', 'pagerfanta');
        return $instance;
    }
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape_service' => NULL, 'autoescape_service_method' => NULL, 'cache' => 'C:/xampp/htdocs/bsylius/app/cache/prod/twig', 'charset' => 'UTF-8', 'paths' => array()));
        $instance->addExtension($this->get('sylius.twig.money'));
        $instance->addExtension($this->get('sylius.settings.twig'));
        $instance->addExtension($this->get('sylius.cart_twig'));
        $instance->addExtension($this->get('sylius.inventory_twig'));
        $instance->addExtension($this->get('sylius.twig.restricted_zone_extension'));
        $instance->addExtension($this->get('sylius.twig.text_extension'));
        $instance->addExtension($this->get('sylius.twig.resource'));
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension($this->get('sonata.block.templating.helper')));
        $instance->addExtension($this->get('cmf_core.twig.children_extension'));
        $instance->addExtension($this->get('cmf_block.twig.embed_extension'));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), false, array(), array(0 => 'SyliusWebBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, 'C:/xampp/htdocs/bsylius/app', 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('cmf_routing.router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'SyliusWebBundle::forms.html.twig', 2 => 'LiipImagineBundle:Form:form_div_layout.html.twig')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Liip\ImagineBundle\Templating\ImagineExtension($this->get('liip_imagine.cache.manager')));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'))));
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerExtension($this->get('jms_serializer')));
        $instance->addExtension(new \HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension($this->get('hwi_oauth.templating.helper.oauth')));
        $instance->addExtension(new \WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension($this));
        $instance->addExtension($this->get('jms_translation.twig_extension'));
        $instance->addGlobal('app', $this->get('templating.globals'));
        $instance->addGlobal('sonata_block', $this->get('sonata.block.twig.global'));
        return $instance;
    }
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), false);
    }
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/views', 'SyliusInstaller');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/views', 'SyliusSettings');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle/Resources/views', 'SyliusProduct');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle/Resources/views', 'SyliusVariableProduct');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/views', 'SyliusTaxation');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payum-bundle\\Sylius\\Bundle\\PayumBundle/Resources/views', 'SyliusPayum');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/views', 'SyliusAddressing');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/views', 'SyliusTaxonomies');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\web-bundle\\Sylius\\Bundle\\WebBundle/Resources/views', 'SyliusWeb');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/views', 'SyliusResource');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\sonata-project\\block-bundle\\Sonata\\BlockBundle/Resources/views', 'SonataBlock');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\core-bundle\\Symfony\\Cmf\\Bundle\\CoreBundle/Resources/views', 'CmfCore');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\block-bundle\\Symfony\\Cmf\\Bundle\\BlockBundle/Resources/views', 'CmfBlock');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\doctrine\\doctrine-bundle\\Doctrine\\Bundle\\DoctrineBundle/Resources/views', 'Doctrine');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views', 'Framework');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views', 'Security');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\swiftmailer-bundle\\Symfony\\Bundle\\SwiftmailerBundle/Resources/views', 'Swiftmailer');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views', 'Twig');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\liip\\imagine-bundle\\Liip\\ImagineBundle/Resources/views', 'LiipImagine');
        $instance->addPath('C:/xampp/htdocs/bsylius/app/Resources/HWIOAuthBundle/views', 'HWIOAuth');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\hwi\\oauth-bundle\\HWI\\Bundle\\OAuthBundle/Resources/views', 'HWIOAuth');
        $instance->addPath('C:/xampp/htdocs/bsylius/app/Resources/FOSUserBundle/views', 'FOSUser');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views', 'FOSUser');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\jms\\translation-bundle\\JMS\\TranslationBundle/Resources/views', 'JMSTranslation');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\payum\\payum-bundle\\Payum\\Bundle\\PayumBundle/Resources/views', 'Payum');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form');
        $instance->addPath('C:\\xampp\\htdocs\\bsylius\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu/Resources/views');
        return $instance;
    }
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('abc');
    }
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('sylius.validator.product.unique' => 'sylius.validator.product.unique', 'sylius.validator.variant.unique' => 'sylius.validator.variant.unique', 'sylius.validator.variant.combination' => 'sylius.validator.variant.combination', 'sylius_shippable_address_validator' => 'sylius.validator.shippable_address', 'sylius_in_stock' => 'sylius.validator.in_stock', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'doctrine_phpcr.odm.validator.valid_phpcr_odm' => 'doctrine_phpcr.odm.validator.valid_phpcr_odm', 'security.validator.user_password' => 'security.validator.user_password')), $this->get('translator.default'), 'validators', array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('fos_user.user_manager'))));
    }
    protected function getWhiteOctoberPagerfanta_ViewFactoryService()
    {
        $a = $this->get('translator.default');
        $b = new \Pagerfanta\View\DefaultView();
        $c = new \Pagerfanta\View\TwitterBootstrapView();
        $d = new \Pagerfanta\View\TwitterBootstrap3View();
        $this->services['white_october_pagerfanta.view_factory'] = $instance = new \Pagerfanta\View\ViewFactory(array());
        $instance->add(array('default' => $b, 'default_translated' => new \WhiteOctober\PagerfantaBundle\View\DefaultTranslatedView($b, $a), 'twitter_bootstrap' => $c, 'twitter_bootstrap3' => $d, 'twitter_bootstrap3_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap3TranslatedView($d, $a), 'twitter_bootstrap_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrapTranslatedView($c, $a)));
        return $instance;
    }
    protected function synchronizeCmfMenu_CurrentItemVoter_UriPrefixService()
    {
        if ($this->initialized('cmf_menu.factory')) {
            $this->get('cmf_menu.factory')->addCurrentItemVoter($this->get('cmf_menu.current_item_voter.uri_prefix'));
        }
    }
    protected function synchronizeRequestService()
    {
        if ($this->initialized('sylius.payum.be2bill.action.capture_order_using_credit_card')) {
            $this->get('sylius.payum.be2bill.action.capture_order_using_credit_card')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('sylius.payum.be2bill.action.capture_order_using_be2bill_form')) {
            $this->get('sylius.payum.be2bill.action.capture_order_using_be2bill_form')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('sylius.payum.action.obtain_credit_card')) {
            $this->get('sylius.payum.action.obtain_credit_card')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('sylius.menu_builder.frontend')) {
            $this->get('sylius.menu_builder.frontend')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('cmf.block.action')) {
            $this->get('cmf.block.action')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('cmf.block.service')) {
            $this->get('cmf.block.service')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('cmf_menu.current_item_voter.uri_prefix')) {
            $this->get('cmf_menu.current_item_voter.uri_prefix')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('locale_listener')) {
            $this->get('locale_listener')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('fragment.handler')) {
            $this->get('fragment.handler')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('router_listener')) {
            $this->get('router_listener')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('hwi_oauth.templating.helper.oauth')) {
            $this->get('hwi_oauth.templating.helper.oauth')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
    }
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), 'C:/xampp/htdocs/bsylius/app/../web', false);
    }
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }
    protected function getFosUser_EntityManagerService()
    {
        return $this->services['fos_user.entity_manager'] = $this->get('doctrine')->getManager(NULL);
    }
    protected function getFosUser_UserProvider_UsernameService()
    {
        return $this->services['fos_user.user_provider.username'] = new \FOS\UserBundle\Security\UserProvider($this->get('fos_user.user_manager'));
    }
    protected function getHwiOauth_HttpClientService()
    {
        $this->services['hwi_oauth.http_client'] = $instance = new \Buzz\Client\Curl();
        $instance->setVerifyPeer(true);
        $instance->setTimeout(5);
        $instance->setMaxRedirects(5);
        $instance->setIgnoreErrors(true);
        return $instance;
    }
    protected function getHwiOauth_Storage_SessionService()
    {
        return $this->services['hwi_oauth.storage.session'] = new \HWI\Bundle\OAuthBundle\OAuth\RequestDataStorage\SessionStorage($this->get('session'));
    }
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }
    protected function getPayum_Buzz_ClientService()
    {
        $this->services['payum.buzz.client'] = $instance = new \Buzz\Client\Curl();
        $instance->setTimeout(200);
        return $instance;
    }
    protected function getPayum_EntityManagerService()
    {
        return $this->services['payum.entity_manager'] = $this->get('doctrine')->getManager();
    }
    protected function getPayum_Extension_EndlessCycleDetectorService()
    {
        return $this->services['payum.extension.endless_cycle_detector'] = new \Payum\Core\Extension\EndlessCycleDetectorExtension();
    }
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(new \Symfony\Component\Security\Core\Role\RoleHierarchy(array())), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($this->get('security.authentication.trust_resolver'))), 'affirmative', false, true);
    }
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.context'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'));
    }
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login.*'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/connect.*'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/administration/login'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/administration/login-check'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('/administration.*'), array(0 => 'ROLE_SYLIUS_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('/account.*'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('/_partial.*', NULL, array(), array(0 => '127.0.0.1')), array(), NULL);
        return $instance;
    }
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('fos_user.user_provider.username');
        $b = $this->get('hwi_oauth.user_checker');
        $c = $this->get('security.encoder_factory');
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'administration', $c, true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('537d0f75660ed'), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'main', $c, true), 3 => new \HWI\Bundle\OAuthBundle\Security\Core\Authentication\Provider\OAuthProvider($this->get('sylius.oauth.user_provider'), $this->get('hwi_oauth.resource_ownermap.main'), $b), 4 => new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider($b, 'abc', 'main'), 5 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('537d0f75660ed')), true);
        $instance->setEventDispatcher($this->get('event_dispatcher'));
        return $instance;
    }
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_ContextListener_0Service()
    {
        return $this->services['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener($this->get('security.context'), array(0 => $this->get('fos_user.user_provider.username')), 'user', $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }
    protected function getSecurity_Logout_Handler_SessionService()
    {
        return $this->services['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler();
    }
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, false, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty');
        $instance->add('sonata.block.service.text', 'sonata.block.service.text');
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss');
        $instance->add('cmf.block.simple', 'cmf.block.simple');
        $instance->add('cmf.block.string', 'cmf.block.string');
        $instance->add('cmf.block.container', 'cmf.block.container');
        $instance->add('cmf.block.reference', 'cmf.block.reference');
        $instance->add('cmf.block.action', 'cmf.block.action');
        $instance->add('cmf.block.slideshow', 'cmf.block.slideshow');
        $instance->add('cmf.block.imagine', 'cmf.block.imagine');
        return $instance;
    }
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->services['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper($this->get('sonata.block.manager'), array('by_type' => array('sonata.block.service.text' => 'sonata.cache.noop'), 'by_class' => array('Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\RssBlock' => 'sonata.cache.noop')), $this->get('sonata.block.renderer.default'), $this->get('sonata.block.context_manager.default'), NULL, $this->get('sonata.block.cache.handler.default', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL);
    }
    protected function getStofDoctrineExtensions_Listener_LoggableService()
    {
        $this->services['stof_doctrine_extensions.listener.loggable'] = $instance = new \Gedmo\Loggable\LoggableListener();
        $instance->setAnnotationReader($this->get('annotation_reader'));
        return $instance;
    }
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), 'C:/xampp/htdocs/bsylius/app/cache/prod');
    }
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml', 1 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\order-bundle\\Sylius\\Bundle\\OrderBundle\\Resources\\config\\validation.xml', 2 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle\\Resources\\config\\validation.xml', 3 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle\\Resources\\config\\validation.xml', 4 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle\\Resources\\config\\validation.xml', 5 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle\\Resources\\config\\validation.xml', 6 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle\\Resources\\config\\validation.xml', 7 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle\\Resources\\config\\validation.xml', 8 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle\\Resources\\config\\validation.xml', 9 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle\\Resources\\config\\validation.xml', 10 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle\\Resources\\config\\validation.xml', 11 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle\\Resources\\config\\validation.xml', 12 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle\\Resources\\config\\validation.xml', 13 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle\\Resources\\config\\validation.xml', 14 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\block-bundle\\Symfony\\Cmf\\Bundle\\BlockBundle\\Resources\\config\\validation.xml', 15 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\content-bundle\\Symfony\\Cmf\\Bundle\\ContentBundle\\Resources\\config\\validation.xml', 16 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\routing-bundle\\Symfony\\Cmf\\Bundle\\RoutingBundle\\Resources\\config\\validation.xml', 17 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\menu-bundle\\Symfony\\Cmf\\Bundle\\MenuBundle\\Resources\\config\\validation.xml', 18 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\validation.xml', 19 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\validation\\orm.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array()))), NULL);
    }
    public function getParameter($name)
    {
        $name = strtolower($name);
        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        return $this->parameters[$name];
    }
    public function hasParameter($name)
    {
        $name = strtolower($name);
        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }
        return $this->parameterBag;
    }
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => 'C:/xampp/htdocs/bsylius/app',
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.cache_dir' => 'C:/xampp/htdocs/bsylius/app/cache/prod',
            'kernel.logs_dir' => 'C:/xampp/htdocs/bsylius/app/logs',
            'kernel.bundles' => array(
                'SyliusInstallerBundle' => 'Sylius\\Bundle\\InstallerBundle\\SyliusInstallerBundle',
                'SyliusOrderBundle' => 'Sylius\\Bundle\\OrderBundle\\SyliusOrderBundle',
                'SyliusMoneyBundle' => 'Sylius\\Bundle\\MoneyBundle\\SyliusMoneyBundle',
                'SyliusSettingsBundle' => 'Sylius\\Bundle\\SettingsBundle\\SyliusSettingsBundle',
                'SyliusCartBundle' => 'Sylius\\Bundle\\CartBundle\\SyliusCartBundle',
                'SyliusProductBundle' => 'Sylius\\Bundle\\ProductBundle\\SyliusProductBundle',
                'SyliusVariableProductBundle' => 'Sylius\\Bundle\\VariableProductBundle\\SyliusVariableProductBundle',
                'SyliusTaxationBundle' => 'Sylius\\Bundle\\TaxationBundle\\SyliusTaxationBundle',
                'SyliusShippingBundle' => 'Sylius\\Bundle\\ShippingBundle\\SyliusShippingBundle',
                'SyliusPaymentsBundle' => 'Sylius\\Bundle\\PaymentsBundle\\SyliusPaymentsBundle',
                'SyliusPayumBundle' => 'Sylius\\Bundle\\PayumBundle\\SyliusPayumBundle',
                'SyliusPromotionsBundle' => 'Sylius\\Bundle\\PromotionsBundle\\SyliusPromotionsBundle',
                'SyliusAddressingBundle' => 'Sylius\\Bundle\\AddressingBundle\\SyliusAddressingBundle',
                'SyliusInventoryBundle' => 'Sylius\\Bundle\\InventoryBundle\\SyliusInventoryBundle',
                'SyliusTaxonomiesBundle' => 'Sylius\\Bundle\\TaxonomiesBundle\\SyliusTaxonomiesBundle',
                'SyliusFlowBundle' => 'Sylius\\Bundle\\FlowBundle\\SyliusFlowBundle',
                'SyliusCoreBundle' => 'Sylius\\Bundle\\CoreBundle\\SyliusCoreBundle',
                'SyliusWebBundle' => 'Sylius\\Bundle\\WebBundle\\SyliusWebBundle',
                'SyliusResourceBundle' => 'Sylius\\Bundle\\ResourceBundle\\SyliusResourceBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'CmfCoreBundle' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\CmfCoreBundle',
                'CmfBlockBundle' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\CmfBlockBundle',
                'CmfContentBundle' => 'Symfony\\Cmf\\Bundle\\ContentBundle\\CmfContentBundle',
                'CmfRoutingBundle' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\CmfRoutingBundle',
                'CmfMenuBundle' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\CmfMenuBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrinePHPCRBundle' => 'Doctrine\\Bundle\\PHPCRBundle\\DoctrinePHPCRBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'KnpGaufretteBundle' => 'Knp\\Bundle\\GaufretteBundle\\KnpGaufretteBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle',
                'KnpSnappyBundle' => 'Knp\\Bundle\\SnappyBundle\\KnpSnappyBundle',
                'PayumBundle' => 'Payum\\Bundle\\PayumBundle\\PayumBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'sylius.database.driver' => 'pdo_mysql',
            'sylius.database.host' => '127.0.0.1',
            'sylius.database.port' => NULL,
            'sylius.database.name' => 'sylius',
            'sylius.database.user' => 'root',
            'sylius.database.password' => NULL,
            'sylius.mailer.transport' => 'smtp',
            'sylius.mailer.host' => '127.0.0.1',
            'sylius.mailer.user' => NULL,
            'sylius.mailer.password' => NULL,
            'sylius.locale' => 'en',
            'sylius.secret' => 'abc',
            'sylius.currency' => 'EUR',
            'sylius.cache' => array(
                'type' => 'file_system',
            ),
            'paypal.express_checkout.username' => 'EDITME',
            'paypal.express_checkout.password' => 'EDITME',
            'paypal.express_checkout.signature' => 'EDITME',
            'paypal.express_checkout.sandbox' => true,
            'stripe.secret_key' => 'EDITME',
            'stripe.test_mode' => true,
            'be2bill.identifier' => 'EDITME',
            'be2bill.password' => 'EDITME',
            'be2bill.sandbox' => true,
            'sylius.oauth.amazon.clientid' => '<amazon_client_id>',
            'sylius.oauth.amazon.clientsecret' => '<amazon_client_secret>',
            'sylius.oauth.facebook.clientid' => '<facebook_client_id>',
            'sylius.oauth.facebook.clientsecret' => '<facebook_client_secret>',
            'sylius.oauth.google.clientid' => '<google_client_id>',
            'sylius.oauth.google.clientsecret' => '<google_client_secret>',
            'sylius.inventory.backorders_enabled' => true,
            'sylius.inventory.tracking_enabled' => true,
            'sylius.inventory.holding.duration' => '15 minutes',
            'sylius.order.pending.duration' => '3 hours',
            'sylius.installer.scenario.class' => 'Sylius\\Bundle\\InstallerBundle\\Process\\InstallerScenario',
            'sylius.requirements.class' => 'Sylius\\Bundle\\InstallerBundle\\Requirement\\SyliusRequirements',
            'sylius.requirements.settings.class' => 'Sylius\\Bundle\\InstallerBundle\\Requirement\\SettingsRequirements',
            'sylius.requirements.extensions.class' => 'Sylius\\Bundle\\InstallerBundle\\Requirement\\ExtensionsRequirements',
            'sylius.requirements.filesystem.class' => 'Sylius\\Bundle\\InstallerBundle\\Requirement\\FilesystemRequirements',
            'sylius.form.type.configuration.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\ConfigurationType',
            'sylius.form.type.configuration.database.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\Configuration\\DatabaseType',
            'sylius.form.type.configuration.mailer.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\Configuration\\MailerType',
            'sylius.form.type.configuration.locale.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\Configuration\\LocaleType',
            'sylius.form.type.configuration.hidden.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\Configuration\\HiddenType',
            'sylius.form.type.setup.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\SetupType',
            'sylius.installer.yaml_persister.class' => 'Sylius\\Bundle\\InstallerBundle\\Persister\\YamlPersister',
            'sylius.config.classes' => array(
                'sylius.user' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\User',
                        'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\UserController',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\UserRepository',
                    ),
                ),
                'sylius.group' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Group',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    ),
                ),
                'sylius.locale' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Locale',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    ),
                ),
                'sylius.block' => array(
                    'driver' => 'doctrine/phpcr-odm',
                    'classes' => array(
                        'model' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\SimpleBlock',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    ),
                ),
                'sylius.page' => array(
                    'driver' => 'doctrine/phpcr-odm',
                    'classes' => array(
                        'model' => 'Symfony\\Cmf\\Bundle\\ContentBundle\\Doctrine\\Phpcr\\StaticContent',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\PageRepository',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    ),
                ),
                'user' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\User',
                ),
                'group' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Group',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\GroupType',
                ),
                'locale' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Locale',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\LocaleType',
                ),
                'block' => array(
                    'model' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\SimpleBlock',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\BlockType',
                ),
                'page' => array(
                    'model' => 'Symfony\\Cmf\\Bundle\\ContentBundle\\Doctrine\\Phpcr\\StaticContent',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\PageType',
                ),
                'variant_image' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\VariantImage',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                ),
                'taxonomy' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Taxonomy',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxonomyType',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                ),
                'taxon' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Taxon',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxonType',
                    'controller' => 'Sylius\\Bundle\\TaxonomiesBundle\\Controller\\TaxonController',
                ),
                'inventory_unit' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit',
                    'controller' => 'Sylius\\Bundle\\InventoryBundle\\Controller\\InventoryUnitController',
                ),
                'stockable' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Variant',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                ),
                'address' => array(
                    'controller' => 'Sylius\\Bundle\\WebBundle\\Controller\\Frontend\\Account\\AddressController',
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Address',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\AddressType',
                ),
                'country' => array(
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Country',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryType',
                ),
                'province' => array(
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Province',
                    'controller' => 'Sylius\\Bundle\\AddressingBundle\\Controller\\ProvinceController',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceType',
                ),
                'zone' => array(
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Zone',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneType',
                ),
                'zone_member' => array(
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMember',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberType',
                ),
                'zone_member_country' => array(
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberCountry',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberCountryType',
                ),
                'zone_member_province' => array(
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberProvince',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberProvinceType',
                ),
                'zone_member_zone' => array(
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberZone',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberZoneType',
                ),
                'promotion_subject' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Order',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                ),
                'promotion' => array(
                    'model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Promotion',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\PromotionType',
                ),
                'promotion_rule' => array(
                    'model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Rule',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\RuleType',
                ),
                'promotion_action' => array(
                    'model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Action',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\ActionType',
                ),
                'promotion_coupon' => array(
                    'model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Coupon',
                    'controller' => 'Sylius\\Bundle\\PromotionsBundle\\Controller\\CouponController',
                    'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\CouponType',
                ),
                'payment_security_token' => array(
                    'model' => 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                ),
                'payment' => array(
                    'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\PaymentController',
                    'model' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment',
                    'form' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentType',
                ),
                'payment_method' => array(
                    'model' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethod',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentMethodType',
                ),
                'credit_card' => array(
                    'model' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCard',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\CreditCardType',
                ),
                'shipment' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Shipment',
                    'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\ShipmentRepository',
                    'controller' => 'Sylius\\Bundle\\ShippingBundle\\Controller\\ShipmentController',
                    'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentType',
                ),
                'shipment_item' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentItemType',
                ),
                'shipping_method' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\ShippingMethod',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ShippingMethodType',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                ),
                'shipping_category' => array(
                    'model' => 'Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategory',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryType',
                ),
                'shipping_method_rule' => array(
                    'model' => 'Sylius\\Bundle\\ShippingBundle\\Model\\Rule',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\RuleType',
                ),
                'tax_rate' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\TaxRate',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxRateType',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                ),
                'tax_category' => array(
                    'model' => 'Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategory',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryType',
                ),
                'variant' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Variant',
                    'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\VariantRepository',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\VariantType',
                    'controller' => 'Sylius\\Bundle\\VariableProductBundle\\Controller\\VariantController',
                ),
                'option' => array(
                    'model' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\Option',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionType',
                ),
                'option_value' => array(
                    'model' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\OptionValue',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionValueType',
                ),
                'product' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Product',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ProductType',
                    'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductController',
                    'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\ProductRepository',
                ),
                'prototype' => array(
                    'model' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\Prototype',
                    'form' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\PrototypeType',
                    'controller' => 'Sylius\\Bundle\\ProductBundle\\Controller\\PrototypeController',
                ),
                'property' => array(
                    'model' => 'Sylius\\Bundle\\ProductBundle\\Model\\Property',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\PropertyType',
                ),
                'product_property' => array(
                    'model' => 'Sylius\\Bundle\\ProductBundle\\Model\\ProductProperty',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductPropertyType',
                ),
                'item' => array(
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\CartItemType',
                    'controller' => 'Sylius\\Bundle\\CartBundle\\Controller\\CartItemController',
                ),
                'cart' => array(
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\CartType',
                    'controller' => 'Sylius\\Bundle\\CartBundle\\Controller\\CartController',
                ),
                'parameter' => array(
                    'model' => 'Sylius\\Bundle\\SettingsBundle\\Model\\Parameter',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                ),
                'exchange_rate' => array(
                    'model' => 'Sylius\\Bundle\\MoneyBundle\\Model\\ExchangeRate',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\MoneyBundle\\Form\\Type\\ExchangeRateType',
                ),
                'currency' => array(
                    'controller' => 'Sylius\\Bundle\\MoneyBundle\\Controller\\CurrencyController',
                ),
                'order_item' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\OrderItem',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderItemType',
                ),
                'order' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Order',
                    'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\OrderController',
                    'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\OrderRepository',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\OrderType',
                ),
                'adjustment' => array(
                    'model' => 'Sylius\\Bundle\\OrderBundle\\Model\\Adjustment',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\AdjustmentType',
                ),
                'number' => array(
                    'model' => 'Sylius\\Bundle\\OrderBundle\\Model\\Number',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                ),
            ),
            'sylius.model.user.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\User',
            'sylius.generator.order_number.class' => 'Sylius\\Bundle\\OrderBundle\\Generator\\OrderNumberGenerator',
            'sylius.listener.order_number.class' => 'Sylius\\Bundle\\OrderBundle\\EventListener\\OrderNumberListener',
            'sylius.listener.complete_order.class' => 'Sylius\\Bundle\\OrderBundle\\EventListener\\CompleteOrderListener',
            'sylius.repository.order.class' => 'Sylius\\Bundle\\CoreBundle\\Repository\\OrderRepository',
            'sylius.repository.number.class' => 'Sylius\\Bundle\\OrderBundle\\Doctrine\\ORM\\NumberRepository',
            'sylius_order.driver' => 'doctrine/orm',
            'sylius_order.driver.doctrine/orm' => true,
            'sylius.model.order_item.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\OrderItem',
            'sylius.controller.order_item.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.order_item.class' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderItemType',
            'sylius.model.order.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Order',
            'sylius.controller.order.class' => 'Sylius\\Bundle\\CoreBundle\\Controller\\OrderController',
            'sylius.form.type.order.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\OrderType',
            'sylius.model.adjustment.class' => 'Sylius\\Bundle\\OrderBundle\\Model\\Adjustment',
            'sylius.controller.adjustment.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.adjustment.class' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\AdjustmentType',
            'sylius.model.number.class' => 'Sylius\\Bundle\\OrderBundle\\Model\\Number',
            'sylius.controller.number.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.validation_group.order' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.order_item' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.adjustment' => array(
                0 => 'sylius',
            ),
            'sylius.twig.money.class' => 'Sylius\\Bundle\\CoreBundle\\Twig\\SyliusMoneyExtension',
            'sylius.form.type.money.class' => 'Sylius\\Bundle\\MoneyBundle\\Form\\Type\\MoneyType',
            'sylius.form.type.exchange_rate.class' => 'Sylius\\Bundle\\MoneyBundle\\Form\\Type\\ExchangeRateType',
            'sylius.currency_context.class' => 'Sylius\\Bundle\\CoreBundle\\Context\\CurrencyContext',
            'sylius.currency_converter.class' => 'Sylius\\Bundle\\MoneyBundle\\Converter\\CurrencyConverter',
            'sylius_money.driver' => 'doctrine/orm',
            'sylius_money.driver.doctrine/orm' => true,
            'sylius.model.exchange_rate.class' => 'Sylius\\Bundle\\MoneyBundle\\Model\\ExchangeRate',
            'sylius.controller.exchange_rate.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.controller.currency.class' => 'Sylius\\Bundle\\MoneyBundle\\Controller\\CurrencyController',
            'sylius.money.locale' => 'en',
            'sylius.money.currency' => 'EUR',
            'sylius.controller.settings.class' => 'Sylius\\Bundle\\SettingsBundle\\Controller\\SettingsController',
            'sylius.settings.form_factory.class' => 'Sylius\\Bundle\\SettingsBundle\\Form\\Factory\\SettingsFormFactory',
            'sylius.settings.manager.class' => 'Sylius\\Bundle\\SettingsBundle\\Manager\\SettingsManager',
            'sylius.settings.schema_registry.class' => 'Sylius\\Bundle\\SettingsBundle\\Schema\\SchemaRegistry',
            'sylius.settings.twig.class' => 'Sylius\\Bundle\\SettingsBundle\\Twig\\SyliusSettingsExtension',
            'sylius_settings.driver' => 'doctrine/orm',
            'sylius_settings.driver.doctrine/orm' => true,
            'sylius.model.parameter.class' => 'Sylius\\Bundle\\SettingsBundle\\Model\\Parameter',
            'sylius.model.cart.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Order',
            'sylius.model.cart_item.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\OrderItem',
            'sylius.cart_provider.default.class' => 'Sylius\\Bundle\\CartBundle\\Provider\\CartProvider',
            'sylius.cart_storage.session.class' => 'Sylius\\Bundle\\CartBundle\\Storage\\SessionCartStorage',
            'sylius.cart_listener.class' => 'Sylius\\Bundle\\CartBundle\\EventListener\\CartListener',
            'sylius.cart_flash_listener.class' => 'Sylius\\Bundle\\CartBundle\\EventListener\\FlashListener',
            'sylius.refresh_cart_listener.class' => 'Sylius\\Bundle\\CartBundle\\EventListener\\RefreshCartListener',
            'sylius.cart.purger.class' => 'Sylius\\Bundle\\CartBundle\\Purger\\ExpiredCartsPurger',
            'sylius.cart_twig.class' => 'Sylius\\Bundle\\CartBundle\\Twig\\SyliusCartExtension',
            'sylius.controller.cart.class' => 'Sylius\\Bundle\\CartBundle\\Controller\\CartController',
            'sylius.form.type.cart.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\CartType',
            'sylius.controller.cart_item.class' => 'Sylius\\Bundle\\CartBundle\\Controller\\CartItemController',
            'sylius.form.type.cart_item.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\CartItemType',
            'sylius.validation_group.cart' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.cart_item' => array(
                0 => 'sylius',
            ),
            'sylius.builder.product.class' => 'Sylius\\Bundle\\ProductBundle\\Builder\\ProductBuilder',
            'sylius.validator.product.unique.class' => 'Sylius\\Bundle\\ProductBundle\\Validator\\ProductUniqueValidator',
            'sylius.form.type.product_property.class' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductPropertyType',
            'sylius.builder.prototype.class' => 'Sylius\\Bundle\\VariableProductBundle\\Builder\\PrototypeBuilder',
            'sylius.repository.product.class' => 'Sylius\\Bundle\\CoreBundle\\Repository\\ProductRepository',
            'sylius.repository.property.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.product_property.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.prototype.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.form.type.property_choice.class' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\PropertyEntityChoiceType',
            'sylius_product.driver' => 'doctrine/orm',
            'sylius_product.driver.doctrine/orm' => true,
            'sylius.model.product.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Product',
            'sylius.form.type.product.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ProductType',
            'sylius.controller.product.class' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductController',
            'sylius.model.prototype.class' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\Prototype',
            'sylius.form.type.prototype.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\PrototypeType',
            'sylius.controller.prototype.class' => 'Sylius\\Bundle\\ProductBundle\\Controller\\PrototypeController',
            'sylius.model.property.class' => 'Sylius\\Bundle\\ProductBundle\\Model\\Property',
            'sylius.controller.property.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.property.class' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\PropertyType',
            'sylius.model.product_property.class' => 'Sylius\\Bundle\\ProductBundle\\Model\\ProductProperty',
            'sylius.controller.product_property.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.validation_group.product' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.property' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.product_property' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.prototype' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.option_value.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionValueType',
            'sylius.form.type.option_value_choice.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionValueChoiceType',
            'sylius.form.type.option_value_collection.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionValueCollectionType',
            'sylius.generator.variant.class' => 'Sylius\\Bundle\\VariableProductBundle\\Generator\\VariantGenerator',
            'sylius.validator.variant.unique.class' => 'Sylius\\Bundle\\VariableProductBundle\\Validator\\VariantUniqueValidator',
            'sylius.validator.variant.combination.class' => 'Sylius\\Bundle\\VariableProductBundle\\Validator\\VariantCombinationValidator',
            'sylius.form.type.variant.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\VariantType',
            'sylius.form.type.variant_choice.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\VariantChoiceType',
            'sylius.form.type.variant_match.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\VariantMatchType',
            'sylius.controller.variant.class' => 'Sylius\\Bundle\\VariableProductBundle\\Controller\\VariantController',
            'sylius.repository.variant.class' => 'Sylius\\Bundle\\CoreBundle\\Repository\\VariantRepository',
            'sylius.repository.option.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.option_value.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.form.type.option_choice.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionEntityChoiceType',
            'sylius_variable_product.driver' => 'doctrine/orm',
            'sylius_variable_product.driver.doctrine/orm' => true,
            'sylius.model.variant.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Variant',
            'sylius.model.option.class' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\Option',
            'sylius.controller.option.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.option.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionType',
            'sylius.model.option_value.class' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\OptionValue',
            'sylius.controller.option_value.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.validation_group.variant' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.option' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.option_value' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.tax_calculator_choice.class' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\CalculatorChoiceType',
            'sylius.tax_calculator.class' => 'Sylius\\Bundle\\TaxationBundle\\Calculator\\DelegatingCalculator',
            'sylius.tax_calculator.default.class' => 'Sylius\\Bundle\\TaxationBundle\\Calculator\\DefaultCalculator',
            'sylius.tax_rate_resolver.class' => 'Sylius\\Bundle\\TaxationBundle\\Resolver\\TaxRateResolver',
            'sylius.form.type.tax_category_choice.class' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryEntityType',
            'sylius_taxation.driver' => 'doctrine/orm',
            'sylius_taxation.driver.doctrine/orm' => true,
            'sylius.model.tax_rate.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\TaxRate',
            'sylius.form.type.tax_rate.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxRateType',
            'sylius.controller.tax_rate.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.tax_category.class' => 'Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategory',
            'sylius.controller.tax_category.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.tax_category.class' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryType',
            'sylius.validation_group.tax_category' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.tax_rate' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.shipping_calculator_choice.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\CalculatorChoiceType',
            'sylius.form.type.shipping_rule_item_count_configuration.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\Rule\\ItemCountConfigurationType',
            'sylius.form.type.shipping_method_choice.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodChoiceType',
            'sylius.shipping_methods_resolver.class' => 'Sylius\\Bundle\\ShippingBundle\\Resolver\\MethodsResolver',
            'sylius.shipping_calculator_registry.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\Registry\\CalculatorRegistry',
            'sylius.shipping_calculator.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\DelegatingCalculator',
            'sylius.shipping_rule_checker_registry.class' => 'Sylius\\Bundle\\ShippingBundle\\Checker\\Registry\\RuleCheckerRegistry',
            'sylius.shipping_eligibility_checker.class' => 'Sylius\\Bundle\\ShippingBundle\\Checker\\ShippingMethodEligibilityChecker',
            'sylius.shipping_rule_checker.item_count.class' => 'Sylius\\Bundle\\ShippingBundle\\Checker\\ItemCountRuleChecker',
            'sylius.shipping_calculator.flat_rate.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\FlatRateCalculator',
            'sylius.form.type.shipping_calculator.flat_rate_configuration.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\Calculator\\FlatRateConfigurationType',
            'sylius.shipping_calculator.per_item_rate.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\PerItemRateCalculator',
            'sylius.form.type.shipping_calculator.per_item_rate_configuration.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\Calculator\\PerItemRateConfigurationType',
            'sylius.shipping_calculator.flexible_rate.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\FlexibleRateCalculator',
            'sylius.form.type.shipping_calculator.flexible_rate_configuration.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\Calculator\\FlexibleRateConfigurationType',
            'sylius.shipping_calculator.weight_rate.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\WeightRateCalculator',
            'sylius.form.type.shipping_calculator.weight_rate_configuration.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\Calculator\\WeightRateConfigurationType',
            'sylius.form.type.shipment_tracking.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentTrackingType',
            'sylius.processor.shipment_processor.class' => 'Sylius\\Bundle\\ShippingBundle\\Processor\\ShipmentProcessor',
            'sylius.form.type.shipping_category_choice.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryEntityType',
            'sylius_shipping.driver' => 'doctrine/orm',
            'sylius_shipping.driver.doctrine/orm' => true,
            'sylius.model.shipment.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Shipment',
            'sylius.repository.shipment.class' => 'Sylius\\Bundle\\CoreBundle\\Repository\\ShipmentRepository',
            'sylius.controller.shipment.class' => 'Sylius\\Bundle\\ShippingBundle\\Controller\\ShipmentController',
            'sylius.form.type.shipment.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentType',
            'sylius.model.shipment_item.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit',
            'sylius.controller.shipment_item.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.shipment_item.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentItemType',
            'sylius.model.shipping_method.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\ShippingMethod',
            'sylius.form.type.shipping_method.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ShippingMethodType',
            'sylius.controller.shipping_method.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.shipping_category.class' => 'Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategory',
            'sylius.controller.shipping_category.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.shipping_category.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryType',
            'sylius.model.shipping_method_rule.class' => 'Sylius\\Bundle\\ShippingBundle\\Model\\Rule',
            'sylius.controller.shipping_method_rule.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.shipping_method_rule.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\RuleType',
            'sylius.validation_group.shipping_category' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_method' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_rule_item_count_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_calculator_flat_rate_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_calculator_per_item_rate_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_calculator_flexible_rate_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_calculator_weight_rate_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.payment_gateway_choice.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentGatewayChoiceType',
            'sylius.form.type.credit_card.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\CreditCardType',
            'sylius.form.type.payment_method_choice.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentMethodEntityType',
            'sylius_payments.driver' => 'doctrine/orm',
            'sylius_payments.driver.doctrine/orm' => true,
            'sylius.controller.payment.class' => 'Sylius\\Bundle\\CoreBundle\\Controller\\PaymentController',
            'sylius.model.payment.class' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment',
            'sylius.form.type.payment.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentType',
            'sylius.model.payment_method.class' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethod',
            'sylius.controller.payment_method.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.payment_method.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentMethodType',
            'sylius.model.credit_card.class' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCard',
            'sylius.controller.credit_card.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.validation_group.payment_method' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.payment' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.credit_card' => array(
                0 => 'sylius',
            ),
            'sylius.payment_gateways' => array(
                'dummy' => 'Test',
                'stripe' => 'Stripe',
                'be2bill' => 'Be2Bill',
            ),
            'sylius.payum.paypal.action.capture_order_using_express_checkout.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Paypal\\Action\\CaptureOrderUsingExpressCheckoutAction',
            'sylius.payum.stripe.action.capture_order_using_credit_card.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Stripe\\Action\\CaptureOrderUsingCreditCardAction',
            'sylius.payum.paypal.action.notify_order.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Paypal\\Action\\NotifyOrderAction',
            'sylius.payum.be2bill.action.capture_order_using_credit_card.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Be2bill\\Action\\CaptureOrderUsingCreditCardAction',
            'sylius.payum.be2bill.action.capture_order_using_be2bill_form.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Be2bill\\Action\\CaptureOrderUsingBe2billFormAction',
            'sylius.payum.be2bill.action.notify.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Be2bill\\Action\\NotifyAction',
            'sylius.payum.dummy.action.capture_order.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Dummy\\Action\\CaptureOrderAction',
            'sylius.payum.dummy.action.order_status.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Dummy\\Action\\OrderStatusAction',
            'sylius.payum.action.order_status.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Action\\OrderStatusAction',
            'sylius.payum.action.obtain_credit_card.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Action\\ObtainCreditCardAction',
            'sylius.payum.action.execute_same_request_with_payment_details.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Action\\ExecuteSameRequestWithPaymentDetailsAction',
            'sylius.repository.payment_security_token.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius_payum.driver' => 'doctrine/orm',
            'sylius_payum.driver.doctrine/orm' => true,
            'sylius.model.payment_security_token.class' => 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken',
            'sylius.controller.payment_security_token.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.promotion_processor.class' => 'Sylius\\Bundle\\PromotionsBundle\\Processor\\PromotionProcessor',
            'sylius.promotion_eligibility_checker.class' => 'Sylius\\Bundle\\PromotionsBundle\\Checker\\PromotionEligibilityChecker',
            'sylius.promotion_rule_checker.item_total.class' => 'Sylius\\Bundle\\PromotionsBundle\\Checker\\ItemTotalRuleChecker',
            'sylius.promotion_rule_checker.item_count.class' => 'Sylius\\Bundle\\PromotionsBundle\\Checker\\ItemCountRuleChecker',
            'sylius.promotion_applicator.class' => 'Sylius\\Bundle\\PromotionsBundle\\Action\\PromotionApplicator',
            'sylius.generator.instructions.class' => 'Sylius\\Bundle\\PromotionsBundle\\Generator\\Instruction',
            'sylius.registry.promotion_rule_checker.class' => 'Sylius\\Bundle\\PromotionsBundle\\Checker\\Registry\\RuleCheckerRegistry',
            'sylius.registry.promotion_action.class' => 'Sylius\\Bundle\\PromotionsBundle\\Action\\Registry\\PromotionActionRegistry',
            'sylius.form.type.promotion.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\PromotionType',
            'sylius.form.type.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\CouponType',
            'sylius.form.type.promotion_rule.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\RuleType',
            'sylius.form.type.promotion_action.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\ActionType',
            'sylius.form.type.promotion_rule_choice.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\RuleChoiceType',
            'sylius.form.type.promotion_rule.item_total_configuration.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\Rule\\ItemTotalConfigurationType',
            'sylius.form.type.promotion_rule.item_count_configuration.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\Rule\\ItemCountConfigurationType',
            'sylius.form.type.promotion_action_choice.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\ActionChoiceType',
            'sylius.form.type.promotion_action.fixed_discount_configuration.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\Action\\FixedDiscountConfigurationType',
            'sylius.form.type.promotion_action.percentage_discount_configuration.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\Action\\PercentageDiscountConfigurationType',
            'sylius.form.type.promotion_coupon_to_code.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\CouponToCodeType',
            'sylius.form.type.promotion_coupon_generate_instruction.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\CouponGenerateInstructionType',
            'sylius.generator.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionsBundle\\Generator\\CouponGenerator',
            'sylius.repository.promotion.class' => 'Sylius\\Bundle\\PromotionsBundle\\Doctrine\\ORM\\PromotionRepository',
            'sylius_promotions.driver' => 'doctrine/orm',
            'sylius_promotions.driver.doctrine/orm' => true,
            'sylius.model.promotion_subject.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Order',
            'sylius.controller.promotion_subject.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.promotion.class' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Promotion',
            'sylius.controller.promotion.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.promotion_rule.class' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Rule',
            'sylius.controller.promotion_rule.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.promotion_action.class' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Action',
            'sylius.controller.promotion_action.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Coupon',
            'sylius.controller.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionsBundle\\Controller\\CouponController',
            'sylius.validation_group.promotion' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_rule' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_coupon' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_action' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_rule_item_total_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_rule_item_count_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_rule_user_loyality_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_rule_shipping_country_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_rule_taxonomy_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_rule_nth_order_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_action_fixed_discount_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_action_percentage_discount_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_action_add_product_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_coupon_generate_instruction' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_action_shipping_discount_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.country_choice.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryEntityChoiceType',
            'sylius.form.type.province_choice.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceChoiceType',
            'sylius.form.type.zone_choice.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneEntityChoiceType',
            'sylius.form.type.zone_member_collection.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberCollectionType',
            'sylius.form.listener.address.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\EventListener\\BuildAddressFormListener',
            'sylius.zone_matcher.class' => 'Sylius\\Bundle\\AddressingBundle\\Matcher\\ZoneMatcher',
            'sylius.validator.shippable_address.class' => 'Sylius\\Bundle\\AddressingBundle\\Validator\\Constraints\\ShippableAddressConstraintValidator',
            'sylius_addressing.driver' => 'doctrine/orm',
            'sylius_addressing.driver.doctrine/orm' => true,
            'sylius.controller.address.class' => 'Sylius\\Bundle\\WebBundle\\Controller\\Frontend\\Account\\AddressController',
            'sylius.model.address.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Address',
            'sylius.form.type.address.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\AddressType',
            'sylius.model.country.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Country',
            'sylius.controller.country.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.country.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryType',
            'sylius.model.province.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Province',
            'sylius.controller.province.class' => 'Sylius\\Bundle\\AddressingBundle\\Controller\\ProvinceController',
            'sylius.form.type.province.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceType',
            'sylius.model.zone.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Zone',
            'sylius.controller.zone.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.zone.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneType',
            'sylius.model.zone_member.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMember',
            'sylius.controller.zone_member.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.zone_member.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberType',
            'sylius.model.zone_member_country.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberCountry',
            'sylius.controller.zone_member_country.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.zone_member_country.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberCountryType',
            'sylius.model.zone_member_province.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberProvince',
            'sylius.controller.zone_member_province.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.zone_member_province.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberProvinceType',
            'sylius.model.zone_member_zone.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberZone',
            'sylius.controller.zone_member_zone.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.zone_member_zone.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberZoneType',
            'sylius.validation_group.address' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.country' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.province' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.zone' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.zone_member' => array(
                0 => 'sylius',
            ),
            'sylius.availability_checker.default.class' => 'Sylius\\Bundle\\InventoryBundle\\Checker\\AvailabilityChecker',
            'sylius.inventory_operator.noop.class' => 'Sylius\\Bundle\\InventoryBundle\\Operator\\NoopInventoryOperator',
            'sylius.inventory_operator.default.class' => 'Sylius\\Bundle\\InventoryBundle\\Operator\\InventoryOperator',
            'sylius.backorders_handler.class' => 'Sylius\\Bundle\\InventoryBundle\\Operator\\BackordersHandler',
            'sylius.inventory_unit_factory.class' => 'Sylius\\Bundle\\InventoryBundle\\Factory\\InventoryUnitFactory',
            'sylius.inventory_listener.class' => 'Sylius\\Bundle\\InventoryBundle\\EventListener\\InventoryChangeListener',
            'sylius.validator.in_stock.class' => 'Sylius\\Bundle\\InventoryBundle\\Validator\\Constraints\\InStockValidator',
            'sylius.inventory_twig.class' => 'Sylius\\Bundle\\InventoryBundle\\Twig\\SyliusInventoryExtension',
            'sylius_inventory.driver' => 'doctrine/orm',
            'sylius_inventory.driver.doctrine/orm' => true,
            'sylius.backorders' => true,
            'sylius.controller.inventory_unit.class' => 'Sylius\\Bundle\\InventoryBundle\\Controller\\InventoryUnitController',
            'sylius.model.inventory_unit.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit',
            'sylius.model.stockable.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Variant',
            'sylius.form.type.taxon_choice.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Form\\Type\\TaxonChoiceType',
            'sylius.form.type.taxon_selection.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Form\\Type\\TaxonSelectionType',
            'sylius.repository.taxonomy.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Doctrine\\ORM\\TaxonomyRepository',
            'sylius.repository.taxon.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Doctrine\\ORM\\TaxonRepository',
            'sylius.form.type.taxonomy_choice.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Form\\Type\\TaxonomyEntityChoiceType',
            'sylius_taxonomies.driver' => 'doctrine/orm',
            'sylius_taxonomies.driver.doctrine/orm' => true,
            'sylius.model.taxonomy.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Taxonomy',
            'sylius.form.type.taxonomy.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxonomyType',
            'sylius.controller.taxonomy.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.taxon.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Taxon',
            'sylius.form.type.taxon.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxonType',
            'sylius.controller.taxon.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Controller\\TaxonController',
            'sylius.validation_group.taxonomy' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.taxon' => array(
                0 => 'sylius',
            ),
            'sylius.process.builder.class' => 'Sylius\\Bundle\\FlowBundle\\Process\\Builder\\ProcessBuilder',
            'sylius.process.validator.class' => 'Sylius\\Bundle\\FlowBundle\\Validator\\ProcessValidator',
            'sylius.process.context.class' => 'Sylius\\Bundle\\FlowBundle\\Process\\Context\\ProcessContext',
            'sylius.controller.process.class' => 'Sylius\\Bundle\\FlowBundle\\Controller\\ProcessController',
            'sylius.process.coordinator.class' => 'Sylius\\Bundle\\FlowBundle\\Process\\Coordinator\\Coordinator',
            'sylius.process_storage.session.class' => 'Sylius\\Bundle\\FlowBundle\\Storage\\SessionStorage',
            'sylius.process_storage.session.bag.class' => 'Sylius\\Bundle\\FlowBundle\\Storage\\SessionFlowsBag',
            'sylius.settings_schema.general.class' => 'Sylius\\Bundle\\CoreBundle\\Settings\\GeneralSettingsSchema',
            'sylius.settings_schema.taxation.class' => 'Sylius\\Bundle\\CoreBundle\\Settings\\TaxationSettingsSchema',
            'sylius.price_calculator.default.class' => 'Sylius\\Bundle\\CoreBundle\\Calculator\\DefaultPriceCalculator',
            'sylius.cart_item_resolver.default.class' => 'Sylius\\Bundle\\CoreBundle\\Cart\\ItemResolver',
            'sylius.checker.restricted_zone.class' => 'Sylius\\Bundle\\CoreBundle\\Checker\\RestrictedZoneChecker',
            'sylius.checkout_scenario.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\CheckoutProcessScenario',
            'sylius.checkout_step.security.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\SecurityStep',
            'sylius.checkout_step.addressing.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\AddressingStep',
            'sylius.checkout_step.shipping.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\ShippingStep',
            'sylius.checkout_step.payment.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\PaymentStep',
            'sylius.checkout_step.purchase.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\PurchaseStep',
            'sylius.checkout_step.finalize.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\FinalizeStep',
            'sylius.order.purger.class' => 'Sylius\\Bundle\\CoreBundle\\Purger\\ExpiredOrdersPurger',
            'sylius.order.releaser.class' => 'Sylius\\Bundle\\CoreBundle\\Releaser\\ExpiredOrdersReleaser',
            'sylius.order_processing.inventory_handler.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\InventoryHandler',
            'sylius.order_processing.state_resolver.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\StateResolver',
            'sylius.order_processing.shipment_factory.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\ShipmentFactory',
            'sylius.order_processing.payment_processor.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\PaymentProcessor',
            'sylius.order_processing.taxation_processor.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\TaxationProcessor',
            'sylius.order_processing.shipping_processor.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\ShippingChargesProcessor',
            'sylius.listener.order_currency.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderCurrencyListener',
            'sylius.listener.order_inventory.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderInventoryListener',
            'sylius.listener.order_item_inventory.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderItemInventoryListener',
            'sylius.listener.inventory_unit.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\InventoryUnitListener',
            'sylius.listener.order_state.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderStateListener',
            'sylius.listener.order_payment.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderPaymentListener',
            'sylius.listener.order_promotion.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderPromotionListener',
            'sylius.listener.order_shipping.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderShippingListener',
            'sylius.listener.shipment.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\ShipmentListener',
            'sylius.listener.order_taxation.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderTaxationListener',
            'sylius.listener.user_update.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\UserUpdateListener',
            'sylius.listener.restricted_zone.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\RestrictedZoneListener',
            'sylius.listener.coupon_usage.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\CouponUsageListener',
            'sylius.listener.order_user.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderUserListener',
            'sylius.listener.purchase.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\PurchaseListener',
            'sylius.listener.insufficient_stock_exception.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\InsufficientStockExceptionListener',
            'sylius.checkout_form.addressing.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\AddressingStepType',
            'sylius.checkout_form.shipping.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\ShippingStepType',
            'sylius.checkout_form.shipment.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\ShipmentType',
            'sylius.checkout_form.payment.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\PaymentStepType',
            'sylius.form.type.image.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ImageType',
            'sylius.form.type.list.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ListType',
            'sylius.form.type.user_filter.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Filter\\UserFilterType',
            'sylius.form.type.product_filter.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Filter\\ProductFilterType',
            'sylius.form.type.order_filter.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Filter\\OrderFilterType',
            'sylius.form.type.shipment_filter.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Filter\\ShipmentFilterType',
            'sylius.listener.image_upload.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\ImageUploadListener',
            'sylius.image_uploader.class' => 'Sylius\\Bundle\\CoreBundle\\Uploader\\ImageUploader',
            'sylius.form.type.promotion_rule.nth_order_configuration.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Rule\\NthOrderConfigurationType',
            'sylius.form.type.promotion_rule.user_loyality_configuration.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Rule\\UserLoyalityConfigurationType',
            'sylius.form.type.promotion_rule.shipping_country_configuration.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Rule\\ShippingCountryConfigurationType',
            'sylius.form.type.promotion_rule.taxonomy_configuration.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Rule\\TaxonomyConfigurationType',
            'sylius.form.type.promotion_action.shipping_discount_configuration.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Action\\ShippingDiscountConfigurationType',
            'sylius.promotion_rule_checker.nth_order.class' => 'Sylius\\Bundle\\CoreBundle\\Promotion\\Checker\\NthOrderRuleChecker',
            'sylius.promotion_rule_checker.user_loyality.class' => 'Sylius\\Bundle\\CoreBundle\\Promotion\\Checker\\UserLoyalityRuleChecker',
            'sylius.promotion_rule_checker.shipping_country.class' => 'Sylius\\Bundle\\CoreBundle\\Promotion\\Checker\\ShippingCountryRuleChecker',
            'sylius.promotion_rule_checker.taxonomy.class' => 'Sylius\\Bundle\\CoreBundle\\Promotion\\Checker\\TaxonomyRuleChecker',
            'sylius.promotion_action.fixed_discount.class' => 'Sylius\\Bundle\\CoreBundle\\Promotion\\Action\\FixedDiscountAction',
            'sylius.promotion_action.percentage_discount.class' => 'Sylius\\Bundle\\CoreBundle\\Promotion\\Action\\PercentageDiscountAction',
            'sylius.promotion_action.shipping_discount.class' => 'Sylius\\Bundle\\CoreBundle\\Promotion\\Action\\ShippingDiscountAction',
            'sylius.promotion_action.add_product.class' => 'Sylius\\Bundle\\CoreBundle\\Promotion\\Action\\AddProductAction',
            'sylius.form.type.promotion_action.add_product_configuration.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Action\\AddProductConfigurationType',
            'sylius.listener.locale.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\LocaleListener',
            'sylius.oauth.user_provider.class' => 'Sylius\\Bundle\\CoreBundle\\OAuth\\UserProvider',
            'sylius.twig.restricted_zone_extension.class' => 'Sylius\\Bundle\\CoreBundle\\Twig\\SyliusRestrictedZoneExtension',
            'sylius.model.variant_image.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\VariantImage',
            'sylius.form.type.group_choice.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\GroupEntityType',
            'sylius_core.driver' => 'doctrine/orm',
            'sylius_core.driver.doctrine/orm' => true,
            'sylius.controller.user.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.user.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\UserType',
            'sylius.model.group.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Group',
            'sylius.controller.group.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.group.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\GroupType',
            'sylius.model.locale.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Locale',
            'sylius.controller.locale.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.locale.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\LocaleType',
            'sylius.model.block.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\SimpleBlock',
            'sylius.controller.block.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.block.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\BlockType',
            'sylius.model.page.class' => 'Symfony\\Cmf\\Bundle\\ContentBundle\\Doctrine\\Phpcr\\StaticContent',
            'sylius.controller.page.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.page.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\PageType',
            'sylius.controller.variant_image.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.mailer.class' => 'Sylius\\Bundle\\CoreBundle\\Mailer\\TwigSwiftMailer',
            'sylius.mailer.order_confirmation.class' => 'Sylius\\Bundle\\CoreBundle\\Mailer\\OrderConfirmationMailer',
            'sylius.email.order_confirmation.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'sylius.email.order_confirmation.template' => 'SyliusWebBundle:Frontend/Email:orderConfirmation.html.twig',
            'sylius.mailer.customer_welcome.class' => 'Sylius\\Bundle\\CoreBundle\\Mailer\\CustomerWelcomeMailer',
            'sylius.email.customer_welcome.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'sylius.email.customer_welcome.template' => 'SyliusWebBundle:Frontend/Email:customerWelcome.html.twig',
            'sylius.controller.frontend.homepage.class' => 'Sylius\\Bundle\\WebBundle\\Controller\\Frontend\\HomepageController',
            'sylius.controller.frontend.account.order.class' => 'Sylius\\Bundle\\WebBundle\\Controller\\Frontend\\Account\\OrderController',
            'sylius.controller.backend.dashboard.class' => 'Sylius\\Bundle\\WebBundle\\Controller\\Backend\\DashboardController',
            'sylius.controller.backend.security.class' => 'Sylius\\Bundle\\WebBundle\\Controller\\Backend\\SecurityController',
            'sylius.controller.backend.form.class' => 'Sylius\\Bundle\\WebBundle\\Controller\\Backend\\FormController',
            'sylius.menu_builder.frontend.class' => 'Sylius\\Bundle\\WebBundle\\Menu\\FrontendMenuBuilder',
            'sylius.menu_builder.backend.class' => 'Sylius\\Bundle\\WebBundle\\Menu\\BackendMenuBuilder',
            'sylius.form.frontend.profile.type.class' => 'Sylius\\Bundle\\WebBundle\\Form\\ProfileFormType',
            'sylius.form.frontend.registration.type.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\RegistrationFormType',
            'sylius.listener.frontend.address.class' => 'Sylius\\Bundle\\WebBundle\\EventListener\\Account\\AddressListener',
            'sylius.controller.configuration_factory.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ConfigurationFactory',
            'sylius.controller.parameters_parser.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ParametersParser',
            'sylius.expression_language.class' => 'Sylius\\Bundle\\ResourceBundle\\ExpressionLanguage\\ExpressionLanguage',
            'sylius.twig.resource.class' => 'Sylius\\Bundle\\ResourceBundle\\Twig\\SyliusResourceExtension',
            'sylius.form.type.object_to_identifier.class' => 'Sylius\\Bundle\\ResourceBundle\\Form\\Type\\ObjectToIdentifierType',
            'sylius.event_subscriber.load_metadata.class' => 'Sylius\\Bundle\\ResourceBundle\\EventListener\\LoadMetadataSubscriber',
            'sylius.event_subscriber.kernel_controller.class' => 'Sylius\\Bundle\\ResourceBundle\\EventListener\\KernelControllerSubscriber',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata_block.blocks' => array(
                'sonata.block.service.text' => array(
                    'contexts' => array(
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(
                    ),
                ),
            ),
            'sonata_block.blocks_by_class' => array(
                'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\RssBlock' => array(
                    'settings' => array(
                        'title' => 'Insert the rss title',
                        'url' => false,
                        'maxItems' => 10,
                        'template' => 'CmfBlockBundle:Block:block_rss.html.twig',
                        'itemClass' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Model\\FeedItem',
                    ),
                    'cache' => 'sonata.cache.noop',
                ),
            ),
            'sonata_block.cache_blocks' => array(
                'by_type' => array(
                    'sonata.block.service.text' => 'sonata.cache.noop',
                ),
                'by_class' => array(
                    'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\RssBlock' => 'sonata.cache.noop',
                ),
            ),
            'cmf_core.persistence.phpcr.manager_name' => NULL,
            'cmf_core.twig_extension.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\Twig\\Extension\\CmfExtension',
            'cmf_core.templating.helper.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\Templating\\Helper\\CmfHelper',
            'cmf_core.listener.request_aware.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\EventListener\\RequestAwareListener',
            'cmf_core.publish_workflow.checker.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\PublishWorkflow\\AlwaysPublishedWorkflowChecker',
            'cmf_core.persistence.phpcr.non_translatable_metadata_listener.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\Doctrine\\Phpcr\\NonTranslatableMetadataListener',
            'cmf_core.phpcr.multilang.locales' => array(
            ),
            'cmf_core.form.type.checkbox_url_label.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\Form\\Type\\CheckboxUrlLabelFormType',
            'cmf_block.twig.cmf_embed_blocks.prefix' => '%embed-block|',
            'cmf_block.twig.cmf_embed_blocks.postfix' => '|end%',
            'cmf_block.rss_controller.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Controller\\RssController',
            'cmf_block.twig_extension.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Twig\\Extension\\CmfBlockExtension',
            'cmf_block.templating.helper.block.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Templating\\Helper\\CmfBlockHelper',
            'cmf_block.fragment.renderer.action.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Fragment\\ActionFragmentRenderer',
            'cmf_block.fragment.path' => '/_cmf_block_fragment',
            'cmf_block.service.simple.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Block\\SimpleBlockService',
            'cmf_block.service.string.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Block\\StringBlockService',
            'cmf_block.service.container.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Block\\ContainerBlockService',
            'cmf_block.service.reference.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Block\\ReferenceBlockService',
            'cmf_block.service.action.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Block\\ActionBlockService',
            'cmf_block.service.slideshow.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Block\\ContainerBlockService',
            'cmf_block.backend_type_phpcr' => true,
            'cmf_block.persistence.phpcr.string_document.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\StringBlock',
            'cmf_block.persistence.phpcr.simple_document.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\SimpleBlock',
            'cmf_block.persistence.phpcr.container_document.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\ContainerBlock',
            'cmf_block.persistence.phpcr.reference_document.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\ReferenceBlock',
            'cmf_block.persistence.phpcr.action_document.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\ActionBlock',
            'cmf_block.persistence.phpcr.imagine_document.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\ImagineBlock',
            'cmf_block.persistence.phpcr.slideshow_document.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Doctrine\\Phpcr\\SlideshowBlock',
            'cmf_block.persistence.phpcr.string_admin.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Admin\\StringBlockAdmin',
            'cmf_block.persistence.phpcr.simple_admin.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Admin\\SimpleBlockAdmin',
            'cmf_block.persistence.phpcr.container_admin.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Admin\\ContainerBlockAdmin',
            'cmf_block.persistence.phpcr.reference_admin.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Admin\\ReferenceBlockAdmin',
            'cmf_block.persistence.phpcr.action_admin.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Admin\\ActionBlockAdmin',
            'cmf_block.persistence.phpcr.imagine_admin.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Admin\\Imagine\\ImagineBlockAdmin',
            'cmf_block.persistence.phpcr.slideshow_admin.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Admin\\Imagine\\SlideshowBlockAdmin',
            'cmf_block.persistence.phpcr.block_basepath' => '/cms/blocks',
            'cmf_block.persistence.phpcr.manager_name' => NULL,
            'cmf_block.persistence.phpcr.block_loader.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Block\\PhpcrBlockLoader',
            'cmf_block.service.imagine.class' => 'Symfony\\Cmf\\Bundle\\BlockBundle\\Block\\SimpleBlockService',
            'cmf_content.default_template' => NULL,
            'cmf_content.backend_type_phpcr' => true,
            'cmf_content.persistence.phpcr.document.class' => 'Symfony\\Cmf\\Bundle\\ContentBundle\\Doctrine\\Phpcr\\StaticContent',
            'cmf_content.persistence.phpcr.admin.class' => 'Symfony\\Cmf\\Bundle\\ContentBundle\\Admin\\StaticContentAdmin',
            'cmf_content.persistence.phpcr.content_basepath' => '/cms/pages',
            'cmf_routing.default_controller' => 'cmf_content.controller:indexAction',
            'cmf_routing.generic_controller' => 'cmf_content.controller:indexAction',
            'cmf_routing.controllers_by_type' => array(
            ),
            'cmf_routing.controllers_by_class' => array(
            ),
            'cmf_routing.templates_by_class' => array(
            ),
            'cmf_routing.uri_filter_regexp' => NULL,
            'cmf_routing.dynamic.locales' => array(
            ),
            'cmf_routing.dynamic_router.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Routing\\DynamicRouter',
            'cmf_routing.route_model.class' => NULL,
            'cmf_routing.nested_matcher.class' => 'Symfony\\Cmf\\Component\\Routing\\NestedMatcher\\NestedMatcher',
            'cmf_routing.final_matcher.class' => 'Symfony\\Cmf\\Component\\Routing\\NestedMatcher\\UrlMatcher',
            'cmf_routing.url_matcher.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'cmf_routing.generator.class' => 'Symfony\\Cmf\\Component\\Routing\\ContentAwareGenerator',
            'cmf_routing.enhancer.route_content.class' => 'Symfony\\Cmf\\Component\\Routing\\Enhancer\\RouteContentEnhancer',
            'cmf_routing.enhancer.default_controller.class' => 'Symfony\\Cmf\\Component\\Routing\\Enhancer\\FieldPresenceEnhancer',
            'cmf_routing.enhancer.explicit_template.class' => 'Symfony\\Cmf\\Component\\Routing\\Enhancer\\FieldPresenceEnhancer',
            'cmf_routing.enhancer.controllers_by_type.class' => 'Symfony\\Cmf\\Component\\Routing\\Enhancer\\FieldMapEnhancer',
            'cmf_routing.enhancer.field_by_class.class' => 'Symfony\\Cmf\\Component\\Routing\\Enhancer\\FieldByClassEnhancer',
            'cmf_routing.redirect_controller.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Controller\\RedirectController',
            'cmf_routing.phpcr_route_provider.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Doctrine\\Phpcr\\RouteProvider',
            'cmf_routing.content_repository.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Doctrine\\Phpcr\\ContentRepository',
            'cmf_routing.phpcrodm_route_idprefix_listener.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Doctrine\\Phpcr\\IdPrefixListener',
            'cmf_routing.phpcrodm_route_locale_listener.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Doctrine\\Phpcr\\LocaleListener',
            'cmf_routing.backend_type_phpcr' => true,
            'cmf_routing.dynamic.persistence.phpcr.route_basepath' => '/cms/routes',
            'cmf_routing.dynamic.persistence.phpcr.content_basepath' => '/cms/content',
            'cmf_routing.dynamic.persistence.phpcr.manager_name' => NULL,
            'cmf_routing.chain_router.class' => 'Symfony\\Cmf\\Component\\Routing\\ChainRouter',
            'cmf_routing.replace_symfony_router' => true,
            'cmf_routing.route_type_type.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Form\\Type\\RouteTypeType',
            'cmf_menu.factory.class' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\ContentAwareFactory',
            'cmf_menu.allow_empty_items' => false,
            'cmf_menu.current_item_voter.uri_prefix.class' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\Voter\\UriPrefixVoter',
            'cmf_menu.current_item_voter.content_identity.class' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\Voter\\RequestContentIdentityVoter',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(
            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\ORM\\Mapping\\DefaultEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => 'C:/xampp/htdocs/bsylius/app/cache/prod/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_phpcr.credentials.class' => 'PHPCR\\SimpleCredentials',
            'doctrine_phpcr.class' => 'Doctrine\\Bundle\\PHPCRBundle\\ManagerRegistry',
            'doctrine_phpcr.sessions' => array(
                'default' => 'doctrine_phpcr.default_session',
            ),
            'doctrine_phpcr.odm.document_managers' => array(
                'default' => 'doctrine_phpcr.odm.default_document_manager',
            ),
            'doctrine_phpcr.default_session' => 'default',
            'doctrine_phpcr.odm.default_document_manager' => 'default',
            'doctrine_phpcr.console_dumper_class' => 'PHPCR\\Util\\Console\\Helper\\PhpcrConsoleDumperHelper',
            'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener.class' => 'Doctrine\\Bundle\\PHPCRBundle\\EventListener\\JackalopeDoctrineDbalSchemaListener',
            'doctrine_phpcr.odm.configuration.class' => 'Doctrine\\ODM\\PHPCR\\Configuration',
            'doctrine_phpcr.odm.document_manager.class' => 'Doctrine\\ODM\\PHPCR\\DocumentManager',
            'doctrine_phpcr.odm.document_manager.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine_phpcr.odm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_phpcr.odm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_phpcr.odm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_phpcr.odm.cache.memcache_host' => 'localhost',
            'doctrine_phpcr.odm.cache.memcache_port' => 11211,
            'doctrine_phpcr.odm.cache.memcache_instance.class' => 'Memcache',
            'doctrine_phpcr.odm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'form.type_guesser.doctrine_phpcr.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Form\\PHPCRTypeGuesser',
            'doctrine_phpcr.odm.form.path_class' => 'Doctrine\\Bundle\\PHPCRBundle\\Form\\Type\\PathType',
            'doctrine_phpcr.odm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine_phpcr.odm.metadata.annotation.class' => 'Doctrine\\ODM\\PHPCR\\Mapping\\Driver\\AnnotationDriver',
            'doctrine_phpcr.odm.metadata.xml.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Mapping\\Driver\\XmlDriver',
            'doctrine_phpcr.odm.metadata.yml.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Mapping\\Driver\\YamlDriver',
            'doctrine_phpcr.odm.metadata.php.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine_phpcr.odm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'doctrine_phpcr.odm.validator.valid_phpcr_odm.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Validator\\Constraints\\ValidPhpcrOdmValidator',
            'doctrine_phpcr.odm.auto_generate_proxy_classes' => false,
            'doctrine_phpcr.odm.proxy_dir' => 'C:/xampp/htdocs/bsylius/app/cache/prod/doctrine/PHPCRProxies',
            'doctrine_phpcr.odm.proxy_namespace' => 'PHPCRProxies',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(
            ),
            'assetic.cache_dir' => 'C:/xampp/htdocs/bsylius/app/cache/prod/assetic',
            'assetic.bundles' => array(
                0 => 'SyliusWebBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => false,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => 'C:/xampp/htdocs/bsylius/app/../web',
            'assetic.write_to' => 'C:/xampp/htdocs/bsylius/app/../web',
            'assetic.variables' => array(
            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(
            ),
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Bundle\\FrameworkBundle\\Fragment\\ContainerAwareHIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'debug.errors_logger_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener',
            'kernel.secret' => 'abc',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(
            ),
            'kernel.trusted_proxies' => array(
            ),
            'kernel.default_locale' => 'en',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
            ),
            'session.save_path' => 'C:/xampp/htdocs/bsylius/app/cache/prod/sessions',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'form.csrf_provider.class' => 'Symfony\\Component\\Form\\Extension\\Csrf\\CsrfProvider\\SessionCsrfProvider',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.mapping.loader.xml_files_loader.mapping_files' => array(
                0 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml',
                1 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\order-bundle\\Sylius\\Bundle\\OrderBundle\\Resources\\config\\validation.xml',
                2 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle\\Resources\\config\\validation.xml',
                3 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle\\Resources\\config\\validation.xml',
                4 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle\\Resources\\config\\validation.xml',
                5 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\product-bundle\\Sylius\\Bundle\\ProductBundle\\Resources\\config\\validation.xml',
                6 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\variable-product-bundle\\Sylius\\Bundle\\VariableProductBundle\\Resources\\config\\validation.xml',
                7 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle\\Resources\\config\\validation.xml',
                8 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle\\Resources\\config\\validation.xml',
                9 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle\\Resources\\config\\validation.xml',
                10 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle\\Resources\\config\\validation.xml',
                11 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle\\Resources\\config\\validation.xml',
                12 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle\\Resources\\config\\validation.xml',
                13 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\sylius\\core-bundle\\Sylius\\Bundle\\CoreBundle\\Resources\\config\\validation.xml',
                14 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\block-bundle\\Symfony\\Cmf\\Bundle\\BlockBundle\\Resources\\config\\validation.xml',
                15 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\content-bundle\\Symfony\\Cmf\\Bundle\\ContentBundle\\Resources\\config\\validation.xml',
                16 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\routing-bundle\\Symfony\\Cmf\\Bundle\\RoutingBundle\\Resources\\config\\validation.xml',
                17 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\symfony-cmf\\menu-bundle\\Symfony\\Cmf\\Bundle\\MenuBundle\\Resources\\config\\validation.xml',
                18 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\validation.xml',
                19 => 'C:\\xampp\\htdocs\\bsylius\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\validation\\orm.xml',
            ),
            'validator.mapping.loader.yaml_files_loader.mapping_files' => array(
            ),
            'validator.translation_domain' => 'validators',
            'data_collector.templates' => array(
            ),
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appProdUrlMatcher',
            'router.options.generator.cache_class' => 'appProdUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'C:/xampp/htdocs/bsylius/app/config/routing.yml',
            'router.cache_class_prefix' => 'appProd',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.swift_mailer.handlers' => array(
            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.main' => NULL,
            ),
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'hwi_oauth.resource_ownermap.configured.main' => array(
                'amazon' => '/login/check-amazon',
                'facebook' => '/login/check-facebook',
                'google' => '/login/check-google',
            ),
            'security.role_hierarchy.roles' => array(
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => 'C:/xampp/htdocs/bsylius/app/cache/prod/swiftmailer/spool/default',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'SyliusWebBundle::forms.html.twig',
                2 => 'LiipImagineBundle:Form:form_div_layout.html.twig',
            ),
            'twig.options' => array(
                'debug' => false,
                'strict_variables' => false,
                'exception_controller' => 'twig.controller.exception:showAction',
                'autoescape_service' => NULL,
                'autoescape_service_method' => NULL,
                'cache' => 'C:/xampp/htdocs/bsylius/app/cache/prod/twig',
                'charset' => 'UTF-8',
                'paths' => array(
                ),
            ),
            'liip_imagine.filter.configuration.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterConfiguration',
            'liip_imagine.filter.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterManager',
            'liip_imagine.data.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\DataManager',
            'liip_imagine.cache.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\CacheManager',
            'liip_imagine.controller.class' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'liip_imagine.routing.loader.class' => 'Liip\\ImagineBundle\\Routing\\ImagineLoader',
            'liip_imagine.twig.extension.class' => 'Liip\\ImagineBundle\\Templating\\ImagineExtension',
            'liip_imagine.templating.helper.class' => 'Liip\\ImagineBundle\\Templating\\Helper\\ImagineHelper',
            'liip_imagine.gd.class' => 'Imagine\\Gd\\Imagine',
            'liip_imagine.imagick.class' => 'Imagine\\Imagick\\Imagine',
            'liip_imagine.gmagick.class' => 'Imagine\\Gmagick\\Imagine',
            'liip_imagine.filter.loader.relative_resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RelativeResizeFilterLoader',
            'liip_imagine.filter.loader.resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ResizeFilterLoader',
            'liip_imagine.filter.loader.thumbnail.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ThumbnailFilterLoader',
            'liip_imagine.filter.loader.crop.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\CropFilterLoader',
            'liip_imagine.filter.loader.paste.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\PasteFilterLoader',
            'liip_imagine.filter.loader.watermark.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\WatermarkFilterLoader',
            'liip_imagine.filter.loader.strip.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\StripFilterLoader',
            'liip_imagine.filter.loader.background.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\BackgroundFilterLoader',
            'liip_imagine.filter.loader.upscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\UpscaleFilterLoader',
            'liip_imagine.filter.loader.auto_rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\AutoRotateFilterLoader',
            'liip_imagine.data.loader.filesystem.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\Loader\\FileSystemLoader',
            'liip_imagine.data.loader.stream.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\Loader\\StreamLoader',
            'liip_imagine.cache.resolver.web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\WebPathResolver',
            'liip_imagine.cache.resolver.no_cache.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\NoCacheResolver',
            'liip_imagine.form.type.image.class' => 'Liip\\ImagineBundle\\Form\\Type\\ImageType',
            'liip_imagine.cache.clearer.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\CacheClearer',
            'liip_imagine.cache_prefix' => '/media/cache',
            'liip_imagine.web_root' => 'C:/xampp/htdocs/bsylius/app/../web',
            'liip_imagine.data_root' => 'C:/xampp/htdocs/bsylius/app/../web/media/image',
            'liip_imagine.cache_mkdir_mode' => 511,
            'liip_imagine.formats' => array(
            ),
            'liip_imagine.cache.resolver.default' => 'web_path',
            'liip_imagine.filter_sets' => array(
                'sylius_small' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 120,
                                1 => 90,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(
                    ),
                ),
                'sylius_medium' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 240,
                                1 => 180,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(
                    ),
                ),
                'sylius_large' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 640,
                                1 => 480,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(
                    ),
                ),
            ),
            'liip_imagine.data.loader.default' => 'filesystem',
            'liip_imagine.controller_action' => 'liip_imagine.controller:filterAction',
            'liip_imagine.cache.resolver.base_path' => '',
            'knp_menu.factory.class' => 'Knp\\Menu\\Silex\\RouterAwareFactory',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(
            ),
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(
            ),
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'knp_gaufrette.filesystem_map.class' => 'Knp\\Bundle\\GaufretteBundle\\FilesystemMap',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(
            ),
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'hwi_oauth.authentication.listener.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\Firewall\\OAuthListener',
            'hwi_oauth.authentication.provider.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\Authentication\\Provider\\OAuthProvider',
            'hwi_oauth.authentication.entry_point.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\EntryPoint\\OAuthEntryPoint',
            'hwi_oauth.user.provider.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\OAuthUserProvider',
            'hwi_oauth.user.provider.entity.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\EntityUserProvider',
            'hwi_oauth.user.provider.fosub_bridge.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\FOSUBUserProvider',
            'hwi_oauth.registration.form.handler.fosub_bridge.class' => 'HWI\\Bundle\\OAuthBundle\\Form\\FOSUBRegistrationFormHandler',
            'hwi_oauth.resource_owner.oauth1.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth1ResourceOwner',
            'hwi_oauth.resource_owner.oauth2.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth2ResourceOwner',
            'hwi_oauth.resource_owner.amazon.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AmazonResourceOwner',
            'hwi_oauth.resource_owner.bitbucket.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitbucketResourceOwner',
            'hwi_oauth.resource_owner.bitly.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitlyResourceOwner',
            'hwi_oauth.resource_owner.box.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BoxResourceOwner',
            'hwi_oauth.resource_owner.dailymotion.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DailymotionResourceOwner',
            'hwi_oauth.resource_owner.deviantart.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DeviantartResourceOwner',
            'hwi_oauth.resource_owner.disqus.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DisqusResourceOwner',
            'hwi_oauth.resource_owner.dropbox.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DropboxResourceOwner',
            'hwi_oauth.resource_owner.eventbrite.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\EventbriteResourceOwner',
            'hwi_oauth.resource_owner.facebook.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FacebookResourceOwner',
            'hwi_oauth.resource_owner.flickr.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FlickrResourceOwner',
            'hwi_oauth.resource_owner.foursquare.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FoursquareResourceOwner',
            'hwi_oauth.resource_owner.github.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GitHubResourceOwner',
            'hwi_oauth.resource_owner.google.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GoogleResourceOwner',
            'hwi_oauth.resource_owner.instagram.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\InstagramResourceOwner',
            'hwi_oauth.resource_owner.jira.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\JiraResourceOwner',
            'hwi_oauth.resource_owner.linkedin.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\LinkedinResourceOwner',
            'hwi_oauth.resource_owner.mailru.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\MailRuResourceOwner',
            'hwi_oauth.resource_owner.qq.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\QQResourceOwner',
            'hwi_oauth.resource_owner.sensio_connect.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SensioConnectResourceOwner',
            'hwi_oauth.resource_owner.sina_weibo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SinaWeiboResourceOwner',
            'hwi_oauth.resource_owner.stack_exchange.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StackExchangeResourceOwner',
            'hwi_oauth.resource_owner.stereomood.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StereomoodResourceOwner',
            'hwi_oauth.resource_owner.trello.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TrelloResourceOwner',
            'hwi_oauth.resource_owner.twitch.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitchResourceOwner',
            'hwi_oauth.resource_owner.twitter.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitterResourceOwner',
            'hwi_oauth.resource_owner.vkontakte.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\VkontakteResourceOwner',
            'hwi_oauth.resource_owner.windows_live.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WindowsLiveResourceOwner',
            'hwi_oauth.resource_owner.wordpress.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WordpressResourceOwner',
            'hwi_oauth.resource_owner.yahoo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YahooResourceOwner',
            'hwi_oauth.resource_owner.yandex.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YandexResourceOwner',
            'hwi_oauth.resource_owner.odnoklassniki.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\OdnoklassnikiResourceOwner',
            'hwi_oauth.resource_owner.37signals.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ThirtySevenSignalsResourceOwner',
            'hwi_oauth.resource_owner.salesforce.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SalesforceResourceOwner',
            'hwi_oauth.resource_ownermap.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\ResourceOwnerMap',
            'hwi_oauth.security.oauth_utils.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\OAuthUtils',
            'hwi_oauth.storage.session.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\RequestDataStorage\\SessionStorage',
            'hwi_oauth.templating.helper.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Templating\\Helper\\OAuthHelper',
            'hwi_oauth.twig.extension.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Twig\\Extension\\OAuthExtension',
            'buzz.client.class' => 'Buzz\\Client\\Curl',
            'hwi_oauth.firewall_name' => 'main',
            'hwi_oauth.target_path_parameter' => NULL,
            'hwi_oauth.resource_owners' => array(
                0 => 'amazon',
                1 => 'facebook',
                2 => 'google',
            ),
            'hwi_oauth.connect' => false,
            'hwi_oauth.templating.engine' => 'twig',
            'fos_rest.serializer.exclusion_strategy.version' => '',
            'fos_rest.serializer.exclusion_strategy.groups' => '',
            'fos_rest.view_handler.jsonp.callback_param' => '',
            'fos_rest.view.exception_wrapper_handler' => 'FOS\\RestBundle\\View\\ExceptionWrapperHandler',
            'fos_rest.view_handler.default.class' => 'FOS\\RestBundle\\View\\ViewHandler',
            'fos_rest.view_handler.jsonp.class' => 'FOS\\RestBundle\\View\\JsonpHandler',
            'fos_rest.routing.loader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteLoader',
            'fos_rest.routing.loader.yaml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestYamlCollectionLoader',
            'fos_rest.routing.loader.xml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestXmlCollectionLoader',
            'fos_rest.routing.loader.processor.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteProcessor',
            'fos_rest.routing.loader.reader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestControllerReader',
            'fos_rest.routing.loader.reader.action.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestActionReader',
            'fos_rest.format_negotiator.class' => 'FOS\\RestBundle\\Util\\FormatNegotiator',
            'fos_rest.inflector.class' => 'FOS\\RestBundle\\Util\\Inflector\\DoctrineInflector',
            'fos_rest.request_matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'fos_rest.violation_formatter.class' => 'FOS\\RestBundle\\Util\\ViolationFormatter',
            'fos_rest.request.param_fetcher.class' => 'FOS\\RestBundle\\Request\\ParamFetcher',
            'fos_rest.request.param_fetcher.reader.class' => 'FOS\\RestBundle\\Request\\ParamReader',
            'fos_rest.cache_dir' => 'C:/xampp/htdocs/bsylius/app/cache/prod/fos_rest',
            'fos_rest.serializer.serialize_null' => false,
            'fos_rest.formats' => array(
                'json' => false,
                'xml' => false,
                'html' => true,
            ),
            'fos_rest.default_engine' => 'twig',
            'fos_rest.force_redirects' => array(
                'html' => 302,
            ),
            'fos_rest.failed_validation' => 400,
            'fos_rest.empty_content' => 204,
            'fos_rest.serialize_null' => false,
            'fos_rest.routing.loader.default_format' => NULL,
            'fos_rest.routing.loader.include_format' => true,
            'fos_rest.exception.codes' => array(
            ),
            'fos_rest.exception.messages' => array(
            ),
            'fos_rest.normalizer.camel_keys.class' => 'FOS\\RestBundle\\Normalizer\\CamelKeysNormalizer',
            'fos_rest.decoder.json.class' => 'FOS\\RestBundle\\Decoder\\JsonDecoder',
            'fos_rest.decoder.jsontoform.class' => 'FOS\\RestBundle\\Decoder\\JsonToFormDecoder',
            'fos_rest.decoder.xml.class' => 'FOS\\RestBundle\\Decoder\\XmlDecoder',
            'fos_rest.decoder_provider.class' => 'FOS\\RestBundle\\Decoder\\ContainerDecoderProvider',
            'fos_rest.body_listener.class' => 'FOS\\RestBundle\\EventListener\\BodyListener',
            'fos_rest.throw_exception_on_unsupported_content_type' => false,
            'fos_rest.decoders' => array(
                'json' => 'fos_rest.decoder.json',
                'xml' => 'fos_rest.decoder.xml',
            ),
            'fos_rest.mime_types' => array(
            ),
            'fos_rest.converter.request_body.validation_errors_argument' => 'validationErrors',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => 'FOSUserBundle:Resetting:email.txt.twig',
            'fos_user.registration.confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\User',
            'fos_user.template.engine' => 'twig',
            'fos_user.profile.form.type' => 'sylius_user_profile',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'sylius_user_registration',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'fos_user_change_password',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'fos_user_resetting',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Group',
            'fos_user.group.form.type' => 'fos_user_group',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'white_october_pagerfanta.default_view' => 'default',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'en',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'jms_translation.twig_extension.class' => 'JMS\\TranslationBundle\\Twig\\TranslationExtension',
            'jms_translation.extractor_manager.class' => 'JMS\\TranslationBundle\\Translation\\ExtractorManager',
            'jms_translation.extractor.file_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\FileExtractor',
            'jms_translation.extractor.file.default_php_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\DefaultPhpFileExtractor',
            'jms_translation.extractor.file.translation_container_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\TranslationContainerExtractor',
            'jms_translation.extractor.file.twig_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\TwigFileExtractor',
            'jms_translation.extractor.file.form_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\FormExtractor',
            'jms_translation.extractor.file.validation_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\ValidationExtractor',
            'jms_translation.extractor.file.authentication_message_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\AuthenticationMessagesExtractor',
            'jms_translation.loader.symfony.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\Symfony\\XliffLoader',
            'jms_translation.loader.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\XliffLoader',
            'jms_translation.loader.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\SymfonyLoaderAdapter',
            'jms_translation.loader_manager.class' => 'JMS\\TranslationBundle\\Translation\\LoaderManager',
            'jms_translation.dumper.php_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\PhpDumper',
            'jms_translation.dumper.xliff_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\XliffDumper',
            'jms_translation.dumper.yaml_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\YamlDumper',
            'jms_translation.dumper.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\SymfonyDumperAdapter',
            'jms_translation.file_writer.class' => 'JMS\\TranslationBundle\\Translation\\FileWriter',
            'jms_translation.updater.class' => 'JMS\\TranslationBundle\\Translation\\Updater',
            'jms_translation.config_factory.class' => 'JMS\\TranslationBundle\\Translation\\ConfigFactory',
            'jms_translation.source_language' => 'en',
            'jms_translation.locales' => array(
            ),
            'knp_snappy.pdf.internal_generator.class' => 'Knp\\Snappy\\Pdf',
            'knp_snappy.pdf.class' => 'Knp\\Bundle\\SnappyBundle\\Snappy\\LoggableGenerator',
            'knp_snappy.pdf.binary' => '/usr/bin/wkhtmltopdf',
            'knp_snappy.pdf.options' => array(
            ),
            'knp_snappy.pdf.env' => array(
            ),
            'knp_snappy.image.internal_generator.class' => 'Knp\\Snappy\\Image',
            'knp_snappy.image.class' => 'Knp\\Bundle\\SnappyBundle\\Snappy\\LoggableGenerator',
            'knp_snappy.image.binary' => '/usr/bin/wkhtmltoimage',
            'knp_snappy.image.options' => array(
            ),
            'knp_snappy.image.env' => array(
            ),
            'payum.class' => 'Payum\\Bundle\\PayumBundle\\Registry\\ContainerAwareRegistry',
            'payum.payment.class' => 'Payum\\Core\\Payment',
            'payum.extension.log_executed_actions.class' => 'Payum\\Core\\Bridge\\Psr\\Log\\LogExecutedActionsExtension',
            'payum.extension.logger.class' => 'Payum\\Core\\Bridge\\Psr\\Log\\LoggerExtension',
            'payum.extension.storage.class' => 'Payum\\Core\\Extension\\StorageExtension',
            'payum.extension.endless_cycle_detector.class' => 'Payum\\Core\\Extension\\EndlessCycleDetectorExtension',
            'payum.buzz.client.class' => 'Buzz\\Client\\Curl',
            'payum.listener.interactive_request.class' => 'Payum\\Bundle\\PayumBundle\\EventListener\\InteractiveRequestListener',
            'payum.action.execute_same_request_with_model_details.class' => 'Payum\\Core\\Action\\ExecuteSameRequestWithModelDetailsAction',
            'payum.action.get_http_query.class' => 'Payum\\Bundle\\PayumBundle\\Action\\GetHttpQueryAction',
            'payum.security.http_request_verifier.class' => 'Payum\\Bundle\\PayumBundle\\Security\\HttpRequestVerifier',
            'payum.security.token_factory.class' => 'Payum\\Bundle\\PayumBundle\\Security\\TokenFactory',
            'payum.storage.doctrine.orm.class' => 'Payum\\Core\\Bridge\\Doctrine\\Storage\\DoctrineStorage',
            'payum.paypal.express_checkout_nvp.api.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Api',
            'payum.paypal.express_checkout_nvp.action.api.authorize_token.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\AuthorizeTokenAction',
            'payum.paypal.express_checkout_nvp.action.api.do_express_checkout_payment.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\DoExpressCheckoutPaymentAction',
            'payum.paypal.express_checkout_nvp.action.api.get_express_checkout_details.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\GetExpressCheckoutDetailsAction',
            'payum.paypal.express_checkout_nvp.action.api.get_transaction_details.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\GetTransactionDetailsAction',
            'payum.paypal.express_checkout_nvp.action.api.set_express_checkout.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\SetExpressCheckoutAction',
            'payum.paypal.express_checkout_nvp.action.api.create_recurring_payment_profile.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\CreateRecurringPaymentProfileAction',
            'payum.paypal.express_checkout_nvp.action.api.get_recurring_payments_profile_details.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\GetRecurringPaymentsProfileDetailsAction',
            'payum.paypal.express_checkout_nvp.action.api.manage_recurring_payments_profile_status.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\ManageRecurringPaymentsProfileStatusAction',
            'payum.paypal.express_checkout_nvp.action.capture.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\CaptureAction',
            'payum.paypal.express_checkout_nvp.action.notify.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\NotifyAction',
            'payum.paypal.express_checkout_nvp.action.payment_details_status.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\PaymentDetailsStatusAction',
            'payum.paypal.express_checkout_nvp.action.payment_details_sync.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\PaymentDetailsSyncAction',
            'payum.paypal.express_checkout_nvp.action.recurring_payment_details_status.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\RecurringPaymentDetailsStatusAction',
            'payum.paypal.express_checkout_nvp.action.recurring_payment_details_sync.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\RecurringPaymentDetailsSyncAction',
            'payum.context.paypal_express_checkout.payment.class' => 'Payum\\Core\\Payment',
            'payum.context.stripe.payment.class' => 'Payum\\Core\\Payment',
            'payum.be2bill.api.class' => 'Payum\\Be2Bill\\Api',
            'payum.be2bill.action.capture.class' => 'Payum\\Be2Bill\\Action\\CaptureAction',
            'payum.be2bill.action.capture_onsite.class' => 'Payum\\Be2Bill\\Action\\CaptureOnsiteAction',
            'payum.be2bill.action.status.class' => 'Payum\\Be2Bill\\Action\\StatusAction',
            'payum.context.be2bill.payment.class' => 'Payum\\Core\\Payment',
            'payum.context.be2bill_onsite.payment.class' => 'Payum\\Core\\Payment',
            'payum.context.dummy.payment.class' => 'Payum\\Core\\Payment',
            'sylius.tax_calculators' => array(
                'default' => 'default',
            ),
            'sylius.shipping_calculators' => array(
                'flat_rate' => 'sylius.form.shipping_calculator.flat_rate_configuration.label',
                'per_item_rate' => 'sylius.form.shipping_calculator.per_item_rate_configuration.label',
                'flexible_rate' => 'sylius.form.shipping_calculator.flexible_rate_configuration.label',
                'weight_rate' => 'sylius.form.shipping_calculator.weight_rate_configuration.label',
            ),
            'sylius.shipping_rules' => array(
                'item_count' => 'Item count',
            ),
            'sylius.promotion_rules' => array(
                'item_total' => 'Item total',
                'item_count' => 'Item count',
                'nth_order' => 'Nth order',
                'user_loyality' => 'User loyality',
                'shipping_country' => 'Shipping country',
                'taxonomy' => 'Taxonomy',
            ),
            'sylius.promotion_actions' => array(
                'fixed_discount' => 'Fixed discount',
                'percentage_discount' => 'Percentage discount',
                'shipping_discount' => 'Shipping discount',
                'add_product' => 'Add product',
            ),
            'doctrine_phpcr.migrate.migrators' => array(
            ),
            'doctrine_phpcr.initialize.initializers' => array(
                0 => 'cmf_content.initializer',
                1 => 'cmf_routing.initializer',
            ),
        );
    }
}
