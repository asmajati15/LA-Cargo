@extends('user/layout')

@section('title')
  Check Shipping Rate
@endsection

@section('content')
  <div class="container shipping">
    <div class="search-form mx-auto">
      <h5 class="mb-4">Check Shipping Rate</h5>
      <form action="{{ url('') }}">
        @csrf
        <div class="row mb-3">
          <label for="inputFrom" class="col-sm-2 col-form-label">From</label>
          <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example">
              <option selected>Select City</option>
              <option value="1">Bogor</option>
              <option value="2">Jakarta</option>
              <option value="3">Bekasi</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputTo" class="col-sm-2 col-form-label">To</label>
          <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example">
              <option selected>Select City</option>
              <option value="1">Bogor</option>
              <option value="2">Jakarta</option>
              <option value="3">Bekasi</option>
            </select>
          </div>
        </div>
        <div class="row">
          <label for="inputWeight" class="col-sm-2 col-form-label">Weight</label>
          <div class="col-sm-10">
            <div class="input-group mb-3">
              <input type="destination" class="form-control" id="inputWeight" placeholder="1">
              <span class="input-group-text" id="basic-addon2">kg</span>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputDimension" class="col-sm-2 col-form-label">Dimension</label>
          <div class="col-sm-10" style="display: inline-block">
            <div class="row">
              <div class="col-sm-4">
                <div class="input-group mb-3">
                  <input type="length" class="form-control" id="inputLength" placeholder="Length">
                  <span class="input-group-text" id="basic-addon2">cm</span>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="input-group mb-3">
                  <input type="Width" class="form-control" id="inputDimension" placeholder="Width">
                  <span class="input-group-text" id="basic-addon2">cm</span>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="input-group mb-3">
                  <input type="Height" class="form-control" id="inputDimension" placeholder="Height">
                  <span class="input-group-text" id="basic-addon2">cm</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-end flex-column mb-3">
          <div class="mt-auto">
            <button type="submit" class="btn btn-danger">Check</button>
          </div>
        </div>
      </form>
    </div>

    <div class="rate mx-auto">
      <h5 class="mb-4">Check Shipping Rate</h5>
      <table class="table table-bordered">
        <thead>
          <tr class="table-active">
            <th scope="col">Services</th>
            {{-- <th scope="col">Description</th> --}}
            <th scope="col">Rate</th>
            <th scope="col">Estimation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Regular</th>
            {{-- <td>Regular Shipping</td> --}}
            <td>Rp 20.000</td>
            <td>1-2 Days</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
