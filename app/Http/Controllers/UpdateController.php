<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UpdateController extends Controller {
    public function update() {
        $result = DB::table('students')->where('id', '=', 2)->update(['name' => 'Sultana', 'class' => 2, 'roll' => 2]);

        if ($result == true) {
            return 'Data update success';
        } else {
            return 'Update Failed';
        }
    }
}
