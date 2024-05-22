
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>BanjirInfo.DIY</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon" />
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet"
  />

  <!-- Vendor CSS Files -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="fontawesome-free/css/all.min.css" rel="stylesheet" />
  <link href="glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link href="aos/aos.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width" />
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link rel="stylesheet" href="css/leaflet.css" />
  <link rel="stylesheet" href="css/L.Control.Locate.min.css" />
  <link rel="stylesheet" href="css/qgis2web.css" />
  <link rel="stylesheet" href="css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="css/leaflet-control-geocoder.Geocoder.css" />
  <link rel="stylesheet" href="css/leaflet-measure.css" />
  <style>
    #map {
      height: 78vh;
      width: 100%;
    }
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="home.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="img/logo.png" alt="" />
        <h1>BanjirInfo.DIY</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php" class="active">Services</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a class="other" href="other.php">Other</a></li>
          <li><a href="logoutpage.php">Logout</a></li>
        </ul>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('img/page-header.gif')">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Service Details</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="home.php">Home</a></li>
            <li>Service Details</li>
          </ol>
        </div>
      </nav>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-4">
            <div class="services-list">
              <a href="#" class="active">Peta Bencana Banjir</a>
            </div>
          </div>
          <div id="map"></div>
          <script src="js/qgis2web_expressions.js"></script>
          <script src="js/leaflet.js"></script>
          <script src="js/L.Control.Locate.min.js"></script>
          <script src="js/leaflet.rotatedMarker.js"></script>
          <script src="js/leaflet.pattern.js"></script>
          <script src="js/leaflet-hash.js"></script>
          <script src="js/Autolinker.min.js"></script>
          <script src="js/rbush.min.js"></script>
          <script src="js/labelgun.min.js"></script>
          <script src="js/labels.js"></script>
          <script src="js/leaflet-control-geocoder.Geocoder.js"></script>
          <script src="js/leaflet-measure.js"></script>
          <script src="data/AdministrasiDesa_1.js"></script>
          <script src="data/DesaTerdampak_2.js"></script>
          <script src="data/Sungai_3.js"></script>
          <script src="data/Kebun_4.js"></script>
          <script src="data/Ladang_5.js"></script>
          <script src="data/Sawah_6.js"></script>
          <script src="data/Bangunan_7.js"></script>
          <script src="data/Danau_8.js"></script>
          <script src="data/Pemukiman_9.js"></script>
          <script src="data/Jalan_10.js"></script>
          <script src="data/Pemerintahan_11.js"></script>
          <script>
            var map = L.map("map", {
              zoomControl: true,
              maxZoom: 28,
              minZoom: 1,
            }).fitBounds([
              [-7.838087245449691, 110.31245430581042],
              [-7.7679620307896124, 110.42852904738703],
            ]);
            var hash = new L.Hash(map);
            map.attributionControl.setPrefix(
              '<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>'
            );
            var autolinker = new Autolinker({ truncate: { length: 30, location: "smart" } });
            function removeEmptyRowsFromPopupContent(content, feature) {
              var tempDiv = document.createElement("div");
              tempDiv.innerHTML = content;
              var rows = tempDiv.querySelectorAll("tr");
              for (var i = 0; i < rows.length; i++) {
                var td = rows[i].querySelector("td.visible-with-data");
                var key = td ? td.id : "";
                if (td && td.classList.contains("visible-with-data") && feature.properties[key] == null) {
                  rows[i].parentNode.removeChild(rows[i]);
                }
              }
              return tempDiv.innerHTML;
            }
            document.querySelector(".leaflet-popup-pane").addEventListener(
              "load",
              function (event) {
                var tagName = event.target.tagName,
                  popup = map._popup;
                // Also check if flag is already set.
                if (tagName === "IMG" && popup && !popup._updated) {
                  popup._updated = true; // Set flag to prevent looping.
                  popup.update();
                }
              },
              true
            );
            L.control.locate({ locateOptions: { maxZoom: 19 } }).addTo(map);
            var measureControl = new L.Control.Measure({
              position: "topleft",
              primaryLengthUnit: "meters",
              secondaryLengthUnit: "kilometers",
              primaryAreaUnit: "sqmeters",
              secondaryAreaUnit: "hectares",
            });
            measureControl.addTo(map);
            document.getElementsByClassName("leaflet-control-measure-toggle")[0].innerHTML = "";
            document.getElementsByClassName("leaflet-control-measure-toggle")[0].className += " fas fa-ruler";
            var bounds_group = new L.featureGroup([]);
            function setBounds() {}
            map.createPane("pane_OSMStandard_0");
            map.getPane("pane_OSMStandard_0").style.zIndex = 400;
            var layer_OSMStandard_0 = L.tileLayer("http://tile.openstreetmap.org/{z}/{x}/{y}.png", {
              pane: "pane_OSMStandard_0",
              opacity: 1.0,
              attribution: '<a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors, CC-BY-SA</a>',
              minZoom: 1,
              maxZoom: 28,
              minNativeZoom: 0,
              maxNativeZoom: 19,
            });
            layer_OSMStandard_0;
            map.addLayer(layer_OSMStandard_0);
            function pop_AdministrasiDesa_1(feature, layer) {
              var popupContent =
                '<table>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["status_kot"] !== null ? autolinker.link(feature.properties["status_kot"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["kode_2008"] !== null ? autolinker.link(feature.properties["kode_2008"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["desa_2008"] !== null ? autolinker.link(feature.properties["desa_2008"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["kec_2008"] !== null ? autolinker.link(feature.properties["kec_2008"].toLocaleString()) : "") +
                "</td>\
                  </tr>\
              </table>";
              layer.bindPopup(popupContent, { maxHeight: 400 });
              var popup = layer.getPopup();
              var content = popup.getContent();
              var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
              popup.setContent(updatedContent);
            }

            function style_AdministrasiDesa_1_0() {
              return {
                pane: "pane_AdministrasiDesa_1",
                opacity: 1,
                color: "rgba(35,35,35,1.0)",
                dashArray: "",
                lineCap: "butt",
                lineJoin: "miter",
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: "rgba(212,196,175,1.0)",
                interactive: false,
              };
            }
            map.createPane("pane_AdministrasiDesa_1");
            map.getPane("pane_AdministrasiDesa_1").style.zIndex = 401;
            map.getPane("pane_AdministrasiDesa_1").style["mix-blend-mode"] = "normal";
            var layer_AdministrasiDesa_1 = new L.geoJson(json_AdministrasiDesa_1, {
              attribution: "",
              interactive: false,
              dataVar: "json_AdministrasiDesa_1",
              layerName: "layer_AdministrasiDesa_1",
              pane: "pane_AdministrasiDesa_1",
              onEachFeature: pop_AdministrasiDesa_1,
              style: style_AdministrasiDesa_1_0,
            });
            bounds_group.addLayer(layer_AdministrasiDesa_1);
            map.addLayer(layer_AdministrasiDesa_1);
            function pop_DesaTerdampak_2(feature, layer) {
              var popupContent =
                '<table>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["status_kot"] !== null ? autolinker.link(feature.properties["status_kot"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <th scope="row">kode_2008</th>\
                      <td class="visible-with-data" id="kode_2008">' +
                (feature.properties["kode_2008"] !== null ? autolinker.link(feature.properties["kode_2008"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <th scope="row">desa_2008</th>\
                      <td class="visible-with-data" id="desa_2008">' +
                (feature.properties["desa_2008"] !== null ? autolinker.link(feature.properties["desa_2008"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <th scope="row">kec_2008</th>\
                      <td class="visible-with-data" id="kec_2008">' +
                (feature.properties["kec_2008"] !== null ? autolinker.link(feature.properties["kec_2008"].toLocaleString()) : "") +
                "</td>\
                  </tr>\
              </table>";
              layer.bindPopup(popupContent, { maxHeight: 400 });
              var popup = layer.getPopup();
              var content = popup.getContent();
              var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
              popup.setContent(updatedContent);
            }

            function style_DesaTerdampak_2_0() {
              return {
                pane: "pane_DesaTerdampak_2",
                opacity: 1,
                color: "rgba(35,35,35,1.0)",
                dashArray: "",
                lineCap: "butt",
                lineJoin: "miter",
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: "rgba(196,60,57,1.0)",
                interactive: true,
              };
            }
            map.createPane("pane_DesaTerdampak_2");
            map.getPane("pane_DesaTerdampak_2").style.zIndex = 402;
            map.getPane("pane_DesaTerdampak_2").style["mix-blend-mode"] = "normal";
            var layer_DesaTerdampak_2 = new L.geoJson(json_DesaTerdampak_2, {
              attribution: "",
              interactive: true,
              dataVar: "json_DesaTerdampak_2",
              layerName: "layer_DesaTerdampak_2",
              pane: "pane_DesaTerdampak_2",
              onEachFeature: pop_DesaTerdampak_2,
              style: style_DesaTerdampak_2_0,
            });
            bounds_group.addLayer(layer_DesaTerdampak_2);
            map.addLayer(layer_DesaTerdampak_2);
            function pop_Sungai_3(feature, layer) {
              var popupContent =
                '<table>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["id"] !== null ? autolinker.link(feature.properties["id"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <th scope="row">Nama</th>\
                      <td class="visible-with-data" id="Nama">' +
                (feature.properties["Nama"] !== null ? autolinker.link(feature.properties["Nama"].toLocaleString()) : "") +
                "</td>\
                  </tr>\
              </table>";
              layer.bindPopup(popupContent, { maxHeight: 400 });
              var popup = layer.getPopup();
              var content = popup.getContent();
              var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
              popup.setContent(updatedContent);
            }

            function style_Sungai_3_0() {
              return {
                pane: "pane_Sungai_3",
                opacity: 1,
                color: "rgba(35,35,35,1.0)",
                dashArray: "",
                lineCap: "butt",
                lineJoin: "miter",
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: "rgba(85,255,255,1.0)",
                interactive: true,
              };
            }
            map.createPane("pane_Sungai_3");
            map.getPane("pane_Sungai_3").style.zIndex = 403;
            map.getPane("pane_Sungai_3").style["mix-blend-mode"] = "normal";
            var layer_Sungai_3 = new L.geoJson(json_Sungai_3, {
              attribution: "",
              interactive: true,
              dataVar: "json_Sungai_3",
              layerName: "layer_Sungai_3",
              pane: "pane_Sungai_3",
              onEachFeature: pop_Sungai_3,
              style: style_Sungai_3_0,
            });
            bounds_group.addLayer(layer_Sungai_3);
            map.addLayer(layer_Sungai_3);
            function pop_Kebun_4(feature, layer) {
              var popupContent =
                '<table>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["REMARK"] !== null ? autolinker.link(feature.properties["REMARK"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["SHAPE_Leng"] !== null ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["SHAPE_Area"] !== null ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString()) : "") +
                "</td>\
                  </tr>\
              </table>";
              layer.bindPopup(popupContent, { maxHeight: 400 });
              var popup = layer.getPopup();
              var content = popup.getContent();
              var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
              popup.setContent(updatedContent);
            }

            function style_Kebun_4_0() {
              return {
                pane: "pane_Kebun_4",
                opacity: 1,
                color: "rgba(35,35,35,1.0)",
                dashArray: "",
                lineCap: "butt",
                lineJoin: "miter",
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: "rgba(0,132,13,1.0)",
                interactive: false,
              };
            }
            map.createPane("pane_Kebun_4");
            map.getPane("pane_Kebun_4").style.zIndex = 404;
            map.getPane("pane_Kebun_4").style["mix-blend-mode"] = "normal";
            var layer_Kebun_4 = new L.geoJson(json_Kebun_4, {
              attribution: "",
              interactive: false,
              dataVar: "json_Kebun_4",
              layerName: "layer_Kebun_4",
              pane: "pane_Kebun_4",
              onEachFeature: pop_Kebun_4,
              style: style_Kebun_4_0,
            });
            bounds_group.addLayer(layer_Kebun_4);
            map.addLayer(layer_Kebun_4);
            function pop_Ladang_5(feature, layer) {
              var popupContent =
                '<table>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["REMARK"] !== null ? autolinker.link(feature.properties["REMARK"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["SHAPE_Leng"] !== null ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["SHAPE_Area"] !== null ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString()) : "") +
                "</td>\
                  </tr>\
              </table>";
              layer.bindPopup(popupContent, { maxHeight: 400 });
              var popup = layer.getPopup();
              var content = popup.getContent();
              var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
              popup.setContent(updatedContent);
            }

            function style_Ladang_5_0() {
              return {
                pane: "pane_Ladang_5",
                opacity: 1,
                color: "rgba(35,35,35,1.0)",
                dashArray: "",
                lineCap: "butt",
                lineJoin: "miter",
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: "rgba(229,182,54,1.0)",
                interactive: false,
              };
            }
            map.createPane("pane_Ladang_5");
            map.getPane("pane_Ladang_5").style.zIndex = 405;
            map.getPane("pane_Ladang_5").style["mix-blend-mode"] = "normal";
            var layer_Ladang_5 = new L.geoJson(json_Ladang_5, {
              attribution: "",
              interactive: false,
              dataVar: "json_Ladang_5",
              layerName: "layer_Ladang_5",
              pane: "pane_Ladang_5",
              onEachFeature: pop_Ladang_5,
              style: style_Ladang_5_0,
            });
            bounds_group.addLayer(layer_Ladang_5);
            map.addLayer(layer_Ladang_5);
            function pop_Sawah_6(feature, layer) {
              var popupContent =
                '<table>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["REMARK"] !== null ? autolinker.link(feature.properties["REMARK"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["SHAPE_Leng"] !== null ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["SHAPE_Area"] !== null ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString()) : "") +
                "</td>\
                  </tr>\
              </table>";
              layer.bindPopup(popupContent, { maxHeight: 400 });
              var popup = layer.getPopup();
              var content = popup.getContent();
              var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
              popup.setContent(updatedContent);
            }

            function style_Sawah_6_0() {
              return {
                pane: "pane_Sawah_6",
                opacity: 1,
                color: "rgba(35,35,35,1.0)",
                dashArray: "",
                lineCap: "butt",
                lineJoin: "miter",
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: "rgba(158,255,139,1.0)",
                interactive: false,
              };
            }
            map.createPane("pane_Sawah_6");
            map.getPane("pane_Sawah_6").style.zIndex = 406;
            map.getPane("pane_Sawah_6").style["mix-blend-mode"] = "normal";
            var layer_Sawah_6 = new L.geoJson(json_Sawah_6, {
              attribution: "",
              interactive: false,
              dataVar: "json_Sawah_6",
              layerName: "layer_Sawah_6",
              pane: "pane_Sawah_6",
              onEachFeature: pop_Sawah_6,
              style: style_Sawah_6_0,
            });
            bounds_group.addLayer(layer_Sawah_6);
            map.addLayer(layer_Sawah_6);
            function pop_Bangunan_7(feature, layer) {
              var popupContent =
                '<table>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["REMARK"] !== null ? autolinker.link(feature.properties["REMARK"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["SHAPE_Leng"] !== null ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["SHAPE_Area"] !== null ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString()) : "") +
                "</td>\
                  </tr>\
              </table>";
              layer.bindPopup(popupContent, { maxHeight: 400 });
              var popup = layer.getPopup();
              var content = popup.getContent();
              var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
              popup.setContent(updatedContent);
            }

            function style_Bangunan_7_0() {
              return {
                pane: "pane_Bangunan_7",
                opacity: 1,
                color: "rgba(35,35,35,1.0)",
                dashArray: "",
                lineCap: "butt",
                lineJoin: "miter",
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: "rgba(130,140,126,1.0)",
                interactive: false,
              };
            }
            map.createPane("pane_Bangunan_7");
            map.getPane("pane_Bangunan_7").style.zIndex = 407;
            map.getPane("pane_Bangunan_7").style["mix-blend-mode"] = "normal";
            var layer_Bangunan_7 = new L.geoJson(json_Bangunan_7, {
              attribution: "",
              interactive: false,
              dataVar: "json_Bangunan_7",
              layerName: "layer_Bangunan_7",
              pane: "pane_Bangunan_7",
              onEachFeature: pop_Bangunan_7,
              style: style_Bangunan_7_0,
            });
            bounds_group.addLayer(layer_Bangunan_7);
            map.addLayer(layer_Bangunan_7);
            function pop_Danau_8(feature, layer) {
              var popupContent =
                '<table>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["REMARK"] !== null ? autolinker.link(feature.properties["REMARK"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["SHAPE_Leng"] !== null ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["SHAPE_Area"] !== null ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString()) : "") +
                "</td>\
                  </tr>\
              </table>";
              layer.bindPopup(popupContent, { maxHeight: 400 });
              var popup = layer.getPopup();
              var content = popup.getContent();
              var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
              popup.setContent(updatedContent);
            }

            function style_Danau_8_0() {
              return {
                pane: "pane_Danau_8",
                opacity: 1,
                color: "rgba(35,35,35,1.0)",
                dashArray: "",
                lineCap: "butt",
                lineJoin: "miter",
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: "rgba(0,170,255,1.0)",
                interactive: false,
              };
            }
            map.createPane("pane_Danau_8");
            map.getPane("pane_Danau_8").style.zIndex = 408;
            map.getPane("pane_Danau_8").style["mix-blend-mode"] = "normal";
            var layer_Danau_8 = new L.geoJson(json_Danau_8, {
              attribution: "",
              interactive: false,
              dataVar: "json_Danau_8",
              layerName: "layer_Danau_8",
              pane: "pane_Danau_8",
              onEachFeature: pop_Danau_8,
              style: style_Danau_8_0,
            });
            bounds_group.addLayer(layer_Danau_8);
            map.addLayer(layer_Danau_8);
            function pop_Pemukiman_9(feature, layer) {
              var popupContent =
                '<table>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["REMARK"] !== null ? autolinker.link(feature.properties["REMARK"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["SHAPE_Leng"] !== null ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["SHAPE_Area"] !== null ? autolinker.link(feature.properties["SHAPE_Area"].toLocaleString()) : "") +
                "</td>\
                  </tr>\
              </table>";
              layer.bindPopup(popupContent, { maxHeight: 400 });
              var popup = layer.getPopup();
              var content = popup.getContent();
              var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
              popup.setContent(updatedContent);
            }

            function style_Pemukiman_9_0() {
              return {
                pane: "pane_Pemukiman_9",
                opacity: 1,
                color: "rgba(35,35,35,1.0)",
                dashArray: "",
                lineCap: "butt",
                lineJoin: "miter",
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: "rgba(145,82,45,1.0)",
                interactive: false,
              };
            }
            map.createPane("pane_Pemukiman_9");
            map.getPane("pane_Pemukiman_9").style.zIndex = 409;
            map.getPane("pane_Pemukiman_9").style["mix-blend-mode"] = "normal";
            var layer_Pemukiman_9 = new L.geoJson(json_Pemukiman_9, {
              attribution: "",
              interactive: false,
              dataVar: "json_Pemukiman_9",
              layerName: "layer_Pemukiman_9",
              pane: "pane_Pemukiman_9",
              onEachFeature: pop_Pemukiman_9,
              style: style_Pemukiman_9_0,
            });
            bounds_group.addLayer(layer_Pemukiman_9);
            map.addLayer(layer_Pemukiman_9);
            function pop_Jalan_10(feature, layer) {
              var popupContent =
                '<table>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["REMARK"] !== null ? autolinker.link(feature.properties["REMARK"].toLocaleString()) : "") +
                '</td>\
                  </tr>\
                  <tr>\
                      <td colspan="2">' +
                (feature.properties["SHAPE_Leng"] !== null ? autolinker.link(feature.properties["SHAPE_Leng"].toLocaleString()) : "") +
                "</td>\
                  </tr>\
              </table>";
              layer.bindPopup(popupContent, { maxHeight: 400 });
              var popup = layer.getPopup();
              var content = popup.getContent();
              var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
              popup.setContent(updatedContent);
            }

            function style_Jalan_10_0(feature) {
              switch (String(feature.properties["REMARK"])) {
                case "Jalan Arteri":
                  return {
                    pane: "pane_Jalan_10",
                    opacity: 1,
                    color: "rgba(255,81,156,1.0)",
                    dashArray: "",
                    lineCap: "square",
                    lineJoin: "bevel",
                    weight: 1.0,
                    fillOpacity: 0,
                    interactive: false,
                  };
                  break;
                case "Jalan Kolektor":
                  return {
                    pane: "pane_Jalan_10",
                    opacity: 1,
                    color: "rgba(188,0,75,1.0)",
                    dashArray: "",
                    lineCap: "square",
                    lineJoin: "bevel",
                    weight: 1.0,
                    fillOpacity: 0,
                    interactive: false,
                  };
                  break;
                case "Jalan Lain":
                  return {
                    pane: "pane_Jalan_10",
                    opacity: 1,
                    color: "rgba(255,170,113,1.0)",
                    dashArray: "",
                    lineCap: "square",
                    lineJoin: "bevel",
                    weight: 1.0,
                    fillOpacity: 0,
                    interactive: false,
                  };
                  break;
                case "Jalan Lokal":
                  return {
                    pane: "pane_Jalan_10",
                    opacity: 1,
                    color: "rgba(255,166,141,1.0)",
                    dashArray: "",
                    lineCap: "square",
                    lineJoin: "bevel",
                    weight: 1.0,
                    fillOpacity: 0,
                    interactive: false,
                  };
                  break;
                case "Jalan Setapak":
                  return {
                    pane: "pane_Jalan_10",
                    opacity: 1,
                    color: "rgba(201,65,255,1.0)",
                    dashArray: "",
                    lineCap: "square",
                    lineJoin: "bevel",
                    weight: 1.0,
                    fillOpacity: 0,
                    interactive: false,
                  };
                  break;
              }
            }
            map.createPane("pane_Jalan_10");
            map.getPane("pane_Jalan_10").style.zIndex = 410;
            map.getPane("pane_Jalan_10").style["mix-blend-mode"] = "normal";
            var layer_Jalan_10 = new L.geoJson(json_Jalan_10, {
              attribution: "",
              interactive: false,
              dataVar: "json_Jalan_10",
              layerName: "layer_Jalan_10",
              pane: "pane_Jalan_10",
              onEachFeature: pop_Jalan_10,
              style: style_Jalan_10_0,
            });
            bounds_group.addLayer(layer_Jalan_10);
            map.addLayer(layer_Jalan_10);
            function pop_Pemerintahan_11(feature, layer) {
              var popupContent =
                '<table>\
                  <tr>\
                      <th scope="row">REMARK</th>\
                      <td>' +
                (feature.properties["REMARK"] !== null ? autolinker.link(feature.properties["REMARK"].toLocaleString()) : "") +
                "</td>\
                  </tr>\
              </table>";
              layer.bindPopup(popupContent, { maxHeight: 400 });
              var popup = layer.getPopup();
              var content = popup.getContent();
              var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
              popup.setContent(updatedContent);
            }

            function style_Pemerintahan_11_0(feature) {
              switch (String(feature.properties["REMARK"])) {
                case "Kantor Camat":
                  return {
                    pane: "pane_Pemerintahan_11",
                    radius: 4.0,
                    opacity: 1,
                    color: "rgba(35,35,35,1.0)",
                    dashArray: "",
                    lineCap: "butt",
                    lineJoin: "miter",
                    weight: 1,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: "rgba(255,238,53,1.0)",
                    interactive: false,
                  };
                  break;
                case "Kantor Gubernur":
                  return {
                    pane: "pane_Pemerintahan_11",
                    radius: 4.0,
                    opacity: 1,
                    color: "rgba(35,35,35,1.0)",
                    dashArray: "",
                    lineCap: "butt",
                    lineJoin: "miter",
                    weight: 1,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: "rgba(251,154,153,1.0)",
                    interactive: false,
                  };
                  break;
                case "Kantor Lurah":
                  return {
                    pane: "pane_Pemerintahan_11",
                    radius: 4.0,
                    opacity: 1,
                    color: "rgba(35,35,35,1.0)",
                    dashArray: "",
                    lineCap: "butt",
                    lineJoin: "miter",
                    weight: 1,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: "rgba(220,151,234,1.0)",
                    interactive: false,
                  };
                  break;
                case "Kantor Polisi":
                  return {
                    pane: "pane_Pemerintahan_11",
                    radius: 4.0,
                    opacity: 1,
                    color: "rgba(35,35,35,1.0)",
                    dashArray: "",
                    lineCap: "butt",
                    lineJoin: "miter",
                    weight: 1,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: "rgba(130,140,126,1.0)",
                    interactive: false,
                  };
                  break;
                case "Kantor Wali Kota":
                  return {
                    pane: "pane_Pemerintahan_11",
                    radius: 4.0,
                    opacity: 1,
                    color: "rgba(35,35,35,1.0)",
                    dashArray: "",
                    lineCap: "butt",
                    lineJoin: "miter",
                    weight: 1,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: "rgba(238,171,137,1.0)",
                    interactive: false,
                  };
                  break;
              }
            }
            map.createPane("pane_Pemerintahan_11");
            map.getPane("pane_Pemerintahan_11").style.zIndex = 411;
            map.getPane("pane_Pemerintahan_11").style["mix-blend-mode"] = "normal";
            var layer_Pemerintahan_11 = new L.geoJson(json_Pemerintahan_11, {
              attribution: "",
              interactive: false,
              dataVar: "json_Pemerintahan_11",
              layerName: "layer_Pemerintahan_11",
              pane: "pane_Pemerintahan_11",
              onEachFeature: pop_Pemerintahan_11,
              pointToLayer: function (feature, latlng) {
                var context = {
                  feature: feature,
                  variables: {},
                };
                return L.circleMarker(latlng, style_Pemerintahan_11_0(feature));
              },
            });
            bounds_group.addLayer(layer_Pemerintahan_11);
            map.addLayer(layer_Pemerintahan_11);
            var osmGeocoder = new L.Control.Geocoder({
              collapsed: true,
              position: "topleft",
              text: "Search",
              title: "Testing",
            }).addTo(map);
            document.getElementsByClassName("leaflet-control-geocoder-icon")[0].className += " fa fa-search";
            document.getElementsByClassName("leaflet-control-geocoder-icon")[0].title += "Search for a place";
            var baseMaps = {};
            L.control
              .layers(
                baseMaps,
                {
                  'Pemerintahan<br /><table><tr><td style="text-align: center;"><img src="legend/Pemerintahan_11_KantorCamat0.png" /></td><td>Kantor Camat</td></tr><tr><td style="text-align: center;"><img src="legend/Pemerintahan_11_KantorGubernur1.png" /></td><td>Kantor Gubernur</td></tr><tr><td style="text-align: center;"><img src="legend/Pemerintahan_11_KantorLurah2.png" /></td><td>Kantor Lurah</td></tr><tr><td style="text-align: center;"><img src="legend/Pemerintahan_11_KantorPolisi3.png" /></td><td>Kantor Polisi</td></tr><tr><td style="text-align: center;"><img src="legend/Pemerintahan_11_KantorWaliKota4.png" /></td><td>Kantor Wali Kota</td></tr></table>':
                    layer_Pemerintahan_11,
                  'Jalan<br /><table><tr><td style="text-align: center;"><img src="legend/Jalan_10_JalanArteri0.png" /></td><td>Jalan Arteri</td></tr><tr><td style="text-align: center;"><img src="legend/Jalan_10_JalanKolektor1.png" /></td><td>Jalan Kolektor</td></tr><tr><td style="text-align: center;"><img src="legend/Jalan_10_JalanLain2.png" /></td><td>Jalan Lain</td></tr><tr><td style="text-align: center;"><img src="legend/Jalan_10_JalanLokal3.png" /></td><td>Jalan Lokal</td></tr><tr><td style="text-align: center;"><img src="legend/Jalan_10_JalanSetapak4.png" /></td><td>Jalan Setapak</td></tr></table>':
                    layer_Jalan_10,
                  '<img src="legend/Pemukiman_9.png" /> Pemukiman': layer_Pemukiman_9,
                  '<img src="legend/Danau_8.png" /> Danau': layer_Danau_8,
                  '<img src="legend/Bangunan_7.png" /> Bangunan': layer_Bangunan_7,
                  '<img src="legend/Sawah_6.png" /> Sawah': layer_Sawah_6,
                  '<img src="legend/Ladang_5.png" /> Ladang': layer_Ladang_5,
                  '<img src="legend/Kebun_4.png" /> Kebun': layer_Kebun_4,
                  '<img src="legend/Sungai_3.png" /> Sungai': layer_Sungai_3,
                  '<img src="legend/DesaTerdampak_2.png" /> Desa Terdampak': layer_DesaTerdampak_2,
                  '<img src="legend/AdministrasiDesa_1.png" /> Administrasi Desa': layer_AdministrasiDesa_1,
                  "OSM Standard": layer_OSMStandard_0,
                },
                { collapsed: false }
              )
              .addTo(map);
            setBounds();
            var i = 0;
            layer_DesaTerdampak_2.eachLayer(function (layer) {
              var context = {
                feature: layer.feature,
                variables: {},
              };
              layer.bindTooltip(
                layer.feature.properties["desa_2008"] !== null ? String("<div style=\"color: #000000; font-size: 8pt; font-family: 'Times New Roman', sans-serif;\">" + layer.feature.properties["desa_2008"]) + "</div>" : "",
                { permanent: true, offset: [-0, -16], className: "css_DesaTerdampak_2" }
              );
              labels.push(layer);
              totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
            });
            var i = 0;
            layer_Sungai_3.eachLayer(function (layer) {
              var context = {
                feature: layer.feature,
                variables: {},
              };
              layer.bindTooltip(
                layer.feature.properties["Nama"] !== null ? String("<div style=\"color: #000000; font-size: 7pt; font-style: italic; font-family: 'Times New Roman', sans-serif;\">" + layer.feature.properties["Nama"]) + "</div>" : "",
                { permanent: true, offset: [-0, -16], className: "css_Sungai_3" }
              );
              labels.push(layer);
              totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
            });
            var i = 0;
            layer_Pemerintahan_11.eachLayer(function (layer) {
              var context = {
                feature: layer.feature,
                variables: {},
              };
              layer.bindTooltip(layer.feature.properties["REMARK"] !== null ? String("<div style=\"color: #323232; font-size: 7pt; font-family: 'Times New Roman', sans-serif;\">" + layer.feature.properties["REMARK"]) + "</div>" : "", {
                permanent: true,
                offset: [-0, -16],
                className: "css_Pemerintahan_11",
              });
              labels.push(layer);
              totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
            });
            resetLabels([layer_AdministrasiDesa_1, layer_DesaTerdampak_2, layer_Sungai_3, layer_Sawah_6, layer_Pemerintahan_11]);
            map.on("zoomend", function () {
              resetLabels([layer_AdministrasiDesa_1, layer_DesaTerdampak_2, layer_Sungai_3, layer_Sawah_6, layer_Pemerintahan_11]);
            });
            map.on("layeradd", function () {
              resetLabels([layer_AdministrasiDesa_1, layer_DesaTerdampak_2, layer_Sungai_3, layer_Sawah_6, layer_Pemerintahan_11]);
            });
            map.on("layerremove", function () {
              resetLabels([layer_AdministrasiDesa_1, layer_DesaTerdampak_2, layer_Sungai_3, layer_Sawah_6, layer_Pemerintahan_11]);
            });
          </script>

          <div class="col-lg-8">
            <h3>Peta Persebaran Desa Kota Yogyakarta Terdampak Banjir Akibat Luapan Air Sungai</h3>
            <p>
              Terdapat 33 desa yang terdampak dari 45 desa yang ada di kota Yogyakarta, diantaranya sebagai berikut: <br />
              1. Desa Kricak <br />
              2. Desa Karangwaru <br />
              3. Desa Bener <br />
              4. Desa Bumijo <br />
              5. Desa Tegalrejo<br />
              6. Desa Pringgokusuman<br />
              7. Desa Pakuncen<br />
              8. Desa Ngampilan<br />
              9. Desa Wirobrajan<br />
              10. Desa Notoprajan<br />
              11. Desa Patangpuluhan<br />
              12. Desa Gedongkiwo<br />
              13. Desa Cokrodiningratan<br />
              14. Desa Terban<br />
              15. Desa Gowongan<br />
              16. Desa Kotabaru<br />
              17. Desa Tegal Panggung<br />
              18. Desa Suryatmajan<br />
              19. Desa Ngupasan<br />
              20. Desa Purwo Kinanti<br />
              21. Desa Prawirodirjan<br />
              22. Desa Wirogunan<br />
              23. Desa Keparakan<br />
              24. Desa Sorosutan<br />
              25. Desa Brontokusuman<br />
              26. Desa Klitren<br />
              27. Desa Demangan<br />
              28. Desa Baciro<br />
              29. Desa Semaki<br />
              30. Desa Gunung Ketur<br />
              31. Desa Tahunan<br />
              32. Desa Pandeyan<br />
              33. Desa Giwangan
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Service Details Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="home.php" class="logo d-flex align-items-center">
            <span>BanjirInfo.DIY</span>
          </a>
          <p>Stay Informed About Flood with Us!</p>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Terban No. 79<br />
            Yogyakarta, Daerah Istimewa Yogyakarta<br />
            Indonesia <br /><br />
            <strong>Phone:</strong> 021 345 9444<br />
            <strong>Email:</strong> banjirinfodiy@gmail.com<br />
          </p>
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BanjirInfo.DIY</span></strong
        >. All Rights Reserved
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="purecounter/purecounter_vanilla.js"></script>
  <script src="glightbox/js/glightbox.min.js"></script>
  <script src="swiper/swiper-bundle.min.js"></script>
  <script src="aos/aos.js"></script>
  <script src="php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
