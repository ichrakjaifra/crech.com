<?php

namespace App\Http\Controllers;

use App\Models\SubjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
  public function list()
  {
    $data['getRecord'] = SubjectModel::getRecord();

    $data['header_title'] = "Subject List";
    return view('admin.subject.list',$data);
  }

  public function add()
  {
    $data['header_title'] = "Add Subject";
    return view('admin.subject.add',$data);
  }

  public function insert(Request $request)
    {
      $save = new SubjectModel;
      $save->name = trim($request->name);
      $save->description = trim($request->description);
      $save->type = trim($request->type);
      $save->status = $request->status;
      $save->created_by = Auth::user()->id;
      $save->save();

      return redirect('admin/subject/list')->with('success',"Subject Successfully Created");
    }

    public function edit($id)
    {
      $data['getRecord'] = SubjectModel::getSingle($id);
      if(!empty($data['getRecord']))
      {
        $data['header_title'] = "Edit Subject";
        return view('admin.subject.edit',$data);
      }
      else
      {
        abort(404);
      }
      
    }

    public function update($id, Request $request)
    {
      $save = SubjectModel::getSingle($id);
      $save->name = trim($request->name);
      $save->description = trim($request->description);
      $save->type = trim($request->type);
      $save->status = trim($request->status);
      $save->save();

      return redirect('admin/subject/list')->with('success',"Subject Successfully Updated");
    }

    public function delete($id)
    {
      $save = SubjectModel::getSingle($id);
      $save->is_delete = 1;
      $save->save();

      return redirect('admin/subject/list')->with('success',"Subject Successfully Deleted");
    }
}
