function switchTheme(select) {
    var themeName = select.value;
    document.documentElement.className = themeName;
}

function printLanguage(select) {
    var value = select.value;

    document.getElementById("resultLanguages").innerHTML = "<div class='alert'>Your favorite programming language is " + value + "</div>";
}

function getFactorial(n) {
    if (n == 0 || n == 1) return 1;

    var result = 1;
    for (var i = 2; i <= n; i++) {
        result *= i;
    }
    return result;
}

function printFactorial() {
    var n = document.getElementById("factNumber").value;
    var result = getFactorial(n);
    console.log(result)

    document.getElementById("resultFactorial").innerHTML = "<div class='alert'>" + n + "! = " + result + "</div>";
}
