<x-app-layout>

 </x-app-layout>

 <!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Medical Care</title>

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
      {{-- body --}}
      @include('admin.body')
      </div>
    <!-- container-scroller -->
    </div>
    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>