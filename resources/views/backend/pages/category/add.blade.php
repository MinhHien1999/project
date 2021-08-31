@extends('backend.layout.admin');

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('backend.layout.content-header', ['name' => 'Danh mục sản phẩm', 'key' => 'Thêm danh mục'])
        <!-- Main content -->
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                {{-- <div class="card-header">
                  <h3 class="card-title">Thêm danh mục</h3>
                </div> --}}
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('category.add')}}" method="POST">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label>Tên danh mục</label>
                      <input type="" class="form-control" name="nameCategory" id="" placeholder="ghi tên danh mục">
                    </div>
                    <div class="form-group">
                      <label>Chọn danh mục cha</label>
                      <select class="form-control" name="parent_idCategory">
                        <option value="0">Danh mục cha</option>
                        {{!!$htmlOption!!}}
                      </select>
                    </div>
                  </div>
                  <!-- /.card-body --> 
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Gửi</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->  
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <!--/.col (right) -->
          </div>
        <!-- /.content -->
    </div>
@endsection