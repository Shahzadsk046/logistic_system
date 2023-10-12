<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverDetails extends Model
{
    use HasFactory;

    protected $fillable = ['driver_id', 'license_id', 'insurance_id', 'is_truck_alloted', 'vehicle_id'];

    public function driver()
    {
        return $this->belongsTo(Driver::class)->onDelete('cascade');
    }

    public function license()
    {
        return $this->belongsTo(DriverLicenseDetails::class)->onDelete('cascade');
    }

    public function insurance()
    {
        return $this->belongsTo(DriverInsuranceDetails::class)->onDelete('cascade');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id')->onDelete('set null');
    }
}
