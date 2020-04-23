<?php 

namespace App\Configs;

class Permission {

    const ACTIONS_FOR_ADMIN = [
        'course',
        'course.create',
        'course.store',
        'course.edit',
        'course.update',
        'course.delete',
        
        'category',
        'category.create',
        'category.store',
        'category.edit',
        'category.update',
        'category.delete',
    ];
    
    const ACTIONS_FOR_CUSTOMER = [
        'course',
        'category',
    ];
    
}

?>