function selcoPost(url, abone)
	{
		xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function()
			{
				if (xhr.readyState == 4 && xhr.status == 200)
				{
					document.getElementById('icerik').innerHTML = xhr.responseText.trim();
				}
			}
			xhr.open("GET", "ajax/post.php?url=" + encodeURIComponent(url) + "&abone="+ encodeURIComponent(abone), true);
			xhr.send();
			document.getElementById('icerik').innerHTML = "<br><center><img src='img/loading.gif' /></center><br>";
	}
	
function selcoPage(url, abone, cekim, gun)
	{
		xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function()
			{
				if (xhr.readyState == 4 && xhr.status == 200)
				{
					document.getElementById('icerik').innerHTML = xhr.responseText.trim();
				}
			}
			xhr.open("GET", "ajax/sayfa.php?url=" + encodeURIComponent(url) + "&cekim=" + encodeURIComponent(cekim) + "&gun=" + encodeURIComponent(gun) + "&abone="+ encodeURIComponent(abone), true);
			xhr.send();
			document.getElementById('icerik').innerHTML = "<br><center><img src='img/loading.gif' /></center><br>";
	}
	
function selcoSub(url, abone, cekim, gun)
	{
		xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function()
			{
				if (xhr.readyState == 4 && xhr.status == 200)
				{
					document.getElementById('icerik').innerHTML = xhr.responseText.trim();
				}
			}
			xhr.open("GET", "ajax/abone.php?url=" + encodeURIComponent(url) + "&cekim=" + encodeURIComponent(cekim) + "&gun=" + encodeURIComponent(gun) + "&abone="+ encodeURIComponent(abone), true);
			xhr.send();
			document.getElementById('icerik').innerHTML = "<br><center><img src='img/loading.gif' /></center><br>";
	}
	
function selcoTwitter(url, abone, tur)
	{
		xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function()
			{
				if (xhr.readyState == 4 && xhr.status == 200)
				{
					document.getElementById('icerik').innerHTML = xhr.responseText.trim();
				}
			}
			xhr.open("GET", "ajax/twitter.php?url=" + encodeURIComponent(url) + "&abone=" + encodeURIComponent(abone) + "&tur="+ encodeURIComponent(tur), true);
			xhr.send();
			document.getElementById('icerik').innerHTML = "<br><center><img src='img/loading.gif' /></center><br>";
	}

function selcoListe(url)
	{
		xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function()
			{
				if (xhr.readyState == 4 && xhr.status == 200)
				{
					document.getElementById('icerik').innerHTML = xhr.responseText.trim();
				}
			}
			xhr.open("GET", "ajax/liste.php?url=" + encodeURIComponent(url), true);
			xhr.send();
			document.getElementById('icerik').innerHTML = "<br><center><img src='img/loading.gif' /></center><br>";
	}

function selcoAsk(url, abone)
	{
		xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function()
			{
				if (xhr.readyState == 4 && xhr.status == 200)
				{
					document.getElementById('icerik').innerHTML = xhr.responseText.trim();
				}
			}
			xhr.open("GET", "ajax/ask.php?url=" + encodeURIComponent(url) + "&abone="+ encodeURIComponent(abone), true);
			xhr.send();
			document.getElementById('icerik').innerHTML = "<br><center><img src='img/loading.gif' /></center><br>";
	}