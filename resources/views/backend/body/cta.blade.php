@extends('backend.body.master')
@section('master')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Call To Action Section-CTA</div>
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
                            <form action="{{ route('store.cta') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Tittle</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input name="title" type="text" value="{{ $cta->title }}" class="form-control" />
                                    <input name="id" type="hidden"  value="{{ $cta->id }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Details</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <textarea class="form-control" name="description" placeholder="Showcase description..." rows="3"> {{ $cta->description }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">CTA Image</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="file" name="image" id="image" class="form-control" value=""/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <img id="showImage" class="rounded avatar-lg" src="{{ asset(!empty($cta->image)?$cta->image:'backend/assets/images/no_image.jpeg') }}" alt="">
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
