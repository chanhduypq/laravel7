<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;

class CommonServiceProvider {

    /**
     * 
     * @param string $modelClassName
     * @param string | int $limit
     * @return array
     */
    public static function getItems($modelClassName, $limit) {
        if (!$modelClassName) {
            return [];
        }
        
        $items = self::getItemsHasPaginate($modelClassName, $limit);
        
        return [
            'items' => $items
        ];
    }

    public static function getItemsHasPaginate($modelClassName, $limit) {
        if (!$modelClassName) {
            return null;
        }
        
        return $modelClassName::paginate($limit);
    }
    
    /**
     * 
     * @param array $data
     * @param BaseModel $model
     * 
     * @return bool Description
     */
    public static function insertDatabase($data, $model) {
        /**
         * remove $element in $data if not exist in table's column
         */
        $columnsInTable = \Illuminate\Support\Facades\Schema::getColumnListing($model->getTable());
        foreach ($data as $key => $value) {
            if(in_array($key, $columnsInTable)){
                $model->$key = $value;
            }
        }

        /**
         * set created_user, updated_user if table contains these two columns
         */
        if(in_array('created_user', $columnsInTable)){
            $model->created_user = Auth::id();
        }
        if(in_array('updated_user', $columnsInTable)){
            $model->updated_user = Auth::id();
        }
        
        return $model->save();
    }

    /**
     * 
     * @param array $data
     * @param BaseModel $model
     * 
     * @return bool Description
     */
    public static function updateDatabase($data, $model) {
        /**
         * remove $element in $data if not exist in table's column
         */
        $columnsInTable = \Illuminate\Support\Facades\Schema::getColumnListing($model->getTable());
        
        foreach ($data as $key => $value) {
            if(in_array($key, $columnsInTable)){
                $model->$key = $value;
            }
        }
        
        /**
         * set updated_user if table contains this column
         */
        if(in_array('updated_user', $columnsInTable)){
            $model->updated_user = Auth::id();
        }
        
        return $model->save();
    }

}
