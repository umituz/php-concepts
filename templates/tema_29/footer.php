<!--==============================
              footer
              =================================-->
            </div>
            <footer id="footer">
              <div class="container_12">
                <div class="grid_12">
                  <div class="copyright"> &copy; <span id="copyright-year">2014</span>| <a href="#">Privacy Policy </a> <br>
                   Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
                 </div>
               </div>
             </div>
             <div class="clear"></div>
           </footer>
           <a href="#" id="toTop" class="fa fa-chevron-up"></a>
           <script src="js/jquery.singlePageNav.min.js"></script>
           <script>
  // Prevent console.log from generating errors in IE for the purposes of the demo
  if ( ! window.console ) console = { log: function(){} };
  // The actual plugin
  $('.single-page-nav').singlePageNav({
    offset: $('.single-page-nav').outerHeight(),
    filter: ':not(.external)',
    updateHash: true,
    beforeStart: function() {
      console.log('begin scrolling');
    },
    onComplete: function() {
      console.log('done scrolling');
    }
  });
</script>
<script type="text/javascript">
  google_api_map_init();
  function google_api_map_init(){
    var map;
    var coordData = new google.maps.LatLng(parseFloat(40.646197), parseFloat(-73.9724068,14));
    var styleArray = [
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
      {
        "color": "#193341"
      }
      ]
    },
    {
      "featureType": "landscape",
      "elementType": "geometry",
      "stylers": [
      {
        "color": "#2c5a71"
      }
      ]
    },
    {
      "featureType": "road",
      "elementType": "geometry",
      "stylers": [
      {
        "color": "#29768a"
      },
      {
        "lightness": -37
      }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [
      {
        "color": "#406d80"
      }
      ]
    },
    {
      "featureType": "transit",
      "elementType": "geometry",
      "stylers": [
      {
        "color": "#406d80"
      }
      ]
    },
    {
      "elementType": "labels.text.stroke",
      "stylers": [
      {
        "visibility": "on"
      },
      {
        "color": "#3e606f"
      },
      {
        "weight": 2
      },
      {
        "gamma": 0.84
      }
      ]
    },
    {
      "elementType": "labels.text.fill",
      "stylers": [
      {
        "color": "#ffffff"
      }
      ]
    },
    {
      "featureType": "administrative",
      "elementType": "geometry",
      "stylers": [
      {
        "weight": 0.6
      },
      {
        "color": "#1a3541"
      }
      ]
    },
    {
      "elementType": "labels.icon",
      "stylers": [
      {
        "visibility": "off"
      }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [
      {
        "color": "#2c5a71"
      }
      ]
    }
    ]
    function initialize() {
      var mapOptions = {
        zoom: 13,
        center: coordData,
        scrollwheel: false,
        styles: styleArray
      }
      var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
      google.maps.event.addDomListener(window, 'resize', function() {
        map.setCenter(coordData);
        var center = map.getCenter();
      });
    }
    google.maps.event.addDomListener(window, "load", initialize);
  }
</script>
<!--[if IE]><script type="text/javascript" src="js/excanvas.js"></script><![endif]-->
<script src="js/jquery.knob.js"></script>
<script>
  $(function($) {
    $(".knob").knob({
      change : function (value) {
            //console.log("change : " + value);
          },
          release : function (value) {
            //console.log(this.$.attr('value'));
            console.log("release : " + value);
          },
          cancel : function () {
            console.log("cancel : ", this);
          },
        /*format : function (value) {
            return value + '%';
          },*/
          draw : function () {
            // "tron" case
            if(this.$.data('skin') == 'tron') {
              this.cursorExt = 0.3;
                var a = this.arc(this.cv)  // Arc
                    , pa                   // Previous arc
                    , r = 1;
                    this.g.lineWidth = this.lineWidth;
                    if (this.o.displayPrevious) {
                      pa = this.arc(this.v);
                      this.g.beginPath();
                      this.g.strokeStyle = this.pColor;
                      this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                      this.g.stroke();
                    }
                    this.g.beginPath();
                    this.g.strokeStyle = r ? this.o.fgColor : this.fgColor ;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
                    this.g.stroke();
                    this.g.lineWidth = 2;
                    this.g.beginPath();
                    this.g.strokeStyle = this.o.fgColor;
                    this.g.arc( this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                    this.g.stroke();
                    return false;
                  }
                }
              });
    // Example of infinite knob, iPod click wheel
    var v, up=0,down=0,i=0
    ,$idir = $("div.idir")
    ,$ival = $("div.ival")
    ,incr = function() { i++; $idir.show().html("+").fadeOut(); $ival.html(i); }
    ,decr = function() { i--; $idir.show().html("-").fadeOut(); $ival.html(i); };
    $("input.infinite").knob(
    {
      min : 0
      , max : 20
      , stopper : false
      , change : function () {
        if(v > this.cv){
          if(up){
            decr();
            up=0;
          }else{up=1;down=0;}
        } else {
          if(v < this.cv){
            if(down){
              incr();
              down=0;
            }else{down=1;up=0;}
          }
        }
        v = this.cv;
      }
    });
  });
</script>
<script src="js/isotop_ini.js"></script>
</body>
</html>