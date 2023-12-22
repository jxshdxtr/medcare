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
            <div align="center" style="padding-top: 100px;">
                <table>
                    <thead>
                        <tr style="background-color: black;">
                            <th style="padding:10px">Customer Name</th>
                            <th style="padding:10px">Email</th>
                            <th style="padding:10px">Mobile</th>
                            <th style="padding:10px">Doctor Name</th>
                            <th style="padding:10px">Date</th>
                            <th style="padding:10px">Message</th>
                            <th style="padding:10px">Status</th>
                            <th style="padding:10px">Approved</th>
                            <th style="padding:10px">Canceled</th>
                            <th style="padding:10px">Send Mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->mobile}}</td>
                                <td>{{$data->doctor}}</td>
                                <td>{{$data->date}}</td>
                                <td>{{$data->message}}</td>
                                <td>{{$data->status}}</td>
                                <td><a href="{{route('approved', $data->id)}}" class="btn btn-success">Approved</a></td>
                                <td><a href="{{route('canceled', $data->id)}}" class="btn btn-danger">Canceled</a></td>
                                <td><a href="{{route('emailview', $data->id)}}" class="btn btn-primary">Send Mail</a></td>
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