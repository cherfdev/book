<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    table{
        width: 100%;
        text-align: center;
    }
    th{
        text-align: center;
    }
    button{
        background: #009879;
        color: #fff;
        border: none;
        padding: 5px;
        border-radius: 5px;
        cursor: pointer;
    }
    .styled-table thead tr {
        border-collapse: collapse;
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
    border-radius: 7px 7px 0px 0px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>
<body>
    <h2>The category</h2>
    <table class="styled-table">
        <thead>
            <tr>
                <th>N,C</th>
                <th>Nom de la catégorie</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Fantazy</td>
                <td><button>Supprimer</button></td>
            </tr>
            <tr class="active-row">
                <td>2</td>
                <td>Historique</td>
                <td><button>Supprimer</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Romance</td>
                <td><button>Supprimer</button></td>
            </tr>
            <tr class="active-row">
                <td>4</td>
                <td>Science-Fiction</td>
                <td><button>Supprimer</button></td>
            </tr>
            <tr class="active-row">
                <td>5</td>
                <td>Thriller/Suspense</td>
                <td><button>Supprimer</button></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>