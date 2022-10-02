@extends('layouts.master')

@section('content')
        <div class="container">
            <div class="row mt-4">
                <form method="POST" action="{{ url('hitung-nilai')  }}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nilai UTS</label>
                      <input type="number" name="uts" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Nilai UAS <i class="fas fa-user-slash    "></i></label>
                      <input type="number" name="uas" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
    
</div>
@endsection
