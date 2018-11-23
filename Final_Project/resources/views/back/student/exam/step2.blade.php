@extends('layouts.master')

@section('header')
  @include('back.student.inc.header')
@endsection


@section('sidebar')
  @include('back.student.inc.sidebar')
@endsection


@section('content')
<div class="content container-fluid">
  <div class="row">
      <div class="col-sm-12">
          <h4 class="page-title">Test Your Preparation</h4>
      </div>

  </div>
  <div class="row">
      <div class="offset-md-2 col-md-8">
          <div class="card-box">
              <h4 class="card-title">Select The Correct Answer:</h4>
              <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                  <div class="col-md-12">
                    <h5>01. Most of the members of this company are—————.</h5>
                  </div>
                  <div class="offset-1 col-md-10">
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> mathematic teachers
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> mathematics teachers
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> mathematics teacher
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> mathematic’s teachers
                          </label>
                      </div>
                  </div>
              </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <h5>02. The prices for car can run——————Tk.4,00,000.</h5>
                  </div>
                  <div class="offset-1 col-md-10">
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> as high as
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> so high as
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> as high to
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> as high for
                          </label>
                      </div>
                  </div>
              </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <h5>03. The agriculture in temperature zones all around the world is—.</h5>
                  </div>
                  <div class="offset-1 col-md-10">
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> similar
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> same
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> similar to
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> like as
                          </label>
                      </div>
                  </div>
              </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <h5> 04. Which sentence is correct?</h5>
                  </div>
                  <div class="offset-1 col-md-10">
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> Very few writer in the Bangladesh are as skilled as Zakir Hussain in English Grammar.
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio">  Very few writers in the Bangladesh are as skilled as Zakir Hussain in English Grammar.
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> No other writers in the Bangladesh are as skilled as Zakir Hussain in English Grammar.
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> Very few writers in the Bangladesh is as skilled as Zakir Hussain in English Grammar.
                          </label>
                      </div>
                  </div>
              </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <h5>05. The number of drivers————called for a strike for an unknown period.</h5>
                  </div>
                  <div class="offset-1 col-md-10">
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> are
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> is
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio">  have
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> has
                          </label>
                      </div>
                  </div>
              </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <h5>06. Most of the members of this company are—————.</h5>
                  </div>
                  <div class="offset-1 col-md-10">
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> mathematic teachers
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> mathematics teachers
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> mathematics teacher
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> mathematic’s teachers
                          </label>
                      </div>
                  </div>
              </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <h5>07. The prices for car can run——————Tk.4,00,000.</h5>
                  </div>
                  <div class="offset-1 col-md-10">
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> as high as
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> so high as
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> as high to
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> as high for
                          </label>
                      </div>
                  </div>
              </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <h5>08. The agriculture in temperature zones all around the world is—.</h5>
                  </div>
                  <div class="offset-1 col-md-10">
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> similar
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> same
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> similar to
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> like as
                          </label>
                      </div>
                  </div>
              </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <h5> 09. Which sentence is correct?</h5>
                  </div>
                  <div class="offset-1 col-md-10">
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> Very few writer in the Bangladesh are as skilled as Zakir Hussain in English Grammar.
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio">  Very few writers in the Bangladesh are as skilled as Zakir Hussain in English Grammar.
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> No other writers in the Bangladesh are as skilled as Zakir Hussain in English Grammar.
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> Very few writers in the Bangladesh is as skilled as Zakir Hussain in English Grammar.
                          </label>
                      </div>
                  </div>
              </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <h5>10. The number of drivers————called for a strike for an unknown period.</h5>
                  </div>
                  <div class="offset-1 col-md-10">
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> are
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> is
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio">  have
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="radio"> has
                          </label>
                      </div>
                  </div>
              </div>


                <div class="text-center">
                    <button type="submit" class="btn btn-primary m-auto">Submit</button>
                </div>
              </form>
          </div>
      </div>
  </div>
</div>

@endsection
