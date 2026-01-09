<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex; // ดึง Model มาใช้งาน

class PokedexController extends Controller
{
    //ดึงข้อมูลทั้งหมดมาแสดง
    public function index() {
        $pokemons = Pokedex::all();
        return view('pokedex.index', compact('pokemons'));
    }

    //รับค่าจากฟอร์มมาลง DB
    public function store(Request $req) {
        Pokedex::create($req->all());
        return redirect('/pokedex'); //บันทึกเสร็จให้กลับหน้าเดิม
    }

    //ลบข้อมูล
    public function destroy($id) {
        Pokedex::find($id)->delete();
        return redirect('/pokedex');
    }
    //ฟังก์ชันเปิดหน้าแก้ไข
    public function edit($id) {
        $pokemon = Pokedex::find($id); // หาข้อมูลตัวที่จะแก้
        return view('pokedex.edit', compact('pokemon')); // ส่งไปที่หน้า edit
    }

    //ฟังก์ชันบันทึกการแก้ไข
    public function update(Request $req, $id) {
        Pokedex::find($id)->update($req->all()); // อัปเดตข้อมูลใหม่ทับตัวเดิม
        return redirect('/pokedex'); // เสร็จแล้วกลับหน้าหลัก
    }
}

