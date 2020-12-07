<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
	public function taskFlow()
	{

		Create::teamDash();
		Remove::installDefaultUI()->then()->recalibrate($defaultViews, $defaultRouting);
		Component::collect($tools, $info, $metrics)->architect($clientDash, $operationsDash, $projectDash, $teamDash)->define([
			'clientDash' => [
				'projects' => '',
				'team' => [
					'leader' => ['contact button, prominent photo, availability status'],
					'team' => 'happy faces',
					'optional-watercooler' => ['warn: Please contact the team leader for any project development communications, they will not be acknoledged in the watercooler.', 'objective: hype client up about build, give them a human connection to team => ex. This feature that we finalized today was a brilliant enhancement, excited for you to see it.']
				],
			]
		])->push(['brandMessaging' => 'what could we be telling the client to make their expierience more transparent and informative, what could we say to make them excited to work with us, what could we say to keep them informed, what could we say to upgrade membership. This is communicated with metrics, tools and the care put into crafting their digital project.']);






	}





}
