<!-- file: resources/views/html101.blade.php -->
<!DOCTYPE html>
<html>
<head>
        <title>ส่วนหัวของ html</title>
        <link rel="stlyesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans+Thai:wght@100..800&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Playpen Sans Thai", cursive;
            }

        .form-label {
            display: inline-block;
            width: 120px; 
        }
        .form-control, select, textarea {
            display: inline-block;
            width: 250px;
            vertical-align: middle;
        }
        .radio-group label {
            margin-right: 10px;
        }
        .checkbox-label {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .btn-group {
            display: flex;
            justify-content: space-between;
            width: 280px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Workshop #HTML - FORM</h1>
        <form>
            <div class="row mt-3">
                <label for="fname" class="form-label">ชื่อ</label>
                <input id="fname" class="form-control" type="text">
            </div>

            <div class="row mt-3">
                <label for="lname" class="form-label">สกุล</label>
                <input id="lname" class="form-control" type="text">
            </div>

            <div class="row mt-3">
                <label for="pbirth" class="form-label">วัน/เดือน/ปีเกิด</label>
                <input id="pbirth" type="date" class="form-control">
            </div>

            <div class="row mt-3">
                <label for="age" class="form-label">อายุ</label>
                <input id="age" type="text" class="form-control">
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
                <input type="file" id="pics">
            </div>

            <div class="row mt-3">
                <label for="address" class="form-label">ที่อยู่</label>
                <textarea id="address" class="form-control" rows="4"></textarea>
            </div>

            <div class="row mt-3">
                <label for="color" class="form-label">สีที่ชอบ</label>
                <select id="color" class="form-control">
                    <option value="red">สีแดง</option>
                    <option value="blue">สีน้ำเงิน</option>
                    <option value="green">สีเขียว</option>
                    <option value="yellow">สีเหลือง</option>
                </select>
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
                    <input type="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
