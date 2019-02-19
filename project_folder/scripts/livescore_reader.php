<?php
    

    function fetch_livescore(){
		
		$data=file_get_contents('https://www.scorespro.com/rss/live-soccer.xml');
		$data=simplexml_load_string($data);
		//print_r($data);
	
		$articles=array();
		foreach($data->channel->item as $item){
		
			$articles[]=array
				        (
                            'title'       =>(string)$item->title,
                                
                            'description' => (string)$item->description,

                            'link'        =>  (string)$item->link,
                            'pubDate'     => (string)$item->pubDate,
				            'guid'        => (string)$item->guid,
                        );
		}
			
		  
           return $articles;
	}

	
		
   
?>