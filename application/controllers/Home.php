<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function get_curl($url)
	{
	    $curl = curl_init();
	    curl_setopt($curl, CURLOPT_URL, $url);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    $result = curl_exec($curl);
	    curl_close($curl);

	    return json_decode($result, true);
	}

	public function index()
	{
		$result = $this->get_curl('https://api.kawalcorona.com/indonesia/?fbclid=IwAR2gfnx-6RwdKhNLpH5hM5t3X7I8jd0op8l7sdNuKtSncpa8OwhPXeMuuMc');

		$data['positif'] = $result[0]['positif'];
		$data['sembuh'] = $result[0]['sembuh'];
		$data['meninggal'] = $result[0]['meninggal'];

		$result2 = $this->get_curl('https://api.kawalcorona.com/indonesia/provinsi/?fbclid=IwAR2gfnx-6RwdKhNLpH5hM5t3X7I8jd0op8l7sdNuKtSncpa8OwhPXeMuuMc');

		$data['detail_ind'] = $result2;
		
		$result3 = $this->get_curl('https://api.kawalcorona.com/?fbclid=IwAR2gfnx-6RwdKhNLpH5hM5t3X7I8jd0op8l7sdNuKtSncpa8OwhPXeMuuMc');

		$data['detail_dunia'] = $result3;

		$result4 = $this->get_curl('https://covid19.mathdro.id/api');

		$data['confirmed'] = $result4['confirmed']['value'];
		$data['recovered'] = $result4['recovered']['value'];
		$data['deaths'] = $result4['deaths']['value'];

		$lastUpdateDunia = $result4['lastUpdate'];
		$time = strtotime($lastUpdateDunia);
		$data['update_dunia'] = date('d-m-Y', $time);

		$data['title'] = "MAY - Pantau Covid-19";
		$this->load->view('frontend/index.php', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
