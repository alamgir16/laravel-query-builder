<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class RetriveController extends Controller {
    public function selectAllRows() {
        $data = DB::table('students')->get();
        $result = json_encode($data);
        return $result;
    }
    public function selectOneRows() {
        $data = DB::table('students')->where('name', '=', 'Alamgir')->first();
        $result = json_encode($data);
        return $result;
    }
    public function selectFindRows() {
        $data = DB::table('students')->find(8);
        $result = json_encode($data);
        return $result;
    }
    public function selectOneColumn() {
        $data = DB::table('students')->pluck('name');
        $result = json_encode($data);
        return $result;
    }
    public function selectMultiColumn() {
        $data = DB::table('students')->pluck('name', 'class');
        $result = json_encode($data);
        return $result;
    }
    public function specificData() {
        $data = DB::table('students')->where('id', '=', '6')->value('name');
        $result = json_encode($data);
        return $result;
    }
}
