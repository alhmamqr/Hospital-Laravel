<div class="row ">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Docotrs Status</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr> 
                  <th> Docotrs Name </th> 
                  <th>Docotrs phone </th>
                  <th>Docotrs room </th> 
                  <th>Docotrs specialty </th>
                  <th> controll </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    @foreach ($doctors as $doctor)
                        
                    <td> 
                        <span class="ps-2">{{$doctor->name}}</span>
                    </td>               
                    <td>{{$doctor->phone}} </td>
                    <td> {{$doctor->room}} </td>    
                    <td> {{$doctor->specialty}} </td>    
                   
                  <td>
                      <div class="badge badge-outline-success"><a href="{{route('editDoctor',$doctor->id)}}">Edit</a> </div>
                      <div class="badge badge-outline-warning"><a href="{{route('deleteDoctors',$doctor->id)}}" onclick="return confirm('are you show')">Delete</a></div>
                    </td> 
                  </tr>    
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>