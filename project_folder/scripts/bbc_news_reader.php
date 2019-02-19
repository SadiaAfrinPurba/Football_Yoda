<?php
     
    function fetch_news(){
		$data=file_get_contents('https://feeds.bbci.co.uk/sport/football/rss.xml');
		$data=simplexml_load_string($data);
		$articles=array();
		foreach($data->channel->item as $item){
			
			$media=$item->children('https://search.yahoo.com/mrss/');
			$images=array();
			foreach($media->thumbnail[0]->attributes() as $key=>$value){
				$images[$key]=(string)$value;
			}
			$articles[]=array
				        (
                            'title'       =>(string)$item->title,
                                
                            'description' => (string)$item->description,

                            'link'        =>  (string)$item->link,
                            'pubDate'     => (string)$item->pubDate,
				            'image'       => $images,
                        );
		}
			
		
           return $articles;
	}
		
   
?>