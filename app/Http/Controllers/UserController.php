<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserValidation;
use App\Helpers\Helper;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{

    public function index()
    {
        $user = User::all();
        return response()->json($user);
    }

    public function signup(UserValidation $request)
    {
        try {
            if ($this->store($request)) {
                return response()->json(['status' => 'success', 'message' => 'Registration completed successful!'], 200);
            } else {
                return response()->json(['status' => 'failed', 'message' => 'failed to register, try again!'], 400);
            }
        } catch (Exception $object) {
            Log::error("Exception in User registration, User's mobile:{mobile}, Error:{errorMessage} ", ['mobile' => $request->mobile ?? '', 'errorMessage' => $object->getMessage()]);
            return response()->json(['status' => 'failed', 'message' => 'something went wrong, try again later!'], 400);
        }
    }

    /**
     * Undocumented function
     *
     * @param [type] $fields
     * @return integer
     */
    private function store($fields): int
    {
        $user = new User();
        $user->login_id = '';
        $password = Helper::password_generate();
        $user->password = $password;
        $user->first_name = $fields->first_name;
        $user->middle_name = $fields->middle_name ?? '';
        $user->last_name = $fields->last_name ?? '';
        // $user->firm_name =  $fields->firm_name ?? '';
        $user->mobile =  $fields->mobile ?? '';
        // $user->alt_mobile =  $fields->alt_mobile ?? '';
        // $user->office_number =  $fields->office_number ?? '';
        $user->email =  $fields->email ?? null;
        // $user->email_verified_at =  $fields->email_verified_at ?? '01-01-2024';

        // $user->property_number_or_name =  $fields->property_number_or_name ?? '';
        // $user->additional_address_details =  $fields->additional_address_details ?? '';
        // $user->landmark =  $fields->landmark ?? '';
        // $user->building_name =  $fields->building_name ?? '';
        // $user->area_name =  $fields->area_name ?? '';
        // $user->pincode =  $fields->pincode ?? '';
        // $user->city_or_village =  $fields->city_or_village ?? '';
        // $user->city_region =  $fields->city_region ?? '';
        // $user->geography_region =  $fields->geography_region ?? '';
        // $user->state =  $fields->state ?? '';
        //todo spellingcheck
        // $user->map_cordinates =  $fields->map_cordinates ?? '';
        // $user->kyc_id =  0;

        $user->service_type =  $fields->service_type ?? 2;
        $user->refer_by =  $fields->refer_by ?? '';
        // $user->status = 0;
        //todo spellingcheck
        // $user->subcription = 0;
        // $user->distributor_or_rm =  $fields->refer_by ?? '';
        // $user->remember_token =  $fields->remember_token ?? '';

        $createdFlag = null;
        $createdFlag = $user->save();
        $user->login_id = $user->id;
        $user->save();
        $createdFlag && Log::info("User created successfully, id:{id}", ['id' => $user->login_id ?? $user->id]);

        return $createdFlag;
    }

    public function getRetailersList()
    {
        //todo pagination and response formation
        $user = Auth::user();
        if (Helper::user_is_admin()) {
            $user = User::where('service_type', 2)->get();
            return response()->json($user);
        } else {
            $user = User::where('service_type', 2)
                ->Where('distributor', $user->id)
                ->orWhere('refer_by', $user->login_id)
                ->orWhere('refer_by', $user->id)
                ->get();
            return response()->json($user);
        }
    }

    public function getDistributorList()
    {
        $user = User::where('service_type', 3)->get();
        return response()->json($user);
    }


    public function edit()
    {
        //view todo
    }

    public function update(UserValidation $request, User $user)
    {
        try {
            $action = $request->action;
            $fields = $request->safe()->except(['action']);

            if ($action != 'update') {
                Log::info(
                    "non update action passed for update method. action:{action}, user:{login_id}, IP:{ip}",
                    [
                        'id' => $user->login_id,
                        'login_id' => $user->login_id,
                        'ip' => $request->ip()
                    ]
                );
                return response()->json(['status' => 'failed', 'message' => 'Profile updation failed!'], 400);
            }
            if (count($fields) == 0) {
                return response()->json(['status' => 'success', 'message' => 'There are nothing provided to update!'], 400);
            }
            foreach ($fields as $key => $value) {
                $user->$key = $value;
            }

            if ($user->update()) {
                Log::info("Profile Updated successful!, id:{id}", ['id' => $user->login_id]);
                return response()->json(['status' => 'success', 'message' => 'Profile updated successful!'], 200);
            } else {
                return response()->json(['status' => 'failed', 'message' => 'Profile updation failed!'], 400);
            }
        } catch (Exception $object) {
            Log::error("Exception in profile update, User's id:{id}, Error:{errorMessage} ", ['id' => $user->id ?? '', 'errorMessage' => $object->getMessage()]);
            return response()->json(['status' => 'failed', 'message' => 'something went wrong, try again later!'], 400);
        }
    }

    /**
     *
     */
    public function admin_updates(Request $request, User $user)
    {
        $request->validate([
            'kyc_id' => 'sometimes|required|numeric|max:2147483647',
            // 'refer_by' => 'required_if:action,signup|string|max:255',  // non changeable attribute
            'status' => 'sometimes|required|numeric|max:2147483647',
            'subcription' => 'sometimes|required|numeric|max:2147483647',
            'distributor' => 'sometimes|required|string|max:10',
            'service_type' => 'sometimes|required|max:250|numeric',
        ]);
        // dd($request);
        $user->kyc_id = $request->kyc_id ?? $user->kyc_id;
        // $user->refer_by =  $request->refer_by  ; // non changeable attribute
        $user->status = $request->status ?? $user->status;
        $user->subscription = $request->subscription ?? $user->subscription;
        $user->distributor = $request->distributor ?? $user->distributor;
        $user->service_type = $request->service_type ?? $user->service_type;

        if ($user->isClean()) {
            return response()->json(['status' => 'failed', 'message' => 'There are nothing provided to update!'], 400);
        } else {
            if ($user->update()) {

                Log::info(
                    "Roll updated successful!, loginId:{id}, new_values:{new_values} ",
                    ['id' => $user->login_id, 'new_values' => $request->all()]
                );

                //todo SECURITY:if new admin or any higher service_type updated , alert system and hault transactions

                return response()->json(['status' => 'success', 'message' => 'User data updated successful!'], 200);
            } else {
                Log::error("admin_updates failed for user:{id}, values:{new_values}", ['id' => $user->id, 'new_values' => $request->all()]);
                return response()->json(['status' => 'failed', 'message' => 'User data updation failed!'], 400);
            }
        }
    }
}
