<?php

namespace App\Http\Controllers;

use App\Models\Subscriptions;
use App\Traits\FunctionalTraits;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    use FunctionalTraits;

    public function index() {

        $pageTitle      = 'Subscriptions To Newsletters';
        $breadcrumbs    = 'Subscriptions To Newsletters';
        $browserTitle   = 'Subscriptions To Newsletters';
        $contentHeader  = 'Subscriptions To Newsletters';

        $parameters = compact(
            [
                'pageTitle', 'breadcrumbs','browserTitle', 'contentHeader'
            ]
        );

        return view('subscriptions.index', $parameters);

    }

    public function store(Request $request) {

        //Custom Validation Rules Traits
        $requestInputFields = ['validation-name', 'validation-email'];
        $alertValues        = ['Name', 'Email'];

        if($this->notSetRule($request, $requestInputFields, $alertValues )['status'] == 'error'){
            return back()->with(
                [
                    $this->notSetRule($request, $requestInputFields, $alertValues)['status']=>$this->notSetRule($request, $requestInputFields, $alertValues)['message']
                ]
            );
        }
        if($this->emptyRules($request, $requestInputFields, $alertValues)['status'] == 'error'){
            return back()->with(
                [
                    $this->emptyRules($request, $requestInputFields, $alertValues)['status']=>$this->emptyRules($request, $requestInputFields, $alertValues)['message']
                ]
            )->withInput();
        }

        if (Subscriptions::create(['name'=>$request['validation-name'], 'email'=>$request['validation-email']])) {
            return back()->with($this->subscribedSuccess('Newsletter'));
        }



    }

    public function showSubscribers() {

        $pageTitle      = 'Manage Subscriber';
        $breadcrumbs    = 'Manage Subscriber';
        $browserTitle   = 'Manage Subscriber';
        $contentHeader  = 'Manage Subscriber';
        $tableData      = $this->getAllSubscriptionsToTable();

        $parameters = compact(
            [
                'pageTitle', 'breadcrumbs','browserTitle', 'contentHeader','tableData'
            ]
        );

        return view('subscriptions.list', $parameters);

    }

    public function delete(Request $request) {

        if ($request['id']) {
            $data = $this->removeSubscritpions($request['id']);

            if ($data['status'] == 'Success') {
                return back()->with([$data['status']=>$data['message']]);
            }
            dd($data['status']);

        }
    }
}
