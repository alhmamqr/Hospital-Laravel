
<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags --> 
    @include('admin.css') 
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
 @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
      @include('admin.nav')
        <!-- partial -->
        
        

        <div class="container">
           <h1 class="text-center mt-3">Add New Doctor</h1>
            
           <form class="form-horizontal" action="{{route('create.doctor')}}" method="POST" style="color: azure" enctype="multipart/form-data" >
             @csrf
            <div class="col-sm-6">
               <div class="form-group">
                 <label class="control-label col-sm-4">Doctor Name</label>
                 <div class="col-sm-8">
                   <input type="text" name="name" class="form-control" style="color: azure">
                 </div>
               </div>
           
           
               <div class="form-group">
                 <label class="control-label col-sm-4">Doctor Email</label>
                 <div class="col-sm-8">
                   <input type="text" name="email"  class="form-control" style="color: azure">
                 </div>
               </div>
               <div class="form-group">
                 <label class="control-label col-sm-4">Doctor Room</label>
                 <div class="col-sm-8">
                   <input type="text" name="room"  class="form-control" style="color: azure">
                 </div>
               </div>
              
           
             
               <div class="form-group">
                 <label class="control-label col-sm-4">Doctor Phone</label>
                 <div class="col-sm-8">
                   <input type="text" name="phone" class="form-control" style="color: azure">
                 </div>
               </div> 
                <div class="form-group">
                  <label class="control-label col-sm-4"  >Doctor Specialty</label>
                  <div class="col-sm-8"   >
                    <select name="specialty" id="" style="color: black;width: 100%">
                        <option value="">---select---</option>
                        <option value="skin">skin</option>
                        <option value="heart">heart</option>
                        <option value="eye">eye</option>
                        <option value="noese">noese</option>
                    </select>
                  </div>
                </div>
             
                    <div class="form-group input-file" style="width: 100%">
                      <label class="control-label col-sm-4" style="width: 100%">Doctor image</label>
                      <div  style="width:180% !important">
                        <input type="file" name="image" class="form-control">
                      </div>
                    </div>
           
           
             <div class="text-center">
                <div class="col-sm-6">
               <button class="btn btn-primary waves-effect waves-light " style="width: 100% !important" id="btn-submit">Save</button>
            </div>
             </div> 
            
            </div>
            <div class="col-sm-6 mt-4">
                @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                   {{session()->get('message')}}
                </div>
            @endif
            </div>
           </form>




        </div>
        
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')

    <!-- End custom js for this page -->
  </body>
</html>