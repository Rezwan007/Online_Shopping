<head>
<script>
function abc()
{
var arr=new Array("usepics/neck1.jpg","usepics/ban9.jpg","usepics/555.jpg","usepics/ban10.jpg","usepics/akkriti-banner.jpg");
var ind=eval(document.f1.h1.value);
document.img.src=arr[ind];
document.f1.h1.value=ind+1;
if(document.f1.h1.value==5)
{
document.f1.h1.value=0;
}
}
setInterval("abc()",3000);
</script>
</head>
<body>
<div id="RightPart">
  <div id="Page"><img src="usepics/akkriti-banner.jpg" alt="" width="669" height="210" name="img"/>
  <form name="f1">
  <input type="hidden" name="h1" value="0" />
  </form>
  <div><br/><center><h2><font face="Lucida Handwriting"  color="#00CCFF">Latest Fashion News</font></h2></center></div>
 <table border="0">
 <tr><td> 
<img src="usepics/news1.jpg" width="150" height="180"/>
</td>
<td colspan="2">
<font face="Lucida Handwriting" size="+1" color="#0000FF">
Miss Georgia is crowned Miss America 2016</font><br>
<font face="Comic Sans MS"><strong>Miss Georgia Betty Cantrell reacts after being crowned Miss America 2016 at Boardwalk Hall in Atlantic City, New Jersey, September 13, 2015.Cantrell rode an opera performance of "Tu Tu Piccolo Iddio" from "Madame Butterfly" to the title in Atlantic City's Boardwalk Hall on Sunday night, besting 51 other competitors. She won a preliminary competition earlier in the week, also with an opera performance. CREDIT:Mark Makela/Reuters.</strong></font></td>
</tr>
<tr>
<td>
<br>
<img src="usepics/news2.jpg" / width="200" height="180"><br>
<font  color="#FF66CC" face="Lucida Handwriting">Miss Universe</font><br>
<font face="Comic Sans MS"><strong>April 6, 2016<br>
The current Miss Universe is Pia Wurtzbach of the Philippines who was crowned on 20 December 2015 in Las Vegas, Nevada, USA.</strong></font></td>

<td>
<img src="usepics/news3.jpg" / width="240" height="180"><br>
<font  color="#FF66CC" face="Lucida Handwriting">Miss Earth </font><br>

<font face="Comic Sans MS"><strong>April 6, 2016<br>
The current Miss Earth is Angelia Ong of the Philippines who was crowned on 5 December 2015 in Vienna, Austria. The Miss Earth 2016 pageant will be held in October 2016.</strong></font></td>
<td>
<img src="usepics/news4.jpg" / width="200" height="180"><br>
<font  color="#FF66CC" face="Lucida Handwriting">Miss USA</font><br>

<font face="Comic Sans MS"><strong>April 6, 2016<br>
The current Miss USA is Olivia Jordan of Oklahoma who was crowned on July 12, 2015 in Baton Rouge, Louisiana. Traditionally, Miss USA lives in New York City during her reign.</strong></font></td>
</tr>
</table>
  </div>
  </div>
  </body>