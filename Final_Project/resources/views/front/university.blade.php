@extends('layouts.front')

@section('content')
    <div class="container-fluid p-0">
      @php
        $image = App\Image::where('university_id','=',$details->id)->first();
      @endphp
        <img src="{{ asset('storage/') }}/{{$image->image_name}}" class="img-fluid" alt="">
    </div>
      <div class="container bg-light pt-5 pb-5">
          <h2>{{$details->university_name}}</h2>
          <p>{{$details->university_description}}</p>
        <div class="">
          @php
            $unit_names = App\Unit::where('university_id','=',$details->id)->get();
          @endphp
          @foreach ($unit_names as $unit_name)
            <h4>Exam Date of {{$unit_name->unit_name}} : {{$unit_name->exam_date}}</h4>
          @endforeach
          <h4>{{App\Unit::where('university_id','=',$details->id)->sum('seat')}}</h4>
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
