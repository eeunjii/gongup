<html>
<head>
<style type="text/css">
<!--
body{
scrollbar-face-color: blue;
scrollbar-shadow-color: cyan;
scrollbar-highlight-color: cyan;
scrollbar-3dlight-color: cyan;
scrollbar-darkshadow-color: blue;
scrollbar-track-color: cyan;
scrollbar-arrow-color: white
}
-->
</STYLE>
  <meta charset="utf-8">
  <title>Our Dream</title>
  <link rel="stylesheet" href="./css/login.css" />
</head>
<body>
  <div>
    <div class="asdf">

      <div style="display: inline-block; width: 300px">
        <a href="/" target="_self"><img src="./asdf_img/logo3.png" width="300" height="300"></a>

      </div>
      <div style="inline">
      </div>
      <div style="margin-top: -100px; margin-left: 100px; width: 1000px">
        <nav id="topmenu" style="display: inline-block; width: 1500px; margin-left:150px;">
          <ul>
            <li> <a class="menulink" href="index.php">Main</a> </li>
            <li> <a class="menulink" href="q@a.php">QA</a> </li>
            <li> <a class="menulink" href="lecture.php">Lecture</a> </li>
            <li> <a class="menulink" href="cam.php">Cam</a> </li>
            <li> <a class="menulink" href="note.php">Note</a> </li>
            <li> <a class="menulink" href="master.php">Master</a> </li>
            <li> <a class="menulink" href="login.php">Join/Login</a></li>
          </ul>
        </nav>


              <form name="login" method="post" action="./login1.php">
              <table border="1" width="350" height="100" align="left" style="font-color:white; margin-top:250px">
              <tr>
              <td style="color: black">아이디</td>
              <td><input type="text" name="user_id" /></td>
              </tr>
              <tr>
              <td style="color:black">비밀번호</td>
              <td><input type="password" name="user_pw" height="1000px"/></td>
              </tr>
              <tr>
              <td style="color:black">비밀번호 확인</td>
              <td><input type="password" name="user_pw2" /></td>
              </tr>
              <tr>
              <td style="color:black">주소</td>
              <td><input type="text" name="user_address" /></td>
              </tr>
              <tr>
              <td style="color:black">생년월일</td>
              <td><select name="user_birth_year">
              <option value="1998" selected>1998</option>
              <option value="1999" selected>1999</option>
              <option value="2000" selected>2000</option>
              <option value="2001" selected>2001</option>
              <option value="2002" selected>2002</option>
              <option value="2003" selected>2003</option>
              <option value="2004" selected>2004</option>
              </select>
              년
              <select name="user_birth_month">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              </select>
              월
              <select name="user_birth_day">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
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
              일
              </td>
              </tr>
              <tr>
              <td></td>
              <td><input type="submit" name="submit" value="완료" />
              <input type="reset" name="reset" value="리셋" /></td>
              </tr>
              </table>
              </form>
            </div>

          </div>


            <div id="login" style="margin-top:200px; margin-right:100px">
              <form name="login" method="post" action="./login2.php">
              <table border="1" width="250" height="100" align="right"
              style="font-color:white; margin-right:300px"  >
              <tr>
              <td style="color: black">아이디</td>
              <td><input type="text" name="user_id" /></td>
              </tr>
              <tr>
              <td style="color:black">비밀번호</td>
              <td><input type="password" name="user_pw" height="1000px"/></td>
              </tr>
              <tr>
              <td></td>
              <td><input type="submit" name="submit" value="로그인" />
              <input type="reset" name="reset" value="리셋" /></td>
              </tr>
              </table>
              </form>
            </div>

        </div>
      </body>
    </html>
