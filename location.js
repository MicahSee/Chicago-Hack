  var latitude;
  var longitude;
  var loc;

  window.onload = function() {
      var btn = document.getElementById("myButton");
      btn.onclick = geoFindMe;

  function geoFindMe()
  {
    console.log("I've been clicked");
    var output = document.getElementById("out");
    if (!navigator.geolocation)
    {
      output.innerHTML = "";
      return;
    }

      function success(position)
      {
          latitude  = position.coords.latitude;
          longitude = position.coords.longitude;
          loc = latitude + "," + longitude;
          console.log(loc);
          console.log(latitude);
          console.log(longitude);

          $.ajax(
            {
              url: window.location.origin + ":5001",
              type: 'PUT',
              data: loc,
             beforeSend: function (xhr)
                {
                  xhr.setRequestHeader('origin', 'null');
                },
                success: function(data) {renderData(data)},
                error: function(data) {alert("nope", data)},
              });

      }

      function error()
      {
        output.innerHTML = "";
      }

      output.innerHTML = "";

    navigator.geolocation.getCurrentPosition(success, error);
  }

function geo_error()
{
alert("Sorry, no universities nearby.");
}

var geo_options =
{
enableHighAccuracy: true,
maximumAge        : 30000,
timeout           : 27000
};

function errorCallback(error)
{
alert('ERROR(' + error.code + '): ' + error.message);
};

function prompt(window, pref, message, callback)
{
 //  let branch = Components.classes["@mozilla.org/preferences-service;1"].getService(Components.interfaces.nsIPrefBranch);

  if (branch.getPrefType(pref) === branch.PREF_STRING)
  {
      switch (branch.getCharPref(pref))
      {
      case "always":
          return callback(true);
      case "never":
          return callback(false);
      }
  }

  let done = false;

  function remember(value, result)
  {
      return function()
      {
          done = true;
          branch.setCharPref(pref, value);
          callback(result);
      }
  }

  let self = window.PopupNotifications.show(
      window.gBrowser.selectedBrowser,
      "geolocation",
      message,
      "geo-notification-icon",
      {
          label: "Share Location",
          accessKey: "S",
          callback: function(notification)
          {
              done = true;
              callback(true);
          }
      }, [
          {
              label: "Always Share",
              accessKey: "A",
              callback: remember("always", true)
          },
          {
              label: "Never Share",
              accessKey: "N",
              callback: remember("never", false)
          }
        ],
        {
          eventCallback: function(event)
          {
              if (event === "dismissed")
              {
                  if (!done) callback(false);
                  done = true;
                  window.PopupNotifications.remove(self);
              }
          },
          persistWhileVisible: true
      });
    }

    prompt(window,
     "extensions.foo-addon.allowGeolocation",
     "Foo Add-on wants to know your location.",
     function callback(allowed)
     {
       alert(allowed);
     });


}
