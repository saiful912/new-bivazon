<?php

namespace App\Http\Controllers\Backend;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use App\Models\Merchant;
use App\Models\Order;
use App\Models\User;
use PDF;
use App\Traits\ImageUploadAble;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use ImageUploadAble;
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $customers = User::count('id');
        $marchants = Merchant::count('id');
        $affilates = Affiliate::count('id');
        $orders = Order::count('id');
        $retailOrders = Order::where('type', 'retail')->orderBy('id', 'desc')->take(10)->get();
        $wholesaleOrders = Order::where('type', 'wholesale')->orderBy('id', 'desc')->take(10)->get();
        return view('backend.dashboard.index', compact(
            'retailOrders', 'marchants',
            'wholesaleOrders', 'customers', 'affilates', 'orders'

        ));
    }

    public function status($id, $status)
    {
        $order = Order::find($id);

        if ($status == OrderStatus::CONFIRMED()) {

            $order->update(['status' => $status]);
            notify()->success('success', 'Order successfully confirmed');
        } elseif ($status == OrderStatus::COMPLETED()) {
            $order->update(['status' => $status]);
            notify()->success('success', 'Order successfully completed');
        }
        return redirect()->back();
    }

    public function orders()
    {
        $retailOrders = Order::where('type', 'retail')->orderBy('id', 'desc')->paginate(10);
        $wholesaleOrders = Order::where('type', 'wholesale')->orderBy('id', 'desc')->paginate(10);
        return view('backend.dashboard.order', compact(
            'retailOrders','wholesaleOrders'

        ));
    }

    public function paymentRequest()
    {
        $paymentRequest= \App\Models\PaymentRequest::orderBy('id','desc')->get();
        return view('backend.dashboard.payment_request',compact('paymentRequest'));
    }

    public function generateInvoice($id)
    {
        $order=Order::find($id);
        $pdf=PDF::loadView('backend.dashboard.invoice',compact('order'));
        return $pdf->stream('invoice.pdf');
    }

    public function profile()
    {
        return view('backend.dashboard.profile');
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required|min:3|max:18',
            'email' => 'required|email',
            'phone' => 'required|regex:/^(?:\+?88)?01[13-9]\d{8}$/',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg',
        ]);

        try {
            $user = User::find(auth()->user()->id);
            $data = [
                'full_name' => $request->input('full_name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
            ];
            if ($request->hasFile('image')) {
                $file_name = $this->upload($request->file('image'), 'shop/profile');
                $data['image'] = $file_name;
            }
            $user->update($data);

            notify()->success(' Admin update successfully ', 'success');
            return redirect()->back();
        } catch (Throwable $exception) {
            DB::rollBack();
            notify()->error('Something went wrong.please try again .');
            return redirect()->back();
        }
    }
}
