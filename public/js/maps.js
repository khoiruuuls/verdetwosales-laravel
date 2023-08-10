function initializeMaps() {
    var mapOptions = {
        credentials:
            "AoNFMMt-p7ltMiWQX4u9yYtS2hzEI7A8StpDFk-7pSu9MwFNek1WeZ4RtXX4DZnm",
        mapTypeId: Microsoft.Maps.MapTypeId.road,
        zoom: 20,
    };

    // Transit Map
    var mapTransit = new Microsoft.Maps.Map(
        document.getElementById("mapTransit"),
        {
            zoom: 14,
            mapOptions,
            center: new Microsoft.Maps.Location(
                -6.2119951428497755,
                106.82871067325904
            ),
        }
    );

    var infobox = new Microsoft.Maps.Infobox(mapTransit.getCenter(), {
        visible: false,
    });
    infobox.setMap(mapTransit);

    var verdeTwoLocation = new Microsoft.Maps.Location(
        -6.213754014528193,
        106.83379547750785
    );
    var verdeTwoPushpin = new Microsoft.Maps.Pushpin(verdeTwoLocation, {
        color: "red",
        title: "Verde Two",
    });

    Microsoft.Maps.Events.addHandler(verdeTwoPushpin, "click", function () {
        infobox.setOptions({
            location: verdeTwoPushpin.getLocation(),
            title: verdeTwoPushpin.getTitle(),
            visible: true,
        });
    });

    mapTransit.entities.push(verdeTwoPushpin);

    var blueDotLocationsTransit = [
        {
            location: new Microsoft.Maps.Location(
                -6.208607798258117,
                106.8214738122154
            ),
            title: "Stasiun Setiabudi Astra",
        },
        {
            location: new Microsoft.Maps.Location(
                -6.217238557956402,
                106.83112711551541
            ),
            title: "Bus Station - Karet",
        },
    ];

    for (var i = 0; i < blueDotLocationsTransit.length; i++) {
        var blueDotPushpinOptions = {
            color: "blue",
            title: blueDotLocationsTransit[i].title,
        };

        var blueDotPushpin = new Microsoft.Maps.Pushpin(
            blueDotLocationsTransit[i].location,
            blueDotPushpinOptions
        );

        mapTransit.entities.push(blueDotPushpin);
    }

    // School Map
    var mapSchool = new Microsoft.Maps.Map(
        document.getElementById("mapSchool"),
        {
            zoom: 14,
            mapOptions,
            center: new Microsoft.Maps.Location(
                -6.221779884476756,
                106.8366386728383
            ),
        }
    );

    infobox = new Microsoft.Maps.Infobox(mapSchool.getCenter(), {
        visible: false,
    });
    infobox.setMap(mapSchool);

    verdeTwoLocation = new Microsoft.Maps.Location(
        -6.213754014528193,
        106.83379547750785
    );
    verdeTwoPushpin = new Microsoft.Maps.Pushpin(verdeTwoLocation, {
        color: "red",
        title: "Verde Two",
    });

    Microsoft.Maps.Events.addHandler(verdeTwoPushpin, "click", function () {
        infobox.setOptions({
            location: verdeTwoPushpin.getLocation(),
            title: verdeTwoPushpin.getTitle(),
            visible: true,
        });
    });

    mapSchool.entities.push(verdeTwoPushpin);

    var blueDotLocationsSchool = [
        {
            location: new Microsoft.Maps.Location(
                -6.2285115215681675,
                106.8271765992199
            ),
            title: "Kinderland Preschool Jakarta",
        },
        {
            location: new Microsoft.Maps.Location(
                -6.2152098150117885,
                106.75212263699508
            ),
            title: "High Scope School",
        },
        {
            location: new Microsoft.Maps.Location(
                -6.2127380268159635,
                106.83533125454451
            ),
            title: "Regality Academy",
        },
        {
            location: new Microsoft.Maps.Location(
                -6.248588876032588,
                106.84354911283543
            ),
            title: "Sampoerna Academy",
        },
        {
            location: new Microsoft.Maps.Location(
                -6.228691658750325,
                106.84450092283254
            ),
            title: "Kinderfield School Building",
        },
    ];

    for (var i = 0; i < blueDotLocationsSchool.length; i++) {
        var blueDotPushpinOptions = {
            color: "blue",
            title: blueDotLocationsSchool[i].title,
        };

        var blueDotPushpin = new Microsoft.Maps.Pushpin(
            blueDotLocationsSchool[i].location,
            blueDotPushpinOptions
        );

        mapSchool.entities.push(blueDotPushpin);
    }

    // Restaurant Map
    var mapRestaurant = new Microsoft.Maps.Map(
        document.getElementById("mapRestaurant"),
        {
            zoom: 14,
            mapOptions,
            center: new Microsoft.Maps.Location(
                -6.217886284635237,
                106.83360457219996
            ),
        }
    );

    infobox = new Microsoft.Maps.Infobox(mapRestaurant.getCenter(), {
        visible: false,
    });
    infobox.setMap(mapRestaurant);

    verdeTwoLocation = new Microsoft.Maps.Location(
        -6.213754014528193,
        106.83379547750785
    );
    verdeTwoPushpin = new Microsoft.Maps.Pushpin(verdeTwoLocation, {
        color: "red",
        title: "Verde Two",
    });

    Microsoft.Maps.Events.addHandler(verdeTwoPushpin, "click", function () {
        infobox.setOptions({
            location: verdeTwoPushpin.getLocation(),
            title: verdeTwoPushpin.getTitle(),
            visible: true,
        });
    });

    mapRestaurant.entities.push(verdeTwoPushpin);

    var blueDotLocationsRestaurant = [
        {
            location: new Microsoft.Maps.Location(
                -6.219149308362462,
                106.83437963702798
            ),
            title: "Bluegrass Bar & Grill",
        },
        {
            location: new Microsoft.Maps.Location(
                -6.223618444117823,
                106.83347849285025
            ),
            title: "Henshin",
        },
    ];

    for (var i = 0; i < blueDotLocationsRestaurant.length; i++) {
        var blueDotPushpinOptions = {
            color: "blue",
            title: blueDotLocationsRestaurant[i].title,
        };

        var blueDotPushpin = new Microsoft.Maps.Pushpin(
            blueDotLocationsRestaurant[i].location,
            blueDotPushpinOptions
        );

        mapRestaurant.entities.push(blueDotPushpin);
    }

    // Mall Map
    var mapMall = new Microsoft.Maps.Map(document.getElementById("mapMall"), {
        mapOptions,
        zoom: 14,
        center: new Microsoft.Maps.Location(
            -6.220925592346402,
            106.83284659763916
        ),
    });

    infobox = new Microsoft.Maps.Infobox(mapMall.getCenter(), {
        visible: false,
    });
    infobox.setMap(mapMall);

    verdeTwoLocation = new Microsoft.Maps.Location(
        -6.213754014528193,
        106.83379547750785
    );
    verdeTwoPushpin = new Microsoft.Maps.Pushpin(verdeTwoLocation, {
        color: "red",
        title: "Verde Two",
    });

    Microsoft.Maps.Events.addHandler(verdeTwoPushpin, "click", function () {
        infobox.setOptions({
            location: verdeTwoPushpin.getLocation(),
            title: verdeTwoPushpin.getTitle(),
            visible: true,
        });
    });

    mapMall.entities.push(verdeTwoPushpin);

    var blueDotLocationsSchool = [
        {
            location: new Microsoft.Maps.Location(
                -6.223662059992712,
                106.84281460532765
            ),
            title: "Kota Kasablanka Mall",
        },
        {
            location: new Microsoft.Maps.Location(
                -6.217525543358893,
                106.83531641672634
            ),
            title: "Epiwalk Mall",
        },
        {
            location: new Microsoft.Maps.Location(
                -6.224139452571927,
                106.82991361667672
            ),
            title: "Kuningan City Mall",
        },
        {
            location: new Microsoft.Maps.Location(
                -6.223718367955637,
                106.82244479573698
            ),
            title: "Lotte Mall Jakarta",
        },
        {
            location: new Microsoft.Maps.Location(
                -6.223377068583116,
                106.82334601792373
            ),
            title: "Ciputra World Jakarta",
        },
    ];

    for (var i = 0; i < blueDotLocationsSchool.length; i++) {
        var blueDotPushpinOptions = {
            color: "blue",
            title: blueDotLocationsSchool[i].title,
        };

        var blueDotPushpin = new Microsoft.Maps.Pushpin(
            blueDotLocationsSchool[i].location,
            blueDotPushpinOptions
        );

        mapMall.entities.push(blueDotPushpin);
    }

    // Add your code for the mall map here...

    // Hospital Map
    var mapHospital = new Microsoft.Maps.Map(
        document.getElementById("mapHospital"),
        {
            mapOptions,
            zoom: 14,
            center: new Microsoft.Maps.Location(
                -6.217470954374492,
                106.8243822953571
            ),
        }
    );

    infobox = new Microsoft.Maps.Infobox(mapHospital.getCenter(), {
        visible: false,
    });
    infobox.setMap(mapHospital);

    verdeTwoLocation = new Microsoft.Maps.Location(
        -6.213754014528193,
        106.83379547750785
    );
    verdeTwoPushpin = new Microsoft.Maps.Pushpin(verdeTwoLocation, {
        color: "red",
        title: "Verde Two",
    });

    Microsoft.Maps.Events.addHandler(verdeTwoPushpin, "click", function () {
        infobox.setOptions({
            location: verdeTwoPushpin.getLocation(),
            title: verdeTwoPushpin.getTitle(),
            visible: true,
        });
    });

    mapHospital.entities.push(verdeTwoPushpin);

    var blueDotLocationsSchool = [
        {
            location: new Microsoft.Maps.Location(
                -6.218401341919674,
                106.81752706297854
            ),
            title: "Siloam Hospitals Semanggi",
        },
        {
            location: new Microsoft.Maps.Location(
                -6.2197003242099225,
                106.83241706189024
            ),
            title: "MMC Hospital",
        },
        {
            location: new Microsoft.Maps.Location(
                -6.21852114726561,
                106.83146034211755
            ),
            title: "Mayapada Hospital Kuningan",
        },
        {
            location: new Microsoft.Maps.Location(
                -6.2168310102639515,
                106.81616400624608
            ),
            title: "Jakarta Hospital",
        },
    ];

    for (var i = 0; i < blueDotLocationsSchool.length; i++) {
        var blueDotPushpinOptions = {
            color: "blue",
            title: blueDotLocationsSchool[i].title,
        };

        var blueDotPushpin = new Microsoft.Maps.Pushpin(
            blueDotLocationsSchool[i].location,
            blueDotPushpinOptions
        );

        mapHospital.entities.push(blueDotPushpin);
    }
}

// Call the initializeMaps function when the window is fully loaded
window.onload = initializeMaps;

function showMap(mapId) {
    // Hide all map elements
    var maps = document.getElementsByClassName("map");
    for (var i = 0; i < maps.length; i++) {
        maps[i].style.display = "none";
        maps[i].classList.remove("active"); // Remove "active" class from all elements
    }

    // Show the selected map element
    var selectedMap = document.getElementById(mapId);
    if (selectedMap) {
        selectedMap.style.display = "block";
        selectedMap.classList.add("active"); // Add "active" class to the selected element
        displayTextOnMap(mapId);
    }
}

function displayTextOnMap(mapId) {
    var textHead = "";
    var textToDisplay = "";

    switch (mapId) {
        case "mapTransit":
            textHead = "Transit";
            textToDisplay =
                "Own the advantage of living in proximity to Jakarta's celebrated MRT line, only two stops away from Bunderan HI and with convenient access to busways and the main arteries of Rasuna Said and Prof Dr Satrio.";
            break;
        case "mapSchool":
            textHead = "School";
            textToDisplay =
                "Respected educational institutions are within a short driving distance, enhancing the value of this distinguished locale.";
            break;
        case "mapRestaurant":
            textHead = "Restaurant";
            textToDisplay =
                "Jakarta's renowned culinary scene is a melting pot of international and local cuisines, and Verde Two is nestled in the perfect neighborhood for a fulfilling gastronomic journey.";
            break;
        case "mapMall":
            textHead = "Mall";
            textToDisplay =
                "Notable shopping institutions such as Grand Indonesia and Plaza Indonesia are short drives away, while Epicentrum Walk Jakarta is within walking distance.";
            break;
        case "mapHospital":
            textHead = "Hospital";
            textToDisplay =
                "Living in strategic proximity to prominent healthcare institutions provides unmatched peace of mind with convenient access to world-class medical facilities.";
            break;
        default:
            textToDisplay = "";
            break;
    }

    var mapInfoText = document.getElementById("mapInfoText");
    mapInfoText.innerText = textToDisplay;
    var mapHeadText = document.getElementById("mapHeadText");
    mapHeadText.innerText = textHead;
}

// Call the showMap function to display the Transit Map text initially
showMap("mapTransit");

document.getElementById("directionsBtn").addEventListener("click", function () {
    // Check if Geolocation is available in the user's browser
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(
            function (position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                var destination = "Verde Two Apartemen";
                var url =
                    "https://www.google.com/maps/dir/?api=1&origin=" +
                    latitude +
                    "," +
                    longitude +
                    "&destination=" +
                    encodeURIComponent(destination);

                window.open(url, "_blank");
            },
            function (error) {
                console.log("Error getting the user's location:", error);
                alert(
                    "Error getting your location. Please ensure you have allowed location access and try again."
                );
            }
        );
    } else {
        alert(
            "Geolocation is not available in your browser. You can manually enter your starting location."
        );
    }
});
