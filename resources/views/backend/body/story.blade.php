@extends('backend.body.master')
@section('master')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Story Section</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">add</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('store.story') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Tittle</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input name="title" type="text" value="{{ $story->title }}" class="form-control" />
                                    <input name="id" type="hidden"  value="{{ $story->id }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Sub tittle</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input name="subtitle" type="text" value="{{ $story->subtitle }}" class="form-control" />

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Vision</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <textarea class="form-control" name="our_vision" placeholder="Showcase description..." rows="3"> {{ $story->our_vision}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Who we are</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <textarea class="form-control" name="who_we_are" placeholder="Showcase description..." rows="3"> {{ $story->who_we_are}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">History</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <textarea class="form-control" name="our_history" placeholder="Showcase description..." rows="3"> {{ $story->our_history}}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Showcase Image</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="file" name="image" id="image" class="form-control" value=""/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <img id="showImage" class="rounded avatar-lg" src="{{ asset(!empty($story->image)?$story->image:'backend/assets/images/no_image.jpeg') }}" alt="">
                            </div>


                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                                </div>
                            </div>
                        </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
