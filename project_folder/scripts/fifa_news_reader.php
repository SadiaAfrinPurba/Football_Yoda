<?php
    

    function fetch_news($data){
		
		$data=simplexml_load_string($data);
		$articles=array();
		foreach($data->channel->item as $item){
			
			$media=$item->enclosure;
			$images=array();
			foreach($media->attributes() as $key=>$value){
				$images[$key]=(string)$value;
			}
			$articles[]=array
				        (
                            'title'       =>(string)$item->title,
                                
                            'description' => (string)$item->description,

                            'link'        =>  (string)$item->link,
                            'pubDate'     => (string)$item->pubDate,
				            'enclosure'   => $images,
                        );
		}
			
		  
           return $articles;
	}
    function fetch_WorldCup2018(){
		$data=file_get_contents('https://www.fifa.com/worldcup/news/rss.xml');
		$articles=fetch_news($data);
	     return $articles;
		
		
	}
   function fetch_WorldCup2022(){
		$data=file_get_contents('http://www.fifa.com/worldcup/qatar2022/news/rss.xml');
		
		$articles=fetch_news($data);
	     return $articles;
	}
   function fetch_ClubNews(){
		$data=file_get_contents('http://www.fifa.com/theclub/news/rss.xml');
		$articles=fetch_news($data);
	     return $articles;
	}
	
		
   
?>