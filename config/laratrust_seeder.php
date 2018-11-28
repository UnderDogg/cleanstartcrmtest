<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'staff' => 'c,p,r,u,d',
            'core' => 'c,p,r,u,d',
            'calendar' => 'c,p,r,u,d',
            'crm' => 'c,p,r,u,d',
            'email' => 'c,p,r,u,d',
            'hrm' => 'c,p,r,u,d',
            'invoices' => 'c,p,r,u,d',
            'expenses' => 'c,p,r,u,d',
            'projects' => 'c,p,r,u,d',
            'tickets' => 'c,p,r,u,d',
            'tradesales' => 'c,p,r,u,d',
            'tradepurchase' => 'c,p,r,u,d',
            'warehouse' => 'c,p,r,u,d',
            'acl' => 'c,p,r,u,d',
            'profile' => 'r,u'
        ],
        'owner' => [
            'staff' => 'c,p,r,u,d',
            'core' => 'c,p,r,u,d',
            'calendar' => 'c,p,r,u,d',
            'crm' => 'c,p,r,u,d',
            'email' => 'c,p,r,u,d',
            'hrm' => 'c,p,r,u,d',
            'invoices' => 'c,p,r,u,d',
            'expenses' => 'c,p,r,u,d',
            'projects' => 'c,p,r,u,d',
            'tickets' => 'c,p,r,u,d',
            'tradesales' => 'c,p,r,u,d',
            'tradepurchase' => 'c,p,r,u,d',
            'warehouse' => 'c,p,r,u,d',
            'acl' => 'c,p,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'staff' => 'c,p,r,u,d',
            'core' => 'c,p,r,u,d',
            'calendar' => 'c,p,r,u,d',
            'crm' => 'c,p,r,u,d',
            'email' => 'c,p,r,u,d',
            'hrm' => 'c,p,r,u,d',
            'invoices' => 'c,p,r,u,d',
            'expenses' => 'c,p,r,u,d',
            'projects' => 'c,p,r,u,d',
            'tickets' => 'c,p,r,u,d',
            'tradesales' => 'c,p,r,u,d',
            'tradepurchase' => 'c,p,r,u,d',
            'warehouse' => 'c,p,r,u,d',
            'profile' => 'r,u'
        ],
        'manager' => [
            'staff' => 'c,p,r,u,d',
            'core' => 'c,p,r,u,d',
            'calendar' => 'c,p,r,u,d',
            'crm' => 'c,p,r,u,d',
            'email' => 'c,p,r,u,d',
            'hrm' => 'c,p,r,u,d',
            'invoices' => 'c,p,r,u,d',
            'expenses' => 'c,p,r,u,d',
            'projects' => 'c,p,r,u,d',
            'tickets' => 'c,p,r,u,d',
            'tradesales' => 'c,p,r,u,d',
            'tradepurchase' => 'c,p,r,u,d',
            'warehouse' => 'c,p,r,u,d',
            'profile' => 'r,u'
        ],
        'teamleader' => [
            'staff' => 'c,p,r,u',
            'calendar' => 'c,p,r,u',
            'crm' => 'c,p,r,u',
            'email' => 'c,p,r,u',
            'hrm' => 'r,u',
            'invoices' => 'c,p,r,u',
            'expenses' => 'c,p,r,u',
            'projects' => 'c,p,r,u',
            'tickets' => 'c,p,r,u',
            'tradesales' => 'c,p,r,u',
            'tradepurchase' => 'c,p,r,u',
            'warehouse' => 'c,p,r,u',
            'profile' => 'r,u'
        ],
        'staff' => [
            'calendar' => 'c,p,r,u',
            'crm' => 'c,p,r,u',
            'email' => 'c,p,r,u',
            'hrm' => 'r,u',
            'invoices' => 'c,p,r,u',
            'expenses' => 'c,p,r,u',
            'projects' => 'c,p,r,u',
            'tickets' => 'c,p,r,u',
            'tradesales' => 'c,p,r,u',
            'tradepurchase' => 'c,p,r,u',
            'warehouse' => 'c,p,r,u',
            'profile' => 'r,u'
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,p,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'p' => 'copy',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
