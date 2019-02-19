


<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>
    <style>
		.player-card td,.player-card th{
			text-align:center;
			
		}
		.player-card{
			width:90%;
			float:left;
			background:#fff;
			padding:4px;
			border-radius:4px;
			margin:5px 10px 10px 0;
		}
		.player-card .image{
		      float:left;
			  margin:0 3px 3px 0;
			  width:100px;
			 height:100px;
		}
		.player-card .position{
			background:#c00e00;
			color:#fff;
			font-weight:700;
			font-size:20px;
			position:absolute;
			padding:0 10px;
			margin:65px 0 0 68px;
		}
		.player-card .name{
			display:block;
			font-weight:700;
		 }
		.player-card .table{
			margin-top:10px;
		}
		.row:after,.row:before{
			display:table;content:" ";
		}
		.row:after{
			clear:both;
		}
		.row{
			margin-left:-10px;
			margin-right:-10px;
		}
		.row{
			margin-bottom:20px;
		}
		
		row:hover{
			background:#d9edf7;
		}
		.row:nth-child(even){
			background:#f4f8fb;
		}
		.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{
			padding-left:10px;
			padding-right:10px;}
		.position{
			background:#c00e00;
			color:#fff;
			font-weight:700;
			font-size:20px;
			position:absolute;
			padding:0 10px;
			margin:65px 0 0 68px;
		}
		.player-card .name{
			display:block;
			font-weight:700;
		}
		.position_name_header{
			background:#EFEEEC;
			text-align:left;
			height:20px;
			line-height:20px;
			font-size:14px;
			font-weight:700;
		}
		.name{
			 display:inline-block;
			 width:75%;
		  }
		.name{
			display:block;
			font-weight:700;
		}
		.player-card .rank{
			position:absolute;
			right:17px;
			width:40px;
			text-align:center;
			margin:-35px 0 0;
			z-index:10;
			color:#fff;
		}
		.player-card a{
			text-decoration: none;
		}
		.burst-8,.player-card td,.player-card th{
			text-align:center;
		}
		.burst-8,.burst-8:before{
			position:absolute;
			height:35px;
			width:35px;
			background:#191970;
		}
		.burst-8{
			right:20px;
			margin-top:-40px;
			-webkit-transform:rotate(20deg);
			-moz-transform:rotate(20deg);
			-ms-transform:rotate(20deg);
			-o-transform:rotate(20eg);
		}
		.burst-8:before{
			content:"";
			top:0;
			left:0;
			-webkit-transform:rotate(135deg);
			-moz-transform:rotate(135deg);
			-ms-transform:rotate(135deg);
			-o-transform:rotate(135deg);
		}
	
	</style>
	<body>
		<?php
		     include 'navigation.php';
		?>
        <div class="row">        
    
         <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="player-card">
            <div class="position">1</div>
            <div class="image">
                <img src="https://static.fctables.com/upload/images/100x100/e0/e03m358c995c05bae7/l-messi.png" width="100" height="100" alt="Lionel Messi" />
            </div>
            <div class="name">
                <a href="/players/lionel_messi-271592/">Lionel Messi</a> 
            </div>
            <img src="https://static.fctables.com/upload/images/20x20/ki/kimpd57b477c767ca2/barcelona.png" alt="Barcelona" /> Barcelona<br />
            <div data-toggle="tooltip" title="Argentina" class="flag flag-ar"></div> Argentina
            <div class="rank">125.9</div>
            <div class="burst-8"></div>
            
           
            <div class="clearfix"></div>
                         
                    <table class="table table-condensed table-striped" width="100%">
                        <tr>
                            <th>Year</th>
                            <th data-toggle="tooltip" title="Matches">M</th>
                            <th data-toggle="tooltip" title="Goals">G</th>
                            <th data-toggle="tooltip" title="Assists">A</th>
                            <th data-toggle="tooltip" title="Shots">S</th>
                        
                            <th data-toggle="tooltip" title="Passes">P</th>
                        
                            
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>37</td>
                            <td>33</td>
                            <td>9</td>
                            <td>120</td>
                            <td>1133</td>
                            
                        </tr>
                        <tr>
                            <td><strong>2016</strong></td>
                            <td>60</td>
                            <td>62</td>
                            <td>26</td>
                            <td>184</td>
                            <td>2192</td>
                            
                        </tr>
                        <tr>
                            <td><strong>2015</strong></td>
                            <td>55</td>
                            <td>53</td>
                            <td>21</td>
                            <td>169</td>
                            <td>1922</td>
                            
                        </tr>
                        <tr>
                            <td><strong>Sum</strong></td>
                            <td><strong>152</strong></td>
                            <td><strong>148</strong></td>
                            <td><strong>56</strong></td>
                            <td><strong>473</strong></td>
                            <td><strong>5247</strong></td>
                            
                        </tr>
                    </table>
                
        </div>
        </div> 
            
        <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="player-card">
            <div class="position">2</div>
            <div class="image">
                <img src="https://static.fctables.com/upload/images/100x100/na/na34p58c995bc48c0a/cristiano-ronaldo.png" width="100" height="100" alt="Cristiano Ronaldo" />
            </div>
            <div class="name">
                <a href="/players/cristiano_ronaldo-222119/">Cristiano Ronaldo</a> 
            </div>
            <img src="https://static.fctables.com/upload/images/20x20/zt/ztba857b477c75027d/real-madrid.png" alt="Real Madrid" /> Real Madrid<br />
            <div data-toggle="tooltip" title="Portugal" class="flag flag-pt"></div> Portugal
            <div class="rank">117.3</div>
            <div class="burst-8"></div>
            
           
            <div class="clearfix"></div>
                         
                    <table class="table table-condensed table-striped" width="100%">
                        <tr>
                            <th>Year</th>
                            <th data-toggle="tooltip" title="Matches">M</th>
                            <th data-toggle="tooltip" title="Goals">G</th>
                            <th data-toggle="tooltip" title="Assists">A</th>
                            <th data-toggle="tooltip" title="Shots">S</th>
                        
                            <th data-toggle="tooltip" title="Passes">P</th>
                        
                            
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>34</td>
                            <td>33</td>
                            <td>6</td>
                            <td>100</td>
                            <td>528</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2016</strong></td>
                            <td>53</td>
                            <td>55</td>
                            <td>17</td>
                            <td>207</td>
                            <td>1048</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2015</strong></td>
                            <td>58</td>
                            <td>58</td>
                            <td>17</td>
                            <td>244</td>
                            <td>1124</td>
                            
                        </tr>
                        <tr>
                            <td><strong>Sum</strong></td>
                            <td><strong>145</strong></td>
                            <td><strong>146</strong></td>
                            <td><strong>40</strong></td>
                            <td><strong>551</strong></td>
                            <td><strong>2700</strong></td>
                            
                        </tr>
                    </table>
                
        </div>
        </div> 
            
        <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="player-card">
            <div class="position">3</div>
            <div class="image">
                <img src="https://static.fctables.com/upload/images/100x100/9z/9z4up58c995c04ab1d/l-suarez.png" width="100" height="100" alt="Luis Suarez" />
            </div>
            <div class="name">
                <a href="/players/luis_suarez-273528/">Luis Suarez</a> 
            </div>
            <img src="https://static.fctables.com/upload/images/20x20/ki/kimpd57b477c767ca2/barcelona.png" alt="Barcelona" /> Barcelona<br />
            <div data-toggle="tooltip" title="Uruguay" class="flag flag-uy"></div> Uruguay
            <div class="rank">105.7</div>
            <div class="burst-8"></div>
            
           
            <div class="clearfix"></div>
                         
                    <table class="table table-condensed table-striped" width="100%">
                        <tr>
                            <th>Year</th>
                            <th data-toggle="tooltip" title="Matches">M</th>
                            <th data-toggle="tooltip" title="Goals">G</th>
                            <th data-toggle="tooltip" title="Assists">A</th>
                            <th data-toggle="tooltip" title="Shots">S</th>
                        
                            <th data-toggle="tooltip" title="Passes">P</th>
                        
                            
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>33</td>
                            <td>22</td>
                            <td>10</td>
                            <td>73</td>
                            <td>549</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2016</strong></td>
                            <td>59</td>
                            <td>54</td>
                            <td>22</td>
                            <td>138</td>
                            <td>1034</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2015</strong></td>
                            <td>54</td>
                            <td>51</td>
                            <td>19</td>
                            <td>118</td>
                            <td>889</td>
                            
                        </tr>
                        <tr>
                            <td><strong>Sum</strong></td>
                            <td><strong>146</strong></td>
                            <td><strong>127</strong></td>
                            <td><strong>51</strong></td>
                            <td><strong>329</strong></td>
                            <td><strong>2472</strong></td>
                            
                        </tr>
                    </table>
                
        </div>
        </div> 
            
        <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="player-card">
            <div class="position">4</div>
            <div class="image">
                <img src="https://static.fctables.com/upload/images/100x100/v7/v7nxo57ea80fb2ffb5/robert-lewandowski.jpg" width="100" height="100" alt="Robert Lewandowski" />
            </div>
            <div class="name">
                <a href="/players/robert_lewandowski-304954/">Robert Lewandowski</a> 
            </div>
            <img src="https://static.fctables.com/upload/images/20x20/yv/yvyxj57b477ac395ae/bayern-munich.png" alt="Bayern Munich" /> Bayern Munich<br />
            <div data-toggle="tooltip" title="Poland" class="flag flag-pl"></div> Poland
            <div class="rank">93.0</div>
            <div class="burst-8"></div>
            
           
            <div class="clearfix"></div>
                         
                    <table class="table table-condensed table-striped" width="100%">
                        <tr>
                            <th>Year</th>
                            <th data-toggle="tooltip" title="Matches">M</th>
                            <th data-toggle="tooltip" title="Goals">G</th>
                            <th data-toggle="tooltip" title="Assists">A</th>
                            <th data-toggle="tooltip" title="Shots">S</th>
                        
                            <th data-toggle="tooltip" title="Passes">P</th>
                        
                            
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>30</td>
                            <td>29</td>
                            <td>5</td>
                            <td>82</td>
                            <td>385</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2016</strong></td>
                            <td>54</td>
                            <td>47</td>
                            <td>4</td>
                            <td>158</td>
                            <td>870</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2015</strong></td>
                            <td>49</td>
                            <td>53</td>
                            <td>6</td>
                            <td>140</td>
                            <td>722</td>
                            
                        </tr>
                        <tr>
                            <td><strong>Sum</strong></td>
                            <td><strong>133</strong></td>
                            <td><strong>129</strong></td>
                            <td><strong>15</strong></td>
                            <td><strong>380</strong></td>
                            <td><strong>1977</strong></td>
                            
                        </tr>
                    </table>
                
        </div>
        </div> 
            
        <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="player-card">
            <div class="position">5</div>
            <div class="image">
                <img src="https://static.fctables.com/upload/images/100x100/pu/pu89l58a234d061016/zlatan-ibrahimovic.png" width="100" height="100" alt="Zlatan Ibrahimovic" />
            </div>
            <div class="name">
                <a href="/players/zlatan_ibrahimovic-330572/">Zlatan Ibrahimovic</a> 
            </div>
            <img src="https://static.fctables.com/upload/images/20x20/7y/7yzg857b477b364bd2/manchester-united.png" alt="Manchester United" /> Manchester United<br />
            <div data-toggle="tooltip" title="Sweden" class="flag flag-se"></div> Sweden
            <div class="rank">89.4</div>
            <div class="burst-8"></div>
            
           
            <div class="clearfix"></div>
                         
                    <table class="table table-condensed table-striped" width="100%">
                        <tr>
                            <th>Year</th>
                            <th data-toggle="tooltip" title="Matches">M</th>
                            <th data-toggle="tooltip" title="Goals">G</th>
                            <th data-toggle="tooltip" title="Assists">A</th>
                            <th data-toggle="tooltip" title="Shots">S</th>
                        
                            <th data-toggle="tooltip" title="Passes">P</th>
                        
                            
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>17</td>
                            <td>11</td>
                            <td>4</td>
                            <td>34</td>
                            <td>345</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2016</strong></td>
                            <td>51</td>
                            <td>51</td>
                            <td>15</td>
                            <td>164</td>
                            <td>1395</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2015</strong></td>
                            <td>46</td>
                            <td>49</td>
                            <td>15</td>
                            <td>115</td>
                            <td>1168</td>
                            
                        </tr>
                        <tr>
                            <td><strong>Sum</strong></td>
                            <td><strong>114</strong></td>
                            <td><strong>111</strong></td>
                            <td><strong>34</strong></td>
                            <td><strong>313</strong></td>
                            <td><strong>2908</strong></td>
                            
                        </tr>
                    </table>
                
        </div>
        </div> 
            
        <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="player-card">
            <div class="position">6</div>
            <div class="image">
                <img src="https://static.fctables.com/upload/images/100x100/ny/nyzpd58c995c06ef78/neymar.png" width="100" height="100" alt="Neymar" />
            </div>
            <div class="name">
                <a href="/players/neymar-291274/">Neymar</a> 
            </div>
            <img src="https://static.fctables.com/upload/images/20x20/ki/kimpd57b477c767ca2/barcelona.png" alt="Barcelona" /> Barcelona<br />
            <div data-toggle="tooltip" title="Brazil" class="flag flag-br"></div> Brazil
            <div class="rank">85.0</div>
            <div class="burst-8"></div>
            
           
            <div class="clearfix"></div>
                         
                    <table class="table table-condensed table-striped" width="100%">
                        <tr>
                            <th>Year</th>
                            <th data-toggle="tooltip" title="Matches">M</th>
                            <th data-toggle="tooltip" title="Goals">G</th>
                            <th data-toggle="tooltip" title="Assists">A</th>
                            <th data-toggle="tooltip" title="Shots">S</th>
                        
                            <th data-toggle="tooltip" title="Passes">P</th>
                        
                            
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>32</td>
                            <td>19</td>
                            <td>7</td>
                            <td>73</td>
                            <td>1058</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2016</strong></td>
                            <td>55</td>
                            <td>30</td>
                            <td>21</td>
                            <td>113</td>
                            <td>1894</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2015</strong></td>
                            <td>56</td>
                            <td>46</td>
                            <td>15</td>
                            <td>114</td>
                            <td>1834</td>
                            
                        </tr>
                        <tr>
                            <td><strong>Sum</strong></td>
                            <td><strong>143</strong></td>
                            <td><strong>95</strong></td>
                            <td><strong>43</strong></td>
                            <td><strong>300</strong></td>
                            <td><strong>4786</strong></td>
                            
                        </tr>
                    </table>
                
        </div>
        </div> 
            
        <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="player-card">
            <div class="position">7</div>
            <div class="image">
                <img src="https://static.fctables.com/upload/images/100x100/hm/hmcdo57c79ee7cbd8a/pierre-emerick-aubameyang.jpg" width="100" height="100" alt="Pierre-Emerick Aubameyang" />
            </div>
            <div class="name">
                <a href="/players/pierreemerick_aubameyang-300516/">Pierre-Emerick Aubameyang</a> 
            </div>
            <img src="https://static.fctables.com/upload/images/20x20/q9/q9ri157b477b7414da/borussia-dortmund.png" alt="Borussia Dortmund" /> Borussia Dortmund<br />
            <div data-toggle="tooltip" title="Gabon" class="flag flag-ga"></div> Gabon
            <div class="rank">80.5</div>
            <div class="burst-8"></div>
            
           
            <div class="clearfix"></div>
                         
                    <table class="table table-condensed table-striped" width="100%">
                        <tr>
                            <th>Year</th>
                            <th data-toggle="tooltip" title="Matches">M</th>
                            <th data-toggle="tooltip" title="Goals">G</th>
                            <th data-toggle="tooltip" title="Assists">A</th>
                            <th data-toggle="tooltip" title="Shots">S</th>
                        
                            <th data-toggle="tooltip" title="Passes">P</th>
                        
                            
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>30</td>
                            <td>25</td>
                            <td>1</td>
                            <td>69</td>
                            <td>269</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2016</strong></td>
                            <td>40</td>
                            <td>39</td>
                            <td>5</td>
                            <td>125</td>
                            <td>522</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2015</strong></td>
                            <td>42</td>
                            <td>51</td>
                            <td>7</td>
                            <td>66</td>
                            <td>320</td>
                            
                        </tr>
                        <tr>
                            <td><strong>Sum</strong></td>
                            <td><strong>112</strong></td>
                            <td><strong>115</strong></td>
                            <td><strong>13</strong></td>
                            <td><strong>260</strong></td>
                            <td><strong>1111</strong></td>
                            
                        </tr>
                    </table>
                
        </div>
        </div> 
            
        <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="player-card">
            <div class="position">8</div>
            <div class="image">
                <img src="https://static.fctables.com/upload/images/100x100/mg/mg4zi5865acc65fc1c/edinson-cavani-615322.jpg" width="100" height="100" alt="Edinson Cavani" />
            </div>
            <div class="name">
                <a href="/players/edinson_cavani-231306/">Edinson Cavani</a> 
            </div>
            <img src="https://static.fctables.com/upload/images/20x20/7c/7clgr57b477b677537/paris-saint-germain.png" alt="Paris Saint Germain" /> Paris Saint Germain<br />
            <div data-toggle="tooltip" title="Uruguay" class="flag flag-uy"></div> Uruguay
            <div class="rank">78.6</div>
            <div class="burst-8"></div>
            
           
            <div class="clearfix"></div>
                         
                    <table class="table table-condensed table-striped" width="100%">
                        <tr>
                            <th>Year</th>
                            <th data-toggle="tooltip" title="Matches">M</th>
                            <th data-toggle="tooltip" title="Goals">G</th>
                            <th data-toggle="tooltip" title="Assists">A</th>
                            <th data-toggle="tooltip" title="Shots">S</th>
                        
                            <th data-toggle="tooltip" title="Passes">P</th>
                        
                            
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>32</td>
                            <td>27</td>
                            <td>5</td>
                            <td>89</td>
                            <td>342</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2016</strong></td>
                            <td>49</td>
                            <td>46</td>
                            <td>6</td>
                            <td>127</td>
                            <td>705</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2015</strong></td>
                            <td>46</td>
                            <td>35</td>
                            <td>3</td>
                            <td>102</td>
                            <td>768</td>
                            
                        </tr>
                        <tr>
                            <td><strong>Sum</strong></td>
                            <td><strong>127</strong></td>
                            <td><strong>108</strong></td>
                            <td><strong>14</strong></td>
                            <td><strong>318</strong></td>
                            <td><strong>1815</strong></td>
                            
                        </tr>
                    </table>
                
        </div>
        </div> 
            
        <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="player-card">
            <div class="position">9</div>
            <div class="image">
                <img src="https://static.fctables.com/upload/images/100x100/cx/cx94p592bf5b5e28d9/gonzalo_higuain.jpg" width="100" height="100" alt="Gonzalo Higuain" />
            </div>
            <div class="name">
                <a href="/players/gonzalo_higuain-243747/">Gonzalo Higuain</a> 
            </div>
            <img src="https://static.fctables.com/upload/images/20x20/ip/ip8ha58bbf62c8338d/juventus-logo.png" alt="Juventus" /> Juventus<br />
            <div data-toggle="tooltip" title="Argentina" class="flag flag-ar"></div> Argentina
            <div class="rank">73.9</div>
            <div class="burst-8"></div>
            
           
            <div class="clearfix"></div>
                         
                    <table class="table table-condensed table-striped" width="100%">
                        <tr>
                            <th>Year</th>
                            <th data-toggle="tooltip" title="Matches">M</th>
                            <th data-toggle="tooltip" title="Goals">G</th>
                            <th data-toggle="tooltip" title="Assists">A</th>
                            <th data-toggle="tooltip" title="Shots">S</th>
                        
                            <th data-toggle="tooltip" title="Passes">P</th>
                        
                            
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>35</td>
                            <td>20</td>
                            <td>4</td>
                            <td>89</td>
                            <td>505</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2016</strong></td>
                            <td>47</td>
                            <td>40</td>
                            <td>1</td>
                            <td>169</td>
                            <td>853</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2015</strong></td>
                            <td>51</td>
                            <td>37</td>
                            <td>8</td>
                            <td>152</td>
                            <td>904</td>
                            
                        </tr>
                        <tr>
                            <td><strong>Sum</strong></td>
                            <td><strong>133</strong></td>
                            <td><strong>97</strong></td>
                            <td><strong>13</strong></td>
                            <td><strong>410</strong></td>
                            <td><strong>2262</strong></td>
                            
                        </tr>
                    </table>
                
        </div>
        </div> 
            
        <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="player-card">
            <div class="position">10</div>
            <div class="image">
                <img src="https://static.fctables.com/upload/images/100x100/fv/fvet558a234fb4dc34/harry-kane.png" width="100" height="100" alt="Harry Kane" />
            </div>
            <div class="name">
                <a href="/players/harry_kane-246316/">Harry Kane</a> 
            </div>
            <img src="https://static.fctables.com/upload/images/20x20/8p/8pytk57b477ca44cca/tottenham-hotspur.png" alt="Tottenham" /> Tottenham<br />
            <div data-toggle="tooltip" title="England" class="flag flag-england"></div> England
            <div class="rank">70.7</div>
            <div class="burst-8"></div>
            
           
            <div class="clearfix"></div>
                         
                    <table class="table table-condensed table-striped" width="100%">
                        <tr>
                            <th>Year</th>
                            <th data-toggle="tooltip" title="Matches">M</th>
                            <th data-toggle="tooltip" title="Goals">G</th>
                            <th data-toggle="tooltip" title="Assists">A</th>
                            <th data-toggle="tooltip" title="Shots">S</th>
                        
                            <th data-toggle="tooltip" title="Passes">P</th>
                        
                            
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>25</td>
                            <td>30</td>
                            <td>6</td>
                            <td>72</td>
                            <td>327</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2016</strong></td>
                            <td>42</td>
                            <td>29</td>
                            <td>1</td>
                            <td>133</td>
                            <td>757</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2015</strong></td>
                            <td>49</td>
                            <td>35</td>
                            <td>6</td>
                            <td>146</td>
                            <td>1011</td>
                            
                        </tr>
                        <tr>
                            <td><strong>Sum</strong></td>
                            <td><strong>116</strong></td>
                            <td><strong>94</strong></td>
                            <td><strong>13</strong></td>
                            <td><strong>351</strong></td>
                            <td><strong>2095</strong></td>
                            
                        </tr>
                    </table>
                
        </div>
        </div> 
            
        <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="player-card">
            <div class="position">11</div>
            <div class="image">
                <img src="https://static.fctables.com/upload/images/100x100/y7/y73um58c995d213dfb/a-griezmann.png" width="100" height="100" alt="Antoine Griezmann" />
            </div>
            <div class="name">
                <a href="/players/antoine_griezmann-208981/">Antoine Griezmann</a> 
            </div>
            <img src="https://static.fctables.com/upload/images/20x20/zg/zgdfx57b477ac49647/atletico-madrid.png" alt="Atletico Madrid" /> Atletico Madrid<br />
            <div data-toggle="tooltip" title="France" class="flag flag-fr"></div> France
            <div class="rank">69.1</div>
            <div class="burst-8"></div>
            
           
            <div class="clearfix"></div>
                         
                    <table class="table table-condensed table-striped" width="100%">
                        <tr>
                            <th>Year</th>
                            <th data-toggle="tooltip" title="Matches">M</th>
                            <th data-toggle="tooltip" title="Goals">G</th>
                            <th data-toggle="tooltip" title="Assists">A</th>
                            <th data-toggle="tooltip" title="Shots">S</th>
                        
                            <th data-toggle="tooltip" title="Passes">P</th>
                        
                            
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>37</td>
                            <td>19</td>
                            <td>6</td>
                            <td>55</td>
                            <td>794</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2016</strong></td>
                            <td>61</td>
                            <td>36</td>
                            <td>12</td>
                            <td>87</td>
                            <td>1264</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2015</strong></td>
                            <td>52</td>
                            <td>34</td>
                            <td>4</td>
                            <td>56</td>
                            <td>845</td>
                            
                        </tr>
                        <tr>
                            <td><strong>Sum</strong></td>
                            <td><strong>150</strong></td>
                            <td><strong>89</strong></td>
                            <td><strong>22</strong></td>
                            <td><strong>198</strong></td>
                            <td><strong>2903</strong></td>
                            
                        </tr>
                    </table>
                
        </div>
        </div> 
            
        <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="player-card">
            <div class="position">12</div>
            <div class="image">
                <img src="https://static.fctables.com/upload/images/100x100/js/js29m58a2350d283cb/sergio-aguero.png" width="100" height="100" alt="Sergio Aguero" />
            </div>
            <div class="name">
                <a href="/players/sergio-aguero-312350/">Sergio Aguero</a> 
            </div>
            <img src="https://static.fctables.com/upload/images/20x20/ti/tiq2j57b477c873db0/manchester-city.png" alt="Manchester City" /> Manchester City<br />
            <div data-toggle="tooltip" title="Argentina" class="flag flag-ar"></div> Argentina
            <div class="rank">68.2</div>
            <div class="burst-8"></div>
            
           
            <div class="clearfix"></div>
                         
                    <table class="table table-condensed table-striped" width="100%">
                        <tr>
                            <th>Year</th>
                            <th data-toggle="tooltip" title="Matches">M</th>
                            <th data-toggle="tooltip" title="Goals">G</th>
                            <th data-toggle="tooltip" title="Assists">A</th>
                            <th data-toggle="tooltip" title="Shots">S</th>
                        
                            <th data-toggle="tooltip" title="Passes">P</th>
                        
                            
                        </tr>
                        <tr>
                            <td><strong>2017</strong></td>
                            <td>23</td>
                            <td>17</td>
                            <td>5</td>
                            <td>82</td>
                            <td>511</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2016</strong></td>
                            <td>50</td>
                            <td>39</td>
                            <td>5</td>
                            <td>143</td>
                            <td>888</td>
                            
                        </tr>
                                                <tr>
                            <td><strong>2015</strong></td>
                            <td>39</td>
                            <td>32</td>
                            <td>6</td>
                            <td>118</td>
                            <td>693</td>
                            
                        </tr>
                        <tr>
                            <td><strong>Sum</strong></td>
                            <td><strong>112</strong></td>
                            <td><strong>88</strong></td>
                            <td><strong>16</strong></td>
                            <td><strong>343</strong></td>
                            <td><strong>2092</strong></td>
                            
                        </tr>
                    </table>
                
        </div>
        </div> 
     
        </div>
		<?php 
		  'include footer.php';
		?>
        
	</body>
</html>      
