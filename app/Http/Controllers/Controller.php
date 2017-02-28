<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Log;

class Controller extends BaseController
{
    public function __construct()
    {
        
    }

    public function hello()
    {
    	Log::info('dayModel', ['day'=>7,'qtd'=>2]);
    	Log::info('dayModel', ['day'=>4,'qtd'=>5]);
    	Log::info('dayModel', ['day'=>5,'qtd'=>6]);
        Log::info('dayModel', ['day'=>10,'qtd'=>3]);
        Log::info('dayModel', ['day'=>3,'qtd'=>8]);
        Log::info('dayModel', ['day'=>2,'qtd'=>6]);
        Log::info('dayModel', ['day'=>1,'qtd'=>1]);
        Log::info('dayModel', ['day'=>8,'qtd'=>4]);
        Log::info('dayModel', ['day'=>6,'qtd'=>2]);
        Log::info('dayModel', ['day'=>9,'qtd'=>3]);
        Log::info('dayModel', ['day'=>10,'qtd'=>3]);
        Log::info('dayModel', ['day'=>11,'qtd'=>7]);
        Log::info('dayModel', ['day'=>12,'qtd'=>10]);
        Log::info('dayModel', ['day'=>13,'qtd'=>8]);
        Log::info('dayModel', ['day'=>14,'qtd'=>9]);
        Log::info('dayModel', ['day'=>15,'qtd'=>12]);
        Log::info('dayModel', ['day'=>16,'qtd'=>11]);
        Log::info('dayModel', ['day'=>17,'qtd'=>15]);
    	Log::info('dayModel', ['day'=>18,'qtd'=>18]);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'fail']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'fail']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);
        Log::info('anotherModel', ['action'=>'cronexecuted','result'=>'sucess']);

    	return 'Hello World';
    }
}
