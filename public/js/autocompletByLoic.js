var tags = [
	      "ActionScript",
	      "AppleScript",
	      "Asp",
	      "BASIC",
	      "C",
	      "C++",
	      "Clojure",
	      "COBOL",
	      "ColdFusion",
	      "Erlang",
	      "Fortran",
	      "Groovy",
	      "Haskell",
	      "Java",
	      "JavaScript",
	      "Lisp",
	      "Perl",
	      "PHP",
	      "Python",
	      "Ruby",
	      "Scala",
	      "Julie",
	      "Cheval",
	      "Jazz",
	      "Obcheck",
	      "Amandine",
	      "Loïc",
	      "Alexandre",
	      "Pokemon",
	      "Scheme"
	    ];
		$( ".type-zone" ).autocomplete({
	  		source: function( request, response ) {
			var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
			response( $.grep( tags, function( item ){
				return matcher.test( item );
			}) );
	     }
	    });
