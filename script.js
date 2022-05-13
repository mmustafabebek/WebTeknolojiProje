const url = "https://api.openweathermap.org/data/2.5/";
const key = "6202d094d0e1955685524503aa956b11";

const setquery = (e) => {
  if (e.keyCode == "13") getresult(searchbar.value);
};
const getresult = (cityname) => {
  let query = `${url}weather?q=${cityname}&appid=${key}&units=metric&lang=tr`;
  fetch(query)
    .then((weather) => {
      return weather.json();
    })
    .then(displayresult);
};
const displayresult = (result) => {
  let city = document.querySelector(".city");
  city.innerText = `${result.name},${result.sys.country}`;
  let temp = document.querySelector(".temp");
  temp.innerText = `${Math.round(result.main.temp)}°C`;

  let desc = document.querySelector(".desc");
  desc.innerText = result.weather[0].description;

  let minmax = document.querySelector(".minmax");
  minmax.innerText = `${Math.round(result.main.temp_min)}°C/
    ${Math.round(result.main.temp_max)}°C`;
};
const searchbar = document.getElementById("searchbar");
searchbar.addEventListener("keypress", setquery);
