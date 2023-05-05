<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width"
    />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="page/css/leaflet.css" />
    <link rel="stylesheet" href="page/css/qgis2web.css" />
    <link rel="stylesheet" href="page/css/fontawesome-all.min.css" />
    <link
      rel="stylesheet"
      href="page/css/leaflet-control-geocoder.Geocoder.css"
    />
    <style>
      #map {
        width: 100%;
        height: 571px;
        border-radius: 10px;
      }
    </style>
    <title></title>
  </head>
  <body>
    <div id="map"></div>
    <script src="page/js/qgis2web_expressions.js"></script>
    <script src="page/js/leaflet.js"></script>
    <script src="page/js/leaflet.rotatedMarker.js"></script>
    <script src="page/js/leaflet.pattern.js"></script>
    <script src="page/js/leaflet-hash.js"></script>
    <script src="page/js/Autolinker.min.js"></script>
    <script src="page/js/rbush.min.js"></script>
    <script src="page/js/labelgun.min.js"></script>
    <script src="page/js/labels.js"></script>
    <script src="page/js/leaflet-control-geocoder.Geocoder.js"></script>
    <script src="page/data/Bengkulu_1.js"></script>
    <script src="page/data/Kepahiang_2.js"></script>
    <script src="page/data/Lebong_3.js"></script>
    <script src="page/data/Bengkulu_Tengah_4.js"></script>
    <script src="page/data/Bengkulu_Selatan_5.js"></script>
    <script src="page/data/Rejang_Lebong_6.js"></script>
    <script src="page/data/Seluma_7.js"></script>
    <script src="page/data/MukoMuko_8.js"></script>
    <script src="page/data/Bengkulu_Utara_9.js"></script>
    <script src="page/data/Kaur_10.js"></script>
    <script src="page/data/Data_Longsor_11.js"></script>
    <script>
      var map = L.map("map", {
        zoomControl: true,
        maxZoom: 28,
        minZoom: 8,
      }).fitBounds([
        [-5.431598791188304, 99.35641135861316],
        [-2.145184698867627, 105.55959015501465],
      ]);
      var hash = new L.Hash(map);
      map.attributionControl.setPrefix(
        '<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>'
      );
      var autolinker = new Autolinker({
        truncate: { length: 30, location: "smart" },
      });
      var bounds_group = new L.featureGroup([]);
      function setBounds() {}
      map.createPane("pane_GoogleMaps_0");
      map.getPane("pane_GoogleMaps_0").style.zIndex = 400;
      var layer_GoogleMaps_0 = L.tileLayer(
        "https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}",
        {
          pane: "pane_GoogleMaps_0",
          opacity: 1.0,
          attribution: "",
          minZoom: 1,
          maxZoom: 28,
          minNativeZoom: 0,
          maxNativeZoom: 19,
        }
      );
      layer_GoogleMaps_0;
      map.addLayer(layer_GoogleMaps_0);
      function pop_Bengkulu_1(feature, layer) {
        var popupContent =
          '<table>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPPUM"] !== null
            ? autolinker.link(feature.properties["KDPPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["NAMOBJ"] !== null
            ? autolinker.link(feature.properties["NAMOBJ"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["REMARK"] !== null
            ? autolinker.link(feature.properties["REMARK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPBPS"] !== null
            ? autolinker.link(feature.properties["KDPBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["FCODE"] !== null
            ? autolinker.link(feature.properties["FCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LUASWH"] !== null
            ? autolinker.link(feature.properties["LUASWH"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["UUPP"] !== null
            ? autolinker.link(feature.properties["UUPP"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SRS_ID"] !== null
            ? autolinker.link(feature.properties["SRS_ID"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LCODE"] !== null
            ? autolinker.link(feature.properties["LCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["METADATA"] !== null
            ? autolinker.link(feature.properties["METADATA"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEBPS"] !== null
            ? autolinker.link(feature.properties["KDEBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEPUM"] !== null
            ? autolinker.link(feature.properties["KDEPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCBPS"] !== null
            ? autolinker.link(feature.properties["KDCBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCPUM"] !== null
            ? autolinker.link(feature.properties["KDCPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBBPS"] !== null
            ? autolinker.link(feature.properties["KDBBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBPUM"] !== null
            ? autolinker.link(feature.properties["KDBPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKD"] !== null
            ? autolinker.link(feature.properties["WADMKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKD"] !== null
            ? autolinker.link(feature.properties["WIADKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKC"] !== null
            ? autolinker.link(feature.properties["WADMKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKC"] !== null
            ? autolinker.link(feature.properties["WIADKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKK"] !== null
            ? autolinker.link(feature.properties["WADMKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKK"] !== null
            ? autolinker.link(feature.properties["WIADKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMPR"] !== null
            ? autolinker.link(feature.properties["WADMPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADPR"] !== null
            ? autolinker.link(feature.properties["WIADPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["TIPADM"] !== null
            ? autolinker.link(feature.properties["TIPADM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Leng"] !== null
            ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Area"] !== null
            ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString())
            : "") +
          "</td>\
                    </tr>\
                </table>";
        layer.bindPopup(popupContent, { maxHeight: 400 });
      }

      function style_Bengkulu_1_0() {
        return {
          pane: "pane_Bengkulu_1",
          opacity: 1,
          color: "rgba(35,35,35,1.0)",
          dashArray: "",
          lineCap: "butt",
          lineJoin: "miter",
          weight: 1.0,
          fill: true,
          fillOpacity: 1,
          fillColor: "rgba(255,14,1,1.0)",
          interactive: true,
        };
      }
      map.createPane("pane_Bengkulu_1");
      map.getPane("pane_Bengkulu_1").style.zIndex = 401;
      map.getPane("pane_Bengkulu_1").style["mix-blend-mode"] = "normal";
      var layer_Bengkulu_1 = new L.geoJson(json_Bengkulu_1, {
        attribution: "",
        interactive: true,
        dataVar: "json_Bengkulu_1",
        layerName: "layer_Bengkulu_1",
        pane: "pane_Bengkulu_1",
        onEachFeature: pop_Bengkulu_1,
        style: style_Bengkulu_1_0,
      });
      bounds_group.addLayer(layer_Bengkulu_1);
      map.addLayer(layer_Bengkulu_1);
      function pop_Kepahiang_2(feature, layer) {
        var popupContent =
          '<table>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPPUM"] !== null
            ? autolinker.link(feature.properties["KDPPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["NAMOBJ"] !== null
            ? autolinker.link(feature.properties["NAMOBJ"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["REMARK"] !== null
            ? autolinker.link(feature.properties["REMARK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPBPS"] !== null
            ? autolinker.link(feature.properties["KDPBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["FCODE"] !== null
            ? autolinker.link(feature.properties["FCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LUASWH"] !== null
            ? autolinker.link(feature.properties["LUASWH"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["UUPP"] !== null
            ? autolinker.link(feature.properties["UUPP"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SRS_ID"] !== null
            ? autolinker.link(feature.properties["SRS_ID"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LCODE"] !== null
            ? autolinker.link(feature.properties["LCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["METADATA"] !== null
            ? autolinker.link(feature.properties["METADATA"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEBPS"] !== null
            ? autolinker.link(feature.properties["KDEBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEPUM"] !== null
            ? autolinker.link(feature.properties["KDEPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCBPS"] !== null
            ? autolinker.link(feature.properties["KDCBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCPUM"] !== null
            ? autolinker.link(feature.properties["KDCPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBBPS"] !== null
            ? autolinker.link(feature.properties["KDBBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBPUM"] !== null
            ? autolinker.link(feature.properties["KDBPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKD"] !== null
            ? autolinker.link(feature.properties["WADMKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKD"] !== null
            ? autolinker.link(feature.properties["WIADKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKC"] !== null
            ? autolinker.link(feature.properties["WADMKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKC"] !== null
            ? autolinker.link(feature.properties["WIADKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKK"] !== null
            ? autolinker.link(feature.properties["WADMKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKK"] !== null
            ? autolinker.link(feature.properties["WIADKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMPR"] !== null
            ? autolinker.link(feature.properties["WADMPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADPR"] !== null
            ? autolinker.link(feature.properties["WIADPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["TIPADM"] !== null
            ? autolinker.link(feature.properties["TIPADM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Leng"] !== null
            ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Area"] !== null
            ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString())
            : "") +
          "</td>\
                    </tr>\
                </table>";
        layer.bindPopup(popupContent, { maxHeight: 400 });
      }

      function style_Kepahiang_2_0() {
        return {
          pane: "pane_Kepahiang_2",
          opacity: 1,
          color: "rgba(35,35,35,1.0)",
          dashArray: "",
          lineCap: "butt",
          lineJoin: "miter",
          weight: 1.0,
          fill: true,
          fillOpacity: 1,
          fillColor: "rgba(255,221,1,1.0)",
          interactive: true,
        };
      }
      map.createPane("pane_Kepahiang_2");
      map.getPane("pane_Kepahiang_2").style.zIndex = 402;
      map.getPane("pane_Kepahiang_2").style["mix-blend-mode"] = "normal";
      var layer_Kepahiang_2 = new L.geoJson(json_Kepahiang_2, {
        attribution: "",
        interactive: true,
        dataVar: "json_Kepahiang_2",
        layerName: "layer_Kepahiang_2",
        pane: "pane_Kepahiang_2",
        onEachFeature: pop_Kepahiang_2,
        style: style_Kepahiang_2_0,
      });
      bounds_group.addLayer(layer_Kepahiang_2);
      map.addLayer(layer_Kepahiang_2);
      function pop_Lebong_3(feature, layer) {
        var popupContent =
          '<table>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPPUM"] !== null
            ? autolinker.link(feature.properties["KDPPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["NAMOBJ"] !== null
            ? autolinker.link(feature.properties["NAMOBJ"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["REMARK"] !== null
            ? autolinker.link(feature.properties["REMARK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPBPS"] !== null
            ? autolinker.link(feature.properties["KDPBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["FCODE"] !== null
            ? autolinker.link(feature.properties["FCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LUASWH"] !== null
            ? autolinker.link(feature.properties["LUASWH"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["UUPP"] !== null
            ? autolinker.link(feature.properties["UUPP"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SRS_ID"] !== null
            ? autolinker.link(feature.properties["SRS_ID"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LCODE"] !== null
            ? autolinker.link(feature.properties["LCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["METADATA"] !== null
            ? autolinker.link(feature.properties["METADATA"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEBPS"] !== null
            ? autolinker.link(feature.properties["KDEBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEPUM"] !== null
            ? autolinker.link(feature.properties["KDEPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCBPS"] !== null
            ? autolinker.link(feature.properties["KDCBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCPUM"] !== null
            ? autolinker.link(feature.properties["KDCPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBBPS"] !== null
            ? autolinker.link(feature.properties["KDBBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBPUM"] !== null
            ? autolinker.link(feature.properties["KDBPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKD"] !== null
            ? autolinker.link(feature.properties["WADMKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKD"] !== null
            ? autolinker.link(feature.properties["WIADKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKC"] !== null
            ? autolinker.link(feature.properties["WADMKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKC"] !== null
            ? autolinker.link(feature.properties["WIADKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKK"] !== null
            ? autolinker.link(feature.properties["WADMKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKK"] !== null
            ? autolinker.link(feature.properties["WIADKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMPR"] !== null
            ? autolinker.link(feature.properties["WADMPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADPR"] !== null
            ? autolinker.link(feature.properties["WIADPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["TIPADM"] !== null
            ? autolinker.link(feature.properties["TIPADM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Leng"] !== null
            ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Area"] !== null
            ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString())
            : "") +
          "</td>\
                    </tr>\
                </table>";
        layer.bindPopup(popupContent, { maxHeight: 400 });
      }

      function style_Lebong_3_0() {
        return {
          pane: "pane_Lebong_3",
          opacity: 1,
          color: "rgba(35,35,35,1.0)",
          dashArray: "",
          lineCap: "butt",
          lineJoin: "miter",
          weight: 1.0,
          fill: true,
          fillOpacity: 1,
          fillColor: "rgba(221,255,1,1.0)",
          interactive: true,
        };
      }
      map.createPane("pane_Lebong_3");
      map.getPane("pane_Lebong_3").style.zIndex = 403;
      map.getPane("pane_Lebong_3").style["mix-blend-mode"] = "normal";
      var layer_Lebong_3 = new L.geoJson(json_Lebong_3, {
        attribution: "",
        interactive: true,
        dataVar: "json_Lebong_3",
        layerName: "layer_Lebong_3",
        pane: "pane_Lebong_3",
        onEachFeature: pop_Lebong_3,
        style: style_Lebong_3_0,
      });
      bounds_group.addLayer(layer_Lebong_3);
      map.addLayer(layer_Lebong_3);
      function pop_Bengkulu_Tengah_4(feature, layer) {
        var popupContent =
          '<table>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPPUM"] !== null
            ? autolinker.link(feature.properties["KDPPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["NAMOBJ"] !== null
            ? autolinker.link(feature.properties["NAMOBJ"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["REMARK"] !== null
            ? autolinker.link(feature.properties["REMARK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPBPS"] !== null
            ? autolinker.link(feature.properties["KDPBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["FCODE"] !== null
            ? autolinker.link(feature.properties["FCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LUASWH"] !== null
            ? autolinker.link(feature.properties["LUASWH"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["UUPP"] !== null
            ? autolinker.link(feature.properties["UUPP"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SRS_ID"] !== null
            ? autolinker.link(feature.properties["SRS_ID"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LCODE"] !== null
            ? autolinker.link(feature.properties["LCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["METADATA"] !== null
            ? autolinker.link(feature.properties["METADATA"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEBPS"] !== null
            ? autolinker.link(feature.properties["KDEBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEPUM"] !== null
            ? autolinker.link(feature.properties["KDEPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCBPS"] !== null
            ? autolinker.link(feature.properties["KDCBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCPUM"] !== null
            ? autolinker.link(feature.properties["KDCPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBBPS"] !== null
            ? autolinker.link(feature.properties["KDBBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBPUM"] !== null
            ? autolinker.link(feature.properties["KDBPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKD"] !== null
            ? autolinker.link(feature.properties["WADMKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKD"] !== null
            ? autolinker.link(feature.properties["WIADKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKC"] !== null
            ? autolinker.link(feature.properties["WADMKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKC"] !== null
            ? autolinker.link(feature.properties["WIADKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKK"] !== null
            ? autolinker.link(feature.properties["WADMKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKK"] !== null
            ? autolinker.link(feature.properties["WIADKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMPR"] !== null
            ? autolinker.link(feature.properties["WADMPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADPR"] !== null
            ? autolinker.link(feature.properties["WIADPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["TIPADM"] !== null
            ? autolinker.link(feature.properties["TIPADM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Leng"] !== null
            ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Area"] !== null
            ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString())
            : "") +
          "</td>\
                    </tr>\
                </table>";
        layer.bindPopup(popupContent, { maxHeight: 400 });
      }

      function style_Bengkulu_Tengah_4_0() {
        return {
          pane: "pane_Bengkulu_Tengah_4",
          opacity: 1,
          color: "rgba(35,35,35,1.0)",
          dashArray: "",
          lineCap: "butt",
          lineJoin: "miter",
          weight: 1.0,
          fill: true,
          fillOpacity: 1,
          fillColor: "rgba(1,35,255,1.0)",
          interactive: true,
        };
      }
      map.createPane("pane_Bengkulu_Tengah_4");
      map.getPane("pane_Bengkulu_Tengah_4").style.zIndex = 404;
      map.getPane("pane_Bengkulu_Tengah_4").style["mix-blend-mode"] = "normal";
      var layer_Bengkulu_Tengah_4 = new L.geoJson(json_Bengkulu_Tengah_4, {
        attribution: "",
        interactive: true,
        dataVar: "json_Bengkulu_Tengah_4",
        layerName: "layer_Bengkulu_Tengah_4",
        pane: "pane_Bengkulu_Tengah_4",
        onEachFeature: pop_Bengkulu_Tengah_4,
        style: style_Bengkulu_Tengah_4_0,
      });
      bounds_group.addLayer(layer_Bengkulu_Tengah_4);
      map.addLayer(layer_Bengkulu_Tengah_4);
      function pop_Bengkulu_Selatan_5(feature, layer) {
        var popupContent =
          '<table>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPPUM"] !== null
            ? autolinker.link(feature.properties["KDPPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["NAMOBJ"] !== null
            ? autolinker.link(feature.properties["NAMOBJ"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["REMARK"] !== null
            ? autolinker.link(feature.properties["REMARK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPBPS"] !== null
            ? autolinker.link(feature.properties["KDPBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["FCODE"] !== null
            ? autolinker.link(feature.properties["FCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LUASWH"] !== null
            ? autolinker.link(feature.properties["LUASWH"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["UUPP"] !== null
            ? autolinker.link(feature.properties["UUPP"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SRS_ID"] !== null
            ? autolinker.link(feature.properties["SRS_ID"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LCODE"] !== null
            ? autolinker.link(feature.properties["LCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["METADATA"] !== null
            ? autolinker.link(feature.properties["METADATA"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEBPS"] !== null
            ? autolinker.link(feature.properties["KDEBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEPUM"] !== null
            ? autolinker.link(feature.properties["KDEPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCBPS"] !== null
            ? autolinker.link(feature.properties["KDCBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCPUM"] !== null
            ? autolinker.link(feature.properties["KDCPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBBPS"] !== null
            ? autolinker.link(feature.properties["KDBBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBPUM"] !== null
            ? autolinker.link(feature.properties["KDBPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKD"] !== null
            ? autolinker.link(feature.properties["WADMKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKD"] !== null
            ? autolinker.link(feature.properties["WIADKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKC"] !== null
            ? autolinker.link(feature.properties["WADMKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKC"] !== null
            ? autolinker.link(feature.properties["WIADKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKK"] !== null
            ? autolinker.link(feature.properties["WADMKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKK"] !== null
            ? autolinker.link(feature.properties["WIADKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMPR"] !== null
            ? autolinker.link(feature.properties["WADMPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADPR"] !== null
            ? autolinker.link(feature.properties["WIADPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["TIPADM"] !== null
            ? autolinker.link(feature.properties["TIPADM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Leng"] !== null
            ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Area"] !== null
            ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString())
            : "") +
          "</td>\
                    </tr>\
                </table>";
        layer.bindPopup(popupContent, { maxHeight: 400 });
      }

      function style_Bengkulu_Selatan_5_0() {
        return {
          pane: "pane_Bengkulu_Selatan_5",
          opacity: 1,
          color: "rgba(35,35,35,1.0)",
          dashArray: "",
          lineCap: "butt",
          lineJoin: "miter",
          weight: 1.0,
          fill: true,
          fillOpacity: 1,
          fillColor: "rgba(255,158,23,1.0)",
          interactive: true,
        };
      }
      map.createPane("pane_Bengkulu_Selatan_5");
      map.getPane("pane_Bengkulu_Selatan_5").style.zIndex = 405;
      map.getPane("pane_Bengkulu_Selatan_5").style["mix-blend-mode"] = "normal";
      var layer_Bengkulu_Selatan_5 = new L.geoJson(json_Bengkulu_Selatan_5, {
        attribution: "",
        interactive: true,
        dataVar: "json_Bengkulu_Selatan_5",
        layerName: "layer_Bengkulu_Selatan_5",
        pane: "pane_Bengkulu_Selatan_5",
        onEachFeature: pop_Bengkulu_Selatan_5,
        style: style_Bengkulu_Selatan_5_0,
      });
      bounds_group.addLayer(layer_Bengkulu_Selatan_5);
      map.addLayer(layer_Bengkulu_Selatan_5);
      function pop_Rejang_Lebong_6(feature, layer) {
        var popupContent =
          '<table>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPPUM"] !== null
            ? autolinker.link(feature.properties["KDPPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["NAMOBJ"] !== null
            ? autolinker.link(feature.properties["NAMOBJ"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["REMARK"] !== null
            ? autolinker.link(feature.properties["REMARK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPBPS"] !== null
            ? autolinker.link(feature.properties["KDPBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["FCODE"] !== null
            ? autolinker.link(feature.properties["FCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LUASWH"] !== null
            ? autolinker.link(feature.properties["LUASWH"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["UUPP"] !== null
            ? autolinker.link(feature.properties["UUPP"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SRS_ID"] !== null
            ? autolinker.link(feature.properties["SRS_ID"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LCODE"] !== null
            ? autolinker.link(feature.properties["LCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["METADATA"] !== null
            ? autolinker.link(feature.properties["METADATA"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEBPS"] !== null
            ? autolinker.link(feature.properties["KDEBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEPUM"] !== null
            ? autolinker.link(feature.properties["KDEPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCBPS"] !== null
            ? autolinker.link(feature.properties["KDCBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCPUM"] !== null
            ? autolinker.link(feature.properties["KDCPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBBPS"] !== null
            ? autolinker.link(feature.properties["KDBBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBPUM"] !== null
            ? autolinker.link(feature.properties["KDBPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKD"] !== null
            ? autolinker.link(feature.properties["WADMKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKD"] !== null
            ? autolinker.link(feature.properties["WIADKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKC"] !== null
            ? autolinker.link(feature.properties["WADMKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKC"] !== null
            ? autolinker.link(feature.properties["WIADKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKK"] !== null
            ? autolinker.link(feature.properties["WADMKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKK"] !== null
            ? autolinker.link(feature.properties["WIADKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMPR"] !== null
            ? autolinker.link(feature.properties["WADMPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADPR"] !== null
            ? autolinker.link(feature.properties["WIADPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["TIPADM"] !== null
            ? autolinker.link(feature.properties["TIPADM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Leng"] !== null
            ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Area"] !== null
            ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString())
            : "") +
          "</td>\
                    </tr>\
                </table>";
        layer.bindPopup(popupContent, { maxHeight: 400 });
      }

      function style_Rejang_Lebong_6_0() {
        return {
          pane: "pane_Rejang_Lebong_6",
          opacity: 1,
          color: "rgba(35,35,35,1.0)",
          dashArray: "",
          lineCap: "butt",
          lineJoin: "miter",
          weight: 1.0,
          fill: true,
          fillOpacity: 1,
          fillColor: "rgba(141,90,153,1.0)",
          interactive: true,
        };
      }
      map.createPane("pane_Rejang_Lebong_6");
      map.getPane("pane_Rejang_Lebong_6").style.zIndex = 406;
      map.getPane("pane_Rejang_Lebong_6").style["mix-blend-mode"] = "normal";
      var layer_Rejang_Lebong_6 = new L.geoJson(json_Rejang_Lebong_6, {
        attribution: "",
        interactive: true,
        dataVar: "json_Rejang_Lebong_6",
        layerName: "layer_Rejang_Lebong_6",
        pane: "pane_Rejang_Lebong_6",
        onEachFeature: pop_Rejang_Lebong_6,
        style: style_Rejang_Lebong_6_0,
      });
      bounds_group.addLayer(layer_Rejang_Lebong_6);
      map.addLayer(layer_Rejang_Lebong_6);
      function pop_Seluma_7(feature, layer) {
        var popupContent =
          '<table>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPPUM"] !== null
            ? autolinker.link(feature.properties["KDPPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["NAMOBJ"] !== null
            ? autolinker.link(feature.properties["NAMOBJ"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["REMARK"] !== null
            ? autolinker.link(feature.properties["REMARK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPBPS"] !== null
            ? autolinker.link(feature.properties["KDPBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["FCODE"] !== null
            ? autolinker.link(feature.properties["FCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LUASWH"] !== null
            ? autolinker.link(feature.properties["LUASWH"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["UUPP"] !== null
            ? autolinker.link(feature.properties["UUPP"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SRS_ID"] !== null
            ? autolinker.link(feature.properties["SRS_ID"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LCODE"] !== null
            ? autolinker.link(feature.properties["LCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["METADATA"] !== null
            ? autolinker.link(feature.properties["METADATA"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEBPS"] !== null
            ? autolinker.link(feature.properties["KDEBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEPUM"] !== null
            ? autolinker.link(feature.properties["KDEPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCBPS"] !== null
            ? autolinker.link(feature.properties["KDCBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCPUM"] !== null
            ? autolinker.link(feature.properties["KDCPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBBPS"] !== null
            ? autolinker.link(feature.properties["KDBBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBPUM"] !== null
            ? autolinker.link(feature.properties["KDBPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKD"] !== null
            ? autolinker.link(feature.properties["WADMKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKD"] !== null
            ? autolinker.link(feature.properties["WIADKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKC"] !== null
            ? autolinker.link(feature.properties["WADMKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKC"] !== null
            ? autolinker.link(feature.properties["WIADKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKK"] !== null
            ? autolinker.link(feature.properties["WADMKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKK"] !== null
            ? autolinker.link(feature.properties["WIADKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMPR"] !== null
            ? autolinker.link(feature.properties["WADMPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADPR"] !== null
            ? autolinker.link(feature.properties["WIADPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["TIPADM"] !== null
            ? autolinker.link(feature.properties["TIPADM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Leng"] !== null
            ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Area"] !== null
            ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString())
            : "") +
          "</td>\
                    </tr>\
                </table>";
        layer.bindPopup(popupContent, { maxHeight: 400 });
      }

      function style_Seluma_7_0() {
        return {
          pane: "pane_Seluma_7",
          opacity: 1,
          color: "rgba(35,35,35,1.0)",
          dashArray: "",
          lineCap: "butt",
          lineJoin: "miter",
          weight: 1.0,
          fill: true,
          fillOpacity: 1,
          fillColor: "rgba(114,155,111,1.0)",
          interactive: true,
        };
      }
      map.createPane("pane_Seluma_7");
      map.getPane("pane_Seluma_7").style.zIndex = 407;
      map.getPane("pane_Seluma_7").style["mix-blend-mode"] = "normal";
      var layer_Seluma_7 = new L.geoJson(json_Seluma_7, {
        attribution: "",
        interactive: true,
        dataVar: "json_Seluma_7",
        layerName: "layer_Seluma_7",
        pane: "pane_Seluma_7",
        onEachFeature: pop_Seluma_7,
        style: style_Seluma_7_0,
      });
      bounds_group.addLayer(layer_Seluma_7);
      map.addLayer(layer_Seluma_7);
      function pop_MukoMuko_8(feature, layer) {
        var popupContent =
          '<table>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPPUM"] !== null
            ? autolinker.link(feature.properties["KDPPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["NAMOBJ"] !== null
            ? autolinker.link(feature.properties["NAMOBJ"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["REMARK"] !== null
            ? autolinker.link(feature.properties["REMARK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPBPS"] !== null
            ? autolinker.link(feature.properties["KDPBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["FCODE"] !== null
            ? autolinker.link(feature.properties["FCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LUASWH"] !== null
            ? autolinker.link(feature.properties["LUASWH"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["UUPP"] !== null
            ? autolinker.link(feature.properties["UUPP"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SRS_ID"] !== null
            ? autolinker.link(feature.properties["SRS_ID"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LCODE"] !== null
            ? autolinker.link(feature.properties["LCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["METADATA"] !== null
            ? autolinker.link(feature.properties["METADATA"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEBPS"] !== null
            ? autolinker.link(feature.properties["KDEBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEPUM"] !== null
            ? autolinker.link(feature.properties["KDEPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCBPS"] !== null
            ? autolinker.link(feature.properties["KDCBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCPUM"] !== null
            ? autolinker.link(feature.properties["KDCPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBBPS"] !== null
            ? autolinker.link(feature.properties["KDBBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBPUM"] !== null
            ? autolinker.link(feature.properties["KDBPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKD"] !== null
            ? autolinker.link(feature.properties["WADMKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKD"] !== null
            ? autolinker.link(feature.properties["WIADKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKC"] !== null
            ? autolinker.link(feature.properties["WADMKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKC"] !== null
            ? autolinker.link(feature.properties["WIADKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKK"] !== null
            ? autolinker.link(feature.properties["WADMKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKK"] !== null
            ? autolinker.link(feature.properties["WIADKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMPR"] !== null
            ? autolinker.link(feature.properties["WADMPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADPR"] !== null
            ? autolinker.link(feature.properties["WIADPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["TIPADM"] !== null
            ? autolinker.link(feature.properties["TIPADM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Leng"] !== null
            ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Area"] !== null
            ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString())
            : "") +
          "</td>\
                    </tr>\
                </table>";
        layer.bindPopup(popupContent, { maxHeight: 400 });
      }

      function style_MukoMuko_8_0() {
        return {
          pane: "pane_MukoMuko_8",
          opacity: 1,
          color: "rgba(35,35,35,1.0)",
          dashArray: "",
          lineCap: "butt",
          lineJoin: "miter",
          weight: 1.0,
          fill: true,
          fillOpacity: 1,
          fillColor: "rgba(255,81,1,1.0)",
          interactive: true,
        };
      }
      map.createPane("pane_MukoMuko_8");
      map.getPane("pane_MukoMuko_8").style.zIndex = 408;
      map.getPane("pane_MukoMuko_8").style["mix-blend-mode"] = "normal";
      var layer_MukoMuko_8 = new L.geoJson(json_MukoMuko_8, {
        attribution: "",
        interactive: true,
        dataVar: "json_MukoMuko_8",
        layerName: "layer_MukoMuko_8",
        pane: "pane_MukoMuko_8",
        onEachFeature: pop_MukoMuko_8,
        style: style_MukoMuko_8_0,
      });
      bounds_group.addLayer(layer_MukoMuko_8);
      map.addLayer(layer_MukoMuko_8);
      function pop_Bengkulu_Utara_9(feature, layer) {
        var popupContent =
          '<table>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPPUM"] !== null
            ? autolinker.link(feature.properties["KDPPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["NAMOBJ"] !== null
            ? autolinker.link(feature.properties["NAMOBJ"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["REMARK"] !== null
            ? autolinker.link(feature.properties["REMARK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPBPS"] !== null
            ? autolinker.link(feature.properties["KDPBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["FCODE"] !== null
            ? autolinker.link(feature.properties["FCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LUASWH"] !== null
            ? autolinker.link(feature.properties["LUASWH"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["UUPP"] !== null
            ? autolinker.link(feature.properties["UUPP"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SRS_ID"] !== null
            ? autolinker.link(feature.properties["SRS_ID"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LCODE"] !== null
            ? autolinker.link(feature.properties["LCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["METADATA"] !== null
            ? autolinker.link(feature.properties["METADATA"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEBPS"] !== null
            ? autolinker.link(feature.properties["KDEBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEPUM"] !== null
            ? autolinker.link(feature.properties["KDEPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCBPS"] !== null
            ? autolinker.link(feature.properties["KDCBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCPUM"] !== null
            ? autolinker.link(feature.properties["KDCPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBBPS"] !== null
            ? autolinker.link(feature.properties["KDBBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBPUM"] !== null
            ? autolinker.link(feature.properties["KDBPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKD"] !== null
            ? autolinker.link(feature.properties["WADMKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKD"] !== null
            ? autolinker.link(feature.properties["WIADKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKC"] !== null
            ? autolinker.link(feature.properties["WADMKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKC"] !== null
            ? autolinker.link(feature.properties["WIADKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKK"] !== null
            ? autolinker.link(feature.properties["WADMKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKK"] !== null
            ? autolinker.link(feature.properties["WIADKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMPR"] !== null
            ? autolinker.link(feature.properties["WADMPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADPR"] !== null
            ? autolinker.link(feature.properties["WIADPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["TIPADM"] !== null
            ? autolinker.link(feature.properties["TIPADM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Leng"] !== null
            ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Area"] !== null
            ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString())
            : "") +
          "</td>\
                    </tr>\
                </table>";
        layer.bindPopup(popupContent, { maxHeight: 400 });
      }

      function style_Bengkulu_Utara_9_0() {
        return {
          pane: "pane_Bengkulu_Utara_9",
          opacity: 1,
          color: "rgba(35,35,35,1.0)",
          dashArray: "",
          lineCap: "butt",
          lineJoin: "miter",
          weight: 1.0,
          fill: true,
          fillOpacity: 1,
          fillColor: "rgba(1,200,255,1.0)",
          interactive: true,
        };
      }
      map.createPane("pane_Bengkulu_Utara_9");
      map.getPane("pane_Bengkulu_Utara_9").style.zIndex = 409;
      map.getPane("pane_Bengkulu_Utara_9").style["mix-blend-mode"] = "normal";
      var layer_Bengkulu_Utara_9 = new L.geoJson(json_Bengkulu_Utara_9, {
        attribution: "",
        interactive: true,
        dataVar: "json_Bengkulu_Utara_9",
        layerName: "layer_Bengkulu_Utara_9",
        pane: "pane_Bengkulu_Utara_9",
        onEachFeature: pop_Bengkulu_Utara_9,
        style: style_Bengkulu_Utara_9_0,
      });
      bounds_group.addLayer(layer_Bengkulu_Utara_9);
      map.addLayer(layer_Bengkulu_Utara_9);
      function pop_Kaur_10(feature, layer) {
        var popupContent =
          '<table>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPPUM"] !== null
            ? autolinker.link(feature.properties["KDPPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["NAMOBJ"] !== null
            ? autolinker.link(feature.properties["NAMOBJ"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["REMARK"] !== null
            ? autolinker.link(feature.properties["REMARK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDPBPS"] !== null
            ? autolinker.link(feature.properties["KDPBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["FCODE"] !== null
            ? autolinker.link(feature.properties["FCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LUASWH"] !== null
            ? autolinker.link(feature.properties["LUASWH"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["UUPP"] !== null
            ? autolinker.link(feature.properties["UUPP"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SRS_ID"] !== null
            ? autolinker.link(feature.properties["SRS_ID"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["LCODE"] !== null
            ? autolinker.link(feature.properties["LCODE"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["METADATA"] !== null
            ? autolinker.link(feature.properties["METADATA"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEBPS"] !== null
            ? autolinker.link(feature.properties["KDEBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDEPUM"] !== null
            ? autolinker.link(feature.properties["KDEPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCBPS"] !== null
            ? autolinker.link(feature.properties["KDCBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDCPUM"] !== null
            ? autolinker.link(feature.properties["KDCPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBBPS"] !== null
            ? autolinker.link(feature.properties["KDBBPS"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["KDBPUM"] !== null
            ? autolinker.link(feature.properties["KDBPUM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKD"] !== null
            ? autolinker.link(feature.properties["WADMKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKD"] !== null
            ? autolinker.link(feature.properties["WIADKD"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKC"] !== null
            ? autolinker.link(feature.properties["WADMKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKC"] !== null
            ? autolinker.link(feature.properties["WIADKC"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMKK"] !== null
            ? autolinker.link(feature.properties["WADMKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADKK"] !== null
            ? autolinker.link(feature.properties["WIADKK"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WADMPR"] !== null
            ? autolinker.link(feature.properties["WADMPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["WIADPR"] !== null
            ? autolinker.link(feature.properties["WIADPR"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["TIPADM"] !== null
            ? autolinker.link(feature.properties["TIPADM"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Leng"] !== null
            ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["SHAPE_Area"] !== null
            ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString())
            : "") +
          "</td>\
                    </tr>\
                </table>";
        layer.bindPopup(popupContent, { maxHeight: 400 });
      }

      function style_Kaur_10_0() {
        return {
          pane: "pane_Kaur_10",
          opacity: 1,
          color: "rgba(35,35,35,1.0)",
          dashArray: "",
          lineCap: "butt",
          lineJoin: "miter",
          weight: 1.0,
          fill: true,
          fillOpacity: 1,
          fillColor: "rgba(1,255,149,1.0)",
          interactive: true,
        };
      }
      map.createPane("pane_Kaur_10");
      map.getPane("pane_Kaur_10").style.zIndex = 410;
      map.getPane("pane_Kaur_10").style["mix-blend-mode"] = "normal";
      var layer_Kaur_10 = new L.geoJson(json_Kaur_10, {
        attribution: "",
        interactive: true,
        dataVar: "json_Kaur_10",
        layerName: "layer_Kaur_10",
        pane: "pane_Kaur_10",
        onEachFeature: pop_Kaur_10,
        style: style_Kaur_10_0,
      });
      bounds_group.addLayer(layer_Kaur_10);
      map.addLayer(layer_Kaur_10);
      function pop_Data_Longsor_11(feature, layer) {
        var popupContent =
          '<table>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["id"] !== null
            ? autolinker.link(feature.properties["id"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>Kabupaten</strong><br />' +
          (feature.properties["Kabupaten"] !== null
            ? autolinker.link(feature.properties["Kabupaten"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>Kecamatan</strong><br />' +
          (feature.properties["Kecamatan"] !== null
            ? autolinker.link(feature.properties["Kecamatan"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>Tanggal</strong><br />' +
          (feature.properties["Tanggal"] !== null
            ? autolinker.link(feature.properties["Tanggal"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>KorbanJiwa</strong><br />' +
          (feature.properties["KorbanJiwa"] !== null
            ? autolinker.link(feature.properties["KorbanJiwa"].toLocaleString())
            : "") +
          "</td>\
                    </tr>\
                </table>";
        layer.bindPopup(popupContent, { maxHeight: 400 });
      }

      function style_Data_Longsor_11_0() {
        return {
          pane: "pane_Data_Longsor_11",
          rotationAngle: 0.0,
          rotationOrigin: "center center",
          icon: L.icon({
            iconUrl: "page/markers/red-marker.svg",
            iconSize: [21.279999999999998, 21.279999999999998],
          }),
          interactive: true,
        };
      }
      map.createPane("pane_Data_Longsor_11");
      map.getPane("pane_Data_Longsor_11").style.zIndex = 411;
      map.getPane("pane_Data_Longsor_11").style["mix-blend-mode"] = "normal";
      var layer_Data_Longsor_11 = new L.geoJson(json_Data_Longsor_11, {
        attribution: "",
        interactive: true,
        dataVar: "json_Data_Longsor_11",
        layerName: "layer_Data_Longsor_11",
        pane: "pane_Data_Longsor_11",
        onEachFeature: pop_Data_Longsor_11,
        pointToLayer: function (feature, latlng) {
          var context = {
            feature: feature,
            variables: {},
          };
          return L.marker(latlng, style_Data_Longsor_11_0(feature));
        },
      });
      bounds_group.addLayer(layer_Data_Longsor_11);
      map.addLayer(layer_Data_Longsor_11);
      var osmGeocoder = new L.Control.Geocoder({
        collapsed: true,
        position: "topleft",
        text: "Search",
        title: "Testing",
      }).addTo(map);
      document.getElementsByClassName(
        "leaflet-control-geocoder-icon"
      )[0].className += " fa fa-search";
      document.getElementsByClassName(
        "leaflet-control-geocoder-icon"
      )[0].title += "Search for a place";
      var baseMaps = {};
      L.control
        .layers(baseMaps, {
          '<img src="page/legend/Data_Longsor_11.png" /> Data_Longsor':
            layer_Data_Longsor_11,
          '<img src="page/legend/Kaur_10.png" /> Kaur': layer_Kaur_10,
          '<img src="page/legend/Bengkulu_Utara_9.png" /> Bengkulu_Utara':
            layer_Bengkulu_Utara_9,
          '<img src="page/legend/MukoMuko_8.png" /> Muko-Muko':
            layer_MukoMuko_8,
          '<img src="page/legend/Seluma_7.png" /> Seluma': layer_Seluma_7,
          '<img src="page/legend/Rejang_Lebong_6.png" /> Rejang_Lebong':
            layer_Rejang_Lebong_6,
          '<img src="page/legend/Bengkulu_Selatan_5.png" /> Bengkulu_Selatan':
            layer_Bengkulu_Selatan_5,
          '<img src="page/legend/Bengkulu_Tengah_4.png" /> Bengkulu_Tengah':
            layer_Bengkulu_Tengah_4,
          '<img src="page/legend/Lebong_3.png" /> Lebong': layer_Lebong_3,
          '<img src="page/legend/Kepahiang_2.png" /> Kepahiang':
            layer_Kepahiang_2,
          '<img src="page/legend/Bengkulu_1.png" /> Bengkulu': layer_Bengkulu_1,
          "Google Maps": layer_GoogleMaps_0,
        })
        .addTo(map);
      setBounds();
      var i = 0;
      layer_Data_Longsor_11.eachLayer(function (layer) {
        var context = {
          feature: layer.feature,
          variables: {},
        };
        layer.bindTooltip(
          layer.feature.properties["Kabupaten"] !== null
            ? String(
                "<div style=\"color: #323232; font-size: 10pt; font-family: 'Segoe UI Semibold', sans-serif;\">" +
                  layer.feature.properties["Kabupaten"]
              ) + "</div>"
            : "",
          {
            permanent: true,
            offset: [-0, -16],
            className: "css_Data_Longsor_11",
          }
        );
        labels.push(layer);
        totalMarkers += 1;
        layer.added = true;
        addLabel(layer, i);
        i++;
      });
      resetLabels([layer_Data_Longsor_11]);
      map.on("zoomend", function () {
        resetLabels([layer_Data_Longsor_11]);
      });
      map.on("layeradd", function () {
        resetLabels([layer_Data_Longsor_11]);
      });
      map.on("layerremove", function () {
        resetLabels([layer_Data_Longsor_11]);
      });
    </script>
  </body>
</html>
