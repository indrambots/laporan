@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-6 col-lg-6 col-xl-6 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="{{ url('kegiatan') }}">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                            <i class="icon-6x text-info mb-10 mt-10 fa-solid fas fa-people-arrows" aria-hidden="true"></i>
                        </span>
                    </a>
                    <br>
                    <a href="{{ url('kegiatan') }}"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">KEGIATAN
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
