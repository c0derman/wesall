@extends('front.layouts.master')
@section('title', 'تفاصيل المقال')
@section('content')
@include('front.layouts.common.navbar')

<section class="compleate-regestre login-page">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 form-container">
                <h2 class="text-center text-primary">إكمال بيانات الحساب</h2>
                <hr>

                <form class="form-horizontal" enctype="multipart/form-data">
                    <!-- الجنس -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">الجنس <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default active">
                                    <input type="radio" name="gender" value="male" checked> ذكر
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="gender" value="female"> أنثى
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- الدولة -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">الدولة <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select class="selectpicker form-control" data-live-search="true" title="اختر دولتك...">
                                <option>مصر</option>
                                <option>السعودية</option>
                                <option>الإمارات</option>
                                <option>الكويت</option>
                                <option>الأردن</option>
                                <!-- Add more countries as needed -->
                            </select>
                        </div>
                    </div>

                    <!-- صورة الملف الشخصي -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">صورة الملف الشخصي</label>
                        <div class="col-sm-9 file-input">
                            <label class="btn btn-file btn-success">
                                <i class="glyphicon glyphicon-upload"></i> رفع صورة
                                <input type="file" name="profile_picture" accept="image/*">
                            </label>
                            <span class="help-block">اختر صورة واضحة بحجم لا يزيد عن 5MB</span>
                        </div>
                    </div>

                    <!-- صور إضافية -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">صور إضافية</label>
                        <div class="col-sm-9 file-input">
                            <label class="btn btn-file btn-info">
                                <i class="glyphicon glyphicon-picture"></i> إضافة صور
                                <input type="file" name="additional_images[]" multiple accept="image/*">
                            </label>
                            <span class="help-block">يمكنك رفع حتى 10 صور (PNG/JPG)</span>
                        </div>
                    </div>

                    <!-- الهوايات -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">الهوايات</label>
                        <div class="col-sm-9">
                            <div class="checkbox">
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="reading"> القراءة
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="sports"> الرياضة
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="music"> الموسيقى
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="travel"> السفر
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="cooking"> الطبخ
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- الديانة -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">الديانة <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select class="form-control" name="religion">
                                <option value="muslim">مسلم</option>
                                <option value="christian">مسيحي</option>
                                <option value="other">أخرى</option>
                            </select>
                        </div>
                    </div>

                    <!-- تاريخ الميلاد -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">تاريخ الميلاد</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="birthdate">
                        </div>
                    </div>

                    <!-- عن نفسك -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">نبذة عنك</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="4" placeholder="أخبرنا قليلاً عن نفسك..."></textarea>
                        </div>
                    </div>

                    <!-- زر الإرسال -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-custom btn-lg btn-block">
                                <i class="glyphicon glyphicon-ok"></i> إكمال التسجيل
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection