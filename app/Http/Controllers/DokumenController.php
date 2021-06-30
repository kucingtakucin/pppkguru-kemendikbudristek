<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DokumenController extends Controller
{
    public function index(Request $request)
    {
        $table = Dokumen::all();

        return view('contents.Admin.dokumen.index', [
            'table' => $table
        ]);
    }

    public function create()
    {
        return view('contents.Admin.infografis.create');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $data = Dokumen::find($id);
        $data->location_file = asset('uploads/dokumen/'.$data->name_file);
        return $data;
    }

    public function store(Request $request)
    {
        try {
            $rules = [
                'judul' => 'required',
                'name_file' => 'required|max:10000|mimes:pdf',
            ];

            $validator = Validator ::make($request->all(), $rules);

            if ($validator->fails()) {
                $output = [
                    'status' => false,
                    'msg' => $validator->errors()->all()
                ];
            }else{
                $data = new Dokumen($request->all());
                # Upload file
                $fileName = 'dokumen_'.uniqid().time().'.'.$request->file('name_file')->getClientOriginalExtension();
                $request->file('name_file')->move(public_path('uploads/dokumen'), $fileName);
                $data->name_file = $fileName;
                $data->save();

                $output = [
                    'status' => 'success',
                    'msg' => 'Data berhasil ditambahkan.'
                ];
            }

            return redirect()->route('admin.dokumen')->with($output['status'], $output['msg']);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function update(Request $request)
    {
        try {
            $rules = [
                'judul' => 'required',
                'name_file' => 'max:10000|mimes:pdf',
            ];

            $validator = Validator ::make($request->all(), $rules);

            if ($validator->fails()) {
                $output = [
                    'status' => false,
                    'msg' => $validator->errors()->all()
                ];
            }else{
                $data = Dokumen::find($request->id);
                $data->fill($request->all());
                if ($request->name_file != null) {
                    # Upload file
                    File::delete(public_path('uploads/dokumen/'.$request->old_name_file));
                    $fileName = 'dokumen'.uniqid().time().'.'.$request->file('name_file')->getClientOriginalExtension();
                    $request->file('name_file')->move(public_path('uploads/dokumen'), $fileName);
                    $data->name_file = $fileName;
                }else{
                    $data->name_file = $request->old_name_file;
                }
                $data->update();

                $output = [
                    'status' => 'success',
                    'msg' => 'Data berhasil diubah.'
                ];
            }

            return redirect()->route('admin.dokumen')->with($output['status'], $output['msg']);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete(Request $request)
    {
        try {
            $data = Dokumen::find($request->id);
            $data->delete();

            return 'success';
        } catch (\Exception $e) {
            return 'false';
        }
    }
}
