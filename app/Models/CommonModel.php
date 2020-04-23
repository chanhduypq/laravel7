<?php 

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CommonModel extends BaseModel {
    /**
     *
     * @var string 
     */
    public $primaryKey = null;
    /**
     *
     * @var array
     * eg: [
                    [
                        'key' => 'column1 in table',
                        'path' => 'path to store'
                    ],
                    [
                        'key' => 'column2 in table',
                        'path' => 'path to store'
                    ]
            ]
     *  
     */
    public $infomationForUploadOneFileOrMore = [];
    /**
     * @var array
     * eg: [
                'title.required' => 'The title field is required.',
                'title.max' => 'The title may not be greater than 100 characters.',
                'title.unique' => 'The title has already been taken.',
            ]
     */
    public $validattionErrorMessages = [];
    /**
     * @var array
     * eg: [
                'title' => [
                    'required',
                    'max:20',
                    'unique:course',
                ],
            ]
     */
    public $rulesForAddingValidattion = [];
    /**
     * @var array
     * eg: [
                'title' => [
                    'required',
                    'max:20',
                ],
            ]
     */
    public $rulesForEditingValidattion = [];
    /**
     * @var array
     * eg: ['created_at', 'updated_at']
     */
    public $columnsUnnessaryInFillable = [];
    /**
     * 
     */
    public static function boot() {
        parent::boot();

        self::creating(function($model) {
            if($model->primaryKey === 'uuid'){
                $model->uuid = Str::uuid()->toString();
            }
            
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
    /**
     * 
     */
    public function __construct() {
        parent::__construct();
        
        $this->setInformationForPrimaryKey();      
//        $this->initFillable();
    }
    /**
     * 
     */
    private function setInformationForPrimaryKey(){
        $this->incrementing = false;
        
        $columns = DB::select( DB::raw('SHOW COLUMNS FROM `'.$this->getTable().'`'));       
        foreach ($columns as $column){
            if($column->Key === 'PRI'){
                $this->primaryKey = $column->Field;
                $this->incrementing = ($column->Extra === 'auto_increment');
                break;
            }
        }
    }
    /**
     * 
     */
    private function initFillable(){
        $columnsInTable = \Illuminate\Support\Facades\Schema::getColumnListing($this->getTable());
        $this->columnsUnnessaryInFillable[] = $this->primaryKey;
        
        foreach ($columnsInTable as $key => $value){
            if(in_array($value, $this->columnsUnnessaryInFillable)){
                unset($columnsInTable[$key]);
            }
        }
        
        $this->fillable = $columnsInTable;
    }

}
