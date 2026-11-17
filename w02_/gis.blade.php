@extends('layouts.app')

@section('title', 'แนะนำรายวิชา')

@section('content')
    <h1 class="text-primary">แนะนำรายวิชา GIS</h1>
    <hr>
    <p>ข้อมูลตารางเรียนรายวิชาประจำวันพฤหัสบดี (เช้า):</p>
    
    <div class="table-responsive mt-4">
        <table class="table table-hover table-bordered shadow-sm align-middle">
            <thead class="table-primary text-center">
                <tr>
                    <th>วัน</th>
                    <th>เวลา</th>
                    <th>รหัสวิชา</th>
                    <th>ชื่อวิชา</th>
                    <th>ห้อง</th>
                    <th>อาจารย์ผู้สอน</th>
                    <th>ส่งงาน</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center fw-bold">พฤหัสบดี</td>
                    <td>08:30 - 12:30</td>
                    <td>9042052-59</td>
                    <td>วิชาเขียนโปรแกรมเว็บขั้นสูง</td>
                    <td class="text-center">434</td>
                    <td>อ.นิทัศน์</td>
                    <td class="text-center">
                        <a href="/assignment" class="btn btn-sm btn-success">เปิดโฟลเดอร์</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection