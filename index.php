<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <style>
        .calculator{
            background-color: #edecec;
            border: 1px solid;
            padding: 3rem 5rem;
            margin: 3rem auto;
            text-align: center;
            width: fit-content;
        }
        .calculator_title{
            color: darkslateblue;
        }
        .calculator_number, .calculator_operation_label{
            margin-bottom: 1rem;
        }
        .calculator_operation{
            margin-bottom: 2rem;
        }

    </style>
    <title>Calculadora PHP</title>
</head>
<body>
    <div class="calculator">
        <h2 class="calculator_title">Calculadora PHP </h2>
        <form action="ValidateCalc.php" method="post">
            <div class="calculator_number">
                <label for="first_number">
                    Primeiro Número
                    <input type="number" name="first_number" step="0.001" require>
                </label>
                <label for="second_number">
                    Segundo Número:
                    <input type="number" name="second_number" step="0.001" require >
                </label>
            </div>
            <div class="calculator_operation">
                <div class="calculator_operation_label">
                    <label>Operações</label>
                </div>
                <div>
                    <label for="operation">
                        <input type="radio" name="operation" value="+">
                        Somar (+)
                    </label>
                    <label for="operation">
                        <input type="radio" name="operation" value="-">
                        Subtrair (-)
                    </label>
                    <label for="operation">
                        <input type="radio" name="operation" value="/">
                        Dividir (/)
                    </label>
                    <label for="operation">
                        <input type="radio" name="operation" value="*">
                        Multiplicar (X)
                    </label>
                </div>
            </div>

            <input type="submit" value="Calcular">
        </form>
    </div>

</body>
</html>