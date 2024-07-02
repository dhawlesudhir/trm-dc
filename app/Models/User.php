<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

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
        "id",
        'password',
        'remember_token',
        // "city_region",
        // "geography_region",
        // "state",
        // "map_cordinates",
        "kyc_id",
        // "user_type",
        // "refer_by",
        // "status",
        // "subcription",
        // "distributor_or_rm",
        // "alt_mobile",
        // "office_number",
        "email_verified_at",
        // "created_at",
        // "updated_at"
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
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

                $user_type_prefix = match ($this->user_type) {
                    'D' => 'DT',
                    'R' => 'RT',
                    default => 'NA',
                };

                return $user_type_prefix . str_pad($value, strlen($value) + 2, '0', STR_PAD_LEFT);
            }
        );
    }
    // currently not required (CNR)
    // public function getNextId()
    // {

    //     $statement = DB::select("show table status like 'users'");

    //     return $statement[0]->Auto_increment;
    // }
}
