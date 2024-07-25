<?php

namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    public static $ADMIN_TYPE = 1;
    public static $RETAILER_TYPE = 2;
    public static $DISTRIBUTOR_TYPE = 3;
    public static $ADMIN = 'admin';
    public static $RETAILER = 'retailer';
    public static $DISTRIBUTOR = 'distributor';

    protected $attributes = [
        'service_type_name'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
        'password',
        'middle_name',
        'remember_token',
        "dob",
        "email",
        "mobile",
        "login_id",
        "kyc_id",
        "refer_by",
        "relationship_manager",
        "subscription",
        "address_id",
        "status",
        "distributor",
        "email_verified_at",
        "created_at",
        "updated_at"
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        // $value = Hash::make($this->password);
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed'
        ];
    }

    /**
     * Attribute setter eg: 56 => RT0056
     *
     * @return Attribute
     */
    protected function loginId(): Attribute
    {
        return Attribute::make(
            set: function (string $value) {
                $service_type_prefix = match ((int) $this->service_type) {
                    User::$ADMIN_TYPE => 'AD',
                    User::$RETAILER_TYPE => 'RT',
                    User::$DISTRIBUTOR_TYPE => 'DT',
                    default => 'NA',
                };

                return $service_type_prefix . str_pad($value, strlen($value) + 2, '0', STR_PAD_LEFT);
            }
        );
    }

    /**
     * accessor to get service name using service_type
     * dummy field service_type_name to share response
     *
     * @return Attribute
     */
    protected function serviceType(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Helper::serviceTypeName($value),
        );
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function dmt_transactions()
    {
        return $this->hasMany(Transaction::class)->where('service_id', 4);
    }

    public function dmtCustomers()
    {
        return $this->hasMany(DmtCustomer::class);
    }

    public function dmtBeneficiaries()
    {
        return $this->hasMany(DmtBeneficiary::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class)->where('active', 1);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function fundRequests(): HasMany
    {
        return $this->hasMany(FundTransfer::class);
    }

    public function approvalRequests(): HasMany
    {
        return $this->hasMany(FundTransfer::class, 'approval_id');
    }

    // currently not required (CNR)
    // public function getNextId()
    // {

    //     $statement = DB::select("show table status like 'users'");

    //     return $statement[0]->Auto_increment;
    // }
}
