function updateLiveCounter() {
    // 20 se 100 ke beech random traffic
    let randomTraffic = Math.floor(Math.random() * (100 - 20 + 1)) + 20;
    document.getElementById('live-count').innerText = randomTraffic;
}

// Har 4 seconds mein update hoga
setInterval(updateLiveCounter, 4000);