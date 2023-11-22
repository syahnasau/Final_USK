<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(Auth::user()->role == 'admin'){
            $user = User::where('role', 'siswa')->get()->count();
            $products = Product::all()->count();
            $transactions = Transaction::all()->count();
            $userAll = User::all();

            return view('home', compact('user','products', 'transactions', 'userAll'));
        }

        if(Auth::user()->role == 'kantin'){
            $products = Product::all();
            $categories = Category::all()->count();
            $allProducts = Product::all()->count();
            $transactions = Transaction::where('status', 'paid')->get();
            $transactionAll = Transaction::where('status', 'paid')->where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(5)->groupBy('order_id');

            return view('home', compact('products', 'allProducts', 'transactions', 'transactionAll', 'categories'));
        }

        if(Auth::user()->role == 'bank'){
            $wallets = Wallet::where('status', 'done')->get();

            $credit = 0;
            $debit = 0;
            foreach ($wallets as $wallet) {
                $credit += $wallet->credit;
                $debit += $wallet->debit;
            }
            $saldo = $credit - $debit;
            $nasabah = User::where('role', 'siswa')->get()->count();
            $transactions = Transaction::all()->groupBy('order_id')->count();
            $request_topup = Wallet::where('status', 'process')->orderBy('created_at', 'DESC')->get();
            $mutasi = Wallet::where('status', 'done')->orderBy('created_at', 'DESC')->get();


            return view('home', compact('saldo', 'nasabah', 'transactions', 'request_topup', 'mutasi'));
        }

        if (Auth::user()->role == 'siswa') {

            $wallets = Wallet::where('user_id', Auth::user()->id)->where('status', 'done')->get();
            $credit = 0;
            $debit = 0;

            foreach ($wallets as $wallet) {
                $credit += $wallet->credit;
                $debit += $wallet->debit;
            }

            $saldo = $credit - $debit;

            $carts = Transaction::where('status', 'not_paid')->where('user_id', Auth::user()->id)->get();
            $total_biaya = 0;
            $products = Product::all();

            foreach ($carts as $cart) {
                $total_price = $cart->price * $cart->quantity;
                $total_biaya += $total_price;
            }

            $transactions = Transaction::where('status', 'taken')
                ->where('user_id', Auth::user()->id)
                ->orderBy('created_at', 'DESC')
                ->paginate(5)
                ->groupBy('order_id');

            $mutasi = Wallet::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();

            return view('home', compact('saldo', 'products', 'carts', 'total_biaya', 'mutasi', 'transactions', ));
        }
    }
}
