<html>

<head>
    <title>listando tabela</title>
</head>

<body>
    <h1>produtos</h1>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>item 2</th>
                <th>item 3</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($produtos as $p) {
                echo "<tr>" .
                    "<td>" . $p->numcgc . "</td>" .
                    "<td>" . $p->razsoc . "</td>" .
                    "<td>" . $p->endere . "</td>" .
                    "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>