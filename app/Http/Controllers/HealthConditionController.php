<?php

namespace App\Http\Controllers;

use App\HealthCondition;
use Illuminate\Http\Request;

class HealthConditionController extends Controller
{


    //get healthcondition
    function get($id){
        $healthcondition = new HealthCondition;

        return $healthcondition->find($id);

    }

    //add health condition
    function post(Request $request)
    {
        $healthcondition = new HealthCondition();
        $healthcondition->age = $request->age;
        $healthcondition->heartrate = $request->heartrate;
        $healthcondition->bloodpressure = $request->bloodpressure;
        $healthcondition->save();
        return $healthcondition->get();
    }

    //update healthcondition
    function update(Request $request, $id)
    {
        $healthcondition = new HealthCondition();
        $healthcondition->age = $request->age;
        $healthcondition->heartrate = $request->heartrate;
        $healthcondition->bloodpressure = $request->bloodpressure;

        $healthcondition = HealthCondition::findOrFail($id);
        $healthcondition->update($request->all());

        return $healthcondition;
    }

    //delete health condition
    function delete($id)
    {
        HealthCondition::find($id)->delete();

        return 'Deleted';

    }



}
