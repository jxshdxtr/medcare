<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Medical Care</title>
    <!-- plugins:css -->
    <style type="text/css">
        label {
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
            <div class="container" align="center" style="padding-top: 50px;">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <form action="{{route('doctor.edit', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                        <label for="">Doctor Name</label>
                        <input type="text" style="color: black;" name="name" placeholder="Write the name" value="{{$data->name}}" required>
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Mobile</label>
                        <input type="number" style="color: black;" name="mobile" placeholder="Write the mobile number" value="{{$data->mobile}}" required>
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Specialty</label>
                        <input type="text" style="color: black"; name="specialty" placeholder="Write the specialty" value="{{$data->specialty}}" required>
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Old Image</label>
                        <img src="doctorimage/{{$data->image}}" height="150px" width="150px" alt="">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Update Image</label>
                        <input type="file" name="file">
                    </div>
                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
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
