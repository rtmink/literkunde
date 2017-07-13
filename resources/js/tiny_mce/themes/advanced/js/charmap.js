/**
 * charmap.js
 *
 * Copyright 2009, Moxiecode Systems AB
 * Released under LGPL License.
 *
 * License: http://tinymce.moxiecode.com/license
 * Contributing: http://tinymce.moxiecode.com/contributing
 */

tinyMCEPopup.requireLangPack();

var charmap = [
// gone
	//['&amp;',     '&#38;',   true, 'ampersand'],
	//['&quot;',    '&#34;',   true, 'quotation mark'],
	
// alphabetical special chars
	['&Agrave;',  '&#192;',  true, 'A - grave'],
	['&Aacute;',  '&#193;',  true, 'A - acute'],
	['&Acirc;',   '&#194;',  true, 'A - circumflex'],
	['&Atilde;',  '&#195;',  true, 'A - tilde'],
	['&Auml;',    '&#196;',  true, 'A - diaeresis'],
	['&Aring;',   '&#197;',  true, 'A - ring above'],
	['&AElig;',   '&#198;',  true, 'ligature AE'],
	['&Ccedil;',  '&#199;',  true, 'C - cedilla'],
	['&Egrave;',  '&#200;',  true, 'E - grave'],
	['&Eacute;',  '&#201;',  true, 'E - acute'],
	['&Ecirc;',   '&#202;',  true, 'E - circumflex'],
	['&Euml;',    '&#203;',  true, 'E - diaeresis'],
	['&Igrave;',  '&#204;',  true, 'I - grave'],
	['&Iacute;',  '&#205;',  true, 'I - acute'],
	['&Icirc;',   '&#206;',  true, 'I - circumflex'],
	['&Iuml;',    '&#207;',  true, 'I - diaeresis'],
	['&ETH;',     '&#208;',  true, 'ETH'],
	['&Ntilde;',  '&#209;',  true, 'N - tilde'],
	['&Ograve;',  '&#210;',  true, 'O - grave'],
	['&Oacute;',  '&#211;',  true, 'O - acute'],
	['&Ocirc;',   '&#212;',  true, 'O - circumflex'],
	['&Otilde;',  '&#213;',  true, 'O - tilde'],
	['&Ouml;',    '&#214;',  true, 'O - diaeresis'],
	['&Oslash;',  '&#216;',  true, 'O - slash'],
	['&OElig;',   '&#338;',  true, 'ligature OE'],
	['&Scaron;',  '&#352;',  true, 'S - caron'],
	['&Ugrave;',  '&#217;',  true, 'U - grave'],
	['&Uacute;',  '&#218;',  true, 'U - acute'],
	['&Ucirc;',   '&#219;',  true, 'U - circumflex'],
	['&Uuml;',    '&#220;',  true, 'U - diaeresis'],
	['&Yacute;',  '&#221;',  true, 'Y - acute'],
	['&Yuml;',    '&#376;',  true, 'Y - diaeresis'],
	['&THORN;',   '&#222;',  true, 'THORN'],
	['&agrave;',  '&#224;',  true, 'a - grave'],
	['&aacute;',  '&#225;',  true, 'a - acute'],
	['&acirc;',   '&#226;',  true, 'a - circumflex'],
	['&atilde;',  '&#227;',  true, 'a - tilde'],
	['&auml;',    '&#228;',  true, 'a - diaeresis'],
	['&aring;',   '&#229;',  true, 'a - ring above'],
	['&aelig;',   '&#230;',  true, 'ligature ae'],
	['&ccedil;',  '&#231;',  true, 'c - cedilla'],
	['&egrave;',  '&#232;',  true, 'e - grave'],
	['&eacute;',  '&#233;',  true, 'e - acute'],
	['&ecirc;',   '&#234;',  true, 'e - circumflex'],
	['&euml;',    '&#235;',  true, 'e - diaeresis'],
	['&igrave;',  '&#236;',  true, 'i - grave'],
	['&iacute;',  '&#237;',  true, 'i - acute'],
	['&icirc;',   '&#238;',  true, 'i - circumflex'],
	['&iuml;',    '&#239;',  true, 'i - diaeresis'],
	['&eth;',     '&#240;',  true, 'eth'],
	['&ntilde;',  '&#241;',  true, 'n - tilde'],
	['&ograve;',  '&#242;',  true, 'o - grave'],
	['&oacute;',  '&#243;',  true, 'o - acute'],
	['&ocirc;',   '&#244;',  true, 'o - circumflex'],
	['&otilde;',  '&#245;',  true, 'o - tilde'],
	['&ouml;',    '&#246;',  true, 'o - diaeresis'],
	['&oslash;',  '&#248;',  true, 'o slash'],
	['&oelig;',   '&#339;',  true, 'ligature oe'],
	['&scaron;',  '&#353;',  true, 's - caron'],
	['&ugrave;',  '&#249;',  true, 'u - grave'],
	['&uacute;',  '&#250;',  true, 'u - acute'],
	['&ucirc;',   '&#251;',  true, 'u - circumflex'],
	['&uuml;',    '&#252;',  true, 'u - diaeresis'],
	['&yacute;',  '&#253;',  true, 'y - acute'],
	['&thorn;',   '&#254;',  true, 'thorn'],
	['&yuml;',    '&#255;',  true, 'y - diaeresis'],
	['',    	  '&#32;',   true, 'blank'],
	['&Alpha;',   '&#913;',  true, 'Alpha'],
	['&Beta;',    '&#914;',  true, 'Beta'],
	['&Gamma;',   '&#915;',  true, 'Gamma'],
	['&Delta;',   '&#916;',  true, 'Delta'],
	['&Epsilon;', '&#917;',  true, 'Epsilon'],
	['&Zeta;',    '&#918;',  true, 'Zeta'],
	['&Eta;',     '&#919;',  true, 'Eta'],
	['&Theta;',   '&#920;',  true, 'Theta'],
	['&Iota;',    '&#921;',  true, 'Iota'],
	['&Kappa;',   '&#922;',  true, 'Kappa'],
	['&Lambda;',  '&#923;',  true, 'Lambda'],
	['&Mu;',      '&#924;',  true, 'Mu'],
	['&Nu;',      '&#925;',  true, 'Nu'],
	['&Xi;',      '&#926;',  true, 'Xi'],
	['&Omicron;', '&#927;',  true, 'Omicron'],
	['&Pi;',      '&#928;',  true, 'Pi'],
	['&Rho;',     '&#929;',  true, 'Rho'],
	['&Sigma;',   '&#931;',  true, 'Sigma'],
	['&Tau;',     '&#932;',  true, 'Tau'],
	['&Upsilon;', '&#933;',  true, 'Upsilon'],
	['&Phi;',     '&#934;',  true, 'Phi'],
	['&Chi;',     '&#935;',  true, 'Chi'],
	['&Psi;',     '&#936;',  true, 'Psi'],
	['&Omega;',   '&#937;',  true, 'Omega'],
	['',    	  '&#32;',   true, 'blank'],
	['&alpha;',   '&#945;',  true, 'alpha'],
	['&beta;',    '&#946;',  true, 'beta'],
	['&gamma;',   '&#947;',  true, 'gamma'],
	['&delta;',   '&#948;',  true, 'delta'],
	['&epsilon;', '&#949;',  true, 'epsilon'],
	['&zeta;',    '&#950;',  true, 'zeta'],
	['&eta;',     '&#951;',  true, 'eta'],
	['&theta;',   '&#952;',  true, 'theta'],
	['&iota;',    '&#953;',  true, 'iota'],
	['&kappa;',   '&#954;',  true, 'kappa'],
	['&lambda;',  '&#955;',  true, 'lambda'],
	['&mu;',      '&#956;',  true, 'mu'],
	['&nu;',      '&#957;',  true, 'nu'],
	['&xi;',      '&#958;',  true, 'xi'],
	['&omicron;', '&#959;',  true, 'omicron'],
	['&pi;',      '&#960;',  true, 'pi'],
	['&rho;',     '&#961;',  true, 'rho'],
	['&sigmaf;',  '&#962;',  true, 'final sigma'],
	['&sigma;',   '&#963;',  true, 'sigma'],
	['&tau;',     '&#964;',  true, 'tau'],
	['&upsilon;', '&#965;',  true, 'upsilon'],
	['&phi;',     '&#966;',  true, 'phi'],
	['&chi;',     '&#967;',  true, 'chi'],
	['&psi;',     '&#968;',  true, 'psi'],
	['&omega;',   '&#969;',  true, 'omega'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	
// quotations
	['&lsaquo;',  '&#8249;', true, 'single left-pointing angle quotation mark'],
	['&rsaquo;',  '&#8250;', true, 'single right-pointing angle quotation mark'],
	['&laquo;',   '&#171;',  true, 'left pointing guillemet'],
	['&raquo;',   '&#187;',  true, 'right pointing guillemet'],
	['&lsquo;',   '&#8216;', true, 'left single quotation mark'],
	['&rsquo;',   '&#8217;', true, 'right single quotation mark'],
	['&ldquo;',   '&#8220;', true, 'left double quotation mark'],
	['&rdquo;',   '&#8221;', true, 'right double quotation mark'],
	['&sbquo;',   '&#8218;', true, 'single low-9 quotation mark'],
	['&bdquo;',   '&#8222;', true, 'double low-9 quotation mark'],
	['&lt;',      '&#60;',   true, 'less-than sign'],
	['&gt;',      '&#62;',   true, 'greater-than sign'],
	['&le;',      '&#8804;', true, 'less-than or equal to'],
	['&ge;',      '&#8805;', true, 'greater-than or equal to'],
	['&ndash;',   '&#8211;', true, 'en dash'],
	['&mdash;',   '&#8212;', true, 'em dash'],
	['&macr;',    '&#175;',  true, 'macron'],
	['&oline;',   '&#8254;', true, 'overline'],
	['&curren;',  '&#164;',  true, 'currency sign'],
	['&brvbar;',  '&#166;',  true, 'broken bar'],
	['&uml;',     '&#168;',  true, 'diaeresis'],
	['&iexcl;',   '&#161;',  true, 'inverted exclamation mark'],
	['&iquest;',  '&#191;',  true, 'turned question mark'],
	['&circ;',    '&#710;',  true, 'circumflex accent'],
	['&tilde;',   '&#732;',  true, 'small tilde'],
	['&deg;',     '&#176;',  true, 'degree sign'],
	['&minus;',   '&#8722;', true, 'minus sign'],
	['&plusmn;',  '&#177;',  true, 'plus-minus sign'],
	['&divide;',  '&#247;',  true, 'division sign'],
	['&frasl;',   '&#8260;', true, 'fraction slash'],
	['&times;',   '&#215;',  true, 'multiplication sign'],
	['&sup1;',    '&#185;',  true, 'superscript one'],
	['&sup2;',    '&#178;',  true, 'superscript two'],
	['&sup3;',    '&#179;',  true, 'superscript three'],
	['&frac14;',  '&#188;',  true, 'fraction one quarter'],
	['&frac12;',  '&#189;',  true, 'fraction one half'],
	['&frac34;',  '&#190;',  true, 'fraction three quarters'],
	['&frac13;',  '&#8531;',  true, 'fraction one third'],
    ['&frac23;',  '&#8532;',  true, 'fraction two thirds'],
	['&frac18;',  '&#8539;',  true, 'fraction one eight'],
    ['&frac38;',  '&#8540;',  true, 'fraction three eights'],
    ['&frac58;',  '&#8541;',  true, 'fraction five eights'],
    ['&frac78;',  '&#8542;',  true, 'fraction seven eights'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	
// math / logical
	['&fnof;',    '&#402;',  true, 'function / florin'],
	['&int;',     '&#8747;', true, 'integral'],
	['-',  		  '&#8992;', true, 'top half integral'],
    ['-',  		  '&#8993;', true, 'bottom half integral'],
	['&sum;',     '&#8721;', true, 'n-ary sumation'],
	['&infin;',   '&#8734;', true, 'infinity'],
	['&radic;',   '&#8730;', true, 'square root'],
	['&sim;',     '&#8764;', true, 'similar to'],
	['&cong;',    '&#8773;', true, 'approximately equal to'],
	['&asymp;',   '&#8776;', true, 'almost equal to'],
	['&ne;',      '&#8800;', true, 'not equal to'],
	['&equiv;',   '&#8801;', true, 'identical to'],
	['&isin;',    '&#8712;', true, 'element of'],
	['&notin;',   '&#8713;', true, 'not an element of'],
	['&ni;',      '&#8715;', true, 'contains as member'],
	['&prod;',    '&#8719;', true, 'n-ary product'],
	['&and;',     '&#8743;', true, 'logical and'],
	['&or;',      '&#8744;', true, 'logical or'],
	['&not;',     '&#172;',  true, 'not sign'],
	['&cap;',     '&#8745;', true, 'intersection'],
	['&cup;',     '&#8746;', true, 'union'],
	['-',  		  '&#8494;', true, 'estimated symbol'],
	['&part;',    '&#8706;', true, 'partial differential'],
	['&forall;',  '&#8704;', true, 'for all'],
	['&exist;',   '&#8707;', true, 'there exists'],
	['&empty;',   '&#8709;', true, 'diameter'],
	['&nabla;',   '&#8711;', true, 'backward difference'],
	['&lowast;',  '&#8727;', true, 'asterisk operator'],
	['&prop;',    '&#8733;', true, 'proportional to'],
	['-',  		  '&#8735;', true, 'right angle sign'],
	['&ang;',     '&#8736;', true, 'angle'],
	['&there4;',  '&#8756;', true, 'therefore'],
	['&sub;',     '&#8834;', true, 'subset of'],
	['&sup;',     '&#8835;', true, 'superset of'],
	['&nsub;',    '&#8836;', true, 'not a subset of'],
	['&sube;',    '&#8838;', true, 'subset of or equal to'],
	['&supe;',    '&#8839;', true, 'superset of or equal to'],
	['&oplus;',   '&#8853;', true, 'circled plus'],
	['&otimes;',  '&#8855;', true, 'circled times'],
	['&perp;',    '&#8869;', true, 'perpendicular'],
	['&sdot;',    '&#8901;', true, 'dot operator'],
	['&lceil;',   '&#8968;', true, 'left ceiling'],
	['&rceil;',   '&#8969;', true, 'right ceiling'],
	['&lfloor;',  '&#8970;', true, 'left floor'],
	['&rfloor;',  '&#8971;', true, 'right floor'],
	['&lang;',    '&#9001;', true, 'left-pointing angle bracket'],
	['&rang;',    '&#9002;', true, 'right-pointing angle bracket'],
	['&loz;',     '&#9674;', true, 'lozenge'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
		
// finance
	['&cent;',    '&#162;',  true, 'Cent sign'],
	['&euro;',    '&#8364;', true, 'Euro sign'],
	['&pound;',   '&#163;',  true, 'Pound sign'],
	['&yen;',     '&#165;',  true, 'Yen sign'],
	['&curren;',  '&#164;',  true, 'General currency sign'],
	['',     	  '&#8355;', true, 'French franc sign'],
	['',	      '&#8356;', true, 'Lira sign'],
	['',	      '&#8359;', true, 'Peseta sign'],
	['',     	  '&#8362;', true, 'New sheqel sign'],
	['',	      '&#8363;', true, 'Dong sign'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
// signs
	['&copy;',    '&#169;',  true, 'copyright sign'],
	['&reg;',     '&#174;',  true, 'registered sign'],
	['&trade;',   '&#8482;', true, 'trade mark sign'],
	['&permil;',  '&#8240;', true, 'per mille sign'],
	['&micro;',   '&#181;',  true, 'micro sign'],
	['&middot;',  '&#183;',  true, 'middle dot'],
	['&bull;',    '&#8226;', true, 'bullet'],
	['&hellip;',  '&#8230;', true, 'three dot leader'],
	['&prime;',   '&#8242;', true, 'minutes / feet'],
	['&Prime;',   '&#8243;', true, 'seconds / inches'],
	['&sect;',    '&#167;',  true, 'section sign'],
	['&para;',    '&#182;',  true, 'paragraph sign'],
	['&szlig;',   '&#223;',  true, 'sharp s / ess-zed'],
	['',	      '&#8486;', true, 'ohm sign'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],


// undefined
	['&acute;',   '&#180;',  true, 'acute accent'],
	['&cedil;',   '&#184;',  true, 'cedilla'],
	['&ordf;',    '&#170;',  true, 'feminine ordinal indicator'],
	['&ordm;',    '&#186;',  true, 'masculine ordinal indicator'],
	['&dagger;',  '&#8224;', true, 'dagger'],
	['&Dagger;',  '&#8225;', true, 'double dagger'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	

// symbols
	['&alefsym;', '&#8501;', true, 'alef symbol'],
	['&piv;',     '&#982;',  true, 'pi symbol'],
	['&real;',    '&#8476;', true, 'real part symbol'],
	['&thetasym;','&#977;',  true, 'theta symbol'],
	['&upsih;',   '&#978;',  true, 'upsilon - hook symbol'],
	['&weierp;',  '&#8472;', true, 'Weierstrass p'],
	['&image;',   '&#8465;', true, 'imaginary part'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
	['',    	  '&#32;',   true, 'blank'],
// arrows
	['&larr;',    '&#8592;', true, 'leftwards arrow'],
	['&uarr;',    '&#8593;', true, 'upwards arrow'],
	['&rarr;',    '&#8594;', true, 'rightwards arrow'],
	['&darr;',    '&#8595;', true, 'downwards arrow'],
	['&harr;',    '&#8596;', true, 'left right arrow'],
	['',	      '&#8597;', true, 'up down arrow'],
	['&crarr;',   '&#8629;', true, 'carriage return'],
	['&lArr;',    '&#8656;', true, 'leftwards double arrow'],
	['&uArr;',    '&#8657;', true, 'upwards double arrow'],
	['&rArr;',    '&#8658;', true, 'rightwards double arrow'],
	['&dArr;',    '&#8659;', true, 'downwards double arrow'],
	['&hArr;',    '&#8660;', true, 'left right double arrow'],
// Dingbats
	['&spades;',  '&#9824;', true, 'black spade suit'],
	['&clubs;',   '&#9827;', true, 'black club suit'],
	['&hearts;',  '&#9829;', true, 'black heart suit'],
	['&diams;',   '&#9830;', true, 'black diamond suit'],
	['',	      '&#9792;', true, 'female sign'],
	['',   		  '&#9794;', true, 'male sign'],
	['',   		  '&#9834;', true, 'eight note'],
	['',   		  '&#9835;', true, 'beamed eight notes'],
	['&ensp;',    '&#8194;', false,'en space'],
	['&emsp;',    '&#8195;', false,'em space'],
	['&thinsp;',  '&#8201;', false,'thin space'],
	['&zwnj;',    '&#8204;', false,'zero width non-joiner'],
	['&zwj;',     '&#8205;', false,'zero width joiner'],
	['&lrm;',     '&#8206;', false,'left-to-right mark'],
	['&rlm;',     '&#8207;', false,'right-to-left mark'],
	['&shy;',     '&#173;',  false,'soft hyphen']
];

tinyMCEPopup.onInit.add(function() {
	tinyMCEPopup.dom.setHTML('charmapView', renderCharMapHTML());
	addKeyboardNavigation();
});

function addKeyboardNavigation(){
	var tableElm, cells, settings;

	cells = tinyMCEPopup.dom.select("a.charmaplink", "charmapgroup");

	settings ={
		root: "charmapgroup",
		items: cells
	};
	cells[0].tabindex=0;
	tinyMCEPopup.dom.addClass(cells[0], "mceFocus");
	if (tinymce.isGecko) {
		cells[0].focus();		
	} else {
		setTimeout(function(){
			cells[0].focus();
		}, 100);
	}
	tinyMCEPopup.editor.windowManager.createInstance('tinymce.ui.KeyboardNavigation', settings, tinyMCEPopup.dom);
}

function renderCharMapHTML() {
	var charsPerRow = 20, tdWidth=29, tdHeight=29, i;
	var html = '<div id="charmapgroup" aria-labelledby="charmap_label" tabindex="0" role="listbox">'+
	'<table role="presentation" border="0" cellspacing="1" cellpadding="0" width="' + (tdWidth*charsPerRow) + 
	'"><tr height="' + tdHeight + '">';
	var cols=-1;

	for (i=0; i<charmap.length; i++) {
		var previewCharFn;

		if (charmap[i][2]==true) {
			cols++;
			previewCharFn = 'previewChar(\'' + charmap[i][1].substring(1,charmap[i][1].length) + '\',\'' + charmap[i][0].substring(1,charmap[i][0].length) + '\',\'' + charmap[i][3] + '\');';
			html += ''
				+ '<td class="charmap">'
				+ '<a class="charmaplink" role="button" onmouseover="'+previewCharFn+'" onfocus="'+previewCharFn+'" href="javascript:void(0)" onclick="insertChar(\'' + charmap[i][1].substring(2,charmap[i][1].length-1) + '\');" onclick="return false;" onmousedown="return false;" title="' + charmap[i][3] /*+ ' '+ tinyMCEPopup.editor.translate("advanced_dlg.charmap_usage")*/+ '">'
				+ charmap[i][1]
				+ '</a></td>';
			if ((cols+1) % charsPerRow == 0)
				html += '</tr><tr height="' + tdHeight + '">';
		}
	 }

	if (cols % charsPerRow > 0) {
		var padd = charsPerRow - (cols % charsPerRow);
		for (var i=0; i<padd-1; i++)
			html += '<td width="' + tdWidth + '" height="' + tdHeight + '" class="charmap">&nbsp;</td>';
	}

	html += '</tr></table></div>';
	html = html.replace(/<tr height="20"><\/tr>/g, '');

	return html;
}

function insertChar(chr) {
	tinyMCEPopup.execCommand('mceInsertContent', false, '&#' + chr + ';');

	// Refocus in window
	if (tinyMCEPopup.isWindow)
		window.focus();

	tinyMCEPopup.editor.focus();
	tinyMCEPopup.close();
}

function previewChar(codeA, codeB, codeN) {
	var elmA = document.getElementById('codeA');
	var elmB = document.getElementById('codeB');
	var elmV = document.getElementById('codeV');
	var elmN = document.getElementById('codeN');

	if (codeA=='#160;') {
		elmV.innerHTML = '__';
	} else {
		elmV.innerHTML = '&' + codeA;
	}

	elmB.innerHTML = '&amp;' + codeA;
	elmA.innerHTML = '&amp;' + codeB;
	elmN.innerHTML = codeN;
}
