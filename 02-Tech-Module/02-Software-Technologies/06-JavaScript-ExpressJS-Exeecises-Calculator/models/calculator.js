function Calculator(leftOperand, rightOperand, operator) {
    this.left = +leftOperand;
    this.right = +rightOperand;
    this.op = operator;

    this.calculate = function () {
        let result = 0;
        switch (this.op) {
            case "+":
                result = this.left + this.right;
                break;
            case "-":
                result = this.left - this.right;
                break;
            case "*":
                result = this.left * this.right;
                break;
            case "/":
                result = this.left / this.right;
                break;
            case "^":
                result = this.left ** this.right;
                break;
            case "1/x":
                result = 1 / this.left;
                break;
            case "n!":
                let fact = 1;
                for (let i = 2; i <= this.left; i++) {
                    fact *= i;
                }
                result = fact;
                break;
            case "sqrt":
                result = Math.sqrt(this.left);
                break;
        }

        return result;
    }
}

module.exports =Calculator;
