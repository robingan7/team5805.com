//unloaded bar
document.addEventListener('readystatechange', () => {
    if (document.readyState == 'complete') {
        document.getElementById('progressBar').style.display = 'none';
    }
});

window.addEventListener('beforeunload', (event) => {
    document.getElementById('progressBar').style.display = 'inline';
});
