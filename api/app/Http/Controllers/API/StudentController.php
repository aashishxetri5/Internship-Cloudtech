<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;

class StudentController extends BaseController
{
    public function index()
    {
        $data = Student::all();

        return $this->sendResponse($data, 'Students fetched');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedStudentData = $request->validate([
            "name" => "required",
            "city" => "required"
        ]);

        try {
            $student = Student::create($validatedStudentData);
            return $this->sendResponse(
                $student,
                'Student created successfully',
                201
            );

        } catch (Exception $e) {
            return $this->sendError(
                $e->getMessage(),
                $e->getMessage(),
                500
            );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $student = Student::find($id);
            if ($student) {
                return $this->sendResponse(
                    $student,
                    'Student fetched successfully',
                    200
                );
            }

            return $this->sendError(
                "not found",
                'Student doesn\'t exist for given id',
                404
            );
        } catch (Exception $e) {
            return $this->sendError(
                "Server Error",
                'Something went wrong!!',
                500
            );
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Student::find($id)->delete();
            return $this->sendResponse(
                [],
                'Student deleted successfully',
                200
            );
        } catch (Exception $e) {
            return $this->sendError(
                "Server Error",
                'Something went wrong!!',
                500
            );
        }
    }
}
