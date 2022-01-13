 function addEvent(element, event, fn) {
    if (element.addEventListener) {
        element.addEventListener(event, fn, false);
    } else if (element.attachEvent) {
        element.attachEvent('on' + event, fn);
    }
}

//this function will work cross-browser for loading scripts asynchronously
function loadScript(src, callback) {
  var s,
      r,
      t;
  r = false;
  s = document.createElement('script');
  s.type = 'text/javascript';
  s.src = src;
  s.onload = s.onreadystatechange = function() {
    //console.log( this.readyState ); //uncomment this line to see which ready states are called.
    if ( !r && (!this.readyState || this.readyState == 'complete') )
    {
      r = true;
      if (callback !== undefined) {
        callback();
      }
    }
  };
  t = document.getElementsByTagName('script')[0];
  t.parentNode.insertBefore(s, t);
}

addEvent(window, 'load', function(){ loadScript(
        'https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js', 
        function () { 
			loadScript('vendor/js/feather.min.js'),
				loadScript('vendor/js/perfect-scrollbar.jquery.min.js'),
				loadScript('vendor/js/sidebarmenu.js'), 
				
			loadScript('vendor/js/popper/popper.min.js'),
			loadScript('vendor/js/bootstrap.min.js'),
				loadScript('vendor/js/app-style-switcher.js'),
				loadScript('vendor/js/d3.min.js'),
				loadScript('vendor/js/c3.min.js'),
				loadScript('vendor/js/chartist.min.js'),
				loadScript('vendor/js/chartist-plugin-tooltip.min.js'),
				loadScript('vendor/js/jquery-jvectormap-2.0.2.min.js'),
				loadScript('vendor/js/jquery.dataTables.js'),
				loadScript('vendor/js/bootstrap-toggle.min.js'),
				loadScript('vendor/js/dashboard1.min.js'),
				loadScript('vendor/alert/sweetalert2@11.js')				
		} );
});