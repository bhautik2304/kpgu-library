@extends('layouts.admin')

@section('titale', 'Settings')

@section('body')
    <div class="container">
        <div class="row"> <!--begin::Col-->
            <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                <a href="{{ route('setting_user_list') }}">
                    <div class="small-box text-bg-gray">
                        <div class="inner">
                            {{-- <h3>150</h3> --}}
                            <p>Users List</p>
                        </div>
                    </div> <!--end::Small Box Widget 1-->
                </a>
            </div> <!--end::Col-->
        </div> <!--end::Row--> <!--begin::Row-->
    </div>
@endsection
