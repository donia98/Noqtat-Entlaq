@extends('layouts.layout')

@section('content')
<!--begin::Content-->
<div class="d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom card-custom gutter-t">
                <div class="card-header py-3">
                    <div class="card-title">
                        <h2 class="card-label">
                            الشركات
                        </h2>
                    </div>
                    <div class="card-toolbar">
                        <div class="dropdown dropdown-inline  mr-2">
                            <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                fill="#000000" opacity="0.3" />
                                            <path
                                                d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>تصدير</button>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <ul class="navi flex-column navi-hover py-2">
                                    <li
                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                        Export Tools</li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_print">
                                            <span class="navi-icon">
                                                <i class="la la-print"></i>
                                            </span>
                                            <span class="navi-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_copy">
                                            <span class="navi-icon">
                                                <i class="la la-copy"></i>
                                            </span>
                                            <span class="navi-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_excel">
                                            <span class="navi-icon">
                                                <i class="la la-file-excel-o"></i>
                                            </span>
                                            <span class="navi-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_csv">
                                            <span class="navi-icon">
                                                <i class="la la-file-text-o"></i>
                                            </span>
                                            <span class="navi-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_pdf">
                                            <span class="navi-icon">
                                                <i class="la la-file-pdf-o"></i>
                                            </span>
                                            <span class="navi-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-checkable" id="kt_datatable2">
                        <thead>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>البريد الإلكتروني</th>
                                <th>المدينة</th>
                                <th>قطاع العمل</th>
                                <th>حالة التدريب</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>1</td>
                                <td>شركة المجد لتكنولوجيا المعلومات</td>
                                <td>majd@almajdco.com</td>
                                <td>غزة</td>
                                <td>تكنولوجيا المعلومات</td>
                                <td nowrap="nowrap">
                                    <span class="label label-lg label-inline mr-2 label-rounded label-success"
                                        style="color:#fff;">
                                        متاح</span>
                                </td>
                                <td nowrap="nowrap">
                                    <a href="#view" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="عرض">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon-eye icon-primary"></i>
                                    </a>
                                    <a href="#edit" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-primary mr-2" title="تعديل">

                                        <i class="icon-x1 text-success text-success-40 flaticon-edit icon-success"></i>
                                    </a>
                                    <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                                        title="إيقاف الحساب">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 Z M12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 Z M19.0710678,4.92893219 L19.0710678,4.92893219 C19.4615921,5.31945648 19.4615921,5.95262146 19.0710678,6.34314575 L6.34314575,19.0710678 C5.95262146,19.4615921 5.31945648,19.4615921 4.92893219,19.0710678 L4.92893219,19.0710678 C4.5384079,18.6805435 4.5384079,18.0473785 4.92893219,17.6568542 L17.6568542,4.92893219 C18.0473785,4.5384079 18.6805435,4.5384079 19.0710678,4.92893219 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2</td>
                                <td>جمعية عائشة للخدمات الإجتماعية والنسائية</td>
                                <td>aysha@aysha.com</td>
                                <td>غزة</td>
                                <td>الخدمات الإجتماعية</td>
                                <td nowrap="nowrap">
                                    <span class="label label-lg label-inline mr-2 label-rounded label-secondary">
                                        غير متاح</span>
                                </td>
                                <td nowrap="nowrap">
                                    <a href="#view" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="عرض">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon-eye icon-primary"></i>
                                    </a>
                                    <a href="#edit" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-primary mr-2" title="تعديل">

                                        <i class="icon-x1 text-success text-success-40 flaticon-edit icon-success"></i>
                                    </a>
                                    <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                                        title="إيقاف الحساب">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 Z M12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 Z M19.0710678,4.92893219 L19.0710678,4.92893219 C19.4615921,5.31945648 19.4615921,5.95262146 19.0710678,6.34314575 L6.34314575,19.0710678 C5.95262146,19.4615921 5.31945648,19.4615921 4.92893219,19.0710678 L4.92893219,19.0710678 C4.5384079,18.6805435 4.5384079,18.0473785 4.92893219,17.6568542 L17.6568542,4.92893219 C18.0473785,4.5384079 18.6805435,4.5384079 19.0710678,4.92893219 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3</td>
                                <td>مدرسة الوحدة الخاصة</td>
                                <td>info@alwehda.com</td>
                                <td>غزة</td>
                                <td>التربية والتعليم</td>
                                <td nowrap="nowrap">
                                    <span class="label label-lg label-inline mr-2 label-rounded label-success"
                                        style="color:#fff;">
                                        متاح</span>
                                </td>
                                <td nowrap="nowrap">
                                    <a href="#view" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="عرض">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon-eye icon-primary"></i>
                                    </a>
                                    <a href="#edit" data-toggle="modal"
                                        class="btn btn-sm btn-icon btn-light btn-hover-primary mr-2" title="تعديل">

                                        <i class="icon-x1 text-success text-success-40 flaticon-edit icon-success"></i>
                                    </a>
                                    <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                                        title="إيقاف الحساب">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 Z M12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 Z M19.0710678,4.92893219 L19.0710678,4.92893219 C19.4615921,5.31945648 19.4615921,5.95262146 19.0710678,6.34314575 L6.34314575,19.0710678 C5.95262146,19.4615921 5.31945648,19.4615921 4.92893219,19.0710678 L4.92893219,19.0710678 C4.5384079,18.6805435 4.5384079,18.0473785 4.92893219,17.6568542 L17.6568542,4.92893219 C18.0473785,4.5384079 18.6805435,4.5384079 19.0710678,4.92893219 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

    <!-- begin::Edit Info -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل بيانات الشركة\المؤسسة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>اسم الشركة</label>
                                    <input type="text" class="form-control" value="شركة بوصلة لتكنولوجيا المعلومات" />
                                </div>

                                <div class="col-lg-4">
                                    <label>البريد الإلكتروني</label>
                                    <input type="email" class="form-control" value="info@bosala.tech" />
                                </div>
                                <div class="col-lg-4">
                                    <label>رقم التواصل</label>
                                    <input type="number" class="form-control" value="05999234" />
                                </div>
                            </div>


                            <div class="separator separator-dashed my-5"></div>

                            <div class="form-group row">

                                <div class="col-lg-4">
                                    <label>المدينة</label>
                                    <input type="text" class="form-control" value="غزة" />
                                </div>
                                <div class="col-lg-4">
                                    <label>الموقع</label>
                                    <input type="text" class="form-control"
                                        value="غزة شارع الوحدة عمارة الأمل الطابق الرابع" />
                                </div>
                                <div class="col-lg-4">
                                    <label>قطاع العمل</label>
                                    <input type="text" class="form-control" value="تكنولوجيا المعلومات" />
                                </div>
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>تخصصات التدريب</label>
                                    <input type="text" class="form-control" value="تطوير ويب وهواتف ذكية" />
                                </div>
                                <div class="col-lg-4">
                                    <label>حالة التدريب</label>
                                    <input type="text" class="form-control" value="متاح" />
                                </div>
                                <div class="col-lg-4">
                                    <label>عدد الأفراد المتاح استقبالهم</label>
                                    <input type="number" class="form-control" value="05999234" />
                                </div>
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="form-group row">
                                <div class="col-lg-8">
                                    <label>نبذة مختصرة</label>

                                    <textarea name="" id="" cols="30" rows="5"
                                        class="form-control">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, sapiente tempora accusamus dignissimos est eius non hic eaque iste iure rerum! Eum eaque fuga asperiores ipsa, voluptatibus id! Tempora, obcaecati.</textarea>
                                </div>
                                <div class="col-lg-4">
                                    <label>شعار الشركة</label>
                                    <input type="file" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary font-weight-bold">تعديل</button>
                    <button type="button" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">اغلاق</button>

                </div>
            </div>
        </div>
    </div>
    <!-- end::Edit Info -->

</div>
<!--end::Content-->



@endsection
