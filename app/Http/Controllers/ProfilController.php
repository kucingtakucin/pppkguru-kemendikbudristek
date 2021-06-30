<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;

class ProfilController extends Controller
{
    public function deskripsi(Request $request)
    {
        $data['data'] = DB::table('deskripsi_sistem')->first();
        return view('contents.Admin.deskripsi', $data);
    }

    public function kontak(Request $request)
    {
        $data['data'] = DB::table('kontak')->first();
        return view('contents.Admin.kontak', $data);
    }

    public function tahapan_survey(Request $request)
    {
        $data['judul'] = DB::table('tahapan_survey')->whereNull('deleted_at')->get();
        $data['tahapan'] = DB::table('tahapan_survey_isi')->join('tahapan_survey', 'tahapan_survey_isi.id_tahapan', '=', 'tahapan_survey.id')->whereNull('tahapan_survey_isi.deleted_at')->get();
        return view('contents.Admin.tahapan_survey', $data);
    }

    public function alasan_program(Request $request)
    {
        $data['alasan'] = DB::table('alasan_program')->whereNull('deleted_at')->get();
        return view('contents.Admin.alasan', $data);
    }

    public function store(Request $request, $tbl, $jns)
    {
        try {
            foreach ($request->all() as $key => $value) {
                $rules[$key] = 'required';
            }

            unset($rules['_token']);
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $output = [
                    'status' => false,
                    'msg' => $validator->errors()->all()
                ];

            } else {
                $get = DB::table($tbl)->count();

                $data_insert = $request->all();
                unset($data_insert['_token']);

                $mytime = Carbon::now();

                if ($get==0) {
                    $data_insert['created_at'] = $mytime->toDateTimeString();
                    DB::table($tbl)->insert($data_insert);
                } else {
                    $data_insert['updated_at'] = $mytime->toDateTimeString();
                    DB::table($tbl)->update($data_insert);
                }

                // $query = DB::getQueryLog();
                // dd(end($query));

                $output = [
                    'status' => 'success',
                    'msg' => 'Data berhasil ditambahkan.'
                ];
            }
            
            return redirect()->route('admin.'.$jns)->with($output['status'], $output['msg']);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function store_alasan(Request $request)
    {
        try {
            $rules['alasan'] = 'required';
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $output = [
                    'status' => false,
                    'msg' => $validator->errors()->all()
                ];

            } else {
                $data_insert = $request->all();
                unset($data_insert['_token']);
                $mytime = Carbon::now();

                $data_insert['created_at'] = $mytime->toDateTimeString();
                DB::table('alasan_program')->insert($data_insert);

                // $query = DB::getQueryLog();
                // dd(end($query));

                $output = [
                    'status' => 'success',
                    'msg' => 'Data berhasil ditambahkan.'
                ];
            }
            
            return redirect()->route('admin.alasan_program')->with($output['status'], $output['msg']);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function store_tahapan(Request $request)
    {
        try {
            $rules['nama_tahapan'] = 'required';
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $output = [
                    'status' => false,
                    'msg' => $validator->errors()->all()
                ];

            } else {
                $data_insert = $request->all();
                unset($data_insert['_token']);
                $mytime = Carbon::now();

                $data_insert['created_at'] = $mytime->toDateTimeString();
                DB::table('tahapan_survey')->insert($data_insert);

                $output = [
                    'status' => 'success',
                    'msg' => 'Data berhasil ditambahkan.'
                ];
            }
            
            return redirect()->route('admin.tahapan_survey')->with($output['status'], $output['msg']);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function store_tahapan_isi(Request $request, $id=null)
    {
        try {
            foreach ($request->all() as $key => $value) {
                $rules[$key] = 'required';
            }

            unset($rules['_token']);
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $output = [
                    'status' => false,
                    'msg' => $validator->errors()->all()
                ];

            } else {
                $data_insert = $request->all();
                unset($data_insert['_token']);
                $mytime = Carbon::now();
                
                if ($id!=null) {
                    $id = Crypt::decryptString($id);
                    $data_insert['updated_at'] = $mytime->toDateTimeString();
                    DB::table('tahapan_survey_isi')->where('id', $id)->update($data_insert);
                } else {
                    $data_insert['created_at'] = $mytime->toDateTimeString();
                    DB::table('tahapan_survey_isi')->insert($data_insert);
                }

                $output = [
                    'status' => 'success',
                    'msg' => 'Data berhasil ditambahkan.'
                ];
            }
            
            return redirect()->route('admin.tahapan_survey')->with($output['status'], $output['msg']);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete_alasan(Request $request)
    {
        try {
            $id = Crypt::decryptString($request->id);
            $mytime = Carbon::now();
            $data_insert['deleted_at'] = $mytime->toDateTimeString();
            DB::table('alasan_program')->where('id', $id)->update($data_insert);

            $output = [
                'status' => 'success',
                'msg' => 'Data berhasil dihapus.'
            ];
            
            return json_encode($output);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }
}
