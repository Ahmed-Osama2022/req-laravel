<?php

namespace App\Http\Controllers;

// VIP => to be imported 
use Illuminate\Http\Request;

class ReqController extends Controller
{
  /**
   * View all the request variable
   */
  public function index(Request $request)
  {
    return dd($request);
  }
  /**
   * View the current path you applied in the URL.
   */
  public function get_path(Request $request)
  {
    return $request->path();
  }

  /**
   * View the host you currently work from
   */
  public function host(Request $request)
  {
    // return $request->getHttpHost();
    // return $request->host();
    // return $request->schemeAndHttpHost();
    return $request->schemeAndHttpHost() . '/';
  }
  /**
   * View the method for the request.
   * e.g. => "GET | POST | PATCH | PUT"
   */
  public function method(Request $request)
  {
    return "The Request method is: " .  $request->method();
  }
  /**
   * View your IP for you or even the client.
   * NOTE: based on the device IP.
   */
  public function get_ip(Request $request)
  {
    return "<h1>Your ip address is: " .  $request->ip() . "</h1>";
  }
  /**
   * View the whole IP's for the devices connected to the app.
   * return @array
   */
  public function get_ips(Request $request)
  {
    // $ips = $request->ips();

    // return "<h1>Your Client ip addresses is: " .  var_dump($ips) . "</h1>";
    return $request->ips();
  }

  /**
   * Get all the input data
   * Such as: query data in the URL,
   * 
   */
  public function get_all_input(Request $request)
  {
    $data = $request->all();
    // dd($data);

    return $request->all();
    // return $data['name'] ?? 'Name is empty value!';
  }
}
