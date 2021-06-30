<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Infografis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InfografisController extends Controller
{
    public function index(Request $request)
    {
        $table = Infografis::all();

        return view('contents.Admin.infografis.index', [
            'table' => $table
        ]);
    }

    public function create()
    {
        return view('contents.Admin.infografis.create');
    }

    public function edit($id)
    {
        $data = Infografis::find($id);
        return view('contents.Admin.infografis.edit', [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        try {
            $rules = [
                'judul' => 'required',
                'deskripsi' => 'required',
                'category' => 'required',
                'name_file' => 'required|max:10000|mimes:pdf,jpg,png,jpeg',
            ];

            $validator = Validator ::make($request->all(), $rules);

            if ($validator->fails()) {
                $output = [
                    'status' => false,
                    'msg' => $validator->errors()->all()
                ];
            }else{
                $data = new Infografis($request->all());
                # Upload file
                $fileName = 'infografis_'.uniqid().time().'.'.$request->file('name_file')->getClientOriginalExtension();
                $request->file('name_file')->move(public_path('uploads/infografis'), $fileName);
                $data->name_file = $fileName;
                $data->save();

                $output = [
                    'status' => 'success',
                    'msg' => 'Data berhasil ditambahkan.'
                ];
            }

            return redirect()->route('admin.infografis')->with($output['status'], $output['msg']);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function update($id, Request $request)
    {
        // return $request->all();
        try {
            $rules = [
                'judul' => 'required',
                'deskripsi' => 'required',
                'category' => 'required',
                'name_file' => 'max:10000|mimes:pdf,jpg,png,jpeg',
            ];

            $validator = Validator ::make($request->all(), $rules);

            if ($validator->fails()) {
                $output = [
                    'status' => false,
                    'msg' => $validator->errors()->all()
                ];
            }else{
                $data = Infografis::find($request->id);
                $data->fill($request->all());
                if ($request->name_file != null) {
                    # Upload file
                    // unlink(public_path('upload/infografis/'.$request->name_file_old));
                    $fileName = 'infografis_'.uniqid().time().'.'.$request->file('name_file')->getClientOriginalExtension();
                    $request->file('name_file')->move(public_path('upload/infografis'), $fileName);
                    $data->name_file = $fileName;
                }else{
                    $data->name_file = $request->name_file_old;
                }
                $data->update();

                $output = [
                    'status' => 'success',
                    'msg' => 'Data berhasil ditambahkan.'
                ];
            }

            return redirect()->route('admin.infografis')->with($output['status'], $output['msg']);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete(Request $request)
    {
        try {
            $data = Infografis::find($request->id);
            $data->delete();

            return 'success';
        } catch (\Exception $e) {
            return 'false';
        }
    }
}
