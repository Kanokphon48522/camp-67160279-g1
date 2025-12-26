@extends('template.default')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">สรุปข้อมูลที่ส่งมาจากฟอร์ม (Result Page)</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>ชื่อ-นามสกุล:</strong> {{ $data['fname'] }} {{ $data['lname'] }}</p>
                    <p><strong>วัน/เดือน/ปีเกิด:</strong> {{ $data['pbirth'] }}</p>
                    <p><strong>อายุ:</strong> {{ $data['age'] }} ปี</p>
                    <p><strong>เพศ:</strong> {{ $data['gender'] ?? 'ไม่ได้ระบุ' }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>ที่อยู่:</strong> {{ $data['address'] }}</p>
                    <p><strong>สีที่ชอบ:</strong> <span style="color: {{ $data['color'] }}">{{ $data['color'] }}</span></p>
                    <p><strong>แนวเพลงที่ชอบ:</strong> {{ $data['music'] ?? 'ไม่ได้ระบุ' }}</p>
                    <p><strong>สถานะการยืนยอม:</strong> {{ isset($data['confirm']) ? 'ยินยอมให้เก็บข้อมูล' : 'ไม่ได้กดยินยอม' }}</p>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <a href="/workshop" class="btn btn-primary">กลับไปหน้าฟอร์ม</a>
            </div>
        </div>
    </div>
</div>
@endsection
