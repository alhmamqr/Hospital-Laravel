<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('user.nav')

  <div class="col-md-4">
    
    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
       {{session()->get('message')}}
    </div>
@endif
  </div>

  
<div class="container">

  @if ($myApps)
  <h1 class="text-center mt-5">Your Appointments</h1>
  <div class="mytable mt-5">
    <table class="table table-dark table-striped"">
      <thead>
        <tr>
           
          <th scope="col">Name</th>
          <th scope="col">Message</th>
          <th scope="col">Date</th>
          <th scope="col">controll</th>
          <th scope="col">status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($myApps as $App)
        <tr>
          <td>{{$App->name}}</td>
         <td>{{$App->message}}</td>
         <td>{{$App->date}}</td>
         <td>
          <a href="{{route('delete.appointment',$App->id)}}" onclick="return confirm('are you shour')">Cancle</a>
        </td>
        @if ($App->state == 'approved')
        <td>  <div class="badge badge-outline-success">Approved</div></td>
        @endif
        @if ($App->state == 'cuncled')                 
        <td>  <div class="badge badge-outline-danger">Cuncled</div></td>
        @endif    
        @if ($App->state == 'pending')                 
        <td>  <div class="badge badge-outline-warning">Pending</div></td>
        @endif
       </tr> 

        @endforeach


       
      </tbody>
    </table>
  </div>
  @endif



</div>



 


 



  
@include('user.appointment')

 

@include('user.footer')



<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>