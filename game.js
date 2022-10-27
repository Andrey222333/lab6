function pow(x, n){
    let s = 1;
    for (i = 0; i < n; i++){
        s = s * x;
    }
    return s;
}

function gcd(a, b){
    let x = -1000;
    let masa = [];
    let masb = [];

    for(i = 1; i<=a; i++){
        if (a%i == 0){
            masa.push(i)
        }
    }

    for(i = 1; i<=b; i++){
        if (b%i == 0){
            masb.push(i)
        }
    }

    for(i = 0; i < masa.length; i++){
        for(j = 0; j < masb.length; j++){
            if (masa[i] == masb[j]){
                if (x < masa[i]){
                    x = masa[i];
                } else {
                    break;
                }
            }
        }
    }

    return x;
}

function miniDigit(x) {
    let s = 10000;
    while (x!=0){
        let ost = x%10;
        if (s>ost){
            s = ost;
        }
        x = Math.floor(x/10);
    }
    return s;
}

function pluralizeRecords(n){
    if (n >= 10 && n <= 20){
        return "Найдено " + n + " записей";
    } else if (n == 0 || n % 10 == 0) {
        return "Найдено " + n + " записей";
    } else if (n % 10 == 1){
        return "Найдена " + n + " запись";
    } else if (n % 10 >= 2 && n % 10 <=4){
        return "Найдено " + n + " записи";
    } else if (n % 10 >= 5) {
        return "Найдено " + n + " записей";
    }

}

function fibb(n) {
    let fibb = [0 , 1];
    let f = 0;
    for(i = 2; i<100; i++){
        f = fibb[i - 2] + fibb[i - 1];
        fibb.push(f)
    }

    return fibb[n];
}

while (true) {
    const result = prompt("Выберите тип функции: 0 - возведение в степень, 1 - НОД двух чисел, 2 - минимимальная цифра в числе, 3 - кол-во записей, 4 - Фиббоначи (для выхода - end)");

    if(result == "end"){
        break
    }

    if (result == "0"){
        const x = prompt("Введите число");
        const n = prompt("Введите степень");
        alert("Результат возведения в степень: " + pow(x, n))
    }

    if (result == "1") {
        const a = prompt("Введите первое число");
        const b = prompt("Введите второе число");
        alert("НОД: " + gcd(a, b))
    }

    if (result == "2") {
        const x = prompt("Введите число");
        alert("Минимимальная цифра в числе: " + miniDigit(x));
    }

    if (result == "3"){
        const n = prompt("Введите число");
        alert(pluralizeRecords(n));
    }

    if (result == "4"){
        const n = prompt("Введите число");
        alert("Число в последовательности: " + fibb(n));
    }
}