<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalsController extends Controller {

    const MODEL = "App\Models\Personal";

    /**
     * Create a new auth instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get all data from Personal
     */
    public function index(Request $request)
    {
      $personal = new Personal;
      $res['success'] = true;
      $res['result'] = $personal->all();
      return response($res);
    }

    /**
     * Insert database for Personal
     * Url : /personal
     */
    public function create(Request $request)
    {
      $personal = new Personal;
      $personal->fill([
        'name' => $request->input('nama_lengkap'),
        'birthdateplace' => $request->input('ttl'),
        'gender' => $request->input('gender'),
        'address' => $request->input('alamat'),
        'phonenumber' => $request->input('no_hp'),
        'maritalstatus' => $request->input('marital_status'),
        'suku' => $request->input('suku'),
        'pekerjaan' => $request->input('pekerjaan'),
        'photo' => $request->input('photo'),
        'email' => $request->input('email'),
        'idparrentrelation' => $request->input('id_parrent')
      ]);

      if($personal->save()){
        $res['success'] = true;
        $res['result'] = 'Success add new family!';
        return response($res);
      }
    }

    /**
     * Get one data Personal by id
     * Url : /personal/{id}
     */
    public function read(Request $request, $id)
    {
      $personal = Personal::where('id',$id)->first();
      if ($personal !== null) {
        $res['success'] = true;
        $res['result'] = $personal;
        return response($res);
      }else{
        $res['success'] = false;
        $res['result'] = 'Family not found!';
        return response($res);
      }
    }

    /**
     * Update data Personal by id
     */
    public function update(Request $request, $id)
    {
      if ($request->has('name')) {
          $personal = Personal::find($id);
          $personal->name = $request->input('name');
          if ($personal->save()) {
              $res['success'] = true;
              $res['result'] = 'Success update '.$request->input('name');
              return response($res);
          }
      }else{
        $res['success'] = false;
        $res['result'] = 'Please fill name family!';
        return response($res);
      }
    }

    /**
     * Delete data Personal by id
     */
    public function delete(Request $request, $id)
    {
      $personal = Personal::find($id);
      if ($personal->delete($id)) {
          $res['success'] = true;
          $res['result'] = 'Success delete personal!';
          return response($res);
      }
    }
}
