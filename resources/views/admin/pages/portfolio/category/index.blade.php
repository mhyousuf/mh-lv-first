@extends('admin.layout.layout')
@section('content')
<div class="content-wrapper">
    <div class="content-header-right text-md-right col-md-12 col-12">
        <div class="form-group">
            <div class="dropdownx">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <!-- <i class="feather icon-settings"></i> -->
                    <i class="feather icon-plus"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" id="" href="{{ url('category/create/form') }}" >&nbsp; Add new</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Category Table</h4>
        <div class="row">
          <div class="col-md-12 responsive">
            <table id="order-listing" class="table dataTable no-footer">
              <thead>
                <tr>
                  <td align="left">Id</td>
                  <td align="left">Name</td>
                  <td align="left">Status</td>
                  <td align="center">Actions</td>
                </tr>
              </thead>
              <tbody>
                 @foreach($category as $key => $v)
                <tr>
                  <td align="left">{{$key+1}}</td>
                  <td align="left">{{$v->name}}</td>
                  <td align="left">
                        @if($v->status == 1)
                            <span class="badge badge-pill badge-success status_1 st">Active</span>
                         
                        @else
                           <span class="badge badge-pill badge-warning status_0 st disabled">Inactive</span>
                        @endif
                    </td>
                    <td align="center">
                        <a class="btn btn-icons btn-rounded btn-success" href="{{ url('category/create/form/'.$v->id) }}" id="{{ $v->id }}">
                            <i class="mdi mdi-plus"></i>
                        </a>
                    <button class="btn btn-icons btn-rounded btn-danger del_btn" data-href="{{ url('category/destroy/'.$v->id) }}" data-id="{{ $v->id }}" ><i class="mdi mdi-delete"></i></button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
