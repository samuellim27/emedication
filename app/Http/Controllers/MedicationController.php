<?php

namespace App\Http\Controllers;

use App\Medication;
use Illuminate\Http\Request;

class MedicationController extends Controller
{

    //get all medication
    function medications(){
        $medication = new Medication;

        return $medication->get();
    }

        //get specific medication
        function medication($id){
            $medication = new Medication;

            return $medication->find($id);

        }

    // add medication (post)
    function post(Request $request ){
        $medication = new Medication;
        $medication->name=$request->name;
        $medication->description=$request->description;
        $medication->price=$request->price;
        $medication->save();
        return $medication->get();

    }

}
