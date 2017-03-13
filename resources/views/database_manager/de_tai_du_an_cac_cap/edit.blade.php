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
  <h4 class="form-title">SỬA DỮ LIỆU ĐỀ TÀI DỰ ÁN CÁC CẤP</h4>
  
    <div class="grid simple">
        <form id="form_iconic_validation" action="#">
        
            <div class="form-group">
              <label class="form-label">Tên đề tài</label><span class="error">(*)</span>
              <div class="input-with-icon  right">                                       
                <i class=""></i>
                <input type="text" name="ten_de_tai" id="form1Name" class="form-control" placeholder={{$data->ten_de_tai}}>                             
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Mã số - Ký hiệu</label><span class="error">(*)</span>
              <div class="input-with-icon  right">                                       
                <i class=""></i>
                <input type="text" name="maso_kyhieu" id="form1Name" class="form-control" placeholder="{{$data->maso_kyhieu}}">                                 
              </div>
            </div>         
            <div class="form-group">
              <label class="form-label">Lĩnh vực</label>
              <div class="input-with-icon  right">                                       
                <i class=""></i>
                <input type="text" name="linh_vuc" id="form1Name" class="form-control" placeholder="{{$data->linh_vuc}}">                                 
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Chuyên ngành</label>
              <div class="input-with-icon  right">                                       
                <i class=""></i>
                <input type="text" name="form1Name" id="form1Name" class="form-control" placeholder="">                                 
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Năm bắt đầu</label>
              <div class="input-with-icon  right">                                       
                <i class=""></i>
                <input type="text" name="form1Name" id="form1Name" class="form-control" placeholder="">                                 
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Năm kết thúc</label>
              <div class="input-with-icon  right">                                       
                <i class=""></i>
                <input type="text" name="form1Name" id="form1Name" class="form-control" placeholder="">                                 
              </div>
            </div>          
            <div class="form-group">
              <label class="form-label">Cơ quan</label>
              <div class="input-with-icon  right">                                       
                <i class=""></i>
                <input type="text" name="form1Name" id="form1Name" class="form-control" placeholder="">                                 
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Chủ nhiệm đề tài</label><span class="error">(*)</span>
              <div class="input-with-icon  right">                                       
                <i class=""></i>
                <input type="text" name="form1Name" id="form1Name" class="form-control" placeholder="">                                 
              </div>
            </div>
           <div class="form-group">
            <label class="form-label">Điểm nổi bật</label>
                        
            <div class="input-with-icon  right">                                       
              <i class=""></i>
              <input type="text" name="form1Url" id="form1Url" class="form-control" placeholder="Hà Nội">                                 
            </div>
          </div> 
          <div class="form-group">
            <label class="form-label">Mô tả chung</label>
                        
            <div class="input-with-icon  right">                                       
              <i class=""></i>
              <input type="text" name="form1Url" id="form1Url" class="form-control" placeholder="Hà Nội">                                 
            </div>
          </div> 
          <div class="form-group">
            <label class="form-label">Mô tả quy trình chuyển giao</label>
                        
            <div class="input-with-icon  right">                                       
              <i class=""></i>
              <input type="text" name="form1Url" id="form1Url" class="form-control" placeholder="Hà Nội">                                 
            </div>
          </div> 
          <div class="form-group">
            <label class="form-label">Kết quả thực hiện</label>
                        
            <div class="input-with-icon  right">                                       
              <i class=""></i>
              <input type="text" name="form1Url" id="form1Url" class="form-control" placeholder="Hà Nội">                                 
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