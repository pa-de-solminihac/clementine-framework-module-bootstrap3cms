<?php
$ns = $this->getModel('fonctions');
$users = $this->getModel('users');
// lien admin
if ($users->hasPrivilege('manage_contents')) {
    $sidebar = array(
        'Contenus' => array(
            'url' => '#',
            'icon' => '<i class="glyphicon glyphicon-file"></i>',
            'badge' => '',
            'recursive_menu' => array(
                'Gérer les contenus' => array(
                    'url' => __WWW__ . '/cms',
                    'icon' => '<i class="glyphicon glyphicon-pencil"></i>',
                ),
            )
        ),
    );
    if (empty($data['navbar-sidebar'])) {
        $data['navbar-sidebar'] = $sidebar;
    } else {
        $data['navbar-sidebar'] = $ns->array_override($sidebar, $data['navbar-sidebar']);
    }
}
$this->getParentBlock($data);
