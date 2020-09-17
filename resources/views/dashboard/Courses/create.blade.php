@extends('layouts.dashboard.app')
@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.index')}}">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.courses')}}"> الكورسات  </a>
                            </li>
                            <li class="breadcrumb-item active">إضافة  كورس
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form">  اضافه كورس   </h4>
                                <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            @include('layouts.dashboard.asside.success')
                            @include('layouts.dashboard.asside.errors')
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{ route('admin.courses.store')}}" method="POST"
                                          enctype="multipart/form-data">
                                       @csrf
                                        <div class="form-group">
                                            <label> صوره الكورس </label>
                                            <label id="projectinput7" class="file center-block">
                                                <input type="file" id="file" name="image">
                                                <span class="file-custom"></span>
                                            </label>
                                            @error('image')
                                            <span class="text-danger">{{ $message}}</span>
                                         @enderror
                                         </div>

                                        <div class="form-body">


                                       <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> اسم الكورس  </label>
                                                <input type="text" id="name" name="name"
                                                       class="form-control"
                                                       placeholder=" enter your name "

                                                @error("name")
                                                <span class="text-danger"> {{$message}}  </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label for="projectinput1">  سعر الكورس  </label>
                                               <input type="number" name="price" id="price"  step="1"  class="form-control"placeholder="enter price">
                                               @error("price")
                                               <span class="text-danger"> {{$message}}  </span>
                                               @enderror
                                            </div>
                                        </div>

                                    </div>


                                        </div>

                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                <i class="ft-x"></i> الغاء
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> اضافه
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
@endsection
