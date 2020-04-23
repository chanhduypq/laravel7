<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configs\Pagination;
use App\Configs\Message\Flash as MessageAfterSubmit;

class CategoryController extends Controller {

    /**
     * 
     */
    public function __construct() {
        $this->initModel();
        $this->initPagination();
        $this->initMessage();
        
        $this->folderNameForView = 'category';
        $this->rootRouteName = 'category';
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
        return parent::create();
    }
    /**
     * 
     */
    public function edit($primaryKeyValue) {
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
    private function initModel() {
        $this->modelClassName = '\App\Models\Category';
        $this->model = new $this->modelClassName();
    }
    /**
     * 
     */
    private function initPagination() {
        $this->limit = Pagination::LIMITS[Pagination::PAGE_CATEGORY];
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