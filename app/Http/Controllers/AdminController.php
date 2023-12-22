<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Appointment;

use Notification;

use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }
    public function upload(Request $request)
    {
        $doctor=new doctor;

        $image=$request->file;

        $image_name=time() . '.' . $image->getCLientoriginalExtension();

        $request->file->move('doctorimage', $image_name);

        $doctor->image = $image_name;

        $doctor->name = $request->name;

        $doctor->mobile = $request->mobile;

        $doctor->specialty = $request->specialty;

        $doctor->save();

        return redirect()->back()->with('message:', 'Doctor Added Successfully!');

    }
    
    public function showAppointments()
    {
        $datas = Appointment::all();
        return view('admin.show_appointments', compact('datas'));
    }
    
    public function approve($id)
    {
        $data = Appointment::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }

    public function cancel($id)
    {
        $data = Appointment::find($id);
        $data->status = 'canceled';
        $data->save();
        return redirect()->back();
    }

    public function showDoctors()
    {
        $doctors = Doctor::all();
        return view('admin.show_doctors', compact('doctors'));
    }

    public function updateDoctor($id)
    {
        $data = Doctor::find($id);
        return view('admin.edit_doctor', compact('data'));
    }

    public function deleteDoctor($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->back();
    }

    public function editDoctor(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->mobile = $request->mobile;
        $doctor->specialty = $request->specialty;
        $image = $request->file;
        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('doctorimage', $image_name);
            $doctor->image = $image_name;
        }

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor updated successfully!');
    }

    public function emailView($id)
    {
        $data=appointment::find($id);

        return view('admin.email_view', compact('data'));
    }
    public function sendEmail(Request $request, $id)
    {
        $data=appointment::find($id);
        $details=[
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];

        Notification::send($data, new SendEmailNotification($details));

        return redirect()->back()->with('message', 'Email send successfully');
    }
}
