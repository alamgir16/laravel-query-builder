<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AggregrateController extends Controller {
    public function countRows() {
        $result = DB::table('students')->count();
        return $result;
    }
    public function maxRows() {
        $result = DB::table('students')->max('id');
        return $result;
    }
    public function minRows() {
        $result = DB::table('students')->min('id');
        return $result;
    }
    public function avgRows() {
        $result = DB::table('students')->avg('id');
        return $result;
    }

}
