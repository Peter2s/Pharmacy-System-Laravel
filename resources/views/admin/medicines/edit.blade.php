@extends('layouts.admin')

@section('content')
    <section class="content mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Medicine</h3>
                    </div>
                    <div class="card-body">
                        @include('partials.validation_errors')
                        <form action="{{ route('medicines.update',$medicine->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $medicine->id }}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" value="{{ $medicine->name }}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Price</label>
                                <input type="number" id="price" name="price" min="1" value="{{ $medicine->price }}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Cost</label>
                                <input type="number" id="cost" name="cost" min="1" value="{{ $medicine->cost }}"
                                       class="form-control">
                            </div>

                            <input type="submit" value="Save" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
@endsection
