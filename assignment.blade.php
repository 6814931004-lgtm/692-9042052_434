@extends('layouts.app')

@section('title', 'รายการงาน')

@section('content')
    <h1 class="text-danger">ภาระงานของรายวิชา (Assignments)</h1>
    <hr>
    <ul class="list-group mt-4 shadow-sm">
        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
            <div>
                <strong>วิชาเขียนโปรแกรมเว็บขั้นสูง:</strong> ส่งงานสร้างหน้าเว็บด้วย Blade Template (อ.นิทัศน์)
            </div>
            <div>
                <span class="badge bg-danger rounded-pill me-3">กำลังทำ</span>
                <a href="https://github.com/6814931004-lgtm/692-9042052_434"target="_blank" class="btn btn-sm btn-primary">ดูงาน</a>
                
            </div>
        </li>
    </ul>
@endsection