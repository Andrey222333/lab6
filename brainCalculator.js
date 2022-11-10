function priority(operation) {
    if (operation == '+' || operation == '-'){
        return 1;
    } else {
        return 2;
    }
}

//Проверка является ли строка str числом
function isNumeric(str) {
    return /^\d+(.\d){0,1}$/.test(str);
}

//Проверка является ли строка str цифрой
function isDigit(str) {
    return /^\d{1}$/.test(str);
}

//Проверка является ли строка str оператором
function isOperation(str) {
    return /^[\+\-\*\/]{1}$/.test(str);
}

function tokenize(str) {
    let tokens = [];
    let lastNumber = '';
    for (char of str) {
        if (isDigit(char) || char == '.'){
            lastNumber += char;
        } else {
            if (lastNumber.length > 0) {
                tokens.push(lastNumber);
                lastNumber = '';
            }
        }
        if (isOperation(char) || char == '(' || char == ')') {
            tokens.push(char);
        }
    }
    if (lastNumber.length > 0) {
        tokens.push(lastNumber);
    }
    return tokens;
}

function compile(str) {
    let out = [];
    let stack = [];
    for (token of tokenize(str)) {
        if (isNumeric(token)) {
            out.push(token);
        } else if (isOperation(token)) {
            while (stack.length > 0 && isOperation(stack[stack.length - 1]) && priority(stack[stack.length - 1]) >= priority(token)){
                out.push(stack.pop());
            }
            stack.push(token);
        } else if (token == '(') {
            stack.push(token);
        } else if (token == ')') {
            while (stack.length > 0 && stack[stack.length - 1] != '(') {
                out.push(stack.pop());
            }
            stack.pop();
        }
    }
    while (stack.length > 0) {
        out.push(stack.pop());
    }
    return out.join(' ');
}

function evaluate(str) {
    let stack = [];
    let lastNumber = ''
    for (char of compile(str)) {
        if (isDigit(char) || char == '.'){
            lastNumber += char;
        } else {
            if (lastNumber.length > 0) {
                stack.push(lastNumber);
                lastNumber = '';
            }
        }
        if (isOperation(char)) {
            if (char == '+'){
                let num2 = stack.pop();
                let num1 = stack.pop();
                let sum = parseFloat(num1) + parseFloat(num2);
                stack.push(sum)
            }
            if (char == '-'){
                let num2 = stack.pop();
                let num1 = stack.pop();
                let rus = parseFloat(num1) - parseFloat(num2);
                stack.push(rus)
            }
            if (char == '*'){
                let num2 = stack.pop();
                let num1 = stack.pop();
                let pr = parseFloat(num1) * parseFloat(num2);
                stack.push(pr)
            }
            if (char == '/') {
                let num2 = stack.pop();
                let num1 = stack.pop();
                let del = parseFloat(num1) / parseFloat(num2);
                stack.push(del)
            }
        }
    }
    return stack.pop();
}

function clickHandler(event) {
    num = event.target.textContent;
    document.formcalc.textcalc.value = document.formcalc.textcalc.value + num;
}

function clean() {
document.formcalc.textcalc.value = "";
}

function result() {
let str = document.formcalc.textcalc.value;
document.formcalc.textcalc.value = evaluate(str);
}

document.querySelector('.container').onclick = (event) => {
    if (!event.target.classList.contains('item_calculator')){
        return;
    }
    if (event.target.classList.contains('clear')) {
        return;
    }
    if (event.target.classList.contains('result')) {
        return;
    }
    clickHandler(event);
}

document.querySelector('.clear').onclick = clean;

document.querySelector('.result').onclick = result;