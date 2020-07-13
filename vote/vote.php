<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="vote.css">
	<title></title>
</head>
<body>
	<?php
		$pic =array(1=>0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0
			,0,0,0,0,0,0,0,0,0,0
			,0,0,0,0,0,0,0,0,0,0
			,0,0,0,0,0,0,0,0,0,0
			,0,0,0,0,0,0,0,0,0,0
			,0,0,0,0,0,0,0,0,0,0
			,0,0,0,0,0,0,0,0,0,0
			,0,0,0,0,0,0,0,0,0,0
			,0);
	?>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>
	" method="post" name="form" id="form">
	請投下你要投的動漫號碼:
	<input type="text" name="name" id="name">
	<input type="submit" name="btn" value="確認投票">	
	</form>
	<?php
		$touch = $_POST["name"];
	?>
	<table border="1">
			<tr>
				<th style="font-size: 70px">2018年1月冬番</th>
			</tr>
	</table>
	<table border="1">
			<tr>
				<th>投票號碼</th>
				<th>動漫名稱</th>
				<th>動漫圖片</th>
				<th>總票數</th>
			</tr>
			<tr>
				<th>1</th>
				<th>刀劍亂舞花丸 第二季</th>
				<th> <img src="1.png" height="300px"> </th>
				<?php
					if($touch == 1){
						$pic[1]++;
					} 
					echo "<th>",$pic[1],"</th>";
				 ?>
			</tr>
			<tr>
				<th>2</th>
				<th>銀之守墓人 第二季</th>
				<th> <img src="2.png" height="300px"> </th>
				<?php
					if($touch == 2){
						$pic[2]++;
					} 
					echo "<th>",$pic[2],"</th>";
				 ?>
			</tr>
			<tr>
				<th>3</th>
				<th>七大罪 第二季</th>
				<th> <img src="3.png" height="300px"> </th>
				<?php
					if($touch == 3){
						$pic[3]++;
					} 
					echo "<th>",$pic[3],"</th>";
				 ?>
			</tr>
			<tr>
				<th>4</th>
				<th>OVERLOAD 第二季</th>
				<th> <img src="4.png" height="300px"> </th>
				<?php
					if($touch == 4){
						$pic[4]++;
					} 
					echo "<th>",$pic[4],"</th>";
				 ?>
			</tr>
			<tr>
				<th>5</th>
				<th>粗點心戰爭 第二季</th>
				<th> <img src="5.png" height="300px"> </th>
				<?php
					if($touch == 5){
						$pic[5]++;
					} 
					echo "<th>",$pic[5],"</th>";
				 ?>
			</tr>
			<tr>
				<th>6</th>
				<th>齊木楠雄的災難 第二季</th>
				<th> <img src="6.png" height="300px"> </th>
				<?php
					if($touch == 6){
						$pic[6]++;
					} 
					echo "<th>",$pic[6],"</th>";
				 ?>
			</tr>
			<tr>
				<th>7</th>
				<th>飆速宅男 第四季</th>
				<th> <img src="7.png" height="300px"> </th>
				<?php
					if($touch == 7){
						$pic[7]++;
					} 
					echo "<th>",$pic[7],"</th>";
				 ?>			
			</tr>
			<tr>
				<th>8</th>
				<th>庫洛魔法使 CLEARCARD</th>
				<th> <img src="8.png" height="300px"> </th>
				<?php
					if($touch == 8){
						$pic[8]++;
					} 
					echo "<th>",$pic[8],"</th>";
				 ?>
			</tr>
			<tr>
				<th>9</th>
				<th>銀魂 銀之魂篇</th>
				<th> <img src="9.png" height="300px"> </th>
				<?php
					if($touch == 9){
						$pic[9]++;
					} 
					echo "<th>",$pic[9],"</th>";
				 ?>
			</tr>
			<tr>
				<th>10</th>
				<th>紫羅蘭永恆花園</th>
				<th> <img src="10.png" height="300px"> </th>
				<?php
					if($touch == 10){
						$pic[10]++;
					} 
					echo "<th>",$pic[10],"</th>";
				 ?>
			</tr>
			<tr>
				<th>11</th>
				<th>皇帝聖印戰記</th>
				<th> <img src="11.png" height="300px"> </th>
				<?php
					if($touch == 11){
						$pic[11]++;
					} 
					echo "<th>",$pic[11],"</th>";
				 ?>
			</tr>
			<tr>
				<th>12</th>
				<th>三麗鷗男子</th>
				<th> <img src="12.png" height="300px"> </th>
				<?php
					if($touch == 12){
						$pic[12]++;
					} 
					echo "<th>",$pic[12],"</th>";
				 ?>
			</tr>
			<tr>
				<th>13</th>
				<th>搖曳露營</th>
				<th> <img src="13.png" height="300px"> </th>
				<?php
					if($touch == 13){
						$pic[13]++;
					} 
					echo "<th>",$pic[13],"</th>";
				 ?>
			</tr>
			<tr>
				<th>14</th>
				<th>學園奶爸</th>
				<th> <img src="14.png" height="300px"> </th>
				<?php
					if($touch == 14){
						$pic[14]++;
					} 
					echo "<th>",$pic[14],"</th>";
				 ?>
			</tr>
			<tr>
				<th>15</th>
				<th>戀如雨止</th>
				<th> <img src="15.png" height="300px"> </th>
				<?php
					if($touch == 15){
						$pic[15]++;
					} 
					echo "<th>",$pic[15],"</th>";
				 ?>
			</tr>
			<tr>
				<th>16</th>
				<th>Fate/EXTRA Last Encore</th>
				<th> <img src="16.png" height="300px"> </th>
				<?php
					if($touch == 16){
						$pic[16]++;
					} 
					echo "<th>",$pic[16],"</th>";
				 ?>
			</tr>
			<tr>
				<th>17</th>
				<th>三顆星彩色冒險</th>
				<th> <img src="17.png" height="300px"> </th>
				<?php
					if($touch == 17){
						$pic[17]++;
					} 
					echo "<th>",$pic[17],"</th>";
				 ?>
			</tr>
			<tr>
				<th>18</th>
				<th>Slow Start</th>
				<th> <img src="18.png" height="300px"> </th>
				<?php
					if($touch == 18){
						$pic[18]++;
					} 
					echo "<th>",$pic[18],"</th>";
				 ?>
			</tr>
			<tr>
				<th>19</th>
				<th>POP TEAM EPIC</th>
				<th> <img src="19.png" height="300px"> </th>
				<?php
					if($touch == 19){
						$pic[19]++;
					} 
					echo "<th>",$pic[19],"</th>";
				 ?>
			</tr>
			<tr>
				<th>20</th>
				<th>刀使之巫女</th>
				<th> <img src="20.png" height="300px"> </th>
				<?php
					if($touch == 20){
						$pic[20]++;
					} 
					echo "<th>",$pic[20],"</th>";
				 ?>
			</tr>
			<tr>
				<th>21</th>
				<th>伊藤潤二集</th>
				<th> <img src="21.png" height="300px"> </th>
				<?php
					if($touch == 21){
						$pic[21]++;
					} 
					echo "<th>",$pic[21],"</th>";
				 ?>
			<tr>
				<th>22</th>
				<th>DAMExPRINCE</th>
				<th> <img src="22.jpg" width="200px" height="300px"> </th>
				<?php
					if($touch == 22){
						$pic[22]++;
					} 
					echo "<th>",$pic[22],"</th>";
				 ?>
			</tr>
			<tr>
				<th>23</th>
				<th>citrus 柑橘味香氣</th>
				<th> <img src="23.png" height="300px"> </th>
				<?php
					if($touch == 23){
						$pic[23]++;
					} 
					echo "<th>",$pic[23],"</th>";
				 ?>
			</tr>
			<tr>
				<th>24</th>
				<th>IDOLISH 7</th>
				<th> <img src="24.png" height="300px"> </th>
				<?php
					if($touch == 24){
						$pic[24]++;
					} 
					echo "<th>",$pic[24],"</th>";
				 ?>
			</tr>
			<tr>
				<th>25</th>
				<th>爆肝工程師的異世界狂想曲</th>
				<th> <img src="25.png" height="300px"> </th>
				<?php
					if($touch ==25 ){
						$pic[25]++;
					} 
					echo "<th>",$pic[25],"</th>";
				 ?>
			</tr>
			<tr>
				<th>26</th>
				<th>愛吃拉麵的小泉同學</th>
				<th> <img src="26.png" height="300px"> </th>
				<?php
					if($touch == 26){
						$pic[26]++;
					} 
					echo "<th>",$pic[26],"</th>";
				 ?>
			</tr>
			<tr>
				<th>27</th>
				<th>封神演義 新作</th>
				<th> <img src="27.png" height="300px"> </th>
				<?php
					if($touch ==27){
						$pic[27]++;
					} 
					echo "<th>",$pic[27],"</th>";
				 ?>
			</tr>
			<tr>
				<th>28</th>
				<th>擅長捉弄人的高木同學</th>
				<th> <img src="28.png" height="300px"> </th>
				<?php
					if($touch == 28){
						$pic[28]++;
					} 
					echo "<th>",$pic[28],"</th>";
				 ?>
			</tr>
			<tr>
				<th>29</th>
				<th>博多豚骨拉麵</th>
				<th> <img src="29.png" height="300px"> </th>
				<?php
					if($touch == 29){
						$pic[29]++;
					} 
					echo "<th>",$pic[29],"</th>";
				 ?>
			</tr>
			<tr>
				<th>30</th>
				<th>BEATLESS</th>
				<th> <img src="30.png" height="300px"> </th>
				<?php
					if($touch == 30){
						$pic[30]++;
					} 
					echo "<th>",$pic[30],"</th>";
				 ?>
			</tr>
			<tr>
				<th>31</th>
				<th>龍王的工作!</th>
				<th> <img src="31.png" height="300px"> </th>
				<?php
					if($touch == 31){
						$pic[31]++;
					} 
					echo "<th>",$pic[31],"</th>";
				 ?>
			</tr>
			<tr>
				<th>32</th>
				<th>櫻花忍法帖</th>
				<th> <img src="32.png" height="300px"> </th>
				<?php
					if($touch == 32){
						$pic[32]++;
					} 
					echo "<th>",$pic[32],"</th>";
				 ?>
			</tr>
			<tr>
				<th>33</th>
				<th>小木乃伊到我家</th>
				<th> <img src="33.png" height="300px"> </th>
				<?php
					if($touch == 33){
						$pic[33]++;
					} 
					echo "<th>",$pic[33],"</th>";
				 ?>
			</tr>
			<tr>
				<th>34</th>
				<th>DARLING in the FRANXX</th>
				<th> <img src="34.png" height="300px"> </th>
				<?php
					if($touch == 34){
						$pic[34]++;
					} 
					echo "<th>",$pic[34],"</th>";
				 ?>
			</tr>
			<tr>
				<th>35</th>
				<th>妖精森林的小不點</th>
				<th> <img src="35.png" height="300px"> </th>
				<?php
					if($touch == 35){
						$pic[35]++;
					} 
					echo "<th>",$pic[35],"</th>";
				 ?>
			</tr>
			<tr>
				<th>36</th>
				<th>刻刻</th>
				<th> <img src="36.png" height="300px"> </th>
				<?php
					if($touch == 36){
						$pic[36]++;
					} 
					echo "<th>",$pic[36],"</th>";
				 ?>
			</tr>
			<tr>
				<th>37</th>
				<th>酒鬼妹子</th>
				<th> <img src="37.png" height="300px"> </th>
				<?php
					if($touch == 37){
						$pic[37]++;
					} 
					echo "<th>",$pic[37],"</th>";
				 ?>
			</tr>
			<tr>
				<th>38</th>
				<th>牙鬥獸娘</th>
				<th> <img src="38.png" height="300px"> </th>
				<?php
					if($touch == 38){
						$pic[38]++;
					} 
					echo "<th>",$pic[38],"</th>";
				 ?>
			</tr>
			<tr>
				<th>39</th>
				<th>童話少女</th>
				<th> <img src="39.png" height="300px"> </th>
				<?php
					if($touch ==39){
						$pic[39]++;
					} 
					echo "<th>",$pic[39],"</th>";
				 ?>
			</tr>
			<tr>
				<th>40</th>
				<th>比宇宙更遠的地方</th>
				<th> <img src="40.png" height="300px"> </th>
				<?php
					if($touch == 40){
						$pic[40]++;
					} 
					echo "<th>",$pic[40],"</th>";
				 ?>
			</tr>
			<tr>
				<th>41</th>
				<th>七美德</th>
				<th> <img src="41.png" height="300px"> </th>
				<?php
					if($touch == 41){
						$pic[41]++;
					} 
					echo "<th>",$pic[41],"</th>";
				 ?>
			</tr>
	</table>
	<table border="1">
			<tr>
				<th style="font-size: 70px">2018年4月春番</th>
			</tr>
	</table>
	<table border="1">
		<tr>
				<th>投票號碼</th>
				<th>動漫名稱</th>
				<th>動漫圖片</th>
				<th>總票數</th>
		</tr>
		<tr>
			<th>42</th>
			<th>藍海少女 第二季</th>
			<th> <img src="42.png" height="300px"> </th>
			<?php
					if($touch == 42){
						$pic[42]++;
					} 
					echo "<th>",$pic[42],"</th>";
				 ?>
		</tr>
		<tr>
			<th>43</th>
			<th>我的英雄學院 第三季</th>
			<th> <img src="43.png" height="300px"> </th>
			<?php
					if($touch == 43){
						$pic[43]++;
					} 
					echo "<th>",$pic[43],"</th>";
				 ?>
		</tr>
		<tr>
			<th>44</th>
			<th>食戟之靈 第四季</th>
			<th> <img src="44.png" height="300px"> </th>
			<?php
					if($touch == 44){
						$pic[44]++;
					} 
					echo "<th>",$pic[44],"</th>";
				 ?>
		</tr>
		<tr>
			<th>45</th>
			<th>驚爆危機 第四季</th>
			<th> <img src="45.png" height="300px"> </th>
			<?php
					if($touch == 45){
						$pic[45]++;
					} 
					echo "<th>",$pic[45],"</th>";
				 ?>
		</tr>
		<tr>
			<th>46</th>
			<th>戰鬥少女選擇者 第四季</th>
			<th> <img src="46.png" height="300px"> </th>
			<?php
					if($touch == 46){
						$pic[46]++;
					} 
					echo "<th>",$pic[46],"</th>";
				 ?>
		</tr>
		<tr>
			<th>47</th>
			<th>惡魔高校DXD第四季</th>
			<th> <img src="47.png" height="300px"> </th>
			<?php
					if($touch == 47){
						$pic[47]++;
					} 
					echo "<th>",$pic[47],"</th>";
				 ?>
		</tr>
		<tr>
			<th>48</th>
			<th>罪人與龍共舞</th>
			<th> <img src="48.png" height="300px"> </th>
			<?php
					if($touch == 48){
						$pic[48]++;
					} 
					echo "<th>",$pic[48],"</th>";
				 ?>
		</tr>
		<tr>
			<th>49</th>
			<th>阿宅的戀愛太難</th>
			<th> <img src="49.png" height="300px"> </th>
			<?php
					if($touch == 49){
						$pic[49]++;
					} 
					echo "<th>",$pic[49],"</th>";
				 ?>
		</tr>
		<tr>
			<th>50</th>
			<th>銀河英雄傳說 新作</th>
			<th> <img src="50.png" height="300px"> </th>
			<?php
					if($touch == 50){
						$pic[50]++;
					} 
					echo "<th>",$pic[50],"</th>";
				 ?>
		</tr>
		<tr>
			<th>51</th>
			<th>閃電11人 阿瑞絲的天秤</th>
			<th> <img src="51.png" height="300px"> </th>
			<?php
					if($touch == 51){
						$pic[51]++;
					} 
					echo "<th>",$pic[51],"</th>";
				 ?>
		</tr>
		<tr>
			<th>52</th>
			<th>Nil admirari之天秤</th>
			<th> <img src="52.png" height="300px"> </th>
			<?php
					if($touch == 52){
						$pic[52]++;
					} 
					echo "<th>",$pic[52],"</th>";
				 ?>
		</tr>
		<tr>
			<th>53</th>
			<th>重神機潘多拉</th>
			<th> <img src="53.png" height="300px"> </th>
			<?php
					if($touch == 53){
						$pic[53]++;
					} 
					echo "<th>",$pic[53],"</th>";
				 ?>
		</tr>
		<tr>
			<th>54</th>
			<th>錢進球場</th>
			<th> <img src="54.png" height="300px"> </th>
			<?php
					if($touch == 54){
						$pic[54]++;
					} 
					echo "<th>",$pic[54],"</th>";
				 ?>
		</tr>
		<tr>
			<th>55</th>
			<th>A.I.C.O -Incarnation</th>
			<th> <img src="55.png" height="300px"> </th>
			<?php
					if($touch == 55){
						$pic[55]++;
					} 
					echo "<th>",$pic[55],"</th>";
				 ?>
		</tr>
		<tr>
			<th>56</th>
			<th>棒球大聯盟 2nd</th>
			<th> <img src="56.png" height="300px"> </th>
			<?php
					if($touch == 56){
						$pic[56]++;
					} 
					echo "<th>",$pic[56],"</th>";
				 ?>
		</tr>
		<tr>
			<th>57</th>
			<th>極道超女</th>
			<th> <img src="57.png" height="300px"> </th>
			<?php
					if($touch == 57){
						$pic[57]++;
					} 
					echo "<th>",$pic[57],"</th>";
				 ?>
		</tr>
		<tr>
			<th>58</th>
			<th>蒼天之拳 REGENESIS</th>
			<th> <img src="58.png" height="300px"> </th>
			<?php
					if($touch == 58){
						$pic[58]++;
					} 
					echo "<th>",$pic[58],"</th>";
				 ?>
		</tr>
		<tr>
			<th>59</th>
			<th>Butlers 千年百年物語</th>
			<th> <img src="59.png" height="300px"> </th>
			<?php
					if($touch == 59){
						$pic[59]++;
					} 
					echo "<th>",$pic[59],"</th>";
				 ?>
		</tr>
		<tr>
			<th>60</th>
			<th>奴隸區 我與23個奴隸</th>
			<th> <img src="60.png" height="300px"> </th>
			<?php
					if($touch == 60){
						$pic[60]++;
					} 
					echo "<th>",$pic[60],"</th>";
				 ?>
		</tr>
		<tr>
			<th>61</th>
			<th>魔法少女網站</th>
			<th> <img src="61.png" height="300px"> </th>
			<?php
					if($touch == 61){
						$pic[61]++;
					} 
					echo "<th>",$pic[61],"</th>";
				 ?>
		</tr>
		<tr>
			<th>62</th>
			<th>Caligula</th>
			<th> <img src="62.png" height="300px"> </th>
			<?php
					if($touch == 62){
						$pic[62]++;
					} 
					echo "<th>",$pic[62],"</th>";
				 ?>
		</tr>
		<tr>
			<th>63</th>
			<th>命運石之門 0</th>
			<th> <img src="63.png" height="300px"> </th>
			<?php
					if($touch == 63){
						$pic[63]++;
					} 
					echo "<th>",$pic[63],"</th>";
				 ?>
		</tr>
		<tr>
			<th>64</th>
			<th>東京噬種 re</th>
			<th> <img src="64.png" height="300px"> </th>
			<?php
					if($touch == 64){
						$pic[64]++;
					} 
					echo "<th>",$pic[64],"</th>";
				 ?>
		</tr>
		<tr>
			<th>65</th>
			<th>多田君不戀愛</th>
			<th> <img src="65.png" height="300px"> </th>
			<?php
					if($touch == 65){
						$pic[65]++;
					} 
					echo "<th>",$pic[65],"</th>";
				 ?>
		</tr>
		<tr>
			<th>66</th>
			<th>女神異聞錄 5</th>
			<th> <img src="66.png" height="300px"> </th>
			<?php
					if($touch == 66){
						$pic[66]++;
					} 
					echo "<th>",$pic[66],"</th>";
				 ?>
		</tr>
		<tr>
			<th>67</th>
			<th>賽馬娘</th>
			<th> <img src="67.png" height="300px"> </th>
			<?php
					if($touch == 67){
						$pic[67]++;
					} 
					echo "<th>",$pic[67],"</th>";
				 ?>
		</tr>
		<tr>
			<th>68</th>
			<th>黃金神威</th>
			<th> <img src="68.png" height="300px"> </th>
			<?php
					if($touch == 68){
						$pic[68]++;
					} 
					echo "<th>",$pic[68],"</th>";
				 ?>
		</tr>
		<tr>
			<th>69</th>
			<th>足球小將 翼 新作</th>
			<th> <img src="69.png" height="300px"> </th>
			<?php
					if($touch == 69){
						$pic[69]++;
					} 
					echo "<th>",$pic[69],"</th>";
				 ?>
		</tr>
		<tr>
			<th>70</th>
			<th>惡魔戰線</th>
			<th> <img src="70.png" height="300px"> </th>
			<?php
					if($touch == 70){
						$pic[70]++;
					} 
					echo "<th>",$pic[70],"</th>";
				 ?>
		</tr>
		<tr>
			<th>71</th>
			<th>老子是魔法少女</th>
			<th> <img src="71.png" height="300px"> </th>
			<?php
					if($touch == 71){
						$pic[71]++;
					} 
					echo "<th>",$pic[71],"</th>";
				 ?>
		</tr>
		<tr>
			<th>72</th>
			<th>和風摖茶鹿楓堂</th>
			<th> <img src="72.png" height="300px"> </th>
			<?php
					if($touch == 72){
						$pic[72]++;
					} 
					echo "<th>",$pic[72],"</th>";
				 ?>
		</tr>
		<tr>
			<th>73</th>
			<th>Comic Girls</th>
			<th> <img src="73.png" height="300px"> </th>
			<?php
					if($touch == 73){
						$pic[73]++;
					} 
					echo "<th>",$pic[73],"</th>";
				 ?>
		</tr>
		<tr>
			<th>74</th>
			<th>ALICE or ALICE</th>
			<th> <img src="74.png" height="300px"> </th>
			<?php
					if($touch == 74){
						$pic[74]++;
					} 
					echo "<th>",$pic[74],"</th>";
				 ?>
		</tr>
		<tr>
			<th>75</th>
			<th>妖怪旅館營業中</th>
			<th> <img src="75.png" height="300px"> </th>
			<?php
					if($touch == 75){
						$pic[75]++;
					} 
					echo "<th>",$pic[75],"</th>";
				 ?>
		</tr>
		<tr>
			<th>76</th>
			<th>刀劍神域外傳 GGO</th>
			<th> <img src="76.png" height="300px"> </th>
			<?php
					if($touch == 76){
						$pic[76]++;
					} 
					echo "<th>",$pic[76],"</th>";
				 ?>
		</tr>
		<tr>
			<th>77</th>
			<th>魯邦三世 PART5</th>
			<th> <img src="77.png" height="300px"> </th>
			<?php
					if($touch == 77){
						$pic[77]++;
					} 
					echo "<th>",$pic[77],"</th>";
				 ?>
		</tr>
		<tr>
			<th>78</th>
			<th>鬼太郎 新作</th>
			<th> <img src="78.png" height="300px"> </th>
			<?php
					if($touch == 78){
						$pic[78]++;
					} 
					echo "<th>",$pic[78],"</th>";
				 ?>
		</tr>
		<tr>
			<th>79</th>
			<th>MEGALO BOX</th>
			<th> <img src="79.png" height="300px"> </th>
			<?php
					if($touch == 79){
						$pic[79]++;
					} 
					echo "<th>",$pic[79],"</th>";
				 ?>
		</tr>
		<tr>
			<th>80</th>
			<th>雷頓 懸疑偵探社</th>
			<th> <img src="80.png" height="300px"> </th>
			<?php
					if($touch == 80){
						$pic[80]++;
					} 
					echo "<th>",$pic[80],"</th>";
				 ?>
		</tr>
		<tr>
			<th>81</th>
			<th>LOST SONG</th>
			<th> <img src="81.png" height="300px"> </th>
			<?php
					if($touch == 81){
						$pic[81]++;
					} 
					echo "<th>",$pic[81],"</th>";
				 ?>
		</tr>
		<tr>
			<th>82</th>
			<th>剛彈創鬥者 潛綱大戰</th>
			<th> <img src="82.png" height="300px"> </th>
			<?php
					if($touch == 82){
						$pic[82]++;
					} 
					echo "<th>",$pic[82],"</th>";
				 ?>
		</tr>
		<tr>
			<th>83</th>
			<th>美南高校地球防衛部 HAPPY KISS!</th>
			<th> <img src="83.png" height="300px"> </th>
			<?php
					if($touch == 83){
						$pic[83]++;
					} 
					echo "<th>",$pic[83],"</th>";
				 ?>
		</tr>
		<tr>
			<th>84</th>
			<th>琴之森</th>
			<th> <img src="84.png" height="300px"> </th>
			<?php
					if($touch == 84){
						$pic[84]++;
					} 
					echo "<th>",$pic[84],"</th>";
				 ?>
		</tr>
		<tr>
			<th>85</th>
			<th>3D 女友</th>
			<th> <img src="85.png" height="300px"> </th>
			<?php
					if($touch == 85){
						$pic[85]++;
					} 
					echo "<th>",$pic[85],"</th>";
				 ?>
		</tr>
		<tr>
			<th>86</th>
			<th>最終休止符</th>
			<th> <img src="86.png" height="300px"> </th>
			<?php
					if($touch == 86){
						$pic[86]++;
					} 
					echo "<th>",$pic[86],"</th>";
				 ?>
		</tr>
		<tr>
			<th>87</th>
			<th>平交道時間</th>
			<th> <img src="87.png" height="300px"> </th>
			<?php
					if($touch == 87){
						$pic[87]++;
					} 
					echo "<th>",$pic[87],"</th>";
				 ?>
		</tr>
		<tr>
			<th>88</th>
			<th>敦君與女朋友</th>
			<th> <img src="88.png" height="300px"> </th>
			<?php
					if($touch == 88){
						$pic[88]++;
					} 
					echo "<th>",$pic[88],"</th>";
				 ?>
		</tr>
		<tr>
			<th>89</th>
			<th>實驗品家庭</th>
			<th> <img src="89.png" height="300px"> </th>
			<?php
					if($touch == 89){
						$pic[89]++;
					} 
					echo "<th>",$pic[89],"</th>";
				 ?>
		</tr>
		<tr>
			<th>90</th>
			<th>宇宙戰艦提拉米蘇</th>
			<th> <img src="90.png" height="300px"> </th>
			<?php
					if($touch == 90){
						$pic[90]++;
					} 
					echo "<th>",$pic[90],"</th>";
				 ?>
		</tr>
		<tr>
			<th>91</th>
			<th>立花館戀愛三角關係</th>
			<th> <img src="91.png" height="300px"> </th>
			<?php
					if($touch == 91){
						$pic[91]++;
					} 
					echo "<th>",$pic[91],"</th>";
				 ?>
		</tr>
	</table>
</body>
</html>