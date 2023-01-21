<div class="row ">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Order Status</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr> 
                  <th> Client Name </th>
                  <th> email </th>
                  <th> messsage </th>
                  <th> date </th>
                  <th> status </th>
                  <th> cuncled </th>
                  <th> Approve </th>
                  <th> delete </th>
                  <th> send message </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    @foreach ($myApps as $App)
                        
                    <td> 
                        <span class="ps-2">{{$App->name}}</span>
                    </td>
                    <td> {{$App->email}}</td>               
                    <td>{{$App->message}} </td>
                    <td> {{$App->date}} </td>
                  
                  @if ($App->state == 'approved')
                  <td>  <div class="badge badge-outline-success">Approved</div></td>
                  @endif
                  @if ($App->state == 'cuncled')                 
                  <td>  <div class="badge badge-outline-danger">Cuncled</div></td>
                  @endif    
                  @if ($App->state == 'pending')                 
                  <td>  <div class="badge badge-outline-warning">Pending</div></td>
                  @endif    
                  
                  
                  <td>
                      <div class="badge badge-outline-success"><a href="{{route('cancelAppointments',$App->id)}}">Cuncled</a></div>
                    </td>
                  <td>
                      <div class="badge badge-outline-success"><a href="{{route('approvedAppointments',$App->id)}}">Approved</a> </div>
                      <div class="badge badge-outline-warning"><a href="{{route('pendingAppointments',$App->id)}}">Pending</a></div>
                    </td>
                    <td> <div class="badge badge-outline-danger"><a href="{{route('deleteAppointments',$App->id)}}">Delelte</a></div> </td>
                    <td> <div class="badge badge-outline-primary"><a href="{{route('viewMessage',$App->id)}}">send Email</a></div> </td>
                </tr>    
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>