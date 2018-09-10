<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<div class="container">
    
    <?php
    // put your code here
    echo $acronico;
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>
    <h2>Contato</h2>
    <?php echo form_open('contato/inserir'); ?>
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input class="form-control" id="nome" name="nome" type="text" required/>
    </div>

    <div class="form-group">
        <label for="email">E-mail:</label>
        <input class="form-control" id="name" name="email" type="email" required/>
    </div>


    <input class="btn btn-success" type="submit" value="Salvar"/>
    <input class="btn btn-secondary" type="reset" value="Limpar"/>
    <?php form_close(); ?>
    <p></p>
    <div>
        <table>
            <caption>Contatos</caption>
            <table class="table table-bordered">
                <thead>
                    <tr>

                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Função</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($contatos == false): ?>
                        <tr><td>Nenhum contato encontrado</td></tr>
                    <?php else: ?>
                        <?php foreach ($contatos as $row): ?>
                            <tr>
                                <td><?php echo $row->nome; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td>
                                    <a class="btn btn-success"href="<?php
                                    echo base_url() .
                                    'contato/editar/' . $row->id;
                                    ?>">Editar</a>
                                    |
                                    <a class="btn btn-danger"href="<?php
                                    echo base_url() .
                                    'contato/excluir/' . $row->id;
                                    ?>">Excluir</a>
                                </td>
                            </tr>                  
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
    </div>

    <a class="btn btn-primary" href="<?php echo base_url() . 'home'; ?>">Voltar</a>  
</div>