import sys

if len(sys.argv) != 4:
    print("Error: Incorrect number of arguments.")
    sys.exit(1)

input1 = sys.argv[1]
input2 = sys.argv[2]
operation = sys.argv[3]

try:
    num1 = float(input1)
    num2 = float(input2)

    if operation == "add":
        result = num1 + num2
    elif operation == "sub":
        result = num1 - num2
    elif operation == "mul":
        result = num1 * num2
    elif operation == "div":
        if num2 == 0:
            result = "Error: Division by zero is not allowed."
        else:
            result = num1 / num2
    else:
        result = "Error: Invalid operation."

    if isinstance(result, float):  
        if result > 100:
            result *= 2
        elif result < 0:
            result += 50

    print(result)

except Exception as e:
    print("Error:", str(e))