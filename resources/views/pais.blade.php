<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAISES MUNDIAIS</title>
</head>
<body>
    <h1>PAISES MUNDIAIS</h1>
    <table border="1">
        <tr>
            <td>CODIGO</td>
            <td>NOME</td>
            <td>CONTINENTE</td>
            <td>REGIAO</td>
            <td>AREA TOTAL</td>
            <td>ANO DE INDEPENDENCIA</td>
            <td>POPULACAO</td>
            <td>EXPECTATIVA DE VIDA</td>
            <td>PIB</td>
            <td>NOME LOCAL</td>
            <td>FORMA DE GOVERNO</td>
            <td>HEAD OF STATE</td>
            <td>CAPITAL</td>
</tr>
@foreach($paises as $item)
<tr>
    <th>{{$item->Code}}</th>
    <th>{{$item->Name}}</th>
    <th>{{$item->Continent}}</th>
    <th>{{$item->Region}}</th>
    <th>{{$item->SurfaceArea}}</th>
    <th>{{$item->IndepYear}}</th>
    <th>{{$item->Population}}</th>
    <th>{{$item->LifeExpectancy}}</th>
    <th>{{$item->GNP}}</th>
    <th>{{$item->LocalName}}</th>
    <th>{{$item->GovernmentForm}}</th>
    <th>{{$item->HeadOfState}}</th>
    <th>{{$item->Capital}}</th>
</tr>
@endforeach
</table>
</body>
</html>