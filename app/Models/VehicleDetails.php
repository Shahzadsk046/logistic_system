<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleDetails extends Model
{
    use HasFactory;

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function licenseDetails()
    {
        return $this->belongsTo(VehicleLicenseDetails::class, 'vehicle_license_details_id');
    }

    public function images()
    {
        return $this->belongsTo(VehicleImages::class, 'vehicle_images_id');
    }

    public function otherDetails()
    {
        return $this->belongsTo(VehicleOtherDetails::class, 'vehicle_other_details_id');
    }
}
