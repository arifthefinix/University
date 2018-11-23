@extends('layouts.front')

@section('content')
    <div class="container-fluid p-0">
        <img src="{{ asset('storage/') }}/university_images/Bw8YnKKxdHhBUSWsJIXswJrzNM3KeCslPFwe4oOM.jpeg" class="img-fluid" alt="">
    </div>

      <div class="container bg-light pt-5 pb-5">
        <div class="row">
          <h2>Dhaka University</h2>
          <p> The University of Dhaka is the oldest university in modern Bangladesh. The university is ranked number one on the Bangladesh University Ranking 2017. Established in 1921 during the British Raj, it has made significant contributions to the modern history of Bangladesh.
          </p>
        </div>
        <div class="">
          <h4>Exam Date of A Unit: 28/11/2018</h4>
          <h4>Exam Date of B Unit: 05/12/2018</h4>
          <h4>Exam Date of C Unit: 12/12/2018</h4>
          <h4>Exam Date of D Unit: 19/12/2018</h4>
          <h4>Number of seats: 6900+</h4>
        </div>
      </div>

      <section class="footer bg-info text-center text-white p-2">
        <h3>All right reserved &copy;{{ date('Y') }}</h3>
      </section>

  @endsection

      <script src="{{ asset('front_end/') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('front_end/') }}/js/bootstrap.min.js"></script>
      <script src="{{ asset('front_end/') }}/js/custom.js"></script>
  </body>
</html>
