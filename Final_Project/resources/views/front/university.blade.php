@extends('layouts.front')

@section('content')
    <div class="container-fluid p-0">
        <img src="{{ asset('storage/') }}/university_images/3AmjMdJTpjOCTJts8mVd2e4xP0Mvof2qr9gPSHr5.jpeg" class="img-fluid" alt="">
    </div>

      <div class="container bg-light pt-5 pb-5">
        <div class="row">
          <h2>University Name</h2>
          <p> Nescius aliqua aliquip occaecat aut tamen mentitum excepteur. Te anim aliquip
            iudicem. Ipsum aliquip an pariatur de ullamco et eram constias.Fore proident in
            quibusdam se deserunt sed quamquam quo aute nescius reprehenderit, appellat sint
            multos si eram. Ullamco do fabulas se te quae labore summis incurreret quo malis
            mentitum laborum, quis sed ab noster vidisse. Tamen adipisicing doctrina tamen
            aliquip se labore pariatur id despicationes. Ita culpa appellat fabulas ut duis
            appellat hic mandaremus, iis ne export mentitum, dolore singulis id senserit,
            quamquam concursionibus in iudicem hic fabulas irure dolor si irure, te senserit
            arbitrantur, irure eruditionem commodo culpa ullamco.
          </p>
        </div>
        <div class="">
          <h3>Exam Date: 28/05/1965</h3>
          <h3>Exam Date: 28/05/1965</h3>
          <h3>Exam Date: 28/05/1965</h3>
          <h3>Exam Date: 28/05/1965</h3>
          <h3>Number of seats: 100</h3>
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
