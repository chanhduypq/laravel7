<?php 

namespace App\Configs;

class Pagination {

    const PAGE_COURSE = 'course';
    const PAGE_CATEGORY = 'category';
    
    const LIMIT_COMMON = 2;
    
    const LIMITS = [
        self::PAGE_COURSE => self::LIMIT_COMMON,
        self::PAGE_CATEGORY => self::LIMIT_COMMON,
    ];
    
}

?>