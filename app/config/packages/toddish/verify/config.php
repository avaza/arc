<?php
return [

    'identified_by' => ['email'],

    // The Super Admin role
    // (returns true for all permissions)
    'super_admin' => 'Super Admin',

    // DB prefix for tables
    'prefix' => '',

    // Define Models.
    'models' => [
        'user' => 'User',
        'role' => 'Toddish\Verify\Models\Role',
        'permission' => 'Toddish\Verify\Models\Permission',
    ]

];
