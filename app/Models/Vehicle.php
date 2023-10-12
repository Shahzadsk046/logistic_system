<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['driver_id', 'vehicle_type', 'unit_number', 'make', 'model', 'payload_weight'];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function licenseDetails()
    {
        return $this->hasOne(VehicleLicenseDetails::class);
    }

    public function images()
    {
        return $this->hasOne(VehicleImages::class);
    }

    public function otherDetails()
    {
        return $this->hasOne(VehicleOtherDetails::class);
    }

    public function driverDetails()
    {
        return $this->belongsTo(DriverDetails::class);
    }

}
