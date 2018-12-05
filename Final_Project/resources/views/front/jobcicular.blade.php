@extends('layouts.front')

@section('content')
    <div class="container-fluid p-0">
        <img src="{{ asset('front_end') }}/images/job.png" class="img-fluid" alt="">
    </div>

      <div class="container bg-light pt-5 pb-5 text-center">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="bg-primary text-white p-3">Job Circulars</h2>
          </div>
          @foreach ($circulars as $circular)
            <div class="col-md-12 pt-2">
              <h5 class="p-2">{{$circular->details}}</h5>
              <a href="{{ asset('storage') }}/{{$circular->circular  }}" target="_blank" class="btn-sm btn-primary">View Circular</a>
            </div>
          @endforeach

        </div>
      </div>

      <section class="footer bg-info text-center text-white p-2">
        <h6>All right reserved &copy;{{ date('Y') }}</h6>
      </section>

  @endsection

      <script src="{{ asset('front_end/') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('front_end/') }}/js/bootstrap.min.js"></script>
      <script src="{{ asset('front_end/') }}/js/custom.js"></script>
  </body>
</html>
