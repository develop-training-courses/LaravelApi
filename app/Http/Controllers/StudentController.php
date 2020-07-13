<?php

namespace App\Http\Controllers;

use App\Company;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        return response()->json([
            "data"   => $students,
            "status" => Response::HTTP_OK
        ], Response::HTTP_OK);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info($request);
        $student = Student::create($request->all());
        return response()->json([
            "data"    => $student,
            "message" => "Student created successfully!",
            "status"  => Response::HTTP_ACCEPTED
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //$company = Company::findOrFail($student->company_id);
        return response()->json([
            "student" => $student,
            //"company" => $company,
            "status"  => Response::HTTP_OK
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return response()->json([
            "data" => $student,
            "message" => "Student updated successfully!",
            "status" =>Response::HTTP_ACCEPTED
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json([
            "data" => $student,
            "message" => "Student deleted successfully!",
            "status" => Response::HTTP_OK
        ], Response::HTTP_OK);
    }
}
