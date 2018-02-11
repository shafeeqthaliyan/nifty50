<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function gainer()
	{
		$context = stream_context_create(array(
    'http' => array(
        'header' => array('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'),
    ),
));

$html = file_get_contents('https://www.nseindia.com/live_market/dynaContent/live_analysis/gainers/niftyGainers1.json', false, $context);

$response = json_decode($html);
$res = $response->data;
$count = count($res);
//echo '<pre>';
//print_r($res);
//print_r($res[0]->symbol);
//echo '</pre>';
$str='';
for ($i=0;$i<$count;$i++){
    
    //echo $res[$i]->symbol;
    
    
    $str.='<div class="col-sm-6 col-lg-4">
                <!-- Card Flip -->
                <div class="card-flip flip">
                    <div class="flip">
                        <div class="front">
                            <!-- front content -->
                            <div class="card">
                              <img class="card-img-top" src="'.base_url().'images/gainer.jpg" alt="100%x180" style="height: 180px; width: 100%; display: block;" data-holder-rendered="true">
                              <div class="card-block">
                                <h4 class="card-title">'.$res[$i]->symbol.'</h4>
                                <p class="card-text">'.$response->time.'</p>
                                <p class="card-text">Series : '.$res[$i]->series.'</p>
                                <button class="btn btn-primary">More details</button>
                              </div>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <div class="card">
                              
                              
                              <div class="card-block">
                                
                                <p class="card-text">Open price : '.$res[$i]->openPrice.'</p>
                                <p class="card-text">High price : '.$res[$i]->highPrice.'</p>
                                <p class="card-text">Low price : '.$res[$i]->lowPrice.'</p>
                                <p class="card-text">Ltp : '.$res[$i]->ltp.'</p>
                                <p class="card-text">Previous price : '.$res[$i]->previousPrice.'</p>
                                <p class="card-text">Net price : '.$res[$i]->netPrice.'</p>
                                <p class="card-text">Traded quantity : '.$res[$i]->tradedQuantity.'</p>
                                <p class="card-text">Turnover in lakhs : '.$res[$i]->turnoverInLakhs.'</p>
                                <p class="card-text">lastCorpAnnouncementDate : '.$res[$i]->lastCorpAnnouncementDate.'</p>
                                <p class="card-text">lastCorpAnnouncement : '.$res[$i]->lastCorpAnnouncement.'</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>';
    
	}
	
	$data['content'] = $str;
	$this->load->view('gainer',$data);
}

	public function loser()
	{
		
		
			$context = stream_context_create(array(
    'http' => array(
        'header' => array('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'),
    ),
));

$html = file_get_contents('https://www.nseindia.com/live_market/dynaContent/live_analysis/losers/niftyLosers1.json', false, $context);

$response = json_decode($html);
$res = $response->data;
$count = count($res);
//echo '<pre>';
//print_r($res);
//print_r($res[0]->symbol);
//echo '</pre>';
$str='';
for ($i=0;$i<$count;$i++){
    
    //echo $res[$i]->symbol;
    
    $str.='<div class="col-sm-6 col-lg-4">
                <!-- Card Flip -->
                <div class="card-flip flip">
                    <div class="flip">
                        <div class="front">
                            <!-- front content -->
                            <div class="card">
                              <img class="card-img-top" src="'.base_url().'images/losers.jpg" alt="100%x180" style="height: 180px; width: 100%; display: block;" data-holder-rendered="true">
                              <div class="card-block">
                                <h4 class="card-title">'.$res[$i]->symbol.'</h4>
                                <p class="card-text">'.$response->time.'</p>
                                <p class="card-text">Series : '.$res[$i]->series.'</p>
                                <button class="btn btn-primary" style="background-color:green;">More details</button>
                              </div>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <div class="card">
                              
                              
                              <div class="card-block">
                                
                                <p class="card-text">Open price : '.$res[$i]->openPrice.'</p>
                                <p class="card-text">High price : '.$res[$i]->highPrice.'</p>
                                <p class="card-text">Low price : '.$res[$i]->lowPrice.'</p>
                                <p class="card-text">Ltp : '.$res[$i]->ltp.'</p>
                                <p class="card-text">Previous price : '.$res[$i]->previousPrice.'</p>
                                <p class="card-text">Net price : '.$res[$i]->netPrice.'</p>
                                <p class="card-text">Traded quantity : '.$res[$i]->tradedQuantity.'</p>
                                <p class="card-text">Turnover in lakhs : '.$res[$i]->turnoverInLakhs.'</p>
                                <p class="card-text">lastCorpAnnouncementDate : '.$res[$i]->lastCorpAnnouncementDate.'</p>
                                <p class="card-text">lastCorpAnnouncement : '.$res[$i]->lastCorpAnnouncement.'</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>';
    
}
	$data['content'] = $str;
	$this->load->view('loser',$data);
	}
	
}
