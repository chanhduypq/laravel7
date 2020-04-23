<?php

namespace App\Models;

class Category extends CommonModel {

    /**
     *
     * @var string 
     */
    public $table = 'category';
    /**
     * 
     */
    public static function boot() {
        parent::boot();

        self::creating(function($model) {
            
        });

        self::created(function($model) {
            
        });

        self::updating(function($model) {
            
        });

        self::updated(function($model) {
            
        });

        self::deleting(function($model) {
            //delete courses relate to this category, then delete courses relate to this category
            \Illuminate\Support\Facades\DB::table('course')
                ->where('category_id','=', $model->id)
                ->delete();
        });

        self::deleted(function($model) {
            
        });
    }

    /**
     * 
     */
    public function __construct() {
        parent::__construct();

        $this->initRulesForValidattion();
        $this->initColumnsUnnessaryInFillable();
        $this->initInfomationForUploadOneFileOrMore();
    }
    /**
     * Get the courses for the category.
     */
    public function courses() {
        return $this->hasMany('App\Models\Course', 'category_id', 'id');
    }
    /**
     * 
     */
    private function initRulesForValidattion() {
        $this->initRulesForAddingValidattion();
        $this->initRulesForEditingValidattion();
        $this->initValidattionErrorMessages();
    }
    /**
     * 
     */
    private function initRulesForAddingValidattion() {
        $this->rulesForAddingValidattion = [
            'title' => [
                'required',
                'max:30',
                'unique:course',
            ],
        ];
    }
    /**
     * 
     */
    private function initRulesForEditingValidattion() {
        $this->rulesForEditingValidattion = [
            'title' => [
                'required',
                'max:100',
            ],
        ];
    }
    /**
     * 
     */
    private function initValidattionErrorMessages() {
        $this->validattionErrorMessages = [
            'title.required' => 'The title field is required.',
            'title.max' => 'hiếu',
//            'title.min' => 'hiếu12',
            'title.unique' => 'The title has already been taken.',
        ];
    }
    /**
     * 
     */
    private function initColumnsUnnessaryInFillable() {
        $this->columnsUnnessaryInFillable = ['created_at', 'updated_at'];
    }
    /**
     * 
     */
    private function initInfomationForUploadOneFileOrMore() {
        $this->infomationForUploadOneFileOrMore = [];
    }

}

?>