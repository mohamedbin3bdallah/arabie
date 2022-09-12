<?php

namespace App\Http\Controllers\Auth;

use App\Allcountry;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\WelcomeUser;
use Illuminate\Support\Facades\Mail;
use App\Setting;
//use Tests\Stubs\Request;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        if (isset($data['type'])){
//            dd($data);
            return Validator::make($data, [
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6'],
            ]);

        }else {
            $setting = Setting::first();

            if ($setting->captcha_enable == 1) {

                return Validator::make($data, [
                    'fname' => ['required', 'string', 'max:255'],
                    'lname' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:6', 'confirmed'],
                    'g-recaptcha-response' => 'required|captcha',
                ]);

            } else {

                return Validator::make($data, [
                    'fname' => ['required', 'string', 'max:255'],
                    'lname' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:6', 'confirmed'],
                ]);

            }
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
// dd($data);
            $tag = 2;
            if ($data['type'] == 'tutor') {
                $tag = 3;
                $mobile = isset($data['mobile']) ? $data['mobile'] : NULL;
                $user = User::create([
                    'email' => $data['email'],
					'country_residence_id' => $data['country'],
                    'role' => 'instructor',
                    'mobile' => $mobile,
                    'password' => Hash::make($data['password']),
                ]);
            }else {

                $setting = Setting::first();

                $mobile = isset($data['mobile']) ? $data['mobile'] : NULL;

                if ($setting->verify_enable == 0) {
                    $verified = \Carbon\Carbon::now()->toDateTimeString();
                } else {
                    $verified = NULL;
                }


                $user = User::create([

                    'fname' => $data['fname'],
                    'lname' => $data['lname'],
                    'email' => $data['email'],
                    'country_id' => $data['country_id'],
                    'role' => 'user',
                    'mobile' => $mobile,
                    'email_verified_at' => $verified,
                    'password' => Hash::make($data['password']),
                ]);

                
                if ($setting->w_email_enable == 1) {
                    try {

                        Mail::to($data['email'])->send(new WelcomeUser($user));

                    } catch (\Swift_TransportException $e) {

                        header("refresh:5;url=./login");

                        //dd("Your Registration is successfully ! but welcome email is not sent! Kindly go back and login");

                    }
                }
            }
            // active campaign integration

            try {
                $active_campaign_data = [ 'contact' => [
                        'email' => isset($data['email']) ? $data['email'] : NULL,
                        'firstName' => isset($data['fname']) ? $data['fname'] : NULL,
                        'lastName' => isset($data['lname']) ? $data['lname'] : NULL,
                        'phone' => $mobile
                    ]
                ];
            
                $curl = curl_init();

                curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://brmaja.api-us1.com/api/3/contacts',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>json_encode($active_campaign_data),
                CURLOPT_HTTPHEADER => array(
                    'Api-Token: ae875dbce74ce78fc9e13571ebe9d33e44ed985a1049ae4aaebdfde58337886fb214e68f',
                    'Content-Type: application/json',
                    'Cookie: __cfduid=dc9bff3bb627f95e417327304312b5d9c1615237488; PHPSESSID=75a0b89238db001a54af5e8f570bc84f; em_acp_globalauth_cookie=0a44a1d4-f6ce-43f9-9f60-47fd8cfdbdf9'
                ),
                ));

                $response = curl_exec($curl);
                $res = json_decode($response, true);

                $contact_id = isset($res['contact']) ? $res['contact']['id'] : "";

                curl_close($curl);

                // create tag

                $active_campaign_tag_data = [ 'contactTag' => [
                    'contact' => $contact_id,
                    'tag' => $tag
                    ]
                ];
        
                $curl = curl_init();

                curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://brmaja.api-us1.com/api/3/contactTags',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>json_encode($active_campaign_tag_data),
                CURLOPT_HTTPHEADER => array(
                    'Api-Token: ae875dbce74ce78fc9e13571ebe9d33e44ed985a1049ae4aaebdfde58337886fb214e68f',
                    'Content-Type: application/json',
                    'Cookie: __cfduid=dc9bff3bb627f95e417327304312b5d9c1615237488; PHPSESSID=75a0b89238db001a54af5e8f570bc84f; em_acp_globalauth_cookie=0a44a1d4-f6ce-43f9-9f60-47fd8cfdbdf9'
                ),
                ));

                $response = curl_exec($curl);
                $res = json_decode($response, true);
                curl_close($curl);
                
            }catch(\Exception $ex){

            }


        return $user;
    }

    public function register(Request $request)
    {

//        dd($request->all());
        $validation = [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'mobile' => ['required', 'digits_between:9,15', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],

        ];

        if (isset($request->type)) {
            if ($request->type == 'student'){
                $validation['fname'] = 'required|max:50|min:2';
                $validation['lname'] = 'required|max:50|min:2';
				$validation['country_id'] = 'required|integer';
                $validation['password_confirmation'] = 'required|same:password|min:6';
            }
			if ($request->type == 'tutor') $validation['country'] = 'required|integer';
        }


        $validator = Validator::make($request->all(), $validation);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if (isset($request->type)) {
            if ($request->type == 'tutor') {
                $validator = $this->validator($request->all());

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                $countries = Allcountry::all();
//            dd($countries);
                event(new Registered(
                    $user = $this->create($request->all())
                ));
//dd($user);
                $this->guard()->login($user);
                return $this->registered($request, $user)
                    ?: redirect('/tutor/registration/steps');
            } else {
                $validator = $this->validator($request->all());

                if ($validator->fails()) {
                    //dd($validator);
                    return redirect()->back()->withErrors($validator)->withInput();
                }

                event(new Registered($user = $this->create($request->all())));
                $this->guard()->login($user);
                return $this->registered($request, $user)
                    ?: redirect('/');
            }
        }
    }

}
