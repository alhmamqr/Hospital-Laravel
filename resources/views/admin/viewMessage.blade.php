
<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href='/public'>
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
            <h1 class="text-center mt-3">Create the message email</h1>
             
            <form class="form-horizontal" action="{{route('sendMessage',$App->id)}}" method="POST" style="color: azure"  >
              @csrf
             <div class="col-sm-6">
                <div class="form-group">
                  <label class="control-label col-sm-4">Head</label>
                  <div class="col-sm-8">
                    <input type="text" name="head" class="form-control" style="color: azure">
                  </div>
                </div>
            
            
                <div class="form-group">
                  <label class="control-label col-sm-4">Body message</label>
                  <div class="col-sm-8">
                    <input type="text" name="bodyMessage"  class="form-control" style="color: azure">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-4">action name</label>
                  <div class="col-sm-8">
                    <input type="text" name="actionName"  class="form-control" style="color: azure">
                  </div>
                </div>
               
            
              
                <div class="form-group">
                  <label class="control-label col-sm-4">action url</label>
                  <div class="col-sm-8">
                    <input type="text" name="actionUrl" class="form-control" style="color: azure">
                  </div>
                </div>  
                <div class="form-group">
                  <label class="control-label col-sm-4">footer</label>
                  <div class="col-sm-8">
                    <input type="text" name="footer" class="form-control" style="color: azure">
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