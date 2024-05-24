<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        return view('register');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ], [
            'email.exists' => "This email doesn't exists"
        ]);
        $role = User::where('email', $request->email)->first();
        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            if (Auth::user()->role == "user") {
                return redirect('/dashboard');
            } else {
                return redirect('/admin');
            }
        } else {
            return redirect('/login')->with('fail', "Gagal login, periksa dan coba lagi!");
        }
    }


    public function dashboard()
    {
        $data = Ppdb::latest()->paginate(1);
        return view('dashboard', compact('data'));
    }
    
    public function payment()
    {   
        $user = Ppdb::with('pembayaran')->get();
        $ambil = Ppdb::where('user_id', Auth::user()->user_id)->value("id");
        $data = Payment::where('ppdb_id', "=", $ambil)->first();
        return view('payment', compact('data', 'user'));
    }

    public function inputPayment(Request $request)
    {
        $request->validate([
            'bank' => 'required',
            'rekening' => 'required',
            'tlp' => 'required',
            'nominal' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $image);
        $ambil = Ppdb::where("user_id", Auth::user()->user_id)->value("id");

        Payment::create([
            'bank'=> $request->bank,
            'ppdb_id'=> $ambil,
            'rekening'=>$request->rekening,
            'tlp'=>$request->tlp,
            'nominal'=>$request->nominal,
            'image' => $image,
            'user_id' => Auth::user()->id,
        ]);
        // dd($request->all()); 
        return redirect('/dashboard')->with('success', 'berhasil membuat !');
    }

    public function payment_update(Request $request){
        $request->validate([
            'bank' => 'required',
            'rekening' => 'required',
            'tlp' => 'required',
            'nominal' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $image);
        $ambil = Ppdb::where("email", Auth::user()->email)->value("id");

        Payment::where('ppdb_id', '=', $ambil)->update([
            'bank'=> $request->bank,
            'ppdb_id'=> $ambil,
            'rekening'=>$request->rekening,
            'tlp'=>$request->tlp,
            'nominal'=>$request->nominal,
            'image' => $image,
            'status'=> 'Pending',
        ]);

        return redirect('/dashboard')->with('success', 'berhasil membuat !');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
                    'nisn' => 'required',
                    'jk' => 'required',
                    'nama' => 'required',
                    'asal_sekolah' => 'required',
                    'nomor_handphone' => 'required',
                    'nomor_ayah' => 'required',
                    'nomor_ibu' => 'required',
                    'email' => 'required',
                    'referensi' => 'required',
                ]);

                $ppdb = new Ppdb();
                $ppdb->nisn = $request->nisn;
                $ppdb->nama = $request->nama;
                $ppdb->asal_sekolah = $request->asal_sekolah;
                $ppdb->jk = $request->jk;
                $ppdb->email = $request->email;
                $ppdb->nomor_handphone = $request->nomor_handphone;
                $ppdb->nomor_ayah = $request->nomor_ayah;
                $ppdb->nomor_ibu = $request->nomor_ibu;
                $ppdb->referensi = $request->referensi;
                $ppdb->save();

                // Ppdb::create([
                //     'nisn' => $request->nisn,
                //     'jk' => $request->jk,
                //     'nama' => $request->nama,
                //     'asal_sekolah' => $request->asal_sekolah,
                //     'nomor_handphone' => $request->nomor_handphone,
                //     'nomor_ayah' => $request->nomor_ayah,
                //     'nomor_ibu' => $request->nomor_ibu,
                //     'email' => $request->email,
                //     'referensi' => $request->referensi,
                // ]);
        
                User::create([
                    'name'=> $request->nama,
                    'email'=>$request->email,
                    'password'=>$request->nisn,
                ]);
        return redirect('/pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */

    public function pdf()
    {
        $ppdb = Ppdb::all();
        return view('pdf', compact('ppdb'));
    }

    public function show()
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function edit(Ppdb $ppdb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ppdb $ppdb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ppdb $ppdb)
    {
        //
    }

}
