<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relation;

class RelationsController extends Controller {

    const MODEL = "App\Models\Relation";

    /**
     * Create a new auth instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

}
