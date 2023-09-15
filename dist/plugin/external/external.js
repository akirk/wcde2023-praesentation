/*
 * external.js
 * Cal Evans <cal@calevans.com>
 * (c) Evans Internet Construction Company, Inc.
 * Released under the MIT license
 * Load external files into a reveal.js presentation.
 *
 * This is a reveal.js plugin to load external html files. It replaces the
 * content of any element with a data-external="file.ext" with the contents
 * of file.ext.
 *
 * This started life as markdown.js. Thank you to whomever wrote it.
 * Small mods by JJ Merelo, github.com/JJ
 */

(function(){
    loadExternal();

    function loadExternal() {

	var sections = document.querySelectorAll( '[data-external]');

	for( var i = 0, len = sections.length; i < len; i++ ) {

	    var this_section = sections[i];

	    if( this_section.getAttribute( 'data-external' ).length ) {

		var xhr = new XMLHttpRequest(),
		url = this_section.getAttribute( 'data-external' );

		// see https://developer.mozilla.org/en-US/docs/Web/API/element.getAttribute#Notes
		xhr.onreadystatechange = function() {
		    if( xhr.readyState === 4 ) {
			// file protocol yields status code 0 (useful for local debug, mobile applications etc.)
			if ( ( xhr.status >= 200 && xhr.status < 300 ) || xhr.status === 0 ) {

			    this_section.innerHTML = xhr.responseText;


			}
		    }
		};

		xhr.open( 'GET', url, false );

		try {
		    xhr.send();
		}
		catch ( e ) {
		}

	    }

	}

	return;
    }

})();
