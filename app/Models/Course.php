<?php

namespace App\Models;

class Course extends CommonModel {

    public $table = 'course';

    public static function boot() {
        parent::boot();

        self::creating(function($model) {
            $model->status = 0;
            $model->is_published = 0;
            $model->is_cancel = 0;
            
        });

        self::created(function($model) {
            
        });

        self::updating(function($model) {
            
        });

        self::updated(function($model) {
            
        });

        self::deleting(function($model) {
            
        });

        self::deleted(function($model) {
            
        });
    }

    public function __construct() {
        parent::__construct();

        $this->initRulesForValidattion();
        $this->initColumnsUnnessaryInFillable();
        $this->initInfomationForUploadOneFileOrMore();
    }

    /**
     * 
     * @return \App\Models\Category
     */
    public function category() {        
        return $this->belongsTo('App\Models\Category', 'category_id','id');
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
                'max:20',
                'unique:course',
            ],
            'description' => 'required',
            'category_id' => 'required',
            'document_file' => 'file|max:2048|mimes:doc,docx,sql',
            'icon' => 'file|max:2048|mimes:gif,jpg,jpeg,png',
        ];
    }

    /**
     * 
     */
    private function initRulesForEditingValidattion() {
//        $primaryKey = $this->primaryKey;
        $this->rulesForEditingValidattion = [
            'title' => [
                'required',
                'max:100',
//                Rule::unique($this->table)->ignore($this->$primaryKey, $primaryKey)
            ],
            'description' => 'required',
            'category_id' => 'required',
            'document_file' => 'file|max:2048|mimes:doc,docx,sql',
            'icon' => 'file|max:2048|mimes:gif,jpg,jpeg,png',
        ];
    }

    /**
     * 
     */
    private function initValidattionErrorMessages() {
        $this->validattionErrorMessages = [
            'title.required' => 'The title field is required.',
            'description.required' => 'The description field is required.',
            'category_id.required' => 'The category field is required.',
            'title.max' => 'The title may not be greater than 100 characters.',
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