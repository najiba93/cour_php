<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exemple de Tableau HTML</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Exemple de Tableau</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Âge</th>
                <th>Ville</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Jean Dupont</td>
                <td>30</td>
                <td>Paris</td>
            </tr>
            <tr>
                <td>Marie Curie</td>
                <td>35</td>
                <td>Lyon</td>
            </tr>
            <tr>
                <td>Paul Martin</td>
                <td>28</td>
                <td>Marseille</td>
            </tr>
        </tbody>
    </table>
</body>
</html>