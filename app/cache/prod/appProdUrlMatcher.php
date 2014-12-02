<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // project_line_of_work_job
        if (preg_match('#^/(?P<_locale>en|pl)/job/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'project_line_of_work_job');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_line_of_work_job')), array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\JobController::indexAction',));
        }

        // project_line_of_work_job_show
        if (preg_match('#^/(?P<_locale>en|pl)/job/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_line_of_work_job_show')), array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\JobController::showAction',));
        }

        // project_line_of_work_job_new
        if (preg_match('#^/(?P<_locale>en|pl)/job/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_line_of_work_job_new')), array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\JobController::newAction',));
        }

        // project_line_of_work_job_create
        if (preg_match('#^/(?P<_locale>en|pl)/job/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_project_line_of_work_job_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_line_of_work_job_create')), array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\JobController::createAction',));
        }
        not_project_line_of_work_job_create:

        // project_line_of_work_job_edit
        if (preg_match('#^/(?P<_locale>en|pl)/job/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_line_of_work_job_edit')), array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\JobController::editAction',));
        }

        // project_line_of_work_job_update
        if (preg_match('#^/(?P<_locale>en|pl)/job/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_project_line_of_work_job_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_line_of_work_job_update')), array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\JobController::updateAction',));
        }
        not_project_line_of_work_job_update:

        // project_line_of_work_job_delete
        if (preg_match('#^/(?P<_locale>en|pl)/job/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_project_line_of_work_job_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_line_of_work_job_delete')), array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\JobController::deleteAction',));
        }
        not_project_line_of_work_job_delete:

        // project_line_of_work_category_show
        if (preg_match('#^/(?P<_locale>en|pl)/category/(?P<slug>[^/]++)/(?P<page>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'project_line_of_work_category_show');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_line_of_work_category_show')), array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\CategoryController::showAction',  'page' => 1,));
        }

        // project_line_of_work_homepage
        if (preg_match('#^/(?P<_locale>en|pl)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_line_of_work_homepage')), array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\PageController::indexAction',));
        }

        // project_line_of_work_language
        if (rtrim($pathinfo, '/') === '/languageChange') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'project_line_of_work_language');
            }

            return array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\PageController::languageAction',  '_route' => 'project_line_of_work_language',);
        }

        if (0 === strpos($pathinfo, '/search')) {
            // project_line_of_work_search
            if ($pathinfo === '/search') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_project_line_of_work_search;
                }

                return array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\PageController::searchAction',  '_route' => 'project_line_of_work_search',);
            }
            not_project_line_of_work_search:

            // project_line_of_work_search_auto
            if ($pathinfo === '/search_auto') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_project_line_of_work_search_auto;
                }

                return array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\PageController::searchAutoAction',  '_route' => 'project_line_of_work_search_auto',);
            }
            not_project_line_of_work_search_auto:

        }

        // project_line_of_work_search_result
        if (preg_match('#^/(?P<_locale>en|pl)/search_result$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_line_of_work_search_result')), array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\PageController::searchResultAction',));
        }

        // project_line_of_work_nonlocalized
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'project_line_of_work_nonlocalized');
            }

            return array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\PageController::indexAction',  '_route' => 'project_line_of_work_nonlocalized',);
        }

        // project_line_of_work_contact
        if (preg_match('#^/(?P<_locale>en|pl)/contact$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_project_line_of_work_contact;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_line_of_work_contact')), array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\PageController::contactAction',));
        }
        not_project_line_of_work_contact:

        // project_line_of_work_about
        if (preg_match('#^/(?P<_locale>en|pl)/about$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_line_of_work_about')), array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\PageController::aboutAction',));
        }

        // project_line_of_work_user_profile
        if (preg_match('#^/(?P<_locale>en|pl)/user/profile$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_line_of_work_user_profile')), array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\UserController::profileAction',));
        }

        // jquery
        if (rtrim($pathinfo, '/') === '/jquery') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'jquery');
            }

            return array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\JqueryController::testAction',  '_route' => 'jquery',);
        }

        // project_line_of_work_commercial
        if ($pathinfo === '/commercial') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_project_line_of_work_commercial;
            }

            return array (  '_controller' => 'Project\\LineOfWorkBundle\\Controller\\PageController::commercialAction',  '_route' => 'project_line_of_work_commercial',);
        }
        not_project_line_of_work_commercial:

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/project/lineofwork')) {
                if (0 === strpos($pathinfo, '/admin/project/lineofwork/category')) {
                    // admin_project_lineofwork_category_list
                    if ($pathinfo === '/admin/project/lineofwork/category/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.category',  '_sonata_name' => 'admin_project_lineofwork_category_list',  '_route' => 'admin_project_lineofwork_category_list',);
                    }

                    // admin_project_lineofwork_category_create
                    if ($pathinfo === '/admin/project/lineofwork/category/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.category',  '_sonata_name' => 'admin_project_lineofwork_category_create',  '_route' => 'admin_project_lineofwork_category_create',);
                    }

                    // admin_project_lineofwork_category_batch
                    if ($pathinfo === '/admin/project/lineofwork/category/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.category',  '_sonata_name' => 'admin_project_lineofwork_category_batch',  '_route' => 'admin_project_lineofwork_category_batch',);
                    }

                    // admin_project_lineofwork_category_edit
                    if (preg_match('#^/admin/project/lineofwork/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_category_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.category',  '_sonata_name' => 'admin_project_lineofwork_category_edit',));
                    }

                    // admin_project_lineofwork_category_delete
                    if (preg_match('#^/admin/project/lineofwork/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_category_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.category',  '_sonata_name' => 'admin_project_lineofwork_category_delete',));
                    }

                    // admin_project_lineofwork_category_show
                    if (preg_match('#^/admin/project/lineofwork/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_category_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.category',  '_sonata_name' => 'admin_project_lineofwork_category_show',));
                    }

                    // admin_project_lineofwork_category_export
                    if ($pathinfo === '/admin/project/lineofwork/category/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.category',  '_sonata_name' => 'admin_project_lineofwork_category_export',  '_route' => 'admin_project_lineofwork_category_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/project/lineofwork/job')) {
                    // admin_project_lineofwork_job_list
                    if ($pathinfo === '/admin/project/lineofwork/job/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.job',  '_sonata_name' => 'admin_project_lineofwork_job_list',  '_route' => 'admin_project_lineofwork_job_list',);
                    }

                    // admin_project_lineofwork_job_create
                    if ($pathinfo === '/admin/project/lineofwork/job/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.job',  '_sonata_name' => 'admin_project_lineofwork_job_create',  '_route' => 'admin_project_lineofwork_job_create',);
                    }

                    // admin_project_lineofwork_job_batch
                    if ($pathinfo === '/admin/project/lineofwork/job/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.job',  '_sonata_name' => 'admin_project_lineofwork_job_batch',  '_route' => 'admin_project_lineofwork_job_batch',);
                    }

                    // admin_project_lineofwork_job_edit
                    if (preg_match('#^/admin/project/lineofwork/job/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_job_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.job',  '_sonata_name' => 'admin_project_lineofwork_job_edit',));
                    }

                    // admin_project_lineofwork_job_delete
                    if (preg_match('#^/admin/project/lineofwork/job/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_job_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.job',  '_sonata_name' => 'admin_project_lineofwork_job_delete',));
                    }

                    // admin_project_lineofwork_job_show
                    if (preg_match('#^/admin/project/lineofwork/job/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_job_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.job',  '_sonata_name' => 'admin_project_lineofwork_job_show',));
                    }

                    // admin_project_lineofwork_job_export
                    if ($pathinfo === '/admin/project/lineofwork/job/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.job',  '_sonata_name' => 'admin_project_lineofwork_job_export',  '_route' => 'admin_project_lineofwork_job_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/project/lineofwork/phrase')) {
                    // admin_project_lineofwork_phrase_list
                    if ($pathinfo === '/admin/project/lineofwork/phrase/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.phrase',  '_sonata_name' => 'admin_project_lineofwork_phrase_list',  '_route' => 'admin_project_lineofwork_phrase_list',);
                    }

                    // admin_project_lineofwork_phrase_create
                    if ($pathinfo === '/admin/project/lineofwork/phrase/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.phrase',  '_sonata_name' => 'admin_project_lineofwork_phrase_create',  '_route' => 'admin_project_lineofwork_phrase_create',);
                    }

                    // admin_project_lineofwork_phrase_batch
                    if ($pathinfo === '/admin/project/lineofwork/phrase/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.phrase',  '_sonata_name' => 'admin_project_lineofwork_phrase_batch',  '_route' => 'admin_project_lineofwork_phrase_batch',);
                    }

                    // admin_project_lineofwork_phrase_edit
                    if (preg_match('#^/admin/project/lineofwork/phrase/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_phrase_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.phrase',  '_sonata_name' => 'admin_project_lineofwork_phrase_edit',));
                    }

                    // admin_project_lineofwork_phrase_delete
                    if (preg_match('#^/admin/project/lineofwork/phrase/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_phrase_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.phrase',  '_sonata_name' => 'admin_project_lineofwork_phrase_delete',));
                    }

                    // admin_project_lineofwork_phrase_show
                    if (preg_match('#^/admin/project/lineofwork/phrase/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_phrase_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.phrase',  '_sonata_name' => 'admin_project_lineofwork_phrase_show',));
                    }

                    // admin_project_lineofwork_phrase_export
                    if ($pathinfo === '/admin/project/lineofwork/phrase/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.phrase',  '_sonata_name' => 'admin_project_lineofwork_phrase_export',  '_route' => 'admin_project_lineofwork_phrase_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/project/lineofwork/feedback')) {
                    // admin_project_lineofwork_feedback_list
                    if ($pathinfo === '/admin/project/lineofwork/feedback/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.feedback',  '_sonata_name' => 'admin_project_lineofwork_feedback_list',  '_route' => 'admin_project_lineofwork_feedback_list',);
                    }

                    // admin_project_lineofwork_feedback_create
                    if ($pathinfo === '/admin/project/lineofwork/feedback/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.feedback',  '_sonata_name' => 'admin_project_lineofwork_feedback_create',  '_route' => 'admin_project_lineofwork_feedback_create',);
                    }

                    // admin_project_lineofwork_feedback_batch
                    if ($pathinfo === '/admin/project/lineofwork/feedback/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.feedback',  '_sonata_name' => 'admin_project_lineofwork_feedback_batch',  '_route' => 'admin_project_lineofwork_feedback_batch',);
                    }

                    // admin_project_lineofwork_feedback_edit
                    if (preg_match('#^/admin/project/lineofwork/feedback/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_feedback_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.feedback',  '_sonata_name' => 'admin_project_lineofwork_feedback_edit',));
                    }

                    // admin_project_lineofwork_feedback_delete
                    if (preg_match('#^/admin/project/lineofwork/feedback/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_feedback_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.feedback',  '_sonata_name' => 'admin_project_lineofwork_feedback_delete',));
                    }

                    // admin_project_lineofwork_feedback_show
                    if (preg_match('#^/admin/project/lineofwork/feedback/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_feedback_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.feedback',  '_sonata_name' => 'admin_project_lineofwork_feedback_show',));
                    }

                    // admin_project_lineofwork_feedback_export
                    if ($pathinfo === '/admin/project/lineofwork/feedback/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.feedback',  '_sonata_name' => 'admin_project_lineofwork_feedback_export',  '_route' => 'admin_project_lineofwork_feedback_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/project/lineofwork/article')) {
                    // admin_project_lineofwork_article_list
                    if ($pathinfo === '/admin/project/lineofwork/article/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_project_lineofwork_article_list',  '_route' => 'admin_project_lineofwork_article_list',);
                    }

                    // admin_project_lineofwork_article_create
                    if ($pathinfo === '/admin/project/lineofwork/article/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_project_lineofwork_article_create',  '_route' => 'admin_project_lineofwork_article_create',);
                    }

                    // admin_project_lineofwork_article_batch
                    if ($pathinfo === '/admin/project/lineofwork/article/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_project_lineofwork_article_batch',  '_route' => 'admin_project_lineofwork_article_batch',);
                    }

                    // admin_project_lineofwork_article_edit
                    if (preg_match('#^/admin/project/lineofwork/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_article_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_project_lineofwork_article_edit',));
                    }

                    // admin_project_lineofwork_article_delete
                    if (preg_match('#^/admin/project/lineofwork/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_article_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_project_lineofwork_article_delete',));
                    }

                    // admin_project_lineofwork_article_show
                    if (preg_match('#^/admin/project/lineofwork/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_article_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_project_lineofwork_article_show',));
                    }

                    // admin_project_lineofwork_article_export
                    if ($pathinfo === '/admin/project/lineofwork/article/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_project_lineofwork_article_export',  '_route' => 'admin_project_lineofwork_article_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/project/lineofwork/commercial')) {
                    // admin_project_lineofwork_commercial_list
                    if ($pathinfo === '/admin/project/lineofwork/commercial/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.commercial',  '_sonata_name' => 'admin_project_lineofwork_commercial_list',  '_route' => 'admin_project_lineofwork_commercial_list',);
                    }

                    // admin_project_lineofwork_commercial_create
                    if ($pathinfo === '/admin/project/lineofwork/commercial/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.commercial',  '_sonata_name' => 'admin_project_lineofwork_commercial_create',  '_route' => 'admin_project_lineofwork_commercial_create',);
                    }

                    // admin_project_lineofwork_commercial_batch
                    if ($pathinfo === '/admin/project/lineofwork/commercial/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.commercial',  '_sonata_name' => 'admin_project_lineofwork_commercial_batch',  '_route' => 'admin_project_lineofwork_commercial_batch',);
                    }

                    // admin_project_lineofwork_commercial_edit
                    if (preg_match('#^/admin/project/lineofwork/commercial/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_commercial_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.commercial',  '_sonata_name' => 'admin_project_lineofwork_commercial_edit',));
                    }

                    // admin_project_lineofwork_commercial_delete
                    if (preg_match('#^/admin/project/lineofwork/commercial/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_commercial_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.commercial',  '_sonata_name' => 'admin_project_lineofwork_commercial_delete',));
                    }

                    // admin_project_lineofwork_commercial_show
                    if (preg_match('#^/admin/project/lineofwork/commercial/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_project_lineofwork_commercial_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.commercial',  '_sonata_name' => 'admin_project_lineofwork_commercial_show',));
                    }

                    // admin_project_lineofwork_commercial_export
                    if ($pathinfo === '/admin/project/lineofwork/commercial/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.commercial',  '_sonata_name' => 'admin_project_lineofwork_commercial_export',  '_route' => 'admin_project_lineofwork_commercial_export',);
                    }

                }

            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
