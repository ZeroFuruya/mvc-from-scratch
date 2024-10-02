<?php return array(
    'root' => array(
        'name' => 'test/app',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '5ddac6ca4e23c8b5e9d90e90254e3d28abef9995',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'test/app' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '5ddac6ca4e23c8b5e9d90e90254e3d28abef9995',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'twbs/bootstrap' => array(
            'pretty_version' => 'v5.3.3',
            'version' => '5.3.3.0',
            'reference' => '6e1f75f420f68e1d52733b8e407fc7c3766c9dba',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twbs/bootstrap',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'twitter/bootstrap' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v5.3.3',
            ),
        ),
    ),
);
