<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index(Request $_oRequest)
    {
        return 'test';
    }

    public function show(Request $_oRequest, $_iID)
    {
        return 'id = ' . $_iID;
    }

    public function param(Request $_oRequest) {
        // dd($_oRequest->all());
        // dd($_oRequest->query('data'));
        // dd($_oRequest->input());
        dd($_oRequest->input('data'));
    }

    public function getForm(Request $_oRequest) {
        return view("lab.aForm");
    }

    public function postForm(Request $_oRequest, $_sID) {
        // dd($_oRequest->input());
        dd($_oRequest->input('firstName'));
    }

    public function xml() {
        $content = "<book><title>ooo</title><price>500</price></book>";
        return response(
            $content,
            200,
            [
                'Content-Type' => 'application/xml',
            ],
        );
    }
    function memberOnly(Request $_oRequest) {
        if (!empty($_oRequest)) {
            return redirect('lab/form');
        }
        // go ahead
    }
}
