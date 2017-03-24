<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homepage.homepage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTasks() {
        return Task::get();
    }
    public function passport() {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://gonline.space/oauth/token",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"grant_type\"\r\n\r\npassword\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"client_id\"\r\n\r\n1\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"client_secret\"\r\n\r\n2FoVudQVIXljeLfUARTX2CNBWfhUNtGice8vl3Fb\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"username\"\r\n\r\ndurmicfedja@gmail.com\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"password\"\r\n\r\n5deEdWwBbEDSQpcS8eUhCq3ddh2ECEPf5feB9yS8HVdzbzzJ7KAjXv7SdrWdEv8N3vUdKXRB3ZFhHK37CpGhhbHxdV9dJmDZXWda3nzQjVg27DCeDgdtWP3K\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"scope\"\r\n\r\n\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
          CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "authorization: Digest username=\"\", realm=\"\", nonce=\"\", uri=\"/oauth/token\", response=\"f033dadb13ed92e9c9d217673cf568f0\", opaque=\"\"",
            "cache-control: no-cache",
            "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
            "postman-token: be99ba33-b5e2-ac58-079b-451bf82a1585"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
            $txt = "John Doe\n";
            fwrite($myfile, $txt);
            $txt = "Jane Doe\n";
            fwrite($myfile, $txt);
            fclose($myfile);
        } else {
          $response = json_decode($response, true);
          /*return $response;*/
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://gonline.space/api/send-notification",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "authorization: Bearer ".$response['access_token'],
                "cache-control: no-cache",
              ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
              $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
                $txt = "John Doe\n";
                fwrite($myfile, $txt);
                $txt = "Jane Doe\n";
                fwrite($myfile, $txt);
                fclose($myfile);
            } else {
              echo $response;
            }
        }
        /*$http = new \GuzzleHttp\Client();

        $response = $http->post('http://bhtfaq.app/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '11',
                'client_secret' => 'w5vGnLgSXxcREY524DJz6XyDV7c2wj0DLKbRDHZn',
                'username' => 'truemeho@example.com',
                'password' => 'password',
                'scope' => '',
            ],
        ]);*/

/*return json_decode((string) $response->getBody(), true);*/
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function test() {

        $A = [1,5,2,1,4,0];
        $count = 0;
        for($i=0; $i<count($A); $i++) {
           for($j=($i+1); $j<(count($A)); $j++) {
                if(($A[$i]+$A[$j] >= ($j-$i)) ){
                    $count++;
                    if($count == 10000000) 
                        return -1;
                }
           }
        }
        return $count;
    }
}
