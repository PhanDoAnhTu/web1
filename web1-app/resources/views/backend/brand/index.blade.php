@extends('layouts.admin')

@section('title', 'brand')
@section('blank-page', 'Brand List')

@section('content')
<!-- content -->
<table class="table table-bordered table-hover table-striped text-center">
    <thead>
        <tr>
            <th>#</th>
            <th>Tên thương hiệu</th>
            <th>Ảnh</th>
            <th>Ngày tạo</th>
            <th>Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <input type="checkbox" />
            </td>
            <td>
                name
            </td>
            <td><img src="" alt="hinh_anh" /></td>
            <td>
            </td>
            <td>
                <button class="btn btn-sm btn-info me-1">
                    <i class="fas fa-eye"></i>
                </button>
                <button class="btn btn-sm btn-primary me-1">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="btn btn-sm btn-danger">
                    <i class="fas fa-trash"></i>
                </button>
            </td>
        </tr>
    </tbody>
</table>
<!-- content -->
@endsection