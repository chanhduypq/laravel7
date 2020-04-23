<?php

namespace App\Logic;

use App\Logic\Common as LogicCommon;

class Category {

    /**
     * 
     */
    public static function insertDatabase($request, $model, $successMessge, $errorMessage) {
        LogicCommon::insertDatabase($request, $model, $successMessge, $errorMessage);
    }

    /**
     * 
     */
    public static function updateDatabase($request, $model, $successMessge, $errorMessage) {
        LogicCommon::updateDatabase($request, $model, $successMessge, $errorMessage);
    }

}
