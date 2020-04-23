<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Providers\CommonServiceProvider;
use App\Providers\AuthServiceProvider;
use App\Configs\Permission;
use App\Configs\Pagination;
use App\Logic\Common as LogicCommon;

class Controller extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    /**
     *
     * @var BaseModel 
     * eg: \App\Models\Category
     */
    public $model = null;

    /**
     *
     * @var string  
     * eg: '\App\Models\Category'
     */
    public $modelClassName = null;

    /**
     *
     * @var int 
     */
    public $limit = Pagination::LIMIT_COMMON;

    /**
     *
     * @var array
     * eg: ['item' => $item] 
     */
    public $dataForView = [];

    /**
     *
     * @var string
     * eg: 'home', it means that the folder [home] contains files: index.blade.php, edit.blade.php,....
     */
    public $folderNameForView = null;

    /**
     *
     * @var string
     * eg: 'home' => return redirect('home');
     */
    public $rootRouteName = null;

    /**
     *
     * @var string 
     */
    public $messageAfterInsertSuccessly = null;

    /**
     *
     * @var string 
     */
    public $messageAfterInsertFail = null;

    /**
     *
     * @var string 
     */
    public $messageAfterUpdateSuccessly = null;

    /**
     *
     * @var string 
     */
    public $messageAfterUpdateFail = null;

    /**
     * 
     */
    public function index() {
        //pass data to view
        $items = CommonServiceProvider::getItems($this->modelClassName, $this->limit);
        $this->dataForView = array_merge($this->dataForView, $items);

        $view = $this->folderNameForView . '.index';
        return view($view, $this->dataForView);
    }

    /**
     * 
     */
    public function create() {
        $view = $this->folderNameForView . '.create';
        return view($view, $this->dataForView);
    }

    /**
     * 
     */
    public function store(Request $request) {
        $validator = LogicCommon::checkValidationForAdding($this->model, $request->all());

        if ($validator->fails()) {
            return redirect($this->rootRouteName . '/create')
                            ->withErrors($validator->errors())
                            ->withInput();
        } else {
            
            //upload file
            $optionData = (count($this->model->infomationForUploadOneFileOrMore) > 0) ? LogicCommon::uploadFile($this->model, $request, $this->model->infomationForUploadOneFileOrMore) : [];
            //save on database
            LogicCommon::insertDatabase($request, $this->model, $this->messageAfterInsertSuccessly, $this->messageAfterInsertFail, $optionData);

            return redirect($this->rootRouteName);
        }
    }

    /**
     * 
     */
    public function edit($primaryKeyValue) {
        $model = $this->modelClassName::find($primaryKeyValue);
        /**
         * if the item has been removed
         */
        if ($model == null) {
            return redirect($this->rootRouteName);
        }
        //pass data to view
        $item = ['item' => $model];
        $this->dataForView = array_merge($this->dataForView, $item);

        $view = $this->folderNameForView . '.edit';
        return view($view, $this->dataForView);
    }

    /**
     * 
     */
    public function update(Request $request, $primaryKeyValue) {
        $model = $this->modelClassName::find($primaryKeyValue);
        /**
         * if the item has been removed
         */
        if ($model == null) {
            return redirect($this->rootRouteName);
        }
        /**
         * 
         */
        $validator = LogicCommon::checkValidationForEditing($model, $request->all());
        if ($validator->fails()) {
            return redirect($this->rootRouteName . '/edit/' . $primaryKeyValue)
                            ->withErrors($validator->errors())
                            ->withInput();
        } else {
            //upload file
            $optionData = (count($model->infomationForUploadOneFileOrMore) > 0) ? LogicCommon::uploadFile($model, $request, $model->infomationForUploadOneFileOrMore) : [];
            //save on database
            LogicCommon::updateDatabase($request, $model, $this->messageAfterUpdateSuccessly, $this->messageAfterUpdateFail, $optionData);

            return redirect($this->rootRouteName);
        }
    }

    /**
     * 
     */
    public function detail($primaryKeyValue) {
        $model = $this->modelClassName::find($primaryKeyValue);
        /**
         * if the item has been removed
         */
        if ($model == null) {
            return redirect($this->rootRouteName);
        }
        //pass data to view
        $this->dataForView = array_merge($this->dataForView, ['item' => $model]);

        $view = $this->folderNameForView . '.detail';
        return view($view, $this->dataForView);
    }

    /**
     * 
     */
    public function download($primaryKeyValue, $columnName) {
        $model = $this->modelClassName::find($primaryKeyValue);
        /**
         * if the item has been removed
         */
        if ($model == null) {
            return redirect($this->rootRouteName);
        }
        // get path
        $path = '';
        foreach ($this->infomationForUploadOneFileOrMore as $file) {
            if ($file['key'] == $columnName) {
                $path = $file['path'];
            }
        }
        //download
        return response()->download(storage_path('app/' . $path . '/' . $model->$columnName));
    }

    /**
     * 
     */
    public function delete($primaryKeyValue) {
        $model = $this->modelClassName::find($primaryKeyValue);
        /**
         * if the item has been removed
         */
        if ($model == null) {
            return redirect($this->rootRouteName);
        }
        /**
         * delete files on server
         */
        if (count($model->infomationForUploadOneFileOrMore) > 0) {
            LogicCommon::deleleFileIfExist($model, $model->infomationForUploadOneFileOrMore);
        }
        /**
         * delete record on database
         */
        $model->delete();

        return redirect($this->rootRouteName);
    }

    /**
     * 
     */
    public function mail() {
        $infomations = [
            'subject' => 'Tue Test',
            'attachPath' => '/courses/test.pdf',
            'attachName' => 'test.pdf',
            'attachMime' => 'application/pdf',
        ];
        $toMail = 'tue.tran@enouvo.com';

        LogicCommon::mail($toMail, $infomations);
    }

}
