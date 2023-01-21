<div class="page-section">
    <div class="container">

        
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach ($doctors as $doctor)
            
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="doctorimage/{{$doctor->image}}" alt="" style="
                display: block;
                width: 146%;
                object-fit: contain;
                object-position: -73px 1px; ">
              <div class="meta">
                <a href="{{$doctor->phone}}"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. {{$doctor->name}}</p>
              <span class="text-sm text-grey">{{$doctor->specialty}}</span>
            </div>
          </div>
        </div>
        @endforeach




      </div>
    </div>
  </div>