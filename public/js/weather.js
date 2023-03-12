//Get cityName from Search Input on SearchBtn Click
let cityInput = $("#cityName");
let searchBtn = $("#searchBtn");
cityInput.focus();

// Search Weather Api with cityCoords
async function getCityWeather() {
    let cityValue = 'Philippines';
    // var cityValue = cityInput.val().replace(/\s/g, "+");
    // console.log(cityValue);

    //  Convert cityName to cityCoords
    const cityToCoords = await fetch(
        `https://api.openweathermap.org/geo/1.0/direct?q=${cityValue}&limit=1&appid=ca658b3681c8bcc081b9fb02fedb375d`
    );
    const coords = await cityToCoords.json();
    // console.log(coords);

    let latCurrent = coords[0].lat;
    let lonCurrent = coords[0].lon;
    // console.log(latCurrent);
    // console.log(lonCurrent);

    const getWeather = await fetch(
        `https://api.openweathermap.org/data/2.5/weather?q=${cityValue}&appid=ca658b3681c8bcc081b9fb02fedb375d`
    );

    const weather = await getWeather.json();
    // console.log(weather);

    const getFullWeather = await fetch(
        `https://api.openweathermap.org/data/2.5/onecall?lat=${latCurrent}&lon=${lonCurrent}&appid=ca658b3681c8bcc081b9fb02fedb375d`
    );

    const fullWeather = await getFullWeather.json();
    // console.log(fullWeather);

    //  Update City Name and Date (Weather Based Icon)
    let cityTitle = $("#currCity");
    let currCountry = $("#country");
    let currDate = $("#currDate");
    let weatherImg = $("#wicon");

    cityTitle.text(weather.name);
    currCountry.text(weather.sys.country);

    let today = moment(weather.dt, "X").format("(M/DD/YYYY)");
    currDate.text(today);

    let iconUrl = `https://openweathermap.org/img/wn/${weather.weather[0].icon}.png`;
    weatherImg.attr("src", iconUrl);

    //  Update Temp Wind Humid
    let temp = $("#temp");
    let calcTemp = Math.round(((parseInt(weather.main.temp) - 273.15) * 9) / 5 + 32);

    temp.text(calcTemp);

    let wind = $("#wind");
    wind.text(weather.wind.speed);

    let humid = $("#humid");
    humid.text(weather.main.humidity);

    //  Update UV Index and add bg success warning danger after evaluating

    let uvIndex = $("#uvIndex");
    let uvi = fullWeather.current.uvi;
    if (uvi <= 2) {
        let uvBtn = $('<button class="btn btn-success fs-6 text-white">');
        uvBtn.text(uvi);
        uvIndex.html(uvBtn);
    } else if (uvi >= 3 && uvi <= 5) {
        let uvBtn = $('<button class="btn btn-warning fs-6 text-white">');
        uvBtn.text(uvi);
        uvIndex.html(uvBtn);
    } else if (uvi >= 6) {
        let uvBtn = $('<button class="btn btn-danger fs-6 text-white">');
        uvBtn.text(uvi);
        uvIndex.html(uvBtn);
    }

    //5 Day foreCast

    // Get 5day data
    let fiveDays = fullWeather.daily.splice(0, 5);

    // Make new card for each day in data
    fiveDays.forEach((day, index, arr) => {
        let getDay = $(`#${index}-day`);
        let convertedDay = moment(day.dt, "X").format("dddd, MMMM Do");
        getDay.text(convertedDay);

        let getIcon = $(`#${index}-img`);
        let iconUrl = `https://openweathermap.org/img/wn/${day.weather[0].icon}.png`;

        getIcon.attr("style", "width: 4rem; height: 4rem");
        getIcon.attr("src", iconUrl);

        let getTemp = $(`#${index}-temp`);
        let convertedTemp = Math.round(((parseInt(day.temp.day) - 273.15) * 9) / 5 + 32);
        getTemp.text(convertedTemp);

        let getWind = $(`#${index}-wind`);
        let windSpeed = day.wind_speed;
        getWind.text(windSpeed);

        let getHumid = $(`#${index}-humid`);
        let humid = day.humidity;
        getHumid.text(humid);
    });
}
getCityWeather();
