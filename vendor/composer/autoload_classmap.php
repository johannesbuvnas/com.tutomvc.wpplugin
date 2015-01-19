<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'tutomvc\\ActionCommand' => $baseDir . '/src/php/core/controller/command/action/ActionCommand.php',
    'tutomvc\\AddMetaBoxCommand' => $baseDir . '/src/php/system/controller/actions/meta/AddMetaBoxCommand.php',
    'tutomvc\\AdminEnqueueScriptsCommand' => $baseDir . '/src/php/system/controller/actions/AdminEnqueueScriptsCommand.php',
    'tutomvc\\AdminFooterCommand' => $baseDir . '/src/php/system/controller/actions/AdminFooterCommand.php',
    'tutomvc\\AdminHeadCommand' => $baseDir . '/src/php/system/controller/actions/AdminHeadCommand.php',
    'tutomvc\\AdminInitCommand' => $baseDir . '/src/php/system/controller/actions/AdminInitCommand.php',
    'tutomvc\\AdminMenuCommand' => $baseDir . '/src/php/system/controller/actions/AdminMenuCommand.php',
    'tutomvc\\AdminMenuPage' => $baseDir . '/src/php/system/model/proxy/pages/AdminMenuPage.php',
    'tutomvc\\AdminMenuPageMediator' => $baseDir . '/src/php/system/view/mediators/menu/AdminMenuPageMediator.php',
    'tutomvc\\AdminMenuPageProxy' => $baseDir . '/src/php/system/model/proxy/pages/AdminMenuPageProxy.php',
    'tutomvc\\AdminMenuSettingsPage' => $baseDir . '/src/php/system/model/proxy/pages/AdminMenuSettingsPage.php',
    'tutomvc\\AdminMenuSettingsPageMediator' => $baseDir . '/src/php/system/view/mediators/menu/AdminMenuSettingsPageMediator.php',
    'tutomvc\\AdminNoticesCommand' => $baseDir . '/src/php/system/controller/actions/notification/AdminNoticesCommand.php',
    'tutomvc\\AjaxCommand' => $baseDir . '/src/php/core/controller/command/action/ajax/AjaxCommand.php',
    'tutomvc\\AjaxCommands' => $baseDir . '/src/php/system/controller/ajax/AjaxCommands.php',
    'tutomvc\\ArrayUtil' => $baseDir . '/src/php/core/util/ArrayUtil.php',
    'tutomvc\\AttachmentMetaField' => $baseDir . '/src/php/system/model/proxy/meta/fields/AttachmentMetaField.php',
    'tutomvc\\CodeMediator' => $baseDir . '/src/php/system/view/mediators/util/debug/code/CodeMediator.php',
    'tutomvc\\Command' => $baseDir . '/src/php/core/controller/command/Command.php',
    'tutomvc\\Controller' => $baseDir . '/src/php/core/controller/Controller.php',
    'tutomvc\\CoreClass' => $baseDir . '/src/php/core/CoreClass.php',
    'tutomvc\\DateTimeMetaField' => $baseDir . '/src/php/system/model/proxy/meta/fields/DateTimeMetaField.php',
    'tutomvc\\DefaultFormGroup' => $baseDir . '/src/php/form/groups/DefaultFormGroup.php',
    'tutomvc\\DefaultTitleFilter' => $baseDir . '/src/php/system/controller/filters/post/DefaultTitleFilter.php',
    'tutomvc\\ExceptionCommand' => $baseDir . '/src/php/system/controller/actions/notification/ExceptionCommand.php',
    'tutomvc\\ExceptionMediator' => $baseDir . '/src/php/system/view/mediators/util/debug/exception/ExceptionMediator.php',
    'tutomvc\\Facade' => $baseDir . '/src/php/core/facade/Facade.php',
    'tutomvc\\FacadeProxy' => $baseDir . '/src/php/core/model/proxy/facade/FacadeProxy.php',
    'tutomvc\\FacadeVO' => $baseDir . '/src/php/core/model/proxy/facade/FacadeVO.php',
    'tutomvc\\FileUtil' => $baseDir . '/src/php/core/util/FileUtil.php',
    'tutomvc\\FilterCommand' => $baseDir . '/src/php/core/controller/command/filter/FilterCommand.php',
    'tutomvc\\FormElement' => $baseDir . '/src/php/form/FormElement.php',
    'tutomvc\\FormGroup' => $baseDir . '/src/php/form/groups/FormGroup.php',
    'tutomvc\\FormInput' => $baseDir . '/src/php/form/inputs/FormInput.php',
    'tutomvc\\FormInputAddon' => $baseDir . '/src/php/form/inputs/FormInputAddon.php',
    'tutomvc\\FormInputGroup' => $baseDir . '/src/php/form/inputs/FormInputGroup.php',
    'tutomvc\\FrameworkService' => $baseDir . '/src/php/core/service/FrameworkService.php',
    'tutomvc\\Gateway' => $baseDir . '/src/php/core/service/gateway/Gateway.php',
    'tutomvc\\GatewayConnection' => $baseDir . '/src/php/core/service/gateway/GatewayConnection.php',
    'tutomvc\\GetMetaDatFilter' => $baseDir . '/src/php/system/controller/filters/meta/GetMetaDataFilter.php',
    'tutomvc\\GetMetaValueFilterCommand' => $baseDir . '/src/php/system/controller/filters/meta/GetMetaValueFilterCommand.php',
    'tutomvc\\GetOptionFilterCommand' => $baseDir . '/src/php/system/controller/filters/meta/GetOptionFilterCommand.php',
    'tutomvc\\GetUserMetaDataFilter' => $baseDir . '/src/php/system/controller/filters/meta/user/GetUserMetaDataFilter.php',
    'tutomvc\\GitAddActionCommand' => $baseDir . '/src/php/system/controller/actions/page/settings/GitAddActionCommand.php',
    'tutomvc\\GitPullActionCommand' => $baseDir . '/src/php/system/controller/actions/page/settings/GitPullActionCommand.php',
    'tutomvc\\GitPullFormMediator' => $baseDir . '/src/php/system/view/mediators/menu/settings/tutomvc/content/GitPullFormMediator.php',
    'tutomvc\\GitRepositoryVO' => $baseDir . '/src/php/system/model/vo/repository/GitRepositoryVO.php',
    'tutomvc\\GoogleMapsMetaField' => $baseDir . '/src/php/system/model/proxy/meta/fields/GoogleMapsMetaField.php',
    'tutomvc\\ICommand' => $baseDir . '/src/php/core/controller/command/Command.php',
    'tutomvc\\IMediator' => $baseDir . '/src/php/core/view/mediator/Mediator.php',
    'tutomvc\\IMetaBox' => $baseDir . '/src/php/system/model/proxy/meta/MetaBox.php',
    'tutomvc\\IMetaBoxField' => $baseDir . '/src/php/system/model/proxy/meta/MetaField.php',
    'tutomvc\\IMetaVO' => $baseDir . '/src/php/system/model/proxy/meta/MetaVO.php',
    'tutomvc\\IPostType' => $baseDir . '/src/php/system/model/proxy/posttype/PostType.php',
    'tutomvc\\ImageSize' => $baseDir . '/src/php/system/model/proxy/imagesize/ImageSize.php',
    'tutomvc\\ImageSizeProxy' => $baseDir . '/src/php/system/model/proxy/imagesize/ImageSizeProxy.php',
    'tutomvc\\ImageSizeSelectionFilter' => $baseDir . '/src/php/system/controller/filters/media/ImageSizeSelectionFilter.php',
    'tutomvc\\InitCommand' => $baseDir . '/src/php/system/controller/actions/InitCommand.php',
    'tutomvc\\JSGlobalMediator' => $baseDir . '/src/php/system/view/head/JSGlobalMediator.php',
    'tutomvc\\LinkUtil' => $baseDir . '/src/php/system/utils/LinkUtil.php',
    'tutomvc\\LoadPostAdminPageAction' => $baseDir . '/src/php/system/controller/actions/post/LoadPostAdminPageAction.php',
    'tutomvc\\LogProxy' => $baseDir . '/src/php/system/model/proxy/util/log/LogProxy.php',
    'tutomvc\\Mediator' => $baseDir . '/src/php/core/view/mediator/Mediator.php',
    'tutomvc\\Menu' => $baseDir . '/src/php/system/model/proxy/menu/Menu.php',
    'tutomvc\\MenuProxy' => $baseDir . '/src/php/system/model/proxy/menu/MenuProxy.php',
    'tutomvc\\MetaBox' => $baseDir . '/src/php/system/model/proxy/meta/MetaBox.php',
    'tutomvc\\MetaBoxMediator' => $baseDir . '/src/php/system/view/mediators/meta/MetaBoxMediator.php',
    'tutomvc\\MetaBoxProxy' => $baseDir . '/src/php/system/model/proxy/meta/MetaBoxProxy.php',
    'tutomvc\\MetaBoxProxyMediator' => $baseDir . '/src/php/system/view/mediators/meta/MetaBoxProxyMediator.php',
    'tutomvc\\MetaCondition' => $baseDir . '/src/php/system/model/proxy/meta/MetaCondition.php',
    'tutomvc\\MetaField' => $baseDir . '/src/php/system/model/proxy/meta/MetaField.php',
    'tutomvc\\MetaFieldMediator' => $baseDir . '/src/php/system/view/mediators/meta/MetaFieldMediator.php',
    'tutomvc\\MetaVO' => $baseDir . '/src/php/system/model/proxy/meta/MetaVO.php',
    'tutomvc\\Model' => $baseDir . '/src/php/core/model/Model.php',
    'tutomvc\\NameObject' => $baseDir . '/src/php/core/model/proxy/NameObject.php',
    'tutomvc\\NetworkUtil' => $baseDir . '/src/php/core/util/NetworkUtil.php',
    'tutomvc\\Notification' => $baseDir . '/src/php/system/model/proxy/util/notification/Notification.php',
    'tutomvc\\NotificationMediator' => $baseDir . '/src/php/system/view/mediators/util/notification/NotificationMediator.php',
    'tutomvc\\NotificationProxy' => $baseDir . '/src/php/system/model/proxy/util/notification/NotificationProxy.php',
    'tutomvc\\OptionVO' => $baseDir . '/src/php/system/model/proxy/meta/settings/OptionVO.php',
    'tutomvc\\PostMetaBox' => $baseDir . '/src/php/form/groups/PostMetaBox.php',
    'tutomvc\\PostType' => $baseDir . '/src/php/system/model/proxy/posttype/PostType.php',
    'tutomvc\\PostTypeProxy' => $baseDir . '/src/php/system/model/proxy/posttype/PostTypeProxy.php',
    'tutomvc\\PostUpdatedCommand' => $baseDir . '/src/php/system/controller/actions/post/PostUpdatedCommand.php',
    'tutomvc\\PreGetPostsCommand' => $baseDir . '/src/php/system/controller/actions/post/PreGetPostsCommand.php',
    'tutomvc\\PrePostUpdateCommand' => $baseDir . '/src/php/system/controller/actions/post/PrePostUpdateCommand.php',
    'tutomvc\\PrepareMetaFieldCommand' => $baseDir . '/src/php/system/controller/actions/meta/PrepareMetaFieldCommand.php',
    'tutomvc\\PrintScriptsCommand' => $baseDir . '/src/php/system/controller/actions/PrintScriptsCommand.php',
    'tutomvc\\ProfileUpdateActionCommand' => $baseDir . '/src/php/system/controller/actions/meta/user/ProfileUpdateActionCommand.php',
    'tutomvc\\Proxy' => $baseDir . '/src/php/core/model/proxy/Proxy.php',
    'tutomvc\\RenderAdminMenuPageCommand' => $baseDir . '/src/php/system/controller/actions/page/RenderAdminMenuPageCommand.php',
    'tutomvc\\RenderLogAjaxCommand' => $baseDir . '/src/php/system/controller/ajax/logs/RenderLogAjaxCommand.php',
    'tutomvc\\RenderMetaBoxAjaxCommand' => $baseDir . '/src/php/system/controller/ajax/meta/RenderMetaBoxAjaxCommand.php',
    'tutomvc\\RenderMetaBoxProxyCommand' => $baseDir . '/src/php/system/controller/actions/meta/RenderMetaBoxProxyCommand.php',
    'tutomvc\\RenderSettingsFieldCommand' => $baseDir . '/src/php/system/controller/actions/meta/RenderSettingsFieldCommand.php',
    'tutomvc\\RenderTaxonomyCommand' => $baseDir . '/src/php/system/controller/actions/render/RenderTaxonomyCommand.php',
    'tutomvc\\RenderUserMetaBoxCommand' => $baseDir . '/src/php/system/controller/actions/meta/user/RenderUserMetaBoxCommand.php',
    'tutomvc\\RenderWPEditorAjaxCommand' => $baseDir . '/src/php/system/controller/ajax/meta/RenderWPEditorAjaxCommand.php',
    'tutomvc\\RenderWPEditorCommand' => $baseDir . '/src/php/system/controller/actions/meta/RenderWPEditorCommand.php',
    'tutomvc\\ReproducibleFormGroup' => $baseDir . '/src/php/form/groups/ReproducibleFormGroup.php',
    'tutomvc\\Rule' => $baseDir . '/src/php/form/Rule.php',
    'tutomvc\\SavePostCommand' => $baseDir . '/src/php/system/controller/actions/post/SavePostCommand.php',
    'tutomvc\\SelectFormInput' => $baseDir . '/src/php/form/inputs/SelectFormInput.php',
    'tutomvc\\Settings' => $baseDir . '/src/php/system/model/proxy/meta/settings/Settings.php',
    'tutomvc\\SettingsProxy' => $baseDir . '/src/php/system/model/proxy/meta/settings/SettingsProxy.php',
    'tutomvc\\ShortcodeCommand' => $baseDir . '/src/php/core/controller/command/shortcode/ShortcodeCommand.php',
    'tutomvc\\SingleSelectorMetaField' => $baseDir . '/src/php/system/model/proxy/meta/fields/SingleSelectorMetaField.php',
    'tutomvc\\StringUtil' => $baseDir . '/src/php/core/util/StringUtil.php',
    'tutomvc\\SystemConstants' => $baseDir . '/src/php/system/SystemConstants.php',
    'tutomvc\\SystemFacade' => $baseDir . '/src/php/system/SystemFacade.php',
    'tutomvc\\Taxonomy' => $baseDir . '/src/php/system/model/proxy/taxonomy/Taxonomy.php',
    'tutomvc\\TaxonomyMetaField' => $baseDir . '/src/php/system/model/proxy/meta/fields/TaxonomyMetaField.php',
    'tutomvc\\TaxonomyProxy' => $baseDir . '/src/php/system/model/proxy/taxonomy/TaxonomyProxy.php',
    'tutomvc\\TaxonomyVO' => $baseDir . '/src/php/system/model/proxy/taxonomy/TaxonomyVO.php',
    'tutomvc\\TestFormGroup' => $baseDir . '/src/php/form/TestFormGroup.php',
    'tutomvc\\TestMetaBox' => $baseDir . '/src/php/system/model/proxy/meta/TestMetaBox.php',
    'tutomvc\\TextAreaFormInput' => $baseDir . '/src/php/form/inputs/TextAreaFormInput.php',
    'tutomvc\\TextAreaMetaField' => $baseDir . '/src/php/system/model/proxy/meta/fields/TextAreaMetaField.php',
    'tutomvc\\TutoMVC' => $baseDir . '/src/php/core/TutoMVC.php',
    'tutomvc\\TutoMVCGitPage' => $baseDir . '/src/php/system/model/proxy/pages/settings/logs/TutoMVCGitPage.php',
    'tutomvc\\TutoMVCLogsPage' => $baseDir . '/src/php/system/model/proxy/pages/settings/logs/TutoMVCLogsPage.php',
    'tutomvc\\TutoMVCLogsPageContentMediator' => $baseDir . '/src/php/system/view/mediators/menu/settings/tutomvc/content/TutoMVCLogsPageContentMediator.php',
    'tutomvc\\TutoMVCSettingsPage' => $baseDir . '/src/php/system/model/proxy/pages/settings/TutoMVCSettingsPage.php',
    'tutomvc\\TutoMVCSettingsPageMediator' => $baseDir . '/src/php/system/view/mediators/menu/settings/tutomvc/TutoMVCSettingsPageMediator.php',
    'tutomvc\\URLUtil' => $baseDir . '/src/php/core/util/URLUtil.php',
    'tutomvc\\UserColumnProxy' => $baseDir . '/src/php/system/model/proxy/user/UserColumnProxy.php',
    'tutomvc\\UserMetaBox' => $baseDir . '/src/php/system/model/proxy/meta/user/UserMetaBox.php',
    'tutomvc\\UserMetaProxy' => $baseDir . '/src/php/system/model/proxy/meta/user/UserMetaProxy.php',
    'tutomvc\\UserMetaVO' => $baseDir . '/src/php/system/model/proxy/meta/user/UserMetaVO.php',
    'tutomvc\\ValueObject' => $baseDir . '/src/php/core/model/proxy/ValueObject.php',
    'tutomvc\\View' => $baseDir . '/src/php/core/view/View.php',
    'tutomvc\\WPAdminPostTypeColumn' => $baseDir . '/src/php/system/model/proxy/posttype/column/WPAdminPostTypeColumn.php',
    'tutomvc\\WPAdminTaxonomyColumn' => $baseDir . '/src/php/system/model/proxy/taxonomy/column/WPAdminTaxonomyColumn.php',
    'tutomvc\\WPEditorFormInput' => $baseDir . '/src/php/form/inputs/WPEditorFormInput.php',
    'tutomvc\\WPInsertPostAction' => $baseDir . '/src/php/system/controller/actions/post/WPInsertPostAction.php',
    'tutomvc\\WPInsertPostDataFilter' => $baseDir . '/src/php/system/controller/filters/post/WPInsertPostDataFilter.php',
    'tutomvc\\WPUserColumn' => $baseDir . '/src/php/system/model/proxy/user/WPUserColumn.php',
    'tutomvc\\WhitelistOptionsFilter' => $baseDir . '/src/php/system/controller/filters/meta/WhitelistOptionsFilter.php',
    'tutomvc\\WordPressUtil' => $baseDir . '/src/php/core/util/WordPressUtil.php',
    'tutomvc\\modules\\analytics\\AnalyticsAdminMenuPage' => $baseDir . '/src/php/system/modules/analytics/model/admin/pages/AnalyticsAdminMenuPage.php',
    'tutomvc\\modules\\analytics\\AnalyticsMediator' => $baseDir . '/src/php/system/modules/analytics/view/AnalyticsMediator.php',
    'tutomvc\\modules\\analytics\\AnalyticsModule' => $baseDir . '/src/php/system/modules/analytics/AnalyticsModule.php',
    'tutomvc\\modules\\analytics\\AnalyticsSettings' => $baseDir . '/src/php/system/modules/analytics/model/admin/settings/AnalyticsSettings.php',
    'tutomvc\\modules\\analytics\\GTMMediator' => $baseDir . '/src/php/system/modules/analytics/view/GTMMediator.php',
    'tutomvc\\modules\\analytics\\InitCommand' => $baseDir . '/src/php/system/modules/analytics/controller/actions/InitCommand.php',
    'tutomvc\\modules\\privacy\\AdminInitCommand' => $baseDir . '/src/php/system/modules/member/controller/actions/AdminInitCommand.php',
    'tutomvc\\modules\\privacy\\InitCommand' => $baseDir . '/src/php/system/modules/member/controller/actions/InitCommand.php',
    'tutomvc\\modules\\privacy\\PreGetPostsAction' => $baseDir . '/src/php/system/modules/member/controller/filters/PreGetPostsAction.php',
    'tutomvc\\modules\\privacy\\PrivacyMetaBox' => $baseDir . '/src/php/system/modules/member/model/meta/PrivacyMetaBox.php',
    'tutomvc\\modules\\privacy\\PrivacyModule' => $baseDir . '/src/php/system/modules/member/PrivacyModule.php',
    'tutomvc\\modules\\privacy\\PrivacySettings' => $baseDir . '/src/php/system/modules/member/model/admin/settings/PrivacySettings.php',
    'tutomvc\\modules\\privacy\\PrivacySettingsAdminMenuPage' => $baseDir . '/src/php/system/modules/member/model/admin/pages/PrivacySettingsAdminMenuPage.php',
    'tutomvc\\modules\\privacy\\RestrictWPAdminCommand' => $baseDir . '/src/php/system/modules/member/controller/actions/RestrictWPAdminCommand.php',
    'tutomvc\\modules\\privacy\\ShowAdminBarFilterCommand' => $baseDir . '/src/php/system/modules/member/controller/filters/ShowAdminBarFilterCommand.php',
    'tutomvc\\modules\\privacy\\WPCommand' => $baseDir . '/src/php/system/modules/member/controller/actions/WPCommand.php',
    'tutomvc\\modules\\termpage\\AdminInitCommand' => $baseDir . '/src/php/system/modules/termpage/controller/actions/AdminInitCommand.php',
    'tutomvc\\modules\\termpage\\EditedTermAction' => $baseDir . '/src/php/system/modules/termpage/controller/actions/EditedTermAction.php',
    'tutomvc\\modules\\termpage\\GetPageLinkFilter' => $baseDir . '/src/php/system/modules/termpage/controller/filters/GetPageLinkFilter.php',
    'tutomvc\\modules\\termpage\\GetTermLinkFilter' => $baseDir . '/src/php/system/modules/termpage/controller/filters/GetTermLinkFilter.php',
    'tutomvc\\modules\\termpage\\InitCommand' => $baseDir . '/src/php/system/modules/termpage/controller/actions/InitCommand.php',
    'tutomvc\\modules\\termpage\\LoadPostCommand' => $baseDir . '/src/php/system/modules/termpage/controller/actions/LoadPostCommand.php',
    'tutomvc\\modules\\termpage\\PreGetPostsAction' => $baseDir . '/src/php/system/modules/termpage/controller/actions/PreGetPostsAction.php',
    'tutomvc\\modules\\termpage\\RegisteredTaxonomyAction' => $baseDir . '/src/php/system/modules/termpage/controller/actions/RegisteredTaxonomyAction.php',
    'tutomvc\\modules\\termpage\\TaxonomyAddFormFieldsAction' => $baseDir . '/src/php/system/modules/termpage/controller/actions/TaxonomyAddFormFieldsAction.php',
    'tutomvc\\modules\\termpage\\TermPageModule' => $baseDir . '/src/php/system/modules/termpage/TermPageModule.php',
);
