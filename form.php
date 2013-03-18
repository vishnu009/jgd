<!Doctype html>
<meta charset="utf8">
<head>
<title>PHP form actions </title>
<style type="text/css">
body{
	display: inline-block;
}
</style>
</head>
<body>
	<form action="insert.php" method="post">
		<label>Enter your  First Name :
			<input type="text" id="fname" name="fname"/>
			</label><br/>
			<label>Enter your Last Name :
			<input type="text" id="lname" name="lname"/><br/>
			</label>
			<div>
				<label for="checkbox">Java</label>
				<input type="checkbox"name="course[]"id="course">
				<label for="checkbox">PHP</label>
				<input type="checkbox"name="course[]"id="course">
				<label for="checkbox">C++</label>
				<input type="checkbox"name="course[]"id="course">
				<label for="checkbox">RUBY</label>
				<input type="checkbox"name="course[]"id="course">
				<label for="checkbox">ASP</label>
				<input type="checkbox"name="course[]"id="course">

			</div>
			<div>
				<select name="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</div>
			<div>
				<label for="comments">Comments</label>
				<textarea rows="10" cols="10" name="comments" id="comments"></textarea>
			</div>
			<div>
					<span class="label-select">Date of birth</span>
					<label class="hidden" for="birthdate">Birth date</label>
					<select id="birthdate" name="birthdate">
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
					<label class="hidden" for="birthmonth">Birth month</label>
					<select id="birthmonth" name="birthmonth">
						<option value="January">January</option>
						<option value="February">February</option>
						<option value="March">March</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November">November</option>
						<option value="December">December</option>
					</select>
					<label class="hidden" for="birthyear">Birth year</label>
					<select id="birthyear" name="birthyear">
						<option value="2000">2000</option>
						<option value="1999">1999</option>
						<option value="1998">1998</option>
						<option value="1997">1997</option>
						<option value="1996">1996</option>
						<option value="1995">1995</option>
						<option value="1994">1994</option>
						<option value="1993">1993</option>
						<option value="1992">1992</option>
						<option value="1991">1991</option>
						<option value="1990">1990</option>
						<option value="1999">1989</option>
						<option value="1998">1988</option>
						<option value="1997">1987</option>
						<option value="1996">1986</option>
						<option value="1995">1985</option>
						<option value="1994">1984</option>
						<option value="1993">1983</option>
						<option value="1992">1982</option>
						<option value="1991">1981</option>
						<option value="1990">1980</option>
						<option value="1999">1979</option>
						<option value="1998">1978</option>
						<option value="1997">1977</option>
						<option value="1996">1976</option>
						<option value="1995">1975</option>
						<option value="1994">1974</option>
						<option value="1993">1973</option>
						<option value="1992">1972</option>
						<option value="1991">1971</option>
						<option value="1990">1970</option>
						<option value="1999">1969</option>
						<option value="1998">1968</option>
						<option value="1997">1967</option>
						<option value="1996">1966</option>
						<option value="1995">1965</option>
						<option value="1994">1964</option>
						<option value="1993">1963</option>
						<option value="1992">1962</option>
						<option value="1991">1961</option>
						<option value="1990">1960</option>
						<option value="1999">1959</option>
						<option value="1998">1958</option>
						<option value="1997">1957</option>
						<option value="1996">1956</option>
						<option value="1995">1955</option>
						<option value="1994">1954</option>
						<option value="1993">1953</option>
						<option value="1992">1952</option>
						<option value="1991">1951</option>
						<option value="1990">1950</option>
						<option value="1999">1949</option>
						<option value="1998">1948</option>
						<option value="1997">1947</option>
						<option value="1996">1946</option>
						<option value="1995">1945</option>
						<option value="1994">1944</option>
						<option value="1993">1943</option>
						<option value="1992">1942</option>
						<option value="1991">1941</option>
						<option value="1990">1940</option>
					</select>
				</div>
				<div>
					<label for="something" name="lang">language</label>
					<input type="radio"name="lang"value="java">Java
					<input type="radio"name="lang"value="php">PHP
				</div>
				<div>
					<label for="somecheckbox" name="favourite"></label>
					<input type="checkbox"name="favourite[]" value="hbp">HBP
					<input type="checkbox"name="favourite[]" value="lbp">LBP
					<input type="checkbox"name="favourite[]" value="mil">Million
					<input type="checkbox"name="favourite[]" value="bil">Billion
					<input type="checkbox"name="favourite[]" value="til">Trillion

				</div>
			<input type="submit" value="Go" />
	</form>

</body>
</html>


