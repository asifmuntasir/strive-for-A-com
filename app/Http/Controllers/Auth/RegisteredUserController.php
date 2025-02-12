<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Notifications\EmailNotification;
use Illuminate\View\View;
use App\Models\Setting;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Payment;




// use App\Http\Controllers\Auth\gs();

use App\Notifications\StudentNotification;
use Illuminate\Support\Facades\Notification;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(Request $request)
    {

            $classrooms = Classroom::all();
            $courses = Course::all();
            return view('auth.register',compact('classrooms','courses'));

    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // : RedirectResponse
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            // 'email'=> 'required | email | unique:users | max:255',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ]);

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        // $classroom = $request->classroom;
        // $user_id = auth()->user()->id;


// dd($course);
            $redirectUrl = route('success').'?session_id={CHECKOUT_SESSION_ID}';

            // $store = new Payment();
            // $store->user_id = auth()->user()->id;
            // $store->amount =$request->fee;
            // $store->classroom_id = $request->classroom_id;
            // $store->course_id = $request->course_id;
            // $store->status = 'success';
            // $store->save();


            $response = $stripe->checkout->sessions->create([

                'success_url' => $redirectUrl,

                'customer_email' => $request->email,

                'payment_method_types' => ['link','card'],

                'line_items' => [
                    [
                        'price_data' => [
                            'product_data' => [
                                'name' =>  $request->course,
                                // 'email' => $request->email,
                            ],
                            'unit_amount' => $request->fee*100,
                            'currency' => 'USD',
                        ],
                        'quantity' => 1
                    ],
                ],

                'mode' => 'payment',
                'allow_promotion_codes' => true,
            ]);



            // $store = new Payment();
            // $store->user_id = auth()->user()->id;
            // $store->amount = 220;
            // $store->classroom_id = $request->classroom;
            // $store->course_id = $request->course;
            // $store->status = 'success';
            // $store->save();


            return redirect($response['url']);
            // return json_encode($send);
            // event(new Registered($user));
            // $user->notify(new EmailNotification());
            // Auth::login($user);

            return redirect(RouteServiceProvider::HOME);




    }




    public function success(Request $request)
    {

        // $user->notify(new EmailNotification());
        //     return redirect()->route('login');
    }
    public function payment_success(Request $request)
    {
        // return view('auth.login');
    }

    public function cancel(Request $request)
    {

    }




}
