@extends("theme.$theme.layout")

@section('contenido')


<section class="content">
    <div class="container-fluid">
      
      <!-- Timelime example  -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <div class="timeline">
            <!-- timeline time label -->
            <div class="time-label">
              <span class="bg-red">14 ENE. 2020</span>
            </div>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <div>
              <i class="fas fa-clock bg-gray"></i>
              <div class="timeline-item">
                <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                <h3 class="timeline-header"><a href="#"> REUNION CIVICO-MILITAR </a> </h3>

                <div class="timeline-body">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                  weebly ning heekya handango imeem plugg dopplr jibjab, movity
                  jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                  quora plaxo ideeli hulu weebly balihoo...
                </div>
              </div>
            </div>

            <!-- timeline item -->
            <div>
              <i class="fa fa-camera bg-purple"></i>
              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
                <div class="timeline-body">
                  <img src="http://placehold.it/150x100" alt="...">
                  <img src="http://placehold.it/150x100" alt="...">
                  <img src="http://placehold.it/150x100" alt="...">
                  <img src="http://placehold.it/150x100" alt="...">
                  <img src="http://placehold.it/150x100" alt="...">
                </div>
              </div>
            </div>
            <!-- END timeline item -->
            <!-- timeline item -->
            <div>
              <i class="fas fa-video bg-maroon"></i>

              <div class="timeline-item">

                <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>

                <div class="timeline-body">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" frameborder="0" allowfullscreen=""></iframe>
                  </div>
                </div>
              </div>
            </div>
           
            
          </div>
        </div>
        <!-- /.col -->
      </div>
    </div>
    <!-- /.timeline -->

  </section>
  <!-- /.content -->





    
@endsection