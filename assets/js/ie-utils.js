//=====================================

// author: 		Frank Lin
// create date: 2016/3/14

//=====================================

//ref check ie http://www.fwolf.com/blog/post/35
/*

$.browser.mozilla = /firefox/.test(navigator.userAgent.toLowerCase());
$.browser.webkit = /webkit/.test(navigator.userAgent.toLowerCase());
$.browser.opera = /opera/.test(navigator.userAgent.toLowerCase());
$.browser.msie = /msie/.test(navigator.userAgent.toLowerCase());

*/

function checkie11()
{
	return (!!navigator.userAgent.match(/Trident\/7\./));
}


function msieversion()
{
      var ua = window.navigator.userAgent
      var msie = ua.indexOf ( "MSIE " )

      if ( msie > 0 )      // If Internet Explorer, return version number
         return parseInt (ua.substring (msie+5, ua.indexOf (".", msie )))
      else                 // If another browser, return 0
         return 0

}

function isie()
{
	//if ie11
	if (checkie11())
	{
		return true;
	}

	try
	{
		//if ie less than 11
		//if ($.browser.msie===true)
		if (msieversion()>0)
		{
			return true;
		}
	}
	catch(ex)
	{
		// not ie
		return false;
	}
	
	//not ie
    return false;
}

if (typeof browserObj === 'undefined') {

	browserObj={
		version:"0.9",
		isie11:checkie11(),
		isie:isie()
		
	};
	
}
