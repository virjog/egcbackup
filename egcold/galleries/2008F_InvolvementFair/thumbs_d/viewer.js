// copyright 2000,2001,2002,2006 greggman

// convert all characters to lowercase to simplify testing
var agt=navigator.userAgent.toLowerCase();

// *** BROWSER VERSION ***
// Note: On IE5, these return 4, so use is_ie5up to detect IE5.
var is_major = parseInt(navigator.appVersion);
var is_minor = parseFloat(navigator.appVersion);

// Note: Opera and WebTV spoof Navigator.  We do strict client detection.
// If you want to allow spoofing, take out the tests for opera and webtv.
var is_nav  = ((agt.indexOf('mozilla')!=-1) && (agt.indexOf('spoofer')==-1)
          && (agt.indexOf('compatible') == -1) && (agt.indexOf('opera')==-1)
          && (agt.indexOf('webtv')==-1) && (agt.indexOf('hotjava')==-1));
var is_nav2 = (is_nav && (is_major == 2));
var is_nav3 = (is_nav && (is_major == 3));
var is_nav4 = (is_nav && (is_major == 4));
var is_nav4up = (is_nav && (is_major >= 4));
var is_nav6 = (is_nav && (is_major == 5));
var is_nav6up = (is_nav && (is_major >= 5));
var is_ie     = (agt.indexOf("msie") != -1);
var is_ie4up  = (is_ie  && (is_major >= 4));
var is_mac    = (agt.indexOf("mac")!=-1);
var sizeCount = 0;

function mainbody_onresize()
{
      var scrnWidth  = defPicWidth;
      var scrnHeight = defPicHeight;

      var newWidth  = picWidth;
      var newHeight = picHeight;

      var mode = 0;

      if (document.body && document.body.clientWidth)
      {
         scrnWidth  = document.body.clientWidth;
         scrnHeight = document.body.clientHeight;
         mode = 1;
      }
      else if (window.innerWidth)
      {
         scrnWidth  = window.innerWidth;
         scrnHeight = window.innerHeight;
         mode = 2;
      }

      // this is incase there is a border
      scrnWidth  += widthAdjust;
      scrnHeight += heightAdjust;

      if (newWidth > scrnWidth)
      {
         newHeight = (newHeight * scrnWidth) / newWidth;
         newWidth  = scrnWidth;
      }

      if (newHeight > scrnHeight)
      {
         newWidth  = (newWidth * scrnHeight) / newHeight;
         newHeight = scrnHeight;
      }

      newWidth  = Math.floor(newWidth);
      newHeight = Math.floor(newHeight);

      if (mode == 1)
      {
         thepicture.width = newWidth;
         thepicture.height = newHeight;
//         sizeCount++;
//         window.status = "sc=" + sizeCount+ ":sw=" + scrnWidth + ":sh=" + scrnHeight + ":nw=" + newWidth + ":nh=" + newHeight;
      }
      else
      {
         if (!is_nav4)
         {
            document.thepicture.setAttribute('width', newWidth);
            document.thepicture.setAttribute('height', newHeight);
         }
      }

      return true;
}

function open_fullscreen(url, name)
{
   var windowOptions = "";

   if (is_ie4up && !is_mac)
   {
      windowOptions = "fullscreen=yes";
   }
   else
   {
      var chasm = screen.availWidth;
      var mount = screen.availHeight;
      windowOptions = 'top=0,left=0,width=' + (chasm - 10) + ',height=' + (mount - 30);
   }
   return window.open(url, name, windowOptions);
}