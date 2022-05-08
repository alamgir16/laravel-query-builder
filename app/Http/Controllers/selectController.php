<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class selectController extends Controller {
    public function uniqColumn() {
        $result = DB::table('students')->distinct()->get();
        return $result;
    }
    public function singleColumn() {
        $result = DB::table('students')->select('name')->get();
        return $result;
    }
    public function multiColumn() {
        $result = DB::table('students')->select('name', 'roll')->get();
        return $result;
    }

}
