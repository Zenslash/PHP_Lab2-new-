<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function allCustomers(Request $request)
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $block = $request->input('block');
        $registr = $request->input('registr');

        $customerQuery = Customer::query();

        $customerQuery->when($name, function ($query) use ($request)
        {
            $query->where('name', $request->name);
        });
        $customerQuery->when($surname, function ($query) use ($request)
        {
            $query->where('surname', $request->surname);
        });
        $customerQuery->when($email, function ($query) use ($request)
        {
            $query->where('email', $request->email);
        });
        $customerQuery->when($phone, function ($query) use ($request)
        {
            $query->where('phone', $request->phone);
        });
        $customerQuery->when($block, function ($query) use ($request)
        {
            $query->where('block', $request->block);
        });
        $customerQuery->when($registr, function ($query) use ($request)
        {
            $query->where('registr', $request->registr);
        });

        $customers = $customerQuery->simplePaginate(25);

        return view('customers', ['customers' => $customers]);
    }


    public function customerSortByAddress($id)
    {
        $customers = DB::table('customers')->where('id', '=', $id)->get();
        $addresses = DB::table('addresses')->where('customer_id', '=', $id)->orderByRaw('registr DESC')->get();
        if (count($addresses)==0) {
            abort(404, 'Page not found');
        }
        return view('customers_sort_by_address', ['customers' => $customers, 'addresses' => $addresses]);
    }
}
