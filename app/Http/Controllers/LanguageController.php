<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;

class LanguageController extends Controller
{
   	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::all();
        return view('admin.language.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.language.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'local' => 'required',
            'name' => 'required'
        ]);



        $input = $request->all();

        $all_def = Language::where('def','=',1)->get();

        if (isset($request->def)) {

            foreach ($all_def as $value) {
                $remove_def =  Language::where('id','=',$value->id)->update(['def' => 0]);
            }

             $input['def'] = 1;

        }else{
            if($all_def->count()<1)
            {
                return back()->with('delete',__('adminstaticword.atleast_one_language_need_to_set_default'));
            }

            $input['def'] = 0;
        }

        Language::create($input);

        Session::flash('success',__('adminstaticword.created_successfully'));
        return redirect('admins/lang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $language = Language::findOrFail($id);
        return view('admin.language.edit', compact('language'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $language = Language::findOrFail($id);

        $all_def = Language::where('def','=',1)->get();

        $request->validate([
            'local' => 'required',
            'name' => 'required'
        ]);

        $input = $request->all();

        if (isset($request->def)) {



            foreach ($all_def as $value) {
                $remove_def =  Language::where('id','=',$value->id)->update(['def' => 0]);
            }

             $input['def'] = 1;

        }else{

            if($all_def->count()<1)
            {
                return back()->with('delete',__('adminstaticword.atleast_one_language_need_to_set_default'));
            }

            $input['def'] = 0;
        }


        $language->update($input);

        Session::flash('success',__('adminstaticword.updated_successfully'));
        return redirect('admins/lang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $language = Language::findOrFail($id);
        if($language->def ==1){
             return back()->with('delete', __('adminstaticword.default_language_cannot_be_deleted'));

        }else{

             $language->delete();
            return back()->with('delete', __('adminstaticword.deleted_successfully'));
        }

    }

    public function showlang()
    {
//        dd('ddd');
        $languages = Language::all();
        return view('admin.language.show', compact('languages'));
    }

    public function frontstaticword($local)
    {
        // return $local;
        $findlang = Language::where('local', '=', $local)->first();

        if (isset($findlang))
        {

            if (file_exists('../resources/lang/' . $findlang->local . '/frontstaticword.php'))
            {
                $file = file_get_contents("../resources/lang/$findlang->local/frontstaticword.php");
                return view('admin.language.frontstatic.frontstatic', compact('findlang', 'file'));
            }
            else
            {

                if (is_dir('../resources/lang/' . $findlang->local))
                {
                    copy("../resources/lang/en/frontstaticword.php", '../resources/lang/' . $findlang->local . '/frontstaticword.php');
                    $file = file_get_contents("../resources/lang/$findlang->local/frontstaticword.php");
                    return view('admin.language.frontstatic.frontstatic', compact('findlang', 'file'));
                }
                else
                {
                    mkdir('../resources/lang/' . $findlang->local);
                    copy("../resources/lang/en/frontstaticword.php", '../resources/lang/' . $findlang->local . '/frontstaticword.php');
                    $file = file_get_contents("../resources/lang/$findlang->local/frontstaticword.php");
                    return view('admin.language.frontstatic.frontstatic', compact('findlang', 'file'));
                }

            }

        }
        else
        {
            return back()
                ->with('warning', __('adminstaticword.record_not_found'));
        }
    }

    public function frontupdate(Request $request, $local)
    {
        $findlang = Language::where('local', '=', $local)->first();
        if (isset($findlang))
        {

            $transfile = $request->transfile;
            file_put_contents('../resources/lang/' . $findlang->local . '/frontstaticword.php', $transfile . PHP_EOL);
            return back()->with('updated', __('adminstaticword.updated_successfully'));

        }
        else
        {
            return back()
                ->with('warning', __('adminstaticword.record_not_found'));
        }
    }


    public function adminstaticword($local)
    {
        // return $local;
        $findlang = Language::where('local', '=', $local)->first();

        if (isset($findlang))
        {

            if (file_exists('../resources/lang/' . $findlang->local . '/adminstaticword.php'))
            {
                $file = file_get_contents("../resources/lang/$findlang->local/adminstaticword.php");
                return view('admin.language.adminstatic.adminstatic', compact('findlang', 'file'));
            }
            else
            {

                if (is_dir('../resources/lang/' . $findlang->local))
                {
                    copy("../resources/lang/en/adminstaticword.php", '../resources/lang/' . $findlang->local . '/adminstaticword.php');
                    $file = file_get_contents("../resources/lang/$findlang->local/adminstaticword.php");
                    return view('admin.language.adminstatic.adminstatic', compact('findlang', 'file'));
                }
                else
                {
                    mkdir('../resources/lang/' . $findlang->local);
                    copy("../resources/lang/en/adminstaticword.php", '../resources/lang/' . $findlang->local . '/adminstaticword.php');
                    $file = file_get_contents("../resources/lang/$findlang->local/adminstaticword.php");
                    return view('admin.language.adminstatic.adminstatic', compact('findlang', 'file'));
                }

            }

        }
        else
        {
            return back()
                ->with('warning', __('adminstaticword.record_not_found'));
        }
    }

    public function adminupdate(Request $request, $local)
    {
        $findlang = Language::where('local', '=', $local)->first();
        if (isset($findlang))
        {

            $transfile = $request->transfile;
            file_put_contents('../resources/lang/' . $findlang->local . '/adminstaticword.php', $transfile . PHP_EOL);
            return back()->with('updated', __('adminstaticword.updated_successfully'));

        }
        else
        {
            return back()
                ->with('warning', __('adminstaticword.record_not_found'));
        }
    }


}
