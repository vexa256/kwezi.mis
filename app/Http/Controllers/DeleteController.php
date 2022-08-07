<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DeleteController extends Controller
{
    public function MassDelete($id, $TableName)
    {

        DB::table($TableName)->where('id', $id)->delete();

        return redirect()->back()->with('status', 'The selected record was deleted successfully');

    }

   

}
