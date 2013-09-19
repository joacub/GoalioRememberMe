<?php
return array(
    'view_manager' => array(
        'template_map' => array(
            'zfc-user/user/login' => __DIR__ . '/../view/zfc-user/user/login.phtml',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'goaliorememberme' => 'GoalioRememberMe\Controller\RememberMeController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'zfcuser' => array(
                'child_routes' => array(
                    'remember_me' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/remember-me',
                            'defaults' => array(
                                'controller' => 'goaliorememberme',
                                'action'     => 'remember-me',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);