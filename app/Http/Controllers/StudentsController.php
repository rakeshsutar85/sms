<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;
use App\Models\Students;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\StudentsResource;
use App\Http\Resources\StudentsCollection;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new StudentsCollection(Students::all());
        //return Students::all();
        //return response()->json(['status' => 'Success', 'data' => new StudentsCollection(Students::all())]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentsRequest $request)
    {
        //
        $stu = new Students;

        $stu->name = $request->name;
        $stu->email = $request->email;
        $stu->password = Hash::make($request->password);
        $stu->save();
        return response()->json(['message' => 'Product added Succesfully'], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students,$id)
    {
        //
        $st = new StudentsResource($students::find($id));
        return response()->json(['status' => 'Success', 'data' => $st]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentsRequest  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentsRequest $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $students,$id)
    {
        //
        $product = $students::find($id);
        $product->delete();
        return response()->json(['status' => 'Success', 'Message' => 'Student Deleted']);
    }
}
