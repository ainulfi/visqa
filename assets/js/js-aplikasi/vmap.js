 // // list region indonesia (wil binaan)
//         // path07 : bengkulu
//         // path08 : lampung
//         // path11 : dki jakarta
//         // path12 : jabar
//         // path13 : jateng
//         // path14 : banten
//         // path15 : jatim
//         // path16 : diy
//         // path23 : kaltim
//         // path24 : kaltara
//         // path33 : papua
//         // path34 : papua barat
//         //========================//

 var map;

 // Get the modal
var modal = document.getElementById("varyingModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// var name = {
//   'path07' = 'Bengkulu';
// }

 function touch_detect() {
        return 'ontouchstart' in window || 'onmsgesturechange' in window || navigator.msMaxTouchPoints > 0;
      }

      jQuery(document).ready(function () {

        // Store currentRegion
        var currentRegion = '';

        // List of Regions we'll let clicks through for
        var enabledRegions = ['path07', 'path08', 'path12'];

        // var name = {
        //   'path07' : 'Bengkulu',
        //   'path08' : 'Lampung',
        // }

        map = jQuery('#vmap').vectorMap({
          map: 'indonesia_id',
          enableZoom: true,
          zoomOnScroll: false,
          showTooltip: true,
          borderWidth: 2,
          // showLabels: name[enabledRegions],
          selectedColor: '#FAB905',
          selectedRegions: '',
          hoverColor: '#FAB905',
          colors: {
            path07: '#1D05F5',
            path08: '#1D05F5',
            path12: '#1D05F5',
          },
           // onLabelShow: function(e, label, code){
           //    label.html('bengkulu');
           //    //or do what you want with label, it's just a jQuery object
           //  },
          onRegionClick: function(event, code, region){
            // Check if this is an Enabled Region, and not the current selected on
            if(enabledRegions.indexOf(code) === -1 || currentRegion === code){
              // Not an Enabled Region
              event.preventDefault();
            } else {
              // Enabled Region. Update Newly Selected Region.
              
             // we're not on a mobile device, handle the click
                // var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
                // alert(message);
              currentRegion = code;
              if (!touch_detect()) {
                if (code =='path07') { 
                    $('#bengkuluModal').modal('show');
                    currentRegion = code;
                    // window.open("www.google.com");
                  }
                else if (code =='path08') { 
                    $('#lampungModal').modal('show');
                    currentRegion = code;
                  }
                else if (code =='path12') { 
                    $('#jabarModal').modal('show');
                  }
              }
            }
          },
          onRegionOver: function (event, code, region) {
            if (touch_detect()) {
              /// we're not on a mobile device, handle the click
              var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
              alert(message);
            }
          },
          onRegionSelect: function(event, code, region){
            // console.log(map.selectedRegions);
            // Check if this is an Enabled Region, and not the current selected on
            if(enabledRegions.indexOf(code) === -1 || currentRegion === code){
              // Not an Enabled Region
              event.preventDefault();
            } else {
              // Enabled Region. Update Newly Selected Region.
              
             // we're not on a mobile device, handle the click
                // var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
                // alert(message);
              currentRegion = code;
              if (!touch_detect()) {
                if (code =='path07') { 
                    $('#bengkuluModal').modal('show');
                    currentRegion = code;
                    // window.open("www.google.com");
                  }
                else if (code =='path08') { 
                    $('#lampungModal').modal('show');
                    currentRegion = code;
                  }
                else if (code =='path12') { 
                    $('#jabarModal').modal('show');
                  }
              }
            }
          },
          onLabelShow: function(event, label, code){
            if(enabledRegions.indexOf(code) === -1){
              event.preventDefault();
            }
          }
        });
      });