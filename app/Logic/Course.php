<?php 

namespace App\Logic;

use App\Logic\Common as LogicCommon;

class Course {

    /**
     * 
     */
    public static function insertDatabase($request, $model, $successMessge, $errorMessage, $optionData = []) {
        LogicCommon::insertDatabase($request, $model, $successMessge, $errorMessage, $optionData);
    }

    /**
     * 
     */
    public static function updateDatabase($request, $model, $successMessge, $errorMessage, $optionData = []) {
        LogicCommon::updateDatabase($request, $model, $successMessge, $errorMessage, $optionData);
    }
    /**
     * 
     */
    public static function uploadFile($model, $request, $infomationForUploadOneFileOrMore) {
        return LogicCommon::uploadFile($model, $request, $infomationForUploadOneFileOrMore);
    }

}
