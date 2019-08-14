<h1>作業7 函式庫與檔案處理</h1>
<h2>3-1：時間與隨機的運用</h2>
	<h3>請設計一隻程式，由使用者輸入正整數M、N後，輸出M個範圍為0~N(含)的隨機奇數</h3>
	<img src="images/HW3_1_1.png" style="display:block; margin:auto;">

<h2>3-2：檔案的輸入與輸出</h2>
	<h3>資料下載：檔案內容如下</h3>
	<h3><a href="http://www.lkm543.site/Course/Cpp/Data/HW3_2.txt">http://www.lkm543.site/Course/Cpp/Data/HW3_2.txt</a></h3>
	<img src="images/HW3_2_1.png" style="display:block; margin:auto; width: 70%" >
	<h3>請設計一隻程式，可以讀取檔案裏頭的問題後逐行輸出，在由使用者回答後統整問題與答案到一個txt檔案裏頭。</h3>
	<img src="images/HW3_2_2.png" style="display:block; margin:auto;">
	<h3>輸出檔案應該如下：</h3>
	<img src="images/HW3_2_3.png" style="display:block; margin:auto; width: 70%" >
	<h3>Hint：getline(file,str) , getline(cin,str) ,file <<‘n’</h3>


<h2>3-3：隨機與常態分佈</h2>
	<h3>下圖為常態分佈的一個典型圖，橫軸為標準差、縱軸為機率</h3>
	<img src="images/HW3_4_1.png" style="display:block; margin:auto;">
	<h3>通常為了簡化常態分布，我們以擲硬幣來觀察常態分布的情形。因此在這裡請設計一隻程式，輸入M、N後可以模擬擲M次、每次擲N枚硬幣時其正面出現次數的數量比較。(假設正反面出現機率皆為1/2)</h3>
	<img src="images/HW3_4_2.png" style="display:block; margin:auto;">
	<h3>Hint：用rand()%2來定義，若rand()%2=1為正面、rand()%2=1為反面。如此一來就可以計算正反面出現的次數。</h3>
	<h3>Optional：標準差(σ)=√(np(1-p))，其中n為樣本數、p為機率，有空可以驗證看看落在±σ、±2σ、±3σ中的機率，是否真的為統計上所述的68%、95%、99.7%</h3>

<h2>3-4：簡易編碼學</h2>
	<h3>資料下載：</h3>
	<h3><a href="http://www.lkm543.site/Course/Cpp/Data/HW3_5_Encoded.txt">http://www.lkm543.site/Course/Cpp/Data/HW3_5_Encoded.txt</a></h3>
	<h3>上面檔案為一個文字檔，其內容是以Ascii Table編碼為如下</h3>	
	<img src="images/HW3_5_1.png" style="display:block; margin:auto; width: 70%" >
	<h3>請依照Ascii轉換表轉換成英文後輸出成一個txt檔案</h3>
	<img src="images/HW3_5_2.png" style="display:block; margin:auto; width: 70%" >
	<h3>Hint: file >> asciiCode、Ascii Table</h3>

<h2>3-5：大老二發牌隨機程式</h2>
	<h3>請撰寫一個程式，使其可以隨機發牌給四位玩家大老二的牌組(意即將撲克牌52張牌平均分給四位)，請注意出現的牌不得有重複的部分。</h3>
	<img src="images/HW3_5_3.png" style="display:block; margin:auto; width: 70%" >

<br>
<br>
<br>
