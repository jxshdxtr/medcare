<!DOCTYPE html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Medical Care</title>
    <!-- plugins:css -->

    <style type="text/css">
      
      label
      {
        display: inline-block;

        width: 200px;
      }

    </style>

  @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->

      {{-- sidebar --}}
      @include('admin.sidebar')

      <!-- partial -->
      {{-- navbar --}}
      @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding-top: 50px;">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session()->get('message') }}
                </div>
                @endif

          <form action="{{route('upload')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding:15px;">
                <label for="">Doctor Name</label>
                <input type="text" style="color:black;" name="name" placeholder="Write the name" 
                  required>
            </div>
            <div style="padding:15px;">
                <label for="">Mobile</label>
                <input type="number" style="color:black;" name="mobile" placeholder="Write the number" required> 
            </div>

            <div style="padding:15px;">
                <label>Specialty</label>
                <select name="specialty" style="color: black; width: 200px;" required>
                <option>Select</option>
                <option value="Pediatrics">Pediatrics</option>
                <option value="Gynecology">Gynecology</option>
                <option value="Internal medicine">Internal medicine</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Skin">Skin</option>

                </select>
              
              </div>
                <div style="padding:15px;">
                <label>Doctor Image</label>
                <input type="file" name="file">
              
              </div>
                
              <div style="padding: 15px;">

                <input type="submit" class="btn btn-success">

            </div>

        </form>
    </div>
  </div>

    <!-- container-scroller -->
  </div>
    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>