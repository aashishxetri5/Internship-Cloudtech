<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>

<body>
    <div
        style="display: flex; justify-content: center; height: 100px; align-items: center; gap: 5rem; font-size: 1.25rem">
        <div class="" title="Change the number in URL">
            <a href="/table/5" class="">View Table of any number</a>
        </div>
        <div class="" title="Change the name in URL">
            <a href="/user/Aashish" class="">Welcome to CTS</a>
        </div>
        <div class="">
            <a href="/user/dashboard" class="">Route group demo</a>
        </div>
        <div class="">
            <a href="/entry" class="">Voter Entry</a>
        </div>
    </div>

    <div class="">
        @php
            $people = ['Aashish', 'Jason', 'Diplov', 'Mahesh', "Dhan", "Sajjan"];
        @endphp

        <h3>Demonstrating usage of @{$loop} variable.</h3>

        <ul>
            <table border="1" cellpadding="10">
                <thead>
                    <tr>
                        <th>SN.</th>
                        <th>Name</th>
                        <th>Remaining Data</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($people as $person)
                    <tr>
                        <td> {{$loop->index + 1}} </td>
                        <td> {{$person}} </td>
                        <td> {{$loop->remaining}} </td>
                    </tr>                    
                    @endforeach
                </tbody>
            </table>
        </ul>
    </div>
</body>

</html>