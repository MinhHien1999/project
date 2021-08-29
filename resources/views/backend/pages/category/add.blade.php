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
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Tên danh mục</label>
                      <input type="" class="form-control" id="" placeholder="ghi tên danh mục">
                    </div>
                    <div class="form-group">
                      <label>Chọn danh mục cha</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
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