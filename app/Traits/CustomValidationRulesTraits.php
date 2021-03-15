<?php

namespace App\Traits;

use App\User;
use App\Services;

trait CustomValidationRulesTraits{

    public function notSetRule($request, $requestInputFields, $alertValues){
        if(!empty($requestInputFields)){
            foreach($requestInputFields as $index=> $requestInputs){
                if(!isset($request[$requestInputs])){
                    return [
                        'status'    => 'error',
                        'message'   =>  $this->invalid($alertValues[$index]),
                    ];
                }
            }

        }
    }

    public function emptyRules($request, $requestInputFields, $alertValues){
        if(!empty($requestInputFields)){
            foreach($requestInputFields as $index=> $requestInputs){
                if(empty($request[$requestInputs])){

                    return [
                        'status'    => 'error',
                        'message'   =>   $this->emptyFieldsAlert(),
                    ];

                }
            }

        }
    }

    public function alreadyExistRules($request, $requestInputFields, $alertValues){
        if(!empty($requestInputFields)){
            foreach($requestInputFields as $index=> $requestInputs){
                if(empty($request[$requestInputs])){

                    return [
                        'status'    => 'error',
                        'message'   =>    $this->alreadyExist($requestInputs),
                    ];

                }
            }

        }
    }
}
