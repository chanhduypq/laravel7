<?php

namespace App\Logic;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Providers\CommonServiceProvider;
use Illuminate\Support\Facades\Mail;

class Common {

    /**
     * 
     */
    public static function checkValidationForAdding($model, $data) {
        $validator = Validator::make($data, $model->rulesForAddingValidattion, $model->validattionErrorMessages);
        return $validator;
    }

    /**
     * 
     */
    public static function checkValidationForEditing($model, $data) {
        $primaryKey = $model->primaryKey;

        $rules = $model->rulesForEditingValidattion;
        $rules['title'][] = Rule::unique($model->table)->ignore($model->$primaryKey, $primaryKey);

        $validator = Validator::make($data, $rules, $model->validattionErrorMessages);
        return $validator;
    }

    /**
     * 
     */
    public static function insertDatabase($request, $model, $successMessge, $errorMessage, $optionData = []) {
        $data = array_merge($request->all(), $optionData);
        
        if (CommonServiceProvider::insertDatabase($data, $model)) {
            session()->flash('successful', $successMessge);
        } else {
            session()->flash('error', $errorMessage);
        }
    }

    /**
     * 
     */
    public static function updateDatabase($request, $model, $successMessge, $errorMessage, $optionData = []) {
        $data = array_merge($request->all(), $optionData);
        if (CommonServiceProvider::updateDatabase($data, $model)) {
            session()->flash('successful', $successMessge);
        } else {
            session()->flash('error', $errorMessage);
        }
    }

    /**
     * 
     */
    public static function deleleFileIfExist($model, $infomationForUploadOneFileOrMore) {
        foreach ($infomationForUploadOneFileOrMore as $file) {
            $path = $file['path'];
            $key = $file['key'];
            \Illuminate\Support\Facades\Storage::delete($path . '/' . $model->$key);
        }
    }

    /**
     * 
     */
    public static function uploadFile($model, $request, $infomationForUploadOneFileOrMore) {
        $optionData = [];
        foreach ($infomationForUploadOneFileOrMore as $file) {
            $key = $file['key'];
            if ($request->file($file['key']) != null) {
                //upload
                $path = $request->file($file['key'])->store($file['path']);
                //set value for field; eg: table.column = 'sample.docx'
                $optionData[$key] = str_replace($file['path'] . '/', '', $path);
                //
                self::preventRenameFileAutomatic($request, $file, $oldFileName = $path, $optionData);
                // delete old file
                \Illuminate\Support\Facades\Storage::delete($file['path'] . '/' . $model->$key);
            }
        }
        return $optionData;
    }

    /**
     * 
     * @param type $toMail
     * @param type $infomations 
     *              eg: $infomations = [
                            'subject' => 'Test Subject',
                            'attachPath' => '/courses/test.pdf',
                            'attachName' => 'test.pdf',
                            'attachMime' => 'application/pdf',
                        ];
     *              keys: subject, attachPath, attachName, attachMime, their name is static
     */
    public static function mail($toMail, $infomations) {
        $email = new \App\Mail\Email();
        //subject
        if (!empty($infomations['subject'])) {
            $email->setSubject($infomations['subject']);
        }
        /**
         * attach file
         */
        if (!empty($infomations['attachPath'])) {
            $email->setAttachPath($infomations['attachPath']);
            // attach name
            if (!empty($infomations['attachName'])) {
                $email->setAttachName($infomations['attachName']);
            }
            // attach mime
            if (!empty($infomations['attachMime'])) {
                $email->setAttachMime($infomations['attachMime']);
            }
        }
        //send mail
        Mail::to($toMail)->send($email);
    }

    /**
     * 
     * @param Illuminate\Http\Request $request
     * @param array $file
     * @param string $oldFileName
     * @param array $optionData
     * 
     * if system do nơt know MimeType, it will change file's extension to default extension of Operating System (eg: name.sql ---> name.txt)
     * this function prevents the thing
     * 
     * 
     */
    private static function preventRenameFileAutomatic($request, $file, $oldFileName, &$optionData) {
        $fileMimeType = $request->file($file['key'])->getClientMimeType();
        $fileExtension = $request->file($file['key'])->getClientOriginalExtension();
        if ($fileMimeType == 'application/octet-stream') {
            //rename filename
            $temp = explode(".", $oldFileName);
            $newFileName = rtrim($oldFileName, $temp[count($temp) - 1]) . $fileExtension;
            \Illuminate\Support\Facades\Storage::move($oldFileName, $newFileName);
            //set value for field; eg: table.column = 'sample.docx'
            $optionData[$file['key']] = str_replace($file['path'] . '/', '', $newFileName);
        }
    }

}
