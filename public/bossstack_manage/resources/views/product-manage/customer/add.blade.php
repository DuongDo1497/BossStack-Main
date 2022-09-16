@extends('layouts.master')

@section('content')

@if(session()->has('success'))
    @include('layouts.partials.messages.success')
@endif

<div class="row">
    <form role="form" action="{{ route('customers-store') }}?continue=true" method="post" id="customer-form">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">THÔNG TIN TÀI KHOẢN</h3><br><br>
                    <h4 class="box-title"><font color='#000080'>Thêm mới</font></h4>
                </div>
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label><h5><u>I. THÔNG TIN CÁ NHÂN:</u></h5></label>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>MÃ KHÁCH HÀNG <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="customercode" value="{{ $customercode }}">
                                @if($errors->has('customercode'))<span class="text-danger">{{ $errors->first('customercode') }}</span>@endif
                            </div>

                            <div class="col-md-2 text-red text-right">
                                <label><u>TÀI KHOẢN ĐĂNG NHẬP</u> <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control select2" name="user_id">
                                    <option value=""></option>
                                    @foreach($usersLogin as $item)
                                        @if($item->id == old('user_id'))
                                            <option value="{{ $item->id }}" selected>{{ $item->email }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->email }}</option>                                                                    
                                        @endif
                                    @endforeach
                                </select>
                                @if($errors->has('user_id'))<span class="text-danger">{{ $errors->first('user_id') }}</span>@endif
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Họ & tên <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="fullname" value="{{ old('fullname') }}">
                                @if($errors->has('fullname'))<span class="text-danger">{{ $errors->first('fullname') }}</span>@endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Ngày sinh <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-2">
                                <input type='text' class="form-control" name="birthday" id='birthday' value="{{ old('birthday') }}"/>
                                @if($errors->has('birthday'))<span class="text-danger">{{ $errors->first('birthday') }}</span>@endif
                            </div>
                            <div class="col-md-2 text-right">
                                <label>Giới tính <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control select2" name="gender">
                                    <option value=""></option>
                                    @foreach($gendertype as $key=>$value)
                                        @if($key == old('gender'))
                                            <option value="{{ $key }}" selected>{{ $value }}</option>
                                        @else
                                            <option value="{{ $key }}">{{ $value }}</option>                                                                    
                                        @endif
                                    @endforeach
                                </select>
                                @if($errors->has('gender'))<span class="text-danger">{{ $errors->first('gender') }}</span>@endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Địa chỉ <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                                @if($errors->has('address'))<span class="text-danger">{{ $errors->first('address') }}</span>@endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Điện thoại <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" tabindex="5" name="phone" value="{{ old('phone') }}"> 
                                @if($errors->has('phone'))<span class="text-danger">{{ $errors->first('phone') }}</span>@endif
                            </div>
                            <div class="col-md-1 text-right">
                                <label>Email <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                @if($errors->has('email'))<span class="text-danger">{{ $errors->first('email') }}</span>@endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Người liên hệ khi cần:</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" tabindex="5" name="contactname" value="{{ old('contactname') }}"> 
                                @if($errors->has('contactname'))<span class="text-danger">{{ $errors->first('contactname') }}</span>@endif
                            </div>
                            <div class="col-md-1 text-right">
                                <label>Điện thoại:</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" tabindex="5" name="contactphone" value="{{ old('contactphone') }}"> 
                                @if($errors->has('contactphone'))<span class="text-danger">{{ $errors->first('contactphone') }}</span>@endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Nhóm khách hàng <small class="text-danger text"> (*)</small>:</label>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control select2" name="customertype">
                                <option value=""></option>
                                @foreach($customertype as $key=>$value)
                                    @if($key == old('customertype'))
                                        <option value="{{ $key }}" selected>{{ $value }}</option>
                                    @else
                                        <option value="{{ $key }}">{{ $value }}</option>                                                                    
                                    @endif
                                @endforeach
                            </select>
                            @if($errors->has('customertype'))<span class="text-danger">{{ $errors->first('customertype') }}</span>@endif
                        </div>
                    </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <label><h5><u>II. NGUỒN THÔNG TIN BIẾT ĐẾN CHƯƠNG TRÌNH:</u></h5></label>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Facebook:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="introduction_facebook" value="{{ old('introduction_facebook') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Email:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="introduction_email" value="{{ old('introduction_email') }}">
                                @if($errors->has('introduction_email'))<span class="text-danger">{{ $errors->first('introduction_email') }}</span>@endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Giới thiệu:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="introduction_user" value="{{ old('introduction_user') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Khác:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="introduction_orther" value="{{ old('introduction_orther') }}">
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <label><h5><u>III. MỐI QUAN HỆ:</u></h5></label>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Họ tên cha:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="fathername" value="{{ old('fathername') }}">
                            </div>
                            <div class="col-md-1">
                                <label>Ngày sinh:</label>
                            </div>
                            <div class="col-md-2">
                                <input type='text' class="form-control" name="fatherbirthday" id='fatherbirthday' value="{{ old('fatherbirthday') }}"/>
                            </div>
                            <div class="col-md-1">
                                <label>Nghề nghiệp:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="fatherwork" value="{{ old('fatherwork') }}">
                            </div>
                            <div class="col-md-1">
                                <label>Người phụ thuộc: </label>
                            </div>
                            <div class="col-md-1">
                                <input type="checkbox" tabindex="4" name="fatherdependentperson" value="1" id="chk-fatherdependentperson" {{ old('fatherdependentperson')==1 ? 'checked="checked"' : '' }}>
                            </div>
                        </div>
                    </div>   
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Họ tên mẹ:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="mothername" value="{{ old('mothername') }}">
                            </div>
                            <div class="col-md-1">
                                <label>Ngày sinh:</label>
                            </div>
                            <div class="col-md-2">
                                <input type='text' class="form-control" name="motherbirthday" id='motherbirthday' value="{{ old('motherbirthday') }}"/>
                            </div>
                            <div class="col-md-1">
                                <label>Nghề nghiệp:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="motherwork" value="{{ old('motherwork') }}">
                            </div>
                            <div class="col-md-1">
                                <label>Người phụ thuộc: </label>
                            </div>
                            <div class="col-md-1">
                                <input type="checkbox" tabindex="4" name="motherdependentperson" value="1" id="chk-motherdependentperson" {{ old('motherdependentperson')==1 ? 'checked="checked"' : '' }}>
                            </div>
                        </div>
                    </div>   
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Họ tên vợ/chồng:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="familyname" value="{{ old('familyname') }}">
                            </div>
                            <div class="col-md-1">
                                <label>Ngày sinh:</label>
                            </div>
                            <div class="col-md-2">
                                <input type='text' class="form-control" name="familybirthday" id='familybirthday' value="{{ old('familybirthday') }}"/>
                            </div>
                            <div class="col-md-1">
                                <label>Nghề nghiệp:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="familywork" value="{{ old('familywork') }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Con cái:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="childrenname" value="{{ old('childrenname') }}">
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <label><h5><u>THÔNG TIN PHÊ DUYỆT:</u></h5></label>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Tình trạng khách hàng :</label>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control select2" name="customerstatustype">
                                    @foreach($customerstatustype as $key=>$value)
                                        @if($key == old('customerstatustype'))
                                            <option value="{{ $key }}" selected>{{ $value }}</option>
                                        @else
                                            <option value="{{ $key }}">{{ $value }}</option>                                                                    
                                        @endif
                                    @endforeach
                                </select>
                                @if($errors->has('customerstatustype'))<span class="text-danger">{{ $errors->first('customerstatustype') }}</span>@endif
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <label>Nhân viên kinh doanh:</label>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control select2" name="officer_user_id">                        
                                    <option value=""></option>
                                    @foreach($users as $item)
                                        @if( $item->id == old('officer_user_id') )
                                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Trạng thái duyệt:</label>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control select2" name="approvestatustype">
                                    <option value=""></option>
                                    @foreach($approvestatustype as $key=>$value)
                                        @if($key == old('approvestatustype'))
                                            <option value="{{ $key }}" selected>{{ $value }}</option>
                                        @else
                                            <option value="{{ $key }}">{{ $value }}</option>                                                                    
                                        @endif
                                    @endforeach
                                </select>
                                @if($errors->has('statustype'))<span class="text-danger">{{ $errors->first('statustype') }}</span>@endif
                            </div>
                            <div class="col-md-1"></div>                            
                            <div class="col-md-2">
                                <label>Kiểm soát phê duyệt:</label>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control select2" name="approved_user_id">                        
                                    <option value=""></option>
                                    @foreach($approvedusers as $item)
                                        @if( $item->id == old('approved_user_id') )
                                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Ngày duyệt:</label>
                            </div>
                            <div class="col-md-2">
                                <input type='text' class="form-control" name="approved_at" id='approved_at' value="{{ old('approved_at') }}"/>
                                @if($errors->has('approved_at'))<span class="text-danger">{{ $errors->first('approved_at') }}</span>@endif
                            </div>
                        </div>
                    </div>
                                        
                </div>
            </div>
            
            <button type="submit" class="btn btn-success" style="width: 15%;">Lưu</button>
            <br><hr>
            <a href="{{ route('customers-index') }}" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>   
        </div>
    </form>
</div>

@endsection

@section('scripts')
@include('product-manage.customer.partials.script')
@endsection


