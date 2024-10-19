<?php
return [
    '/' => ['controller' => 'HomeController', 'action' => 'index'],
    '/incidents' => ['controller' => 'IncidentController', 'action' => 'list'],
    '/add' => ['controller' => 'IncidentController', 'action' => 'addForm'],
    '/create' => ['controller' => 'IncidentController', 'action' => 'create'],
    '/edit' => ['controller' => 'IncidentController', 'action' => 'editForm'],
    '/update' => ['controller' => 'IncidentController', 'action' => 'update'],
    '/delete' => ['controller' => 'IncidentController', 'action' => 'delete'],
];
