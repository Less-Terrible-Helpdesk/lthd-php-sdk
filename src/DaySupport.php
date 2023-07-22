<?php

namespace DaySupport;

use \Haruncpi\Http\Http;

class DaySupport 
{
	protected $api_key;
	protected $client;
	protected $auth_header;

	public function __construct($api_key) 
	{
		$this->client = new Http();
		$this->api_key = $api_key;
		$this->auth_header = 'Authorization: Bearer '.$this->api_key;
	}
	
	const API_BASE_URL = 'https://api.lessterriblehelpdesk.com';

	public function create_ticket() 
	{
		
	}


	public function get_ticket($ticket_id) 
	{
		$api_url = DaySupport::API_BASE_URL.'/v1/tickets/'.$ticket_id;
		$data = [];
		$headers = array(
			'Authorization' => $this->auth_header);
		$response = $this->client->get($api_url, $data, $headers);
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