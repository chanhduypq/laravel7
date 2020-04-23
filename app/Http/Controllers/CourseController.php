<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configs\Pagination;
use App\Configs\Message\Flash as MessageAfterSubmit;
use App\Models\Category;

class CourseController extends Controller {

    /**
     * 
     */
    public function __construct() {
        $this->initModel();
        $this->initPagination();
        $this->initMessage();

        $this->folderNameForView = 'course';
        $this->rootRouteName = 'course';
        
    }
    

    /**
     * 
     */
    public function index() {
        return parent::index();
    }
    /**
     * 
     */
    public function create() {
        //pass data to view
        $categories = ['categories' => Category::all()];
        $this->dataForView = array_merge($this->dataForView, $categories);
        return parent::create();
    }
    /**
     * 
     */
    public function edit($primaryKeyValue) {
        //pass data to view
        $categories = ['categories' => Category::all()];
        $this->dataForView = array_merge($this->dataForView, $categories);
        return parent::edit($primaryKeyValue);
    }
    /**
     * 
     */
    public function delete($primaryKeyValue) {
        return parent::delete($primaryKeyValue);
    }
    /**
     * 
     */
    public function store(Request $request) {
        return parent::store($request);
    }

    /**
     * 
     */
    public function update(Request $request, $primaryKeyValue) {
        return parent::update($request, $primaryKeyValue);
    }
    /**
     * 
     */
    public function download($primaryKeyValue, $columnName) {
        return parent::download($primaryKeyValue, $columnName);
    }
    
    /**
     * 
     */
    private function initModel() {
        $this->modelClassName = '\App\Models\Course';
        $this->model = new $this->modelClassName();
    }
    /**
     * 
     */
    private function initPagination() {
        $this->limit = Pagination::LIMITS[Pagination::PAGE_COURSE];
    }
    /**
     * 
     */
    private function initMessage() {
        $this->messageAfterInsertSuccessly = MessageAfterSubmit::MESSAGE_AFTER_INSERT_SUCCESSFULLY;
        $this->messageAfterInsertFail = MessageAfterSubmit::MESSAGE_AFTER_INSERT_ERROR;
        $this->messageAfterUpdateFail = MessageAfterSubmit::MESSAGE_AFTER_UPDATE_ERROR;
        $this->messageAfterUpdateSuccessly = MessageAfterSubmit::MESSAGE_AFTER_UPDATE_SUCCESSFULLY;
    }

}