
$(function() {
    BindMarkers();
    // setInterval(function () { BindMarkers() }, 3000);
    function BindMarkers() {
        window.axios.get('/barangays/all/locations').then(response => {
            let markers = response.data;
            console.log(markers)
            let mapOptions = {
                center: new google.maps.LatLng(10.1000, 124.0999),
                zoom: 12,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            let infoWindow = new google.maps.InfoWindow();
            let map = new google.maps.Map(document.getElementById("map"), mapOptions);
            for (i = 0; i < markers.length; i++) {
                let data = markers[i]
                let myLatlng = new google.maps.LatLng(markers[i].lat, markers[i].long);

                let icon_marker = ''
                if (markers[i].evacuation_center != null) {
                    icon_marker = '../img/e-marker.png'
                }
                if (markers[i].is_flood_prone || markers[i].is_storm_surge) {
                    icon_marker = '../img/t-marker.png'
                }
                let marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: `Brgy. ${markers[i].name}`,
                    icon: icon_marker
                });
                (function (marker, data) {
                    google.maps.event.addListener(marker, "click", function (e) {
                        let info = `<strong style="margin-bottom: 10px; display: block; ">Brgy. ${data.name}</strong>`
                        if (data.evacuation_center != null) {
                            let evacuees_count = data.evacuation_center.evacuee != null ? data.evacuation_center.evacuee.evacuee_infos.length : 0
                            let male_count = data.evacuation_center.evacuee != null ? data.evacuation_center.evacuee.male_count : 0
                            let female_count = data.evacuation_center.evacuee != null ? data.evacuation_center.evacuee.female_count : 0
                            let pwd_count = data.evacuation_center.evacuee != null ? data.evacuation_center.evacuee.pwd_count : 0

                            let is_flood_prone = data.is_flood_prone ? 'Yes' : 'No'
                            let is_storm_surge = data.is_storm_surge ? 'Yes' : 'No'

                            info += `<div class="d-flex justify-content-between border-bottom py-1">Is flood prone? <span class="badge badge-info">${is_flood_prone}</span></div>
                                    <div class="d-flex justify-content-between border-bottom py-1">Has storm surge areas <span class="badge badge-info">${is_storm_surge}</span></div>
                                    <div class="d-flex justify-content-between border-bottom py-1">Evacuation Center Type <span class="badge badge-info">${data.evacuation_center.evacuation_center_type.name}</span></div>
                                    <div class="d-flex justify-content-between border-bottom py-1">Maximum Capacity <span class="badge badge-info">${data.evacuation_center.max_capacity}</span></div>
                                    <div class="d-flex justify-content-between border-bottom py-1">Evacuees <span class="badge badge-${evacuees_count == 0 ? 'danger' : 'info'} mr-1">${evacuees_count}</span></div>
                                    <div class="d-flex justify-content-between border-bottom py-1">Male <span class="badge badge-${male_count == 0 ? 'danger' : 'info'} mr-1">${male_count}</span></div>
                                    <div class="d-flex justify-content-between border-bottom py-1">Femal <span class="badge badge-${female_count == 0 ? 'danger' : 'info'} mr-1">${female_count}</span></div>
                                    <div class="d-flex justify-content-between border-bottom py-1">PWDs <span class="badge badge-${pwd_count == 0 ? 'danger' : 'info'} mr-1">${pwd_count}</span></div>
                                    <div class="d-flex justify-content-between border-bottom py-1">Is Evacuation Center Full? <span class="badge badge-info">${data.evacuation_center.is_evacuation_center_full ? 'Yes' : 'No'}</span></div>`
                        } else {
                            console.log(data)
                            let is_flood_prone = data.is_flood_prone ? 'Yes' : 'No'
                            let is_storm_surge = data.is_storm_surge ? 'Yes' : 'No'
                            info += `<div class="d-flex justify-content-between border-bottom py-1">Is flood prone? <span class="badge badge-info">${is_flood_prone}</span></div>
                                    <div class="d-flex justify-content-between border-bottom py-1">Has storm surge areas <span class="badge badge-info">${is_storm_surge}</span></div>`
                        }
                        infoWindow.setContent(info);
                        infoWindow.open(map, marker);
                    });
                })(marker, data);
            }
        })
    }
})