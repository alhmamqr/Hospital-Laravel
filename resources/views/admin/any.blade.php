
        <style>
            input.form-control {
    color: black !important;
}
        </style>

        <div class="container">
           <h1 class="text-center mt-3">Edit  Doctor</h1>
            
           <form class="form-horizontal" action="{{route('updateDoctor',$doctor->id)}}" method="POST" style="color: azure" enctype="multipart/form-data" >
             @csrf
            <div class="col-sm-6">
               <div class="form-group">
                 <label class="control-label col-sm-4">Doctor Name</label>
                 <div class="col-sm-8">
                   <input type="text" name="name" value="{{$doctor->name}}" class="form-control" style="color: azure">
                 </div>
               </div>
            
               <div class="form-group">
                 <label class="control-label col-sm-4">Doctor Room</label>
                 <div class="col-sm-8">
                   <input type="text" name="room" value="{{$doctor->room}}"  class="form-control" style="color: azure">
                 </div>
               </div>
              
           
             
               <div class="form-group">
                 <label class="control-label col-sm-4">Doctor Phone</label>
                 <div class="col-sm-8">
                   <input type="text" name="phone" value="{{$doctor->phone}}" class="form-control" style="color: azure">
                 </div>
               </div> 
                <div class="form-group">
                  <label class="control-label col-sm-4"  >Doctor Specialty</label>
                  <div class="col-sm-8"   >
                    <select name="specialty" id="" style="color: black;width: 100%">
                        <option value="">---select---</option>
                        <option value="skin"
                        @if ($doctor->specialty == 'skin')
                            @selected(true)
                        @endif
                        >skin</option>
                        <option value="heart" 
                        @if ($doctor->specialty == 'heart')
                            @selected(true)
                        @endif
                        >heart</option>
                        <option value="eye"
                        @if ($doctor->specialty == 'eye')
                            @selected(true)
                        @endif
                        >eye</option>
                        <option value="noese"
                        @if ($doctor->specialty == 'noese')
                            @selected(true)
                        @endif
                        >noese</option>
                    </select>
                  </div>
                </div>
             
                    <div class="form-group input-file" style="width: 100%">
                      <label class="control-label col-sm-4" style="width: 100%">Doctor image</label>
                      <div  style="width:180% !important">
                        <input type="file" name="image" value="doctorimage/{{$doctor->image}}" class="form-control">
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
         