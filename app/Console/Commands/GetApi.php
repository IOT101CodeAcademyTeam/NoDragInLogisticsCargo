<?php

namespace App\Console\Commands;

use App\Http\Controllers\ApiController;
use App\Models\IotDeviceData;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class GetApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get api from device';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

       /* $collection = collect(['product_id' => 1, 'name' => 'Desk']);

        $collection->put('price', 100);

        $collection->all();*/
       $api = new ApiController();


        cache()->put('test',$api->saveApiData(),60);
        $value = Cache::get('test');
        IotDeviceData::create($value);


    }
}
