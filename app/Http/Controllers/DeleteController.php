<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DeleteController extends Controller {
    public function oneData() {
        $result = DB::table('students')->where('id', '=', 6)->delete();
        if ($result == true) {
            return 'Delete Success';
        } else {
            return 'Delete Fail';
        }
    }
    public function multiData() {
        $result = DB::table('students')->truncate();
        if ($result == true) {
            return 'Delete all success';
        } else {
            return 'Delete Fail';
        }
    }
}
