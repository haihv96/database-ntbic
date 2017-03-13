@extends('admin.home')
@section('css')
<link href="/webarch/webarch/HTML/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="/webarch/webarch/HTML/assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="/webarch/webarch/HTML/assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
<link rel="stylesheet" type="text/css" href="/public/css/admin_chuyen_gia.css">
@endsection

@section('main')
<div class="form-group">
  <h4 class="form-title">SỬA DỮ LIỆU SẢN PHẨM </h4>
  
    <div class="grid simple">
        <form id="form_iconic_validation" action="#">
                      <div class="form-group">
                        <label class="form-label">Tên sản phẩm</label>
                        
            <div class="input-with-icon  right">                                       
              <i class=""></i>
              <input type="text" name="form1Name" id="form1Name" class="form-control" placeholder="Tên sản phẩm">                                 
            </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Lĩnh vực</label>
                        
            <div class="input-with-icon  right">                                       
              <i class=""></i>
              <input type="text" name="form1Email" id="form1Email" class="form-control" placeholder="Lĩnh vực">                                 
            </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Đặc điểm nổi bật</label>
                        
            <div class="input-with-icon  right">                                       
              <i class=""></i>
              <input type="text" name="form1Url" id="form1Url" class="form-control" placeholder="Đặc điểm nổi bật"> 
            </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Mô tả chung</label>
            <div class="input-with-icon  right">                                       
               <i class=""></i>
              <input type="text" name="form1Url" id="form1Url" class="form-control" placeholder="Mô tả chung"> 
            </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Quy trình chuyển giao</label>
                        
            <div class="input-with-icon  right">                                       
              <i class=""></i>
              <input type="text" name="form1Url" id="form1Url" class="form-control" placeholder="Quy trình chuyển giao">                                 
            </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Khả năng ứng dụng</label>
                        
            <div class="input-with-icon  right">                                       
              <i class=""></i>
              <input type="text" name="form1Url" id="form1Url" class="form-control" placeholder="khả năng ứng dụng">                                 
            </div>
          </div>
            
          <div class="form-actions">  
          <div class="pull-right">
            <button type="submit" class="btn btn-success btn-cons"><i class="icon-ok"></i> Save</button>
            <button type="button" class="btn btn-white btn-cons">Cancel</button>
          </div>
          </div>
        </form>
      </div>
</div>
@endsection

@section('script')
@endsection