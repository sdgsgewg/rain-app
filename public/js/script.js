const rainBox = document.querySelector(".rain-box");

for (let i = 0; i < 25; i++) {
    const rain = document.createElement("div");
    rain.classList.add("rain");
    rain.style.animationDelay = `${Math.random() * 5}s`;
    // duration between 2s and 5s
    rain.style.animationDuration = `${2 + Math.random() * 3}s`;
    rainBox.appendChild(rain);
}
