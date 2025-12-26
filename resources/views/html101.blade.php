@extends('template.default')
@section('title', 'Workshop form')
@section('content')
        <form action="{{ route('workshop.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf

            <div class="row mt-3">
                <label for="fname" class="form-label">ชื่อ</label>
                <input id="fname" name = "fname" class="form-control" type="text" required>
                <div class="invalid-feedback" style="margin-left: 120px;">
                    โปรดระบุชื่อ
                </div>
            </div>

            <div class="row mt-3">
                <label for="lname" class="form-label">สกุล</label>
                <input id="lname" name = "lname" class="form-control" type="text" required>
                <div class="invalid-feedback" style="margin-left: 120px;">
                    โปรดระบุนามสกุล
                </div>
            </div>

            <div class="row mt-3">
                <label for="pbirth" class="form-label">วัน/เดือน/ปีเกิด</label>
                <input id="pbirth" name = "pbirth" type="date" class="form-control" required>
                <div class="invalid-feedback" style="margin-left: 120px;">
                    โปรดระบุวันเกิด
                </div>
            </div>

            <div class="row mt-3">
                <label for="age" class="form-label">อายุ</label>
                <input id="age" name = "age" type="text" class="form-control" required>
                <div class="invalid-feedback" style="margin-left: 120px;">
                    โปรดระบุอายุ
                </div>
            </div>

            <div class="row mt-3">
                <label class="form-label">เพศ</label>
                <div class="radio-group">
                    <input type="radio" id="boy" name="gender" value="male">
                    <label for="boy">ชาย</label>

                    <input type="radio" id="girl" name="gender" value="female">
                    <label for="girl">หญิง</label>
                </div>
            </div>

            <div class="row mt-3">
                <label for="pics" class="form-label">รูป</label>
                <input type="file" id="pics" name = "pics">
            </div>

            <div class="row mt-3">
                <label for="address" class="form-label">ที่อยู่</label>
                <textarea id="address" name="address" class="form-control" rows="4" required></textarea>
                <div class="invalid-feedback" style="margin-left: 120px;">
                    โปรดระบุที่อยู่
                </div>
            </div>

            <div class="row mt-3">
                <label for="color" class="form-label">สีที่ชอบ</label>
                <input id="color" name = "color" type="text" class="form-control" required>
                <div class="invalid-feedback" style="margin-left: 120px;">
                    โปรดระบุสีที่ชอบ
                </div>
            </div>

            <div class="row mt-3">
                <label class="form-label">แนวเพลงที่ชอบ</label>
                <div class="radio-group">
                    <input type="radio" id="music1" name="music" value="เพื่อชีวิต">
                    <label for="music1">เพื่อชีวิต</label>

                    <input type="radio" id="music2" name="music" value="ลูกทุ่ง">
                    <label for="music2">ลูกทุ่ง</label>

                    <input type="radio" id="music3" name="music" value="อื่นๆ">
                    <label for="music3">อื่นๆ</label>
                </div>
            </div>

            <div class="row mt-3">
                <label class="checkbox-label">
                    <input type="checkbox" id="confirm" name="confirm">
                    ยินยอมให้เก็บข้อมูล
                </label>
            </div>

            <div class="row mt-3">
                <div class="btn-group">
                    <input type="reset" value="Reset">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>
        </form>
    @endsection

    @push('scripts')
        <script>
            // let clickMe = function (){
            //     //let fname = document.getElementById("fname")
            //     //fname.value = "From ClickMe"
            //     console.log(fname.value)
            //     if(fname.value == ""){
            //         fname.classList.remove('is-valid')
            //         fname.classList.add('is-invalid')
            //     }else{
            //         fname.classList.remove('is-invalid')
            //         fname.classList.add('is-valid')
            //     }
            // }

(function () {
    'use strict'

    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.classList.remove('was-validated');

            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
})();


            let myfunc = (callback)=>{
                callback("in Call back")
            }

            callMe = (param) => {
                console.log(param)
            }

            myfunc(callMe)

            let myvar1 = 1
            let myvar2 = "1"
            myvar2 = parseInt(myvar2)
            console.log(myvar1 + myvar2)
            console.log(1 == '1')

        </script>
    @endpush
