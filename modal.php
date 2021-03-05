<?php
require_once('./backend/connection.php');
?>

<link rel="stylesheet" href="css/components/modal.css">
<div class="modal fade" id="modal-contato" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Fale Conosco</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" >
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="email@email.com">
                        <div id="emailHelp" class="form-text">Nós nunca compartilharemos seus dados com ninguém.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(xx) xxxxx-xxxx">
                    </div>
                    <div class="form-group">
                        <label for="textarea">Mensagem</label>
                        <textarea class="form-control" name="mensagem" placeholder="Digite sua mensagem aqui" id="textarea"
                            style="height: 100px"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn cancel" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn button-send">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['mensagem'])){
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO contato (email, telefone, mensagem) VALUES ('$email','$telefone','$mensagem')";
    $result = $conn->query($sql);

                if ($result) {
                    echo "<script>alert('Mensagem enviada com sucesso!');location.href='index.php'</script>";
                } else {
                    echo "<script>alert('ERRO!! Mensagem não enviada!')</script>";
                    exit();
                }
}
?>