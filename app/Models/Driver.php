<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'profile_id', 'hired_by', 'status', 'note'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function hiredBy()
    {
        return $this->belongsTo(User::class, 'hired_by');
    }

    public function licenseDetails()
    {
        return $this->hasOne(DriverLicenseDetails::class);
    }

    public function insuranceDetails()
    {
        return $this->hasOne(DriverInsuranceDetails::class);
    }

    public function driverDetails()
    {
        return $this->hasOne(DriverDetails::class);
    }

    public function truck()
    {
        return $this->belongsTo(Truck::class, 'vehicle_id');
    }
}
