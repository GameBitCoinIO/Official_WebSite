<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Main class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

/**
 * 메인 페이지를 담당하는 controller 입니다.
 */
class Api extends CB_Controller
{

	/**
	 * 모델을 로딩합니다
	 */
	protected $models = array('Board');

	/**
	 * 헬퍼를 로딩합니다
	 */
	protected $helpers = array('form', 'array');


	public function index()
	{
		$url = "https://api.etherscan.io/api?module=stats&action=tokensupply&contractaddress=0x19EB667fCb458E7321C1EB1C1bf687d9DBd17ff7&apikey=QVHKDTMMKYXI9KB61U3HFMKGCFM2F42JKS";
		
		//https://api.etherscan.io/api?module=stats&action=tokensupply&contractaddress=0x19EB667fCb458E7321C1EB1C1bf687d9DBd17ff7&apikey=QVHKDTMMKYXI9KB61U3HFMKGCFM2F42JKS

		$ch = curl_init();                                 //curl 초기화
		curl_setopt($ch, CURLOPT_URL, $url);               //URL 지정하기
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    //요청 결과를 문자열로 반환 
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);      //connection timeout 10초 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   //원격 서버의 인증서가 유효한지 검사 안함
		 
		$response = curl_exec($ch);
		curl_close($ch);
		$result_data = json_decode($response);

		echo $result_data->result;
	}

	public function circulating_supply($symbol)
	{
		$url = "https://api.etherscan.io/api?module=account&action=tokenbalance&contractaddress=0x19EB667fCb458E7321C1EB1C1bf687d9DBd17ff7&address=0x404Cfe9b418d40484dc2f71fbd4A9109CEF9C2B1&tag=latest&apikey=QVHKDTMMKYXI9KB61U3HFMKGCFM2F42JKS";
		
		//https://api.etherscan.io/api?module=stats&action=tokensupply&contractaddress=0x19EB667fCb458E7321C1EB1C1bf687d9DBd17ff7&apikey=QVHKDTMMKYXI9KB61U3HFMKGCFM2F42JKS

		$ch = curl_init();                                 //curl 초기화
		curl_setopt($ch, CURLOPT_URL, $url);               //URL 지정하기
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    //요청 결과를 문자열로 반환 
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);      //connection timeout 10초 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   //원격 서버의 인증서가 유효한지 검사 안함
		 
		$response = curl_exec($ch);
		curl_close($ch);
		$result_data = json_decode($response);
		$total_balance = 5000000000 - ($result_data->result / 1000000000000000000);
		
		if ($symbol === 'eth') {
			echo number_format($total_balance);
		}
		else {
			echo '40002';
		}

	}

	public function total_supply($symbol)
	{
		$url = "https://api.etherscan.io/api?module=stats&action=tokensupply&contractaddress=0x19EB667fCb458E7321C1EB1C1bf687d9DBd17ff7&apikey=QVHKDTMMKYXI9KB61U3HFMKGCFM2F42JKS";
		
		//https://api.etherscan.io/api?module=stats&action=tokensupply&contractaddress=0x19EB667fCb458E7321C1EB1C1bf687d9DBd17ff7&apikey=QVHKDTMMKYXI9KB61U3HFMKGCFM2F42JKS

		$ch = curl_init();                                 //curl 초기화
		curl_setopt($ch, CURLOPT_URL, $url);               //URL 지정하기
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    //요청 결과를 문자열로 반환 
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);      //connection timeout 10초 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   //원격 서버의 인증서가 유효한지 검사 안함
		 
		$response = curl_exec($ch);
		curl_close($ch);
		$result_data = json_decode($response);

		if ($symbol == 'eth') {
			echo '5000000000';
		}
		else {
			echo '5000000000';
		}
	}

}

