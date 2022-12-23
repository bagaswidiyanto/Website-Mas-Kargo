<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Autocomplete extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function search()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://fastindo.tracks-app.com/restapi/master/origin/android/progi/?key=456ceb26807d6bf99fd6f4f0d1ca54d4',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Cookie: PHPSESSID=djjhtdb418ao54dd8iavmmcsl0'
			),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		$isi = json_decode($response);

		foreach ($isi->data as $i) {
			$datas[$i->ID] = array('value' => $i->ID, 'label' => $i->nama);
		}

		$input = $this->input->get('term'); // ambil dari parameter yg diketik
		$result = array_filter($datas, function ($item) use ($input) {
			if (stripos($item['label'], $input) !== false) {
				return true;
			}
			return false;
		});

		echo json_encode($result);
	}

	public function search2()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://fastindo.tracks-app.com/restapi/master/destination/android/progi/?key=456ceb26807d6bf99fd6f4f0d1ca54d4',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Cookie: PHPSESSID=0fje837kc47a27lp1tjl4f6pv5'
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);

		$isi = json_decode($response);
		foreach ($isi->data as $i) {
			$datas[$i->ID] = array('value' => $i->ID, 'label' => $i->kabName);
		}

		$input = $this->input->get('term'); // ambil dari parameter yg diketik
		$result = array_filter($datas, function ($item) use ($input) {
			if (stripos($item['label'], $input) !== false) {
				return true;
			}
			return false;
		});

		echo json_encode($result);
	}
}