

    <h1>Formulário</h1>
    <form id="formulario" action="pages/atv1/envio.php" method="post">
        
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>


        <label for="idade">Idade</label>
        <input type="number" id="idade" name="idade"><br><br>

        <input type="submit" value="Enviar">
    </form>
    <div id='resultado'></div>

    <script>
        $(document).ready(function() {
            $('#formulario').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

                var numero1 = $('#nome').val();
                alert('numero1');
                var numero2 = $('#numero2').val();
                var operacao = $('#operacao').val();

                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: 'calcular.php',
                    data: {
                        numero1: numero1,
                        numero2: numero2,
                        operacao: operacao
                    },
                    success: function(response) {
                        $('#resultado').html('Resultado: ' + response);
                    },
                    error: function(xhr, status, error) {
                        $('#resultado').html('Erro: ' + error);
                    }
                });
            });
        });
    </script>