
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f3f4f6;
            padding: 40px;
        }

        .table-container {
            max-width: 900px;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        }

        h2 {
            margin-bottom: 15px;
            color: #111827;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: #1f2937;
            color: #ffffff;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            text-transform: uppercase;
            font-size: 14px;
        }

        tbody tr {
            border-bottom: 1px solid #e5e7eb;
        }

        tbody tr:nth-child(even) {
            background-color: #f9fafb;
        }

        tbody tr:hover {
            background-color: #eef2ff;
        }

        .status {
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: bold;
        }

        .success {
            background-color: #dcfce7;
            color: #166534;
        }

        .pending {
            background-color: #fef3c7;
            color: #92400e;
        }
    </style>
</head>
<body>

    <div class="table-container">
        <h2>Liste des utilisateurs</h2>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Rôle</th>
                    <th>Statut</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Jean Dupont</td>
                    <td>jean@email.com</td>
                    <td>Admin</td>
                    <td><span class="status success">Actif</span></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Marie Claire</td>
                    <td>marie@email.com</td>
                    <td>Utilisateur</td>
                    <td><span class="status pending">En attente</span></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Paul Ndzi</td>
                    <td>paul@email.com</td>
                    <td>Éditeur</td>
                    <td><span class="status success">Actif</span></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>

