//changing topojson to geojson
L.TopoJSON = L.GeoJSON.extend({
  addData: function (jsonData) {
    if (jsonData.type === "Topology") {
      for (let key in jsonData.objects) {
        if (jsonData.objects.hasOwnProperty(key)) {
          let geojson = topojson.feature(jsonData, jsonData.objects[key]);
          L.GeoJSON.prototype.addData.call(this, geojson);
        }
      }
    } else {
      L.GeoJSON.prototype.addData.call(this, jsonData);
    }
  },
});

// Initialize map
let map = L.map("map", { minZoom: 7, keyboard: false }).setView(
    [28.1734922968426, 83.98199462890626],
    7
  ),
  topoLayer = new L.TopoJSON();

//tile layers
L.tileLayer("http://{s}.tile.osm.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

let mapIcon = L.icon({
  iconUrl:
    "https://cdn0.iconfinder.com/data/icons/small-n-flat/24/678111-map-marker-256.png",
  iconSize: [25, 25], // size of the icon
  shadowSize: [50, 64],
});

// Set maximum bounds (bounding box)
var southWest = L.latLng(26.347, 80.058), // Bottom-left corner
  northEast = L.latLng(30.422, 88.201); // Top-right corner
var bounds = L.latLngBounds(southWest, northEast);

// Set maximum bounds to the map
map.setMaxBounds(bounds);

// When the map is dragged out of bounds, bounce it back
map.on("drag", function () {
  map.panInsideBounds(bounds, { animate: true });
});

//Implementation marker in map
// Array of locations with [latitude, longitude] and popup text
var locations = [
  [27.89734922968426, 84.98199462890626, "Location 1"],
  [28.3949, 84.124, "Location 2"],
  [27.7172, 85.324, "Location 3"],
  [28.2639, 83.9721, "Location 4"],
];

// Loop through each location and add a marker
locations.forEach(function (location) {
  var marker = L.marker([location[0], location[1]], { icon: mapIcon })
    .addTo(map)
    .bindPopup(location[2])
    .on("mouseover", function () {
      this.openPopup();
    })
    .on("mouseout", function () {
      this.closePopup();
    });
});

$.getJSON(
  "https://raw.githubusercontent.com/dikenulak/nepalMapWithTopojson/master/data/nepal-districts.topojson"
).done(createDistrictLayer);

function createDistrictLayer(topoData) {
  topoLayer.addData(topoData);
  topoLayer.addTo(map);
  topoLayer.eachLayer(districtLayer);
}

//layer for disctrict

const districtLayer = (layer) => {
  layer.setStyle({
    fillColor: "red",
    weight: 1.5,
    color: "white",
    opacity: 0.5,
    fillOpacity: 0.4,
  });
  layer.on({
    mouseover: enterLayer,
    mouseout: leaveLayer,
    click: clickToDistrict,
  });
};
