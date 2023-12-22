<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Medical Care</title>
    <!-- plugins:css -->
    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')
  </head>
  <body>

    <div class="container-scroller">

      {{-- sidebar --}}
      @include('admin.sidebar')

      <!-- partial -->
        {{-- navbar --}}
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding: 100px;">
                <table>
                    <thead>
                        <tr style="background-color: black;">
                            <th style="padding: 10px">Doctor Name</th>
                            <th style="padding: 10px">Mobile</th>
                            <th style="padding: 10px">Specialty</th>
                            <th style="padding: 10px">Image</th>
                            <th style="padding: 10px">Update</th>
                            <th style="padding: 10px">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doctor)
                            <tr>
                                <td style="padding: 10px;">{{$doctor->name}}</td>
                                <td style="padding: 10px;">{{$doctor->mobile}}</td>
                                <td style="padding: 10px;">{{$doctor->specialty}}</td>
                                <td style="padding: 10px;"><img src="doctorimage/{{$doctor->image}}" width="100px" height="100px" alt=""></td>
                                <td style="padding: 10px;"><a href="{{route('doctor.update', $doctor->id)}}" class="btn btn-primary">Update</a></td>
                                <td style="padding: 10px;"><a href="{{route('doctor.delete', $doctor->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>