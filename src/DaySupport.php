<?php

namespace DaySupport;

use \Haruncpi\Http\Http;

class DaySupport 
{
	protected $api_key;
	protected $client;
	protected $auth_header;
	protected $api_base_url;
	protected $api_version;

	public function __construct($api_base_url, $api_version, $api_key) 
	{
		$this->api_base_url = $api_base_url.'/'.$api_version;
		$this->client = new Http();
		$this->api_key = $api_key;
		$this->auth_header = 'Authorization: Bearer '.$this->api_key;
	}


	public function create_ticket($project_id, $heading, $description, $priority, $customer_id, $contact_fname, $contact_lname, $contact_email) 
	{
		$api_url = $this->api_base_url.'/tickets/create';
		$data = [
			'project_id' => $project_id, 
			'heading' => $heading,
			'description' => $description, 
			'priority' => $priority, 
			'customer_id' => $customer_id, 
			'contact_fname' => $contact_fname, 
			'contact_lname' => $contact_lname,
			'contact_email' => $contact_email
		];
		$headers = array('Authorization' => $this->auth_header);
		$response = $this->client->post($api_url, $data, $headers);
		echo $response->getBody();
	}


	public function get_ticket($ticket_id) 
	{
		$api_url = $this->api_base_url.'/tickets/'.$ticket_id;
		$data = [];
		$headers = array('Authorization' => $this->auth_header);
		$response = $this->client->get($api_url, $data, $headers);
		echo $response->getBody();
	}


	public function get_customer_tickets($customer_id) 
	{
		$api_url = $this->api_base_url.'/customers/tickets/'.$customer_id.'?status=all&priority=all';
		$data = [];
		$headers = array('Authorization' => $this->auth_header);
		$response = $this->client->get($api_url, $data, $headers);
		echo $response->getBody();
	}


}