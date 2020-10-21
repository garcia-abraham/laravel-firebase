<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase;

use Kreait\Firebase\Factory;

use Kreait\Firebase\ServiceAccount;

use Kreait\Firebase\Database;

class FirebaseController extends Controller
{
    public function index(){
        
        $factory = (new Factory)->withServiceAccount(__DIR__.'/test-8f8af-firebase-adminsdk-e7epp-ad9226e0cb.json');

        $database = $factory->createDatabase();

        //dd($firebase);

        $reference = $database->getReference('/usuarios');

        $snapshot = $reference->getSnapshot();

        $value = $snapshot->getValue();
        
        dd($value);
        //$factory = (new Factory)->withServiceAccount(__DIR__.'/test-8f8af-firebase-adminsdk-e7epp-ad9226e0cb.json');

        //$database = $factory->createDatabase();

		//$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/test-8f8af-firebase-adminsdk-e7epp-ad9226e0cb.json');

		/*$firebase 		  = (new Factory)

                        ->withServiceAccount($serviceAccount)

                        ->withDatabaseUri('https://test-8f8af/.firebaseio.com')

                        ->create();

		$database 		= $firebase->getDatabase();

		$newPost 		  = $database

		                    ->getReference('blog/posts')

		                    ->push(['title' => 'Post title','body' => 'This should probably be longer.']);

		echo"<pre>";

		print_r($newPost->getvalue());*/

	}
}
