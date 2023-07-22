<?php

namespace DaySupport\PhpSdkV1;


class DaySupport 
{
	
	const API_BASE_URL = 'https://api.lessterriblehelpdesk/api/v1';

	
	public function __construct() 
	{
		$client = new \GuzzleHttp\Client();
	}


	public function user_auth() 
	{
		
	}


	public function create_ticket() 
	{

	}


	public function get_ticket() 
	{
		$api_url = 'tickets/'
		$response = $this->client->request('GET', , [
		  'headers' => [
		    'accept' => 'application/json',
		  ],
		]);

		echo $response->getBody();

	}


	public function take_ticket() 
	{

	}


	public function change_ticket_priority() 
	{

	}


	public function change_ticket_status() 
	{

	}


	public function create_ticket_comment() 
	{

	}


	public function get_ticket_comments() 
	{

	}


	public function change_ticket_owner() 
	{

	}


	public function merge_ticket() 
	{

	}


	public function add_blocking_tickets() 
	{

	}


	public function add_related_tickets() 
	{

	}


	public function get_project_tickets() 
	{

	}


	public function get_customer_tickets() 
	{

	}


}