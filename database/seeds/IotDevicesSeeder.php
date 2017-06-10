<?php

use App\Models\IotDevice;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IotDevicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $devices = [
            ["name" => "050963", "id" => "3972", "imei" => "354293061600477"],
            ["name" => "Code_Academy", "id" => "3973", "imei" => "354293066758023"],
            ["name" => "050953", "id" => "3974", "imei" => "354293064875258"],
            ["name" => "Parcel Condition", "id" => "3975", "imei" => "354293066751473"],
            ["name" => "050891", "id" => "3977", "imei" => "354293066749253"]
        ];


        DB::beginTransaction();
        try {
            foreach ($devices as $device) {
                $data = IotDevice::where('id', $device['id'])->first();
                if (!$data)
                    IotDevice::create($device);
            }
        } catch (\Exception $e) {
            DB::rollback();
            throw new Exception($e->getMessage());
        }
        DB::commit();
    }
}
