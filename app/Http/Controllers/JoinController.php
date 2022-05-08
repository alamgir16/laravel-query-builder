<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class JoinController extends Controller {
    public function joinData() {
        $result = DB::table('students')
            ->leftJoin('exam_marks', 'students.roll', '=', 'exam_marks.roll')
            ->get();

        return $result;
    }
    public function rjoinData() {
        $result = DB::table('students')
            ->rightJoin('exam_marks', 'students.roll', '=', 'exam_marks.roll')
            ->get();

        return $result;
    }
}
