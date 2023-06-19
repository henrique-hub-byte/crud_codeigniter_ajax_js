<br>
<table class="table">
    <thead class="table-dark">
    <tr>
        <th>ID</th>   
        <th>Username</th>
        <th>Email</th> <!-- Corrigido: fechamento da tag <th> -->
        <th>Mobile</th>
        <th>Place</th>
        <th>Operations</th>
    </tr>
    </thead>
    
    <?php foreach($dados as $dado) { ?> <!-- Abertura da tag PHP corrigida -->
    <tr>
        <td><?php echo $dado->id ?></td>
        <td><?php echo $dado->username ?></td>
        <td><?php echo $dado->email ?></td>
        <td><?php echo $dado->mobile ?></td>
        <td><?php echo $dado->place ?></td>
        <td>
            <button class="btn btn-dark" onclick="updateUser(<?php echo $dado->id ?>)">Update</button> <!-- Corrigido: passagem do ID -->
            <button class="btn btn-danger" onclick="deleteUser(<?php echo $dado->id ?>)">Delete</button> <!-- Corrigido: passagem do ID -->
        </td>
    </tr>
    <?php } ?> <!-- Fechamento da tag PHP corrigida -->
</table>
