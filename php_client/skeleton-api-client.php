<?php 

  // get Guzzle
  require 'vendor/autoload.php';
  use GuzzleHttp\Client;

  // get form data 
  $login_email = ( isset( $_POST['login_email'] ) ) ? trim( $_POST['login_email'] ) : null;
  $login_pass  = ( isset( $_POST['login_pass'] ) ) ? trim( $_POST['login_pass'] ) : null;

  // form data passed
  if ( $login_email || $login_pass ) {

    // init client
    $client = new Client(array(
      'base_uri' => 'https://symfony-skeleton.q-tests.com',
      'headers'  => array( 'Content-Type' => 'application/json' )
    ));

    // request for token
    $response = $client->post( 'api/v2/token', array(
      'http_errors' => false,
      'body'        => json_encode( array(
        'email'    => $login_email,
        'password' => $login_pass,
      ) )
    ) );

    // API call's OK
    if ( $response->getStatusCode() === 200 ) {
    
      // get token & store it in the cookie
      $result = json_decode( $response->getBody()->getContents() );
      $token = $result->token_key;

      if ( !isset( $_COOKIE['skeleton_token'] ) ) {
        
        $cookie_data = array(
          'name'    => 'skeleton_token',
          'value'   => $token,
          'expires' => strtotime( ( string ) $result->expires_at ),
          'path'    => '/'
        );
  
        setcookie( 
          $cookie_data['name'], 
          $cookie_data['value'], 
          $cookie_data['expires'], 
          $cookie_data['path'] 
        );

      }

      // output success msg
      print_r( 'Login successful!' );
      
    } 

    // API call's not OK
    else {
      print_r( 'Login failed. Please try again!' );
    }

  }

?>