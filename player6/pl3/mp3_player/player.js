if(typeof(p) == 'undefined') p = {}
p.m = {
	x: null,
	y: null,
	g: function() {
		var all = document.getElementsByTagName('a')
		for (var i = 0, o; o = all[i]; i++) {
			if(o.href.match(/\.mp3$/i)) {
				var r = document.createElement('img')
				r.src = 'http://full_ path_ to_ play.gif'; r.title = 'Play'
				r.height = r.width = 20
				r.style.marginRight = '0.2em'
				r.style.cursor = 'pointer'
				r.style.verticalAlign = 'middle'
				r.style.border = '0'
				r.onclick = p.m.makeToggle(r, o.href)
				o.parentNode.insertBefore(r, o)
	}}},
	toggle: function(r, u) {
		if (p.m.x == r) p.m.destroy()
		else {
			if (p.m.x) p.m.destroy()
			var a = r.nextSibling
			r.src = 'http://full_path_to_stop.gif'; r.title = 'Stop'; p.m.x = r;
			p.m.y = document.createElement('span')
			p.m.y.innerHTML = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"' +
			'codebase="http://full_ path_ to_ swflash.cab#version=6,0,0,0"' +
			'width="1" height="1" id="y">' +
			'<param name="wmode" value="transparent" />' +
			'<param name="allowScriptAccess" value="sameDomain" />' +
			'<param name="flashVars" value="theLink='+u+'" />' +
			'<param name="movie" value="http://full_path_to_mp3.swf" />' +
			'<embed src="http://full_path_to_mp3.swf" flashVars="theLink='+u+'"'+
			'wmode="transparent" width="1" height="1" name="y"' +
			'allowScriptAccess="sameDomain" type="application/x-shockwave-flash"' +
			' pluginspage="http://www.macromedia.com/go/getflashplayer" /></object>'
			r.parentNode.insertBefore(p.m.y, r.nextSibling)
	}},
	destroy: function() {
		p.m.x.src = 'http://full_path_to_play2.gif'; p.m.x = null
		p.m.y.removeChild(p.m.y.firstChild); p.m.y.parentNode.removeChild(p.m.y); p.m.y = null
	},
	makeToggle: function(r, u) { return function(){ p.m.toggle(r, u) }}
}

p.addLoadEvent = function(f) { var old = window.onload
	if (typeof old != 'function') window.onload = f
	else { window.onload = function() { old(); f() }}
}

p.addLoadEvent(p.m.g)
